<x-app-layout>
    <x-slot name="header">
        <h1>Editar Projeto</h1>
    </x-slot>

    <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mt-10 grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <x-form.label>Nome</x-form.label>
                <x-form.input-store
                    type="text"
                    name="name"
                    value="{{ $project->name }}"
                    required
                />
            </div>
            <div>
                <x-form.label>Descrição</x-form.label>
                <textarea
                    name="description"
                    rows="4"
                    class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>{{ old('description') }}
                    {{ $project->description }}
                </textarea>
            </div>
            <div class="mb-6">
                <x-form.label>Link do GitHub</x-form.label>
                <x-form.input-store
                    type="text"
                    name="github_link"
                    value="{{ $project->github_link }}"
                    required
                />
            </div>
            <div class="mb-6">
                <x-form.label>Link do Deploy</x-form.label>
                <x-form.input-store
                    type="text"
                    name="deploy_link"
                    value="{{ $project->deploy_link }}"
                    required
                />
            </div>
            <div class="mb-6">
                <x-form.label>Imagem</x-form.label>
                <x-form.input-store
                    type="file"
                    name="image"
                />
                @if($project->image)
                    <img src="{{ asset('img/projects/' . $project->image) }}" alt="Imagem do Projeto" class="mt-2" width="150">
                @endif
            </div>
            <div class="mb-6">
                <x-form.label>Categorias</x-form.label>
                <select multiple name="categories[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ in_array($category->id, old('categories', $project->categories->pluck('id')->toArray())) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Atualizar</button>
    </form>
</x-app-layout>
