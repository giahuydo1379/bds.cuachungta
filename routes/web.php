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
Route::get('/lien-he.html', ['as' => 'contact', 'uses' => 'Frontend\IndexController@contact']);
Route::get('/kho-hang.html', ['as' => 'warehouse', 'uses' => 'Frontend\IndexController@warehouse']);
Route::get('/ajax-warehouse', ['as' => 'ajax-warehouse', 'uses' => 'Frontend\IndexController@ajax_warehouse']);
Route::get('/tim-kiem', ['as' => 'search', 'uses' => 'Frontend\IndexController@search']);
Route::get('/san-pham', ['as' => 'products',
    'uses' => 'Frontend\IndexController@products']);
Route::get('/{manufacturerName}-m{id}.html', ['as' => 'category_manufacturer',
    'uses' => 'Frontend\IndexController@category_manufacturer'])->where(['manufacturerName' => '[a-z\-0-9]+', 'id' => '[0-9]+']);
Route::get('/{categoryName}-c{id}.html', ['as' => 'product_category', 'uses' => 'Frontend\IndexController@product_category'])->where(['categoryName' => '[a-z\-0-9]+', 'id' => '[0-9]+']);;
Route::get('/{productName}-p{id}.html', ['as' => 'product_detail', 'uses' => 'Frontend\IndexController@product_detail'])->where(['productName' => '[a-z\-0-9]+', 'id' => '[0-9]+']);

Route::get('/{slug_article}-a{id}.html', ['as' => 'article_detail', 'uses' => 'Frontend\IndexController@article_detail'])
    ->where(['slug_article' => '[a-z\-0-9]+', 'id' => '[0-9]+']);

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