<?php

namespace App\Http\Controllers\Portal;

use App\Events\PostIndexEvent;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->select('id', 'category_id', 'title', 'content', 'click', 'created_at')->paginate(10);

        return view('portal.index', compact('posts'));
    }

    public function archives(Request $request)
    {
        $posts = Post::select('id', 'title', 'created_at')->get();

        return view('portal.archives', compact('posts'));
    }

    public function show(Post $post)
    {
        // 自增点击数
        event(new PostIndexEvent($post));

        return view('portal.post', compact('post'));
    }
}
