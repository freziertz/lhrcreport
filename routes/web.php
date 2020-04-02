<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('reports', function () {
    return view('reports.index');
});

Route::get('users', ['uses'=>'UserController@index', 'as'=>'users.index']);

Route::group(['prefix' => 'phpinfo','as' => 'laravelPhpInfo::','namespace' => 'jeremykenedy\LaravelPhpInfo\App\Http\Controllers'], function () {
    Route::get('/', ['uses' => 'LaravelPhpInfoController@phpinfo'])->name('phpinfo');
});

//Route::resource('report', 'ReportController');

Route::get('attendance', ['uses'=>'ReportController@attendance', 'as'=>'reports.attendance']);

Route::get('reports/create', ['uses'=>'ReportController@create', 'as'=>'reports.create']);

Route::get('report', ['uses'=>'ReportController@index', 'as'=>'reports.index']);
