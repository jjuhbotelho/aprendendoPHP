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

//Essa merda trás o nome da URI
//Route::get('test', function (){
//    $name = request('name');
//
//    return view('test',[
//        'name' => $name
//    ]);
//});

Route::get('/posts/{post}', 'PostController@show');
