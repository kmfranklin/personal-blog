@extends('layouts.public')

@section('title', 'My Personal Blog')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @if($posts->count() > 0)
        <div class="space-y-6">
            @foreach($posts as $post)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-2 text-gray-900">{{ $post->title }}</h2>
                        <p class="text-gray-600 text-sm mb-4">{{ $post->created_at->format('F j, Y') }}</p>
                        <div class="prose max-w-none text-gray-700">{{ $post->content }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-center">
                <p class="text-gray-600 mb-4">No posts yet!</p>
                @auth
                    <a href="/posts/create" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">
                        Create Your First Post
                    </a>
                @else
                    <p class="text-sm text-gray-500">Register to start blogging!</p>
                @endauth
            </div>
        </div>
    @endif
</div>
@endsection
