<x-app-layout>
    <x-slot name="header">
        <h1>Editar Tecnologia</h1>
    </x-slot>

    <form action="{{ route('technology.update', $technology->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <div>
                <x-form.label class="mb-3">Nome</x-form.label>
                <x-form.input-store
                    type="text"
                    name="name"
                    value="{{ $technology->name }}"
                    required
                />
            </div>

            <div>
                <x-form.label class="mb-3">Experiência</x-form.label>
                <x-form.input-store
                    type="text"
                    name="xp"
                    value="{{ $technology->xp }}"
                    required
                />
            </div>

            <div>
                <x-form.label class="mb-3">Categoria</x-form.label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3.5" name="category" id="">
                    <option value="F" {{ $technology->category->value === 'F' ? 'selected' : '' }}>FrontEnd</option>
                    <option value="B" {{ $technology->category->value === 'B' ? 'selected' : '' }}>BackEnd</option>
                </select>
            </div>

            <div>
                <x-form.label class="mb-3">Imagem</x-form.label>
                <x-form.input-store
                    type="file"
                    name="icon"
                />

                <img class="w-32 h-32 rounded-md mb-5" src="{{ asset('img/technologies/' . $technology->icon) }}" alt="Imagem de tecnologia">

            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Atualizar</button>
        </div>
    </form>
</x-app-layout>
