<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Product 
 */
class ProductController extends Controller
{
    public function showProduct(Request $request, $pid = '1') {
    	return 'show product in controller'.$pid;
    }
}
