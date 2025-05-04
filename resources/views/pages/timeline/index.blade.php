@extends('layouts.app')

@section('title', 'Our Journey')
@section('styles')
    @vite(['resources/css/timeline/style.css'])
@endsection

@section('content')
    <section class="py-28">
        <div class="container mx-auto px-4">
            <div class="text-center mb-20" data-aos="fade-up">
                <h1 class="text-5xl md:text-6xl font-orbitron font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-blue-400">
                    OUR <span class="text-lime-300">JOURNEY</span>
                </h1>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    From underground parties to international recognition. Here's our story.
                </p>
            </div>

            @include('sections.timeline.timeline-entries')
        </div>
    </section>
@endsection
