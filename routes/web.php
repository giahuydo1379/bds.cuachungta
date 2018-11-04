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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
// Auth::routes();

// Trang chủ
Route::get('/', ['as' => 'home', 'uses' => 'Frontend\IndexController@index']);
Route::get('/tim-kiem', ['as' => 'search.index', 'uses' => 'Frontend\SearchController@index']);
Route::get('/tin-noi-bat', ['as' => 'asset.hot', 'uses' => 'Frontend\AssetController@hot']);
Route::get('/nha-dat-cho-thue', ['as' => 'asset.lease', 'uses' => 'Frontend\AssetController@index']);
Route::get('/nha-dat-can-thue', ['as' => 'asset.buy', 'uses' => 'Frontend\AssetController@buy']);
Route::get('/{slug}-a{id}.html', ['as' => 'asset.show', 'uses' => 'Frontend\AssetController@show'])
    ->where(['slug' => '[a-z\-0-9]+', 'id' => '[0-9]+']);

Route::get('/tin-tuc', ['as' => 'article.index', 'uses' => 'Frontend\ArticleController@index']);
Route::get('/phong-thuy', ['as' => 'article.fengshui', 'uses' => 'Frontend\ArticleController@fengshui']);
Route::get('/{slug}-n{id}.html', ['as' => 'article.show', 'uses' => 'Frontend\ArticleController@show'])
    ->where(['slug' => '[a-z\-0-9]+', 'id' => '[0-9]+']);

Route::group(['prefix' => 'location'], function () {
    Route::get('/', 'LocationController@index')->name('location');
    Route::get('get-provinces', 'LocationController@get_provinces')->name('location.provinces');
    Route::get('get-provinces', 'LocationController@get_provinces');
    Route::get('get-districts', 'LocationController@get_districts');
    Route::get('get-wards', 'LocationController@get_wards');
    Route::get('geo-ids-by-address', 'LocationController@geoIdsByAddress');
});

Route::group(['prefix' => 'cache'], function () {
    Route::get('/update-js-data', 'CacheController@update_js_data')->name('cache.update-js-data');
    Route::get('/update-img', 'CacheController@update_img')->name('cache.update-img');
    Route::get('/update-js', 'CacheController@update_js')->name('cache.update-js');
    Route::get('/update-css', 'CacheController@update_css')->name('cache.update-css');
    Route::get('/update-all', 'CacheController@update_all')->name('cache.update-all');
});

/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);