<?php

namespace App\Http\Controllers;

use App\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    //
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
                    'img' => $getProduct->img,'type' => $getProduct->gotProductType->name), //自定義參數
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
        return view('product/cart_vol_01',compact('cartCollection'));
    
    }

    // 更新購物車

    public function update(Request $request)
    {
        // 
            \Cart::update($request->productId ,array(
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
        if(\Cart::isEmpty()){

            return redirect('/realindex')->with('message','購物車空空!請先加入商品再繼續結帳~');
        }else{
            
            $cartCollection = \Cart::getContent();
            return view('product/cart_vol_02',compact('cartCollection'));
        }
            

    }

}
