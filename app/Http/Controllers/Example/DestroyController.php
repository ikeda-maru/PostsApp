<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function index(Request $request, $id) {
        $post = Post::where('id', $id)->firstOrFail();
        $post->delete();
        return redirect()->route('example.index');
    }
}
