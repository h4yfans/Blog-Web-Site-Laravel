<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="name" content="content" charset="UTF-8">
    <title>Admin area</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin.css') }}">
    @yield('styles')
</head>
<body>
@include('includes.admin-header')

@yield('content')


<script>
    var baseUrl = "{{ URL::asset('/') }}";
    console.log(baseUrl);
</script>
@yield('scripts')

</body>
</html>