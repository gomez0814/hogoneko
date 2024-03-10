<x-app-layout>

    <x-slot name="title">
        @if(isset($sns))
            保護猫カフェの{{ $sns }}一覧
        @else
            保護猫カフェのSNS検索
        @endif
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            保護猫カフェのSNS検索
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- SNSが選択された、かつ、表示件数が0件ではない場合 --}}
                    @if(isset($sns) && count($cafes) !== 0)
                        <div class="flex items-center mb-6">
                            <div class="h-10 w-1 bg-orange-300 mr-4"></div>
                            <p class="text-2xl font-bold">保護猫カフェのSNS一覧</p>
                        </div>
                        <p class="leading-loose">
                            全国の保護猫カフェのSNSが検索できます。
                            <br>
                            検索したいSNSを選択してください。
                        </p>
                    
                    {{-- SNSが選択されていない場合（初期表示） --}}
                    @elseif(!isset($sns))
                        <div class="flex items-center mb-6">
                            <div class="h-10 w-1 bg-orange-300 mr-4"></div>
                            <p class="text-2xl font-bold">保護猫カフェのSNS検索</p>
                        </div>
                        <p class="leading-loose">
                            全国の保護猫カフェのSNSが検索できます。
                            <br>
                            検索したいSNSを選択してください。
                        </p>
                    
                    {{-- SNSが選択されたが表示件数が0件の場合 --}}
                    @else
                        <p class="text-red-500 my-4">「保護猫カフェの{{ $sns }}」は未登録でした。他のSNSを選択してください。</p>
                    @endif
                    
                    <form action="{{ route('sns.list') }}" method="GET">
                        <select class="my-4 dark:bg-gray-800 dark:border-gray-100 rounded" name="sns" onchange="this.form.submit()">
                            <option value="" selected>選択</option>
                            <option value="instagram">Instagram</option>
                            <option value="x">X</option>
                            <option value="youtube">YouTube</option>
                        </select>
                    </form>

                    @if(isset($cafes) && count($cafes) !== 0)
                        <p class="mt-8 leading-loose">
                            店名をクリックすると詳細情報が表示されます。
                            <br>
                            SNSボタンをクリックするとSNSページが表示されます。
                        </p>
                        
                        <!-- PC＆タブレット向け -->
                        <div class="hidden sm:block">
                            <table class="my-4">
                                <thead>
                                    <tr>
                                        <th class="text-left bg-orange-50 dark:bg-gray-600 px-4 border-b w-64">店名</th>
                                        <th class="text-left bg-orange-50 dark:bg-gray-600 px-8 border-b w-24">SNS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cafes as $cafe)
                                        <tr>
                                            <td class="border-b px-4 py-4 text-blue-500"><a class="hover:text-orange-300" href="{{ route('cafes.show', ['id' => $cafe->id]) }}">{{ $cafe->name }}</a></td>
                                            <td class="border-b px-8 py-4">
                                                @if($sns === "x")
                                                    <a href="{{ $cafe->x }}" target="_blank">
                                                    <button type="button" class="text-sm text-white rounded bg-slate-950 hover:bg-slate-700 px-5 py-2.5">
                                                    X</button></a>
                                                @elseif($sns === "instagram")
                                                    <a href="{{ $cafe->instagram }}" target="_blank">
                                                    <button type="button" class="text-sm text-white rounded bg-pink-600 hover:bg-pink-800 px-5 py-2.5">
                                                    Instagram</button></a>
                                                @elseif($sns === "youtube")
                                                    <a href="{{ $cafe->youtube }}" target="_blank">
                                                    <button type="button" class="text-sm text-white rounded bg-red-600 hover:bg-red-800 px-5 py-2.5">
                                                    YouTube</button></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- スマホ向け --}}
                        <div class="block sm:hidden flex justify-center">
                            <table class="my-4 mx-auto">
                                <thead>
                                    <tr>
                                        <th class="text-left bg-orange-50 dark:bg-gray-600 px-2 border-b">店名</th>
                                        <th class="text-left bg-orange-50 dark:bg-gray-600 px-2 border-b">SNS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cafes as $cafe)
                                        <tr>
                                            <td class="border-b px-2 py-4 text-blue-500"><a class="hover:text-orange-300" href="{{ route('cafes.show', ['id' => $cafe->id]) }}">{{ $cafe->name }}</a></td>
                                            <td class="border-b px-2 py-4">
                                                @if($sns === "x")
                                                    <a href="{{ $cafe->x }}" target="_blank">
                                                    <button type="button" class="text-sm text-white rounded bg-slate-950 hover:bg-slate-700 px-5 py-2.5">
                                                    X</button></a>
                                                @elseif($sns === "instagram")
                                                    <a href="{{ $cafe->instagram }}" target="_blank">
                                                    <button type="button" class="text-sm text-white rounded bg-pink-600 hover:bg-pink-800 px-5 py-2.5">
                                                    Instagram</button></a>
                                                @elseif($sns === "youtube")
                                                    <a href="{{ $cafe->youtube }}" target="_blank">
                                                    <button type="button" class="text-sm text-white rounded bg-red-600 hover:bg-red-800 px-5 py-2.5">
                                                    YouTube</button></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- ページネーション --}}
                        {{ $cafes->links() }}
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
