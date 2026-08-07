<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @if(session('success'))
    <meta name="flash-success" content="{{ session('success') }}">
    @endif

    @if(session('error'))
    <meta name="flash-error" content="{{ session('error') }}">
    @endif

    @if($errors->any())
    <meta name="flash-errors" content="{{ json_encode($errors->all()) }}">
    @endif

    @vite([
    'resources/css/app.css',
    'resources/js/app.js'
    ])
</head>

<body>

    @yield('content')

    @stack('modals')
    @stack('scripts')
</body>

</html>