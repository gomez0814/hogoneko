<x-app-layout>

    <x-slot name="title">
        @if(isset($prefecture))
            {{ $prefecture }}の保護猫カフェ一覧
        @else
            全ての保護猫カフェ一覧
        @endif
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            保護猫カフェ一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- 都道府県が選択された、かつ、表示件数が0件ではない場合 --}}
                    @if(isset($prefecture) && count($cafes) !== 0)
                        <div class="flex items-center mb-6">
                            <div class="h-10 w-1 bg-orange-300 mr-4"></div>
                            <p class="text-2xl font-bold">{{ $prefecture }}の保護猫カフェ一覧</p>
                        </div>
                        <p class="leading-loose">
                            保護猫カフェの情報を表示します。
                            <br>
                            都道府県で検索したい場合は、こちらから選択してください。
                        </p>
                    
                    {{-- 都道府県が選択されていない場合（初期表示） --}}
                    @elseif(count($cafes) !== 0)
                        <div class="flex items-center mb-6">
                            <div class="h-10 w-1 bg-orange-300 mr-4"></div>
                            <p class="text-2xl font-bold">全ての保護猫カフェ一覧</p>
                        </div>
                        <p class="leading-loose">
                            保護猫カフェの情報を表示します。
                            <br>
                            都道府県で検索したい場合は、こちらから選択してください。
                        </p>
                    
                    {{-- 都道府県が選択されたが表示件数が0件の場合 --}}
                    @else
                        <p class="text-red-500 my-4">「{{ $prefecture }}」の保護猫カフェは未登録でした。他の県を選択してください。</p>
                    @endif
                    
                    <form action="{{ route('cafes.list') }}" method="GET">
                        <select class="my-4 dark:bg-gray-800 dark:border-gray-100 rounded" name="prefecture" onchange="this.form.submit()">
                            <option value="" selected>都道府県を選択</option>
                            <option value="全て">全て</option>
                            <option value="北海道">北海道</option>
                            <option value="青森県">青森県</option>
                            <option value="岩手県">岩手県</option>
                            <option value="宮城県">宮城県</option>
                            <option value="秋田県">秋田県</option>
                            <option value="山形県">山形県</option>
                            <option value="福島県">福島県</option>
                            <option value="茨城県">茨城県</option>
                            <option value="栃木県">栃木県</option>
                            <option value="群馬県">群馬県</option>
                            <option value="埼玉県">埼玉県</option>
                            <option value="千葉県">千葉県</option>
                            <option value="東京都">東京都</option>
                            <option value="神奈川県">神奈川県</option>
                            <option value="新潟県">新潟県</option>
                            <option value="富山県">富山県</option>
                            <option value="石川県">石川県</option>
                            <option value="福井県">福井県</option>
                            <option value="山梨県">山梨県</option>
                            <option value="長野県">長野県</option>
                            <option value="岐阜県">岐阜県</option>
                            <option value="静岡県">静岡県</option>
                            <option value="愛知県">愛知県</option>
                            <option value="三重県">三重県</option>
                            <option value="滋賀県">滋賀県</option>
                            <option value="京都府">京都府</option>
                            <option value="大阪府">大阪府</option>
                            <option value="兵庫県">兵庫県</option>
                            <option value="奈良県">奈良県</option>
                            <option value="和歌山県">和歌山県</option>
                            <option value="鳥取県">鳥取県</option>
                            <option value="島根県">島根県</option>
                            <option value="岡山県">岡山県</option>
                            <option value="広島県">広島県</option>
                            <option value="山口県">山口県</option>
                            <option value="徳島県">徳島県</option>
                            <option value="香川県">香川県</option>
                            <option value="愛媛県">愛媛県</option>
                            <option value="高知県">高知県</option>
                            <option value="福岡県">福岡県</option>
                            <option value="佐賀県">佐賀県</option>
                            <option value="長崎県">長崎県</option>
                            <option value="熊本県">熊本県</option>
                            <option value="大分県">大分県</option>
                            <option value="宮崎県">宮崎県</option>
                            <option value="鹿児島県">鹿児島県</option>
                            <option value="沖縄県">沖縄県</option>
                        </select>
                    </form>
                    
                    @if(count($cafes) !== 0)
                        <p class="mt-8 leading-loose">
                            店名をクリックすると詳細情報が表示されます。
                        </p>
                        
                        <!-- PC＆タブレット向け -->
                        <div class="hidden sm:block">
                            <table class="my-4">
                                <thead>
                                    <tr>
                                        <th class="text-left bg-orange-50 dark:bg-gray-600 px-4 border-b">店名</th>
                                        <th class="text-left bg-orange-50 dark:bg-gray-600 px-8 border-b">住所</th>
                                        <th class="text-left bg-orange-50 dark:bg-gray-600 px-8 border-b">営業時間</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cafes as $cafe)
                                        <tr>
                                            <td class="border-b px-4 py-4 text-blue-500"><a class="hover:text-orange-300" href="{{ route('cafes.show', ['id' => $cafe->id]) }}">{{ $cafe->name }}</a></td>
                                            <td class="border-b px-8 py-4">{{ $cafe->address }}</td>
                                            <td class="border-b px-8 py-4"><p class="leading-loose">{!! nl2br(e($cafe->business_hour)) !!}</p></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- スマホ向け --}}
                        <div class="block sm:hidden">
                            <table class="my-4">
                                <thead>
                                    <tr>
                                        <th class="text-left bg-orange-50 dark:bg-gray-600 px-2 border-b">店名</th>
                                        <th class="text-left bg-orange-50 dark:bg-gray-600 px-2 border-b">住所</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cafes as $cafe)
                                        <tr>
                                            <td class="border-b px-2 py-4 text-blue-500"><a class="hover:text-orange-300" href="{{ route('cafes.show', ['id' => $cafe->id]) }}">{{ $cafe->name }}</a></td>
                                            <td class="border-b px-2 py-4">{{ $cafe->address }}</td>
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
