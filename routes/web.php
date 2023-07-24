<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route :: get('/', [UserController :: class, 'index'])
    -> name('index');

Route :: get('/posts/create', [PostController :: class, 'create'])
    -> name('post.create');
Route :: post('/post/store', [PostController :: class, 'store'])
    -> name('post.store');

Route :: get('/posts/{id}', [PostController :: class, 'show'])
    -> name('post.show');

