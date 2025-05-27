<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between flex-nowrap align-items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('events') . __('create') }}
            </h2>
            <button onclick="location.href=`{{ route('events.index') }}`"
                class="font-bold ml-auto mr-2 w-48 text-center text-white bg-gray-500 border-outline border-0 py-2 px-6 focus:outline-none hover:bg-gray-400 rounded">
                <i class="fa fa-reply"></i> {{ __('index') . __('back') }}
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">

                        <x-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('events.store') }}">
                            @csrf

                            <div>
                                <x-label for="event_name" value="イベント名" />
                                <x-input id="event_name" class="block mt-1 w-full" type="text" name="event_name"
                                    :value="old('event_name')" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="information" value="イベント詳細" />
                                <x-textarea id="information" row="3" class="block mt-1 w-full" type="text" name="information"
                                    required>{{ old('event_name') }}</x-textarea>
                            </div>

                            <div class="flex justify-between">
                                <div class="mt-4">
                                    <x-label for="event_date" value="イベント日付" />
                                    <x-input id="event_date" class="block mt-1 w-full" type="text" name="event_date" required />
                                </div>
                                <div class="mt-4">
                                    <x-label for="start_time" value="開始時間" />
                                    <x-input id="start_time" class="block mt-1 w-full" type="text" name="start_time" required />
                                </div>
                                <div class="mt-4">
                                    <x-label for="end_time" value="終了時間" />
                                    <x-input id="end_time" class="block mt-1 w-full" type="text" name="end_time" required />
                                </div>
                                <div class="mt-4">
                                    <x-label for="max_people" value="定員数" />
                                    <x-input id="max_people" class="block mt-1 w-full" type="number" name="max_people" required />
                                </div>
                                <div class="mt-4 flex pt-4">
                                    <input class="block mt-1 mr-1" type="radio" name="is_visible" value="1" checked />表示
                                    <input class="block mt-1 mr-1 ml-4" type="radio" name="is_visible" value="0" />非表示
                                </div>
                            </div>
                            <div class="flex items-end mt-10">
                                <button class="font-bold text-center w-100 text-white bg-gray-600 border-outline border-0 py-2 px-6 focus:outline-none hover:bg-gray-400 rounded">
                                    <i class="fa fa-plus"></i> {{ __('new') . __('Add') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
tr
