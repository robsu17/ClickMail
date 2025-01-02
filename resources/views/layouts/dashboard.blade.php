<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - ClickMail</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background-primary min-h-screen flex flex-col">
    <x-layout.navbar />
    <main class="p-4 text-white h-full flex-grow">
        @yield('content')
    </main>
</body>
</html>
