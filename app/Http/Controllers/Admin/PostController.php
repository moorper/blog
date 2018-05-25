<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string',
            'content' => 'required|string',
        ];
        $messages = [
            'title.required' => '标题未填写',
            'content.required' => '内容不能为空',
        ];
        $this->validate($request, $rules, $messages);

        Post::create($request->all(['title', 'content']));
    }
}
