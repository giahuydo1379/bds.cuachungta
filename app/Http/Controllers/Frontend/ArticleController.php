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

class ArticleController extends Controller
{
    protected $data = []; // the information we send to the view

    public function index(Request $request)
    {
        return view('frontend.article.index', $this->data);
    }

    public function fengshui(Request $request)
    {
        return view('frontend.article.index', $this->data);
    }

    public function show(Request $request, $slug, $id)
    {
        return view('frontend.article.show', $this->data);
    }
}
