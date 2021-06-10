<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    // 此處為了方便檢視$tmpData (可不寫
    public $tmpData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputData)
    {
        // 此處的$inputData 是從發送信件請求的地方帶入的資料
        // $this->tmpData 是暫時存方資料的地方
        $this->tmpData =  $inputData;
    }
    // class 類似方選 __construct(先執行此動作並馬上執行)需要再叫他 預設會跑的東西 放置預設要做的事 好像很難
    // 一定要用這個東西


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->markdown('emails.orders.shipped');
        // return $this->from('linzhe470@gmail.com')->view('emails.orders.shipped');

        // 此處的$mailData 是要傳送到view的變數名稱
        // $this->tmpData 是剛剛存放的資料
        
        $mailData = $this->tmpData;
        return $this->view('emails.orders.shipped',compact('mailData'))
        ->subject('親愛的您好,已收到您的回覆');
        // return $this->from('如果.env MAIL_FROM_ADDRESS=linzhe470@gmail.comu.有寫 就不用打')
        // ->view('emails.orders.shipped');
    }
}
