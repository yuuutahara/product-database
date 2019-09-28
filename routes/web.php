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

Route::get('/', 'ProductsController@index'); 

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

//Listへ移動
Route::get('list', 'ProductsController@showList')->name('list.get');

//List2に移動
Route::get('list2/{id}','ProductsController@showList2')->name('list2.get');

//List3に移動
Route::get('list3/{id}','ProductsController@showList3')->name('list3.get');

//Feature毎のListへ移動
Route::get('list/feature/{id}', 'FeaturesController@showFeatureList')->name('featureList.get');

//Editへ移動
Route::get('edit/{id}', 'ProductsController@showEdit')->name('edit.get');

//更新
Route::put('edit/{id}', 'ProductsController@update')->name('products.update');

//Getへ移動
Route::get('get1/{id}', 'ProductsController@showGet')->name('get.get');

//Get2へ移動
Route::get('get2/{id}', 'ProductsController@showGet2')->name('get2.get');

//Get3へ移動
Route::get('get3/{id}', 'ProductsController@showGet3')->name('get3.get');

//Productを削除
Route::delete('edit/{id}', 'ProductsController@destroy')->name('products.destroy');

//Inputへ移動
Route::get('input', 'ProductsController@showInput')->name('input.get');

//Inputで作成したProductを保存
Route::post('input', 'ProductsController@store')->name('products.store');

//All Featuresへ移動
Route::get('input/all', 'FeaturesController@showAll')->name('allFeatures.get');

//New Featureへ移動
Route::get('input/new', 'FeaturesController@showNew')->name('newFeature.get');

//New Featuresで作成したFeatureを保存
Route::post('input/new', 'FeaturesController@store')->name('features.store');


