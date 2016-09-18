<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="name" content="content" charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
    @yield('styles')
</head>
<body>
@include('includes.header')

<div class="main">
    @yield('content')
</div>
@include('includes.footer')

</body>
</html>