<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            保護猫カフェの詳細情報
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="h-10 w-1 bg-orange-300 mr-4"></div>
                        <h1 class="text-2xl font-bold">{{ $cafe->name }} の詳細情報</h1>
                    </div>

                    {{-- 画像がある場合は表示 --}}
                    @if(isset($cafe->image_path))
                        <!-- PC＆タブレット向け -->
                        <div class="hidden sm:block">
                            <img class="w-1/2 mx-auto mb-6" src="{{ $cafe->image_path }}" alt="Image">
                        </div>                        
                        {{-- スマホ向け --}}
                        <div class="block sm:hidden">
                            <img class="w-full mx-auto mb-6" src="{{ $cafe->image_path }}" alt="Image">
                        </div>                        
                    @endif

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
                                <th class="w-32 border">料金</th>
                                <td class="pl-4 border">{{ $cafe->charge }}</td>
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
                                <th class="w-32 border">X（旧Twitter）</th>
                                <td class="pl-4 border text-blue-500"><a href="{{ $cafe->x }}">{{ $cafe->x }}</td>
                            </tr>
                            <tr class="h-16">
                                <th class="w-32 border">Instagram</th>
                                <td class="pl-4 border text-blue-500"><a href="{{ $cafe->instagram }}">{{ $cafe->instagram }}</td>
                            </tr>
                            <tr class="h-16">
                                <th class="w-32 border">YouTube</th>
                                <td class="pl-4 border text-blue-500"><a href="{{ $cafe->youtube }}">{{ $cafe->youtube }}</td>
                            </tr>
                            <tr class="h-16">
                                <th class="w-32 border">Amazonほしいものリスト</th>
                                <td class="pl-4 border text-blue-500"><a href="{{ $cafe->amazon }}">{{ $cafe->amazon }}</td>
                            </tr>
                            <tr class="h-16">
                                <th class="w-32 border">管理者より</th>
                                <td class="pl-4 border">{{ $cafe->admin }}</td>
                            </tr>
                        </tbody>
                    </table>
                    @if(isset($cafe->map))
                        <div class="flex items-center mt-16">
                            <div class="h-10 w-1 bg-orange-300 mr-4"></div>
                            <h1 class="text-2xl font-bold">地図</h1>
                        </div>
                        <!-- GoogleMap（PC＆タブレット向け）-->
                        <div class="hidden sm:block">
                            <iframe class="mt-6 w-full" src="{{ $cafe->map }}" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>                        
                        {{-- GoogleMap（スマホ向け）--}}
                        <div class="block sm:hidden">
                            <iframe class="mt-6 w-full" src="{{ $cafe->map }}" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
