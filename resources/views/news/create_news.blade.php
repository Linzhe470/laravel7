{{-- 繼承哪一個模板 --}}
@extends('layouts.template')

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
    <form action="/news/store" method="POST" class="mx-auto">
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
            <input type="text" id="img" name="img">
        </div>

        <div class="form-group"/
@endsection