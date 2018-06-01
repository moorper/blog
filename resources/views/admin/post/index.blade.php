@extends('admin.layouts.app')

@section('title','文章列表')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">标题</th>
                <th scope="col">点击量</th>
                <th scope="col">发表时间</th>
                <th scope="col">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td scope="row">
                        <a target="_self" href="{{ route('admin.post.edit',['post'=>$post->id]) }}">{{ $post->title }} <i class="far fa-edit"></i></a>
                    </td>
                    <td scope="row">{{ $post->click }}</td>
                    <td scope="row">{{ $post->created_at }}</td>
                    <td scope="row">
                        <a class="btn btn-primary" role="button" target="_blank" href="{{ route('post.show',['post'=>$post->id]) }}"><i class="fas fa-external-link-alt"></i></a>
                        <a class="btn btn-danger" role="button" href="{{ route('admin.post.delete',['post'=>$post->id]) }}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection