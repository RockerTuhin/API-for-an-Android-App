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
    //return view('welcome');
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-item','ItemController@index');
Route::get('/add-subitem/{item_id}','SubitemController@index');
Route::get('/add-sub-subitem/{item_id}/{subItem_id}','SubSubitemController@index');
Route::get('/add-contents-one/{item_id}','ContentsController@indexOne');
Route::get('/add-contents-two/{item_id}/{subItem_id}','ContentsController@indexTwo');
Route::get('/add-contents-three/{item_id}/{subItem_id}/{subSubItem_id}','ContentsController@indexThree');
Route::get('/show-contents-one/{item_id}','ContentsController@showContentsOne');
Route::get('/show-contents-two/{item_id}/{subItem_id}','ContentsController@showContentsTwo');
Route::get('/show-contents-three/{item_id}/{subItem_id}/{subSubItem_id}','ContentsController@showContentsThree');
Route::get('/edit-version','VersionController@EditVersion');
Route::get('/edit-contents-one/{item_id}/{content_id}','ContentsController@editOne');
Route::get('/edit-contents-two/{item_id}/{subItem_id}/{content_id}','ContentsController@editTwo');
Route::get('/edit-contents-three/{item_id}/{subItem_id}/{subSubItem_id}/{content_id}','ContentsController@editThree');


Route::post('/insert-item','ItemController@inserItem');
Route::post('/insert-sub-item','SubitemController@inserSubItem');
Route::post('/insert-sub-subitem','SubSubitemController@inserSubSubItem');
Route::post('/insert-contents','ContentsController@inserContents');
Route::post('/update-version','VersionController@UpdateVersion');


Route::post('/update-contents/{item_id}/{content_id}','ContentsController@updateContentsOne');
Route::post('/update-contents/{item_id}/{subItem_id}/{content_id}','ContentsController@updateContentsTwo');
Route::post('/update-contents/{item_id}/{subItem_id}/{subSubItem_id}/{content_id}','ContentsController@updateContentsThree');



Route::get('/change-password','APIController@changePassword');
Route::post('/update-password/{id}','APIController@updatePassword');



Route::get('/delete-contents-one/{item_id}/{content_id}','ContentsController@deleteContentsOne');
Route::get('/delete-contents-two/{item_id}/{subItem_id}/{content_id}','ContentsController@deleteContentsTwo');
Route::get('/delete-contents-three/{item_id}/{subItem_id}/{subSubItem_id}/{content_id}','ContentsController@deleteContentsThree');


Route::get('/edit-item/{id}','ItemController@editItem');
Route::post('/update-item/{id}','ItemController@updateItem');
Route::get('/delete-item/{id}','ItemController@deleteItem');
Route::get('/edit-subitem/{item_id}/{id}','SubitemController@editSubItem');
Route::post('/update-sub-item/{item_id}/{id}','SubitemController@updateSubItem');
Route::get('/delete-subitem/{item_id}/{id}','SubitemController@deleteSubItem');
Route::get('/edit-sub-subItem/{item_id}/{subItem_id}/{id}','SubSubitemController@editSubSubItem');
Route::post('/update-sub-subitem/{item_id}/{subItem_id}/{id}','SubSubitemController@updateSubSubItem');
Route::get('/delete-sub-subItem/{item_id}/{subItem_id}/{id}','SubSubitemController@deleteSubSubItem');
