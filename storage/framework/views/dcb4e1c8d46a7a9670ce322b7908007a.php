

<?php $__env->startSection('meta_title', 'Event Gallery | B.A.M.E Health & Care Awards - Photos & Highlights'); ?>
<?php $__env->startSection('meta_description', 'Browse photos and highlights from The National B.A.M.E Health & Care Awards and B.I.D.E Summit. Relive moments of celebration, inspiration, and connection from our events.'); ?>
<?php $__env->startSection('meta_keywords', 'BAME awards gallery, healthcare awards photos, event highlights, awards ceremony photos, diversity celebration, healthcare event gallery'); ?>
<?php $__env->startSection('canonical_url', route('gallery')); ?>

<?php $__env->startSection('og_title', 'Event Gallery | B.A.M.E Health & Care Awards'); ?>
<?php $__env->startSection('og_description', 'Reliving the inspiration, connection, and celebration of the National B.A.M.E Health & Care Awards and Workforce Summit.'); ?>
<?php $__env->startSection('og_url', route('gallery')); ?>

<?php $__env->startSection('twitter_title', 'B.A.M.E Awards Event Gallery'); ?>
<?php $__env->startSection('twitter_description', 'Moments of excellence from our awards and summit events.'); ?>

<?php $__env->startSection('title', 'Event Gallery - Moments of Excellence'); ?>

<?php $__env->startSection('content'); ?>

<section class="min-h-screen bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 text-white py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="inline-block bg-yellow-500 text-gray-900 px-4 py-2 rounded-full text-sm font-bold mb-4">
                EVENT GALLERY
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Moments of <span class="text-yellow-500">Excellence</span>
            </h1>
            <p class="text-gray-300 text-lg max-w-3xl mx-auto">
                Reliving the inspiration, connection, and celebration of the National B.A.M.E Health & Care Awards and Workforce Summit.
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <a href="<?php echo e(route('gallery')); ?>" 
               class="px-6 py-3 rounded-lg font-medium transition <?php echo e(!request('category') || request('category') === 'all' ? 'bg-yellow-500 text-gray-900' : 'bg-gray-800 text-white hover:bg-gray-700'); ?>">
                📸 All Photos
            </a>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('gallery', ['category' => $cat->slug])); ?>" 
               class="px-6 py-3 rounded-lg font-medium transition <?php echo e(request('category') === $cat->slug ? 'bg-yellow-500 text-gray-900' : 'bg-gray-800 text-white hover:bg-gray-700'); ?>">
                <?php echo e($cat->name); ?>

            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php if($images->count() > 0): ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4" x-data="{ 
            lightboxOpen: false, 
            currentImage: null,
            currentIndex: 0,
            images: <?php echo e($images->map(fn($img) => ['url' => asset('storage/' . $img->image_path), 'title' => $img->title, 'description' => $img->description])->toJson()); ?>

        }">
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div @click="lightboxOpen = true; currentImage = <?php echo e($loop->index); ?>; currentIndex = <?php echo e($loop->index); ?>" 
                 class="group relative overflow-hidden rounded-xl cursor-pointer <?php echo e($loop->index % 5 === 0 ? 'md:col-span-2 md:row-span-2' : ''); ?>">
                <img src="<?php echo e($image->image_url); ?>" 
                     alt="<?php echo e($image->title); ?>" 
                     class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
                     style="min-height: 300px;">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-xl font-bold text-white mb-2"><?php echo e($image->title); ?></h3>
                        <?php if($image->description): ?>
                        <p class="text-gray-300 text-sm"><?php echo e($image->description); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- Lightbox Modal -->
            <div x-show="lightboxOpen" 
                 x-cloak
                 @keydown.escape.window="lightboxOpen = false"
                 @keydown.arrow-left.window="currentIndex = currentIndex > 0 ? currentIndex - 1 : images.length - 1"
                 @keydown.arrow-right.window="currentIndex = currentIndex < images.length - 1 ? currentIndex + 1 : 0"
                 class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-95 p-4"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0">
                
                <!-- Close Button -->
                <button @click="lightboxOpen = false" 
                        class="absolute top-4 right-4 text-white hover:text-gray-300 transition z-50">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <!-- Previous Button -->
                <button @click="currentIndex = currentIndex > 0 ? currentIndex - 1 : images.length - 1"
                        class="absolute left-4 top-1/2 -translate-y-1/2 text-white hover:text-gray-300 transition bg-black bg-opacity-50 rounded-full p-3 z-50">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <!-- Next Button -->
                <button @click="currentIndex = currentIndex < images.length - 1 ? currentIndex + 1 : 0"
                        class="absolute right-4 top-1/2 -translate-y-1/2 text-white hover:text-gray-300 transition bg-black bg-opacity-50 rounded-full p-3 z-50">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>

                <!-- Image Container -->
                <div class="max-w-6xl w-full max-h-[90vh] flex flex-col items-center">
                    <img :src="images[currentIndex].url" 
                         :alt="images[currentIndex].title"
                         class="max-w-full max-h-[80vh] object-contain rounded-lg shadow-2xl">
                    
                    <!-- Image Info -->
                    <div class="mt-4 text-center">
                        <h3 class="text-2xl font-bold text-white mb-2" x-text="images[currentIndex].title"></h3>
                        <p class="text-gray-300" x-text="images[currentIndex].description" x-show="images[currentIndex].description"></p>
                        <p class="text-gray-400 text-sm mt-2">
                            <span x-text="currentIndex + 1"></span> / <span x-text="images.length"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <nav class="inline-flex items-center space-x-2">
                <button class="px-4 py-2 bg-gray-800 hover:bg-gray-700 rounded-lg transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button class="px-4 py-2 bg-yellow-500 text-gray-900 font-bold rounded-lg">1</button>
                <button class="px-4 py-2 bg-gray-800 hover:bg-gray-700 rounded-lg transition">2</button>
                <button class="px-4 py-2 bg-gray-800 hover:bg-gray-700 rounded-lg transition">3</button>
                <span class="px-4 py-2 text-gray-400">...</span>
                <button class="px-4 py-2 bg-gray-800 hover:bg-gray-700 rounded-lg transition">8</button>
                <button class="px-4 py-2 bg-gray-800 hover:bg-gray-700 rounded-lg transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </nav>
        </div>
        <?php else: ?>
        <div class="text-center py-20">
            <svg class="w-20 h-20 text-gray-600 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <h3 class="text-2xl font-bold text-gray-300 mb-2">No Images Yet</h3>
            <p class="text-gray-400">Gallery images will be added soon. Check back after the event!</p>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\thebamewebsite\resources\views/pages/gallery.blade.php ENDPATH**/ ?>