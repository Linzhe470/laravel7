<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// DB 直接拿東西 安全性低


class NewsController extends Controller
{
    public function list()
    {

        $newsData = News::get();
        // dd($newsData[0]->title);
        return view('news.news_list_unedit_page', compact('newsData'));


        // $newsData = DB::table('news')->get();
        // return view('news.news_list_page',compact('newsData'));
    }
    public function newspage()
    {

        $newsData = News::get();
        // dd($newsData[0]->title);
        return view('news.news_list_page', compact('newsData'));


        // $newsData = DB::table('news')->get();
        // return view('news.news_list_page',compact('newsData'));
    }

    public function create()
    {
        return view('news.create_news');
    }


    public function store(Request $request)
    {
        // 取資料
        // Request $request取得輸入的資料

        // dd($request->all());
        // dd($request->title);
        // 儲存資料至資料庫

        News::create([
            'title' => $request->title,
            'date' => $request->date,
            'img' => 'https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg&sizetype=2',
            'content' => $request->content,
            'view' => 0
        ]);
        // 返回最新消息列表頁
        return redirect('news');

        // return view('news.create_news',compact('newsData'));
    }


    public function edit($id)
    {
        $newsData =  News::find($id);
        // 用ID去找
        // $newsData =  News::where('id',$id);
        // dd( $newsData);
        return view('news.edit_news', compact('newsData'));
    }


    public function update($id, Request $request)
    {
        // find($id) 專門取id之物件用 不用於其他地方
        // News::find($id)->update($request->all());


        // News::where('id', $id)->update($request->all());錯誤

        // where('資料標題', 符合資料標題名稱條件) 將取得資料包至陣列中，可唯一值以上
        // where()所取出陣列，以get()取得陣列內所有資料，以first()取得陣列內首筆資料

        News::where('id', $id)->first()->update($request->all());
        // News::where('id', $id)->get()->update($request->all());
        
        // News::where('id', $id)->update([
        //     'title' => $request->title,
        //     'date' => $request->date,
        //     'img' => 'https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg&sizetype=2',
        //     'content' => $request->content,
        //     'view' => 0
        // ]);
  
        return redirect()->route('home');
        // return route('news');
    }


    public function delete($id)
    {
        News::where('id', $id)->delete();
        // DB::table('news')
        // ->where('id',$id)
        // ->delete();
        return redirect()->route('home');
    }



















    public function createpush()
    {
        News::create([
            'title' => '自然產生',
            'date' => '2020-05-05',
            'img' => 'https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg&sizetype=2',
            'content' => '自然產生自然產生自然產生自然產生自然產生',
            'view' => 4

        ]);
        return redirect()->route('home');
        
        // DB::table('news')->insert([

        // 'title' => 'London to Paris',
        // 'date' => '2020-05-05',
        // 'img' => 'https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg&sizetype=2',
        // 'content' => 'weinfwejfiwjeiofjwioejf',
        // 'view' => 4

        //     ]);

    }

    public function make($title, $view)
    {
        News::create([
            // DB::table('news')->insert([


            'title' => $title,
            'date' => '2020-05-05',
            'img' => 'https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg&sizetype=2',
            'content' => 'weinfwejfiwjeiofjwioejf',
            'view' => $view + 100

        ]);
    }

    public function updatepush($id)
    {
        News::where('id', $id)->update(['content' =>
        // DB::table('news')
        // ->where('id',$id)
        // ->update(['content'=>
        '為推動「小鎮漫遊」，交通部觀光局於108年配合「小鎮漫遊年」遴選40個特色小鎮，109年延續小鎮熱潮，
        配合「脊梁山脈旅遊年」遴選出30個經典/山城小鎮，今（110）年配合「自行車旅遊年」遴選出30個經典/
        自行車小鎮，邀請大家慢騎自行車小鎮，領略小鎮在地之美。

        交通部觀光局張錫聰局長表示，為推動小鎮漫遊年行銷主軸，今年完成百大經典小鎮的最後一塊拼圖，
        透過整合小鎮觀光資源，打造「百大經典小鎮護照」並辦理電子集章活動，集章點遍布各小鎮景點、
        借問站與特色店家，並有特約店家合作提供集章活動專屬優惠，讓民眾跟著護照集章就能體驗小鎮好玩、
        好吃的地方！另外讓旅客遍訪小鎮之餘，還能參加抽獎，最高可抽現金5萬元，今年更加碼小鎮人氣榜，
        鼓勵大家多次造訪小鎮，成為榜上有名的小鎮高手，將超值好禮帶回家！
        
        「百大經典小鎮護照」將於5月5日正式發行，於全臺各旅遊服務中心及交通部觀光局所屬國家風景區管理處
        皆可免費索取；另為響應環保，小鎮護照也提供電子檔下載，民眾可至小鎮活動網站下載使用。另備受好評
        的電子集章活動也將於5月5日起至11月5日止登場，只要至小鎮掃描集滿5個不同小鎮章，就有機會獲得
        Air pods、優質旅宿住宿券等多項好禮，集滿任30個小鎮章，還有機會抽中萬元旅行單車、5萬元現金等大獎！
        此外，今年加碼設置的小鎮高手榜，將公布遊客造訪小鎮次數，前30名就有機會抽中LINE POINTS，邀請大家
        一訪再訪，挖掘專屬自己的小鎮新玩法！
        
        另外，交通部觀光局除了於5月5日台灣自行車日在八里辦理「踩動臺灣，多元暢遊」活動，結合「百大經典小鎮
        護照」設置「與喔熊騎環島」展攤活動與喔熊玩遊戲外，也評選出30條自行車多元化遊程，遊程囊括全臺多元
        風情，創新且豐富的面向讓自行車觀光再升級，遊程資訊可上網站查詢。
        
        5月5日親臨新北八里「與喔熊騎環島」活動攤位的民眾，除可拿到最夯的百大經典小鎮護照外，還開放民眾及
        喔熊粉絲參與互動小遊戲，有機會獲得喔熊限量好禮，也有「騎遇美景follow me」自行車美照打卡投稿活動，
        限定好禮拿不完。
        
        百大經典小鎮電子集章活動訊息，請上活動網站查詢。
        
        ']);
    }




    public function innerdetail($id)
    {
        $newsData =  News::find($id);
        // DB::table('news')=News::
        // $newsData = DB::table('news')->find($id);
        // dd( $newsData);
        // dd( $newsData->title);
        // dd($id);
        // dd($allnewsData->id);
        return view('news.news_content_page', compact('newsData'));
    }



    // public function detail(){
    //     return view('news.news_content_page');
    // }

}
