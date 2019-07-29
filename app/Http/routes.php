<?php
use App\Models\CCampaign;

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
    
    $campaign = CCampaign::all();

    return view('prevent', compact('campaign'));
});


Route::get('/password/{pass}', function ($pass) {
    return bcrypt($pass);
});

// Route::get('/', 'Prevent\IndexController@get');
Route::post('/prevent/register', 'Prevent\RegisterController@register');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('dashboard', 'HomeController@index');