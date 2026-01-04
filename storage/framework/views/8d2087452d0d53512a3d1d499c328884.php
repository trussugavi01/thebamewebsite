

<?php $__env->startSection('meta_title', 'The Awards | B.A.M.E Health & Care Awards 2025 - Categories & Nominations'); ?>
<?php $__env->startSection('meta_description', 'Discover the B.A.M.E Health & Care Awards categories celebrating outstanding contributions from Black, Asian and Minority Ethnic professionals in UK health and social care. Nominate today!'); ?>
<?php $__env->startSection('meta_keywords', 'BAME awards categories, healthcare awards 2025, NHS nominations, diversity recognition, health care excellence, ethnic minority awards, healthcare leadership awards'); ?>
<?php $__env->startSection('canonical_url', route('awards')); ?>

<?php $__env->startSection('og_title', 'The Awards | Celebrating Excellence in Health & Social Care'); ?>
<?php $__env->startSection('og_description', 'Recognising outstanding contributions from BAME staff and allies making significant improvements in UK health and care.'); ?>
<?php $__env->startSection('og_url', route('awards')); ?>

<?php $__env->startSection('twitter_title', 'B.A.M.E Health & Care Awards Categories'); ?>
<?php $__env->startSection('twitter_description', 'Celebrating excellence and driving meaningful change in healthcare.'); ?>

<?php $__env->startSection('title', 'The Awards - Celebrating Excellence'); ?>

