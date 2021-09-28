<?php

use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UploadController;

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
    return view('welcome');
});
Route::get('auth/login', function () {
    return view('auth/login');
});

Route::get('auth/regist', function () {
    return view('auth/regist');
});

Route::get('uploads/upload', function () {
    $f = DB::table('film_row')->get()->pluck('film_file_name');

    return view('uploads/upload')->with('f');
});


Route::get('slides/film', function () {
    return view('slides/film');
});


Route::get('user/user', function () {
    return view('user/user');
});
