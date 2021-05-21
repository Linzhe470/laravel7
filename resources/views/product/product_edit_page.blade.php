{{-- 繼承哪一個模板 --}}
@extends('layouts.app')


@section('name')
Digipack-create
@endsection

@section('css')
<link rel="stylesheet" href="/css/create_news.css">
<style>
.img-l{
    width:360px;
    height:200px;
    background-position: center;
    background-size: cover;
}
.list-imgs{
    width:100px;
    height:100px;
    background-position: center;
    background-size: cover;
    position: relative;
}

.del-img-btn{
    background-color: red;
    color: white;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 0;
    position: absolute;
    top: 0;
    right: 0;
    transform: translate(50%,-50%);
    cursor: pointer;
    transition:all,.4s
}
.del-img-btn:hover{
    background-color: rgb(197, 4, 4);
    border-radius: 50%;
}

.img-sb{
    display: flex;
}

.inputwidth{
    width: 50vw;
    height: 40px;
}
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
    background-color: salmon

}
</style> 
@endsection

@section('main')
<div class="all">
<h4 class="p-3 docrate">請開始你的產品編輯</h4>
<div class="fake-hr"></div>

    <form action="/product/{{$productData->id}}" method="POST" class="mx-auto" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

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
            <select class="inputwidth" name="type_id" id="type_id">
                @foreach ($productTypes as $types)
                {{--  @if (判斷式) selected @endif  --}}
                <option value="{{$types->id}}" @if ($types->id == $productData->type_id) selected @endif>{{$types->name}}</option>
                @endforeach
            </select>
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
            <textarea name="description" id="" cols="30" rows="10">{{$productData->description}}</textarea>
        </div>
        
        <div class="fake-hr"></div>

        <button type="submit">提交</button>
    </form>
</div>
 
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