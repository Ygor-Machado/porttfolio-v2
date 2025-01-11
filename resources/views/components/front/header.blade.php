<div class="fixed top-0 left-0 right-0 flex items-center justify-between h-20 px-8 bg-white z-50">
    <a href="/#inicio">
        <img src="/img/letra-y.png" alt="Logo" class="w-20">
    </a>

    <nav class="hidden md:flex items-center space-x-8">
        <a href="/#inicio" class="relative text-black hover:text-gray-800">
            Inicio
            <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-black transition-all duration-300"></span>
        </a>
        <a href="/#about" class="relative text-black hover:text-gray-800">
            Sobre
            <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-black transition-all duration-300"></span>
        </a>
        <a href="/#projects" class="relative text-black hover:text-gray-800">
            Projetos
            <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-black transition-all duration-300"></span>
        </a>
        <a href="/#skills" class="relative text-black hover:text-gray-800">
            Habilidades
            <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-black transition-all duration-300"></span>
        </a>
    </nav>

    <div x-data="{ isOpen: false }">
        <button @click="isOpen = !isOpen" class="md:hidden text-black">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <div x-show="isOpen" @click.away="isOpen = false" class="fixed inset-0 z-50 bg-white bg-opacity-80 md:hidden flex flex-col items-center justify-center gap-8 transition-transform duration-300">
            <a href="/#inicio" class="text-black text-xl hover:text-gray-800">Inicio</a>
            <a href="/#about" class="text-black text-xl hover:text-gray-800">Sobre</a>
            <a href="/#projects" class="text-black text-xl hover:text-gray-800">Projetos</a>
            <a href="/#skills" class="text-black text-xl hover:text-gray-800">Habilidades</a>
            <button @click="isOpen = false" class="absolute top-8 right-8 text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
</div>
