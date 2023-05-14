<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            保護猫カフェ一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="h-16">店名をクリックすると詳細情報ページが表示されます。</p>
                    <table class="w-full border">
                        <thead>
                            <tr>
                                <th class="border w-10">No.</th>
                                <th class="border">店名</th>
                                <th class="border">住所</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cafes as $key => $cafe)
                                <tr>
                                    <td class="border text-center">
                                        @if($currentPage === 1)
                                            {{ $key + 1}}</td>
                                        @else
                                            {{ $currentPage * 10 + $key + 1}}</td>
                                        @endif
                                    <td class="border h-16 pl-4 text-blue-500">
                                        <a href="{{ route('cafes.show', ['id' => $cafe->id]) }}">{{ $cafe->name }}</a></td>
                                    <td class="border h-16 pl-4">{{ $cafe->address }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $cafes->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
