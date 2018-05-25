@extends('layouts.app')

@section('title', trans('app.archives'))

@section('content')
    <ul>
        @foreach ($posts as $post)
            @component('components.post.link',['post'=>$post])
            @endcomponent
        @endforeach
    </ul>
@endsection