<?php

use App\Http\Controllers\PostController;
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



Route::get('/Blog', [PostController::class, 'index']);


// single post
Route::get('post/{slug}', [PostController::class, 'show']);