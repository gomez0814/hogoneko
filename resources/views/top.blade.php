<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            トップページ
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 leading-10">
                    <p>このサイトは、保護猫カフェを紹介するサイトです。</p>
                    <p><a href="{{ route('cafes.list') }}" class="text-blue-500">保護猫カフェ一覧</a>より、お近くの保護猫カフェを探してみてください。</p>
                    <p>今後はログイン機能等、新たな機能を追加していきたいと考えております。
                    <p>少しでも保護猫活動をされる皆様のお力になれましたら幸いです。</p>
                    <p class="text-right">管理人</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
