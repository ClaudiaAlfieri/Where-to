<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WhereTo</title>

    <!-- PNG favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <!-- Vite Assets -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <!-- CSS Custom -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- JS Custom -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <nav class=" nav dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-2 px-4">
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse px-10">
                <img src="{{ asset('assets/img/logo_sem_texto.png') }}" class="h-16" alt="WhereTo Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white pr-10">Where
                    To</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <div class="navbar-content">
                    <div class="nav-menu">
                        <ul class="flex flex-col md:flex-row font-medium">
                            <li>
                                <a href="/"
                                    class="nav-link-mobile block py-2 px-3 text-white bg-yellow-700 rounded-sm md:bg-transparent md:text-yellow-700 md:p-0 md:dark:text-yellow-500"
                                    aria-current="page">Início</a>
                            </li>
                            <li>
                                <a href="#como-funciona"
                                    class="nav-link-mobile block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-700 md:p-0 md:dark:hover:text-yellow-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Como
                                    Funciona</a>
                            </li>
                            <li>
                                <a href="#sobre"
                                    class="nav-link-mobile block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-700 md:p-0 md:dark:hover:text-yellow-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sobre</a>
                            </li>
                        </ul>
                    </div>

                    <div class="cta-container">
                        <a href="#roteiro" class="nav-link-mobile">
                            <button type="button" class="cta-nav-btn w-full md:w-auto">
                                Vamos a isso!
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
