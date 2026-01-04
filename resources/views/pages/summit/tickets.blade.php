@extends('layouts.app')

@section('meta_title', 'Get Tickets | B.I.D.E Workforce Summit 2025 - Register Now')
@section('meta_description', 'Secure your tickets for the B.I.D.E Workforce Summit 2025. Choose from various ticket options and join us for an unforgettable day of learning, networking, and advancing healthcare equity.')
@section('meta_keywords', 'B.I.D.E tickets, summit registration, healthcare conference tickets, buy tickets, register summit, healthcare event tickets')
@section('canonical_url', route('summit.tickets'))

@section('og_title', 'Get Your Tickets | B.I.D.E Workforce Summit')
@section('og_description', 'Choose the ticket option that\'s right for you and join us for an unforgettable day of learning and networking.')
@section('og_url', route('summit.tickets'))

@section('twitter_title', 'B.I.D.E Summit Tickets')
@section('twitter_description', 'Register now for the healthcare equity summit.')

@section('title', 'Get Your Tickets')

@section('content')

<section class="relative bg-gradient-to-br from-teal-900 via-cyan-900 to-blue-900 text-white py-20">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')]"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Get Your Tickets</h1>
            <p class="text-xl text-teal-100">
                Choose the ticket option that's right for you and join us for an unforgettable day of learning and networking.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($ticketTypes as $ticket)
            <div class="bg-white rounded-xl shadow-md hover:shadow-2xl transition-shadow overflow-hidden {{ $ticket['name'] === 'VIP' ? 'ring-2 ring-purple-600 transform lg:scale-105' : '' }}">
                @if($ticket['badge'])
                <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white text-center py-2 font-bold text-sm">
                    {{ $ticket['badge'] }}
                </div>
                @endif
                
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $ticket['name'] }}</h3>
                    
                    <div class="mb-6">
                        @if(isset($ticket['original_price']))
                        <div class="text-gray-400 line-through text-lg">{{ $ticket['original_price'] }}</div>
                        @endif
                        <div class="text-4xl font-bold text-teal-600">{{ $ticket['price'] }}</div>
                        <div class="text-gray-600 text-sm">per person</div>
                    </div>
                    
                    <ul class="space-y-3 mb-8">
                        @foreach($ticket['features'] as $feature)
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-teal-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600 text-sm">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                    
                    @if($ticket['available'])
                    <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 {{ $ticket['name'] === 'VIP' ? 'bg-purple-600 hover:bg-purple-700' : 'bg-teal-600 hover:bg-teal-700' }} text-white font-semibold rounded-lg transition shadow-md">
                        Book Now
                    </a>
                    @else
                    <button disabled class="block w-full text-center px-6 py-3 bg-gray-300 text-gray-500 font-semibold rounded-lg cursor-not-allowed">
                        Sold Out
                    </button>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8 text-center">What's Included</h2>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="text-center">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Expert Sessions</h3>
                    <p class="text-gray-600 text-sm">Learn from leading healthcare professionals</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Networking</h3>
                    <p class="text-gray-600 text-sm">Connect with peers and industry leaders</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Full Day Event</h3>
                    <p class="text-gray-600 text-sm">Comprehensive program from 8 AM to 5 PM</p>
                </div>
            </div>

            <div class="bg-teal-50 rounded-xl p-8 text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Questions About Tickets?</h3>
                <p class="text-gray-600 mb-6">
                    Our team is here to help you choose the right ticket option and answer any questions you may have.
                </p>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-3 bg-teal-600 hover:bg-teal-700 text-white font-semibold rounded-lg transition">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
