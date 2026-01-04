@extends('layouts.app')

@section('title', 'The Awards - Celebrating Excellence')

@section('content')

<section class="relative bg-gradient-to-br from-purple-900 via-purple-800 to-blue-900 text-white py-20 md:py-24 lg:py-28">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight drop-shadow-lg">
                The Awards
            </h1>
            <p class="text-xl md:text-2xl text-gray-100 leading-relaxed drop-shadow-md">
                Celebrating Excellence in Health & Social Care
            </p>
        </div>
    </div>
</section>

<section class="py-16 md:py-20 bg-white">
    <div class="container mx-auto px-6 sm:px-8 lg:px-12">
        <div class="max-w-5xl mx-auto">
            <div class="bg-gradient-to-br from-purple-50 to-blue-50 rounded-2xl p-8 md:p-12 mb-16 border border-purple-100">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Recognising Outstanding Contributions</h2>
                <p class="text-lg md:text-xl text-gray-800 leading-relaxed mb-6">
                    The Awards recognise and celebrate the achievements of B.A.M.E. staff and allies from across the health and care fields who are making significant improvements in career development support for Black, Asian and Minority Ethnic staff.
                </p>
                <p class="text-lg md:text-xl text-gray-800 leading-relaxed">
                    We honour exceptional initiatives and leadership, the improvement of services, and enhanced access to services for people from Black, Asian and Minority Ethnic communities. These awards shine a spotlight on those who are driving meaningful change and creating lasting impact in healthcare.
                </p>
            </div>

            <div class="mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 text-center">Watch Our Story</h2>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-gray-900" style="padding-bottom: 56.25%; height: 0;">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/p2LtU5-zwcQ" 
                        title="B.A.M.E Health & Care Awards" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>
                <p class="text-center text-gray-600 mt-4 text-sm">Discover the impact of the B.A.M.E Health & Care Awards</p>
            </div>
        </div>

        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8 text-center">The 2025 Shortlist</h2>
            <p class="text-lg text-gray-600 text-center mb-12 max-w-3xl mx-auto">
                Recognising excellence across multiple categories in health and social care.
            </p>

        <div class="space-y-6">
            <!-- Award Category 1 -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Advocacy and Patient Experience Champion Award</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award celebrates individuals or teams—whether healthcare professionals, patient advocates, or community leaders—who have championed the voices of B.A.M.E patients.</p>
                            <p class="text-gray-700 leading-relaxed">It recognises those whose advocacy has led to measurable improvements in patient care, access, or outcomes.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed mb-4">Nominees may include frontline staff enhancing patient experiences, organisations driving systemic change, or individuals influencing policy to create more equitable healthcare environments.</p>
                            <h4 class="font-bold text-gray-900 mb-3">2025 Nominees:</h4>
                            <div class="space-y-2">
                                <div class="flex items-start">
                                    <span class="w-2 h-2 bg-purple-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div><span class="font-semibold text-gray-900">Aurora Todisco</span> - <span class="text-gray-600">Local Voice in the Community</span></div>
                                </div>
                                <div class="flex items-start">
                                    <span class="w-2 h-2 bg-purple-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div><span class="font-semibold text-gray-900">Clare Lawson</span> - <span class="text-gray-600">Primary Care 24</span></div>
                                </div>
                                <div class="flex items-start">
                                    <span class="w-2 h-2 bg-purple-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div><span class="font-semibold text-gray-900">Dian Bates</span> - <span class="text-gray-600">North Middlesex Hospital Maternity</span></div>
                                </div>
                                <div class="flex items-start">
                                    <span class="w-2 h-2 bg-purple-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div><span class="font-semibold text-gray-900">Dr. Caoilin Maclaverty</span> - <span class="text-gray-600">Barking Havering and Redbridge NHS Trust</span></div>
                                </div>
                                <div class="flex items-start">
                                    <span class="w-2 h-2 bg-purple-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div><span class="font-semibold text-gray-900">Gabriel Abotsie</span> - <span class="text-gray-600">Norfolk and Suffolk NHS Foundation Trust</span></div>
                                </div>
                                <div class="flex items-start">
                                    <span class="w-2 h-2 bg-purple-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div><span class="font-semibold text-gray-900">Lynette Mupopoma</span> - <span class="text-gray-600">West Hertfordshire Hospitals NHS Trust</span></div>
                                </div>
                                <div class="flex items-start">
                                    <span class="w-2 h-2 bg-purple-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div><span class="font-semibold text-gray-900">Sadia Nasir</span> - <span class="text-gray-600">Cambridge University Hospitals NHS Foundation Trusts</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Ally of the Year</h3>
                        <p class="text-sm text-gray-600 mt-1">Sponsored by the Race and Health Observatory (RHO)</p>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">B.A.M.E Midwife of the Year</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">B.A.M.E Nurse of the Year</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Clinical AHP Champion of the Year</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Clinician of the Year</h3>
                        <p class="text-sm text-gray-600 mt-1">Sponsored by the General Medical Council (GMC)</p>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Educator or Workforce Developer of the Year</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Emergency & Critical Care Innovation</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Excellence in Community Partnership Award</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Future Leader Award – Next Gen (18-30)</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Health Equity Digital Innovator of the Year</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Inclusive Leader of the Year</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Inclusive Organisation/ Trust of the Year</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Lifetime Achievement Award</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Outstanding Social & Community Care Award</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Pioneering Health Equity Researcher of the Year</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Public Health Impact Award</h3>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-purple-100 rounded-xl p-6 hover:border-purple-600 hover:shadow-lg transition">
                <div class="flex items-start">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-gray-900">Trailblazer in Inclusion Excellence</h3>
                        <p class="text-sm text-gray-600 mt-1">Sponsored by UNISON</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16 text-center">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Ready to Nominate?</h2>
            <p class="text-gray-600 mb-6">Recognise excellence in your organisation or community.</p>
            <a href="{{ route('nominations') }}" class="inline-flex items-center px-8 py-4 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg transition shadow-lg">
                Start Your Nomination
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

@endsection
