<x-app-layout>

    <x-slot name="header">
        <h1>Tecnologias</h1>
    </x-slot>

    <ul>
        @foreach($technologies as $technology)
            <li>
                <h2>{{ $technology->name }}</h2>
                <p>{{ $technology->xp }}</p>
                <p>{{ $technology->category }}</p>
                <img src="img/technologies/{{ $technology->icon }}" alt="{{ $technology->name }}">
            </li>
        @endforeach
    </ul>
</x-app-layout>
