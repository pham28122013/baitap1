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
Route::get('user/{id}', function($id){
	switch($id){
		case 5:
		return 'pham';
		case 4:
		return 'pham1';
		default:
		return 'pham10';
	}
});

Route::prefix('thoitrang')->group(function (){
	Route::get('vietnam', function(){
		return 'thoitrang - vietnam';
	});
	Route::get('quocte', function(){
		return 'thoitrang - quocte';
	});
});
Route::get('/greeting', function () {
    return view('greeting', ['name' => 'James']);
});
Route::get('/child',function(){
 return view('child');
});
Route::view('/test','test');
Route::view('/abc','abc');
Route::view('/contact','contact');