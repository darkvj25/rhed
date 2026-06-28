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

        <style>
            input[type=text],
            input[type=email],
            input[type=password],
            select {
               background-color: white !important;
               color: black !important;
               border-radius: 0.5rem !important;
            }

            label,
            .fi-fo-field-wrp-label span {
                color: white !important;
                font-weight: 600 !important;
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
            h1 {
                color: white !important;
            }
            a {
                color: white !important;
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-green-900">
        @livewireStyles
        <div class="flex flex-col items-center justify-center min-h-screen px-4 py-12 bg-center bg-no-repeat bg-cover" style="background-image: linear-gradient(rgba(20, 83, 45, 0.9), rgba(20, 83, 45, 0.9)), url('/logo/logo.png');">
            <div class="w-full px-8 py-10 overflow-hidden shadow-2xl bg-white/10 backdrop-blur-md sm:max-w-md sm:rounded-3xl border border-white/20">
                <div class="flex flex-col items-center justify-center mb-8">
                    <a href="/" wire:navigate>
                        <x-application-logo class="w-24 h-24 transition-transform duration-300 hover:scale-110" />
                    </a>
                    <h1 class="mt-2 text-2xl font-bold tracking-normal text-center text-white uppercase" style="font-family: 'Times New Roman', Times, serif; line-height: 1.2;">Veritas College of Irosin</h1>
                </div>

                <div class="w-full text-white">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
