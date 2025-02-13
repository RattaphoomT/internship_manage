<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // เพิ่ม Middleware ที่ Laravel ต้องใช้
        $middleware->web([
            \Illuminate\Session\Middleware\StartSession::class, // สำคัญ! เปิด Session
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            PersonnelMiddleware::class, // เพิ่ม Middleware ของคุณ
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
