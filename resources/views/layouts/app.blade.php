<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Forum') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        @filamentStyles
        @livewireStyles
        <style>
            .fixed-center-container {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 0;
            }
            .fixed-center {
            z-index: 0; /* Ensure the centered content is behind other content */
            }
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
            @media (min-width: 769px) and (max-width: 1400px) {
                /* body{
                    display: none;
                } */
            }
        </style>
    </head>
    <body>

        <div class="bg-green-800">
            {{-- <div id="loader" class="relative flex items-center justify-center w-full bg-green-600 h-dvh">
                <div role="status">
                    <svg aria-hidden="true" class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-green-500" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>
            </div> --}}
            <div class="relative">
                <div wire:key="report-notification-container">
                    @livewire('report-notification')
                </div>
                <main wire:key="main-content-container">
                    {{ $slot }}
                </main>
            </div>
        </div>

        {{-- <script>
            // Show loader on page load
            window.addEventListener('load', function() {
                const loader = document.getElementById('loader');
                loader.style.display = 'none'; // Hide the loader after the page is fully loaded
            });
        </script> --}}
        @livewireScripts
        @filamentScripts
        <script>
            document.addEventListener('livewire:init', () => {
                Livewire.on('new-report-received', (data) => {
                    // In Livewire 3, if you dispatch an object, it might be the first element of an array
                    const report = Array.isArray(data) ? data[0] : data;

                    Swal.fire({
                        title: 'New Report!',
                        text: `A new report has been submitted: ${report.reason}`,
                        icon: 'warning',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 5000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.style.cursor = 'pointer';
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                            toast.addEventListener('click', () => {
                                window.location.href = `/report-forum/${report.id}`;
                            });
                        }
                    });
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
