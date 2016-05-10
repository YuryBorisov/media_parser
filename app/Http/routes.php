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

Route::get('/', function () {

	if (Auth::check()) return redirect()->intended('admin');
    return view('index');
});

Route::get('create', array('uses' => 'OutController@createJson'));

Route::get('statistics', array('uses' => 'OutController@addAllComplex'));

Route::get('statcomplex/{nameComplex}', array('uses' => 'OutController@addStatisticsForComplex'));

Route::get('/out/{idSite}/{idComplex}/{date}', array('uses' => 'OutController@index2'));

Route::get('/g', array('uses' => 'OutController@g'));

Route::get(
	"api/banner_place", 
	array(
		'uses' => 'BannersApiController@getAll',
		'middleware'=>'apiAuthenticate'
	)
);

Route::get("api/page/context", array(
		'uses' => 'BannersApiController@getContextPage',
		'middleware'=>'apiAuthenticate'
	)
);

Route::get("api/page/search", array(
		'uses' => 'BannersApiController@getSearchPage',
		'middleware'=>'apiAuthenticate'
	)
);

Route::post(
	"api/fact", 
	array(
		'uses' => 'BannersApiController@createFact',
		'middleware'=>'apiAuthenticate'
	)
);

Route::post(
	"api/direct", 
	array(
		'uses' => 'BannersApiController@createDirects',
		'middleware'=>'apiAuthenticate'
	)
);

Route::post(
	"api/queries", 
	array(
		'uses' => 'BannersApiController@createQueries',
		'middleware'=>'apiAuthenticate'
	)
);

Route::post(
	"api/add_search",
	array(
		'uses' => 'BannersApiController@addSearchTrafic',
		'middleware'=>'apiAuthenticate'
	)
);

Route::post("auth/login", "AuthController@authenticate");
Route::get("auth/logout", "AuthController@logout");
