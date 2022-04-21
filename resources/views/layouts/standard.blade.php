<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>@yield('metaTitle')</title>
</head>
<body>
    @include ('partials.header')

    @yield('main')

    @include ('partials.footer')
</body>
</html>