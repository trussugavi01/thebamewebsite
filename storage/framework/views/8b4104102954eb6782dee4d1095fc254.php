

<?php $__env->startSection('meta_title', 'Blog | B.A.M.E Health & Care Awards - Insights & Stories'); ?>
<?php $__env->startSection('meta_description', 'Read the latest insights, stories, and updates about health and social care equity, diversity in healthcare, and the B.A.M.E Health & Care Awards community.'); ?>
<?php $__env->startSection('meta_keywords', 'healthcare blog, diversity insights, health equity stories, BAME healthcare, NHS diversity blog, social care updates'); ?>
<?php $__env->startSection('canonical_url', route('blog.index')); ?>

<?php $__env->startSection('og_title', 'Blog | B.A.M.E Health & Care Awards'); ?>
<?php $__env->startSection('og_description', 'Insights, stories, and updates from the world of health and social care equity.'); ?>
<?php $__env->startSection('og_url', route('blog.index')); ?>

<?php $__env->startSection('twitter_title', 'B.A.M.E Awards Blog'); ?>
<?php $__env->startSection('twitter_description', 'Latest insights and stories from the healthcare equity community.'); ?>

<?php $__env->startSection('title', 'Blog - Latest Insights & Stories'); ?>

<?php $__env->startSection('content'); ?>

<section class="relative bg-gradient-to-br from-purple-900 via-indigo-900 to-teal-800 text-white py-20">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Our Blog
            </h1>
            <p class="text-xl md:text-2xl text-purple-100 leading-relaxed">
                Insights, stories, and updates from the world of health and social care equity
            </p>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <?php if($posts->count() > 0): ?>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                        <div class="relative h-56 overflow-hidden bg-gradient-to-br from-purple-100 to-teal-100">
                            <?php if($post->featured_image): ?>
                                <img src="<?php echo e(asset('storage/' . $post->featured_image)); ?>" 
                                     alt="<?php echo e($post->title); ?>" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <?php else: ?>
                                <div class="w-full h-full flex items-center justify-center">
                                    <svg class="w-20 h-20 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                                    </svg>
                                </div>
                            <?php endif; ?>
                            <div class="absolute top-4 left-4">
                                <span class="bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    <?php echo e($post->published_at->format('M d, Y')); ?>

                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-purple-600 transition-colors">
                                <a href="<?php echo e(route('blog.show', $post->slug)); ?>"><?php echo e($post->title); ?></a>
                            </h2>
                            <p class="text-gray-600 mb-4 line-clamp-3">
                                <?php echo e($post->excerpt); ?>

                            </p>
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <?php echo e($post->reading_time); ?>

                                </div>
                                <a href="<?php echo e(route('blog.show', $post->slug)); ?>" class="text-purple-600 hover:text-purple-700 font-semibold inline-flex items-center">
                                    Read More
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="mt-12">
                    <?php echo e($posts->links()); ?>

                </div>
            <?php else: ?>
                <div class="text-center py-16">
                    <svg class="w-24 h-24 mx-auto text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">No blog posts yet</h3>
                    <p class="text-gray-600 mb-8">Check back soon for the latest insights and stories.</p>
                    <a href="<?php echo e(route('home')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg transition shadow-lg">
                        Back to Home
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="py-16 bg-gradient-to-br from-purple-50 to-teal-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Stay Updated</h2>
        <p class="text-gray-600 text-lg mb-8 max-w-2xl mx-auto">
            Subscribe to our newsletter to receive the latest blog posts and updates directly in your inbox.
        </p>
        <a href="<?php echo e(route('newsletter')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg transition shadow-lg">
            Subscribe to Newsletter
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
        </a>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\thebamewebsite\resources\views/pages/blog/index.blade.php ENDPATH**/ ?>