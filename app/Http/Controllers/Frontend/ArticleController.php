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
        $articles = Article::orderBy('id', 'DESC')->where(['status'=> 1, 'article_category_id'=> 1, 'is_deleted' => 0])->paginate(5);
        $this->data['articles'] = $articles;
     //   dd( $articles);

        return view('frontend.article.index', $this->data);
    }

    public function fengshui(Request $request)
    {
        return view('frontend.article.index', $this->data);
    }

    public function show(Request $request, $slug, $id)
    {
        $articles = Article::findOrFail($id);
     
        $this->data['articles'] = $articles;
        return view('frontend.article.show', $this->data);
    }
}
