@extends('layouts.app')

@section('title', 'Celebrating Excellence, Driving Equity')

@section('content')

<!-- 
    HERO SECTION
    - Mobile-first, accessibility-compliant design
    - Left-to-right gradient overlay for text readability (WCAG AA compliant)
    - 3-slide carousel with smooth fluid transitions
    - Min button height 44px for touch targets
    - Typography uses clamp() for fluid scaling
-->
<section 
    class="relative w-full overflow-hidden"
    role="banner"
    aria-label="Hero section"
    style="min-height: min(100vh, 800px);"
    x-data="{
        currentSlide: 0,
        slides: [
            {
                title: 'Celebrating Healthcare Heroes',
                subtitle: 'Honouring outstanding Black, Asian and Minority Ethnic professionals shaping healthcare excellence.'
            },
            {
                title: 'Recognising Outstanding Excellence',
                subtitle: 'Join us at The National B.A.M.E Health & Care Awards to celebrate those transforming healthcare.'
            },
            {
                title: 'Empowering Future Leaders',
                subtitle: 'Building a diverse, inclusive healthcare workforce through recognition and celebration.'
            }
        ],
        init() {
            setInterval(() => {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            }, 5000);
        }
    }"
>
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img 
            src="{{ asset('images/hero-background.jpg') }}" 
            alt="" 
            aria-hidden="true"
            class="w-full h-full object-cover"
            loading="eager"
        >
        <!-- Left-to-right gradient overlay for text contrast (WCAG compliant) -->
        <div 
            class="absolute inset-0"
            style="background: linear-gradient(90deg, rgba(0,0,0,0.75) 0%, rgba(0,0,0,0.55) 40%, rgba(0,0,0,0.15) 70%);"
            aria-hidden="true"
        ></div>
    </div>
    
    <!-- Content Container -->
    <div 
        class="relative z-10 w-full h-full flex items-center px-6 sm:px-8 md:px-12 lg:px-16 xl:px-20"
        style="min-height: min(100vh, 800px); padding-top: 96px; padding-bottom: 96px;"
    >
        <div class="w-full max-w-7xl mx-auto">
            <!-- 
                Content wrapper
                - Centered on all screen sizes
                - Max width 60ch for optimal readability
            -->
            <div class="text-center max-w-[60ch] mx-auto px-4 sm:px-6">
                
                <!-- Slide Content Area with fluid transitions -->
                <div class="relative min-h-[180px] sm:min-h-[160px] md:min-h-[140px] mb-8 sm:mb-10">
                    <template x-for="(slide, index) in slides" :key="index">
                        <div 
                            x-show="currentSlide === index"
                            x-transition:enter="transition ease-out duration-700"
                            x-transition:enter-start="opacity-0 transform translate-y-6 scale-95"
                            x-transition:enter-end="opacity-100 transform translate-y-0 scale-100"
                            x-transition:leave="transition ease-in duration-500"
                            x-transition:leave-start="opacity-100 transform translate-y-0 scale-100"
                            x-transition:leave-end="opacity-0 transform -translate-y-6 scale-95"
                            class="absolute inset-0 flex flex-col justify-center"
                        >
                            <!-- H1 Headline - Responsive with clamp() -->
                            <h1 
                                class="text-white font-bold leading-tight mb-4 sm:mb-6"
                                style="font-size: clamp(2rem, 5vw + 1rem, 3.75rem); font-weight: 700;"
                                x-text="slide.title"
                            ></h1>
                            
                            <!-- Supporting Text - Max 2 lines, 1.1-1.25rem -->
                            <p 
                                class="text-gray-100 leading-relaxed mx-auto pt-2 pb-6 sm:pt-3 sm:pb-8"
                                style="font-size: clamp(1.1rem, 1.5vw + 0.5rem, 1.25rem); max-width: 60ch;"
                                x-text="slide.subtitle"
                            ></p>
                        </div>
                    </template>
                </div>
                
                <!-- CTA Buttons Container -->
                <!-- Mobile: stacked (flex-col), Desktop: side-by-side (sm:flex-row) -->
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-5 justify-center px-2 sm:px-0 pb-6 sm:pb-8" style="padding-top: 100px;">
                    
                    <!-- Primary CTA: Nominate Now - Solid high-contrast button -->
                    <a 
                        href="{{ route('nominations') }}" 
                        class="inline-flex items-center justify-center px-8 py-3 sm:px-10 sm:py-4 bg-teal-500 text-white font-semibold rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-offset-2 focus:ring-offset-gray-900 transition-colors duration-200"
                        style="min-height: 48px; font-size: 1rem;"
                    >
                        Nominate Now
                    </a>
                    
                    <!-- Secondary CTA: Get Tickets - Outline button -->
                    <a 
                        href="{{ route('summit') }}" 
                        class="inline-flex items-center justify-center px-8 py-3 sm:px-10 sm:py-4 bg-transparent text-white font-semibold rounded-lg border-2 border-white hover:bg-white hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900 transition-colors duration-200"
                        style="min-height: 48px; font-size: 1rem;"
                    >
                        Get Tickets
                    </a>
                    
                </div>
                
                <!-- Slide Indicators -->
                <div class="flex justify-center gap-2" style="padding-top: 40px;">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button 
                            @click="currentSlide = index"
                            :class="currentSlide === index ? 'bg-teal-500 w-8' : 'bg-white/40 w-3 hover:bg-white/60'"
                            class="h-3 rounded-full transition-all duration-300"
                            :aria-label="'Go to slide ' + (index + 1)"
                            :aria-current="currentSlide === index ? 'true' : 'false'"
                        ></button>
                    </template>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24" style="background-color: #faf7fe;">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-purple-100 rounded-full mb-6">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">About the Movement</h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Our National B.A.M.E Awards recognizes and elevates equity for Black, Asian and Minority Ethnic (B.A.M.E) professionals in health and social care, fostering a culture of celebration, empowerment, and progress.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Recognize</h3>
                    <p class="text-gray-600">Celebrating outstanding achievements and contributions</p>
                </div>
                <div class="text-center p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Empower</h3>
                    <p class="text-gray-600">Supporting the next generation of leaders</p>
                </div>
                <div class="text-center p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Advance</h3>
                    <p class="text-gray-600">Driving equity and inclusion forward</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-white" x-data="{
    observerInitialized: false
}" x-init="
    if (!observerInitialized) {
        observerInitialized = true;
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, { threshold: 0.1 });
        
        document.querySelectorAll('.card-animate').forEach(card => {
            observer.observe(card);
        });
    }
