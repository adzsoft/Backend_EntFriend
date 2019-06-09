<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Buefy CSS -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/2.5.94/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
{{--    <link rel="stylesheet" href="https://unpkg.com/buefy/dist/buefy.min.css">--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div id="app">
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>