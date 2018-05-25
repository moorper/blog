@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h1 class="text-center">
        {{ $post->title }}
    </h1>
    {!! $post->content !!}
@endsection