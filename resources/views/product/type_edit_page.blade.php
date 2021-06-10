{{-- 繼承哪一個模板 --}}
@extends('layouts.app')


@section('name')
Digipack-create
@endsection

@section('css')
<link rel="stylesheet" href="/css/create_news.css">
@endsection

@section('main')
<h1 class="p-5" >請開始id={{$productypeData->id}}的產品類別編輯</h1>

    <form action="/productype/{{$productypeData->id}}" method="POST" class="mx-auto" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="">哀滴</label>
            <input type="text" id="id" name="id" value="{{$productypeData->id}}" readonly="readonly">
        </div>

        <div class="form-group">
            <label for="">名稱</label>
            <input type="text" id="name" name="name" value="{{$productypeData->name}}">
        </div>


        <button type="submit">提交</button>
    </form>

@endsection

