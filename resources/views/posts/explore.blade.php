<x-app-layout>
    <div class="grid grid-cols-3 gap-1 md:gap-5 mt-8 ">

        @foreach ($posts as $post)

        <a href="/post/{{ $post->slug }}">
            <img src="{{ asset('storage/'. $post->image) }}" alt="" class="w-full h-64 object-cover rounded">
        </a>

        @endforeach

    </div>
    <div class="mt-5">
        {{ $posts->links() }}
    </div>
</x-app-layout>
