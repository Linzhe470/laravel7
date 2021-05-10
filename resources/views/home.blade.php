@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="{{ asset('/css/auth_news_datalist.css') }}" />
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('main')
<hr>


<div class="functions">
    {{-- <button type="button" class="kill" data-href="/news/delete/{{$news->id}}">🗡 殺害</button> --}}
    
    <button type="button" class="edit-btn rounded-pill btn-primary mr-2">
        <a href="{{route('birthchild')}}">
            自然產生
        <a>
    </button>
    <button type="button" class="edit-btn rounded-pill btn-success">
        <a href="{{route('docreate')}}">
            自訂新增+
        <a>
    </button>
</div>

<table id="myDataTalbe"  class="display"  >
    <thead>
        <!--必填-->

        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Date</th>
            <th>Img</th>
            <th>Content</th>
            {{-- <th>View</th> --}}
            <!-- <th>CreateTime</th>
            <th>UpdateTime</th> -->
            <th>控制</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($newsData as $news)
        <tr>
            <td>{{$news->id}}</td>
            <td>{{$news->title}}</td>
            <td>{{$news->date}}</td>
            <td><img src="{{$news->img}}" alt="" style="height:auto;width:90%"></td>
            <td>{{$news->content}}</td>
            {{-- <td>{{$news->view}}</td> --}}
            <td class="functions">
                {{-- <button type="button" class="kill" data-href="/news/delete/{{$news->id}}">🗡 殺害</button> --}}
                
                <button type="button" class="edit-btn rounded-pill btn-secondary">
                    <a href="/news/edit/{{$news->id}}">
                        🖍 編輯
                    <a>
                </button>
                <button type="button" class="delete-btn rounded-pill btn-danger" data-href="/news/delete/{{$news->id}}">
                    <a >
                    X 刪除
                    <a>
                </button>

            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>



@endsection

@section('js')
  <!--引用jQuery-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <!--引用dataTables.js-->
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
   
  <script type="text/javascript">
      $(function () {

          $("#myDataTalbe").DataTable({
              searching: true, //關閉filter功能
              columnDefs: [{
                  targets: [3],
                  orderable: false,
              }]
          });
      });
  </script>
  <script>
        var btnDelete =document.querySelectorAll('.delete-btn');
        console.log(btnDelete);
        btnDelete.forEach(function (btn) {
        btn.addEventListener('click',function() {
                console.log(this);
            if (confirm('確定狠心刪除這筆資料?')) {
                location.href = this.getAttribute('data-href');
            }
            
        })
        
    });

  </script>

@endsection
