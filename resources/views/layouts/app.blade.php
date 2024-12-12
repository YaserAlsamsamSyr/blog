<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
       .footer {
            background-color: #2a3051e3;
            padding: 1rem;
            text-align: center;
            margin-top: 2rem;
            border-top: 1px solid #e7e7e7;
        }    .footer p {
            font-size: 1rem;
            color: #ffffff;
        }
        .footer a {
            color: #ff9800;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
</style>   
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
    
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                        
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
                
            </main>
            <footer class="footer">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <p>© 2024 Blog_Yaser_Alsamsam. All rights reserved.</p>
                <p>
                    <a href="/privacy-policy">Privacy Policy</a> | 
                    <a href="/terms-of-service">Terms of Service</a> | 
                    <a href="/contact">Contact</a>
                </p>
            </div>
        </footer>
        </div>
    </body>
</html>
