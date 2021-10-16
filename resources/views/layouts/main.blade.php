<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        
        <link rel="stylesheet" href="\css\style.css">
        
        <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    </head>
    <body>

        @yield('content')
        
    </body>
</html>
