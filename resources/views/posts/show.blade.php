<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Post') }}
        </h2>
    </x-slot>

    <div class="container">

        <div class="card m-5">
            <div class="card-header">
                <a href="{{ route('post.index') }}" class="btn btn-secondary float-right">Back to Posts</a>
            </div>
            <div class="card-body">
                <h1><b>Title: </b>{{ $post->title }}</h1>
            <p><b>Body: </b>{{ $post->body }}</p>
            </div>

        </div>

    </div>
</x-app-layout>
