<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\PersonnelMiddleware; //  เพิ่ม Middleware

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        // ✅ ใช้ group() สำหรับ Middleware
        $middleware->group('web', [
            \Illuminate\Session\Middleware\StartSession::class, 
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            // \Illuminate\Auth\Middleware\Authenticate::class, // ✅ เพิ่ม Authentication Middleware
        ]);

        // ✅ ใช้ alias() สำหรับ Middleware ที่กำหนดเอง
        $middleware->alias([
            'personnel' => \App\Http\Middleware\PersonnelMiddleware::class, // ✅ เปลี่ยนเป็นตัวพิมพ์เล็ก
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
