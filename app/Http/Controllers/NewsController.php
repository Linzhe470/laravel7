<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
// DB 直接拿東西 安全性低



class NewsController extends Controller
{


// 前台
    // 文章 

    // 顯示列表
    public function list()
    {
        $newsData = News::get();
        return view('news.news_list_unedit_page', compact('newsData'));
    }

    


// 後台
    // 文章

    // 顯示列表
    public function newspage()
    {
        $newsData = News::get();
        return view('news.news_list_page', compact('newsData'));
    }


    // 列表內頁
    public function innerdetail($id)
    {
        $newsData =  News::find($id);
        return view('news.news_content_page', compact('newsData'));
    }


    // 新增資料
        // 創建

    public function create()
    {
        return view('news.create_news');
    }

        // 傳輸
        

    public function store(Request $request)
    {
        $requsetData = $request->all();
    
        if($request->hasFile('img')) {
            $file = $request->file('img');
            $path = $this->fileUpload($file,'article');
            $requsetData['img'] = $path;
        }
    
        News::create($requsetData);
    
        return redirect('/home');
    }


    // 編輯資料
        // 編輯

    public function edit($id)
    {
        $newsData =  News::find($id);
        return view('news.edit_news', compact('newsData'));

    }

        // 更新

    public function update(Request $request, $id)
    {
        $item = News::find($id);
    
        $requsetData = $request->all();
        // $requsetData 僅更新資料
        // $request 一切資料
        if($request->hasFile('img')) {
            $old_image = $item->img;
            $file = $request->file('img');
            $path = $this->fileUpload($file,'article');
            File::delete(public_path().$old_image);
            $requsetData['img'] = $path;
        }
    
        $item->update($requsetData);
    
        return redirect('/home');

    }

    // 刪除資料

    public function delete($id)
    {
        $item = News::find($id);
        $old_image = $item->img;
        if(file_exists(public_path().$old_image)){
            File::delete(public_path().$old_image);
        }
        $item->delete();
        return redirect()->route('home');
    }


    // 其他增改資料
        // 產生預設資料
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
    
    
    
    
    
    
            // // 更生指定資料
            // public function make($title, $view)
            // {
            //     News::create([
            //         // DB::table('news')->insert([
            //         'title' => $title,
            //         'date' => '2020-05-05',
            //         'img' => 'https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg&sizetype=2',
            //         'content' => 'weinfwejfiwjeiofjwioejf',
            //         'view' => $view + 100
            //     ]);
            // }
        
            //     // 更改指定資料
            // public function updatepush($id)
            // {
            //     News::where('id', $id)->update(['content' =>
            //     '為推動「小鎮漫遊」，交通部觀光局於108年配合「小鎮漫遊年」遴選40個特色小鎮，109年延續小鎮熱潮，
            //     配合「脊梁山脈旅遊年」遴選出30個經典/山城小鎮，邀請大家慢騎自行車小鎮，領略小鎮在地之美。
                
            //     ']);
            // }

    // public function list()
    // {
        
    //     $newsData = News::get();
    //     return view('news.news_list_unedit_page', compact('newsData'));
        
        
    //     dd($newsData[0]->title);
    //     $newsData = DB::table('news')->get();
    //     return view('news.news_list_page',compact('newsData'));
    // }


    // public function newspage()
    // {

    //     $newsData = News::get();
    //     return view('news.news_list_page', compact('newsData'));
        
        
    //     dd($newsData[0]->title);
    //     $newsData = DB::table('news')->get();
    //     return view('news.news_list_page',compact('newsData'));
    // }

    // public function store(Request $request)
    // {
    //     $requestData = $request->all();
        
    //     if($request->hasFile('img')) {
    //         $file = $request->file('img');
    //         $path = $this->fileUpload($file,'product');
    //         $requsetData['img'] = $path;
    //     }
        
    //     News::create($requestData);
    //     return redirect('news');
        
    //     取資料
    //     Request $request取得輸入的資料
    //     dd($request->all());
    //     dd($request->title);
    //     儲存資料至資料庫
    //     dd($requsetData);
    //     dd($requsetData);

    //     News::create([
    //         'title' => $request->title,
    //         'date' => $request->date,
    //         'img' => $request->img,
    //         'content' => $request->content,
    //         'view' => 0
    //     ]);
        
    //     返回最新消息列表頁
    //     return view('news.create_news',compact('newsData'));
    // }

    
    // public function edit($id)
    // {
    //     $newsData =  News::find($id);
    //     return view('news.edit_news', compact('newsData'));
    //     用ID去找
    //     $newsData =  News::where('id',$id);
    //     dd( $newsData);
    // }

    // public function update($id, Request $request)
    // {
        // $item = News::find($id) ;
        // $requestData = $request->all();

        // if($request->hasFile('img')) {
        //     $old_image = $item->img;
        //     $file = $request->file('img');
        //     $path = $this->fileUpload($file,'product');
        //     $requsetData['img'] = $path;
        //     News::delete(public_path().$old_image);
        // }
    
        // $item->update($requestData);
    
        // return redirect('news');


        // 專門取id之物件用 不用於其他地方
        // News::find($id)->update($request->all());


        // News::where('id', $id)->update($request->all());錯誤

        // where('資料標題', 符合資料標題名稱條件) 將取得資料包至陣列中，可唯一值以上
        // where()所取出陣列，以get()取得陣列內所有資料，以first()取得陣列內首筆資料

       

        // dd($requsetData);


        // News::where('id', $id)->first()->update($request->all());
        // News::where('id', $id)->get()->update($request->all());
        
        // News::where('id', $id)->update([
        //     'title' => $request->title,
        //     'date' => $request->date,
        //     'img' => 'https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg&sizetype=2',
        //     'content' => $request->content,
        //     'view' => 0
        // ]);
  
        // return redirect()->route('home');
        // return redirect('news');

        // return route('frontlist');

    // }

    // public function delete($id)
    // {
    //     News::where('id', $id)->delete();
    //     return redirect()->route('home');
    //     DB::table('news')
    //     ->where('id',$id)
    //     ->delete();
    // }

    
    // public function detail(){
    //     return view('news.news_content_page');
    // }

}
