<?php

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

//Isso aqui trás o nome da URI
//Route::get('test', function (){
//    $name = request('name');
//
//    return view('test',[
//        'name' => $name
//    ]);
//});

Route::get('/', function (){
    return view('welcome');
});

Route::get('/posts/{post}', 'PostController@show');

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/about', function (){
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});
