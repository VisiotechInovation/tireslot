<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
 @if (app()->has('global_site_name'))
  <meta name="author" content="{{ app('global_site_name') }}">
 @endif
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
 <title>{{ $title }}</title>
 @if (app()->has('global_script_head-top'))
  {!! app('global_script_head-top') !!}
 @endif
 <meta name="description" content="{{ $description }}">

 <link rel="alternate" hreflang="{{ app()->getLocale() }}" href="{{ route('home') }}">
 {{-- <link rel="apple-touch-icon" sizes="180x180" href="/images/store/svg/apple-touch-icon.png"> --}}
 <link rel="icon" type="image/x-icon" href="/favicon.png" sizes="32x32">
 <link rel="icon" type="image/x-icon" href="/favicon_192.png" sizes="192x192">
 <link rel="manifest" href="/images/store/svg/site.webmanifest">
 {{-- <link rel="mask-icon" href="/images/store/svg/safari-pinned-tab.svg" color="#333333"> --}}
 {{-- <link rel="shortcut icon" href="/images/store/svg/favicon.ico"> --}}
 <meta name="msapplication-TileColor" content="#fafafa">
 <meta name="msapplication-config" content="/images/store/svg/browserconfig.xml">
 <meta name="theme-color" content="#fafafa">

 {{-- dinamical image playload --}}
 @if ($preload != '')
  <link rel="preload" href="{{ $preload }}" as="image">
 @endif
 {{-- favicon end --}}

 <link rel="canonical" href="{{ $canonical }}">

 <?php
 $theme = app()->has('global_theme') ? app('global_theme') : 'store';
 $href = '/dist/css/' . $theme . '.css';
 ?>
 <link rel="preload" href="{{ $href }}" as="style">
 <link rel="stylesheet" href="{{ $href }}" async>
 @if (app()->has('global_site_name'))
  <meta property="og:site_name" content="{{ app('global_site_name') }}">
 @endif
 <meta property="og:locale" content="{{ env('APP_LOCALE') }}">
 <!-- Open Graph / Facebook -->
 <meta property="og:url" content="{{ config('app.url') . '/' . $canonical }}" />
 <meta property="og:type" content="website" />
 <meta property="og:image" content="{{ url('/' . $image) }}" />
 <meta property="og:title" content="{{ $title }}" />
 <meta property="og:description" content="{{ $description }}" />
 <!-- Twitter -->
 <meta property="twitter:url" content="{{ config('app.url') . '/' . $canonical }}" />
 <meta property="twitter:card" content="summary_large_image" />
 <meta property="twitter:image" content="{{ url('/' . $image) }}" />
 <meta property="twitter:title" content="{{ $title }}" />
 <meta property="twitter:description" content="{{ $description }}" />


 @if (app()->has('global_script_head-bottom'))
  {!! app('global_script_head-bottom') !!}
 @endif
 @livewireStyles
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
 @if (app()->has('global_script_body-top'))
  {!! app('global_script_body-top') !!}
 @endif
