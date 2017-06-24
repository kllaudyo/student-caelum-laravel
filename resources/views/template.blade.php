<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/loja.css">
    <title>Loja Laravel</title>
</head>
<body>
    @include("menu")
    <main class="container">

        @if(session("msg"))
            <p class="alert alert-success">{{session("msg")}}</p>
        @endif

        @yield("content")
    </main>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>