">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 max-w-7xl mx-auto">
            <div class="card-animate group relative bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="absolute inset-0 bg-gradient-to-br from-amber-400 to-amber-600 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                <div class="relative h-80 overflow-hidden">
                    <img src="{{ asset('images/awards-ceremony-2025.jpg') }}" alt="National B.A.M.E Health & Care Awards 2025 Ceremony" class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute top-6 left-6">
                        <span class="bg-amber-500 text-white px-5 py-2.5 rounded-full text-sm font-bold shadow-lg">
                            Awards 2025
                        </span>
                    </div>
                </div>
                <div class="p-8 lg:p-10">
                    <div class="flex items-center mb-5">
                        <div class="w-14 h-14 bg-amber-100 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-bold text-gray-900">Awards Highlight</h3>
                    </div>
                    <p class="text-gray-600 mb-7 leading-relaxed text-base lg:text-lg">
                        Recognising the outstanding achievements and contributions of B.A.M.E professionals who are leading the way in health and social care.
                    </p>
                    <a href="{{ route('awards') }}" class="group/link inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold transition-colors text-lg">
                        Learn More
                        <svg class="w-5 h-5 ml-2 group-hover/link:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="card-animate group relative bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="absolute inset-0 bg-gradient-to-br from-teal-500 to-teal-700 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                <div class="relative h-80 overflow-hidden">
                    <img src="{{ asset('images/bide-summit-2025.jpg') }}" alt="B.I.D.E Summit 2025 - Panel Discussion" class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute top-6 left-6">
                        <span class="bg-teal-600 text-white px-5 py-2.5 rounded-full text-sm font-bold shadow-lg">
                            B.I.D.E Summit
                        </span>
                    </div>
                </div>
                <div class="p-8 lg:p-10">
                    <div class="flex items-center mb-5">
                        <div class="w-14 h-14 bg-teal-100 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-bold text-gray-900">B.I.D.E Summit</h3>
                    </div>
                    <p class="text-gray-600 mb-7 leading-relaxed text-base lg:text-lg">
                        A premier summit where leaders, innovators, and changemakers come together to drive equity, share best practices, and inspire action.
                    </p>
                    <a href="{{ route('summit') }}" class="group/link inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold transition-colors text-lg">
                        Explore the Summit
                        <svg class="w-5 h-5 ml-2 group-hover/link:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fadeInUp 0.8s ease-out forwards;
}

