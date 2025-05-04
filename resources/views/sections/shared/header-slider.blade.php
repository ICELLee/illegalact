<div class="header-slider relative h-screen max-h-[800px] overflow-hidden">
    @foreach(\App\Models\Slide::where('active', true)->orderBy('sort_order')->get() as $i => $slide)
        <div
            class="slide absolute inset-0 flex items-center justify-center transition-all duration-1000 ease-in-out {{ $i===0?'active':'' }}"
            style="
        background-image:
          linear-gradient(to right,
            rgba(0,0,0,0.9),
            rgba(0,0,0,0.5)
          ),
          url('{{ $slide->media_type==='image'
              ? Storage::url($slide->getFirstMediaUrl('background_media'))
              : asset('images/placeholder.jpg') }}');
        background-size: cover;
        background-position: center;
      ">
            <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-orbitron font-bold mb-6
                   bg-clip-text text-transparent bg-gradient-to-r
                   from-{{ $slide->gradient_from }} to-{{ $slide->gradient_to }}">
                    {{ $slide->title }}
                    @if($slide->highlight_text)
                        <span class="text-{{ $slide->highlight_color }}">
              {{ $slide->highlight_text }}
            </span>
                    @endif
                </h1>
                @if($slide->subtitle)
                    <p class="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto mb-8">
                        {!! nl2br(e($slide->subtitle)) !!}
                    </p>
                @endif
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ $slide->button1_link }}"
                       class="glow-button px-8 py-4 bg-gradient-to-r
                    from-{{ $slide->gradient_from }} to-{{ $slide->gradient_to }}
                    rounded-full font-bold transition-all duration-300 text-lg">
                        {{ $slide->button1_text }}
                    </a>
                    @if($slide->button2_text)
                        <a href="{{ $slide->button2_link }}"
                           class="glow-button px-8 py-4 border-2
                    border-{{ $slide->gradient_from }}
                    rounded-full font-bold transition-all duration-300 text-lg">
                            {{ $slide->button2_text }}
                        </a>
                    @endif
                </div>
            </div>

            @if($slide->media_type==='video' && $slide->getFirstMediaUrl('background_media'))
                <video
                    autoplay muted loop
                    class="absolute inset-0 w-full h-full object-cover"
                >
                    <source src="{{ $slide->getFirstMediaUrl('background_media') }}" type="video/mp4">
                </video>
            @endif
        </div>
    @endforeach

        <div class="header-slider relative h-screen max-h-[800px] overflow-hidden">
            <!-- Slide 1 -->
            <div class="slide absolute inset-0 bg-black flex items-center justify-center transition-all duration-1000 ease-in-out active" style="background-image: linear-gradient(to right, rgba(0,0,0,0.9), rgba(0,0,0,0.5)), url('{{ asset('images/bg/techno-bg-1.png') }}'); background-size: cover; background-position: center;">
                <div class="container mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-orbitron font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-blue-400">
                        ILLEGAL <span class="text-lime-300">ACT</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto mb-8">
                        Experience the raw energy of Techno
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="#" class="glow-button px-8 py-4 bg-gradient-to-r from-purple-600 to-blue-600 rounded-full font-bold hover:from-blue-600 hover:to-purple-600 transition-all duration-300 text-lg">
                            Upcoming Events
                        </a>
                        <a href="#" class="glow-button px-8 py-4 border-2 border-purple-400 rounded-full font-bold text-purple-400 hover:bg-purple-400 hover:text-black transition-all duration-300 text-lg">
                            Latest Releases
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="slide absolute inset-0 bg-black flex items-center justify-center transition-all duration-1000 ease-in-out" style="background-image: linear-gradient(to right, rgba(0,0,0,0.9), rgba(0,0,0,0.5)), url('{{ asset('images/bg/techno-bg-1.png') }}'); background-size: cover; background-position: center;">
                <div class="container mx-auto px-4 relative z-10 text-center">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-orbitron font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-lime-300">
                        DARK <span class="text-purple-400">FUTURE</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto mb-8">
                        Pushing the boundaries of electronic music since 2015
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="#" class="glow-button px-8 py-4 bg-gradient-to-r from-blue-600 to-lime-400 rounded-full font-bold hover:from-lime-400 hover:to-blue-600 transition-all duration-300 text-lg">
                            Meet Our Residents
                        </a>
                        <a href="#" class="glow-button px-8 py-4 border-2 border-blue-400 rounded-full font-bold text-blue-400 hover:bg-blue-400 hover:text-black transition-all duration-300 text-lg">
                            Label Shop
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slider Controls -->
            <div class="absolute bottom-10 left-0 right-0 z-20 flex justify-center space-x-2">
                <button class="slider-dot w-3 h-3 rounded-full bg-purple-400 opacity-50 hover:opacity-100 transition-opacity active" data-index="0"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-purple-400 opacity-50 hover:opacity-100 transition-opacity" data-index="1"></button>
            </div>
        </div>

        <style>
            .slide {
                opacity: 0;
                transform: translateX(100%);
            }
            .slide.active {
                opacity: 1;
                transform: translateX(0);
            }
            .glow-button {
                box-shadow: 0 0 20px rgba(139, 92, 246, 0.5);
            }
            .glow-button:hover {
                box-shadow: 0 0 30px rgba(96, 165, 250, 0.8);
            }
        </style>

</div>
