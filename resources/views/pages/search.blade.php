<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    @include('layout.header')
    <main class="container mx-auto w-5/6 max-w-4xl">
        @include('layout.search')
        @if($houses->count() == 0)
            <div class="flex justify-center items-center">
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-4xl font-bold text-[#7d5700]">No Apartments Found</h1>
                    <img src="{{ asset('/imgs/Empty.png') }}" alt="no apartments found" class="w-96 h-96">
                    <a href="{{ route('pages.index') }}" class="text-[#ba1a1a]">Go Back</a>
                </div>
            </div>
        @else
            <h1 class="mb-4 text-lg font-bold text-[#4e6543]">{{$houses->count() }} {{ $houses->count() == 1 ? 'apartment was found': "apartments were found" }} </h1>
            @foreach( $houses as $house)
                <livewire:house-item :house="$house" :key="$house->id" />
            @endforeach
        @endif

        <div>{{ $houses->links() }}</div>
    </main>
    <x-footer />
</body>
</html>
