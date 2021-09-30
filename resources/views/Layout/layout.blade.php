<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    @yield('title')
</head>

<body>
    <div class="container">
        @include('Layout.header')
    </div>
    <div>
        @yield('cnt')
    </div>
</body>
</html>
