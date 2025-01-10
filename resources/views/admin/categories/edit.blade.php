<x-app-layout>
    <x-slot name="header">
        <h1>Editar Categoria</h1>
    </x-slot>

    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <div>
                <x-form.label class="mb-3">Nome</x-form.label>
                <x-form.input-store
                    type="text"
                    name="name"
                    value="{{ $category->name }}"
                    required
                />
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Atualizar</button>
        </div>
    </form>
</x-app-layout>
