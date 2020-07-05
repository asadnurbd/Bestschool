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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/review', function () {
    return view('review');
});
Route::get('/socialnetwork', function () {
    return view('socialnetwork');
});


Route::get('/team', function () {
    return view('team');
});

Route::get('/schooldetail', function () {
    return view('schooldetail');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/search_school', 'ViewController@school_search')->name('home.school_search');
Route::get('/school', 'ViewController@schoolview')->name('school');
Route::get('/', 'ViewController@schoolview')->name('school');
Route::get('/viewdetail/{id}', 'ViewController@schooldetailviewid')->name('schooldetail');
Route::get('/review', 'ViewController@review')->name('review');




Auth::routes();

Route::group(['middleware'=>['auth']], function (){
////////////////////////////school post home//////////////////////////////////////
  Route::get('/post', 'ViewController@post_home')->name('post_home');
  Route::get('/count', 'ViewController@count')->name('count');
  Route::post('/comment/{id}','ViewController@comment_post')->name('comment_post');


  Route::post('/school_post', 'ViewController@post_school_store')->name('store_post_school');
  ////////////////////////////school  comment//////////////////////////////////////
   //
  Route::post('comments/{post}','ViewController@commentstore')->name('comment.store');
});


////////////////////////////////////home page school search//////////////////////////////////////

Route::post('/Update_profile/{id}','HomeController@profile_update')->name('home.profile_update');

Route::get('/home', 'HomeController@index')->name('home');
////////////////////////////////////admin page //////////////////////////////////////

Route::prefix('admin')->group(function(){
  Route::post('/post/{id}', 'Auth\AdminLoginController@comment')->name('post');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/', 'AdminController@counts')->name('admin.dashboard');

  // Route::get('/editschool', 'AdminController@editschool')->name('admin.editschool');
	Route::get('/newuser', 'AdminController@newuser')->name('admin.newuser');
	Route::get('/profile', 'AdminController@profile')->name('admin.profile');

  // ****************************************************school_infos table  for admin////////////////////////////////

  Route::get('/school_info', 'AdminController@school_info')->name('admin.school_info');
  Route::post('/store_school_info','AdminController@store_school_info')->name('store_school_info');

  Route::get('/editschool', 'AdminController@editschool')->name('admin.editschool');
  Route::get('/delete_school/{school_id}', 'AdminController@delete_school')->name('admin.school_delete');
  Route::get('/edit_school/{school_id}', 'AdminController@edit_school')->name('admin.school_edit');
  Route::post('/Update_school/{school_id}','AdminController@update_school')->name('admin.school_update');
  Route::get('/search_school', 'AdminController@school_search')->name('admin.school_search');


////////////////////////////user table  for admin////////////////////////////////////////

   Route::get('/edituser', 'AdminController@edituser')->name('admin.edituser');
   Route::get('/delete_user/{user_id}', 'AdminController@delete_user')->name('admin.user_delete');
   Route::get('/user_search', 'AdminController@user_search')->name('admin.user_search');

   ////////////////////////////school post admin//////////////////////////////////////
   Route::get('/editpost', 'AdminController@editpost')->name('admin.editpost');
   Route::get('/delete_post/{post_id}', 'AdminController@delete_post')->name('admin.post_delete');
   Route::get('/post_search', 'AdminController@post_search')->name('admin.post_search');
   Route::get('/edit_post/{post_id}', 'AdminController@edit_post')->name('admin.post_edit');
   Route::post('/Update_post/{post_id}','AdminController@update_post')->name('admin.post_update');




   //////////////////////////// admin comment //////////////////////////////////////



   Route::get('/editcomment', 'AdminController@editcomment')->name('admin.editcomment');
   Route::get('/comment_search', 'AdminController@comment_search')->name('admin.comment_search');
   Route::get('/delete_comment/{comment_id}', 'AdminController@delete_comment')->name('admin.comment_delete');
   Route::get('/edit_comment/{comment_id}', 'AdminController@edit_comment')->name('admin.comment_edit');
   Route::post('/Update_comment/{comment_id}','AdminController@update_comment')->name('admin.comment_update');
   //////////////////////////// admin post comment //////////////////////////////////////


   Route::get('/editpostcomment', 'AdminController@editpostcomment')->name('admin.editpostcomment');
    Route::get('/postcomment_search', 'AdminController@postcomment_search')->name('admin.postcomment_search');
    Route::get('/delete_postcomment/{id}', 'AdminController@delete_postcomment')->name('admin.postcomment_delete');
    Route::get('/edit_postcomment/{id}', 'AdminController@edit_postcomment')->name('admin.postcomment_edit');
    Route::post('/Update_postcomment/{id}','AdminController@update_postcomment')->name('admin.postcomment_update');





});
