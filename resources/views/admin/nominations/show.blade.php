@extends('layouts.app')

@section('title', 'View Nomination #' . $nomination->id)

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="mb-8 flex items-center justify-between">
            <div>
                <div class="flex items-center gap-4 mb-2">
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-gray-700 font-medium inline-flex items-center transition">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Dashboard
                    </a>
                    <span class="text-gray-400">/</span>
                    <a href="{{ route('admin.nominations.index') }}" class="text-purple-600 hover:text-purple-700 font-medium inline-flex items-center transition">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Nominations
                    </a>
                </div>
                <h1 class="text-3xl font-bold text-gray-900 mt-2">Nomination #{{ $nomination->id }}</h1>
                <p class="text-gray-600">Submitted on {{ $nomination->created_at->format('F d, Y \a\t H:i') }}</p>
            </div>
            <div>
                {!! $nomination->status_badge !!}
            </div>
        </div>

        @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-800 px-6 py-4 rounded-lg mb-6 flex items-center">
            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            {{ session('success') }}
        </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                
                <!-- Nominee Details -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="bg-purple-600 px-6 py-4">
                        <h2 class="text-xl font-bold text-white flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Nominee Details
                        </h2>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Full Name</label>
                                <p class="text-gray-900 font-medium">{{ $nomination->nominee_full_name }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Job Title</label>
                                <p class="text-gray-900">{{ $nomination->nominee_job_title }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Company</label>
                                <p class="text-gray-900">{{ $nomination->nominee_company }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Location</label>
                                <p class="text-gray-900">{{ $nomination->nominee_city }}, {{ $nomination->nominee_county }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Email</label>
                                <a href="mailto:{{ $nomination->nominee_email }}" class="text-purple-600 hover:text-purple-700">
                                    {{ $nomination->nominee_email }}
                                </a>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Contact Number</label>
                                <a href="tel:{{ $nomination->nominee_contact }}" class="text-purple-600 hover:text-purple-700">
                                    {{ $nomination->nominee_contact }}
                                </a>
                            </div>
                            @if($nomination->nominee_linkedin)
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-500 mb-1">LinkedIn Profile</label>
                                <a href="{{ $nomination->nominee_linkedin }}" target="_blank" class="text-purple-600 hover:text-purple-700 inline-flex items-center">
                                    {{ $nomination->nominee_linkedin }}
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Nominator Details -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="bg-teal-600 px-6 py-4">
                        <h2 class="text-xl font-bold text-white flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Nominator Details
                        </h2>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Full Name</label>
                                <p class="text-gray-900 font-medium">{{ $nomination->nominator_full_name }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Job Title</label>
                                <p class="text-gray-900">{{ $nomination->nominator_job_title }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Company</label>
                                <p class="text-gray-900">{{ $nomination->nominator_company }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Location</label>
                                <p class="text-gray-900">{{ $nomination->nominator_city }}, {{ $nomination->nominator_county }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Email</label>
                                <a href="mailto:{{ $nomination->nominator_email }}" class="text-teal-600 hover:text-teal-700">
                                    {{ $nomination->nominator_email }}
                                </a>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Contact Number</label>
                                <a href="tel:{{ $nomination->nominator_contact }}" class="text-teal-600 hover:text-teal-700">
                                    {{ $nomination->nominator_contact }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Award Category -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="bg-indigo-600 px-6 py-4">
                        <h2 class="text-xl font-bold text-white flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                            </svg>
                            Award Category
                        </h2>
                    </div>
                    <div class="p-6">
                        <p class="text-lg font-semibold text-gray-900">{{ $nomination->award_category }}</p>
                    </div>
                </div>

                <!-- Supporting Information -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="bg-gray-800 px-6 py-4">
                        <h2 class="text-xl font-bold text-white flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            Supporting Information
                        </h2>
                    </div>
                    <div class="p-6 space-y-6">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900 mb-2 flex items-center">
                                <span class="inline-flex items-center justify-center w-6 h-6 bg-indigo-100 text-indigo-600 rounded-full text-xs font-bold mr-2">1</span>
                                Question 1
                            </h3>
                            <p class="text-gray-700 leading-relaxed whitespace-pre-wrap">{{ $nomination->question_1 }}</p>
                            <p class="text-xs text-gray-500 mt-2">Word count: {{ str_word_count($nomination->question_1) }}</p>
                        </div>
                        <div class="border-t border-gray-200 pt-6">
                            <h3 class="text-sm font-semibold text-gray-900 mb-2 flex items-center">
                                <span class="inline-flex items-center justify-center w-6 h-6 bg-indigo-100 text-indigo-600 rounded-full text-xs font-bold mr-2">2</span>
                                Question 2
                            </h3>
                            <p class="text-gray-700 leading-relaxed whitespace-pre-wrap">{{ $nomination->question_2 }}</p>
                            <p class="text-xs text-gray-500 mt-2">Word count: {{ str_word_count($nomination->question_2) }}</p>
                        </div>
                        <div class="border-t border-gray-200 pt-6">
                            <h3 class="text-sm font-semibold text-gray-900 mb-2 flex items-center">
                                <span class="inline-flex items-center justify-center w-6 h-6 bg-indigo-100 text-indigo-600 rounded-full text-xs font-bold mr-2">3</span>
                                Question 3
                            </h3>
                            <p class="text-gray-700 leading-relaxed whitespace-pre-wrap">{{ $nomination->question_3 }}</p>
                            <p class="text-xs text-gray-500 mt-2">Word count: {{ str_word_count($nomination->question_3) }}</p>
                        </div>
                        <div class="border-t border-gray-200 pt-6">
                            <h3 class="text-sm font-semibold text-gray-900 mb-2 flex items-center">
                                <span class="inline-flex items-center justify-center w-6 h-6 bg-indigo-100 text-indigo-600 rounded-full text-xs font-bold mr-2">4</span>
                                Question 4
                            </h3>
                            <p class="text-gray-700 leading-relaxed whitespace-pre-wrap">{{ $nomination->question_4 }}</p>
                            <p class="text-xs text-gray-500 mt-2">Word count: {{ str_word_count($nomination->question_4) }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                
                <!-- Update Status -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="bg-gray-100 px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-bold text-gray-900">Update Status</h3>
                    </div>
                    <div class="p-6">
                        <form action="{{ route('admin.nominations.update-status', $nomination) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            
                            <div class="mb-4">
                                <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                                <select name="status" id="status" required
                                        class="block w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                                    <option value="pending" {{ $nomination->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="under_review" {{ $nomination->status == 'under_review' ? 'selected' : '' }}>Under Review</option>
                                    <option value="shortlisted" {{ $nomination->status == 'shortlisted' ? 'selected' : '' }}>Shortlisted</option>
                                    <option value="rejected" {{ $nomination->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                    <option value="winner" {{ $nomination->status == 'winner' ? 'selected' : '' }}>Winner</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="admin_notes" class="block text-sm font-medium text-gray-700 mb-2">Admin Notes</label>
                                <textarea name="admin_notes" id="admin_notes" rows="4"
                                          class="block w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                                          placeholder="Add internal notes...">{{ $nomination->admin_notes }}</textarea>
                            </div>

                            <button type="submit" class="w-full px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-lg transition">
                                Update Status
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Metadata -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="bg-gray-100 px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-bold text-gray-900">Metadata</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-500 mb-1">Submission ID</label>
                            <p class="text-gray-900 font-mono">#{{ $nomination->id }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-500 mb-1">Submitted On</label>
                            <p class="text-gray-900">{{ $nomination->created_at->format('F d, Y') }}</p>
                            <p class="text-sm text-gray-500">{{ $nomination->created_at->format('H:i:s') }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-500 mb-1">Last Updated</label>
                            <p class="text-gray-900">{{ $nomination->updated_at->format('F d, Y') }}</p>
                            <p class="text-sm text-gray-500">{{ $nomination->updated_at->format('H:i:s') }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-500 mb-1">Terms Accepted</label>
                            <p class="text-gray-900">
                                @if($nomination->terms_accepted)
                                    <span class="inline-flex items-center text-green-600">
                                        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Yes
                                    </span>
                                @else
                                    <span class="text-red-600">No</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="bg-gray-100 px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-bold text-gray-900">Actions</h3>
                    </div>
                    <div class="p-6 space-y-3">
                        <a href="{{ route('admin.nominations.export', ['status' => $nomination->status]) }}" 
                           class="block w-full px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-center font-medium rounded-lg transition">
                            Export Similar
                        </a>
                        <form action="{{ route('admin.nominations.destroy', $nomination) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this nomination? This action cannot be undone.')"
                                    class="block w-full px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition">
                                Delete Nomination
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
