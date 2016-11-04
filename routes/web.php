<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

// Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');

// Route::get('auth/google', 'Auth\RegisterController@redirect_to_google');
// Route::get('auth/facebook', 'Auth\RegisterController@redirect_to_facebook');
// Route::get('auth/twitter', 'Auth\RegisterController@redirect_to_twitter');
// Route::get('auth/callback/{provider}', 'Auth\RegisterController@handle_oauth_callback');
// // Route::get('auth/facebook', 'Auth\RegisterController@redirectToFacebook');
// // Route::get('auth/facebook/callback', 'Auth\RegisterController@handleFacebookCallback');

Route::get('/home/admin', function(){
    return view('backend.home');
});

Route::get('/auth/{provider?}',[
    'uses' => 'Auth\SocialController@getSocialAuth',
    'as'   => 'auth.getSocialAuth'
]);

Route::get('/auth/callback/{provider?}',[
    'uses' => 'Auth\SocialController@getSocialAuthCallback',
    'as'   => 'auth.getSocialAuthCallback'
]);

Route::post('/social/register', 'Auth\RegisterController@register_social');