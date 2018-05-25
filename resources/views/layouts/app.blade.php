<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="https://laravel-china.org/favicon.ico">
    <title>Blog - @yield('title')</title>
    <!--bootstrap-->
    <link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <!--highlight.js-->
    <link href="https://cdn.bootcss.com/highlight.js/9.12.0/styles/monokai-sublime.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <!--bootstrap-->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!--fontawesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <!--highlight.js-->
    <script src="https://cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>