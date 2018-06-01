<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="https://laravel-china.org/favicon.ico">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <!--bootstrap-->
    <link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <!--highlight.js-->
    <link href="https://cdn.bootcss.com/highlight.js/9.12.0/styles/monokai-sublime.min.css" rel="stylesheet">
    <!--post.css-->
    <link href="/css/post.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-2 mt-3">
                @include('portal.layouts.sidebar')
                @yield('sidebar')
            </div>
            <div class="col-sm-10">
                @yield('content')
            </div>
        </div>
    </div>
    <!--bootstrap-->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!--fontawesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <!--highlight.js-->
    <script src="https://cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
        var pathname = window.location.pathname
        $('ul.nav > li > a[href="'+pathname+'"]').addClass('active')
    </script>
</body>
</html>