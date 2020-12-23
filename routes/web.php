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

Route::get('/', [

    'uses' => 'FrontendController@index',
    'as' => 'home'
]);
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
  {
    Route::get('/home', [

        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);
    //Facility
    Route::get('/facility/create', [
        
        'uses' => 'FacilitiesController@create',
        'as' => 'facility.create'
    ]);
    Route::get('/facility/all', [
        
        'uses' => 'FacilitiesController@index',
        'as' => 'facility.index'
    ]);
    Route::get('/facility/edit/{id}', [
        
        'uses' => 'FacilitiesController@edit',
        'as' => 'facility.edit'
    ]);
    Route::post('/facility/update/{id}', [
        
        'uses' => 'FacilitiesController@update',
        'as' => 'facility.update'
    ]);
    Route::get('/facility/delete/{id}', [
        
        'uses' => 'FacilitiesController@destroy',
        'as' => 'facility.delete'
    ]);

    Route::post('/facility/store', [
        
        'uses' => 'FacilitiesController@store',
        'as' => 'facility.store'
    ]);

    //Service

    Route::get('/service/create', [
        
        'uses' => 'ServiceController@create',

        'as' => 'service.create'
    ]);
    Route::get('/service/all', [
        
        'uses' => 'ServiceController@index',
        'as' => 'service.index'
    ]);
    Route::get('/service/edit/{id}', [
        
        'uses' => 'ServiceController@edit',
        'as' => 'service.edit'
    ]);
    Route::post('/service/update/{id}', [
        
        'uses' => 'ServiceController@update',
        'as' => 'service.update'
    ]);
    Route::get('/service/delete/{id}', [
        
        'uses' => 'ServiceController@destroy',
        'as' => 'service.delete'
    ]);

    Route::post('/service/store', [
        
        'uses' => 'ServiceController@store',
        'as' => 'service.store'
    ]);

    //student
    Route::get('/student/create', [
        
        'uses' => 'StudentController@create',
        'as' => 'student.create'
    ]);
    Route::get('/student/all', [
        
        'uses' => 'StudentController@index',
        'as' => 'student.index'
    ]);
    Route::get('/student/edit/{id}', [
        
        'uses' => 'StudentController@edit',
        'as' => 'student.edit'
    ]);
    Route::post('/student/update/{id}', [
        
        'uses' => 'StudentController@update',
        'as' => 'student.update'
    ]);
    Route::get('/student/delete/{id}', [
        
        'uses' => 'StudentController@destroy',
        'as' => 'student.delete'
    ]);

    Route::post('/student/store', [
        
        'uses' => 'StudentController@store',
        'as' => 'student.store'
    ]);


  });

Auth::routes();


