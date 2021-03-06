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

/*
|--------------------------------------------------------------------------
| Isso aqui trás o nome da URI
|--------------------------------------------------------------------------
|Route::get('test', function (){
|    $name = request('name');
|
|    return view('test',[
|        'name' => $name
|    ]);
});*/

/*
|--------------------------------------------------------------------------
| Exemplificação de Container sem implementação muito real
|--------------------------------------------------------------------------
|Route::get('/', function(){
|
|    $container = new \App\Container();
|
|   $container->bind('example', function(){
|        return new \App\Example();
|    });
|
|    $example = $container->resolve('example');
|
|    $example->go();
}); */

//Juro que não lembro direito oq isso faz mas é só olhar o Controller
//Route::get('/', 'PagesController@home');


Route::get('/', fn () => view('welcome'));

Route::get('/posts/{post}', 'PostController@show');

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

Route::get('/about', function () {
  return view('about', [
    'articles' => App\Article::take(3)->latest()->get()
  ]);
});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');
