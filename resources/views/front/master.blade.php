<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online task - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}front/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">Online task</a>
        <ul class="navbar-nav">
            <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li><a href="{{ route('list.category') }}" class="nav-link">Category</a></li>
            <li><a href="{{ route('list.product') }}" class="nav-link">Product</a></li>
        </ul>
    </div>
</nav>

@yield('body')


<script src="{{ asset('/') }}front/js/bootstrap.bundle.min.js"></script>
</body>
</html>
