<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/
          dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>My Comic Site</h1>
    <p>Prepared by: Aldous Malvin Verdad</p>
    @include('partials._nav')
    @yield('content')

</body>
</html>