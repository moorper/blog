@extends('layouts.app')

@section('title','首页')

@section('content')
    @foreach($posts as $index => $post)
        <h2>
            @component('components.post.link',['post'=>$post])
            @endcomponent
        </h2>
        {!! parsedown($post->content) !!}
        @if ($index == count($posts) -1)
            @break
        @endif
        <hr />
    @endforeach
@endsection