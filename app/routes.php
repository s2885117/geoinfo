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
Route::get('form', function(){
 return View::make('form');
});

Route::get('/download', 'UploadController@download');
Route::get('/upload/{id}', 'UploadController@upload');
Route::get('/downloads/{id}', 'UploadController@downloadfile');
Route::get('/deleteFile/{id}', 'UploadController@deleteFile');
Route::any('/upload/uploading/{id}', array('as' => 'uploads.uploading', 'uses' => 'UploadController@uploadingfiles'));
//Route::get('SaveUser', 'SaveUserController@show');
//Route::get('SaveUser', 'UserController@savePosition');

Route::get('files', 'UploadController@index');
Route::post('user/login', array('as' => 'user.login', 'uses' => 'UserController@login'));
Route::get('user/logout', array('as'=>'user.logout', 'uses'=> 'UserController@logout'));
Route::post('company/companyEdit/{id}', array('as' => 'company.update', 'uses' => 'CompanyController@update'));
Route::post('project/projectEdit/{id}', array('as' => 'project.update', 'uses' => 'ProjectController@update'));
Route::post('overview/{id}', array('as' => 'overview.update', 'uses' => 'OverviewController@update'));
Route::post('construction_indicators/{id}', array('as' => 'waste.update', 'uses' => 'WasteController@update'));
Route::post('operations/{id}', array('as' => 'operation.update', 'uses' => 'OperationController@update'));
Route::post('access/{id}', array('as' => 'access.update', 'uses' => 'AccessController@update'));
Route::post('activities/{id}', array('as' => 'activities.update', 'uses' => 'ActivitiesController@update'));
Route::post('construction/{id}', array('as' => 'construction.update', 'uses' => 'Constructionontroller@update'));
Route::post('infrastructure/{id}', array('as' => 'infrastructure.update', 'uses' => 'InfrastructureController@update'));
Route::post('other/{id}', array('as' => 'other.update', 'uses' => 'OtherController@update'));
Route::post('siteConditions/{id}', array('as' => 'siteConditions.update', 'uses' => 'SiteController@update'));
Route::post('overview', array('as' => 'portal.overview', 'uses' => 'OverviewController@index'));
Route::post('user/signup/{id}', array('as' => 'user.signup', 'uses' => 'UserController@update'));
Route::post('saveUser/{id}', 'UserController@savePosition');
Route::post('climate/{id}', array('as' => 'climate.update', 'uses' => 'ClimateController@update'));
Route::post('generate_summary/{id}', array('as' => 'generate_summary.generate', 'uses' => 'GenerateSummaryController@generate'));


Route::get('/', function() { return View::make('index'); });
Route::get('failedLogin', function() { return View::make('failedLogin'); });
Route::get('waste', function() { Redirect::action('WasteController@show'); });
Route::get('operations', function() { Redirect::action('OperationController@show'); });
Route::get('signup', function() { return View::make('user.signup'); });
Route::get('login', function() { return View::make('user.login'); });
Route::get('companyCreate', function() { return View::make('company.companyCreate'); });
Route::get('projectCreate', function() { return View::make('project.projectCreate'); });
Route::get('userProjects', function() { return Redirect::action('ProjectController@index'); });


Route::resource('index', 'IndexController');
Route::resource('user', 'UserController');
Route::resource('company', 'CompanyController');
Route::resource('project', 'ProjectController');
Route::resource('start', 'PortalController');
Route::resource('overview', 'OverviewController');
Route::resource('activities', 'ActivitiesController');
Route::resource('accessResources', 'AccessController');
Route::resource('construction', 'ContructionController');
Route::resource('infrastructure', 'InfrastructureController');
Route::resource('other', 'OtherController');
Route::resource('siteConditions', 'SiteController');
Route::resource('construction_indicators', 'WasteController');
Route::resource('operations', 'OperationController');
Route::resource('values', 'ValuesController');
Route::resource('biodiversity', 'BiodiversityController');
Route::resource('climate', 'ClimateController');
Route::resource('health', 'HealthController');
Route::resource('investment', 'InvestmentController');
Route::resource('labour_productivity', 'LabourProductivityController');
Route::resource('landscape', 'LandscapeController');
Route::resource('place', 'PlaceController');
Route::resource('property', 'PropertyController');
Route::resource('renewables', 'RenewablesController');
Route::resource('transport', 'TransportController');
Route::resource('walkability', 'WalkabilityController');
Route::resource('water', 'WaterController');
Route::resource('saveUser', 'SaveUserController');
Route::resource('generate_summary', 'GenerateSummaryController');