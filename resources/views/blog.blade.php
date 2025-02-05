<x-layout>
    <x-slot:title>
        Blog Page
    </x-slot:title>

    <x-slot:header>
        Blog
    </x-slot:header>

    @foreach ($posts as $post )
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/blog/{{ $post['slug'] }}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 02 February 2025
        </div>
        <p class="py-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
        <a href="/blog/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
    @endforeach
</x-layout>