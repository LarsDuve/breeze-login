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
                    <h1>Articles </h1>
                    <h4><a style="text-decoration: none; color: darkblue" href="/articles/create">Add Article <span>&#10010;</span></a></h4>

                    @foreach($articles as $article)
                        <h3 style="color: dimgrey"><a href="{{ $article->path() }}" style="text-decoration: none; color: darkblue">{{ $article->title }}</a> {{ $article->updated_at }}</h3>
                        <p>{{ $article->excerpt }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
