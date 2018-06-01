@extends('admin.layouts.app')

@section('title','新添文章')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="/admin/post/store">
        @csrf
        <div class="form-group">
            <label for="title">标题</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label>分类</label>
            <select class="form-control" id="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="content">内容</label>
            <textarea class="form-control" id="content" name="content" rows="15"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">添加</button>
        </div>
    </form>
@endsection