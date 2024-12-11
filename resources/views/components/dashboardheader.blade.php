<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <title>{{ __('Tireslot Panel') }}</title>
 <link rel="icon" type="image/x-icon" href="/favicon.png" sizes="32x32">
 <link rel="icon" type="image/x-icon" href="/favicon_192.png" sizes="192x192">

 <link rel="stylesheet" href="/dist/css/dashboard.css">
</head>

<body>
 <x-alert />
