
<?php

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
Route::resource('bbc', 'PostsController');
Route::resource('mypage', 'MypageController')->middleware('auth');
Route::resource('akiya', 'AkiyaController');
Route::resource('builder', 'BuilderController');
Route::resource('build', 'BuildController');

Route::resource('/photos', 'PhotosController', ['only' => ['create', 'store']]);

Route::get('/akiya/{id}/show', 'AkiyaController@show');
Route::get('/akiya', 'AkiyaController@index');
Route::post('/akiya/favorite', 'AkiyaController@favorite');

Route::get('/build/{id}/show', 'BuildController@show');
Route::get('/build', 'BuildController@index');

Route::get('/build/create', 'BuildController@create');
Route::post('/build/create', 'BuildController@store');

Route::get('/builder/{id}/show', 'BuilderController@show');
Route::get('/builder', 'BuilderController@index');

Route::get('/builder/create', 'BuilderController@create');
Route::post('/builder/create', 'BuildController@store');

Route::get('/match/create', 'MatchController@create');
Route::post('/match/create', 'MatchController@store');


Route::resource('comments', 'CommentsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('matching', 'MatchingController@index')->name('matching.index');

Route::get('matching/result/{user}', 'MatchingController@result')->name('matching.result');

Route::get('/step01', function () {
    return view('step/step01');
});
Route::get('/step02', function () {
    return view('step/step02');
});
Route::get('/step03', function () {
    return view('step/step03');
});
Route::get('/step04', function () {
    return view('step/step04');
});
