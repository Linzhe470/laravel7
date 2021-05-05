{{-- 繼承哪一個模板 --}}
@extends('layouts.template')

@section('title')
    News_list_page
@endsection

@section('css')
    <link rel="stylesheet" href="/css/news_list_page.css">
@endsection

@section('main')

    <section>
        <div class="top-title">
            <img class="img-size" src="https://www.taiwan.net.tw/att/topTitleImg/21_0001001.svg" alt="">
            <h1>最新消息</h1>
        </div>
        <div class="top-sub">

            <p>
                <span>資料總筆數：</span>
                <span>175 </span>
            </p>
            <p>
                <span>每頁筆數：</span>
                <span>10 </span>
            </p>
            <p>
                <span>總頁數：</span>
                <span>18</span>
            </p>
            <p>
                <span>目前頁次：</span>
                <span>1</span>
            </p>


        </div>
        <hr>
    </section>

    @foreach ($newsData as $news)

    <section class="lists-section">
        <div class="lists">

            <div class="img-left" style="background-image: url({{$news->img}})">
            </div>

            <div class="texts-right">
                <div class="tag">最新消息</div>
                <a href="/news/detail/{{$news->id}}">
                    <h2>{{$news->title}}</h2>
                </a>
                <p>{{$news->date}}</p>
                <div class="words">
                    <p>{{$news->content}}</p>
                </div>

            </div>
        </div>
        <hr>
    </section>
    
    @endforeach


@endsection

@section('js')
@endsection

