<div class="relative">
    <!-- Timeline line -->
    <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-purple-500 to-blue-500 transform -translate-x-1/2"></div>

    <!-- Timeline items -->
    <div class="space-y-16 md:space-y-8">
        <!-- Item 1 -->
        <div class="timeline-item" data-aos="fade-up">
            <div class="md:flex justify-center">
                <div class="md:w-5/12 md:pr-10 md:text-right mb-4 md:mb-0">
                    <div class="text-sm text-purple-400 font-bold">Jan, 2022</div>
                    <h3 class="text-2xl font-bold text-white mb-2">Gründung</h3>
                </div>
                <div class="hidden md:flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-br from-purple-600 to-blue-600 border-4 border-black shadow-lg z-10 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <div class="md:w-5/12 md:pl-10">
                    <div class="p-6 bg-gray-900 rounded-xl border border-gray-800 shadow-lg hover:border-purple-500 transition-all duration-300">
                        <p class="text-gray-300">Die Gründung von ILLEGALACT</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="timeline-item" data-aos="fade-up">
            <div class="md:flex justify-center flex-row-reverse">
                <div class="md:w-5/12 md:pl-10 md:text-left mb-4 md:mb-0">
                    <div class="text-sm text-blue-400 font-bold">Oktober, 2022</div>
                    <h3 class="text-2xl font-bold text-white mb-2">Erster Rave</h3>
                </div>
                <div class="hidden md:flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-br from-blue-600 to-purple-600 border-4 border-black shadow-lg z-10 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
                </div>
                <div class="md:w-5/12 md:pr-10">
                    <div class="p-6 bg-gray-900 rounded-xl border border-gray-800 shadow-lg hover:border-blue-500 transition-all duration-300">
                        <p class="text-gray-300">Unser erster Rave im Reiterheim Bad wörishofen.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- More items... -->
    </div>
</div>

<style>
    .timeline-item:hover .timeline-dot {
        transform: scale(1.1);
        box-shadow: 0 0 0 8px rgba(139, 92, 246, 0.2);
    }
    @media (max-width: 767px) {
        .timeline-item:nth-child(odd) .timeline-content {
            border-left: 3px solid #8b5cf6;
            margin-left: 1rem;
            padding-left: 1.5rem;
        }
        .timeline-item:nth-child(even) .timeline-content {
            border-right: 3px solid #3b82f6;
            margin-right: 1rem;
            padding-right: 1.5rem;
        }
    }
</style>
