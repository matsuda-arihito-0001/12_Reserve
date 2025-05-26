<div>
    <section class="my-5">
        <h2>カウンター</h2>
        <button wire:click="increment" class="border shadow rounded p-4 w-48">+{{ $count }}</button>
    </section>
    <section class="my-5">
        <h2>リアルタイム更新</h2>
        <p>こんにちは、{{ $name }}さん</p>
        <input type="text" wire:model="name">
    </section>
</div>
