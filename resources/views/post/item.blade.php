<div class="max-w-1xl mx-auto mb-10">
    <span class="text-gray-600 text-sm font-light">
        {{ $post->created_at->diffForHumans() }}
    </span>
    <a href="/post/{{ $post->id }}"
       class="block text-gray-800 text-xl sm:text-2xl md:text-3xl font-bold capitalize mt-2 hover:underline hover:text-blue-500">
        <h2>{{ $post->title }}</h2>
    </a>
    <p class="text-gray-600 mt-2">
        {!! nl2br($post->description) !!}
    </p>
    <div class="mt-4 hover:underline">
        <h5 title="Author" class="text-gray-800 font-medium ml-3 capitalize"><small class="italic">Author:</small> {{ $post->author->name }}</h5>
    </div>
</div>
<hr style="color:#000;"/>
