{{-- 繼承哪一個模板 --}}
@extends('layouts.app')


@section('title')
Digipack-create
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/create_news.css') }}">
<style>
main{
    justify-content:unset;
}
</style>
@endsection

@section('main')
<h1 class="p-5" >請開始你的創建</h1>
{{-- 首頁     /index --}}
{{-- 新增頁面 /news/create --}}
{{-- 儲存頁面 /news/store --}}
{{-- 編輯頁面 /news/edit --}}
{{-- 更新頁面 /news/update --}}
{{-- 刪除頁面 /news/delete(destory) --}}

{{-- action 觸發路徑 --}}
    <form action="/news/store" method="POST" class="mx-auto" enctype="multipart/form-data">
        @csrf
        {{-- @csrf 阻擋攻擊 與POST必同時使用 --}}

        {{-- 使Iinput hidden name = _token value=隨機字串 --}}
        <div class="form-group">
            <label for="">標題</label>
            <input type="text" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="">時間</label>
            <input type="date" id="date" name="date">
        </div>

        <div class="form-group">
            <label for="">圖片</label>
            {{-- <input type="text" id="img" name="img"> --}}
            <input type="file" accept="image/*" id="img" name="img">
        </div>
        
        <div class="form-group">
            <label for="">內容</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">提交</button>
    </form>
 
@endsection