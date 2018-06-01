@extends('portal.layouts.app')

@section('title', trans('app.archives'))

@section('content')
    <ul>
        @foreach ($posts as $post)
            <li>
                @component('portal.components.post.link',['post'=>$post])
                @endcomponent
            </li>
        @endforeach
    </ul>
@endsection