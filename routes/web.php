<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EncryptionController;
use App\Http\Controllers\HelperTest;
use App\Http\Controllers\PDFDownloadCOntroller;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersAuth;
use Illuminate\Contracts\Cache\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
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

Route::get('users',[UserController::class,'dataFetch']);


Route::get('download_local',[PDFDownloadCOntroller::class,'download_local']);
Route::get('download_public',[PDFDownloadCOntroller::class,'download_public']);

Route::get('/post',[ClientController::class,'getAllPost']);

Route::get('/collect',[StudentController::class,'index']);

Route::get('/facade',function(){
    Cache::put('name','Hii Friends Welcome to Facades');
    dd(Cache::get('name'));
});


Route::get('/contracts',function(Factory $cache){
    $cache->put('value','Akash');
    // $cache->forget('value');
    dd($cache->get('value'));
});

Route::get('event',[UsersAuth::class,'index']);

Route::get('/helper',[HelperTest::class,'checkHelper']);

Route::get('encrypt',[EncryptionController::class,'encrypt']);
Route::get('decrypt',[EncryptionController::class,'decrypt']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('about',function(){
    return view('about');
})->middleware('ipcheck');

Route::post('users',[UserController::class,'testUser']);
Route::view('login','about');
Route::get('user',[UserController::class,'index']);

Route::get('post/{post}/comment/{comment}',function($post,$comment){
    return 'post';
})->name('post.comment');

Route::get('/secret',function(){
    return "This is a secret MEssage";
})->name('secret');


Route::get('/profile/{lang}', function ($lang) {
    App::setlocale($lang);  
    return view('profile');
});
Route::view('/profile','profile');
// Route::resource('photos',[PhotoController::class]);


// cache()->get('abc');
// dd(app()->make('Hello'));   

// dd(app());


// --------------------Facades-----------------------------

// Cache::set('name','Akash');
// dd(Cache::get('name'));

// class Fish{
//     public function swim(){
//         return 'Swimming.';
//     }
//     public function eat(){
//         return 'Eating.';
//     }
// }

// app()->bind('fish',function(){
//     return new Fish;
// });

// class Bike{
//     public function start(){
//         return 'starting.';
//     }
// }

// app()->bind('bike',function(){
//     return new Bike;
// });

// class Facade{
//     public static function __callStatic($name, $arguments)
//     {
//         return app()->make(static::getFacadeAccessor())->$name();
//     }
//     protected static function getFacadeAccessor()
//     {
//         # code...
//     }
// }
// class FishFacade extends Facade{
//     protected static function getFacadeAccessor(){
//         return 'fish';
//     }
// }
// class BikeFacade extends Facade{
//     protected static function getFacadeAccessor(){
//         return 'bike';
//     }
// }
// // dd(FishFacade::swim());
// dd(BikeFacade::start());



// --------------------Routing----------------------------
// Route::get('/greeting', function () {
//     return 'Hello World!';
// });
// Route::prefix('admin')->group(function () {
//     Route::get('/', function () {
//         return view('welcome');
//     });
// });

// Route::redirect('/', '/greeting', 302);

// Route::view('/', 'welcome');

// Route::get('/user/{id}', function ($id) {
//     return 'User ' . $id;
// });

// // Route::get('/user/{name?}', function ($name = 'Akash') {
// //     return $name;
// // });

// Route::get('/user/{name}', function ($name) {
//     return 'name:  ' . $name;
// })->where('name', '[A-Za-z]+');
// Route::get('/user/{id}', function ($id) {
//     return 'id:  ' . $id;
// })->where('id', '[0-9]+');

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return "id:  " . $id . "  name :  " . $name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return "id:  " . $id . "  name :  " . $name;
// })->whereNumber('id')->whereAlpha('name');

// Route::get('/user/{name}', function ($name) {
//     return $name;
// })->whereAlphaNumeric('name');

// Route::get('/user/{id}', function ($id) {
//     return $id;
// })->whereUuid('id');

// Route::get('/search/{search}', function ($search) {
//     return $search;
// })->where('search', '.*');
