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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form','FormController@getIndex');

Route::get('/form', function () {
    return view('form');
});



Route::get('hello','HelloController@getIndex'); 

Route::resource('/message', 'MessageController');




Route::get('contact/', 'ContactController@input');
Route::patch('contact/', 'ContactController@confirm');

// 入力
public function input()
{
    // Bladeで使う変数
    $hash = array(
        'subtitle' => '入力画面',
    );
    return view('contact.input')->with($hash);
}

