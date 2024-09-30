<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    {{-- slot content --}}
    <h3>Blog Page</h3>

    @foreach ($blogs as $blog)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/blog/{{ $blog['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $blog['title'] }}</h2>
            </a>
            <div class="">
                By
                <a href="/authors/{{ $blog->author->username }}" class="hover:underline text-base text-gray-500">
                    {{ $blog->author->name }}
                </a>
                in
                <a href="/categories/{{ $blog->category->slug }}" class="hover:underline text-base text-gray-500">
                    {{ $blog->category->name }}
                </a>
                | {{ $blog->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($blog['content'], 50) }}
            </p>
            <a href="/blog/{{ $blog['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach
</x-layout>
