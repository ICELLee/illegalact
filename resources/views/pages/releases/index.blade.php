@extends('layouts.app')

@section('title', 'Music Releases')
@section('styles')
    @vite(['resources/css/releases/style.css'])
@endsection

@section('content')
    <section class="py-28 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('../images/bg/animated-bg.svg')] bg-[length:1200px] opacity-10 -z-10 animate-pan-slow"></div>
        <div class="container mx-auto px-4">
            <div class="text-center mb-20" data-aos="fade-up">
                <h1 class="text-5xl md:text-6xl font-orbitron font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-blue-400">
                    LABEL <span class="text-lime-300">RELEASES</span>
                </h1>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Our complete catalog of techno productions
                </p>
            </div>

            <!-- Release Filters -->
            <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up">
                <button class="release-filter px-4 py-2 bg-purple-600 rounded-full text-sm font-bold hover:bg-purple-700 transition-colors active" data-filter="all">
                    All Releases
                </button>
                <button class="release-filter px-4 py-2 bg-gray-800 rounded-full text-sm font-bold hover:bg-gray-700 transition-colors" data-filter="vinyl">
                    Vinyl Only
                </button>
                <button class="release-filter px-4 py-2 bg-gray-800 rounded-full text-sm font-bold hover:bg-gray-700 transition-colors" data-filter="digital">
                    Digital
                </button>
                <button class="release-filter px-4 py-2 bg-gray-800 rounded-full text-sm font-bold hover:bg-gray-700 transition-colors" data-filter="ep">
                    EPs
                </button>
                <button class="release-filter px-4 py-2 bg-gray-800 rounded-full text-sm font-bold hover:bg-gray-700 transition-colors" data-filter="album">
                    Albums
                </button>
            </div>

            @include('sections.releases.release-grid')
        </div>
    </section>

    <!-- Featured Release -->
    <section class="py-20 bg-gradient-to-b from-gray-900/20 to-black">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-orbitron font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-lime-300">
                    FEATURED <span class="text-purple-400">RELEASE</span>
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Currently rocking the dancefloors
                </p>
            </div>

            <div class="flex flex-col lg:flex-row items-center gap-12" data-aos="fade-up">
                <div class="lg:w-1/3">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-600/30 to-blue-600/30 rounded-2xl transform rotate-2 scale-105 group-hover:rotate-0 transition-all duration-500"></div>
                        <img src="{{ asset('images/avatar.jpg') }}" alt="Featured Release" class="rounded-2xl w-full h-auto relative z-10 transform group-hover:scale-95 transition-transform duration-500">
                        <div class="absolute -bottom-4 -right-4 bg-black border-2 border-lime-300 rounded-full p-3 transform group-hover:rotate-12 transition-transform duration-300">
                            <span class="text-lime-300 font-bold text-lg">TL-048</span>
                        </div>
                    </div>
                </div>
                <div class="lg:w-2/3">
                    <h3 class="text-3xl md:text-4xl font-bold mb-2 text-white">Neon Dreams</h3>
                    <p class="text-xl text-purple-400 mb-4">Various Artists</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm font-bold text-purple-400">Techno</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm font-bold text-blue-400">Minimal</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm font-bold text-lime-300">Vinyl + Digital</span>
                    </div>
                    <p class="text-gray-300 mb-6 text-lg leading-relaxed">
                        Our latest VA compilation featuring exclusive tracks from label residents and special guests. Pushing the boundaries of hypnotic techno with raw analog sounds and futuristic production techniques.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#" class="px-6 py-3 bg-gradient-to-r from-purple-600 to-blue-600 rounded-full font-bold hover:from-blue-600 hover:to-purple-600 transition-all duration-300 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
                            Listen Now
                        </a>
                        <a href="#" class="px-6 py-3 border-2 border-purple-400 rounded-full font-bold text-purple-400 hover:bg-purple-400 hover:text-black transition-all duration-300 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            Buy Vinyl
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @vite(['resources/js/releases/release-player.js'])
@endsection
