<div class="relative w-full sm:w-80 md:w-96 overflow-hidden shadow-lg transition-transform transform hover:scale-110 mb-8 mt-8">
    <div class="overflow-hidden">
        <img src="/img/projects/{{ $image }}" alt="{{ $name }}" class="w-full h-64 object-cover rounded-t-lg">
        @error('image')
        <div class="mt-2 text-red-600">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="relative p-4 pt-2 pb-16">
        <div class="mb-2">
            <h5 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $name }}</h5>
            @error('name')
            <div class="mt-2 text-red-600">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-4">
            <p class="text-sm text-gray-700 dark:text-gray-400">{{ $description }}</p>
            @error('description')
            <div class="mt-2 text-red-600">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2 text-sm font-semibold text-gray-600 dark:text-gray-300 flex flex-wrap">
            @foreach($categories as $category)
                <span class="bg-gray-200 dark:bg-gray-600 text-gray-800 dark:text-gray-100 rounded-full px-2 py-1 mr-2 mb-2">{{ $category->name }}</span>
            @endforeach
        </div>

        <div class="flex justify-center gap-4 mb-4">
            <a target="_blank" href="{{ (filter_var($githubLink, FILTER_VALIDATE_URL)) ? $githubLink : 'http://' . $githubLink }}" class="flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-800 hover:bg-gray-700 rounded-lg">
                <i class="fab fa-github mr-2"></i> GitHub
            </a>

            <a target="_blank" href="{{ (filter_var($deployLink, FILTER_VALIDATE_URL)) ? $deployLink : 'http://' . $deployLink }}" class="flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-500 rounded-lg">
                <i class="fas fa-cloud-upload-alt mr-2"></i> Deploy
            </a>
        </div>

        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 flex justify-between gap-4 mb-3">
            <a href="{{ route('project.edit', ['project' => $projectId ]) }}" class="px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Editar
            </a>
            <form action="{{ route('project.destroy', ['project' => $projectId ]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar esse projeto?');">
                @csrf
                @method('DELETE')
                <button class="px-3 py-2 text-sm font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Deletar
                </button>
            </form>
        </div>
    </div>
</div>
