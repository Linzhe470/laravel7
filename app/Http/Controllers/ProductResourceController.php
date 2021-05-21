<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImg;
use App\Productype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class ProductResourceController extends Controller
{
    //
    public function realindex(Request $requeat)
    {
        if($requeat->typeId){
            $productData = Product::with('gotProductType')->where('type_id',$requeat->typeId)->get();

        }
        else{

            $productData = Product::with('gotProductType')->get();
        }
        $productTypes = Productype::get();
        return view('product/product_index_page', compact('productData','productTypes'));
    }


    public function birth()
    {
        Product::create([
            'type_id' => '1',
            'name' => 'aaa',
            'img' => 'https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg&sizetype=2',
            'description' => 'aaaa',
            'price' => 400
        ]);
        return redirect('/listss');
    }


    public function list()
    {
        $productData = Product::with('gotProductType','gotProductImg')->get();
        // dd($productData[0]->gotProductImg[0]);
        return view('product/product_list_page', compact('productData'));
    }

    public function index()
    {
        $productData = Product::get();
        return view('product/product_index_page', compact('productData'));
    }

    public function store(Request $request)
    {
        $requsetData = $request->all();


        if($request->hasFile('img')) {
            $file = $request->file('img');
            // dd($requsetData,$file);
            // $path = $this->fileUpload($file,'article');
            $path = Storage::disk('myfile')->putFile('product',$file);
            $requsetData['img'] =Storage::disk('myfile')->url($path);
            // $publicPath = Storage::disk('myfile')->url($path);
            // $requsetData['img'] = $publicPath; 
            // $requsetData['img']檔案資料鍵 = Storage::disk('myfile')->url($path)值;
            // $requsetData['img'] 等同 $requsetData->img 等同 $requsetData->file('img');
            // $request包含傳入之資料 包含COOKIES,INPUT的資料等 因此為定值 不可更動
            // 因此 以變數複印$request資料(INPUT的)出來 可進行修整 建立資料至資料庫 以前述資料
        }
    
        $product = Product::create($requsetData);

        $imgs = $request->file('imgs');

        foreach($imgs ?? [] as $img){
            $path = Storage::disk('myfile')->putFile('product',$img);
            $publicPath =Storage::disk('myfile')->url($path);
            ProductImg::create([
                'product_id'=> $product->id,
                'img'=> $publicPath
            ]);
        }
    
        return redirect('/listss');
    }

    public function create()
    {
        $productTypes = Productype::get();
        return view('product/product_create_page',compact('productTypes'));
    }


    public function show(Request $requeat)
    {
        if($requeat->typeId){
            $productData = Product::where('type_id',$requeat->typeId)->get();

        }
        else{

            $productData = Product::get();
        }
        $productTypes = Productype::get();
        return view('product/product_index_page', compact('productData','productTypes'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $requsetData = $request->all();
        if($request->hasFile('img')) {

            File::delete(public_path().$product->img);
            $file = $request->file('img');
            $path = Storage::disk('myfile')->putFile('product',$file);
            $requsetData['img'] =Storage::disk('myfile')->url($path);

        }
    
        $product->update($requsetData);

        $imgs = $request->file('imgs');
        if($request->hasFile('imgs')) {
            foreach($imgs as $img){
                $path = Storage::disk('myfile')->putFile('product',$img);
                $publicPath =Storage::disk('myfile')->url($path);
                ProductImg::create([
                    'product_id'=> $id,
                    'img'=> $publicPath
                ]);
            }
            
        }
        return redirect('/listss');
    }

    public function destroy($id)
    {
        $product = Product::with('gotProductImg')->find($id);
        File::delete(public_path().$product->img);
        // 刪除圖片群資料庫資料

        foreach($product->gotProductImg ?? [] as $img){
            File::delete(public_path().$img->img);
            $img->delete();
        }

        $product->delete();
        return redirect('/listss');
    }
    
    public function deleteimg(Request $request)
    {
        $img = ProductImg::find($request->id);
        
        // dd($img, $request->id);
        File::delete(public_path().$img->img);
        $img->delete();
        return 'success';
        // return response('success', 200);
    }

    public function edit($id)
    {
        $productData =  Product::with('gotProductType','gotProductImg')->find($id);
        $productTypes = Productype::get();
        $productImgs = ProductImg::get();
        // dd($productData->gotProductImg);
        return view('product/product_edit_page', compact('productData','productTypes','productImgs'));

    }

        
    private function fileUpload($file,$dir){
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if( ! is_dir('upload/')){
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if ( ! is_dir('upload/'.$dir)) {
            mkdir('upload/'.$dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time().md5(rand(100, 200))).'.'.$extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path().'/upload/'.$dir.'/'.$filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/'.$dir.'/'.$filename;
    }



}
 