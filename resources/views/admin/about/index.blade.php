<x-app-layout>

    <x-slot name="header">
        <div>
            <h1 class="text-4xl font-bold">Sobre mim</h1>
        </div>
    </x-slot>

    <div class="mx-auto mt-10 p-8 bg-white shadow-lg rounded-lg">
        <div class="text-gray-800 leading-relaxed">
            {{ $about->description }}
        </div>
    </div>

    <div class="mt-3.5 text-left">
        <a href="{{ route('about.edit', ['about' => $about->id]) }}" class="inline-block px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            Editar
        </a>
    </div>

</x-app-layout>
