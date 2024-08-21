<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Auth;
use app\http\Middleware\AuthenticateUser;
use App\Http\Middleware\RedirectToAppropriateHome;
use Illuminate\Http\RedirectResponse;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias(['authenticateUser'=>AuthenticateUser::class,]);
        $middleware->alias(['redirectToAppropriateHome'=>RedirectToAppropriateHome::class,]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
