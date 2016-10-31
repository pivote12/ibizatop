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

/*
 * Routes for client
 */


Route::group(['namespace' => 'Frontend'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('home', 'HomeController@index');
    Route::get('agency', 'PagesController@agency');
    Route::get('boy', 'PagesController@boy');
    Route::get('trans', 'PagesController@trans');
    Route::get('escorts', 'PagesController@escorts');
    Route::get('profile/{name}', 'PagesController@profile');
    Route::POST('profile/{name}', 'PagesController@profile');
    Route::get('shemale', 'PagesController@shemale');
    Route::get('tag/{name}', 'PagesController@tag');

    Route::get('locale', 'Configuration@index');

});


/*
 * Routes for Administrator
 */
Route::group(['prefix' => 'admin'], function () {

    Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
        Route::get('/', 'HomeController@index');
        resource('configure-principal', 'ConfigurePrincipal');
        resource('configure-seo', 'ConfigureSeo');
        resource('configure-column-one', 'ConfigureColumnOne');
        resource('configure-column-two', 'ConfigureColumnTwo');
        resource('configure-column-tree', 'ConfigureColumnTree');
        resource('configure-banner', 'ConfigureBanners');
        resource('configure-slide-show', 'ConfigureSlideShow');
        resource('users', 'UsersController');
        resource('profiles','Profiles');

        resource('configure-profile', 'UsersController');
        Route::get('locale', 'Configuration@index');
        Route::POST('locale', 'Configuration@index');
        route::get('/img/{id}/{key}','Profiles@deleteImage');
    });

    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
    Route::get('register', 'Auth\AuthController@getRegister');
    Route::post('register', 'Auth\AuthController@postRegister');

    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');

    Route::post('password/reset', 'Auth\PasswordController@postReset');
});

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
