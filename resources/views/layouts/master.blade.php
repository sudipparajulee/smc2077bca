<html>
    <head>
        <title>SMC Ecommerce</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <nav class="flex sticky top-0 justify-between shadow px-20 py-4 items-center bg-gray-200">
            <img src="https://smc.edu.np/wp-content/uploads/2023/11/smc-logo-circle.png" class="w-24" alt="">
            <div>
                <a class="mx-2" href="/">Home</a>
                <a class="mx-2" href="/about-us">About</a>
                <a class="mx-2" href="/contact">Contact</a>
                <a class="mx-2" href="/login">Login</a>
            </div>
        </nav>
        @yield('content')
        <footer>
            <div class="bg-blue-800 text-white text-center py-2 ">
                <p>Copyright &copy; 2023. All rights reserved. SMC Ecommerce</p>
            </div>
        </footer>
    </body>
</html>
