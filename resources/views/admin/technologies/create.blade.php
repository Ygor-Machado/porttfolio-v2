<x-app-layout>
    <x-slot name="header">
        <h1>Adicionar tecnologias</h1>
    </x-slot>

    <form action="{{ route('technology.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mt-10 grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <x-form.label>Nome</x-form.label>
                <x-form.input-store
                    type="text"
                    name="name"
                    value="{{old('name')}}"
                    required
                />
            </div>
            <div>
                <x-form.label>Experiência</x-form.label>
                <textarea
                    name="xp"
                    rows="4"
                    class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Digite a experiência com a tecnologia"
                    required>{{ old('xp') }}
                </textarea>
            </div>

            <div>
                <x-form.label>Categoria</x-form.label>
                <select
                    name="category"
                    class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required
                >
                    <option value="">Selecione uma categoria</option>
                    @foreach (App\TechnologyEnum::cases() as $category)
                        <option value="{{ $category->value }}" {{ old('category') == $category->value ? 'selected' : '' }}>
                            {{ $category->label() }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <x-form.label>Icone</x-form.label>
                <x-form.input-store
                    type="file"
                    name="icon"
                    value="{{old('icon')}}"
                />
            </div>

        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

</x-app-layout>
