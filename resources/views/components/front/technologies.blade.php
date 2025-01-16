<section id="skills">
    <x-front.title
        title="FrontEnd"
    />

    <div class="skills-container">
        <ul>
            @foreach($frontendTechnologies as $technology)
                <li class="skill">
                    <div class="logo"><img class="img" src="{{ asset('img/technologies/' . $technology->icon) }}" alt=""></div>
                    <div class="title"><h2>{{ $technology->name }}</h2></div>
                    <div class="exp">{{ $technology->xp }}</div>
                </li>
            @endforeach
        </ul>
    </div>

    <x-front.title
        title="BackEnd"
    />

    <div class="skills-container">
        <ul>
            @foreach($backendTechnologies as $technology)
                <li class="skill">
                    <div class="logo"><img class="img" src="{{ asset('img/technologies/' . $technology->icon) }}" alt=""></div>
                    <div class="title"><h2>{{ $technology->name }}</h2></div>
                    <div class="exp">{{ $technology->xp }}</div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
