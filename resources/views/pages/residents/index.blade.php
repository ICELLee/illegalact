@extends('layouts.app')

@section('title', 'Our Residents')
@section('styles')
    @vite(['resources/css/residents/style.css'])
@endsection

@section('content')
    <section class="py-28 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('../images/bg/animated-bg.svg')] bg-[length:1200px] opacity-10 -z-10 animate-pan-slow"></div>
        <div class="container mx-auto px-4">
            <div class="text-center mb-20" data-aos="fade-up">
                <h1 class="text-5xl md:text-6xl font-orbitron font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-lime-300 to-blue-400">
                    LABEL <span class="text-purple-400">RESIDENTS</span>
                </h1>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    The talented artists who define our sound and play at our events
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @include('sections.residents.resident-cards')
            </div>
        </div>
    </section>

    <!-- Resident Spotlight Section -->
    <section class="py-20 bg-gradient-to-b from-black to-gray-900/20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-orbitron font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-blue-400">
                    ARTIST <span class="text-lime-300">SPOTLIGHT</span>
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Featured resident of the month
                </p>
            </div>

            <div class="flex flex-col lg:flex-row items-center gap-12" data-aos="fade-up">
                <div class="lg:w-1/3">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-600/30 to-blue-600/30 rounded-2xl transform rotate-2 scale-105 group-hover:rotate-0 transition-all duration-500"></div>
                        <img src="{{ asset('images/residents/t80.png') }}" alt="Featured Resident" class="rounded-2xl w-full h-auto relative z-10 transform group-hover:scale-95 transition-transform duration-500">
                    </div>
                </div>
                <div class="lg:w-2/3">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-white">T80 Techno</h3>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm font-bold text-purple-400">Techno</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm font-bold text-blue-400">Hard Techno</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm font-bold text-lime-300">Schranz</span>
                    </div>
                    <p class="text-gray-300 mb-6 text-lg leading-relaxed">
                    </p>
                    <p class="text-gray-400 mb-8 text-md leading-relaxed">
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#" class="px-6 py-3 bg-gradient-to-r from-purple-600 to-blue-600 rounded-full font-bold hover:from-blue-600 hover:to-purple-600 transition-all duration-300 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
                            Latest Mix
                        </a>
                        <a href="#" class="px-6 py-3 border-2 border-purple-400 rounded-full font-bold text-purple-400 hover:bg-purple-400 hover:text-black transition-all duration-300 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                            Socials
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @vite(['resources/js/shared/animations.js'])
@endsection
