<header class="header">
    <nav class="navbar" id="navbar">
        <a href="#" class="navbar-logo">
            <img src="{{ asset('assets/icon/icon_Aksa.png') }}" alt="logo" id="logo" loading="lazy">
        </a>
        <ul class="nav-links hidden md:flex">
            <li><a href="#Home">Home</a></li>
            <li><a href="#product">Product</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#Footer">Footer</a></li>
        </ul>
        <button type="button" id="mobile-menu-btn" class="hamburger flex flex-col md:hidden bg-transparent border-none p-0 cursor-pointer" aria-label="Menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div id="mobile-menu" class="hidden md:hidden absolute top-20 left-0 w-full bg-[#111111]/95 backdrop-blur-lg border-b border-zinc-800 shadow-2xl transition-all duration-300 z-40 origin-top">
            <div class="px-6 py-6 flex flex-col gap-6 text-left">
                <a href="#Home" class="text-white font-semibold text-lg hover:text-yellow-500 transition-colors">Home</a>
                <a href="#product" class="text-white font-semibold text-lg hover:text-yellow-500 transition-colors">Product</a>
                <a href="#about" class="text-white font-semibold text-lg hover:text-yellow-500 transition-colors">About Us</a>
                <a href="#Footer" class="text-white font-semibold text-lg hover:text-yellow-500 transition-colors">Contact</a>
                <button class="mt-4 w-full bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-3 rounded-xl transition-all duration-300 cursor-pointer">Rent Now</button>
            </div>
        </div>
    </nav>
</header>