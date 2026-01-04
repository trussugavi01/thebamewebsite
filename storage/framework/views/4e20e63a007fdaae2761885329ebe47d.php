

<?php $__env->startSection('meta_title', 'Featured Speakers | B.I.D.E Workforce Summit 2025'); ?>
<?php $__env->startSection('meta_description', 'Meet the featured speakers at the B.I.D.E Workforce Summit 2025. Learn from visionary leaders, innovators, and changemakers transforming UK health and social care.'); ?>
<?php $__env->startSection('meta_keywords', 'B.I.D.E speakers, healthcare speakers, summit speakers, healthcare leaders, diversity speakers, NHS speakers, healthcare innovators'); ?>
<?php $__env->startSection('canonical_url', route('summit.speakers')); ?>

<?php $__env->startSection('og_title', 'Featured Speakers | B.I.D.E Workforce Summit'); ?>
<?php $__env->startSection('og_description', 'Learn from visionary leaders, innovators, and changemakers who are transforming health and social care.'); ?>
<?php $__env->startSection('og_url', route('summit.speakers')); ?>

<?php $__env->startSection('twitter_title', 'B.I.D.E Summit Speakers'); ?>
<?php $__env->startSection('twitter_description', 'Visionary leaders transforming healthcare.'); ?>

<?php $__env->startSection('title', 'Summit Speakers'); ?>

<?php $__env->startSection('content'); ?>

<section class="relative bg-gradient-to-br from-teal-900 via-teal-800 to-cyan-900 text-white py-20">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')]"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Featured Speakers</h1>
            <p class="text-xl text-teal-100">
                Learn from visionary leaders, innovators, and changemakers who are transforming health and social care.
            </p>
        </div>
    </div>
</section>

<section class="py-20 md:py-28 bg-gradient-to-br from-teal-50 via-white to-cyan-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <div class="bg-white rounded-3xl shadow-2xl p-12 md:p-16 border-2 border-teal-100">
                <div class="mb-8">
                    <svg class="w-20 h-20 mx-auto text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Speaker Information
                </h2>
                <div class="inline-block">
                    <p class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-teal-600 to-cyan-600 bg-clip-text text-transparent mb-6">
                        Coming Soon!
                    </p>
                </div>
                <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed mb-8">
                    Information about our speakers will be shared on this page soon. We're bringing together visionary leaders, innovators, and changemakers who are transforming health and social care.
                </p>
                <p class="text-md text-gray-500 italic">
                    Stay tuned for updates on our exceptional lineup of speakers.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-teal-600 hover:bg-teal-700 text-white font-semibold rounded-lg transition shadow-lg">
                        Get Notified
                    </a>
                    <a href="<?php echo e(route('summit')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-gray-100 hover:bg-gray-200 text-gray-900 font-semibold rounded-lg transition">
                        Back to Summit
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\thebamewebsite\resources\views/pages/summit/speakers.blade.php ENDPATH**/ ?>