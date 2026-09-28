<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\URL;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
       web: [
            __DIR__.'/../routes/web.php',
            __DIR__.'/../routes/admin.php', 
             __DIR__.'/../routes/common.php',  
            __DIR__.'/../routes/api.php',                       
        ],
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
       ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            \App\Http\Middleware\LanguageMiddleware::class,
            \App\Http\Middleware\TrimInputsMiddleware::class,
            \App\Http\Middleware\SingleLoginMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->booting(function () {
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    })
    ->create();