<x-app-layout>
    <x-slot name="header">
        <h1>Categorias</h1>
    </x-slot>

    <x-table :headers="['Nome', 'Experiência','Categoria','Edição', 'Excluir']">
        @foreach($technologies as $technology)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 text-center">
                    {{ $technology->name }}
                </td>
                <td class="px-6 py-4 text-center">
                    {{ $technology->xp }}
                </td>
                <td class="px-6 py-4 text-center">
                    {{ $technology->category->label() }}
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="{{ route('technology.edit', ['technology' => $technology->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                </td>
                <td class="px-6 py-4 text-center">
                    <form action="{{ route('technology.destroy', ['technology' => $technology->id]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar essa tecnologia?');">
                        @csrf
                        @method('DELETE')
                        <button class="font-medium text-blue-600 dark:text-red-500 hover:underline">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </x-table>
</x-app-layout>
