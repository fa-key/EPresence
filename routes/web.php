<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home', ['title' =>'Home']);
});

Route::get('/About', function () {
    return view('About', [
        'title' => 'About',
        "name" => "Xu Minghao",
        "email" => "xu.minghao@gmail.com",
        "image" => "minghao.jpg"
    ]);
});



Route::get('/Blog', function () {

    return view('post', [
        'title' => 'posts',
        'post' => Post::all()
    ]);
});


// single post
Route::get('post/{slug}', function($slug){
    return view('posts', ['title' => 'Blog',
    'posts'=> Post::find($slug)
]);
});