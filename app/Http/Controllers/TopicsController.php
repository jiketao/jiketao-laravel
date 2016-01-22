<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Topic;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TopicsController extends Controller
{
    protected $topic;
    public function __construct(Topic $topic)
    {
        $this->topic = $topic;
    }

    public function show($id) {
        $topic = Topic::findOrFail($id);
        $active_menu = '';
        $user = $topic->user;
        $product = $topic->product;
        return view('topic', compact(['topic', 'active_menu', 'product']));
    }
}
