<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cache;
use \App\Models\HomeBlock;

class Block
{
    public static function form_search() {
        return view('frontend.blocks.form-search', []);
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