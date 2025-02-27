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

       
        $middleware->group('web', [
            \Illuminate\Session\Middleware\StartSession::class, 
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class, 
        ]);

        
        $middleware->alias([
            'personnel' => \App\Http\Middleware\PersonnelMiddleware::class,
            'student' => \App\Http\Middleware\StudentMiddleware::class, 
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
