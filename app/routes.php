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

Route::get('/', function()
           {
             return View::make('index');
           });
Route::get('failedLogin', function()
            {
              return View::make('failedLogin');
            });
Route::get('waste', function()
           {
             return View::make('portal/sideBar/waste');
           });
Route::get('signup', function()
           {
             return View::make('user/signup');
           });
Route::get('userProjects', function()
           {
             return Redirect::action('ProjectController@index');
           });

Route::post('portal/overview', array('as' => 'portal.overview', 'uses' => 'OverviewController@index'));
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