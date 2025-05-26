<!DOCTYPE html>
<html lang="ja">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <h1>livewireテスト</h1>
    {{-- <livewire:counter /> --}}
    @livewire('counter')
    @if (session()->has('message'))
    <div class="p-4 w-auto rounded border border-gray-50 shadow">
        {{ session('message') }}
    </div>
    @endif
    @livewire('register')

    @livewireScripts
</body>
</html>
