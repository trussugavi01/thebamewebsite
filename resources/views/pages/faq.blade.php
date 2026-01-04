@extends('layouts.app')

@section('meta_title', 'FAQ | B.A.M.E Health & Care Awards - Frequently Asked Questions')
@section('meta_description', 'Find answers to common questions about The National B.A.M.E Health & Care Awards, nominations process, eligibility criteria, B.I.D.E Summit, and more.')
@section('meta_keywords', 'BAME awards FAQ, healthcare awards questions, nomination help, eligibility criteria, awards process, summit information')
@section('canonical_url', route('faq'))

@section('og_title', 'FAQ | B.A.M.E Health & Care Awards')
@section('og_description', 'Find answers to common questions about the awards, summit, entry requirements, and nominations.')
@section('og_url', route('faq'))

@section('twitter_title', 'B.A.M.E Awards FAQ')
@section('twitter_description', 'Get answers to your questions about the awards and summit.')

@section('title', 'Frequently Asked Questions')

@section('content')

<section class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h1>
                <p class="text-lg text-gray-600">
                    Find answers to common questions about the awards, the workforce summit, entry requirements, and nominations.
                </p>
            </div>

            <div class="mb-8">
                <form action="{{ route('faq') }}" method="GET" class="flex gap-3">
                    <div class="flex-1 relative">
                        <input type="text" name="search" value="{{ $search ?? '' }}" 
                            placeholder="Type keywords to find answers..."
                            class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <svg class="w-5 h-5 text-gray-400 absolute right-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <button type="submit" class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition">
                        Search
                    </button>
                </form>
            </div>

            <div class="flex flex-wrap gap-2 mb-8">
                @foreach($categories as $key => $label)
                <a href="{{ route('faq', ['category' => $key, 'search' => $search]) }}" 
                   class="px-4 py-2 rounded-full text-sm font-medium transition {{ $category === $key ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-300' }}">
                    {{ $label }}
                </a>
                @endforeach
            </div>

            <div class="space-y-6" x-data="{ openItem: null }">
                @forelse($faqs as $categoryKey => $categoryFaqs)
                <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="bg-blue-50 px-6 py-4 border-b border-blue-100">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                @if($categoryKey === 'entry')
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                                </svg>
                                @elseif($categoryKey === 'nominations')
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                </svg>
                                @elseif($categoryKey === 'judging')
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.715-5.349L11 6.477V16h2a1 1 0 110 2H7a1 1 0 110-2h2V6.477L6.237 7.582l1.715 5.349a1 1 0 01-.285 1.05A3.989 3.989 0 015 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.788l1.599.799L9 4.323V3a1 1 0 011-1z" clip-rule="evenodd"/>
                                </svg>
                                @elseif($categoryKey === 'events')
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                </svg>
                                @else
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                </svg>
                                @endif
                            </div>
                            <h2 class="text-lg font-bold text-gray-900">{{ $categories[$categoryKey] ?? ucfirst($categoryKey) }}</h2>
                        </div>
                    </div>

                    <div class="divide-y divide-gray-200">
                        @foreach($categoryFaqs as $faq)
                        <div class="border-b border-gray-200 last:border-0">
                            <button @click="openItem === {{ $faq->id }} ? openItem = null : openItem = {{ $faq->id }}"
                                class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition">
                                <span class="font-semibold text-gray-900 pr-4">{{ $faq->question }}</span>
                                <svg class="w-5 h-5 text-gray-500 flex-shrink-0 transition-transform" 
                                     :class="{ 'rotate-180': openItem === {{ $faq->id }} }"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="openItem === {{ $faq->id }}" 
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                                 x-transition:enter-end="opacity-100 transform translate-y-0"
                                 class="px-6 pb-4">
                                <p class="text-gray-700 leading-relaxed">{{ $faq->answer }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @empty
                <div class="bg-white rounded-xl shadow-sm p-12 text-center">
                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-gray-500 text-lg">No FAQs found matching your search.</p>
                    @if($search)
                    <a href="{{ route('faq') }}" class="text-blue-600 hover:text-blue-700 font-semibold mt-4 inline-block">
                        Clear search and view all FAQs
                    </a>
                    @endif
                </div>
                @endforelse
            </div>

            <div class="mt-12 bg-blue-50 rounded-xl p-8 text-center border border-blue-100">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Still need help?</h3>
                <p class="text-gray-600 mb-6">
                    If you couldn't find the answer to your question above, our team is here to assist you with any inquiries regarding the awards or summit.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition">
                        Contact Support
                    </a>
                    <a href="{{ route('about') }}" class="inline-flex items-center justify-center px-6 py-3 bg-white hover:bg-gray-50 text-gray-700 font-semibold rounded-lg border border-gray-300 transition">
                        Read Guidelines
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
