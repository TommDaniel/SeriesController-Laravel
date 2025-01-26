<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Controle de Séries</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
<div class="min-h-screen bg-gradient-to-b from-blue-50 to-gray-100 flex flex-col items-center justify-center px-4">
    <!-- Título -->
    <h1 class=" w-full max-w-md text-center font-extrabold text-4xl text-gray-800 bg-white border-4 border-blue-200 rounded-2xl border-solid shadow-lg p-4">
        {{ $title }}
    </h1>

    <!-- Conteúdo principal -->
    <div class="w-full max-w-3xl bg-white rounded-lg shadow-xl p-6 space-y-4">
        {{ $slot }}
    </div>
</div>

</body>
</html>
