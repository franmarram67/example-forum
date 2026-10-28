<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @fonts
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="font-serif bg-linear-to-b from-hallow-orange-1-lighter to-hallow-orange-1-lighter-2 h-screen">
      <header class="py-4 px-16 w-full shadow-[0_2px_8px_var(--color-hallow-orange-1)]/50 bg-hallow-orange-1/10 backdrop-blur-sm flex justify-between items-center">
        <h1 class="text-3xl font-bold">🎃 Hallow Forum</h1>
        <div>
          
        </div>
      </header>
  </body>
</html>
