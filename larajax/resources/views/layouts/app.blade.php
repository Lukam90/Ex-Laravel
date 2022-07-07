<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Ajax CRUD</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="app">
        <main class="py-4">
            @yield("content")
        </main>
    </div>

    <script src="{{ asset('js/lib/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/lib/bootstrap5.bundle.min.js') }}"></script>

    @yield("scripts")
</body>
</html>