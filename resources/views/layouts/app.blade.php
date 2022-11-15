<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/f77aa15135.js" crossorigin="anonymous"></script>
    {{-- FlatIcon --}}
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">

    <!-- (Optional) Use CSS or JS implementation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    {{-- tailwind css --}}
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">

        {{-- navbar --}}
        <nav class="navbar bg-jdark fixed w-full">
            <div class="container-fluid">
                {{-- Logo --}}
                <a class="navbar-brand flex items-center" href="#">
                    <img src="{{ asset('asset\img\jade.png') }}" alt="" class="h-6 mx-3">
                    <p class="text-jwhite font-amatic font-bold text-2xl">Jade.id</p>
                </a>
                {{-- Link Mobile --}}
                <div class="dropstart md:hidden">
                    <button class="mr-4 text-jwhite" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bars h-5"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li class="text-jwhite"><a class="text-jwhite dropdown-item" href="#"> <i
                                    class="fa fa-home mr-3"></i>
                                Home</a></li>
                        <li class="text-jwhite"><a class="text-jwhite dropdown-item" href="#"> <i
                                    class="fa fa-address-card mr-3"></i>
                                About</a>
                        </li>
                        <li class="text-jwhite"><a class="text-jwhite dropdown-item" href="#"> <i
                                    class="fa fa-phone mr-3"></i>
                                Contact</a></li>
                    </ul>
                </div>
                {{-- link Desktop --}}
                <div class="hidden md:block">
                    <ul class="flex">
                        <li class="px-4">
                            <a class="flex items-center" href="#">
                                <i class="text-jwhite hover:scale-150 duration-300 fa fa-home">
                                </i>
                                <p class="text-jwhite ml-2 text-center ">Home</p>
                            </a>
                        </li>
                        <li class="px-4">
                            <a class="flex items-center" href="#">
                                <i class="text-jwhite hover:scale-150 duration-300 fa fa-address-card">
                                </i>
                                <p class="text-jwhite ml-2 text-center ">About</p>
                            </a>
                        </li>
                        <li class="px-4">
                            <a class="flex items-center" href="#">
                                <i class="text-jwhite hover:scale-150 duration-300 fa fa-phone">
                                </i>
                                <p class="text-jwhite ml-2 text-center ">Contact</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- end navbar --}}
        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>
