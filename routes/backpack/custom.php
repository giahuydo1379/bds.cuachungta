<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

    Route::get('slide-show/search', 'SlideShowController@search')->name('slide-show.search');
    Route::resource('slide-show', 'SlideShowController');

    Route::get('partner/search', 'PartnerController@search')->name('partner.search');
    Route::resource('partner', 'PartnerController');

    Route::get('support/search', 'SupportController@search')->name('support.search');
    Route::resource('support', 'SupportController');

    Route::get('manufacturer/search', 'ManufacturerController@search')->name('manufacturer.search');
    Route::resource('manufacturer', 'ManufacturerController');

    Route::get('product-category/search', 'ProductCategoryController@search')->name('product-category.search');
    Route::get('product-category/ajax-get-category-by-manufacturer/{manufacturer_id}', 'ProductCategoryController@ajaxGetCategoryByManufacturer')->name('product-category.ajax_get_category_by_manufacturer');
    Route::resource('product-category', 'ProductCategoryController');


    Route::get('asset-feature/search', 'AssetFeatureController@search')->name('asset-feature.search');
    Route::resource('asset-feature', 'AssetFeatureController');
    Route::post('asset-feature/ajax-active', 'AssetFeatureController@ajaxActive')->name('asset-feature.ajax_active');
    Route::post('asset-feature/ajax-inactive', 'AssetFeatureController@ajaxInactive')->name('asset-feature.ajax_inactive');
    Route::post('asset-feature/ajax-delete', 'AssetFeatureController@ajaxDelete')->name('asset-feature.ajax_delete');



    Route::get('asset-feature-variant-search', 'AssetFeatureVariantController@search')->name('asset-feature-variant.search');
    Route::resource('asset-feature-variant', 'AssetFeatureVariantController');
    Route::get('asset-feature-variant/ajax-disable-feature/{id}', 'AssetFeatureVariantController@getAjaxDisableFeature');



    Route::get('asset/search', 'AssetController@search')->name('asset.search');
    Route::post('asset/loadDistrict/{id}', 'AssetController@getDistrict');
    Route::post('asset/loadWard/{id}', 'AssetController@getWard');
    Route::post('asset/loadAssetFeatureVariant/{id}', 'AssetController@getAssetFeatureVariant');
    Route::resource('asset', 'AssetController');
    Route::post('asset/ajax-active', 'AssetController@ajaxActive')->name('asset.ajax_active');
    Route::post('asset/ajax-inactive', 'AssetController@ajaxInactive')->name('asset.ajax_inactive');
    Route::post('asset/ajax-delete', 'AssetController@ajaxDelete')->name('asset.ajax_delete');



    Route::get('product/import', 'ProductController@import')->name('product.import');
    Route::post('product/import', 'ProductController@store_import');
    Route::get('product/search', 'ProductController@search')->name('product.search');
    Route::post('product/ajax-active', 'ProductController@ajaxActive')->name('product.ajax_active');
    Route::post('product/ajax-inactive', 'ProductController@ajaxInactive')->name('product.ajax_inactive');
    Route::post('product/ajax-delete', 'ProductController@ajaxDelete')->name('product.ajax_delete');
    Route::resource('product', 'ProductController');

    Route::get('warehouse/import', 'WarehouseController@import')->name('warehouse.import');
    Route::post('warehouse/import', 'WarehouseController@store_import');
    Route::get('warehouse/search', 'WarehouseController@search')->name('warehouse.search');
    Route::resource('warehouse', 'WarehouseController');

    Route::get('article/search', 'ArticleController@search')->name('article.search');
    // Route::get('article/ajax-data', 'ArticleController@getAjaxData')->name('article.ajaxData');

    Route::get('article/search', 'ArticleController@search')->name('article.search');
    Route::post('article/ajax-active', 'ArticleController@ajaxActive')->name('article.ajax_active');
    Route::post('article/ajax-inactive', 'ArticleController@ajaxInactive')->name('article.ajax_inactive');
    Route::post('article/ajax-delete', 'ArticleController@ajaxDelete')->name('article.ajax_delete');
    Route::resource('article', 'ArticleController');


    CRUD::resource('menu-item', 'MenuItemCrudController');

    Route::post('upload', 'UploadController@index')->name('upload');
}); // this should be the absolute last line of this file
