{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

{{--  --}}

<!doctype html>
<html lang="en" class="dark">
  <head><script src="/livereload.js?mindelay=10&amp;v=2&amp;port=1313&amp;path=livereload" data-no-instant defer></script>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
<meta name="author" content="Themesberg">
<meta name="generator" content="Hugo 0.132.2">

<title>REGISTER</title>

<link rel="canonical" href="http://localhost:1313/authentication/sign-up/">



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="http://localhost:1313//app.css">
<link rel="apple-touch-icon" sizes="180x180" href="http://localhost:1313/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="http://localhost:1313/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="http://localhost:1313/favicon-16x16.png">
<link rel="icon" type="image/png" href="http://localhost:1313/favicon.ico">
<link rel="manifest" href="http://localhost:1313/site.webmanifest">
<link rel="mask-icon" href="http://localhost:1313/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@">
<meta name="twitter:creator" content="@">
<meta name="twitter:title" content="Tailwind CSS Sign Up/Register Page - Flowbite">
<meta name="twitter:description" content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
<meta name="twitter:image" content="http://localhost:1313/images/og-image.png">

<!-- Facebook -->
<meta property="og:url" content="http://localhost:1313/authentication/sign-up/">
<meta property="og:title" content="Tailwind CSS Sign Up/Register Page - Flowbite">
<meta property="og:description" content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
<meta property="og:type" content="article">
<meta property="og:image" content="http://localhost:1313/images/og-image.png">
<meta property="og:image:type" content="image/png">


<link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
@vite(['resources/css/app.css','resources/js/app.js'])




<script>

    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
  </head>
  <body class="bg-gray-50 dark:bg-gray-800">

    @include('auth/animations')

<main class="main ">
<div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0">
    <a href="{{ route('home') }}" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 text-white dark:text-white">
        <img src="https://flowbite.com/images/logo.svg" class="mr-4 h-11" alt="FlowBite Logo">
        <span>WKSCHOOL</span>
    </a>
    <!-- Card -->
    <div class="cards w-full max-w-xl p-6 space-y-8 sm:p-8 rounded-lg shadow">
        <h2 class="text-2xl font-bold text-white dark:text-white">
            Create a Free Account
        </h2>
        <form  method="POST" action="{{ route('register') }}" class="mt-8 space-y-6" action="#">
            @csrf
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-white">Username</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="username" value="{{ old('name') }}" required>
                @error('name')
                    <span class="text-red-500 font-semibold">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white">Your email</label>
                <input type="email" name="email" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="name@company.com" value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-red-500 font-semibold">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-white dark:text-white">Your password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                @error('password')
                    <span class="text-red-500 font-semibold">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="confirm_password" class="block mb-2 text-sm font-medium text-white dark:text-white">Confirm password</label>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                @error('confirm_password')
                    <span class="text-red-500 font-semibold">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-white dark:border-gray-600" required>
                </div>
                <div class="ml-3 text-sm">
                    <label for="remember" class="font-medium text-white dark:text-white">I accept the <a href="#" class="text-primary-700 hover:underline dark:text-primary-500">Terms and Conditions</a></label>
                </div>
            </div>
            <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create account</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                Already have an account? <a href="{{ route('login') }}" class="text-primary-700 hover:underline dark:text-primary-500">Login here</a>
            </div>
        </form>
    </div>
</div>
</main>





    <script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="http://localhost:1313//app.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
  </body>
</html>
