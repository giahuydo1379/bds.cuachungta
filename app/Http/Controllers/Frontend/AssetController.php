<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleImage;
use App\Models\Asset;
use App\Models\AssetImage;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use App\Models\SlideShow;

class AssetController extends Controller
{
    protected $data = []; // the information we send to the view

    public function index(Request $request)
    {
        $params = $request->all();
        $limit = $request->input('limit', 10);
        $params['limit'] = $limit;

        $assets = Asset::getSearchAssets($params);

        $this->data['params'] = $params;
        $this->data['assets'] = $assets;

        return view('frontend.asset.index', $this->data);
    }

    public function buy(Request $request)
    {
        $params = $request->all();
        $limit = $request->input('limit', 10);
        $params['limit'] = $limit;

        $assets = Asset::getSearchAssets($params);

        $this->data['params'] = $params;
        $this->data['assets'] = $assets;

        return view('frontend.asset.index', $this->data);
    }

    public function hot(Request $request)
    {
        $params = $request->all();
        $limit = $request->input('limit', 10);
        $params['limit'] = $limit;

        $assets = Asset::getSearchAssets($params);

        $this->data['params'] = $params;
        $this->data['assets'] = $assets;

        return view('frontend.asset.index', $this->data);
    }

    public function show(Request $request, $slug, $id)
    {
        $object = Asset::find($id);
        if (!$object) {
            abort(404);
        }
        $this->data['object'] = $object;

        $images = AssetImage::where('assets_images.asset_id', $id)->orderBy('assets_images.id', 'desc')->get();
        $this->data['images'] = $images;

        return view('frontend.asset.show', $this->data);
    }
}
