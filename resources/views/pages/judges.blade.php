@extends('layouts.app')

@section('meta_title', 'Judges Panel | B.A.M.E Health & Care Awards - Expert Evaluators')
@section('meta_description', 'Meet the esteemed panel of judges for The National B.A.M.E Health & Care Awards - leading experts and visionaries dedicated to recognising excellence in UK health and social care.')
@section('meta_keywords', 'BAME awards judges, healthcare experts, awards panel, diversity leaders, healthcare judges, NHS experts')
@section('canonical_url', route('judges'))

@section('og_title', 'Meet Our Judges Panel | B.A.M.E Health & Care Awards')
@section('og_description', 'A collective of leading experts and visionaries dedicated to recognising excellence in health and social care.')
@section('og_url', route('judges'))

@section('twitter_title', 'B.A.M.E Awards Judges Panel')
@section('twitter_description', 'Leading experts evaluating excellence in healthcare.')

@section('title', 'Meet Our Esteemed Panel of Judges')

@section('content')

<section class="relative bg-gradient-to-br from-purple-900 via-purple-800 to-blue-900 text-white py-20 md:py-24 lg:py-28">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight drop-shadow-lg">
                Meet Our Esteemed Panel of Judges
            </h1>
            <p class="text-xl md:text-2xl text-gray-100 leading-relaxed drop-shadow-md">
                A collective of leading experts and visionaries dedicated to recognising excellence in health and social care
            </p>
        </div>
    </div>
</section>

<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-6 sm:px-8 lg:px-12">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Distinguished Judges</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We are honoured to present our distinguished panel of judges, experts who bring decades of experience and unwavering commitment to advancing equity in healthcare.
                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-3 mb-16">
                @foreach($categories as $key => $label)
                <a href="{{ route('judges', ['category' => $key]) }}" 
                   class="px-6 py-3 rounded-full font-semibold transition-all duration-300 {{ $category === $key ? 'bg-purple-600 text-white shadow-lg' : 'bg-gray-100 text-gray-700 hover:bg-purple-50 hover:text-purple-600 hover:shadow-md' }}">
                    {{ $label }}
                </a>
                @endforeach
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @forelse($judges as $judge)
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group border border-gray-100">
                    <div class="aspect-[3/4] bg-gradient-to-br from-purple-500 via-purple-600 to-blue-600 relative overflow-hidden">
                        @if($judge->photo)
                        <img src="{{ asset('storage/' . $judge->photo) }}" alt="{{ $judge->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="w-32 h-32 bg-white bg-opacity-20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                <span class="text-6xl font-bold text-white">{{ substr($judge->name, 0, 1) }}</span>
                            </div>
                        </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-gray-900 mb-2 group-hover:text-purple-600 transition-colors">{{ $judge->name }}</h3>
                        <p class="text-sm text-gray-600 mb-3 font-medium">{{ $judge->title }}</p>
                        @if($judge->organization)
                        <p class="text-xs text-gray-500 mb-4 line-clamp-2">{{ $judge->organization }}</p>
                        @endif
                        @if($judge->bio)
                        <a href="#" class="text-purple-600 hover:text-purple-700 font-semibold text-sm inline-flex items-center group-hover:gap-2 gap-1 transition-all">
                            Read More
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                        @endif
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-16">
                    <div class="max-w-md mx-auto">
                        <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <p class="text-gray-500 text-lg font-medium">No judges found for this category.</p>
                        <p class="text-gray-400 text-sm mt-2">Please check back later or select a different category.</p>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</section>

@endsection
