<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Post;
use PhpParser\Node\Stmt\Foreach_;

Route::get('/', function () {
    return view('home',[
        "tittle" => "Home"
    ]);
})->name("home");

Route::get('/about',function(){
    return view('about',[
        "tittle" => "About",
        "name" => "Acep",
        "email" => "Acep@gmail.com",
        "img" => "logo.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/login',[LoginController::class, 'index']);

Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);