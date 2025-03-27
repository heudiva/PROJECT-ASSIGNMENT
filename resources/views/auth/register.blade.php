<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    
    @include('auth/animations')

<main class="main ">
<div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0">
    <a href="{{ route('home') }}" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 text-white dark:text-white">
        <img src="https://flowbite.com/images/logo.svg" class="mr-4 h-11" alt="FlowBite Logo">
        <span>MYPROJECT</span>
    </a>
    <!-- Card -->
    <div class="cards w-full max-w-xl p-6 space-y-8 sm:p-8 rounded-lg shadow">
        <h2 class="text-2xl font-bold text-white dark:text-white">
            Create a Free Account
        </h2>
        <form  method="POST" action="{{ route('register') }}" class="mt-8 space-y-6" action="#">
            @csrf
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-white">Display Name</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="full name" value="{{ old('name') }}" required>
                @error('name')
                    <span class="text-red-500 font-semibold">{{ $message }}</span>
                @enderror
            </div>
            <!-- <div>
                <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white">Your email</label>
                <input type="email" name="email" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="name@company.com" value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-red-500 font-semibold">{{ $message }}</span>
                @enderror
            </div> -->
            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-white dark:text-white">Your username</label>
                <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="username" value="{{ old('username') }}" required>
                @error('username')
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
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-white dark:text-white">Confirm password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                @error('password_confirmation')
                    <span class="text-red-500 font-semibold">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-white dark:border-gray-600">
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

</x-guest-layout>