@extends('layouts.app')


@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('main')

    <div class="text-center">
        <h1 class="my-3 text-danger">新增資料</h1>
        <form method='post' action="/admin/news/store" enctype="multipart/form-data">
            {{-- <form  method='post' action="/admin/news/store" > --}}
            @csrf
            <div class="form-group">
                <label for="">標題</label>
                <input type="text" id='title' name='title'>
            </div>
            <div class="form-group">
                <label for="">時間</label>
                <input type="date" id='date' name='date'>
            </div>
            <div class="form-group">
                <label for="">圖片</label>
                <input type="file" id='img' accept="image/*" name='img'>
            </div>
            {{-- <div class="form-group">
                <label for="">圖片</label>
                <input type="text" id='img'  name='img'>
            </div> --}}
            <div class="form-group">
                <label for="">內容</label>
                <textarea name='content' id='content' cols='30' rows='10'></textarea>
            </div>
            <button type="submit">送出</button><span>&nbsp;&nbsp;&nbsp;</span><button type="button"
                onclick="location.replace('/news');">取消</button>
        </form>
    </div>

@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>

        $(document).ready(function() {
            $('#content').summernote({
                // height: 300,
                callbacks: {
                    onImageUpload: function(files) {
                        // console.log(files)
                        var formData = new FormData()
                        formData.append('img', files[0])
                        formData.append('_token', '{{ csrf_token() }}')
                        //  console.log(files)
                        fetch('/admin/summernote/store', {
                                method: 'POST',
                                body: formData,
                            })
                            .then(function(response) {
                                return response.text();
                            })
                            .then(function(path) {
                                $('#content').summernote('insertImage', path);
                            });
                    },

                 
                }
            });
        });

    </script>

@endsection