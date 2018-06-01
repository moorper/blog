@extends('portal.layouts.app')

@section('title', $post->title)

@section('content')
    <div class="text-center post-title">
        {{ $post->title }}
    </div>
    <div class="text-center post-meta">
        @if($post->created_at)
            <i class="far fa-calendar"></i> 发表于 {{ $post->created_at }} |
        @endif
        @if($post->category_id)
            <i class="far fa-folder"></i> 分类于 <a target="_self"
                                                 title="{{ $post->title }}"
                                                 href="{{ route('category.posts',['category'=>$post->category->id]) }}">
                    {{ $post->category->name }}
                </a> |
        @endif
        @if($post->click >= 0)
            <i class="fas fa-eye"></i> 阅读次数 {{ $post->click }}
        @endif
    </div>
    <div class="post-body">
        {!! parsedown($post->content) !!}
    </div>
    <div class="mt-5">
        @component('portal.components.post.prev',['post'=>$post])
        @endcomponent
    </div>
@endsection