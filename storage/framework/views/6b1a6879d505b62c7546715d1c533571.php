

<?php $__env->startSection('meta_title', 'Contact Us | B.A.M.E Health & Care Awards - Get in Touch'); ?>
<?php $__env->startSection('meta_description', 'Contact The National B.A.M.E Health & Care Awards team for inquiries about nominations, sponsorship, media requests, or general information. Email: info@bamehscawards.org'); ?>
<?php $__env->startSection('meta_keywords', 'contact BAME awards, healthcare awards inquiry, sponsorship opportunities, media contact, awards information, nomination help'); ?>
<?php $__env->startSection('canonical_url', route('contact')); ?>

<?php $__env->startSection('og_title', 'Contact B.A.M.E Health & Care Awards'); ?>
<?php $__env->startSection('og_description', 'Get in touch with our team for questions about the awards, summit, or partnership opportunities.'); ?>
<?php $__env->startSection('og_url', route('contact')); ?>

<?php $__env->startSection('twitter_title', 'Contact B.A.M.E Health & Care Awards'); ?>
<?php $__env->startSection('twitter_description', 'Reach out to our team for inquiries and support.'); ?>

<?php $__env->startSection('title', 'Get in Touch'); ?>

<?php $__env->startSection('content'); ?>

<section class="min-h-screen bg-gradient-to-br from-purple-900 via-purple-800 to-blue-900 text-white py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Get in <span class="text-teal-400">Touch</span>
                </h1>
                <p class="text-gray-200 text-lg">
                    Have a question about the awards, the summit, or partnership opportunities? We are here to help. Reach out to our team using the form below.
                </p>
            </div>

            <?php if(session('success')): ?>
            <div class="bg-green-600 text-white px-6 py-4 rounded-lg mb-8 flex items-center">
                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>

            <div class="grid lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2">
                    <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="space-y-6">
                        <?php echo csrf_field(); ?>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="full_name" class="block text-sm font-medium text-gray-300 mb-2">Full Name</label>
                                <input type="text" id="full_name" name="full_name" value="<?php echo e(old('full_name')); ?>" required
                                    class="w-full px-4 py-3 bg-purple-950 bg-opacity-50 border border-purple-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                                    placeholder="e.g., Sarah Williams">
                                <?php $__errorArgs = ['full_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-400 text-sm mt-1"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                                <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required
                                    class="w-full px-4 py-3 bg-purple-950 bg-opacity-50 border border-purple-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                                    placeholder="name@organisation.com">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-400 text-sm mt-1"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div>
                            <label for="organization" class="block text-sm font-medium text-gray-300 mb-2">Organisation / Trust</label>
                            <input type="text" id="organization" name="organization" value="<?php echo e(old('organization')); ?>"
                                class="w-full px-4 py-3 bg-purple-950 bg-opacity-50 border border-purple-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                                placeholder="e.g., NHS Trust or Company Name">
                            <?php $__errorArgs = ['organization'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-400 text-sm mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-300 mb-2">Subject</label>
                            <select id="subject" name="subject" required
                                class="w-full px-4 py-3 bg-purple-950 bg-opacity-50 border border-purple-700 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
                                <option value="">Select a topic</option>
                                <option value="General Inquiry" <?php echo e(old('subject') === 'General Inquiry' ? 'selected' : ''); ?>>General Inquiry</option>
                                <option value="Awards Process" <?php echo e(old('subject') === 'Awards Process' ? 'selected' : ''); ?>>Awards Process</option>
                                <option value="Summit Information" <?php echo e(old('subject') === 'Summit Information' ? 'selected' : ''); ?>>Summit Information</option>
                                <option value="Sponsorship" <?php echo e(old('subject') === 'Sponsorship' ? 'selected' : ''); ?>>Sponsorship</option>
                                <option value="Media & Press" <?php echo e(old('subject') === 'Media & Press' ? 'selected' : ''); ?>>Media & Press</option>
                                <option value="Technical Support" <?php echo e(old('subject') === 'Technical Support' ? 'selected' : ''); ?>>Technical Support</option>
                            </select>
                            <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-400 text-sm mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Message</label>
                            <textarea id="message" name="message" rows="6" required
                                class="w-full px-4 py-3 bg-purple-950 bg-opacity-50 border border-purple-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent resize-none"
                                placeholder="How can we help you today?"><?php echo e(old('message')); ?></textarea>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-400 text-sm mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <button type="submit" class="w-full md:w-auto px-8 py-4 bg-teal-600 hover:bg-teal-700 text-white font-bold rounded-lg transition shadow-lg">
                            Send Message
                        </button>
                    </form>
                </div>

                <div class="space-y-6">
                    <div class="bg-purple-900 bg-opacity-40 rounded-xl p-6 border border-purple-700">
                        <div class="w-12 h-12 bg-teal-500 bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-teal-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-2">General Inquiries</h3>
                        <p class="text-gray-400 text-sm mb-4">For questions about the awards process, dates, or general information.</p>
                        <a href="mailto:info@bamehscawards.org" class="text-teal-400 hover:text-teal-300 font-semibold text-sm break-all">
                            info@bamehscawards.org
                        </a>
                    </div>

                    <div class="bg-purple-900 bg-opacity-40 rounded-xl p-6 border border-purple-700">
                        <div class="w-12 h-12 bg-teal-500 bg-opacity-20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-teal-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Media & Press</h3>
                        <p class="text-gray-400 text-sm mb-4">For press passes, interview requests, and media assets.</p>
                        <a href="mailto:info@bamehscawards.org" class="text-teal-400 hover:text-teal-300 font-semibold text-sm break-all">
                            info@bamehscawards.org
                        </a>
                    </div>

                    <div class="bg-purple-900 bg-opacity-40 rounded-xl p-6 border border-purple-700">
                        <h3 class="font-bold text-lg mb-4">Follow our journey</h3>
                        <div class="flex space-x-3">
                            <a href="#" class="w-10 h-10 bg-purple-800 hover:bg-purple-700 rounded-lg flex items-center justify-center transition">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-purple-800 hover:bg-purple-700 rounded-lg flex items-center justify-center transition">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-purple-800 hover:bg-purple-700 rounded-lg flex items-center justify-center transition">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <p class="text-gray-400 mb-4">Looking for quick answers?</p>
                <a href="<?php echo e(route('faq')); ?>" class="inline-flex items-center text-teal-400 hover:text-teal-300 font-semibold">
                    View Frequently Asked Questions
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\thebamewebsite\resources\views/pages/contact.blade.php ENDPATH**/ ?>