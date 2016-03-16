<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// route to show the login form
Route::get('login', array('uses' => 'UsersController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'UsersController@doLogin'));

Route::get('/logout', array('as' => 'logout', 'uses' => 'UsersController@doLogout'));

Route::get('/updateapp', function()
{
    \Artisan::call('composer dump-autoload');
    echo 'dump-autoload complete';
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function(){
        if(Auth::check()){
            return View::make('employee/create');
        }
        return View::make('login');
    });

    Route::resource('department', 'DepartmentController');

    Route::resource('employee', 'EmployeeController');

    Route::resource('rank', 'RankController');

    Route::resource('jobrole', 'JobroleController');

    Route::resource('nationality', 'NationalityController');
});
