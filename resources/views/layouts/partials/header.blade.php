<header class="bg-white shadow-sm sticky top-0 z-50" x-data="{ mobileMenuOpen: false, awardsOpen: false, summitOpen: false, resourcesOpen: false }">
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('images/bame-logo.png') }}" alt="B.A.M.E Health & Care Awards Logo" class="h-16 w-auto" style="image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;">
                </a>
            </div>

            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-purple-600 font-medium transition">Home</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-purple-600 font-medium transition">About</a>
                
                <div class="relative" @mouseenter="awardsOpen = true" @mouseleave="awardsOpen = false">
                    <button class="text-gray-700 hover:text-purple-600 font-medium transition flex items-center">
                        Awards
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="awardsOpen" x-cloak x-transition class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg py-2 border border-gray-100">
                        <a href="{{ route('awards') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">Overview</a>
                        <a href="{{ route('awards.categories') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">Categories</a>
                        <a href="{{ route('awards.winners') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">Past Winners</a>
                        <a href="{{ route('nominations') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">Nominate</a>
                        <a href="{{ route('judges') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">Judges Panel</a>
                    </div>
                </div>

                <div class="relative" @mouseenter="summitOpen = true" @mouseleave="summitOpen = false">
                    <button class="text-gray-700 hover:text-purple-600 font-medium transition flex items-center">
                        Summit
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="summitOpen" x-cloak x-transition class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg py-2 border border-gray-100">
                        <a href="{{ route('summit') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">Overview</a>
                        <a href="{{ route('summit.speakers') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">Speakers</a>
                        <a href="{{ route('summit.agenda') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">Agenda</a>
                        <a href="{{ route('summit.tickets') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">Get Tickets</a>
                    </div>
                </div>

                <a href="{{ route('gallery') }}" class="text-gray-700 hover:text-purple-600 font-medium transition">Gallery</a>
                <a href="{{ route('blog.index') }}" class="text-gray-700 hover:text-purple-600 font-medium transition">Blog</a>
                
                <div class="relative" @mouseenter="resourcesOpen = true" @mouseleave="resourcesOpen = false">
                    <button class="text-gray-700 hover:text-purple-600 font-medium transition flex items-center">
                        Resources
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="resourcesOpen" x-cloak x-transition class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg py-2 border border-gray-100">
                        <a href="{{ route('sponsors') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">Sponsors</a>
                        <a href="{{ route('faq') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">FAQ</a>
                        <a href="{{ route('newsletter') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">Newsletter</a>
                        <a href="{{ route('contact') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">Contact Us</a>
                    </div>
                </div>
            </div>

            <div class="hidden lg:flex items-center space-x-4">
                @auth
                    <div class="relative" x-data="{ userMenuOpen: false }">
                        <button @click="userMenuOpen = !userMenuOpen" class="flex items-center text-gray-700 hover:text-purple-600 font-medium transition">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </button>
                        <div x-show="userMenuOpen" @click.away="userMenuOpen = false" x-transition class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-lg py-2 border border-gray-100 z-50">
                            <div class="px-4 py-2 border-b border-gray-100">
                                <p class="text-xs font-semibold text-gray-500 uppercase">Admin Menu</p>
                            </div>
                            <a href="{{ route('admin.blog.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                                </svg>
                                Manage Blog
                            </a>
                            <a href="{{ route('admin.gallery.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                Manage Gallery
                            </a>
                            <a href="{{ route('admin.gallery.categories.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                </svg>
                                Gallery Categories
                            </a>
                            <div class="border-t border-gray-100 mt-2 pt-2">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition">
                                        <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center text-gray-700 hover:text-purple-600 font-medium transition">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                        Login
                    </a>
                @endauth
                <a href="{{ route('nominations') }}" class="inline-flex items-center px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg transition shadow-md">
                    Nominate Now
                </a>
            </div>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 text-gray-700 hover:text-purple-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div x-show="mobileMenuOpen" x-transition class="lg:hidden py-4 border-t">
            <div class="flex flex-col space-y-4">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-purple-600 font-medium">Home</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-purple-600 font-medium">About</a>
                
                <div x-data="{ mobileAwardsOpen: false }">
                    <button @click="mobileAwardsOpen = !mobileAwardsOpen" class="w-full text-left text-gray-700 hover:text-purple-600 font-medium flex items-center justify-between">
                        Awards
                        <svg class="w-4 h-4" :class="{'rotate-180': mobileAwardsOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="mobileAwardsOpen" x-transition class="ml-4 mt-2 space-y-2">
                        <a href="{{ route('awards') }}" class="block text-gray-600 hover:text-purple-600">Overview</a>
                        <a href="{{ route('awards.categories') }}" class="block text-gray-600 hover:text-purple-600">Categories</a>
                        <a href="{{ route('awards.winners') }}" class="block text-gray-600 hover:text-purple-600">Past Winners</a>
                        <a href="{{ route('nominations') }}" class="block text-gray-600 hover:text-purple-600">Nominate</a>
                        <a href="{{ route('judges') }}" class="block text-gray-600 hover:text-purple-600">Judges Panel</a>
                    </div>
                </div>

                <div x-data="{ mobileSummitOpen: false }">
                    <button @click="mobileSummitOpen = !mobileSummitOpen" class="w-full text-left text-gray-700 hover:text-purple-600 font-medium flex items-center justify-between">
                        Summit
                        <svg class="w-4 h-4" :class="{'rotate-180': mobileSummitOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="mobileSummitOpen" x-transition class="ml-4 mt-2 space-y-2">
                        <a href="{{ route('summit') }}" class="block text-gray-600 hover:text-purple-600">Overview</a>
                        <a href="{{ route('summit.speakers') }}" class="block text-gray-600 hover:text-purple-600">Speakers</a>
                        <a href="{{ route('summit.agenda') }}" class="block text-gray-600 hover:text-purple-600">Agenda</a>
                        <a href="{{ route('summit.tickets') }}" class="block text-gray-600 hover:text-purple-600">Get Tickets</a>
                    </div>
                </div>

                <a href="{{ route('gallery') }}" class="text-gray-700 hover:text-purple-600 font-medium">Gallery</a>
                <a href="{{ route('blog.index') }}" class="text-gray-700 hover:text-purple-600 font-medium">Blog</a>
                
                @auth
                    <a href="{{ route('admin.blog.index') }}" class="text-gray-700 hover:text-purple-600 font-medium">Admin Dashboard</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full text-left text-gray-700 hover:text-purple-600 font-medium">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-purple-600 font-medium">Login</a>
                @endauth
                
                <div x-data="{ mobileResourcesOpen: false }">
                    <button @click="mobileResourcesOpen = !mobileResourcesOpen" class="w-full text-left text-gray-700 hover:text-purple-600 font-medium flex items-center justify-between">
                        Resources
                        <svg class="w-4 h-4" :class="{'rotate-180': mobileResourcesOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="mobileResourcesOpen" x-transition class="ml-4 mt-2 space-y-2">
                        <a href="{{ route('sponsors') }}" class="block text-gray-600 hover:text-purple-600">Sponsors</a>
                        <a href="{{ route('faq') }}" class="block text-gray-600 hover:text-purple-600">FAQ</a>
                        <a href="{{ route('newsletter') }}" class="block text-gray-600 hover:text-purple-600">Newsletter</a>
                        <a href="{{ route('contact') }}" class="block text-gray-600 hover:text-purple-600">Contact Us</a>
                    </div>
                </div>

                <a href="{{ route('nominations') }}" class="inline-flex items-center justify-center px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg">
                    Nominate Now
                </a>
            </div>
        </div>
    </nav>
</header>
