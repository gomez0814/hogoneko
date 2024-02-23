<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            プライバシーポリシー
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-1 bg-orange-300 mr-4"></div>
                        <h1 class="text-2xl font-bold">アクセス解析ツールについて</h1>
                    </div>
                    <p class="leading-loose mb-12">
                        このサイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。
                        <br>
                        このGoogleアナリティクスはトラフィックデータの収集のためにCookieを使用しています。このトラフィックデータは匿名で収集されており、個人を特定するものではありません。
                    </p>
                    
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-1 bg-orange-300 mr-4"></div>
                        <h1 class="text-2xl font-bold">免責事項</h1>
                    </div>
                    <p class="leading-loose mb-12">
                        このサイトからのリンクやバナーなどで移動したサイトで提供される情報、サービス等について一切の責任を負いません。
                        <br>
                        またこのサイトのコンテンツ・情報について、できる限り正確な情報を提供するように努めておりますが、正確性や安全性を保証するものではありません。情報が古くなっていることもございます。
                        <br>
                        このサイトに掲載された内容によって生じた損害等の一切の責任を負いかねますのでご了承ください。
                    </p>

                    <div class="flex items-center mb-4">
                        <div class="h-10 w-1 bg-orange-300 mr-4"></div>
                        <h1 class="text-2xl font-bold">著作権について</h1>
                    </div>
                    <p class="leading-loose mb-12">
                        このサイトで掲載している文章や画像などにつきましては、無断転載することを禁止します。
                        <br>
                        このサイトは著作権や肖像権の侵害を目的としたものではありません。著作権や肖像権に関して問題がございましたら、
                        <a href="https://www.instagram.com/hogoneko_cafe_list" target="_blank" class="text-blue-500">Instagramアカウント</a>等にご連絡ください。迅速に対応いたします。
                    </p>

                    <div class="flex items-center mb-4">
                        <div class="h-10 w-1 bg-orange-300 mr-4"></div>
                        <h1 class="text-2xl font-bold">リンクについて</h1>
                    </div>
                    <p class="leading-loose mb-12">
                        このサイトは基本的にリンクフリーです。リンクを行う場合の許可や連絡は不要です。
                        <br>
                        ただし、インラインフレームの使用や画像の直リンクはご遠慮ください。
                    </p>

                    <div class="flex items-center mb-4">
                        <div class="h-10 w-1 bg-orange-300 mr-4"></div>
                        <h1 class="text-2xl font-bold">プライバシーポリシーの変更について</h1>
                    </div>
                    <p class="leading-loose mb-12">
                        このサイトは、個人情報に関して適用される日本の法令を遵守するとともに、本ポリシーの内容を適宜見直しその改善に努めます。
                        <br>
                        修正された最新のプライバシーポリシーは常に本ページにて開示されます。
                    </p>

                    {{-- 戻るボタン --}}
                    <div class="flex justify-center">
                        <button type="button" class="text-white rounded bg-orange-500 hover:bg-orange-700 px-5 py-2.5 mt-8" onClick="history.back()">戻る</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
