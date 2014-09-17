<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::post('user/login', array('as' => 'user.login', 'uses' => 'UserController@login'));
Route::get('user/logout', array('as'=>'user.logout', 'uses'=> 'UserController@logout'));
Route::post('company/companyEdit/{id}', array('as' => 'company.update', 'uses' => 'CompanyController@update'));
Route::post('project/projectEdit/{id}', array('as' => 'project.update', 'uses' => 'ProjectController@update'));
Route::post('portal/overview/{id}', array('as' => 'overview.update', 'uses' => 'OverviewController@update'));
Route::post('portal/access/{id}', array('as' => 'access.update', 'uses' => 'AccessController@update'));
Route::post('portal/activities/{id}', array('as' => 'activities.update', 'uses' => 'ActivitiesController@update'));
Route::post('portal/construction/{id}', array('as' => 'construction.update', 'uses' => 'Constructionontroller@update'));
Route::post('portal/infrastucture/{id}', array('as' => 'infrastructure.update', 'uses' => 'InfrastructureController@update'));
Route::post('portal/other/{id}', array('as' => 'other.update', 'uses' => 'OtherController@update'));
Route::post('portal/siteConditions/{id}', array('as' => 'siteConditions.update', 'uses' => 'SiteController@update'));
Route::post('portal/overview', array('as' => 'portal.overview', 'uses' => 'OverviewController@index'));
Route::post('user/signup/{id}', array('as' => 'user.signup', 'uses' => 'UserController@update'));

Route::get('/', function() { return View::make('index'); });
Route::get('failedLogin', function() { return View::make('failedLogin'); });
Route::get('waste', function() { Redirect::action('ProjectController@index'); });
Route::get('signup', function() { return View::make('user/signup'); });
Route::get('userProjects', function() { return Redirect::action('ProjectController@index'); });
Route::get('userProject', function() { return Redirect::action('ProjectController@show'); });


Route::resource('index', 'IndexController');
Route::resource('user', 'UserController');
Route::resource('company', 'CompanyController');
Route::resource('project', 'ProjectController');
Route::resource('start', 'PortalController');
Route::resource('overview', 'OverviewController');
Route::resource('approvalActivities', 'ActivitiesController');
Route::resource('accessResources', 'AccessController');
Route::resource('construction', 'ContructionController');
Route::resource('infrastructure', 'InfrastructureController');
Route::resource('other', 'OtherController');
Route::resource('siteConditions', 'SiteController');
Route::resource('waste', 'WasteController');