<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>{{$mailData['subject']}}</h2>
    <div>{{$mailData['main']}}</div>
    <hr>
    安安 這只是測試文字我是4號
    <script>
        console.log('{{$mailData['main']}}');
        console.log('1');

    </script>

</body>
</html>

{{-- 原本的markdown --}}
{{-- @component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}
