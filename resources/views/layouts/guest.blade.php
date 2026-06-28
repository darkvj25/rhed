<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
        <!-- Scripts -->
        <style>
/*
            .fixed-center-container {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: -1;
            }
            .fixed-center {
            z-index: -1;
            } */
            input[type=text],
            input[type=email],
            input[type=password],
            select {
               background-color: rgb(255, 255, 255) !important;
               color: black !important;
            }

            label,
            .fi-fo-field-wrp-label span {
                color: white !important;
            }

            /* Aggressive error message styling */
            .fi-fo-field-wrp-error-message,
            .fi-fo-field-wrp-error-message *,
            [class*="error-message"],
            [class*="invalid-feedback"],
            .text-red-600,
            .text-red-500 {
                color: #ff4d4d !important;
                font-weight: bold !important;
                display: block !important;
                opacity: 1 !important;
                visibility: visible !important;
            }
            h1{
                color: white !important;
            }
            a{
                color: white !important;
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-green-800 "  >
        @livewireStyles
        <div class="flex flex-col items-center sm:justify-center sm:pt-0" style="height: 100% !important">


            <div class="relative w-full h-full px-6 py-4 bg-green-800 blur-background sm:max-w-md sm:rounded-lg "style="z-index:100;">
                {{-- <div class="fixed-center-container">
                    <div class="fixed-center">
                        <img src="logo/logo.png" alt="" style="filter: blur(4px); z-index:-1;width:400px">
                    </div>
                </div> --}}

                <div class="flex flex-col items-center justify-center">
                    <a href="/" wire:navigate>
                        <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
                    </a>
                    <h1 class="text-xl font-semibold">Veritas College of Irosin</h1>
                </div>

                {{ $slot }}
            </div>
        </div>
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
