

<?php $__env->startSection('meta_title', 'Our Sponsors | B.A.M.E Health & Care Awards - Partnership Opportunities'); ?>
<?php $__env->startSection('meta_description', 'Meet our valued sponsors who support The National B.A.M.E Health & Care Awards and B.I.D.E Summit. Explore partnership opportunities to advance equity in UK healthcare.'); ?>
<?php $__env->startSection('meta_keywords', 'BAME awards sponsors, healthcare sponsorship, diversity partnership, awards sponsors, NHS partnerships, healthcare sponsorship opportunities'); ?>
<?php $__env->startSection('canonical_url', route('sponsors')); ?>

<?php $__env->startSection('og_title', 'Our Sponsors | B.A.M.E Health & Care Awards'); ?>
<?php $__env->startSection('og_description', 'Grateful to our sponsors who share our commitment to celebrating excellence and advancing equity in health and social care.'); ?>
<?php $__env->startSection('og_url', route('sponsors')); ?>

<?php $__env->startSection('twitter_title', 'B.A.M.E Awards Sponsors'); ?>
<?php $__env->startSection('twitter_description', 'Partners committed to healthcare equity and excellence.'); ?>

<?php $__env->startSection('title', 'Our Sponsors'); ?>

<?php $__env->startSection('content'); ?>

<section class="relative bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900 text-white py-20">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')]"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Our Sponsors</h1>
            <p class="text-xl text-purple-100">
                We are grateful to our sponsors who share our commitment to celebrating excellence and advancing equity in health and social care.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <?php
            $groupedSponsors = collect($sponsors)->groupBy('tier');
            $tierOrder = ['Platinum', 'Gold', 'Silver'];
        ?>

        <?php $__currentLoopData = $tierOrder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($groupedSponsors->has($tier)): ?>
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2"><?php echo e($tier); ?> Sponsors</h2>
                    <div class="w-24 h-1 bg-purple-600 mx-auto"></div>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php $__currentLoopData = $groupedSponsors[$tier]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow p-8 text-center">
                        <div class="mb-6">
                            <img src="<?php echo e($sponsor['logo']); ?>" alt="<?php echo e($sponsor['name']); ?>" class="mx-auto h-24 object-contain">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3"><?php echo e($sponsor['name']); ?></h3>
                        <p class="text-gray-600 leading-relaxed"><?php echo e($sponsor['description']); ?></p>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

<section class="py-20 bg-gradient-to-br from-purple-100 via-purple-50 to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl p-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Become a Sponsor</h2>
                <p class="text-xl text-gray-600">
                    Partner with us to make a lasting impact on health and social care equity.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Brand Visibility</h3>
                    <p class="text-gray-600 text-sm">Reach thousands of healthcare professionals</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Network Access</h3>
                    <p class="text-gray-600 text-sm">Connect with industry leaders</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Social Impact</h3>
                    <p class="text-gray-600 text-sm">Support diversity and equity</p>
                </div>
            </div>

            <div class="text-center">
                <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg transition shadow-lg">
                    Contact Us About Sponsorship
                </a>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\thebamewebsite\resources\views/pages/sponsors.blade.php ENDPATH**/ ?>