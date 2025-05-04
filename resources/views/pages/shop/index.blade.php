@extends('layouts.app')

@section('title', 'Merchandise')
@section('styles')
    @vite(['resources/css/shop/style.css'])
@endsection

@section('content')
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h1 class="text-5xl md:text-6xl font-orbitron font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-blue-400">
                    LABEL <span class="text-lime-300">MERCH</span>
                </h1>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Wear the sound. High quality merchandise for true techno lovers.
                </p>
            </div>

            @include('sections.shop.shop-grid')
        </div>
    </section>
@endsection

@section('scripts')
    @vite(['resources/js/shop/shop-cart.js'])
@endsection
