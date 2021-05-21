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
<h1 class="p-5" >請開始商品的創建</h1>
{{-- 首頁     /index --}}
{{-- 新增頁面 /news/create --}}
{{-- 儲存頁面 /news/store --}}
{{-- 編輯頁面 /news/edit --}}
{{-- 更新頁面 /news/update --}}
{{-- 刪除頁面 /news/delete(destory) --}}

{{-- action 觸發路徑 --}}
    <form action="/product" method="POST" class="mx-auto" enctype="multipart/form-data">
        @csrf
        {{-- @csrf 阻擋攻擊 與POST必同時使用 --}}

        {{-- 使Iinput hidden name = _token value=隨機字串 --}}
        <div class="form-group">
            <label for="">名稱</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="">類型</label>
            <select name="type_id" id="type_id">
                @foreach ($productTypes as $types)
                <option value="{{$types->id}}">{{$types->name}}</option>
                @endforeach
            </select>

            {{-- <input type="text" id="type_id" name="type_id" required> --}}
        </div>

        
        <div class="form-group">
            <label for="">主要圖片</label>
            <input type="file" accept="image/*" id="img" name="img" required>
        </div>
        
        <div class="form-group">
            <label for="">其他圖片</label>
            <input type="file" accept="image/*" id="imgs" name="imgs[]" multiple >
        </div>

        <div class="form-group">
            <label for="">描述</label>
            <textarea name="description" id="" cols="30" rows="10" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="">價格</label>
            <input type="text" id="price" name="price" required>
        </div>
        <button type="submit">提交</button>
        {{-- <button type="button">提交</button> --}}
    </form>
 
@endsection