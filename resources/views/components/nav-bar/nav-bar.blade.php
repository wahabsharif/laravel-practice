<nav class="shadow-xl bg-white/30 backdrop-blur-lg">
    <div class="px-4 mx-auto max-w-7xl">
        <div class="flex items-center justify-between py-4">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/">
                    <img src="https://via.placeholder.com/150x50" alt="Logo" class="w-auto h-10">
                </a>
            </div>

            <!-- Menu Links -->
            <div class="hidden space-x-8 md:flex">
                @foreach ($links as $link)
                    <a href="{{ $link['url'] }}"
                        class="text-gray-100 transition duration-300 {{ $link['active'] ? 'text-blue-300' : 'hover:text-blue-300' }}">
                        {{ $link['name'] }}
                    </a>
                @endforeach
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex items-center md:hidden">
                <button id="nav-toggle" class="text-gray-100 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="nav-menu" class="hidden md:hidden">
        @foreach ($links as $link)
            <a href="{{ $link['url'] }}"
                class="block px-4 py-2 text-sm text-gray-100 transition duration-300 hover:bg-blue-300 hover:text-white">
                {{ $link['name'] }}
            </a>
        @endforeach
    </div>
</nav>

<script>
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');

    navToggle.addEventListener('click', () => {
        navMenu.classList.toggle('hidden');
    });
</script>
