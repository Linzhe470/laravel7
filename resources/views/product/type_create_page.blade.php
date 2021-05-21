{{-- 繼承哪一個模板 --}}
@extends('layouts.app')


@section('title')
Digipack-create
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/create_news.css') }}">
<style>
    .fake-hr{
    align-self: center;
    width: 100%;
    height: 1px;
    background-color: rgb(236, 236, 236);
    margin-bottom: 2rem;
}

.docrate{
    position: relative;
    margin-left: 10px;
    line-height: 10px;
    font-weight: 550;
}
.docrate::after{
    content: "";
    position: absolute;
    left: 0;
    top: 25%;
    width: 10px;
    height: 50%;
    background-color: rgb(114, 250, 171)

}
</style>
@endsection

@section('main')
<div class="all">

<h4 class="p-3 docrate" >請開始<span style="color: rgb(70, 207, 127)">商品類別</span>的創建</h4>
<div class="fake-hr"></div>


    <form action="/productype" method="POST" class="mx-auto" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="">名稱</label>
            <input type="text" id="name" name="name">
        </div>

      
        <button type="submit">提交</button>
    </form>
</div>
@endsection