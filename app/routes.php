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
Route::post('index/login', array('as' => 'index.login', 'uses' => 'IndexController@login'));
Route::get('index/logout', array('as'=>'index.logout', 'uses'=> 'IndexController@logout'));

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
             return View::make('porta/sideBar/waste');
           });
Route::post('portal/projectOverview', array('as' => 'portal.projectOverview', 'uses' => 'OverviewController@index'));
Route::resource('index', 'IndexController');
Route::resource('company', 'CompanyController');
Route::resource('project', 'ProjectController');
Route::resource('start', 'PortalController');
Route::resource('projectOverview', 'OverviewController');
Route::resource('approvalActivities', 'ActivitiesController');
Route::resource('accessResources', 'AccessController');
Route::resource('construction', 'ContructionController');
Route::resource('infrastructure', 'InfrastructureController');
Route::resource('other', 'OtherController');
Route::resource('siteConditions', 'SiteController');
Route::resource('waste', 'WasteController');