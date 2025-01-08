<x-app-layout>
    <x-slot name="header">
        <h1>Projetos</h1>
    </x-slot>

    <div class="container mx-auto p-4">
        <h1 class="text-white text-xl mb-4">Projetos</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($projects as $project)
                <x-cards.project
                    :name="$project->name"
                    :image="$project->image"
                    :description="$project->description"
                    :githubLink="$project->github_link"
                    :deployLink="$project->deploy_link"
                    :projectId="$project->id"
                    :categories="$project->categories"
                />
            @endforeach
        </div>
    </div>
</x-app-layout>
