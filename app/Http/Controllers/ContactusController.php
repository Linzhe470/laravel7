<?php

namespace App\Http\Controllers;

use App\Contactus;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Support\Facades\Validator;

class ContactusController extends Controller
{
    //
    public function store(ContactUsRequest $request)
    {
        // dd($request->all());
        // 建立驗證器(傳入的資料)

        // 1. 簡單方法validate

        // $request->validate([
        //     'g-recaptcha-response' => 'recaptcha',
        // ]);
        
        // 2. 自訂方法Validator(可自訂,每次使用每次定義 使用預設Request $request)
        
        // $validator = Validator::make($request->all(), [
        //     'g-recaptcha-response' => 'recaptcha',
        // ]);
        
        // check if validator fails
        // if($validator->fails()) {
        //     $errors = $validator->errors();
            // dd($errors);
            // return redirect('/index#g-recaptcha')
            // 可以告訴你為什麼錯
            // ->withErrors($validator)
            // 回傳你曾經帶入的資料
            // ->withInput();
        // }

        // 3.自定義Request(此次命名為ContactUsRequest)更改

        $conactUs = Contactus::create($request->all());

        // Contactus::create([
        //     'name' => $request->name,
        //     'tel' => $request->tel,
        //     'email' => $request->email,
        //     'title' => $request->title,
        //     'message' => $request->message,
        // ]);

        $mailData =[
            'subject'=>'您已送出聯絡表',
            'main'=>'請回到後台檢視完整記錄',
            'message' => $request->message,
        ];
        
        // 寄給to(XXX)
        // Mail::to('linzhe470@gmail.com')
        Mail::to($request->email)
        // Mail::to('silentlyautomail@gmail.com')
        ->send(new OrderShipped($mailData));

        return 'success';

    }
    
}
