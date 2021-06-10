@extends('layouts.app')


@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/css/create_product.css') }}">

@endsection

@section('main')
    <h1 class="main-title p-3">請開始商品的創建</h1>


    <form action="/product" method="POST" class="mx-auto" enctype="multipart/form-data">
        @csrf
        {{-- @csrf 阻擋攻擊 與POST必同時使用 --}}

        {{-- 使Iinput hidden name = _token value=隨機字串 --}}
        <div class="top-form">

            <div class="form-group">
                <label for="">名稱</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="">價格</label>
                <input type="text" id="price" name="price" required>
            </div>

            <div class="form-group">
                <label for="">類型</label>
                <select name="type_id" id="type_id">
                    @foreach ($productTypes as $types)
                        <option value="{{ $types->id }}">{{ $types->name }}</option>
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
                <input type="file" accept="image/*" id="imgs" name="imgs[]" multiple>
            </div>

            <div class="form-group">
                <label for="">描述</label>
                <textarea id="content" name="description" cols="30" rows="10" required></textarea>
            </div>

        </div>
        <button type="submit" class="submit-btn-purple">提交</button>
        {{-- <button type="button">提交</button> --}}
    </form>

@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 300,
                callbacks: {
                    onImageUpload: function(files) {
                        console.log(files);
                        console.log([...files]);
                        var formData = new FormData();
                        formData.append('_token', '{{ csrf_token() }}');

                        for (var i = 0; i < files.length; i++) {
                            formData.append('imgs[]', files[i]);
                        }
                        fetch('/summernote/store', {
                                method: 'POST',
                                body: formData
                            })
                            .then(function(response) {
                                console.log(response);
                                return response.json();
                            })

                            .then(function(path) {
                                console.log(path);

                                for (var i = 0; i < files.length; i++) {
                                    console.log(i);
                                    $('#content').summernote('insertImage', path[i]);
                                }
                                console.log('good');



                            })




                    }




                }


            })


        })

    </script>

@endsection
