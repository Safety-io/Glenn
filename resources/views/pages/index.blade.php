<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
@include('layout.header')
<br>
<br>


@include('layout.search')

<section class="items-center lg:h-screen font-poppins text-gray-700">
    @foreach( $houses as $house)
        <x-house-item :$house />
    @endforeach
</section>









<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
