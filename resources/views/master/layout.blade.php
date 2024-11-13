<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main>
        <div class="side_bar relative h-full">
            @include('includes.sidebar')
        </div>
        @yield('content')
    </main>
    <footer>
        @include('includes.footer')
    </footer>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
