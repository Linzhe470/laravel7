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
        <hr>
        <div class="top-sub">
            <a href="/news/create">
                <div class="create">
                    建立 +
                </div>
            </a>
        </div>
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
        <div class="functions">
            <button class="kill" data-herf="/news/delete/{{$news->id}}">
                🗡 殺害
            </button>

            <a href="/news/delete/{{$news->id}}" class="delete-btn">
                <div class="delete">
                    X 刪除
                </div>
            </a>

            <a href="/news/edit/{{$news->id}}" class="edit-btn">
                <div class="edit">
                    🖍 編輯
                </div>
            </a>
        </div>
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
<script>
    var btnDelete =document.querySelectorAll('.kill');
    btnDelete.forEach(function (btn) {
        btn.addEventListener('click',function() {
                console.log(this);
            if (confirm('真的?')) {
                location.href = this.getAttribute('data-herf');
            }
            
        })
        
    });

</script>
@endsection

