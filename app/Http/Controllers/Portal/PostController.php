<?php

namespace App\Http\Controllers\Portal;

use App\Events\PostIndexEvent;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Parsedown;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->select('id', 'title', 'content', 'created_at')->get();

        return view('index', compact('posts'));
    }

    public function archives(Request $request)
    {
        $posts = Post::select('id', 'title', 'created_at')->get();

        return view('archives', compact('posts'));
    }

    public function show(Post $post)
    {
        // 自增点击数
        event(new PostIndexEvent($post));
        $parsedown = new Parsedown();
        $post->content = $parsedown->text($post->content);

        return view('post', compact('post'));
    }
}
