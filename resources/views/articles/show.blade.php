<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1><a href="{{ $article->link }}" style="text-decoration: none; color: darkblue">{{ $article->title }}</a> <a style="text-decoration: none; color: darkblue" href="/articles/{{ $article->id }}/edit"><span>&#9998;</span></a></h1>
                    <p>{{ $article->body }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
