<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    // 信用卡金流無須通過@csrf驗證
    protected $except = [
        'cart_ecpay/return','cart_ecpay/notify'
    ];
}
