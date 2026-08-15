@extends('layouts.app')

@section('title', 'Aksa Renta')

@section('content')
    <section class="hero-section font-sans" id="Home">
        <div class="kanan">
            <p class="mb-4 text-xs font-semibold uppercase tracking-widest text-white/90 sm:text-sm">
                <span class="highlight text-amber-400">aksarental</span>.com
            </p>
            <h2 class="mb-4 text-4xl font-extrabold leading-tight md:text-6xl">
                Let's <span class="highlight text-amber-400 [text-shadow:0_2px_20px_rgba(251,191,36,0.45)]">Create</span> Beautiful <br> Work Together
            </h2>
            <p class="mb-6 max-w-[600px] text-base leading-relaxed text-gray-300 md:text-lg">
                <span class="highlight text-amber-400">Temukan kamera terbaik untuk mewujudkan ide kreatif Anda.</span> Kami menyediakan berbagai pilihan kamera dan perlengkapan fotografi dengan harga terjangkau dan proses penyewaan yang mudah.
            </p>
            <button class="inline-flex items-center justify-center gap-3 rounded-full bg-yellow-500 px-8 py-3.5 text-base font-bold tracking-wide text-black shadow-[0_4px_20px_rgba(234,179,8,0.4)] transition-all duration-300 hover:-translate-y-1 hover:scale-105 hover:bg-yellow-400 hover:shadow-[0_8px_25px_rgba(234,179,8,0.6)]">
                View Product
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M13.5 4.5 21 12l-7.5 7.5M21 12H3"></path>
                </svg>
            </button>
        </div>
    </section>

    <section class="sec-gallery" id="product">
        <div class="relative z-20 mx-auto flex w-full max-w-4xl transform -translate-y-1/2 items-center rounded-full border border-gray-100 bg-white p-1.5 shadow-2xl shadow-black/20">
            <svg class="ml-4 h-5 w-5 shrink-0 text-gray-400" fill="currentColor" viewBox="0 -960 960 960" aria-hidden="true">
                <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"></path>
            </svg>
            <input type="text" placeholder="Search for product" class="min-w-0 flex-1 bg-transparent px-4 py-3 text-base text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-0" />
            <div class="self-stretch border-l border-gray-200"></div>
            <button type="button" class="flex cursor-pointer items-center gap-2 rounded-full bg-zinc-900 px-6 py-3 text-sm font-medium text-white transition-colors hover:bg-zinc-800 focus:outline-none">
                <span>Select Category</span>
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 -960 960 960" aria-hidden="true">
                    <path d="M480-360 280-560h400L480-360Z"></path>
                </svg>
            </button>
        </div>
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="catalog-icon-product flex w-full flex-wrap items-center justify-center gap-x-10 gap-y-6 pt-12 pb-8">
            <div class="group flex cursor-pointer flex-col items-center gap-3">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)]">
                    <img src="{{ asset('assets/icon/Cam Icon 1.png') }}" alt="" loading="lazy" class="h-8 w-8 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert">
                </div>
                <p class="text-sm font-medium text-gray-400 transition-colors duration-300 group-hover:text-white">Camera</p>
            </div>
            <div class="group flex cursor-pointer flex-col items-center gap-3">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)]">
                    <img src="{{ asset('assets/icon/lens.png') }}" alt="" loading="lazy" class="h-8 w-8 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert">
                </div>
                <p class="text-sm font-medium text-gray-400 transition-colors duration-300 group-hover:text-white">Lens</p>
            </div>
            <div class="group flex cursor-pointer flex-col items-center gap-3">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)]">
                    <img src="{{ asset('assets/icon/memory.png') }}" alt="" loading="lazy" class="h-8 w-8 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert">
                </div>
                <p class="text-sm font-medium text-gray-400 transition-colors duration-300 group-hover:text-white">memory</p>
            </div>
            <div class="group flex cursor-pointer flex-col items-center gap-3">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)]">
                    <img src="{{ asset('assets/icon/battery.png') }}" alt="" loading="lazy" class="h-8 w-8 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert">
                </div>
                <p class="text-sm font-medium text-gray-400 transition-colors duration-300 group-hover:text-white">Battery</p>
            </div>
            <div class="group flex cursor-pointer flex-col items-center gap-3">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)]">
                    <img src="{{ asset('assets/icon/ActionCam .png') }}" alt="" loading="lazy" class="h-8 w-8 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert">
                </div>
                <p class="text-sm font-medium text-gray-400 transition-colors duration-300 group-hover:text-white">Action Cam</p>
            </div>
            <div class="group flex cursor-pointer flex-col items-center gap-3">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)]">
                    <img src="{{ asset('assets/icon/Stabilizer.png') }}" alt="" loading="lazy" class="h-8 w-8 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert">
                </div>
                <p class="text-sm font-medium text-gray-400 transition-colors duration-300 group-hover:text-white">Stabilizer</p>
            </div>
            <div class="group flex cursor-pointer flex-col items-center gap-3">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)]">
                    <img src="{{ asset('assets/icon/drone.png') }}" alt="" loading="lazy" class="h-8 w-8 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert">
                </div>
                <p class="text-sm font-medium text-gray-400 transition-colors duration-300 group-hover:text-white">Drone</p>
            </div>
            <div class="group flex cursor-pointer flex-col items-center gap-3">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)]">
                    <img src="{{ asset('assets/icon/flash.png') }}" alt="" loading="lazy" class="h-8 w-8 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert">
                </div>
                <p class="text-sm font-medium text-gray-400 transition-colors duration-300 group-hover:text-white">Flash</p>
            </div>
            <div class="group flex cursor-pointer flex-col items-center gap-3">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)]">
                    <img src="{{ asset('assets/icon/tripod.png') }}" alt="" loading="lazy" class="h-8 w-8 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert">
                </div>
                <p class="text-sm font-medium text-gray-400 transition-colors duration-300 group-hover:text-white">Tripod</p>
            </div>
            <div class="group flex cursor-pointer flex-col items-center gap-3">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)]">
                    <img src="{{ asset('assets/icon/Microphone.png') }}" alt="" loading="lazy" class="h-8 w-8 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert">
                </div>
                <p class="text-sm font-medium text-gray-400 transition-colors duration-300 group-hover:text-white">Microphone</p>
            </div>
            <div class="group flex cursor-pointer flex-col items-center gap-3">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-800/50 transition-all duration-300 group-hover:-translate-y-2 group-hover:bg-yellow-500 group-hover:shadow-[0_0_20px_rgba(234,179,8,0.4)]">
                    <img src="{{ asset('assets/icon/Gear Support.png') }}" alt="" loading="lazy" class="h-8 w-8 object-contain grayscale transition-all duration-300 group-hover:brightness-0 group-hover:grayscale-0 group-hover:invert">
                </div>
                <p class="text-sm font-medium text-gray-400 transition-colors duration-300 group-hover:text-white">Gear Support</p>
            </div>
        </div>

        <div class="gallery grid w-full grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-6 gap-y-16 pt-10">
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
        </div>
    </section>

    <section style="padding: 10px;" id="about">
        <div class="container">
            <div class="row">
                <div class="card promo">
                    <div class="background-image"></div>
                    <div class="gradient-overlay"></div>
                    <img class="camera-image promo-hover" src="{{ asset('assets/img_produk/1 Promo Camera 1.png') }}" alt="Camera Promo" loading="lazy">
                    <div class="content">
                        <h2>PROMO<br>HARI INI!</h2>
                        <p>Dapatkan penawaran terbaik hanya untuk waktu terbatas! Jangan lewatkan kesempatan untuk memiliki peralatan impianmu dengan harga spesial!</p>
                        <button>Lihat</button>
                    </div>
                </div>
                <div class="card new">
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

            <div class="row">
                <div class="card unggulan">
                    <div class="background-image"></div>
                    <div class="gradient-overlay"></div>
                    <img class="camera-image unggulan-hover" src="{{ asset('assets/img_produk/3 Produk Unggulan Camera 1.png') }}" alt="Camera Unggulan" loading="lazy">
                    <div class="content">
                        <h2>PRODUK<br>UNGGULAN!</h2>
                        <p>Pilihan terbaik dari yang terbaik! Temukan produk unggulan yang paling diminati dan terbukti mendukung kreativitas tanpa batas.</p>
                        <button>Lihat</button>
                    </div>
                </div>
                <div class="card livestream">
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
            <h1 class="brand-title" style="font-size: 60px;">Brand</h1>
            <div class="brand-logos">
                <img src="{{ asset('assets/icon/Canon-Logo.png') }}" alt="DJI Logo" width="150" loading="lazy">
                <img src="{{ asset('assets/icon/DJI-Logo.png') }}" alt="Godox Logo" width="100" loading="lazy">
                <img src="{{ asset('assets/icon/Fujifilm-Logo.png') }}" alt="GoPro Logo" width="150" loading="lazy">
                <img src="{{ asset('assets/icon/Godox-logo.png') }}" alt="Sony Logo" width="170" loading="lazy">
                <img src="{{ asset('assets/icon/Gopro-Logo.png') }}" alt="Fujifilm Logo" width="170" loading="lazy">
                <img src="{{ asset('assets/icon/Sony-Logo.png') }}" alt="Canon Logo" width="170" loading="lazy">
            </div>
        </div>
        <div class="bundle-section">
            <div class="bundle-content">
                <h2><span class="bundle-text">PAKET</span> BUNDLING!</h2>
                <button>Lihat</button>
            </div>
            <div class="bundle-images">
                <img class="bundle-background" src="{{ asset('assets/img_background/1 Promo Background.png') }}" alt="Background" loading="lazy">
                <img class="bundle-camera" src="{{ asset('assets/img_produk/NIKON-2.png') }}" alt="Camera" loading="lazy">
            </div>
        </div>
    </section>

    <section class="slider-section">
        <div class="slider-container">
            <div class="slider-wrapper transition-transform duration-700 ease-in-out">
                <div class="content-card overflow-hidden">
                    <div class="slide1">
                        <div class="btn">Rent</div>
                        <p class="btn-text">SHOT WITH <span class="span">DJI MAVIC AIR 2S</span></p>
                    </div>
                </div>
                <div class="content-card2 overflow-hidden">
                    <div class="slide1">
                        <div class="btn">Rent</div>
                        <p class="btn-text">SHOT WITH <span class="span">FUJIFILM X-T5</span></p>
                    </div>
                </div>
                <div class="content-card3 overflow-hidden">
                    <div class="slide1">
                        <div class="btn">Rent</div>
                        <p class="btn-text">SHOT WITH <span class="span">SONY A6500</span></p>
                    </div>
                </div>
                <div class="content-card4 overflow-hidden">
                    <div class="slide1">
                        <div class="btn">Rent</div>
                        <p class="btn-text">SHOT WITH <span class="span">SONY A7IV</span></p>
                    </div>
                </div>
                <div class="content-card5 overflow-hidden">
                    <div class="slide1">
                        <div class="btn">Rent</div>
                        <p class="btn-text">SHOT WITH <span class="span">SONY A7II</span></p>
                    </div>
                </div>
                <div class="content-card6 overflow-hidden">
                    <div class="slide1">
                        <div class="btn">Rent</div>
                        <p class="btn-text">SHOT WITH <span class="span">FUJIFILM X-H2</span></p>
                    </div>
                </div>
                <div class="content-card7 overflow-hidden">
                    <div class="slide1">
                        <div class="btn">Rent</div>
                        <p class="btn-text">SHOT WITH <span class="span">SONY A6000</span></p>
                    </div>
                </div>
                <div class="content-card8 overflow-hidden">
                    <div class="slide1">
                        <div class="btn">Rent</div>
                        <p class="btn-text">SHOT WITH <span class="span">SONY A7III</span></p>
                    </div>
                </div>
                <div class="content-card9 overflow-hidden">
                    <div class="slide1">
                        <div class="btn">Rent</div>
                        <p class="btn-text">SHOT WITH <span class="span">SONY A7II</span></p>
                    </div>
                </div>
            </div>
            <div class="dots-container"></div>
        </div>
    </section>
@endsection