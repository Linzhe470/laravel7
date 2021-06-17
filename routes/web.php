<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//AUTH AUTH AUTH AUTH AUTH AUTH AUTH AUTH AUTH AUTH AUTH


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

//CONTACTUS CONTACTUS CONTACTUS CONTACTUS CONTACTUS CONTACTUS 
Route::post('/contactus/store','ContactusController@store');

//NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS 

// 增刪查改


// 前台畫面
Route::get('news/list','NewsController@list')->name('frontlist');
Route::prefix('news')->middleware('auth')->group(function(){
    // 產生畫面
    Route::get('/','NewsController@newspage');
    
    // 新增資料
    Route::get('/create','NewsController@create')->name('docreate');
    // 儲存資料
    Route::post('/store','NewsController@store');// 儲存資料!!使用POST
    
    // 修改資料
    Route::get('/edit/{id}','NewsController@edit'); // 取得該筆資料
    // 更新資料
    Route::post('/update/{id}','NewsController@update');// 儲存資料!!使用POST
    
    
    // 刪除資料
    Route::get('/delete/{id}','NewsController@delete')->name('deletedata');
    // route('deletedata',['id'=>1])
    // 需指定id變數 才可使用
});


Route::resource('fronts', 'FrontController');

Route::get('news/createpush','NewsController@createpush')->name('birthchild');
Route::get('news/make/{title}/{view}','NewsController@make');


// 指向ID
Route::get('news/updatepush/{id}','NewsController@update');
Route::get('news/detail/{id}','NewsController@innerdetail');
Route::get('news/detail','NewsController@detail');
// Route::get('news/content', function () {
//     return view('news/news_content_page');
// });


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// ->name('home');命名路由名稱
// 跳轉時 以return redirect()->route('deletedata');方式執行該路由

// Route::resources([
//     'photos' => 'PhotoController',
//     'posts' => 'PostController',
// ]);
// Route::resource('news', 'NewsResourceController');

//購物車 👇
Route::prefix('shopping_cart')->group(function(){

    // 新增
    Route::post('/add','ShoppingCartController@add');
    // DD檢視
    Route::get('/content','ShoppingCartController@content');
    // 看看購物車
    Route::get('/list','ShoppingCartController@list');
    // 刪除購物車項目
    Route::post('/delete','ShoppingCartController@delete');
    // 更新購物車
    Route::post('/update','ShoppingCartController@update');
    // 貨款資訊
    Route::get('/payment','ShoppingCartController@payment');
    // 
    Route::post('/payment/check', 'ShoppingCartController@paymentCheck');
    // 
    Route::post('/information/check', 'ShoppingCartController@informationCheck');

    
});

// 購物車金流👇
Route::prefix('cart_ecpay')->group(function(){
    //當消費者付款完成後，綠界會將付款結果參數以幕後(Server POST)回傳到該網址。
    Route::post('notify', 'ShoppingCartController@notifyUrl')->name('notify');

    //付款完成後，綠界會將付款結果參數以幕前(Client POST)回傳到該網址
    Route::post('return', 'ShoppingCartController@returnUrl')->name('return');
});




// 晴天筆記_新增圖片👇

Route::post('summernote/store','ToolBoxController@summernoteStore');
    


// 刪除其他圖片👇
Route::post('/product/deleteimg','ProductResourceController@deleteimg');


Route::get('/realindex/{typeId?}','ProductResourceController@realindex');

Route::resource('product', 'ProductResourceController');


Route::get('/birth','ProductResourceController@birth')->name('pd_birth');
Route::get('/listss','ProductResourceController@list')->name('listss');
Route::resource('productype', 'ProductypeResourceController');
Route::get('/birthtype','ProductypeResourceController@birth')->name('pdtp_birth');

// 解決網址前綴問題
// src="{{route('home')}}"也可執行


Route::get('test', function () {
    $data = 123;
    $data2 = 1123;
    $data3 = 11123;
    $data4 = 12223;
    // 方法1
    // return view('test',['abc'=>$data]);
    // 可重新定義組成資料之變數
    // 方法2
    return view('test', compact('data', 'data2', 'data3', 'data4'));
});

// Route::get('user/{name?}', function ($name = '123') {
//     return $name;
// });

Route::get('lesson1', function () {
    // $變數名稱// = 指派運算子// gettype ( mixed $value ) : string
    // dd() 顯示出來結果// 字串 string// 整數 integer// 
    // 浮點 double// 布林 boolean// 陣列 arry
    // $data = 'abc';
    $arry1 = ['a' => 123, 'b' => 456, 'c' => true];
    // dd(gettype($data));
    $num1 = 1;
    $num2 = 2;
    // 指派運算子 = += -=// 算術運算子 + - * / ** %
    // 字串運算子 . //為字串相加用(非+)
    // 比較運算子 > < >= <= == != <>
    // 邏輯運算子 && || ! and or xor
    //           A B XOR(互斥或閘)
    //           0 0 0
    //           0 1 1
    //           1 0 1
    //           1 1 0
    // OR 或 AND及 NOT反 X斥
    dd(
        $num1 . $num2,
        $num1 + $num2,
        $arry1,
        $arry1['a'],
        gettype($arry1),
        gettype($arry1['c']),
        gettype($num1),

    );

    // $arry1['a'] 取得arry1中a的值
    // if(){}
    // elseif(){}
    // else(){}
    return 'hellow world';
});

