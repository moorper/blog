@extends('layouts.app')

@section('title', trans('app.archives'))

@section('content')
    <ul>
        @foreach ($posts as $post)
            <li>
                @component('components.post.link',['post'=>$post])
                @endcomponent
            </li>
        @endforeach
    </ul>
@endsection