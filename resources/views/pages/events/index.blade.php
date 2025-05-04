@extends('layouts.app')

@section('title', 'Events')
@section('styles')
    @vite(['resources/css/events/style.css'])
@endsection

@section('content')
    <section class="py-28 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('../images/bg/animated-bg.svg')] bg-[length:1200px] opacity-10 -z-10 animate-pan"></div>
        <div class="container mx-auto px-4">
            <div class="text-center mb-20" data-aos="fade-up">
                <h1 class="text-5xl md:text-6xl font-orbitron font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-blue-400">
                    UPCOMING <span class="text-lime-300">EVENTS</span>
                </h1>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Experience the raw energy of our label nights
                </p>
            </div>

            <!-- Event Filters -->
            <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up">
                <button class="event-filter px-4 py-2 bg-purple-600 rounded-full text-sm font-bold hover:bg-purple-700 transition-colors active" data-filter="all">
                    All Events
                </button>
                <button class="event-filter px-4 py-2 bg-gray-800 rounded-full text-sm font-bold hover:bg-gray-700 transition-colors" data-filter="techno">
                    Techno Nights
                </button>
                <button class="event-filter px-4 py-2 bg-gray-800 rounded-full text-sm font-bold hover:bg-gray-700 transition-colors" data-filter="industrial">
                    Industrial
                </button>
                <button class="event-filter px-4 py-2 bg-gray-800 rounded-full text-sm font-bold hover:bg-gray-700 transition-colors" data-filter="openair">
                    Open Air
                </button>
                <button class="event-filter px-4 py-2 bg-gray-800 rounded-full text-sm font-bold hover:bg-gray-700 transition-colors" data-filter="festival">
                    Festivals
                </button>
            </div>

            @include('sections.events.event-list')
        </div>
    </section>

    <!-- Past Events Section -->
    <section class="py-20 bg-gradient-to-b from-black to-gray-900/20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-orbitron font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-lime-300">
                    PAST <span class="text-purple-400">EVENTS</span>
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Relive our legendary nights
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Past Event 1 -->
                <div class="past-event-card group relative bg-gray-900 rounded-xl overflow-hidden border border-gray-800 hover:border-purple-500 transition-all duration-500" data-aos="fade-up">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('images/logo.png') }}" alt="Past Event" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button class="px-6 py-3 bg-purple-600 rounded-full font-bold hover:bg-purple-700 transition-colors flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                Watch Aftermovie
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold text-white group-hover:text-purple-400 transition-colors">XX</h3>
                            <span class="px-2 py-1 bg-gray-800 rounded-full text-xs font-bold text-lime-300">XX.XX.XX</span>
                        </div>
                        <p class="text-gray-400 mb-4">XX</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-gray-800 rounded-full text-xs font-bold text-purple-400">Techno</span>
                            <span class="px-2 py-1 bg-gray-800 rounded-full text-xs font-bold text-blue-400">12h Set</span>
                        </div>
                    </div>
                </div>

                <!-- More past events... -->
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @vite(['resources/js/events/events-filter.js'])
@endsection
