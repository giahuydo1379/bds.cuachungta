<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleImage;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use App\Models\SlideShow;
use App\Models\Asset;

class SearchController extends Controller
{
    protected $data = []; // the information we send to the view

    public function index(Request $request)
    {
        return view('frontend.search.index', $this->data);
    }
    public function search(Request $request)
    {
        //dd($request->all());
        $provice = $request->province;
        $district = $request->district;
        $cid = $request->cid;
        $square = $request->square;
        $price = $request->price;
        
        $assets = Asset::whereProvinceId($provice)->whereDistrictId($district)->whereAssetCategoryId($cid)->get();
        dd($assets);
        $limit = $request->input('limit', 12);
        $this->data['limit'] = $limit;

        $tukhoa = $request->input('kw');

        $products = Article::getSearchArticles(['search' => $tukhoa, 'limit' => $limit]);



        $this->data['objects'] = $products;
        $this->data['tukhoa'] = $tukhoa;
        return view('frontend.search.index', $this->data);
    }
}
