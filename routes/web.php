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
use Illuminate\Http\Request;

Route::get('/', 'script@index');
//Route::post('/script/add', 'script@create');
//Route::delete('/script/delete/{script}', 'script@remove' );

Route::get('categorylist/{script}', 'categoryList@show');
Route::get('categoryList/{script}', 'categoryList@show');

Route::resource('category','category');
Route::resource('script', 'script');

//Route::post('category/add', function(Request $requests){
//  $script = App\Script::find($requests->script);
//  $script->categories()->sync($requests->categories);
//});
