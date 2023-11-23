<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
 @include('layout.header')
 @include('layout.search')
<br>
<section class="items-center lg:h-screen font-poppins text-gray-700">
    @foreach( $houses as $house)
        <x-house-item :$house />
    @endforeach
</section>
</body>
</html>
