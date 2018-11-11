<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cache;
use \App\Models\HomeBlock;

class Block
{
    public static function form_search() {
        return view('frontend.blocks.form-search', []);
    }

    public static function assets_buy($limit=8) {
        $assets_buy = \App\Models\Asset::getTopAssetsByType('buy', $limit);

        return view('frontend.blocks.assets-buy', ['assets_buy' => $assets_buy]);
    }

    public static function assets_lease($limit=8) {
        $assets_lease = \App\Models\Asset::getTopAssetsByType('lease', $limit);

        return view('frontend.blocks.assets-lease', ['assets_lease' => $assets_lease]);
    }

    public static function assets_hot() {
        $assets_hot = \App\Models\Asset::getAssetsHot(4);

        return view('frontend.blocks.assets-hot', ['assets_hot' => $assets_hot]);
    }

    public static function property_item_content($item) {
        if (!$item) return '';

        return view('frontend.blocks.property-item-content', ['item' => $item]);
    }

    public static function property_item($item) {
        if (!$item) return '';

        return view('frontend.blocks.property-item', ['item' => $item]);
    }

    public static function get_link_article($item=null)
    {
        if (!$item) return '';
        
        if (!is_array($item)) $item = $item->toArray();

        return route('fe.article.show', ['slug' => str_slug(@$item['name']), 'id' => @$item['id']]);
    }

    public static function get_link_asset($item=null)
    {
        if (!$item) return '';

        if (!is_array($item)) $item = $item->toArray();

        return route('fe.asset.show', ['slug' => str_slug(@$item['name']), 'id' => @$item['id']]);
    }
}