@extends('portal.layouts.app')

@section('title','分类')

@section('content')
    <ul>
        @foreach($categories as $category)
            <li><a target="_self" title="{{ $category->name }}" href="{{ route('category.posts',['category'=>$category->id]) }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
@endsection
