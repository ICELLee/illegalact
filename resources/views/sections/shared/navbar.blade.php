<nav class="fixed top-0 left-0 right-0 z-50 bg-black bg-opacity-90 backdrop-blur-md border-b border-purple-900/50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Logo / Brand -->
        <a href="/" class="flex items-center space-x-2 group">
            <img
                src="{{ asset('images/logo.png') }}"
                alt="Logo"
                class="h-10 w-10 group-hover:rotate-45 transition-transform duration-500"
            />
            <span
                class="text-2xl font-orbitron font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-blue-400 group-hover:from-blue-400 group-hover:to-purple-400 transition-all duration-300"
            >
        ILLEGAL<span class="text-lime-300">ACT</span>
      </span>
        </a>

        <!-- Desktop Nav Links -->
        <div class="hidden md:flex space-x-4">
            <!-- Home -->
            <a
                href="{{ route('home') }}"
                class="inline-flex items-center px-4 py-2 rounded-lg text-white bg-transparent hover:bg-white/10 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 group"
            >
                <svg
                    class="w-5 h-5 mr-2 transform transition-transform duration-300 group-hover:rotate-12 group-hover:scale-125"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                >
                    <path
                        fill-rule="evenodd"
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414
               1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1
               0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0
               001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
                        clip-rule="evenodd"
                    />
                </svg>
                Home
            </a>
            <!-- Timeline -->
            <a
                href="{{ route('timeline') }}"
                class="inline-flex items-center px-4 py-2 rounded-lg text-white bg-transparent hover:bg-white/10 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 group"
            >
                <svg
                    class="w-5 h-5 mr-2 transform transition-transform duration-300 group-hover:rotate-12 group-hover:scale-125"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                >
                    <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000
               16zm1-12a1 1 0 10-2 0v4a1 1 0
               00.293.707l2.828 2.829a1 1 0
               101.415-1.415L11 9.586V6z"
                        clip-rule="evenodd"
                    />
                </svg>
                Timeline
            </a>
            <!-- Events -->
            <a
                href="{{ route('events') }}"
                class="inline-flex items-center px-4 py-2 rounded-lg text-white bg-transparent hover:bg-white/10 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 group"
            >
                <svg
                    class="w-5 h-5 mr-2 transform transition-transform duration-300 group-hover:rotate-12 group-hover:scale-125"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                >
                    <path
                        fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2
               0 00-2 2v10a2 2 0 002 2h12a2 2
               0 002-2V6a2 2 0 00-2-2h-1V3a1 1
               0 10-2 0v1H7V3a1 1 0 00-1-1zm0
               5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd"
                    />
                </svg>
                Events
            </a>
            <!-- Residents -->
            <a
                href="{{ route('residents') }}"
                class="inline-flex items-center px-4 py-2 rounded-lg text-white bg-transparent hover:bg-white/10 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 group"
            >
                <svg
                    class="w-5 h-5 mr-2 transform transition-transform duration-300 group-hover:rotate-12 group-hover:scale-125"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                >
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016
               0zM18 8a2 2 0 11-4 0 2 2 0
               014 0zM14 15a4 4 0 00-8
               0v1h8v-1zM6 8a2 2 0 11-4
               0 2 2 0 014 0zM16 18v-1a5.972
               5.972 0 00-.75-2.906A3.005
               3.005 0 0119 15v1h-3zM4.75
               12.094A5.973 5.973 0 004
               15v1H1v-1a3 3 0 013.75-2.906z"
                    />
                </svg>
                Residents
            </a>
            <!-- Shop -->
            <a
                href="{{ route('shop') }}"
                class="inline-flex items-center px-4 py-2 rounded-lg text-white bg-transparent hover:bg-white/10 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 group"
            >
                <svg
                    class="w-5 h-5 mr-2 transform transition-transform duration-300 group-hover:rotate-12 group-hover:scale-125"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                >
                    <path
                        fill-rule="evenodd"
                        d="M10 2a4 4 0 00-4
               4v1H5a1 1 0 00-.994.89l-1
               9A1 1 0 004 18h12a1 1 0
               00.994-1.11l-1-9A1 1 0
               0015 7h-1V6a4 4 0
               00-4-4zm2 5V6a2 2 0
               10-4 0v1h4zm-6 3a1
               1 0 112 0 1 1 0
               01-2 0zm7-1a1 1 0
               100 2 1 1 0 000-2z"
                        clip-rule="evenodd"
                    />
                </svg>
                Shop
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-purple-400 hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-purple-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
</nav>
