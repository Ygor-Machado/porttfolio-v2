<x-front.app>
    <x-front.hero />

    <x-front.about :about="$about" />

    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        <x-front.title
            title="Projetos"
        />

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-20 justify-items-center">
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

    <x-front.technologies
        :frontendTechnologies="$frontendTechnologies"
        :backendTechnologies="$backendTechnologies"
    />
</x-front.app>
