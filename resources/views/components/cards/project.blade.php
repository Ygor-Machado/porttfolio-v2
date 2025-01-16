<div class="relative w-[480px] overflow-hidden shadow-md transition-transform transform ease-in mb-8 mt-8 hover:scale-110">
    <div class="overflow-hidden h-[400px] w-full">
        <img src="{{ asset('img/projects/' . $image) }}" alt="{{ $name }}" style="height: 28rem" class="w-full object-cover">
    </div>

    <div class="relative mx-4 mt-2 mb-4">
        <div class="mb-2">
            <h3 class="text-xl font-semibold">{{ $name }}</h3>
        </div>

        <div class="mb-2">
            <p>{{ $description }}</p>
        </div>

        <div class="mb-4 text-sm font-semibold text-gray-600 dark:text-gray-300 flex flex-wrap">
            @foreach($categories as $category)
                <span class="bg-gray-200 dark:bg-gray-600 text-gray-800 dark:text-gray-100 rounded-full px-3 py-1 mr-2 mb-2">
                    {{ $category->name }}
                </span>
            @endforeach
        </div>
    </div>

    <div class="relative flex justify-center gap-6 mb-4">
        <a target="_blank" href="{{ (filter_var($githubLink, FILTER_VALIDATE_URL)) ? $githubLink : 'http://' . $githubLink }}" class="flex items-center justify-center w-12 h-12 bg-white rounded-full shadow-md hover:shadow-lg transition-all">
            <i class="fab fa-github text-2xl text-black"></i>
        </a>

        <a target="_blank" href="{{ (filter_var($deployLink, FILTER_VALIDATE_URL)) ? $deployLink : 'http://' . $deployLink }}" class="flex items-center justify-center w-12 h-12 bg-white rounded-full shadow-md hover:shadow-lg transition-all">
            <i class="fas fa-eye text-2xl text-black"></i>
        </a>
    </div>

    @if(auth()->check())
        <div class="relative flex justify-center gap-4 mt-4 mb-4">
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
    @endif
</div>
