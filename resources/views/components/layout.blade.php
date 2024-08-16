<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Esercitazione'}}</title> 
{{-- Coalesing operator $title oppure mostra quello che ho nelle '' dopo i ??  --}} 
</head>
<body>
    <x-navbar></x-navbar>
        <x-header></x-header>
    <div class="min-vh-100">{{-- Evita che nav e footer si toccano --}}
        {{$slot}}
    </div>
</body>
</html>