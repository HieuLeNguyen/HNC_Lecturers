<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'HNC') }}</title>

        <base href="./">
        <link rel="shortcut icon" href="{{asset('asset')}}/images/logoHNC.png" type="image/x-icon" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <!-- bootrap -v: 5.5.5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Custom styles -->
        <link rel="stylesheet" href="{{asset('asset')}}/css/root.css">
        <link rel="stylesheet" href="{{asset('asset')}}/css/login.css">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased guest-overflow-hidden d-flex">
        <div class="guest-sidebar">
            <img src="{{asset('asset')}}/images/logoHNC.png" alt="Logo Trường" width="140px">
            <h2 class="fw-bold text-center fs-3 c-primary pt-4">CỔNG THÔNG TIN<br>GIẢNG VIÊN</h2>
        </div>
        <main class="w-full p-0 mx-3">
            <header class="w-full head_general-info">
                <h1 class="fw-bold fs-2 c-primary text-center pb-4">TRƯỜNG CAO ĐẲNG HÀ NỘI<br>HANOI COLLEGE</h1>
                <hr>
            </header>
            <div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 bg-white">
                <div class="container-login">
                    <div>
                        <div class="fm-login w-full sm:max-w-md mt-6 px-4 py-4 overflow-hidden sm:rounded-sm">
                            <h1 class="fw-bold fs-4 c-primary text-center pt-4">CỔNG THÔNG TIN GIẢNG VIÊN</h1>
                            {{ $slot }}
                        </div>
                    </div>

                    <div class="footer_producer fs-8">
                        <h3>Trường Cao Đẳng Hà Nội</h3>
                        <p>©2024 Developed by HPC_21 - v1.0</p>
                    </div>
                </div>
            </div>
        </main>
    </body>

    <!-- bootrap -v: 5.5.5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
