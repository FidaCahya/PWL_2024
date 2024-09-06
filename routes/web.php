<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//PAKTIKUM 1
// no1
// Route::get ('/hello', function () {
//     return 'Hello World';
// });

//no2
Route::get('/world', function () {
    return 'world';
});

//Tugas1
Route::get('/salam', function () {
    return 'Selamat Datang';
});

//Tugas2
Route::get('/about', function () {
    return 'Nama saya Fida Cahya dengan NIM 2241760001';
});

//
//no8
// Route::get('/user/{name}', function ($name) {
//     return 'Nama Saya '. $name;
// });

//no11
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke- '. $postId."Komentar ke-: ".$commentId;
});

//no 13
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '. $id;
});

//no 14 (nama tidak muncul)
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama Saya '. $name;
});

// no17 (muncul nama saya fida karena memanggil yg no 14 'http://localhost/PWL_2024/public/user/fida')
// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama Saya '. $name;
// });

//no 18 (muncul nama john dengan url 'http://localhost/PWL_2024/public/user' )
//Route::get('/user/{name?}', function ($name='John') {
    //return 'Nama Saya '. $name;
//});

//PRAKTIKUM 2
//no 4
Route::get('/hello', [WelcomeController::class,'hello']);
//no 6
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles', [ArticlesController::class,'articles']);


Route::get('/', function () {
    return view('welcome');
});


