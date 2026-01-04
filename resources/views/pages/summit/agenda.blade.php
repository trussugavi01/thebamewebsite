@extends('layouts.app')

@section('meta_title', 'Summit Agenda | B.I.D.E Workforce Summit 2025 - Schedule & Program')
@section('meta_description', 'View the full agenda for the B.I.D.E Workforce Summit 2025. Inspiring keynotes, interactive workshops, panel discussions, and valuable networking opportunities throughout the day.')
@section('meta_keywords', 'B.I.D.E agenda, summit schedule, healthcare conference agenda, workshop schedule, keynote speakers, networking events')
@section('canonical_url', route('summit.agenda'))

@section('og_title', 'Summit Agenda | B.I.D.E Workforce Summit')
@section('og_description', 'A full day of inspiring keynotes, interactive workshops, and valuable networking opportunities.')
@section('og_url', route('summit.agenda'))

@section('twitter_title', 'B.I.D.E Summit Agenda')
@section('twitter_description', 'Full day program of keynotes, workshops, and networking.')

@section('title', 'Summit Agenda')

@section('content')

<section class="relative bg-gradient-to-br from-cyan-900 via-teal-900 to-teal-800 text-white py-20">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')]"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Summit Agenda</h1>
            <p class="text-xl text-teal-100">
                A full day of inspiring keynotes, interactive workshops, and valuable networking opportunities.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-teal-200"></div>
                
                <div class="space-y-8">
                    @foreach($agenda as $item)
                    <div class="relative pl-20">
                        <div class="absolute left-0 w-16 h-16 bg-teal-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        
                        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow p-6">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <span class="inline-block bg-teal-100 text-teal-800 text-sm font-bold px-3 py-1 rounded-full">
                                    {{ $item['time'] }}
                                </span>
                                @if($item['type'] === 'keynote')
                                <span class="inline-block bg-purple-100 text-purple-800 text-xs font-semibold px-3 py-1 rounded-full">
                                    KEYNOTE
                                </span>
                                @elseif($item['type'] === 'panel')
                                <span class="inline-block bg-indigo-100 text-indigo-800 text-xs font-semibold px-3 py-1 rounded-full">
                                    PANEL
                                </span>
                                @elseif($item['type'] === 'workshop')
                                <span class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">
                                    WORKSHOP
                                </span>
                                @endif
                            </div>
                            
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $item['title'] }}</h3>
                            
                            @if(isset($item['speaker']))
                            <p class="text-teal-600 font-semibold mb-2">{{ $item['speaker'] }}</p>
                            @endif
                            
                            <p class="text-gray-600 leading-relaxed">{{ $item['description'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto bg-gradient-to-br from-teal-50 to-cyan-50 rounded-2xl p-12">
            <div class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Ready to Join Us?</h2>
                <p class="text-xl text-gray-600 mb-8">
                    Don't miss this opportunity to learn, network, and be inspired. Secure your ticket today.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('summit.tickets') }}" class="inline-flex items-center justify-center px-8 py-4 bg-teal-600 hover:bg-teal-700 text-white font-semibold rounded-lg transition shadow-lg">
                        Get Your Ticket
                    </a>
                    <a href="{{ route('summit.speakers') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white hover:bg-gray-50 text-gray-900 font-semibold rounded-lg transition border-2 border-gray-200">
                        Meet Our Speakers
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
