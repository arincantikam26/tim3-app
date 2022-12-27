<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" /> --}}
    <link rel="shortcut icon" href="{{ asset('logopoli.png') }}" type="image/x-icon">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />

    <link rel="stylesheet" href="/assets/vendor/css/pages/page-auth.css" />

</head>

<body>
    <!-- Content -->
    @yield('content')
    <!-- Main JS -->
    <script src="/assets/vendor/js/menu.js"></script>
    <script src="/assets/vendor/js/helpers.js"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>
