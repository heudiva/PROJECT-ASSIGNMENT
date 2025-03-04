<!DOCTYPE html>
<html>
<head>
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
<body class="bg-gray-50 dark:bg-gray-800">
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif
{{ $slot }}
</body>
</html>