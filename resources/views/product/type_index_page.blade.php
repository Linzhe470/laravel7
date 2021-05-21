@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="{{ asset('/css/auth_product_datalist.css') }}" />

@endsection

@section('content')
<div class="container content">
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

                    {{ __('Here is Product_types Adimin page!') }}
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
        <a href="#">
            自然產生
        <a>
    </button>
    <button type="button" class="edit-btn rounded-pill btn-success">
        <a href="{{route('productype.create')}}">
            自訂新增+
        <a>
    </button>
</div>

<table id="myDataTalbe"  class="display"  >
    <thead>
        <!--必填-->

        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Function</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productypeData as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td class="functions">
                
                
                <button class="btn btn-sm btn-secondary edit-btn rounded-pill mr-3">
                    <a href="productype/{{$item->id}}/edit">
                        編輯
                        <a>
                        </button>
                        
                        <button class="btn btn-sm btn-danger delete-btn rounded-pill" data-id="#delete_{{$item->id}}">
                            刪除
                        </button>
                        
                        <form id="delete_{{$item->id}}" action="/productype/{{$item->id}}" method="POST" class="d-none">
                            @csrf
                            @method('DELETE')
                </form>



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
    //   這份文件 都準備好 執行
    // $(document).ready( function () {
    // $('#myTable').DataTable();
    // } );

    document.querySelectorAll('.delete-btn').forEach(function (btn) {
        btn.addEventListener('click',function () {
            var id=this.getAttribute('data-id');
            if(confirm('確定要刪除這個可愛的商品類型?')){
                document.querySelector(id).submit();
            }
        });
    })

</script>

@endsection


