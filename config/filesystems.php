<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),
    // 'default' => env('FILESYSTEM_DRIVER', 'myfile'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            // 找尋storage資料夾中的app資料夾(決對位置)/..../storage/app/
        ],

        'myfile' => [
            'driver' => 'local',
            'root' => public_path('upload'),
            'url' => '/upload/',
            'visibility' => 'public'
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            // 找尋storage資料夾中的app資料夾(決對位置)/..../storage/app/public
            // php artisan storage:link
            // 建立public/storage

            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],
    //  Storage:: 儲存函式
    // Storage::disk('public') 儲存在public資料夾
    // Storage::disk('myfile')->putFile('內資料夾','$file')$file儲存在myfile內資料夾中的資料夾
    // $path=Storage::disk('public')->myfile('內資料夾','$file')
    // putFile()產生亂數檔名
    // $path=資料夾/檔名
    // /upload/$path 才是正確位址

    // 魔改'url' => '/upload/',
    // Storage::disk('myfile')->url($path)
    // 即將disk('myfile')放入url($path)連結
    // 等同執行php artisan storage:link
    // 執行檔案連結並建立

];