.card-animate:nth-child(2) {
    animation-delay: 150ms;
}
</style>

<section class="py-24 bg-gradient-to-b from-purple-50 to-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4wMyI+PHBhdGggZD0iTTM2IDE2YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00em0wIDI0YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00ek0xMiAxNmMwLTIuMjEgMS43OS00IDQtNHM0IDEuNzkgNCA0LTEuNzkgNC00IDQtNC0xLjc5LTQtNHptMCAyNGMwLTIuMjEgMS43OS00IDQtNHM0IDEuNzkgNCA0LTEuNzkgNC00IDQtNC0xLjc5LTQtNHoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-30"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-purple-100 to-purple-50 rounded-2xl mb-6 shadow-lg">
                <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                Impact & <span class="text-purple-600">Stories</span>
            </h2>
            <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Hear from past winners, nominees, and partners who are making a real difference in health and social care.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 lg:gap-10 max-w-7xl mx-auto">
            <div class="group relative bg-white rounded-3xl p-8 lg:p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-100 to-purple-50 rounded-bl-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="relative">
                    <div class="flex items-start justify-between mb-6">
                        <svg class="w-12 h-12 text-purple-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                        <div class="w-2 h-2 rounded-full bg-purple-500 animate-pulse"></div>
                    </div>
                    <p class="text-gray-700 mb-8 leading-relaxed text-lg font-medium">
                        "It's an honor and privilege to be recognized. The awards have been a catalyst for change and have inspired me to continue my work with even more passion."
                    </p>
                    <div class="flex items-center pt-6 border-t-2 border-purple-100">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <span class="text-white font-bold text-2xl">P</span>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 text-lg">Dr. Priya Sharma</div>
                            <div class="flex items-center gap-2 mt-1">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-purple-100 text-purple-700">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    2023 Winner
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="group relative bg-white rounded-3xl p-8 lg:p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-teal-100 to-teal-50 rounded-bl-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="relative">
                    <div class="flex items-start justify-between mb-6">
                        <svg class="w-12 h-12 text-teal-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                        <div class="w-2 h-2 rounded-full bg-teal-500 animate-pulse"></div>
                    </div>
                    <p class="text-gray-700 mb-8 leading-relaxed text-lg font-medium">
                        "The summit provided valuable networking opportunities and inspired me to advocate for diversity in my organisation more effectively."
                    </p>
                    <div class="flex items-center pt-6 border-t-2 border-teal-100">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-teal-500 to-teal-700 flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <span class="text-white font-bold text-2xl">M</span>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 text-lg">Marcus Osei</div>
                            <div class="flex items-center gap-2 mt-1">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-teal-100 text-teal-700">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                    Summit Attendee
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="group relative bg-white rounded-3xl p-8 lg:p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-indigo-100 to-indigo-50 rounded-bl-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="relative">
                    <div class="flex items-start justify-between mb-6">
                        <svg class="w-12 h-12 text-indigo-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                        <div class="w-2 h-2 rounded-full bg-indigo-500 animate-pulse"></div>
                    </div>
                    <p class="text-gray-700 mb-8 leading-relaxed text-lg font-medium">
                        "Being nominated was a transformative experience. It validated my journey and encouraged me to reach even higher in my career."
                    </p>
                    <div class="flex items-center pt-6 border-t-2 border-indigo-100">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-indigo-500 to-indigo-700 flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <span class="text-white font-bold text-2xl">F</span>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 text-lg">Fatima Hassan</div>
                            <div class="flex items-center gap-2 mt-1">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-indigo-100 text-indigo-700">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                    </svg>
                                    2024 Nominee
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 md:py-28 lg:py-32 bg-purple-600 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDE2YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00em0wIDI0YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00ek0xMiAxNmMwLTIuMjEgMS43OS00IDQtNHM0IDEuNzkgNCA0LTEuNzkgNC00IDQtNC0xLjc5LTQtNHptMCAyNGMwLTIuMjEgMS43OS00IDQtNHM0IDEuNzkgNCA0LTEuNzkgNC00IDQtNC0xLjc5LTQtNHoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-10"></div>
    
    <div class="container mx-auto px-6 sm:px-8 lg:px-12 xl:px-16 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                <div class="lg:col-span-7 text-center lg:text-left">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/10 backdrop-blur-sm rounded-2xl mb-8 shadow-xl">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Become a <span class="text-teal-300">Sponsor</span>
                    </h2>
                    <p class="text-lg md:text-xl text-purple-100 mb-10 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Join us in celebrating excellence and advancing equity for B.A.M.E professionals. Partner with us to make a lasting impact.
                    </p>
                    
                    <div class="space-y-5 mb-10">
                        <div class="flex items-start gap-4 text-left">
                            <div class="flex-shrink-0 w-11 h-11 bg-teal-500 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-bold text-lg mb-1">Brand Visibility</h3>
                                <p class="text-purple-100 text-base">Showcase your commitment to diversity and inclusion</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 text-left">
                            <div class="flex-shrink-0 w-11 h-11 bg-teal-500 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-bold text-lg mb-1">Network Access</h3>
                                <p class="text-purple-100 text-base">Connect with healthcare leaders and innovators</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 text-left">
                            <div class="flex-shrink-0 w-11 h-11 bg-teal-500 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-bold text-lg mb-1">Meaningful Impact</h3>
                                <p class="text-purple-100 text-base">Support equity and excellence in healthcare</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="w-full max-w-md">
                        <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 md:p-10 border border-white/20 shadow-2xl">
                            <div class="text-center mb-8">
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-3">Ready to Partner?</h3>
                                <p class="text-purple-100 text-base">Discover how your organisation can make a difference</p>
                            </div>
                            
                            <a href="{{ route('contact') }}" class="group w-full flex items-center justify-center px-8 py-5 bg-white text-purple-600 hover:bg-teal-500 hover:text-white font-bold rounded-xl transition-all duration-300 shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 text-lg mb-6">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                Learn About Sponsorship
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                            
                            <div class="space-y-4 pt-6 border-t border-white/20">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-teal-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-teal-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                        </svg>
                                    </div>
                                    <div class="text-left">
                                        <p class="text-white font-semibold text-sm">500+ Attendees</p>
                                        <p class="text-purple-200 text-xs">Healthcare professionals</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-teal-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-teal-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div class="text-left">
                                        <p class="text-white font-semibold text-sm">National Coverage</p>
                                        <p class="text-purple-200 text-xs">Media & PR exposure</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-teal-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-teal-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                        </svg>
                                    </div>
                                    <div class="text-left">
                                        <p class="text-white font-semibold text-sm">Premium Packages</p>
                                        <p class="text-purple-200 text-xs">Tailored opportunities</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden" x-data="{ focused: false }">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4wMyI+PHBhdGggZD0iTTM2IDE2YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00em0wIDI0YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00ek0xMiAxNmMwLTIuMjEgMS43OS00IDQtNHM0IDEuNzkgNCA0LTEuNzkgNC00IDQtNC0xLjc5LTQtNHptMCAyNGMwLTIuMjEgMS43OS00IDQtNHM0IDEuNzkgNCA0LTEuNzkgNC00IDQtNC0xLjc5LTQtNHoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-30"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-3xl shadow-2xl p-10 md:p-14 border border-gray-100 relative overflow-hidden group hover:shadow-3xl transition-all duration-500">
                <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-purple-100 to-teal-100 rounded-full opacity-20 -mr-32 -mt-32 group-hover:scale-110 transition-transform duration-700"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-gradient-to-tr from-teal-100 to-purple-100 rounded-full opacity-20 -ml-24 -mb-24 group-hover:scale-110 transition-transform duration-700"></div>
                
                <div class="text-center mb-10 relative z-10">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-purple-100 to-purple-50 rounded-2xl mb-6 shadow-lg animate-bounce-slow">
                        <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-4">
                        Stay <span class="text-purple-600">Updated</span>
                    </h2>
                    <p class="text-lg md:text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto">
                        Get the latest news about the B.A.M.E Awards, upcoming events, speaker line-ups, and more.
                    </p>
                </div>
                
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex flex-col sm:flex-row gap-4 relative z-10 mb-10 px-4 sm:px-0">
                    @csrf
                    <div class="flex-1 relative group/input">
                        <div class="absolute left-4 top-1/2 transform -translate-y-1/2 transition-all duration-300" :class="focused ? 'text-purple-600 scale-110' : 'text-gray-400'">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                            </svg>
                        </div>
                        <input 
                            type="email" 
                            name="email" 
                            placeholder="Enter your email address" 
                            required 
                            @focus="focused = true" 
                            @blur="focused = false"
                            class="w-full pl-12 pr-4 py-5 rounded-xl border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent transition-all duration-300 text-lg hover:border-purple-300 focus:shadow-lg">
                    </div>
                    <button type="submit" class="group/btn px-10 py-5 bg-purple-600 hover:bg-purple-700 text-white font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 hover:scale-105 whitespace-nowrap text-lg relative overflow-hidden">
                        <span class="absolute inset-0 bg-white opacity-0 group-hover/btn:opacity-20 transition-opacity duration-300"></span>
                        <span class="relative flex items-center justify-center">
                            Subscribe
                            <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                    </button>
                </form>
                
                <div class="pt-8 border-t border-gray-100 flex flex-wrap items-center justify-center gap-8 text-sm text-gray-600 relative z-10">
                    <div class="flex items-center gap-3 px-4 py-3 bg-green-50 rounded-xl animate-fade-in">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-medium">No spam, ever</span>
                    </div>
                    <div class="flex items-center gap-3 px-4 py-3 bg-blue-50 rounded-xl animate-fade-in animation-delay-200">
                        <svg class="w-6 h-6 text-blue-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="font-medium">Unsubscribe anytime</span>
                    </div>
                    <div class="flex items-center gap-3 px-4 py-3 bg-purple-50 rounded-xl animate-fade-in animation-delay-400">
                        <svg class="w-6 h-6 text-purple-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        <span class="font-medium">Monthly updates</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes bounce-slow {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-bounce-slow {
    animation: bounce-slow 3s ease-in-out infinite;
}

