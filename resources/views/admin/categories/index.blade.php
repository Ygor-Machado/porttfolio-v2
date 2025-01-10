<x-app-layout>
    <x-slot name="header">
        <h1>Categorias</h1>
    </x-slot>

    <x-table :headers="['Nome', 'Edição', 'Excluir']">
        @foreach($categories as $category)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 text-center">
                    {{ $category->name }}
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="{{ route('category.edit', ['category' => $category->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                </td>
                <td class="px-6 py-4 text-center">
                    <form action="{{ route('category.destroy', ['category' => $category->id]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar essa categoria?');">
                        @csrf
                        @method('DELETE')
                        <button class="font-medium text-blue-600 dark:text-red-500 hover:underline">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </x-table>
</x-app-layout>
