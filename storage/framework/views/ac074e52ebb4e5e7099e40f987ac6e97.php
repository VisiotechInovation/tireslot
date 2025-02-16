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

 <style>
  .promo-section {
  padding: 60px 0;
  width: 100%;
  text-align: center;
  position: relative;
  overflow: hidden;

  .container {
    margin: 0 auto;
    padding: 0 15px;
  }

  .image-wrapper {
    position: relative;
    width: 100%;
    height: 250px; /* Set fixed height for desktop */
    border-radius: 8px;
    overflow: hidden; /* Ensures the image is confined within the wrapper */
    transition: transform 0.5s ease;

    .promo-image {
      width: 100%;
      height: 100%;
      object-fit: cover; /* Ensures the image covers the area without distortion */
      transition: transform 0.5s ease;
    }

    &:hover .promo-image {
      transform: scale(1.05); /* Zoom the image on hover */
    }
  }

  .promo-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 8px;
    max-width: 80%;
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.3s ease;
  }

  .promo-title {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 10px;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
  }

  .promo-description {
    font-size: 18px;
    margin-bottom: 20px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
  }

  /* Desktop styles */
  @media screen and (min-width: 1024px) {
    .image-wrapper {
      height: 250px;
    }

    .promo-section:hover .promo-text {
      opacity: 1;
      transform: translate(-50%, -50%);
    }
  }

  /* Mobile styles */
  @media screen and (max-width: 1024px) {
    .image-wrapper {
      height: 200px; /* Adjusted height on mobile */
    }

    .promo-title {
      font-size: 28px; /* Smaller title on mobile */
    }

    .promo-description {
      font-size: 16px; /* Smaller description on mobile */
    }

    .promo-section:hover .promo-text {
      opacity: 1;
      transform: translate(-50%, -50%);
    }
  }
}
 </style>
</head>

<body id="body">
 <?php if(app()->has('global_script_body-top')): ?>
  <?php echo app('global_script_body-top'); ?>

 <?php endif; ?>
<?php /**PATH D:\tireslot\resources\views/components/store-head.blade.php ENDPATH**/ ?>