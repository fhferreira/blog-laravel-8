<div class="max-w-2xl mx-auto mb-10">
    <span class="text-gray-600 text-sm font-light">
        {{ $post->created_at->diffForHumans() }}
    </span>
    <a href="/post/{{ $post->id }}"
       class="block text-gray-800 text-xl sm:text-2xl md:text-3xl font-bold capitalize mt-2 hover:underline hover:text-blue-500">
        <h2>{{ $post->title }}</h2>
    </a>
    <p class="text-gray-600 mt-2">
        {{ $post->description }}
    </p>
    <div class="mt-4 hover:underline">
        <a href="/post/{{ $post->id }}" class="inline-flex items-center">
            <h5 title="Author" class="text-gray-800 font-medium ml-3 capitalize">{{ $post->author->name }}</h5>
        </a>
    </div>
</div>
<hr style="color:#000;"/>
