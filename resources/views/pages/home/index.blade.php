@extends('layouts.app')

@section('title', 'Home')
@section('styles')
    @vite(['resources/css/home/style.css'])
@endsection

@section('content')
    @include('sections.shared.header-slider')
    @include('sections.home.about-section')
    @include('sections.home.upcoming-events')
    @include('sections.home.latest-releases')
    @include('sections.home.residents-preview')
@endsection

@section('scripts')
    @vite(['resources/js/home/slider.js'])
@endsection
