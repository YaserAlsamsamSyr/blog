<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog_Ahmad-Obaid</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        /* Global styles */
        body {
            background-color: #f3f4f6;
            font-family: 'Figtree', sans-serif;
            margin: 0;
        }
        .main-content {
            background-color: white;
            padding: 10px;
            max-width: 1200px;
            margin: auto;
        }
        /* Navbar styles */
        .navbar {
            width: 100%;
            background-color: #2a3051e3;
            padding: 1rem;
            position: fixed;
            top: 0;
            right: 0;
            display: flex;
            justify-content: flex-end;
            z-index: 1000;
        }
        .navbar a {
            font-weight: 600;
            color: #ffffff;
            margin-left: 1rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .navbar a:hover {
            color: #ff9800; /* Orange color on hover */
        }
        .footer {
            background-color: #2a3051e3;
            padding: 1rem;
            text-align: center;
            margin-top: 2rem;
            border-top: 1px solid #e7e7e7;
        }
        .footer p {
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

        /* Content styles */
        .posts-container {
            display: flex;
            flex-direction: column; /* عرض البوستات بشكل عمودي */
            gap: 1rem; /* مسافة بين البوستات */
        }

        /* Responsive design */
        @media screen and (max-width: 640px) {
            .main-content {
                padding: 1rem;
            }
            .navbar {
                flex-direction: column;
                align-items: center;
            }
            .navbar a {
                margin: 0.5rem 0;
            }
        }
    </style>
</head>
<body>
    <div class="main-content mx-auto">
        @if (Route::has('login'))
        <div class="navbar">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold">Register</a>
                @endif
            @endauth
        </div>
        @endif

        <!-- حاوية للبوستات -->
        <div class="posts-container">
            @yield('content')
        </div>
    </div>

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
</body>
</html>
