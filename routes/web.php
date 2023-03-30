<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add(['GET', 'POST'], '/books', [Controller\Site::class, 'books']);
Route::add(['GET', 'POST'], '/add', [Controller\Site::class, 'add']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
