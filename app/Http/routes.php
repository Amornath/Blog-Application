<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    $categories = App\Category::all();
	$posts = App\Post::paginate(2);
    return view('welcome',compact('posts','categories'));
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/post/{id}', 'AdminPostController@show');

Route::get('/post-comment/{id}', 'CommentsController@show');
Route::post('/store-comment', 'CommentsController@store');

Route::post('/store-reply', 'ReplyController@store');

Route::post('/store-user', 'UserFromOutSideController@store');
Route::get('/blog-detail/{id}', 'UserFromOutSideController@show');

Route::post('/store-outcomment', 'UserFromOutSideController@commentStore');
Route::post('/store-replyFromOut', 'UserFromOutSideController@replyStore');






Route::group(['middleware'=>'Admin'], function(){

	

Route::get('/admin-user','AdminUserController@index');
Route::get('/user-create','AdminUserController@create');
Route::post('/store','AdminUserController@store');
Route::get('/edit/{id}','AdminUserController@edit');
Route::post('/update/{id}','AdminUserController@update');
Route::post('/delete/{id}','AdminUserController@destroy');

Route::get('/admin-posts','AdminPostController@index');
Route::get('/post-create','AdminPostController@create');
Route::post('/store-post','AdminPostController@store');
Route::get('/edit-post/{id}','AdminPostController@edit');
Route::post('/update-post/{id}','AdminPostController@update');
Route::post('/delete-post/{id}','AdminPostController@destroy');

Route::get('/category','AdminCategoryController@index');
Route::post('/store-category','AdminCategoryController@store');
Route::get('/edit-category/{id}','AdminCategoryController@edit');
Route::post('/update-category/{id}','AdminCategoryController@update');
Route::post('/delete-category/{id}','AdminCategoryController@destroy');


Route::get('/media','AdminMediaController@index');
Route::get('/upload','AdminMediaController@create');
Route::post('/store-midea','AdminMediaController@store');

Route::get('/comments','CommentsController@index');
Route::post('/update-comment/{id}','CommentsController@update');
Route::post('/delete-comment/{id}','CommentsController@destroy');


Route::get('/admin',function(){
    return view('admin.index');
});   



});


