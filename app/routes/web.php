  <?php

  use Illuminate\Support\Facades\Route;
  use App\Http\Controllers\FormController;
  use App\Http\Controllers\ContactController; 
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

  // Route::resource('contact', ContactController::class);

  // Route::get('contact/', 'ContactController@index');

  // Route::get('contact/', 'ContactController@input');
  Route::get('/contact/input', [ContactController::class, 'input'])->name('contact.input');
  // Route::patch('contact/', 'ContactController@confirm');
  Route::patch('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
  // Route::post('contact/', 'ContactController@finish'); 今回はここはしません





  // Route::resource('validation', ValiDemoController::class);

  // # 入力画面
  // Route::get('validation/', [
  //   'uses' => 'ValiDemoController_2@getIndex',
  //   'as' => 'validation.index'
  // ]);
  
  // # 確認画面
  // Route::post('validation/confirm', [
  //   'uses' => 'ValiDemoController_2@confirm',
  //   'as' => 'validation.confirm'
  // ]);





