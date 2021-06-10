{{-- 繼承哪一個模板 --}}
@extends('layouts.create')


@section('name')
Digipack-create
@endsection

@section('css')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<link rel="stylesheet" href="{{ asset('/css/create_product.css') }}">
<style>

</style> 
@endsection

@section('main')

<h1 class="main-title p-3" >請開始你的產品編輯</h1>
<div class="fake-hr"></div>


<form action="/product/{{$productData->id}}" method="POST" class="mx-auto" enctype="multipart/form-data">
  @csrf
  @method('PATCH')
      
        <div class="all">

          <div class="form-group">
            <label for="">名稱</label>
            <input type="text" id="name" name="name" value="{{$productData->name}}">
          </div>

          <div class="form-group">
            <label for="">價格</label>
            <input type="text" id="price" name="price" value="{{$productData->price}}">
          </div>



          
          <div class="form-group">
            <label for="">類型</label>
            <select name="type_id" id="type_id">
                @foreach ($productTypes as $types)
                <option value="{{$types->id}}" @if ($types->id == $productData->type_id) selected @endif>{{$types->name}}</option>
                @endforeach
            </select>

            {{-- <input type="text" id="type_id" name="type_id" required> --}}
        </div>


          <div class="fake-hr"></div>
            
          <div class="form-group">
            <label for="">主圖</label>
            <div class="img-mj">
                <div class="img-l mb-3" style="background-image: url({{$productData->img}});">
                </div>
                <input type="file" accept="image/*" id="img" name="img">
            </div>
        </div>

        <div class="form-group">
            <label for="">次圖</label>
            <div class="img-mj">
                <div class="img-sb">

                @foreach ($productData->gotProductImg as $img)
                    <div class="list-imgs mb-3 mr-4" style="background-image: url({{$img->img}})">
                        <div class="del-img-btn del-btn" data-id="{{$img->id}}">X</div>
                    </div>
                    {{-- !!用冒泡!!試試看 --}}
                @endforeach

                </div>

                <input type="file" accept="image/*" id="imgs" name="imgs[]"  multiple >
            </div>
        </div>

        <div class="fake-hr"></div>
        <div class="form-group">
          <label for="">描述</label>
          <textarea id="summernote" name="description"  cols="30" rows="10" required>{!! $productData->description !!}</textarea>
      </div>
      
      <div class="fake-hr"></div>

      <button type="submit" class="submit-btn-purple">提交</button>
  </form>


  <script>
    $('#summernote').summernote({
      placeholder: 'Hello stand alone ui',
      height: 200,
    });
  </script>
 
@endsection

@section('js')

<script>
    
    var btn = document.querySelectorAll('.del-btn');
    console.log(btn,1);
    // dataset 
    btn.forEach(function (btn) {


        btn.addEventListener('click',function (){
            if(confirm('是否要刪除這張圖片?')){
            var imgId = this.getAttribute('data-id')
            // console.log(imgId);

            var formData = new FormData();
            formData.append('id',imgId);
            formData.append('_token','{{ csrf_token() }}');
            var delbtn=this;
            fetch('/product/deleteimg',{
                    method:'POST',
                    body: formData
            })
            .then(function (response){
                return response.text();
            })
            .then(function (result) {
                if(result == 'success'){
                    delbtn.parentElement.remove();
                }
            });
            }
        }) 
    });
    
    // btn.forEach(function (btn) {
    //     btn.addEventListener('click',function () {
    //         // CLICK
    //         let imgId = this.getAttribute('data-id');
    //         // CREATE A NEW　
    //         let formData = new formData();
    //         formData.append('id',imgId);
    //         formData.append('_token','{{ csrf_token() }}');
    //         // let delbtn = this;

    //         fetch('/product/delete_img',{
    //             method:'POST',
    //             body: formData
    //         })
    //         .then((response)=>{
    //             return response.text();
    //         })
    //         .then(function (result) {
    //             if(result == 'success'){
    //                 // delbtn.parentElement.remove();
    //                 delbtn.parentElement.remove();
    //             }
                
    //         })



    //         let imgId=this.getAttribute('data-id');
    //         if(confirm('是否要刪除這張圖片?')){
    //             document.querySelector(id).submit();
    //         }
    //     });
    // })


</script>


@endsection