<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('example.index', compact('posts'));
    }
}
