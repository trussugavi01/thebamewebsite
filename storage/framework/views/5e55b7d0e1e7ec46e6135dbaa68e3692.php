<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $__env->yieldContent('meta_title', config('app.name', 'B.A.M.E Health & Care Awards') . ' - Celebrating Excellence, Advancing Equity'); ?></title>
    
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'The National B.A.M.E Health & Care Awards celebrates excellence and advances equity for Black, Asian and Minority Ethnic professionals in UK health and social care.'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('meta_keywords', 'BAME awards, health care awards, diversity awards, NHS awards, healthcare professionals, ethnic minority, B.I.D.E Summit, health equity, social care, UK healthcare'); ?>">
    <meta name="author" content="The National B.A.M.E Health & Care Awards">
    <meta name="robots" content="<?php echo $__env->yieldContent('meta_robots', 'index, follow'); ?>">
    
    <link rel="canonical" href="<?php echo $__env->yieldContent('canonical_url', url()->current()); ?>">
    
    <meta property="og:site_name" content="B.A.M.E Health & Care Awards">
    <meta property="og:title" content="<?php echo $__env->yieldContent('og_title', config('app.name', 'B.A.M.E Health & Care Awards')); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('og_description', 'Celebrating excellence and advancing equity for Black, Asian and Minority Ethnic professionals in UK health and social care.'); ?>">
    <meta property="og:type" content="<?php echo $__env->yieldContent('og_type', 'website'); ?>">
    <meta property="og:url" content="<?php echo $__env->yieldContent('og_url', url()->current()); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('og_image', asset('images/bame-logo.png')); ?>">
    <meta property="og:locale" content="en_GB">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('twitter_title', config('app.name', 'B.A.M.E Health & Care Awards')); ?>">
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('twitter_description', 'Celebrating excellence and advancing equity in UK health and social care.'); ?>">
    <meta name="twitter:image" content="<?php echo $__env->yieldContent('twitter_image', asset('images/bame-logo.png')); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <style>
        [x-cloak] { display: none !important; }
    </style>
    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo $__env->yieldPushContent('structured_data'); ?>
</head>
<body class="antialiased" itemscope itemtype="http://schema.org/WebPage">
    <?php echo $__env->make('layouts.partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\thebamewebsite\resources\views/layouts/app.blade.php ENDPATH**/ ?>