<x-layout>
    <x-slot:title>
        About Page
    </x-slot:title>

    <x-slot:header>
        About
    </x-slot:header>

    <p>Ini adalah Halaman About.</p>
    <h2>Owner: {{ $owner }}</h2>
    <img src="/img/owner.png" alt="Owner" width="100">
</x-layout>