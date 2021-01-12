<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/reset.css">
    @yield('css')
</head>

<body>
    <main>
        @yield('content')
    </main>
</body>
</html>