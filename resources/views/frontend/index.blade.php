<x-front.app>
    <x-front.hero />

    <x-front.about :about="$about" />


   <x-front.title
       title="Projetos"
   />

   <div id="projects" class="projects-container">
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

    <x-front.technologies
        :frontendTechnologies="$frontendTechnologies"
        :backendTechnologies="$backendTechnologies"
    />
</x-front.app>
