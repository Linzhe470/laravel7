{{-- 繼承哪一個模板 --}}
@extends('layouts.app')


@section('title')
Digipack-create
@endsection

@section('css')
<link rel="stylesheet" href="/css/create_news.css">
@endsection

@section('main')
{{-- 首頁     /index --}}
{{-- 新增頁面 /news/create --}}
{{-- 儲存頁面 /news/store --}}
{{-- 編輯頁面 /news/edit --}}
{{-- 更新頁面 /news/update --}}
{{-- 刪除頁面 /news/delete(destory) --}}

{{-- action 觸發路徑 --}}
    <form action="/news/update/{{$newsData->id}}" method="POST" class="mx-auto">
        @csrf
        {{-- @csrf 阻擋攻擊 與POST必同時使用 --}}

        {{-- 使Iinput hidden name = _token value=隨機字串 --}}
        <div class="form-group">
            <label for="">標題</label>
            <input type="text" id="title" name="title" value="{{$newsData->title}}">
        </div>

        <div class="form-group">
            <label for="">時間</label>
            <input type="date" id="date" name="date" value="{{$newsData->date}}">
        </div>

        <div class="form-group">
            <label for="">圖片</label>
            <input type="text" id="img" name="img" value="{{$newsData->img}}">
        </div>
        
        <div class="form-group">
            <label for="">內容</label>
            <textarea name="content" id="" cols="30" rows="10">{{$newsData->content}}</textarea>
        </div>
        <button type="submit">提交</button>
    </form>
 
@endsection