<?php $__env->startSection('content'); ?>

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
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8 text-center">Award Categories</h2>
            <p class="text-lg text-gray-600 text-center mb-12 max-w-3xl mx-auto">
                Recognizing excellence across multiple categories in health and social care.
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
                            <p class="text-gray-700 leading-relaxed">Nominees may include frontline staff enhancing patient experiences, organisations driving systemic change, or individuals influencing policy to create more equitable healthcare environments.</p>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Award Category 2: Ally of the Year -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Ally of the Year</h3>
                            <p class="text-sm text-purple-600 font-semibold mb-3">Sponsored by the Race and Health Observatory (RHO)</p>
                            <p class="text-gray-700 leading-relaxed mb-2">This award recognises individuals who may not be part of the B.A.M.E community but actively advocate for equity, inclusion, and justice within healthcare.</p>
                            <p class="text-gray-700 leading-relaxed">It celebrates allies who have used their influence to challenge systemic barriers, support marginalised voices, and create measurable change.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Nominees may include senior leaders driving inclusive policies, managers fostering diverse teams, or individuals championing B.A.M.E colleagues and patients through advocacy and action.</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Award Category 3: B.A.M.E Midwife of the Year -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">B.A.M.E Midwife of the Year</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award recognises midwives from B.A.M.E backgrounds who demonstrate exceptional leadership, compassion, and advocacy in maternity care.</p>
                            <p class="text-gray-700 leading-relaxed">It celebrates those who not only provide outstanding clinical care but also champion equity, cultural sensitivity, and inclusion.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Nominees may include midwives working in hospitals, community settings, or education who have improved maternal outcomes, supported B.A.M.E families, and contributed to reducing health disparities in maternity services.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Award Category 4: B.A.M.E Nurse of the Year -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">B.A.M.E Nurse of the Year</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award recognises nurses from B.A.M.E backgrounds who demonstrate outstanding clinical excellence, leadership, and advocacy in healthcare.</p>
                            <p class="text-gray-700 leading-relaxed">It celebrates those who go beyond patient care to influence positive change within their teams, organisations, and communities.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Nominees may include nurses working in clinical, community, or leadership roles who have improved patient outcomes, championed inclusive practices, and inspired others through mentorship, innovation, or advocacy for health equity.</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Award Category 5: Clinical AHP Champion of the Year -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Clinical AHP Champion of the Year</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award recognises Allied Health Professionals (AHPs) from B.A.M.E backgrounds who demonstrate exceptional leadership, innovation, and commitment to advancing equitable care.</p>
                            <p class="text-gray-700 leading-relaxed">It celebrates those who have made significant contributions to improving patient outcomes and reducing health disparities.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Nominees may include AHPs such as physiotherapists, occupational therapists, radiographers, paramedics, speech and language therapists, and others who have demonstrated clinical excellence, service improvement, or advocacy for health equity.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Award Category 6: Clinician of the Year -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Clinician of the Year</h3>
                            <p class="text-sm text-purple-600 font-semibold mb-3">Sponsored by the General Medical Council (GMC)</p>
                            <p class="text-gray-700 leading-relaxed mb-2">This award honours clinicians from B.A.M.E backgrounds whose dedication to care is felt far beyond the walls of their clinics or hospitals.</p>
                            <p class="text-gray-700 leading-relaxed">These are the individuals who don't just treat conditions—they see the whole person, standing as advocates when voices go unheard.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Nominees may include doctors, dentists, pharmacists, or other healthcare professionals who have not only saved lives but transformed them through compassion, courage, and a relentless commitment to equity.</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Award Category 7: Educator or Workforce Developer of the Year -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Educator or Workforce Developer of the Year</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award honours the educators and workforce developers who don't just teach—they inspire.</p>
                            <p class="text-gray-700 leading-relaxed">These are the mentors, leaders, and changemakers who believe that talent is everywhere, but opportunity must be created.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Through bold, innovative approaches and a deep commitment to equity, they open doors that might have remained closed for B.A.M.E students and staff. Whether they're in classrooms, boardrooms, or training programmes, their work lights a path for others to follow.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Award Category 8: Emergency & Critical Care Innovation -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Emergency & Critical Care Innovation</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award honours the innovators who thrive where urgency meets impact—those who step into the most critical moments with solutions that save lives and change systems.</p>
                            <p class="text-gray-700 leading-relaxed">It celebrates individuals or teams who have transformed emergency and critical care to ensure B.A.M.E patients receive equitable, compassionate support.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed mb-4">Whether through groundbreaking protocols, life-saving technologies, or system-wide improvements, their work delivers more than care; it brings hope, dignity, and fairness in moments where every second counts. Nominations must provide evidence of proven implementation, measurable benefits for B.A.M.E patients, and sustained impact across healthcare services.</p>
                            <p class="text-sm text-gray-600 italic">No nominees listed for 2025</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Award Category 9: Excellence in Community Partnership Award -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Excellence in Community Partnership Award</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award celebrates the heart of community-driven change—organisations and volunteers who stand at the crossroads of healthcare and lived experience.</p>
                            <p class="text-gray-700 leading-relaxed">It honours those who build bridges where gaps once existed, creating partnerships that bring healthcare closer to the people who need it most.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Whether through grassroots advocacy, health education, or outreach programmes, these changemakers work hand-in-hand with B.A.M.E communities to improve access, raise awareness, and deliver life-changing support. Their efforts are more than collaborations; they are lifelines woven into the fabric of the communities they serve.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Award Category 10: Future Leader Award – Next Gen (18-30) -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Future Leader Award – Next Gen (18-30)</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award celebrates the next generation of healthcare leaders—young changemakers aged 18–30 whose passion, courage, and fresh perspectives are already making waves.</p>
                            <p class="text-gray-700 leading-relaxed">It recognises individuals who have been identified as rising stars at the start of their careers and show extraordinary potential.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Whether through advocacy, innovation, leadership, or community impact, these trailblazers are challenging the status quo, championing equity, and proving that age is no barrier to making a difference. Their journey may be just beginning, but their impact is already being felt.</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Award Category 11: Health Equity Digital Innovator of the Year -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Health Equity Digital Innovator of the Year</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award celebrates the visionaries who see technology not just as a tool, but as a lifeline for those too often left behind.</p>
                            <p class="text-gray-700 leading-relaxed">It honours individuals or teams who have harnessed the power of digital innovation to break down barriers in healthcare.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Whether through groundbreaking apps, data-driven solutions, or transformative digital health platforms, these pioneers have turned complex challenges into simple, life-changing solutions. Their work doesn't just improve systems—it changes lives, one connection at a time.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Award Category 12: Inclusive Leader of the Year -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Inclusive Leader of the Year</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award honours leaders who don't just talk about inclusion—they live it, breathe it, and build it into the very fabric of their organisations.</p>
                            <p class="text-gray-700 leading-relaxed">These are the visionaries who challenge the status quo, dismantle systemic barriers, and create environments where everyone feels seen, heard, and valued.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Whether they lead teams, departments, or entire organisations, their actions speak louder than words—turning diversity into strength and equity into measurable change. Their leadership isn't about titles; it's about impact, courage, and a relentless commitment to creating cultures of belonging that last.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Award Category 13: Inclusive Organisation/ Trust of the Year -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Inclusive Organisation/ Trust of the Year</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award celebrates organisations and trusts that don't just commit to inclusion on paper—they live it in every policy, practice, and decision.</p>
                            <p class="text-gray-700 leading-relaxed">These are the workplaces where diversity isn't a buzzword but a driving force for innovation, equity, and better health outcomes.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Whether through groundbreaking strategies, transformative leadership, or bold cultural shifts, these organisations create environments where B.A.M.E staff and patients don't just feel represented—they thrive. Their work sets the benchmark for what true, sustainable inclusion looks like in healthcare.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Award Category 14: Lifetime Achievement Award -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Lifetime Achievement Award</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award honours individuals whose lifelong dedication to equity has left a profound and lasting impact on health and social care.</p>
                            <p class="text-gray-700 leading-relaxed">These are the pioneers, advocates, and leaders whose work has broken barriers, challenged injustices, and created pathways where none existed.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Their influence can be seen not just in policies and programmes but in the lives they've touched, the voices they've amplified, and the systems they've transformed. This award is more than a recognition of years served—it's a celebration of a legacy built on courage, resilience, and an unwavering commitment to justice for B.A.M.E communities.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Award Category 15: Outstanding Social & Community Care Award -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Outstanding Social & Community Care Award</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award celebrates the unsung heroes of social and community care—those whose dedication transforms lives, one act of compassion at a time.</p>
                            <p class="text-gray-700 leading-relaxed">It honours individuals or teams who work tirelessly to ensure B.A.M.E communities have access to care that is equitable, culturally sensitive, and life-affirming.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Whether supporting families through social services, leading community health initiatives, or advocating for vulnerable groups, these champions create networks of support that help people feel seen, valued, and empowered. Their work doesn't just change lives; it strengthens entire communities.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Award Category 16: Pioneering Health Equity Researcher of the Year -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Pioneering Health Equity Researcher of the Year</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award honours researchers who refuse to accept health inequities as inevitable.</p>
                            <p class="text-gray-700 leading-relaxed">It celebrates those who ask difficult questions, challenge outdated systems, and uncover truths that drive real change for B.A.M.E communities.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Whether through groundbreaking clinical studies, community-led research, or transformative data analysis, these innovators turn evidence into action. Their work doesn't just sit in reports—it reshapes policies, improves care, and builds healthier, more equitable futures for generations to come.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Award Category 17: Public Health Impact Award -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Public Health Impact Award</h3>
                            <p class="text-gray-700 leading-relaxed mb-2">This award recognises individuals, teams, or organisations leading impactful public health initiatives that address health inequalities and improve outcomes for B.A.M.E communities.</p>
                            <p class="text-gray-700 leading-relaxed">Whether through policy change, preventative healthcare, education campaigns, or community-led interventions, these changemakers use innovation and advocacy to drive real, measurable improvements.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Whether through policy change, preventative healthcare, education campaigns, or community-led interventions, these changemakers use innovation and advocacy to drive real, measurable improvements.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Award Category 18: Trailblazer in Inclusion Excellence -->
            <div class="bg-white border-2 border-purple-100 rounded-xl overflow-hidden transition-all duration-300 hover:border-purple-400 hover:shadow-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Trailblazer in Inclusion Excellence</h3>
                            <p class="text-sm text-purple-600 font-semibold mb-3">Sponsored by UNISON</p>
                            <p class="text-gray-700 leading-relaxed mb-2">This award honours individuals who may not hold formal leadership titles but lead with courage, conviction, and a relentless drive to make inclusion a reality.</p>
                            <p class="text-gray-700 leading-relaxed">These trailblazers challenge the status quo from within, sparking change through grassroots initiatives, bold ideas, and everyday actions that ripple across their organisations.</p>
                        </div>
                        <button onclick="toggleAward(this)" class="ml-4 flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center hover:bg-purple-200 transition-colors">
                            <svg class="w-5 h-5 text-purple-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="award-details mt-4 max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <div class="pt-4 border-t border-purple-100">
                            <p class="text-gray-700 leading-relaxed">Their work redefines what it means to be an agent of change—proving that you don't need a title to inspire others, break down barriers, and create workplaces where equity isn't just an aspiration but a lived experience.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-16 text-center">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Ready to Nominate?</h2>
            <p class="text-gray-600 mb-6">Recognize excellence in your organization or community.</p>
            <a href="<?php echo e(route('nominations')); ?>" class="inline-flex items-center px-8 py-4 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg transition shadow-lg">
                Start Your Nomination
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<script>
function toggleAward(button) {
    const card = button.closest('.bg-white');
    const details = card.querySelector('.award-details');
    const icon = button.querySelector('svg');
    
    if (details.classList.contains('expanded')) {
        details.style.maxHeight = '0px';
        details.classList.remove('expanded');
        icon.style.transform = 'rotate(0deg)';
    } else {
        details.style.maxHeight = details.scrollHeight + 'px';
        details.classList.add('expanded');
        icon.style.transform = 'rotate(180deg)';
    }
}
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\thebamewebsite\resources\views/pages/awards.blade.php ENDPATH**/ ?>