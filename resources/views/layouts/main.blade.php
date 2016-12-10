<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SACC') }} - @yield('title')</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div class="layout fixed-header fixed-drawer" id="app">
        @include('partials.header')
        @include('partials.drawer')
        <main class="layout-content">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </main>
    </div>
    <script src="/js/app.js"></script>
    <script src="/js/all.js"></script>
</body>
</html>
















