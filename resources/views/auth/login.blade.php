<x-guest-layout>
<link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
<x-errors />
@include('auth/animations')

<main class="main ">
  <div class=" flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 ">
    <a href="{{ route('home') }}" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 text-white dark:text-white">
        <img src="https://flowbite.com/images/logo.svg" class="mr-4 h-11" alt="FlowBite Logo">
        <span>MYPROJECT</span>
    </a>
    <!-- Card -->
    <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 rounded-lg shadow cards">
        <h2 class="text-2xl font-bold text-white dark:text-white">
            Sign in to platform
        </h2>
        <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-white dark:text-white">Your username</label>
                <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300  sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('username') is-invalid @enderror " placeholder="username"  value="{{ old('username') }}" required>
                @error('username')
                        <span class="invalid-feedback text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-white dark:text-white">Your password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
            </div>
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800  dark:border-gray-600" >
                </div>
                <div class="ml-3 text-sm">
                <label for="remember" class="font-medium text-white dark:text-white">Remember me</label>
                </div>
                <a href="{{ route('password.request') }}" class="ml-auto text-sm text-primary-700 hover:underline dark:text-primary-500">Forgot Password?</a>
            </div>
            <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login to your account</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                Not registered? <a href="{{ route('register') }}" class="text-primary-700 hover:underline dark:text-primary-500">Create account</a>
            </div>
        </form>
    </div>
</div>
</main>
</x-guest-layout>