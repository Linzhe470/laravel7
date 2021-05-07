<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact_us','ContractUsController@store');

// 產生畫面
Route::get('news','NewsController@newspage');

// 新增資料
Route::get('news/create','NewsController@create');
// 儲存資料
Route::post('news/store','NewsController@store');// 儲存資料!!使用POST


// 修改資料
Route::get('news/edit/{id}','NewsController@edit'); // 取得該筆資料
// 更新資料
Route::post('news/update/{id}','NewsController@update');// 儲存資料!!使用POST


// 刪除資料
Route::get('news/delete/{id}','NewsController@delete');














Route::get('news/createpush','NewsController@creatpush');
Route::get('news/make/{title}/{view}','NewsController@make');


// 指向ID
Route::get('news/updatepush/{id}','NewsController@update');


Route::get('news/detail/{id}','NewsController@innerdetail');


Route::get('news/detail','NewsController@detail');





// Route::get('news/content', function () {
//     return view('news/news_content_page');
// });





















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
    // $變數名稱
    // = 指派運算子

    // gettype ( mixed $value ) : string
    // dd() 顯示出來結果

    // 字串 string
    // 整數 integer
    // 浮點 double
    // 布林 boolean
    // 陣列 arry
    // $data = 'abc';
    $arry1 = ['a' => 123, 'b' => 456, 'c' => true];
    // dd(gettype($data));
    $num1 = 1;
    $num2 = 2;
    // 指派運算子 = += -=
    // 算術運算子 + - * / ** %
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
