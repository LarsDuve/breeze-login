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
                    <h1>New Article</h1>
                    <form method="POST" action="/articles">
                        @csrf

                        <label for="title">Title</label><br>
                        <textarea class="textarea @error('title') is-danger @enderror"
                                  id="title" name="title"
                                  rows="1" cols="170"
                                  placeholder="The most interesting title of all">{{ old('title') }}</textarea>
                        @error('title')
                        <p class="help is-danger"> {{ $errors->first('title') }}</p>
                        @enderror
                        <br>

                        <label for="excerpt">Excerpt</label><br>
                        <textarea class="textarea @error('excerpt') is-danger @enderror"
                                  id="excerpt" name="excerpt"
                                  rows="4" cols="170"
                                  placeholder="The excerpt of the article, this will be shown when you browse trough the articles">{{ old('excerpt') }}</textarea>
                        @error('excerpt')
                        <p class="help is-danger"> {{ $errors->first('excerpt') }}</p>
                        @enderror
                        <br>

                        <label for="body">Body</label><br>
                        <textarea class="textarea @error('body') is-danger @enderror"
                                  id="body" name="body"
                                  rows="9" cols="170"
                                  placeholder="The content of the article itself">{{ old('body') }}</textarea>
                        @error('body')
                        <p class="help is-danger"> {{ $errors->first('body') }}</p>
                        @enderror
                        <br><br>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
