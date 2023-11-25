<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
 @include('layout.header')
 <br>
 <main class="container mx-auto w-4/6 max-w-4xl">
 @include('layout.search')
     {{--
<section class="items-center lg:h-screen font-poppins text-gray-700">

    <div class="max-w-6xl px-4 mx-auto">
        <div class="items-center">
            <div class="w-full mx-auto mb-16 sm:w-4/5 sm:mb-0">--}}
                @if($houses->count() == 0)
                    <div class="flex justify-center items-center">
                        <div class="flex flex-col justify-center items-center">
                            <h1 class="text-4xl font-bold text-gray-700">No Apartments Found</h1>
                            <img src="{{ asset('/imgs/Empty.png') }}" alt="no apartments found" class="w-96 h-96">
                            <a href="{{ route('pages.index') }}" class="text-blue-700 hover:text-blue-800">Go Back</a>
                        </div>
                    </div>
                @else
                    @foreach( $houses as $house)
                        <x-house-item :$house />
                    @endforeach
                @endif
            {{--</div>
        </div>
    </div>
</section>--}}
 </main>
</body>
</html>
