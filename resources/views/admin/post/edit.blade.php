@extends('admin.layouts.app')

@section('title','更新文章')

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
    <form method="post" action="/admin/post/update/{{$post->id}}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">标题</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="content">内容</label>
            <textarea class="form-control" id="content" name="content" rows="15">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">更新</button>
            <a role="button" class="btn btn-danger" href="/admin/post/index">取消</a>
        </div>
    </form>
@endsection