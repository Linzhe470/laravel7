<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{-- 產生資料 --}}
    <?php echo $data,$data2 ;?>

    <br>
    <?php
        // dd(gettype($data));
        ?>

    安安{{ $data }}
    安安{{ $data2 }}
    安安{{ $data3 }}
    <?php $data = 333;?>
    <br>
    安安{{ $data }}
    <br>
    <?php $data = 434;?>
    安安{{ $data }}


</body>
</html>
