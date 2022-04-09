<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Athletic Planet</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/style/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/style/icons.css') }}" />
    <!-- <script src="{{ url('/js/jquery.min.js') }}"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <style>
    </style>
</head>
<body>
  <!--preloader  -->
  <!--  -->
  <!-- uparrow -->
  <!--  -->
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
  </body>