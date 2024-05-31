<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container ">
            <div class="row">
                <h1><b>Your Posts</b></h1>
                <div class="col-md-12">
                    <a href="{{ route('post.create') }}" class="btn btn-primary mb-3 float-right">Create New Post</a>
                </div>
                <div class="col-md-12">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                @foreach($posts as $post)
                    <div class="col-md-12 card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><b>Title: </b>{{ $post->title }}</h5>
                            <p class="card-text"><b>Body: </b>{{ $post->body }}</p>
                            <a href="{{ route('post.show', $post) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('post.edit', $post) }}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('post.destroy', $post) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
