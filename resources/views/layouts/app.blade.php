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
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            academic: {
                                950: '#022c22', // Deepest Green (Background)
                                900: '#064e3b', // Surface
                                800: '#065f46', // Cards/Modals
                                700: '#047857', // Borders
                                accent: '#10b981', // Brand Green (Buttons)
                            }
                        },
                        backdropBlur: {
                            xs: '2px',
                        }
                    }
                }
            }
        </script>
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
            /* Improved Input Styling for Dark Theme */
            input[type=text],
            input[type=email],
            input[type=password],
            input[type=number],
            select,
            textarea {
               background-color: #064e3b !important; /* academic-900 */
               color: white !important;
               border: 1px solid #047857 !important; /* academic-700 */
               border-radius: 0.5rem !important;
            }

            input:focus, select:focus, textarea:focus {
                border-color: #10b981 !important; /* academic-accent */
                ring-color: #10b981 !important;
            }

            label,
            .fi-fo-field-wrp-label span {
                color: #d1fae5 !important; /* emerald-100 */
                font-weight: 500 !important;
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
    <body class="bg-academic-950 text-emerald-50 antialiased pb-24">

        <div class="min-h-screen bg-academic-950">
            <div class="relative">
                <div wire:key="report-notification-container">
                    @livewire('report-notification')
                </div>
                <main wire:key="main-content-container">
                    {{ $slot }}
                </main>
            </div>

            <x-bottom-nav />
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
