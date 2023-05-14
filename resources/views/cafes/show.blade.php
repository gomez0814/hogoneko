<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            「{{ $cafe->name }}」の詳細情報
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full border">
                        <tbody>
                            <tr class="h-16">
                                <th class="w-32 border">店名</th>
                                <td class="pl-4 border">{{ $cafe->name }}</td>
                            </tr>
                            <tr class="h-16">
                                <th class="w-32 border">住所</th>
                                <td class="pl-4 border">{{ $cafe->address }}</td>
                            </tr>
                            <tr class="h-16">
                                <th class="w-32 border">営業時間</th>
                                <td class="pl-4 border">{{ $cafe->business_hour }}</td>
                            </tr>
                            <tr class="h-16">    
                                <th class="w-32 border">休業日</th>
                                <td class="pl-4 border">{{ $cafe->holiday }}</td>
                            </tr>
                            <tr class="h-16">
                                <th class="w-32 border">情報</th>
                                <td class="pl-4 border">{{ $cafe->content }}</td>
                            </tr>
                            <tr class="h-16">
                                <th class="w-32 border">Webサイト</th>
                                <td class="pl-4 border text-blue-500"><a href="{{ $cafe->website }}">{{ $cafe->website }}</td>
                            </tr>
                            <tr class="h-16">
                                <th class="w-32 border">twitter</th>
                                <td class="pl-4 border text-blue-500"><a href="{{ $cafe->twitter }}">{{ $cafe->twitter }}</td>
                            </tr>
                            <tr class="h-16">
                                <th class="w-32 border">instagram</th>
                                <td class="pl-4 border text-blue-500"><a href="{{ $cafe->instagram }}">{{ $cafe->instagram }}</td>
                            </tr>
                            <tr class="h-16">
                                <th class="w-32 border">youtube</th>
                                <td class="pl-4 border text-blue-500"><a href="{{ $cafe->youtube }}">{{ $cafe->youtube }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>画像:{{ $cafe->image_path }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
