<div>
    <header class="fixed w-full bg-white shadow-sm z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-['Pacifico'] text-primary">Alex Morgan</a>
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#home" class="text-gray-800 hover:text-primary font-medium transition-colors">Home</a>
                <a href="#about" class="text-gray-800 hover:text-primary font-medium transition-colors">About</a>
                <a href="#projects" class="text-gray-800 hover:text-primary font-medium transition-colors">Projects</a>
                <a href="#skills" class="text-gray-800 hover:text-primary font-medium transition-colors">Skills</a>
                <a href="#contact" class="text-gray-800 hover:text-primary font-medium transition-colors">Contact</a>
            </nav>
            <div class="flex items-center space-x-4">
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="w-10 h-10 flex items-center justify-center text-gray-700">
                        <i class="ri-global-line"></i>
                    </button>
                    <div x-show="open"
                         @click.away="open = false"
                         x-transition
                         class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1">
                        <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">English</button>
                        <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Español</button>
                        <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Français</button>
                    </div>
                </div>
                <button class="md:hidden w-10 h-10 flex items-center justify-center text-gray-700" id="menuToggle">
                    <i class="ri-menu-line ri-lg"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="md:hidden hidden bg-white w-full py-4 px-6 shadow-lg" id="mobileMenu">
            <div class="flex flex-col space-y-4">
                <a href="#home" class="text-gray-800 hover:text-primary font-medium py-2 transition-colors">Home</a>
                <a href="#about" class="text-gray-800 hover:text-primary font-medium py-2 transition-colors">About</a>
                <a href="#projects"
                    class="text-gray-800 hover:text-primary font-medium py-2 transition-colors">Projects</a>
                <a href="#skills" class="text-gray-800 hover:text-primary font-medium py-2 transition-colors">Skills</a>
                <a href="#contact"
                    class="text-gray-800 hover:text-primary font-medium py-2 transition-colors">Contact</a>
            </div>
        </div>
    </header>
</div>
