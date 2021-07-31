<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
    <title>@yield('title')</title>l
</head>
<body>
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')
    
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>
</html>
