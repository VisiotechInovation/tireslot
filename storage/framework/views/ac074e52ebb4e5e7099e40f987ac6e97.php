<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
 <?php if(app()->has('global_site_name')): ?>
  <meta name="author" content="<?php echo e(app('global_site_name')); ?>">
 <?php endif; ?>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
 <title><?php echo e($title); ?></title>
 <?php if(app()->has('global_script_head-top')): ?>
  <?php echo app('global_script_head-top'); ?>

 <?php endif; ?>
 <meta name="description" content="<?php echo e($description); ?>">

 <link rel="alternate" hreflang="<?php echo e(app()->getLocale()); ?>" href="<?php echo e(route('home')); ?>">
 
 <link rel="icon" type="image/x-icon" href="/favicon.png" sizes="32x32">
 <link rel="icon" type="image/x-icon" href="/favicon_192.png" sizes="192x192">
 <link rel="manifest" href="/images/store/svg/site.webmanifest">
 
 
 <meta name="msapplication-TileColor" content="#fafafa">
 <meta name="msapplication-config" content="/images/store/svg/browserconfig.xml">
 <meta name="theme-color" content="#fafafa">

 
 <?php if($preload != ''): ?>
  <link rel="preload" href="<?php echo e($preload); ?>" as="image">
 <?php endif; ?>
 

 <link rel="canonical" href="<?php echo e($canonical); ?>">

 <?php
 $theme = app()->has('global_theme') ? app('global_theme') : 'store';
 $href = '/dist/css/' . $theme . '.css';
 ?>
 <link rel="preload" href="<?php echo e($href); ?>" as="style">
 <link rel="stylesheet" href="<?php echo e($href); ?>" async>
 <?php if(app()->has('global_site_name')): ?>
  <meta property="og:site_name" content="<?php echo e(app('global_site_name')); ?>">
 <?php endif; ?>
 <meta property="og:locale" content="<?php echo e(env('APP_LOCALE')); ?>">
 <!-- Open Graph / Facebook -->
 <meta property="og:url" content="<?php echo e(config('app.url') . '/' . $canonical); ?>" />
 <meta property="og:type" content="website" />
 <meta property="og:image" content="<?php echo e(url('/' . $image)); ?>" />
 <meta property="og:title" content="<?php echo e($title); ?>" />
 <meta property="og:description" content="<?php echo e($description); ?>" />
 <!-- Twitter -->
 <meta property="twitter:url" content="<?php echo e(config('app.url') . '/' . $canonical); ?>" />
 <meta property="twitter:card" content="summary_large_image" />
 <meta property="twitter:image" content="<?php echo e(url('/' . $image)); ?>" />
 <meta property="twitter:title" content="<?php echo e($title); ?>" />
 <meta property="twitter:description" content="<?php echo e($description); ?>" />


 <?php if(app()->has('global_script_head-bottom')): ?>
  <?php echo app('global_script_head-bottom'); ?>

 <?php endif; ?>
 <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body id="body">
 <?php if(app()->has('global_script_body-top')): ?>
  <?php echo app('global_script_body-top'); ?>

 <?php endif; ?>
<?php /**PATH D:\tireslot\resources\views/components/store-head.blade.php ENDPATH**/ ?>