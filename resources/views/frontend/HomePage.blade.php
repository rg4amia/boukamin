<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Basic Page Needs
    ================================================== -->
    <title>Boukamin | Home Page</title>

    <!-- CSS
    ================================================== -->
    @include('inc.styles')

</head>
<body>
<div id="boukamin">
    <Index></Index>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@include('inc.scripts')
</body>
</html>
