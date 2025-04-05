<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>
<!-- Select All Checkbox -->
<input type="checkbox" id="checkbox-all" class="w-4 h-4 border-gray-300 rounded bg-gray-50">

<!-- Table of Users -->
<table>
    <tbody>
        <tr>
            <td><input type="checkbox" class="user-checkbox" data-id="1"></td>
            <td>John Doe</td>
        </tr>
        <tr>
            <td><input type="checkbox" class="user-checkbox" data-id="2"></td>
            <td>Jane Smith</td>
        </tr>
        <tr>
            <td><input type="checkbox" class="user-checkbox" data-id="3"></td>
            <td>Michael Brown</td>
        </tr>
    </tbody>
</table>

<!-- Delete Selected Users Button -->
<button id="delete-selected-btn" class="bg-red-600 text-white px-3 py-2 rounded-lg">
    Delete Selected
</button>

<!-- CSRF Token for Laravel (Include in <head>) -->
<meta name="csrf-token" content="{{ csrf_token() }}">


<script>
    $(document).ready(function () {
    // Select/Deselect All Users
    $('#checkbox-all').on('change', function () {
        $('.user-checkbox').prop('checked', $(this).prop('checked'));
    });

    // Uncheck "Select All" if any user checkbox is unchecked
    $(document).on('change', '.user-checkbox', function () {
        $('#checkbox-all').prop('checked', $('.user-checkbox:checked').length === $('.user-checkbox').length);
    });


});

</script>

</body>
</html>
