<?php

namespace App\Http\Controllers;


use App\Order;
use App\Product;
use App\OrderDetail;
use App\OrderStatus;
use App\ShippingStatus;
// use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use TsaiYiHua\ECPay\Checkout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use TsaiYiHua\ECPay\Services\StringService;
use TsaiYiHua\ECPay\Collections\CheckoutResponseCollection;




class ShoppingCartController extends Controller
{
    //
    public function __construct(Checkout $checkout,CheckoutResponseCollection $checkoutResponse)
    {
        $this->checkout = $checkout;
        $this->checkoutResponse = $checkoutResponse;
    }


    public function add(Request $request)
    {
        $dataall = $request->all();
        $dataid = $request->productId;
        $getProduct = Product::find($dataid);
        // $getProductName = Product::find($dataid)->name;
        // dd($dataall,$dataid,$getProduct,$getProduct->name,$getProduct->price);
        // add the product to cart
        if ($request) {
            # code...
            \Cart::add(array(  //記得Cart前方加/
                'id' => $getProduct->id, //商品id必須唯一
                'name' => $getProduct->name, //商品名稱
                'price' => $getProduct->price, //商品價格
                'quantity' => 1, //商品數量
                'attributes' => array(
                    'img' => $getProduct->img, 'type' => $getProduct->gotProductType->name
                ), //自定義參數
                // 'associatedModel' => $Product 
            ));
            return 'success';
        };
        return 'fail';
    }

    // 顯示清單
    public function content()
    {
        // view the cart items
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
    }

    // 顯示購物車
    public function list()
    {
        // view the cart items q9 排序方式 ->sortBy(
        $cartCollection = \Cart::getContent()->sortBy('id');
        return view('product/cart_vol_01', compact('cartCollection'));
    }


    // 刪除項目
    public function delete(Request $request)
    {
        if($request->productId){
            \Cart::remove($request->productId);
            return 'success';
        }else{
            return 'fail';
        }
    }

    // 更新購物車

    public function update(Request $request)
    {
        // 
        \Cart::update($request->productId, array(
            'quantity' => $request->qty, //商品數量
        ));

        $number = \Cart::get($request->productId)->quantity;
        // dd($request->productId,$request->qty);
        return $number;
    }

    public function payment()
    {
        // 清空 跳轉警示
        // \Cart::clear();
        // 可以包成方炫使用/存入陣列中
        if (\Cart::isEmpty()) {
            //
            return redirect('/realindex')
                ->with('message', '購物車空空!請先加入商品再繼續結帳~')
                ->with('icon', 'warning')
                ->with('title', '跳轉失敗');
        } else {

            $cartCollection = \Cart::getContent();
            return view('product/cart_vol_02', compact('cartCollection'));
        }
    }

    
//暫存付款及運送方式
    
    
    public function paymentcheck(Request $request)
    {
        Session::put('payment', $request->payment);
        Session::put('shipment', $request->shipment);
        
        return view('product/cart_vol_03');
    }
    
//建立購物資料



    public function informationCheck(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();

        $shipping_status = ShippingStatus::orderBy('sort','asc')->first();
        $order_status = OrderStatus::orderBy('sort','asc')->first();
        $order = Order::create([
            'user_id' => $user->id,
            'order_no' => 'DP' . time() . rand(1, 9999),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'county' => $request->county,
            'district' => $request->district,
            'zipcode' => $request->zipcode,
            'address' => $request->address,

            'price' =>9999999,

            'pay_type' => Session::get('payment'),
            'shipping' =>  Session::get('shipment'),

            'shipping_fee' =>9999999,

            'shipping_status_id' =>  $shipping_status->id,
            'order_status_id' =>  $order_status->id,
            'remark' => '',
        ]);

        

        $subPrice = 0;
        $cartDatas = \Cart::getContent();
        $items=[];

        foreach ($cartDatas as $data ){
            $productId = $data ->id;
            $product = Product::find($productId);
            $subPrice += $data->quantity * $product->price;
             OrderDetail::create([
                'order_id'=>$order->id,
                'product_id'=>$product->id,
                'qty'=>$data->quantity,
                'old'=>$product->tojson(),
            ]);

            $new_ary = [
                'name' => $product->name,
                'qty' => $data->quantity,
                'price' => $product->price,
                'unit' => '個'
            ];
            array_push($items, $new_ary);


        }

        $fee = $subPrice > 15000 ? 0 : 6000;

        $order->update([
            'shipping_fee'=>$fee,
            'price'=>$subPrice + $fee,

        ]);

        // dd($request->all());
        //第三方支付
        $formData = [
            'UserId' => $order->user_id, // 用戶ID , Optional
            'ItemDescription' => '產品簡介',
            'Items' => $items,
            'OrderId' => $order->order_no,
            'TotalAmount' => '10',
            // 'TotalAmount' => $order->price,
            'PaymentMethod' => 'Credit', // ALL, Credit, ATM, WebATM
        ];

        //清空購物車
        \Cart::clear();
        
        return $this->checkout->setNotifyUrl(route('notify'))->setReturnUrl(route('return'))->setPostData($formData)->send();
    }

    public function notifyUrl(Request $request)
    {
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            return '1|OK';
        } else {
            return '0|FAIL';
        }
    }

    public function returnUrl(Request $request)
    {
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            if (!empty($request->input('redirect'))) {
                return redirect($request->input('redirect'));
            } else {

                //付款完成，下面接下來要將購物車訂單狀態改為已付款
                //目前是顯示所有資料將其DD出來
                dd($this->checkoutResponse->collectResponse($serverPost));
            }
        }
    }
}
