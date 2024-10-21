<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;    
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



// Route::get('/form', function () {
    // return view('form');
// });

// Route::get('form','FormController@getIndex');

// Route::resource('/form', 'FormController');
Route::resource('form', FormController::class);
// Route::get('form/', 'FormController@input');
// Route::patch('form/', 'FormController@confirm');

Route::resource('test', FormController::class);



# 入力画面
Route::get('request/', [
    'uses' => 'InsertDemoController@getIndex',
    'as' => 'insert.index'
  ]);
   
  # 確認画面
  Route::post('request/confirm', [
    'uses' => 'InsertDemoController@confirm',
    'as' => 'insert.confirm'
  ]);




