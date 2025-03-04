<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PROJECT-ASSIGNMENT</title>
  @vite(['resources/css/app.css','resources/js/app.js'])

  <script>
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
</head>
<body class="bg-gray-50 ">
    @include('website.components.navbar')
  <!-- Navbar -->
  <nav class="bg-blue-900 text-white">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <div class="text-lg font-bold ">PROJECT-ASSIGNMENT</div>
      <ul class="hidden md:flex space-x-8">
        <li><a href="#" class="hover:text-yellow-400">Home</a></li>
        <li><a href="#" class="hover:text-yellow-400">About</a></li>
        <li><a href="#" class="hover:text-yellow-400">Admissions</a></li>
        <li><a href="#" class="hover:text-yellow-400">Academics</a></li>
        <li><a href="#" class="hover:text-yellow-400">Contact</a></li>
      </ul>
      <div class="div">
        {{-- @guest
          <a href="{{ route('login') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</a>
          <a href="{{ route('register') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</a>
          @endguest --}}

          @auth
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
        @endauth

        </div>
      <div class="md:hidden">
        <button class="text-white focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
        </button>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="bg-blue-800 text-white">
    <div class="container mx-auto flex flex-col items-center text-center py-20 px-6">
      <h1 class="text-4xl font-bold">Welcome to PROJECT-ASSIGNMENT</h1>
      <p class="mt-4 text-lg">Empowering students for a brighter future</p>
      <a href="{{ route('login') }}" class="mt-6 bg-yellow-400 text-blue-900 px-6 py-3 rounded font-semibold hover:bg-yellow-500">
        Get Product
      </a>
    </div>
  </header>

  <!-- Features Section -->
  <section class="container mx-auto py-16 px-6">
    <h2 class="text-3xl font-bold text-center mb-10 dark:text-gray-200">Why Choose Us?</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="bg-white rounded-lg shadow-lg p-6">
        <h3 class="text-xl font-semibold mb-2">Experienced Faculty</h3>
        <p class="text-gray-600">Learn from industry leaders and dedicated professionals.</p>
      </div>
      <!-- Card 2 -->
      <div class="bg-white rounded-lg shadow-lg p-6">
        <h3 class="text-xl font-semibold mb-2">World-Class Facilities</h3>
        <p class="text-gray-600">State-of-the-art infrastructure for a seamless learning experience.</p>
      </div>
      <!-- Card 3 -->
      <div class="bg-white rounded-lg shadow-lg p-6">
        <h3 class="text-xl font-semibold mb-2">Diverse Programs</h3>
        <p class="text-gray-600">Explore a variety of programs designed for your success.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  @include('website.components.footer')

</body>
</html>
