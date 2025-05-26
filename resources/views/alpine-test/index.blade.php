<!DOCTYPE html>
<html lang="ja">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <main>
        <h1>alpineテスト</h1>
        <div x-data="{ open:true }">
            <div x-show="open">openがtrue</div>
            <div x-show="!open">openがfalse</div>
            <button class="border shadow rounded p-4 w-48" x-on:click="open = !open">切り替えボタン</button>
        </div>
    </main>
    @livewireScripts
</body>
</html>
