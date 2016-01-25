<?php
use App\User;
use App\Company;

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

Route::get('/test', function () {
   
    /*$user=User::find(1);
    $companies= $user->company;
    return $companies;*/
    
    $company=Company::find(1);
    //return count($company->jobs);
    return count($company);//if more than 1 company have user chose a company else
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feature', function () {
    return "This function has been delted";
});

Route::get('/krewbase',function(){
    return view('krewbase.splash');
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
