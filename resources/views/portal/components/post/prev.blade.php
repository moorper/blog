@php
    $prev = $post->prev();
    $next = $post->next();
@endphp
@if($prev)
    <a target="_self" href="{{ route('post.show',['post'=>$prev->id]) }}">上一篇：{{ $prev->title }}</a>
@else
    上一篇：没有了
@endif
<br>
@if($next)
    <a target="_self" href="{{ route('post.show',['post'=>$next->id]) }}">下一篇：{{ $next->title }}</a>
@else
    下一篇：没有了
@endif