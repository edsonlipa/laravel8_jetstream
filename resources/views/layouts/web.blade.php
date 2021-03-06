<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso platzi</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C7GRJ9E1C0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-C7GRJ9E1C0');
    </script>
</head>
<body>
    <header class="shadow-lg">
        <div class="bg-blue-900 py-1">
        </div>
        <nav class="bg-gray-800 py-2" >
        <a href="{{ route('home')}}">
        <img src="{{asset('images/image.jpg')}}" alt="" class="h-20 mx-auto">
        </a>
        </nav>
    </header>
    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>
    <footer class="py-4 text-center">
        @auth
            <a href="{{url('dashboard')}}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
            <a href="{{url('login')}}" class="text-sm text-gray-700 underline">Login</a>
            <a href="{{url('register')}}" class="text-sm text-gray-700 underline">Register</a>
        @endif
    </footer>
</body>
</html>