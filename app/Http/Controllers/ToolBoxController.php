<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolBoxController extends Controller
{
    //
     
    public function summernoteStore(Request $request)
    {
        if($request->hasFile('imgs')){
            $path = [];
            foreach($request->imgs as $img){
                array_push($path, $this->fileUpload($img,'summernote'));
            }
            return $path;
        }

        return 'fail';

        // 單張:傳入單張img 只執行一次
        // if($request->hasFile('img')){

        //     $file = $request->file('img');
        //     $path = $this->fileUpload($file,'summernote');
        //     return $path;
        // }

        // return 'fail';
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
