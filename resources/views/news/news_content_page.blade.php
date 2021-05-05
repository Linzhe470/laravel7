{{-- 繼承哪一個模板 --}}
@extends('layouts.template')

@section('title')
    News_content_page
@endsection

@section('css')
    <link rel="stylesheet" href="/css/news_content_page.css">
@endsection

@section('main')


    <section>
        <div class="top-title">
            <h1>{{$newsData->title}}</h1>
        </div>
        <div class="top-sub">

            <p>
                <span>發布日期：</span>
                <span>{{$newsData->date}} </span>
            </p>
            <p>
                <span>瀏覽次數：</span>
                <span>{{$newsData->view}} </span>
            </p>

        </div>
        <hr>
    </section>

    <section class="lists-section">
        <div class="lists">
                <div>{{$newsData->content}}</div>
        </div>
        <hr>
    </section>


@endsection

@section('js')
@endsection
