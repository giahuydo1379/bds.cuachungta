<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cache;
use \App\Models\HomeBlock;

class Block
{
    public static function form_search() {
        return view('frontend.blocks.form-search', []);
    }

    public static function asset_hot() {
        $assets_hot = \App\Models\Asset::getAssetsHot(4);

        return view('frontend.blocks.asset-hot', ['assets_hot' => $assets_hot]);
    }

    public static function property_item($item) {
        if (!$item) return '';
        
        return view('frontend.blocks.property-item', ['item' => $item]);
    }

    public static function get_link_article($item=null)
    {
        return route('article.show', ['slug' => 'slug-article', 'id' => 1]);
    }

    public static function get_link_asset($item=null)
    {
        return route('asset.show', ['slug' => 'slug-asset', 'id' => 1]);
    }
}