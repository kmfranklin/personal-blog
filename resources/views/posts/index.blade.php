<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-8">My Personal Blog</h1>

        @if($posts->count() > 0)
            <div class="space-y-6">
                @foreach($posts as $post)
                    <article class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-2xl font-semibold mb-2">{{ $post->title }}</h2>
                        <p class="text-gray-600 text-sm mb-4">{{ $post->created_at->format('F j, Y') }}</p>
                        <div class="prose">{{ $post->content }}</div>
                    </article>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-600">No posts yet!</p>
        @endif
    </div>

</body>
</html>
