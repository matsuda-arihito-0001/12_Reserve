<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between flex-nowrap align-items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('events') . __('manage') }}
            </h2>
            <button onclick="location.href=`{{ route('events.create') }}`"
                class="font-bold ml-auto mr-2 w-48 text-center text-white bg-gray-500 border-outline border-0 py-2 px-6 focus:outline-none hover:bg-gray-400 rounded">
                <i class="fa fa-plus"></i> {{ __('new') . __('create') }}
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="lg:w-auto w-full mx-auto overflow-auto">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                            名前</th>
                                        <th
                                            class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                            開始期間</th>
                                        <th
                                            class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                            予定人数</th>
                                        <th
                                            class="px-3 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-right">
                                            定員</th>
                                        <th
                                            class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-center rounded-tr rounded-br">
                                            表示・非表示</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $event)
                                        <tr class="border-b">
                                            <td class="px-4 py-3">{{ $event->name }}</td>
                                            <td class="px-4 py-3" style="font-size:12px">
                                                {{ (new DateTime($event->start_date))->format('Y年m月d日 H時m分') }}～{{ (new DateTime($event->end_date))->format('m月d日 H時m分') }}
                                            </td>
                                            <td class="px-4 py-3">テーブル予定</td>
                                            <td class="px-3 py-3 text-right">{{ $event->max_people }}人</td>
                                            <td class="px-2 py-3 text-center">{{ $event->is_visible ? '〇' : '✖' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7" class="pt-4">{{ $events->links() }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
tr
