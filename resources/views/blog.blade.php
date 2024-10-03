<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    {{-- slot content --}}
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-0">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($blogs as $blog)
                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <a href="/categories/{{ $blog->category->slug }}"
                            class="bg-{{ $blog->category->color }}-100 hover:bg-{{ $blog->category->color }}-300 text-{{ $blog->category->color }}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-{{ $blog->category->color }}-200 dark:text-{{ $blog->category->color }}-800">
                            {{ $blog->category->name }}
                        </a>
                        <span class="text-sm">{{ $blog->created_at->diffForHumans() }}</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="/blog/{{ $blog['slug'] }}" class="hover:underline">{{ $blog['title'] }}</a>
                    </h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                        {{ Str::limit($blog['content'], 100) }}
                    </p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="{{ $blog->author->name }}" />
                            <a href="/authors/{{ $blog->author->username }}"
                                class="hover:underline font-medium text-sm dark:text-white">
                                {{ $blog->author->name }}
                            </a>
                        </div>
                        <a href="/blog/{{ $blog['slug'] }}"
                            class="inline-flex items-center font-medium text-sm text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach

        </div>
    </div>
</x-layout>
