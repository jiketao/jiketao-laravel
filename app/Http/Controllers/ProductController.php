<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Product;
use App\Models\Topic;
use App\Http\Controllers\Controller;

/**
 * Product 
 */
class ProductController extends Controller
{
    public function showProduct(Request $request, $id) {
        $product = Product::findOrFail($id);
        $active_menu = '';
        $topics = Topic::getProductTopics($id);
        $product_detail_topic = $product->detailTopic;
    	return view('product', compact(['product', 'active_menu', 'topics', 'product_detail_topic']));
    }
}
