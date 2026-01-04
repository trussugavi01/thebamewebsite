@extends('layouts.app')

@section('meta_title', 'Past Winners | B.A.M.E Health & Care Awards - Hall of Fame')
@section('meta_description', 'Celebrate the exceptional individuals and teams who have won The National B.A.M.E Health & Care Awards. Discover past winners who made outstanding contributions to UK health and social care.')
@section('meta_keywords', 'BAME awards winners, healthcare award winners, past winners, awards hall of fame, healthcare champions, diversity award winners')
@section('canonical_url', route('awards.winners'))

@section('og_title', 'Past Winners | B.A.M.E Health & Care Awards')
@section('og_description', 'Celebrating the exceptional individuals who have made outstanding contributions to health and social care.')
@section('og_url', route('awards.winners'))

@section('twitter_title', 'B.A.M.E Awards Past Winners')
@section('twitter_description', 'Honouring healthcare excellence and outstanding contributions.')

@section('title', 'Past Winners')

@section('content')

<section class="relative bg-gradient-to-br from-indigo-900 via-purple-900 to-purple-800 text-white py-20">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')]"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Past Winners</h1>
            <p class="text-xl text-purple-100">
                Celebrating the exceptional individuals who have made outstanding contributions to health and social care.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            @php
                $groupedWinners = collect($winners)->groupBy('year');
            @endphp

            @foreach($groupedWinners as $year => $yearWinners)
            <div class="mb-16">
                <div class="flex items-center mb-8">
                    <div class="bg-purple-600 text-white px-6 py-3 rounded-lg font-bold text-2xl">{{ $year }}</div>
                    <div class="flex-1 h-1 bg-purple-200 ml-4"></div>
                </div>

                <div class="space-y-6">
                    @foreach($yearWinners as $winner)
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow overflow-hidden">
                        <div class="md:flex">
                            <div class="md:w-1/4 bg-gradient-to-br from-purple-600 to-indigo-600 p-8 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-10 h-10 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>
                                    <div class="text-white font-bold text-sm">WINNER</div>
                                </div>
                            </div>
                            <div class="md:w-3/4 p-8">
                                <div class="mb-2">
                                    <span class="inline-block bg-purple-100 text-purple-800 text-sm font-semibold px-3 py-1 rounded-full">
                                        {{ $winner['category'] }}
                                    </span>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $winner['name'] }}</h3>
                                <p class="text-purple-600 font-semibold mb-4">{{ $winner['organization'] }}</p>
                                <p class="text-gray-600 leading-relaxed">{{ $winner['achievement'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Join Our Hall of Fame</h2>
            <p class="text-xl text-gray-600 mb-8">
                Be part of our legacy of excellence. Nominate outstanding professionals who are making a difference in health and social care.
            </p>
            <a href="{{ route('nominations') }}" class="inline-flex items-center justify-center px-8 py-4 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg transition shadow-lg">
                Submit Your Nomination
            </a>
        </div>
    </div>
</section>

@endsection
