<section id="about" class="py-16">
    <x-front.title
        title="Sobre mim"
    />

    <div class="container mx-auto px-6 lg:px-16 mt-10 flex flex-col lg:flex-row items-center justify-center gap-10">
        <div class="flex-1 lg:mr-10 overflow-hidden">
            <img
                src="/img/DSC00851.jpg"
                alt="Foto de Ygor"
                class="w-full max-w-md mx-auto aspect-[3/4] object-cover rounded-[50%/70%] shadow-lg transition-transform duration-500 hover:scale-105"
            />
        </div>

        <div class="flex-1">
            <p class="text-lg text-gray-700 leading-relaxed">
                {{ $about->description }}
            </p>
        </div>
    </div>
</section>
