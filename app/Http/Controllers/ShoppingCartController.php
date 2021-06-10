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
        // view the cart items
        $cartCollection = \Cart::getContent();
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

    // 更新購物車
    
    public function delete(Request $request)
    {
        // 
        $targetProduct = \Cart::get($request->productId);
        \Cart::get($request->productId)->clear();
        // dd($request->productId,$request->qty);
        return $targetProduct;
    }
    
    // 購物車付款方式

    public function payment(Request $request)
    {
        // 
        if(\Cart::isEmpty())
        {
            return redirect('/realindex')
            ->with('title','吱吱喳喳')
            ->with('message','嘻嘻哈哈');
        }else{

            return redirect('/');
        }
        
    }



}
