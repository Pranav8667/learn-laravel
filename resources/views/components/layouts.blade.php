<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">

<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->

<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="data:image/jpeg;base64,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" alt="Your Company" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
               {{-- ep 5 nav link active using $attributes and $slot--}}
              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/about" :active="request()->is('about')">About Us</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')">Contact Us</x-nav-link>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block md:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" aria-current="page" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Home</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About Us</a>
        <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact Us</a>
      </div>
  </nav>

  <header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
     {{-- Slotted Content Goes Here --}}
     {{ $slot }}
    </div>
  </main>
</div>



    {{-- <nav>
        <x-nav-link href='/'>Home</x-nav-link>
        <x-nav-link href='/about'>About Us</x-nav-link>
        <x-nav-link href='/contact'>Contact Us</x-nav-link>
    </nav> --}}
     {{-- both are same this use for home page content showing in home route --}}
    {{-- {{ $slot }} --}}
</body>

</html>
