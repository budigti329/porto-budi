<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['sentot' => '']);
});

Route::get('/about', function () {
    return view('about', ['sentot' => '']);
});

Route::get('/posts', function () {
    return view('posts' , ['sentot' => '', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function($slug){
        $post = Post::find($slug);

    return view('post', ['sentot' => 'Single Post', 'post' => $post]);
});

Route::get('exper', function () {
    return view('exper', ['sentot' => '']);
});

Route::get('/kontak', function () {
    return view('kontak', ['sentot' => '']);
});

Route::get('/aplikasi1', function () {
    return view('aplikasi1', ['sentot' => 'Applications ']);
});

Route::get('/aplikasi2', function () {
    return view('aplikasi2', ['sentot' => 'Applications ']);
});

Route::get('/aplikasi3', function () {
    return view('aplikasi3', ['sentot' => 'Applications ']);
});

Route::get('/aplikasi4', function () {
    return view('aplikasi4', ['sentot' => 'Applications ']);
});

Route::get('/aplikasi5', function () {
    return view('aplikasi5', ['sentot' => 'Applications ']);
});

Route::get('/aplikasi6', function () {
    return view('aplikasi6', ['sentot' => 'Applications ']);
});

