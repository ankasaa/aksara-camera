@extends('layouts.app')

@section('title', 'Aksa Renta')

@section('content')
    <section class="hero-section font-sans" id="Home">
        <div class="absolute inset-0 z-10 bg-gradient-to-r from-black/90 via-black/70 to-transparent"></div>
        <div class="kanan relative z-20 flex flex-col items-start text-left px-6 pt-32 pb-20 max-w-lg md:pt-0">
            <p class="mb-4 text-xs font-semibold uppercase tracking-widest text-white/90 sm:text-sm">
                <span class="highlight text-amber-400">aksarental</span>.com
            </p>
            <h2 class="mb-6 text-4xl leading-tight font-extrabold md:text-6xl">
                Let's <span class="highlight text-amber-400 [text-shadow:0_2px_20px_rgba(251,191,36,0.45)]">Create</span> Beautiful <br> Work Together
            </h2>
            <p class="mb-8 max-w-sm text-sm leading-relaxed text-gray-300 md:text-base">
                <span class="highlight text-amber-400">Temukan kamera terbaik untuk mewujudkan ide kreatif Anda.</span> Kami menyediakan berbagai pilihan kamera dan perlengkapan fotografi dengan harga terjangkau dan proses penyewaan yang mudah.
            </p>
            <button class="inline-flex items-center gap-3 rounded-full bg-yellow-500 px-8 py-3.5 font-bold text-black shadow-lg shadow-yellow-500/30 transition-all duration-300 hover:-translate-y-1 hover:scale-105 hover:bg-yellow-400 hover:shadow-[0_8px_25px_rgba(234,179,8,0.6)]">
                View Product
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M13.5 4.5 21 12l-7.5 7.5M21 12H3"></path>
                </svg>
            </button>
        </div>
    </section>

    <section class="sec-gallery" id="product">
        <div class="relative z-30 mx-auto flex w-[92%] max-w-4xl -translate-y-1/2 items-center gap-2 rounded-full border border-gray-100 bg-white p-1.5 px-2 shadow-2xl shadow-black/20">
            <svg class="ml-2 h-5 w-5 shrink-0 text-gray-400 md:ml-4" fill="currentColor" viewBox="0 -960 960 960" aria-hidden="true">
                <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"></path>
            </svg>
            <input type="text" placeholder="Search for product" class="min-w-0 flex-1 bg-transparent px-2 py-3 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-0 sm:px-4 sm:text-base" />
            <div class="hidden self-stretch border-l border-gray-200 sm:block"></div>
            <button type="button" class="flex cursor-pointer items-center gap-2 rounded-full bg-zinc-900 px-4 py-3 text-sm font-medium text-white transition-colors hover:bg-zinc-800 focus:outline-none sm:px-6">
                <span class="hidden sm:inline">Select Category</span>
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 -960 960 960" aria-hidden="true">
                    <path d="M480-360 280-560h400L480-360Z"></path>
                </svg>
            </button>
        </div>
        <div class="relative mx-auto w-full max-w-7xl -my-6 px-8 pt-8">
            <button id="btn-scroll-left" class="absolute left-0 top-1/2 z-10 -translate-y-1/2 rounded-full bg-[#2A2A2E]/80 p-2 text-white shadow-lg backdrop-blur-sm md:hidden" aria-label="Scroll kategori ke kiri">&#10094;</button>
            <div id="category-scroll-container" class="catalog-icon-product hide-scrollbar flex w-full snap-x snap-mandatory gap-4 overflow-x-auto px-4 pt-8 pb-6 md:flex-wrap md:justify-center md:gap-x-10 md:overflow-x-visible md:px-0">
            <div class="group flex cursor-pointer shrink-0 snap-center flex-col items-center gap-3">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)] sm:h-16 sm:w-16">
                    <img src="{{ asset('assets/icon/Cam Icon 1.png') }}" alt="" loading="lazy" class="h-7 w-7 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert sm:h-8 sm:w-8">
                </div>
                <p class="text-xs font-medium text-gray-400 transition-colors duration-300 group-hover:text-white sm:text-sm">Camera</p>
            </div>
            <div class="group flex cursor-pointer shrink-0 snap-center flex-col items-center gap-3">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)] sm:h-16 sm:w-16">
                    <img src="{{ asset('assets/icon/lens.png') }}" alt="" loading="lazy" class="h-7 w-7 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert sm:h-8 sm:w-8">
                </div>
                <p class="text-xs font-medium text-gray-400 transition-colors duration-300 group-hover:text-white sm:text-sm">Lens</p>
            </div>
            <div class="group flex cursor-pointer shrink-0 snap-center flex-col items-center gap-3">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)] sm:h-16 sm:w-16">
                    <img src="{{ asset('assets/icon/memory.png') }}" alt="" loading="lazy" class="h-7 w-7 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert sm:h-8 sm:w-8">
                </div>
                <p class="text-xs font-medium text-gray-400 transition-colors duration-300 group-hover:text-white sm:text-sm">memory</p>
            </div>
            <div class="group flex cursor-pointer shrink-0 snap-center flex-col items-center gap-3">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)] sm:h-16 sm:w-16">
                    <img src="{{ asset('assets/icon/battery.png') }}" alt="" loading="lazy" class="h-7 w-7 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert sm:h-8 sm:w-8">
                </div>
                <p class="text-xs font-medium text-gray-400 transition-colors duration-300 group-hover:text-white sm:text-sm">Battery</p>
            </div>
            <div class="group flex cursor-pointer shrink-0 snap-center flex-col items-center gap-3">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)] sm:h-16 sm:w-16">
                    <img src="{{ asset('assets/icon/ActionCam .png') }}" alt="" loading="lazy" class="h-7 w-7 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert sm:h-8 sm:w-8">
                </div>
                <p class="text-xs font-medium text-gray-400 transition-colors duration-300 group-hover:text-white sm:text-sm">Action Cam</p>
            </div>
            <div class="group flex cursor-pointer shrink-0 snap-center flex-col items-center gap-3">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)] sm:h-16 sm:w-16">
                    <img src="{{ asset('assets/icon/Stabilizer.png') }}" alt="" loading="lazy" class="h-7 w-7 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert sm:h-8 sm:w-8">
                </div>
                <p class="text-xs font-medium text-gray-400 transition-colors duration-300 group-hover:text-white sm:text-sm">Stabilizer</p>
            </div>
            <div class="group flex cursor-pointer shrink-0 snap-center flex-col items-center gap-3">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)] sm:h-16 sm:w-16">
                    <img src="{{ asset('assets/icon/drone.png') }}" alt="" loading="lazy" class="h-7 w-7 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert sm:h-8 sm:w-8">
                </div>
                <p class="text-xs font-medium text-gray-400 transition-colors duration-300 group-hover:text-white sm:text-sm">Drone</p>
            </div>
            <div class="group flex cursor-pointer shrink-0 snap-center flex-col items-center gap-3">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)] sm:h-16 sm:w-16">
                    <img src="{{ asset('assets/icon/flash.png') }}" alt="" loading="lazy" class="h-7 w-7 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert sm:h-8 sm:w-8">
                </div>
                <p class="text-xs font-medium text-gray-400 transition-colors duration-300 group-hover:text-white sm:text-sm">Flash</p>
            </div>
            <div class="group flex cursor-pointer shrink-0 snap-center flex-col items-center gap-3">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)] sm:h-16 sm:w-16">
                    <img src="{{ asset('assets/icon/tripod.png') }}" alt="" loading="lazy" class="h-7 w-7 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert sm:h-8 sm:w-8">
                </div>
                <p class="text-xs font-medium text-gray-400 transition-colors duration-300 group-hover:text-white sm:text-sm">Tripod</p>
            </div>
            <div class="group flex cursor-pointer shrink-0 snap-center flex-col items-center gap-3">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)] sm:h-16 sm:w-16">
                    <img src="{{ asset('assets/icon/Microphone.png') }}" alt="" loading="lazy" class="h-7 w-7 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert sm:h-8 sm:w-8">
                </div>
                <p class="text-xs font-medium text-gray-400 transition-colors duration-300 group-hover:text-white sm:text-sm">Microphone</p>
            </div>
            <div class="group flex cursor-pointer shrink-0 snap-center flex-col items-center gap-3">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)] sm:h-16 sm:w-16">
                    <img src="{{ asset('assets/icon/Gear Support.png') }}" alt="" loading="lazy" class="h-7 w-7 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert sm:h-8 sm:w-8">
                </div>
                <p class="text-xs font-medium text-gray-400 transition-colors duration-300 group-hover:text-white sm:text-sm">Gear Support</p>
            </div>
        </div>
            <button id="btn-scroll-right" class="absolute right-0 top-1/2 z-10 -translate-y-1/2 rounded-full bg-[#2A2A2E]/80 p-2 text-white shadow-lg backdrop-blur-sm md:hidden" aria-label="Scroll kategori ke kanan">&#10095;</button>
        </div>

        <div class="gallery grid w-full grid-cols-1 gap-x-6 gap-y-20 pt-16 sm:grid-cols-2 sm:gap-y-16 md:grid-cols-3 md:pt-20 lg:grid-cols-5">
            <div class="content-gallery bg-[#2A2A2E] rounded-2xl p-4 flex flex-col items-center relative h-full w-full shadow-lg">
                <img class="w-52 h-36 object-contain -mt-12 mb-4 drop-shadow-2xl transition-transform duration-300 hover:scale-110" src="{{ asset('assets/img_produk/cammeraa1.png') }}" alt="" loading="lazy">
                <h3 class="text-gray-400 text-sm font-medium mt-2">FUJIFILM X-H2</h3>
                <p class="camera text-gray-500 text-xs mt-1">Camera</p>
                <p class="line w-full border-t border-gray-500 my-3"></p>
                <h6 class="text-yellow-500 font-bold text-base mb-4">Rp350.000/Day</h6>
                <button class="mt-auto w-full py-2.5 rounded-xl bg-[#1E1E21] text-yellow-500 font-semibold text-sm tracking-wide transition-colors duration-300 hover:bg-yellow-500 hover:text-black cursor-pointer">Tersedia</button>
            </div>
            <div class="content-gallery bg-[#2A2A2E] rounded-2xl p-4 flex flex-col items-center relative h-full w-full shadow-lg">
                <img class="w-52 h-36 object-contain -mt-12 mb-4 drop-shadow-2xl transition-transform duration-300 hover:scale-110" src="{{ asset('assets/img_produk/FUJIFILM X-T5.png') }}" alt="" loading="lazy">
                <h3 class="text-gray-400 text-sm font-medium mt-2">FUJIFILM X-T5</h3>
                <p class="camera text-gray-500 text-xs mt-1">Camera</p>
                <p class="line w-full border-t border-gray-500 my-3"></p>
                <h6 class="text-yellow-500 font-bold text-base mb-4">Rp350.000/Day</h6>
                <button class="mt-auto w-full py-2.5 rounded-xl bg-[#1E1E21] text-yellow-500 font-semibold text-sm tracking-wide transition-colors duration-300 hover:bg-yellow-500 hover:text-black cursor-pointer">Tersedia</button>
            </div>
            <div class="content-gallery bg-[#2A2A2E] rounded-2xl p-4 flex flex-col items-center relative h-full w-full shadow-lg">
                <img class="w-52 h-36 object-contain -mt-12 mb-4 drop-shadow-2xl transition-transform duration-300 hover:scale-110" src="{{ asset('assets/img_produk/SONY A6000.png') }}" alt="" loading="lazy">
                <h3 class="text-gray-400 text-sm font-medium mt-2">SONY A6000</h3>
                <p class="camera text-gray-500 text-xs mt-1">Camera</p>
                <p class="line w-full border-t border-gray-500 my-3"></p>
                <h6 class="text-yellow-500 font-bold text-base mb-4">Rp350.000/Day</h6>
                <button class="mt-auto w-full py-2.5 rounded-xl bg-[#1E1E21] text-yellow-500 font-semibold text-sm tracking-wide transition-colors duration-300 hover:bg-yellow-500 hover:text-black cursor-pointer">Tersedia</button>
            </div>
            <div class="content-gallery bg-[#2A2A2E] rounded-2xl p-4 flex flex-col items-center relative h-full w-full shadow-lg">
                <img class="w-52 h-36 object-contain -mt-12 mb-4 drop-shadow-2xl transition-transform duration-300 hover:scale-110" src="{{ asset('assets/img_produk/133.png') }}" alt="" loading="lazy">
                <h3 class="text-gray-400 text-sm font-medium mt-2">SONY A6400</h3>
                <p class="camera text-gray-500 text-xs mt-1">Camera</p>
                <p class="line w-full border-t border-gray-500 my-3"></p>
                <h6 class="text-yellow-500 font-bold text-base mb-4">Rp350.000/Day</h6>
                <button class="mt-auto w-full py-2.5 rounded-xl bg-[#1E1E21] text-yellow-500 font-semibold text-sm tracking-wide transition-colors duration-300 hover:bg-yellow-500 hover:text-black cursor-pointer">Tersedia</button>
            </div>
            <div class="content-gallery bg-[#2A2A2E] rounded-2xl p-4 flex flex-col items-center relative h-full w-full shadow-lg">
                <img class="w-52 h-36 object-contain -mt-12 mb-4 drop-shadow-2xl transition-transform duration-300 hover:scale-110" src="{{ asset('assets/img_produk/144.png') }}" alt="" loading="lazy">
                <h3 class="text-gray-400 text-sm font-medium mt-2">SONY A6500</h3>
                <p class="camera text-gray-500 text-xs mt-1">Camera</p>
                <p class="line w-full border-t border-gray-500 my-3"></p>
                <h6 class="text-yellow-500 font-bold text-base mb-4">Rp350.000/Day</h6>
                <button class="mt-auto w-full py-2.5 rounded-xl bg-[#1E1E21] text-yellow-500 font-semibold text-sm tracking-wide transition-colors duration-300 hover:bg-yellow-500 hover:text-black cursor-pointer">Tersedia</button>
            </div>
            <div class="content-gallery bg-[#2A2A2E] rounded-2xl p-4 flex flex-col items-center relative h-full w-full shadow-lg">
                <img class="w-52 h-36 object-contain -mt-12 mb-4 drop-shadow-2xl transition-transform duration-300 hover:scale-110" src="{{ asset('assets/img_produk/155.png') }}" alt="" loading="lazy">
                <h3 class="text-gray-400 text-sm font-medium mt-2">SONY A6700</h3>
                <p class="camera text-gray-500 text-xs mt-1">Camera</p>
                <p class="line w-full border-t border-gray-500 my-3"></p>
                <h6 class="text-yellow-500 font-bold text-base mb-4">Rp350.000/Day</h6>
                <button class="mt-auto w-full py-2.5 rounded-xl bg-[#1E1E21] text-yellow-500 font-semibold text-sm tracking-wide transition-colors duration-300 hover:bg-yellow-500 hover:text-black cursor-pointer">Tersedia</button>
            </div>
            <div class="content-gallery bg-[#2A2A2E] rounded-2xl p-4 flex flex-col items-center relative h-full w-full shadow-lg">
                <img class="w-52 h-36 object-contain -mt-12 mb-4 drop-shadow-2xl transition-transform duration-300 hover:scale-110" src="{{ asset('assets/img_produk/166.png') }}" alt="" loading="lazy">
                <h3 class="text-gray-400 text-sm font-medium mt-2">SONY A7C</h3>
                <p class="camera text-gray-500 text-xs mt-1">Camera</p>
                <p class="line w-full border-t border-gray-500 my-3"></p>
                <h6 class="text-yellow-500 font-bold text-base mb-4">Rp350.000/Day</h6>
                <button class="mt-auto w-full py-2.5 rounded-xl bg-[#1E1E21] text-yellow-500 font-semibold text-sm tracking-wide transition-colors duration-300 hover:bg-yellow-500 hover:text-black cursor-pointer">Tersedia</button>
            </div>
            <div class="content-gallery bg-[#2A2A2E] rounded-2xl p-4 flex flex-col items-center relative h-full w-full shadow-lg">
                <img class="w-52 h-36 object-contain -mt-12 mb-4 drop-shadow-2xl transition-transform duration-300 hover:scale-110" src="{{ asset('assets/img_produk/177.png') }}" alt="" loading="lazy">
                <h3 class="text-gray-400 text-sm font-medium mt-2">SONY A7II</h3>
                <p class="camera text-gray-500 text-xs mt-1">Camera</p>
                <p class="line w-full border-t border-gray-500 my-3"></p>
                <h6 class="text-yellow-500 font-bold text-base mb-4">Rp350.000/Day</h6>
                <button class="mt-auto w-full py-2.5 rounded-xl bg-[#1E1E21] text-yellow-500 font-semibold text-sm tracking-wide transition-colors duration-300 hover:bg-yellow-500 hover:text-black cursor-pointer">Tersedia</button>
            </div>
            <div class="content-gallery bg-[#2A2A2E] rounded-2xl p-4 flex flex-col items-center relative h-full w-full shadow-lg">
                <img class="w-52 h-36 object-contain -mt-12 mb-4 drop-shadow-2xl transition-transform duration-300 hover:scale-110" src="{{ asset('assets/img_produk/199.png') }}" alt="" loading="lazy">
                <h3 class="text-gray-400 text-sm font-medium mt-2">SONY FX3png</h3>
                <p class="camera text-gray-500 text-xs mt-1">Camera</p>
                <p class="line w-full border-t border-gray-500 my-3"></p>
                <h6 class="text-yellow-500 font-bold text-base mb-4">Rp350.000/Day</h6>
                <button class="mt-auto w-full py-2.5 rounded-xl bg-[#1E1E21] text-yellow-500 font-semibold text-sm tracking-wide transition-colors duration-300 hover:bg-yellow-500 hover:text-black cursor-pointer">Tersedia</button>
            </div>
            <div class="content-gallery bg-[#2A2A2E] rounded-2xl p-4 flex flex-col items-center relative h-full w-full shadow-lg">
                <img class="w-52 h-36 object-contain -mt-12 mb-4 drop-shadow-2xl transition-transform duration-300 hover:scale-110" src="{{ asset('assets/img_produk/188.png') }}" alt="" loading="lazy">
                <h3 class="text-gray-400 text-sm font-medium mt-2">SONY A7IV</h3>
                <p class="camera text-gray-500 text-xs mt-1">Camera</p>
                <p class="line w-full border-t border-gray-500 my-3"></p>
                <h6 class="text-yellow-500 font-bold text-base mb-4">Rp350.000/Day</h6>
                <button class="mt-auto w-full py-2.5 rounded-xl bg-[#1E1E21] text-yellow-500 font-semibold text-sm tracking-wide transition-colors duration-300 hover:bg-yellow-500 hover:text-black cursor-pointer">Tersedia</button>
            </div>
        </div>
    </section>

    <section style="padding: 10px;" id="about">
        <div class="container">
            <div class="row flex flex-col gap-6 md:flex-row">
                <div class="card promo flex-1">
                    <div class="background-image"></div>
                    <div class="gradient-overlay"></div>
                    <img class="camera-image promo-hover" src="{{ asset('assets/img_produk/1 Promo Camera 1.png') }}" alt="Camera Promo" loading="lazy">
                    <div class="content">
                        <h2>PROMO<br>HARI INI!</h2>
                        <p>Dapatkan penawaran terbaik hanya untuk waktu terbatas! Jangan lewatkan kesempatan untuk memiliki peralatan impianmu dengan harga spesial!</p>
                        <button>Lihat</button>
                    </div>
                </div>
                <div class="card new flex-1">
                    <div class="background-image"></div>
                    <div class="gradient-overlay"></div>
                    <img class="camera-image new-hover" src="{{ asset('assets/img_produk/2 New Product 1.png') }}" alt="Camera New" loading="lazy">
                    <div class="content">
                        <h2>NEW<br>PRODUCT!</h2>
                        <p>Produk terbaru kini hadir untuk memenuhi kebutuhan kreativitas! Inovasi terkini, kualitas terbaik, siap mendukung setiap proyekmu.</p>
                        <button>Lihat</button>
                    </div>
                </div>
            </div>

            <div class="row flex flex-col gap-6 md:flex-row">
                <div class="card unggulan flex-1">
                    <div class="background-image"></div>
                    <div class="gradient-overlay"></div>
                    <img class="camera-image unggulan-hover" src="{{ asset('assets/img_produk/3 Produk Unggulan Camera 1.png') }}" alt="Camera Unggulan" loading="lazy">
                    <div class="content">
                        <h2>PRODUK<br>UNGGULAN!</h2>
                        <p>Pilihan terbaik dari yang terbaik! Temukan produk unggulan yang paling diminati dan terbukti mendukung kreativitas tanpa batas.</p>
                        <button>Lihat</button>
                    </div>
                </div>
                <div class="card livestream flex-1">
                    <div class="background-image"></div>
                    <div class="gradient-overlay"></div>
                    <img class="camera-image livestream-hover" src="{{ asset('assets/img_produk/4 LIVE STREAM CAMERA 1.png') }}" alt="Camera Live Stream" loading="lazy">
                    <div class="content">
                        <h2>PRODUK<br>LIVE STREAM!</h2>
                        <p>Jadikan siaran langsung lebih profesional! Kami menyediakan peralatan lengkap untuk pengalaman live streaming yang mulus dan berkualitas tinggi.</p>
                        <button>Lihat</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brand-section">
        <div class="brand-container">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-white mb-12">Brand</h2>
            <div class="brand-logos grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-x-12 gap-y-10 place-items-center w-full max-w-5xl mx-auto">
                <img class="h-5 sm:h-6 md:h-8 w-auto object-contain max-w-[70px] sm:max-w-[80px] md:max-w-[100px] opacity-50 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-300" src="{{ asset('assets/icon/Canon-Logo.png') }}" alt="Canon Logo" loading="lazy">
                <img class="h-5 sm:h-6 md:h-8 w-auto object-contain max-w-[70px] sm:max-w-[80px] md:max-w-[100px] opacity-50 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-300" src="{{ asset('assets/icon/DJI-Logo.png') }}" alt="DJI Logo" loading="lazy">
                <img class="h-5 sm:h-6 md:h-8 w-auto object-contain max-w-[70px] sm:max-w-[80px] md:max-w-[100px] opacity-50 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-300" src="{{ asset('assets/icon/Fujifilm-Logo.png') }}" alt="Fujifilm Logo" loading="lazy">
                <img class="h-5 sm:h-6 md:h-8 w-auto object-contain max-w-[70px] sm:max-w-[80px] md:max-w-[100px] opacity-50 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-300" src="{{ asset('assets/icon/Godox-logo.png') }}" alt="Godox Logo" loading="lazy">
                <img class="h-5 sm:h-6 md:h-8 w-auto object-contain max-w-[70px] sm:max-w-[80px] md:max-w-[100px] opacity-50 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-300" src="{{ asset('assets/icon/Gopro-Logo.png') }}" alt="GoPro Logo" loading="lazy">
                <img class="h-5 sm:h-6 md:h-8 w-auto object-contain max-w-[70px] sm:max-w-[80px] md:max-w-[100px] opacity-50 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-300" src="{{ asset('assets/icon/Sony-Logo.png') }}" alt="Sony Logo" loading="lazy">
            </div>
        </div>
        <div class="relative w-full max-w-7xl mx-auto rounded-3xl overflow-hidden bg-zinc-900 border border-zinc-800 shadow-2xl flex flex-col md:flex-row min-h-[450px] md:min-h-[400px] mt-16">
            <img class="absolute inset-0 w-full h-full object-cover z-0" src="{{ asset('assets/img_background/1 Promo Background.png') }}" alt="Background" loading="lazy">
            <div class="absolute inset-0 bg-black/60 z-0"></div>
            <div class="relative z-20 flex flex-col items-center md:items-start text-center md:text-left w-full md:w-1/2 pt-12 pb-[200px] md:py-16 md:px-16">
                <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight mb-4">PAKET <span class="text-yellow-500">BUNDLING!</span></h2>
                <a href="#" class="w-max inline-flex items-center justify-center px-8 py-3.5 bg-yellow-500 text-black font-extrabold rounded-full transition-all duration-300 ease-out hover:-translate-y-1 hover:scale-105 hover:shadow-[0_10px_20px_rgba(234,179,8,0.4)] cursor-pointer mt-6 relative z-30">Lihat Detail</a>
            </div>
            <img class="absolute bottom-0 left-1/2 transform -translate-x-1/2 md:translate-x-0 md:left-auto md:right-10 w-[280px] sm:w-[320px] md:w-[450px] object-contain object-bottom transition-transform duration-500 hover:scale-105 z-10 pointer-events-none md:pointer-events-auto" src="{{ asset('assets/img_produk/NIKON-2.png') }}" alt="Camera" loading="lazy">
        </div>
    </section>

    <section class="slider-section" id="gallery">
        <div class="slider-container">
            <div class="slider-wrapper flex items-center justify-center gap-4 overflow-hidden w-full h-[300px] md:h-[400px] relative">
                <div class="slide relative h-full transition-all duration-[2000ms] ease-in-out cursor-pointer overflow-hidden rounded-xl object-cover hidden md:block md:w-[20%] md:opacity-40 md:z-10 md:hover:opacity-70 shrink-0" data-index="0">
                    <div class="content-card absolute inset-0"></div>
                    <div class="absolute inset-x-0 bottom-0 z-10 flex items-center gap-3 bg-gradient-to-t from-black/90 via-black/50 to-transparent p-4 md:p-5">
                        <button type="button" class="btn shrink-0">Rent</button>
                        <p class="btn-text">SHOT WITH <span class="span">DJI MAVIC AIR 2S</span></p>
                    </div>
                </div>
                <div class="slide relative h-full transition-all duration-[2000ms] ease-in-out cursor-pointer overflow-hidden rounded-xl object-cover hidden md:block md:w-[20%] md:opacity-40 md:z-10 md:hover:opacity-70 shrink-0" data-index="1">
                    <div class="content-card2 absolute inset-0"></div>
                    <div class="absolute inset-x-0 bottom-0 z-10 flex items-center gap-3 bg-gradient-to-t from-black/90 via-black/50 to-transparent p-4 md:p-5">
                        <button type="button" class="btn shrink-0">Rent</button>
                        <p class="btn-text">SHOT WITH <span class="span">FUJIFILM X-T5</span></p>
                    </div>
                </div>
                <div class="slide relative h-full transition-all duration-[2000ms] ease-in-out cursor-pointer overflow-hidden rounded-xl object-cover hidden md:block md:w-[20%] md:opacity-40 md:z-10 md:hover:opacity-70 shrink-0" data-index="2">
                    <div class="content-card3 absolute inset-0"></div>
                    <div class="absolute inset-x-0 bottom-0 z-10 flex items-center gap-3 bg-gradient-to-t from-black/90 via-black/50 to-transparent p-4 md:p-5">
                        <button type="button" class="btn shrink-0">Rent</button>
                        <p class="btn-text">SHOT WITH <span class="span">SONY A6500</span></p>
                    </div>
                </div>
                <div class="slide relative h-full transition-all duration-[2000ms] ease-in-out cursor-pointer overflow-hidden rounded-xl object-cover hidden md:block md:w-[20%] md:opacity-40 md:z-10 md:hover:opacity-70 shrink-0" data-index="3">
                    <div class="content-card4 absolute inset-0"></div>
                    <div class="absolute inset-x-0 bottom-0 z-10 flex items-center gap-3 bg-gradient-to-t from-black/90 via-black/50 to-transparent p-4 md:p-5">
                        <button type="button" class="btn shrink-0">Rent</button>
                        <p class="btn-text">SHOT WITH <span class="span">SONY A7IV</span></p>
                    </div>
                </div>
                <div class="slide relative h-full transition-all duration-[2000ms] ease-in-out cursor-pointer overflow-hidden rounded-xl object-cover hidden md:block md:w-[20%] md:opacity-40 md:z-10 md:hover:opacity-70 shrink-0" data-index="4">
                    <div class="content-card5 absolute inset-0"></div>
                    <div class="absolute inset-x-0 bottom-0 z-10 flex items-center gap-3 bg-gradient-to-t from-black/90 via-black/50 to-transparent p-4 md:p-5">
                        <button type="button" class="btn shrink-0">Rent</button>
                        <p class="btn-text">SHOT WITH <span class="span">SONY A7II</span></p>
                    </div>
                </div>
                <div class="slide relative h-full transition-all duration-[2000ms] ease-in-out cursor-pointer overflow-hidden rounded-xl object-cover hidden md:block md:w-[20%] md:opacity-40 md:z-10 md:hover:opacity-70 shrink-0" data-index="5">
                    <div class="content-card6 absolute inset-0"></div>
                    <div class="absolute inset-x-0 bottom-0 z-10 flex items-center gap-3 bg-gradient-to-t from-black/90 via-black/50 to-transparent p-4 md:p-5">
                        <button type="button" class="btn shrink-0">Rent</button>
                        <p class="btn-text">SHOT WITH <span class="span">FUJIFILM X-H2</span></p>
                    </div>
                </div>
                <div class="slide relative h-full transition-all duration-[2000ms] ease-in-out cursor-pointer overflow-hidden rounded-xl object-cover hidden md:block md:w-[20%] md:opacity-40 md:z-10 md:hover:opacity-70 shrink-0" data-index="6">
                    <div class="content-card7 absolute inset-0"></div>
                    <div class="absolute inset-x-0 bottom-0 z-10 flex items-center gap-3 bg-gradient-to-t from-black/90 via-black/50 to-transparent p-4 md:p-5">
                        <button type="button" class="btn shrink-0">Rent</button>
                        <p class="btn-text">SHOT WITH <span class="span">SONY A6000</span></p>
                    </div>
                </div>
                <div class="slide relative h-full transition-all duration-[2000ms] ease-in-out cursor-pointer overflow-hidden rounded-xl object-cover hidden md:block md:w-[20%] md:opacity-40 md:z-10 md:hover:opacity-70 shrink-0" data-index="7">
                    <div class="content-card8 absolute inset-0"></div>
                    <div class="absolute inset-x-0 bottom-0 z-10 flex items-center gap-3 bg-gradient-to-t from-black/90 via-black/50 to-transparent p-4 md:p-5">
                        <button type="button" class="btn shrink-0">Rent</button>
                        <p class="btn-text">SHOT WITH <span class="span">SONY A7III</span></p>
                    </div>
                </div>
                <div class="slide relative h-full transition-all duration-[2000ms] ease-in-out cursor-pointer overflow-hidden rounded-xl object-cover hidden md:block md:w-[20%] md:opacity-40 md:z-10 md:hover:opacity-70 shrink-0" data-index="8">
                    <div class="content-card9 absolute inset-0"></div>
                    <div class="absolute inset-x-0 bottom-0 z-10 flex items-center gap-3 bg-gradient-to-t from-black/90 via-black/50 to-transparent p-4 md:p-5">
                        <button type="button" class="btn shrink-0">Rent</button>
                        <p class="btn-text">SHOT WITH <span class="span">SONY A7II</span></p>
                    </div>
                </div>
            </div>
            <div class="dots-container flex justify-center gap-3 mt-10"></div>
        </div>
    </section>

    <script>
        (function () {
            const sliderContainer = document.querySelector('.slider-container');
            const sliderWrapper = document.querySelector('.slider-wrapper');
            const dotsContainer = document.querySelector('.dots-container');
            if (!sliderContainer || !sliderWrapper || !dotsContainer) return;

            const slides = Array.from(sliderWrapper.querySelectorAll('.slide'));
            const total = slides.length;
            if (total < 2) return;

            const AUTO_PLAY_DELAY = 4000;
            const CENTER_POSITION = Math.floor(total / 2);

            const ACTIVE_CLASSES = ['w-full', 'opacity-100', 'z-20', 'shadow-2xl', 'md:w-[60%]'];
            const INACTIVE_CLASSES = ['hidden', 'md:block', 'md:w-[20%]', 'md:opacity-40', 'md:z-10', 'md:hover:opacity-70'];

            let currentIndex = 0;
            let autoSlideInterval;

            const updateSlider = (index) => {
                currentIndex = index;
                slides.forEach((slide, i) => {
                    const isActive = i === index;
                    ACTIVE_CLASSES.forEach((cls) => slide.classList.toggle(cls, isActive));
                    INACTIVE_CLASSES.forEach((cls) => slide.classList.toggle(cls, !isActive));
                    slide.style.order = ((i - index + total) % total + CENTER_POSITION) % total;
                });
                updateDots();
            };

            const next = () => updateSlider((currentIndex + 1) % total);

            const startAutoSlide = () => {
                stopAutoSlide();
                autoSlideInterval = setInterval(next, AUTO_PLAY_DELAY);
            };

            const stopAutoSlide = () => clearInterval(autoSlideInterval);

            slides.forEach((slide) => {
                slide.addEventListener('click', () => {
                    const index = parseInt(slide.dataset.index, 10);
                    if (index === currentIndex) return;
                    stopAutoSlide();
                    updateSlider(index);
                    startAutoSlide();
                });
            });

            slides.forEach((_, index) => {
                const dot = document.createElement('div');
                dot.setAttribute('role', 'button');
                dot.setAttribute('tabindex', '0');
                dot.setAttribute('aria-label', `Go to slide ${index + 1}`);
                dot.className = 'dot w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-500 cursor-pointer';
                dot.addEventListener('click', () => {
                    stopAutoSlide();
                    updateSlider(index);
                    startAutoSlide();
                });
                dot.addEventListener('keydown', (event) => {
                    if (event.key === 'Enter' || event.key === ' ') {
                        event.preventDefault();
                        stopAutoSlide();
                        updateSlider(index);
                        startAutoSlide();
                    }
                });
                dotsContainer.appendChild(dot);
            });

            const setDotState = (dot, isActive) => {
                dot.classList.toggle('w-8', isActive);
                dot.classList.toggle('w-2.5', !isActive);
                dot.classList.toggle('bg-white', isActive);
                dot.classList.toggle('bg-white/40', !isActive);
                dot.classList.toggle('hover:bg-white/70', !isActive);
            };

            const updateDots = () => {
                dotsContainer.querySelectorAll('.dot').forEach((dot, index) => {
                    setDotState(dot, index === currentIndex);
                });
            };

            sliderContainer.addEventListener('mouseenter', stopAutoSlide);
            sliderContainer.addEventListener('mouseleave', startAutoSlide);
            sliderContainer.addEventListener('focusin', stopAutoSlide);
            sliderContainer.addEventListener('focusout', () => {
                if (!sliderContainer.matches(':hover')) startAutoSlide();
            });
            document.addEventListener('visibilitychange', () => {
                if (document.hidden) {
                    stopAutoSlide();
                } else {
                    startAutoSlide();
                }
            });

            slides.forEach((slide) => {
                slide.style.transition = 'none';
            });
            updateSlider(0);
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    slides.forEach((slide) => {
                        slide.style.transition = '';
                    });
                });
            });

            startAutoSlide();
        })();
    </script>

    <script>
        (function () {
            const scrollContainer = document.getElementById('category-scroll-container');
            const btnLeft = document.getElementById('btn-scroll-left');
            const btnRight = document.getElementById('btn-scroll-right');
            if (!scrollContainer || !btnLeft || !btnRight) return;

            btnLeft.addEventListener('click', () => {
                scrollContainer.scrollBy({ left: -200, behavior: 'smooth' });
            });
            btnRight.addEventListener('click', () => {
                scrollContainer.scrollBy({ left: 200, behavior: 'smooth' });
            });
        })();
    </script>
@endsection