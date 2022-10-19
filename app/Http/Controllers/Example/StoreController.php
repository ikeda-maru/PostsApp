<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Request $request) {
        $request->validate([
            'title'   => 'required|max:64',
            'content' => 'required',
        ], [
            'title.required'   => 'タイトルは必須です。',
            'title.max'        => 'タイトルは64文字以内で入力してください。',
            'content.required' => 'コンテンツは必須です。',
        ]);

        $post = new Post();
        $post->title    = $request->input('title');
        $post->content  = $request->input('content');
        $post->save();

        return redirect()->route('example.show', ['id' => $post->id])->with('message', '登録に成功しました！');
    }
}
