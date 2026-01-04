

<?php $__env->startSection('meta_title', 'Newsletter | B.A.M.E Health & Care Awards - Stay Connected'); ?>
<?php $__env->startSection('meta_description', 'Subscribe to The National B.A.M.E Health & Care Awards newsletter for exclusive updates, event announcements, inspiring stories, and insights about healthcare equity and diversity.'); ?>
<?php $__env->startSection('meta_keywords', 'BAME awards newsletter, healthcare updates, diversity newsletter, awards announcements, health equity news, subscribe newsletter'); ?>
<?php $__env->startSection('canonical_url', route('newsletter')); ?>

<?php $__env->startSection('og_title', 'Newsletter Signup | B.A.M.E Health & Care Awards'); ?>
<?php $__env->startSection('og_description', 'Stay connected with exclusive updates, event announcements, and inspiring stories from the healthcare equity community.'); ?>
<?php $__env->startSection('og_url', route('newsletter')); ?>

<?php $__env->startSection('twitter_title', 'B.A.M.E Awards Newsletter'); ?>
<?php $__env->startSection('twitter_description', 'Subscribe for updates and inspiring healthcare stories.'); ?>

<?php $__env->startSection('title', 'Stay Connected - Newsletter Signup'); ?>

<?php $__env->startSection('content'); ?>

<section class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&h=1000&fit=crop" 
                             alt="Healthcare professionals" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-purple-900 via-purple-900/50 to-transparent">
                            <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                <div class="inline-block bg-yellow-500 text-gray-900 px-4 py-2 rounded-full text-sm font-bold mb-4">
                                    EXCELLENCE IN CARE
                                </div>
                                <h3 class="text-2xl font-bold mb-2">CELEBRATING DIVERSITY</h3>
                                <p class="text-purple-100">
                                    Advancing equity for B.A.M.E professionals in health and social care.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="mb-6">
                        <span class="text-purple-600 font-semibold uppercase tracking-wide text-sm">NEWSLETTER</span>
                        <h1 class="text-4xl md:text-5xl font-bold mt-2 mb-4">
                            STAY <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">CONNECTED</span>
                        </h1>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Join our community. Subscribe to receive exclusive nominee announcements, inspiring stories of excellence, and critical updates on the B.I.D.E Workforce Summit.
                        </p>
                    </div>

                    <?php if(session('success')): ?>
                    <div class="bg-green-50 border border-green-200 text-green-800 px-6 py-4 rounded-lg mb-6 flex items-start">
                        <svg class="w-6 h-6 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="font-semibold">Successfully subscribed!</p>
                            <p class="text-sm mt-1"><?php echo e(session('success')); ?></p>
                        </div>
                    </div>
                    <?php endif; ?>

                    <form action="<?php echo e(route('newsletter.subscribe')); ?>" method="POST" class="space-y-6">
                        <?php echo csrf_field(); ?>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                <svg class="w-5 h-5 inline mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                                Enter your professional email address...
                            </label>
                            <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="your.email@organization.com">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-600 text-sm mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">CUSTOMIZE YOUR UPDATES:</p>
                            <div class="space-y-3">
                                <label class="flex items-start cursor-pointer group">
                                    <input type="checkbox" name="awards_news" value="1" checked
                                        class="mt-1 w-5 h-5 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                                    <div class="ml-3">
                                        <span class="font-medium text-gray-900 group-hover:text-purple-600 transition">Awards News & Nominee Announcements</span>
                                        <p class="text-sm text-gray-500">Be the first to know about nominations and winners</p>
                                    </div>
                                </label>

                                <label class="flex items-start cursor-pointer group">
                                    <input type="checkbox" name="summit_updates" value="1" checked
                                        class="mt-1 w-5 h-5 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                                    <div class="ml-3">
                                        <span class="font-medium text-gray-900 group-hover:text-purple-600 transition">Summit Updates & Speaker Reveals</span>
                                        <p class="text-sm text-gray-500">Get exclusive B.I.D.E Summit announcements</p>
                                    </div>
                                </label>

                                <label class="flex items-start cursor-pointer group">
                                    <input type="checkbox" name="partner_opportunities" value="1"
                                        class="mt-1 w-5 h-5 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                                    <div class="ml-3">
                                        <span class="font-medium text-gray-900 group-hover:text-purple-600 transition">Partner Opportunities & Offers</span>
                                        <p class="text-sm text-gray-500">Receive special opportunities from our partners</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="w-full px-8 py-4 bg-purple-600 hover:bg-purple-700 text-white font-bold rounded-lg transition shadow-lg flex items-center justify-center group">
                            SUBSCRIBE NOW
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </button>

                        <p class="text-xs text-gray-500 text-center">
                            We respect your inbox. Unsubscribe at any time.
                        </p>
                    </form>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-6 mt-16">
                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg text-gray-900 mb-2">NOMINEE ALERTS</h3>
                    <p class="text-gray-600 text-sm">
                        Be the first to know who is nominated for their excellence in the field of health & social care.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"/>
                            <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg text-gray-900 mb-2">INSPIRING STORIES</h3>
                    <p class="text-gray-600 text-sm">
                        Read powerful stories celebrating the achievements of B.A.M.E professionals.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg text-gray-900 mb-2">SUMMIT UPDATES</h3>
                    <p class="text-gray-600 text-sm">
                        Get timely information, speaker announcements, and schedules for the B.I.D.E Workforce Summit.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\thebamewebsite\resources\views/pages/newsletter.blade.php ENDPATH**/ ?>