.animate-fade-in {
    animation: fade-in 0.6s ease-out forwards;
}

.animation-delay-200 {
    animation-delay: 0.2s;
    opacity: 0;
}

.animation-delay-400 {
    animation-delay: 0.4s;
    opacity: 0;
}
</style>

@if($blogPosts->count() > 0)
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Latest from Our Blog</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Stay informed with the latest insights, stories, and updates from the world of health and social care equity.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            @foreach($blogPosts as $post)
            <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="relative h-56 overflow-hidden bg-gradient-to-br from-purple-100 to-teal-100">
                    @if($post->featured_image)
                        <img src="{{ asset('storage/' . $post->featured_image) }}" 
                             alt="{{ $post->title }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-20 h-20 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                            </svg>
                        </div>
                    @endif
                    <div class="absolute top-4 left-4">
                        <span class="bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            {{ $post->published_at->format('M d, Y') }}
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-purple-600 transition-colors">
                        <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        {{ $post->excerpt }}
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $post->reading_time }}
                        </div>
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-purple-600 hover:text-purple-700 font-semibold inline-flex items-center">
                            Read More
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center justify-center px-8 py-4 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg transition shadow-lg">
                View All Blog Posts
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endif

<section class="py-20 bg-gradient-to-br from-purple-900 via-gray-900 to-purple-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')]"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z"/>
            </svg>
        </div>
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Your Story Matters</h2>
        <p class="text-purple-200 text-lg mb-8 max-w-2xl mx-auto">
            Whether you're a healthcare hero, a community leader, or a changemaker, we want to hear from you. Share your journey and inspire the next generation.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('nominations') }}" class="inline-flex items-center justify-center px-8 py-4 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg transition shadow-lg">
                Share Your Story
            </a>
            <a href="{{ route('summit') }}" class="inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-purple-900 transition">
                Get Your Passes
            </a>
        </div>
    </div>
</section>

@endsection
