@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h1 class="text-center">
        {{ $post->title }}
    </h1>
    <div class="text-center">
        <h6>
            @if($post->created_at)
                <i class="far fa-calendar"></i> 发表于 {{ $post->created_at }}
            @endif
            @if($post->category_id)
                <i class="far fa-folder"></i> 分类于 {{ $post->category_id }}
            @endif
            @if($post->click >= 0)
                <i class="fas fa-eye"></i> 阅读次数 {{ $post->click }}
            @endif
        </h6>
    </div>
    {!! $post->content !!}
@endsection