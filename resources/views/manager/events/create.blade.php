<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('events') . __('create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="lg:w-auto w-full mx-auto overflow-auto">
                            <label>日付：<input type="text" id="event_date" name="event_date"></label>
                            <label>開始時間：<input type="text" id="start_time" name="start_time"></label>
                            <label>終了時間：<input type="text" id="end_time" name="end_time"></label>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
tr
