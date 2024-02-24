<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            保護猫カフェの詳細情報
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="h-10 w-1 bg-orange-300 mr-4"></div>
                        <h1 class="text-2xl font-bold">{{ $cafe->name }}の詳細情報</h1>
                    </div>

                    {{-- 画像がある場合は表示 --}}
                    @if(!empty($cafe->image_path))
                        <!-- PC＆タブレット向け -->
                        <div class="hidden sm:block">
                            <img class="w-1/2 mx-auto mb-6" src="{{ asset('images/' . $cafe->image_path) }}" alt="Image">
                        </div>                        
                        {{-- スマホ向け --}}
                        <div class="block sm:hidden">
                            <img class="w-full mx-auto mb-6" src="{{ asset('images/' . $cafe->image_path) }}" alt="Image">
                        </div>                        
                    @endif

                    @if(!empty($cafe->updated_at))
                        <p class="text-right">最終更新日:{{ \Carbon\Carbon::parse($cafe->updated_at)->format('Y年m月d日') }}</p>
                    @endif

                    {{-- 情報テーブル --}}
                    <div class="overflow-x-auto mb-6">
                        <table class="w-full">
                            <tbody>
                                <tr>
                                    <th class="px-2 py-4 border bg-orange-50 dark:bg-gray-600 whitespace-nowrap">店名</th>
                                    <td class="px-2 py-4 border">{{ $cafe->name }}</td>
                                </tr>
                                <tr>
                                    <th class="px-2 py-4 border bg-orange-50 dark:bg-gray-600">住所</th>
                                    <td class="px-2 py-4 border">{{ $cafe->address }}</td>
                                </tr>
                                <tr>
                                    <th class="px-2 py-4 border bg-orange-50 dark:bg-gray-600">営業時間</th>
                                    <td class="px-2 py-4 border"><p class="leading-loose">{!! nl2br(e($cafe->business_hour)) !!}</p></td>
                                </tr>
                                <tr>    
                                    <th class="px-2 py-4 border bg-orange-50 dark:bg-gray-600">休業日</th>
                                    <td class="px-2 py-4 border"><p class="leading-loose">{!! nl2br(e($cafe->holiday)) !!}</p></td>
                                </tr>
                                <tr>    
                                    <th class="px-2 py-4 border bg-orange-50 dark:bg-gray-600">料金</th>
                                    <td class="px-2 py-4 border"><p class="leading-loose">{!! nl2br(e($cafe->charge)) !!}</p></td>
                                </tr>
                                <tr>
                                    <th class="px-2 py-4 border bg-orange-50 dark:bg-gray-600">その他</th>
                                    <td class="px-2 py-4 border"><p class="leading-loose">{!! nl2br(e($cafe->content)) !!}</p></td>
                                </tr>
                                @if(!empty($cafe->admin))
                                    <tr>
                                        <th class="px-2 py-4 border bg-orange-50 dark:bg-gray-600">管理者より</th>
                                        <td class="px-2 py-4 border"><p class="leading-loose">{!! nl2br(e($cafe->admin)) !!}</p></td>
                                    </tr>
                                @endif
                            </tbody>
                            <tr>
                                <th class="px-2 py-4 border bg-orange-50 dark:bg-gray-600">リンク</th>
                                <td class="px-2 py-4 border">
                                    {{-- リンクボタン --}}
                                    @if(!empty($cafe->website))
                                        <a href="{{ $cafe->website }}" target="_blank">
                                        <button type="button" class="text-sm text-white rounded bg-sky-400 hover:bg-sky-600 px-5 py-2.5 me-3 mb-2">
                                        Webサイト</button></a>
                                    @endif
                                    @if(!empty($cafe->x))
                                        <a href="{{ $cafe->x }}" target="_blank">
                                        <button type="button" class="text-sm text-white rounded bg-slate-950 hover:bg-slate-700 px-5 py-2.5 me-3 mb-2 w-16">
                                        X</button></a>
                                    @endif
                                    @if(!empty($cafe->instagram))
                                        <a href="{{ $cafe->instagram }}" target="_blank">
                                        <button type="button" class="text-sm text-white rounded bg-pink-600 hover:bg-pink-800 px-5 py-2.5 me-3 mb-2">
                                        Instagram</button></a>
                                    @endif
                                    @if(!empty($cafe->youtube))
                                        <a href="{{ $cafe->youtube }}" target="_blank">
                                        <button type="button" class="text-sm text-white rounded bg-red-600 hover:bg-red-800 px-5 py-2.5 me-3 mb-2">
                                        YouTube</button></a>
                                    @endif
                                    @if(!empty($cafe->amazon))
                                        <a href="{{ $cafe->amazon }}" target="_blank">
                                        <button type="button" class="text-sm text-white rounded bg-amber-500 hover:bg-amber-700 px-5 py-2.5 me-3 mb-2">
                                        Amazonほしいものリスト</button></a>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>

                    {{-- 地図 --}}
                    @if(!empty($cafe->map))
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
                    
                    {{-- 戻るボタン --}}
                    <div class="flex justify-center">
                        <button type="button" class="text-white rounded bg-orange-500 hover:bg-orange-700 px-5 py-2.5 mt-8" onClick="history.back()">戻る</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
