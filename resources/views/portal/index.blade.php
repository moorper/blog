@extends('portal.layouts.app')

@section('title','首页')

@section('content')
    @foreach($posts as $index => $post)
        <div class="post-title post-title-link">
            @component('portal.components.post.link',['post'=>$post])
            @endcomponent
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
        <div class="">
            {!! parsedown($post->content) !!}
        </div>
        @if ($index == count($posts) -1)
            @break
        @endif
        <hr />
    @endforeach
    <div class="text-center">
        {{ $posts->links() }}
    </div>
@endsection