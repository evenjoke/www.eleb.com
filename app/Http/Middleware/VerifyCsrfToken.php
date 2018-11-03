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
    protected $except = [
        //排除——token验证
        'login',
        'regist',
        'sms',
        'forgetpassword',
        'changePassword',
        'business',
        'addressList',
        'addAddress',
        'address',
        'editAddress',
    ];
}
