<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/bootstrap.css')}}">
<style>
    .hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between {
    display: none !important;
}
</style>
    </head>
    <body class="antialiased">

@yield('content')

        <script src="{{asset('assets/popper.js')}}"></script>
        <script src="{{asset('assets/bootstrap.min.js')}}"></script>
         </body>
     </html>

