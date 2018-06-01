<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\CategoryServices;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request, CategoryServices $categoryServices)
    {
        $categories = $categoryServices->index();

        return view('admin.post.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'number|exists:categories,id',
        ];
        $messages = [
            'title.required' => '标题未填写',
            'content.required' => '内容不能为空',
        ];
        $this->validate($request, $rules, $messages);

        Post::create($request->all(['title', 'content', 'category_id']));

        return redirect(route('admin.post.index'));
    }

    public function edit(Request $request, Post $post, CategoryServices $categoryServices)
    {
        $categories = $categoryServices->index();

        return view('admin.post.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        if ($request->filled('title')) {
            $post->title = $request->input('title');
        }
        if ($request->filled('content')) {
            $post->content = $request->input('content');
        }
        if ($request->filled('category_id')) {
            $post->category_id = $request->input('category_id');
        }
        $post->save();

        return redirect()->route('admin.post.index');
    }

    public function index(Request $request)
    {
        $posts = Post::select('id', 'title', 'click', 'created_at')->paginate(10);

        return view('admin.post.index', compact('posts'));
    }

    public function delete(Request $request, Post $post)
    {
        $post->delete();

        return redirect()->route('admin.post.index');
    }
}
