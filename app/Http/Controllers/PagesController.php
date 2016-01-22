<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

use App\Models\Topic;
use App\Models\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    protected $topic;
    public function __construct(Topic $topic)
    {
        $this->topic = $topic;
    }

    public function  home() {
        $topics = $this->topic->getTopicsWithFilter('new-topics');
        $active_menu = 'news';
        return view('welcome', compact('topics', 'active_menu'));
    }

    public function categories() {
        $categories = Categories::where('parent_id', -1)->get();
        return view('categories')
            ->with('categories', $categories)
            ->with('active_menu', 'categories');
    }

    public function showCategoriesProducts($id) {
        $category = Categories::findOrFail($id);
        $active_menu = '';
        $products = Product::getProductInCategory($id);
        return view('category', compact(['category', 'active_menu', 'products']));
    }
}
