<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Topic;
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
}
