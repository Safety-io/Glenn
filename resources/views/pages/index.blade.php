<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    @include('layout.header')

    <main class="container mx-auto w-5/6 max-w-4xl">
        @include('layout.search')
        @if($houses->count() == 0)
            <div class="flex justify-center items-center">
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-4xl font-bold text-gray-700">No Apartments Found</h1>
                    <img src="{{ asset('/imgs/Empty.png') }}" alt="no apartments found" class="w-96 h-96">
                    {{--<a href="{{ route('pages.index') }}" class="text-blue-700 hover:text-blue-800">Go Back</a>--}}
                </div>
            </div>
        @else
            <section class="">
                @foreach( $houses as $house)
                    {{--<x-house-item :$house />--}}
                    <livewire:house-item :house="$house" :key="$house->id" {{--lazy--}} />
                @endforeach
            </section>
        @endif
        <div>{{ $houses->links() }}</div>
    </main>

    <x-footer />
</body>
</html>
