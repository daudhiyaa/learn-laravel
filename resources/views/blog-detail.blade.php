<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    {{-- slot content --}}
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">

            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <a href="/blog" class="font-medium text-blue-500 hover:underline">&laquo; Back to all blogs</a>

                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                alt="{{ $blog->author->name }}">

                            <div>
                                <a href="/authors/{{ $blog->author->username }}" rel="author"
                                    class="hover:underline text-xl font-bold text-gray-900 dark:text-white">{{ $blog->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400 mb-1">
                                    {{ $blog->created_at->diffForHumans() }}</p>

                                <a href="/categories/{{ $blog->category->slug }}"
                                    class="bg-{{ $blog->category->color }}-100 hover:bg-{{ $blog->category->color }}-300 text-{{ $blog->category->color }}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-{{ $blog->category->color }}-200 dark:text-{{ $blog->category->color }}-800">
                                    {{ $blog->category->name }}
                                </a>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $blog['title'] }}
                    </h1>
                </header>
                <p class="lead">{{ $blog['content'] }}</p>
            </article>
        </div>
    </main>
</x-layout>
