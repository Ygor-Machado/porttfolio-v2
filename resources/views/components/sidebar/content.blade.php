<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Dashboard"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown
        title="Projetos"
    >
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5V7.5A2.5 2.5 0 0 1 5.5 5H18.5A2.5 2.5 0 0 1 21 7.5v3a3 3 0 0 1-3 3H6A3 3 0 0 1 3 10.5z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 16.5V18.5A2.5 2.5 0 0 0 8.5 21H15.5A2.5 2.5 0 0 0 18 18.5v-2" />
            </svg>
        </x-slot>

        <x-sidebar.sublink
            title="Mostrar projetos"
            href="{{ route('project.index') }}"
        />
        <x-sidebar.sublink
            title="Adicionar Projetos"
            href="{{ route('project.create') }}"
        />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown
        title="Categorias"
    >
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5V7.5A2.5 2.5 0 0 1 5.5 5H18.5A2.5 2.5 0 0 1 21 7.5v3a3 3 0 0 1-3 3H6A3 3 0 0 1 3 10.5z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 16.5V18.5A2.5 2.5 0 0 0 8.5 21H15.5A2.5 2.5 0 0 0 18 18.5v-2" />
            </svg>
        </x-slot>

        <x-sidebar.sublink
            title="Mostrar categorias"
            href="{{ route('category.index') }}"
        />
        <x-sidebar.sublink
            title="Adicionar categorias"
            href="{{ route('category.create') }}"
        />
    </x-sidebar.dropdown>
</x-perfect-scrollbar>
