<x-layout>
    <x-slot:title>
        Detail Blog Page
    </x-slot:title>

    <x-slot:header>
        Detail Blog
    </x-slot:header>

    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 02 February 2025
        </div>
        <p class="py-4 font-light">{{ $post['body'] }}</p>
        <a href="/blog" class="font-medium text-blue-500 hover:underline">&laquo; Back to Blog</a>
    </article>
</x-layout>