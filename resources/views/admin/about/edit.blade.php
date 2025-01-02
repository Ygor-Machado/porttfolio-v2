<x-app-layout>
    <x-slot name="header">
        <h1>Editar Sobre</h1>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <form action="{{ route('about.update', $about->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <x-form.label>
                    Texto sobre
                </x-form.label>
                <textarea id="description" name="description" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    {{ $about->description }}
                </textarea>

                @error('body')
                <div class="mt-2 text-red-600">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Enviar
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
