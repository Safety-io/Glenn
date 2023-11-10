@extends('base')
@section('title', 'Home')
@section('content')
    @include('layout.header')



<section class="flex w-full mt-16 mb-16">
    <div class="rounded-lg w-4/6 px-16 pt-12 bg-white max-w-6xl mx-auto justify-center hover:drop-shadow-xl transition duration-700 hover:ease-in-out">
        <div class=" ">

            <form action="/search" method="POST">
            @csrf
            <div >
                <div class="pb-10">
                    <h2 class="text-xl font-sm text-black md:text-xl">
                        Search Form
                    </h2>
                </div>
                <div class="flex w-full">
                    <div class="w-full flex-wrap">
                        <div class="">
                            <div class="w-full p-3 md:flex-1">
                                <div class="flex flex-wrap -m-3">
                                    <div class="p-3 w-full md:w-1/2 {{--md:w-1/2 sm:w-1/2--}}">
                                        <label class="mb-2 text-md" for="city">City</label>
                                        <select
                                            class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors bg-blue-50 outline-blue-300 mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                            name="city" id="city">
                                            <option  class="py-3">All</option>
                                            @php
                                                $houses = \App\Models\House::orderBy('city', 'asc')->distinct()->get(['city']);
                                             @endphp
                                            @foreach($houses as $house)
                                                <option>{{ $house->city }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="p-3 w-full md:w-1/2 {{--md:w-1/2 sm:w-1/2--}}">
                                        <label for="standard">Standard</label>
                                        <select
                                            class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                            name="standard" id="standard">
                                            <option>All</option>
                                            @php
                                                $houses = \App\Models\House::orderBy('standard', 'asc')->distinct()->get(['standard']);
                                            @endphp
                                           @foreach($houses as $house)
                                                <option>{{ $house->standard }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                    <div class="p-3 w-full md:w-1/2 {{--md:w-1/2 sm:w-1/2--}}">
                                        <label for="price">Price</label><select
                                            class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                            name="monthly" id="price">
                                            <option>All</option>
                                            @php
                                                $houses = \App\Models\House::orderBy('monthly', 'asc')->distinct()->get(['monthly']);
                                             @endphp
                                            @foreach($houses as $house)
                                                <option>{{ $house->monthly }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="p-3 w-full md:w-1/2 {{--md:w-1/2 sm:w-1/2--}}">
                                        <label for="rent">Rent</label>
                                        <select
                                            class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                            name="rent" id="rent">
                                            <option>All</option>
                                            @php
                                                $houses = \App\Models\House::orderBy('rent', 'asc')->distinct()->get(['rent']);
                                            @endphp
                                            @foreach($houses as $house)
                                                <option>{{ $house->rent }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="p-3 w-full md:w-1/2 {{--md:w-1/2 sm:w-1/2--}}">
                                        <label for="deposit">Deposit</label>
                                        <select
                                            class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                            name="deposit" id="deposit">
                                            <option>All</option>
                                            @php
                                                $houses = \App\Models\House::orderBy('deposit', 'asc')->distinct()->get(['deposit']);
                                            @endphp
                                            @foreach($houses as $house)
                                                <option>{{ $house->deposit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="p-3 w-full md:w-1/2 {{--md:w-1/2 sm:w-1/2--}}">
                                        <label for="commision">Commision</label><select
                                            class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                            name="commission" id="commision">
                                            <option>All</option>
                                            @php
                                                $houses = \App\Models\House::orderBy('commission', 'asc')->distinct()->get(['commission']);
                                            @endphp
                                            @foreach($houses as $house)
                                                <option>{{ $house->commission }}</option>
                                            @endforeach
                                        </select>
                                    </div>
{{--                                  --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="w-full mt-4 mb-8">
                    <div class="flex flex-wrap justify-between">
                        <div class="w-full md:w-1/2 p-3">
                            <button
                                type="reset"
                                class="flex flex-wrap justify-center w-full px-4 py-2 text-sm font-medium text-blue-500 bg-white border border-blue-500 rounded-md dark:text-gray-300 dark:bg-gray-700 dark:hover:bg-gray-800 dark:border-gray-700 hover:bg-blue-100 ">
                                Clear Filter
                            </button>
                        </div>
                        <div class="w-full md:w-1/2 p-3">
                            <button
                                type="submit"
                                class="flex flex-wrap justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-blue-500 rounded-md hover:bg-blue-600 ">
                                 Apply Filter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <div class="pb-10">
                <h2 class="text-xl  font-sm text-black md:text-xl">
                    {{ $houses->count() .' Apartments Found' }}
                </h2>
            </div>
        </div>
    </div>
</section>
<br>

<section class="items-center lg:h-screen font-poppins text-gray-700">


    @foreach( $houses as $house)
    <div class="max-w-6xl px-4 mx-auto">
        <div class="  items-center   ">
            <div class="w-full mx-auto mb-16 sm:w-4/5 sm:mb-0">
                <div class="">
                    <div class="flex flex-wrap pb-8">
                        <div class="self-stretch w-full overflow-hidden lg:w-1/2 ">
                            <div class="h-96">
                                {{--Display fake image and real image located in storage folder fixutre image and--}}
                                <img class="object-cover w-full h-full"
                                                   src="{{ preg_match('/^(https?:\/\/)/', $house->image) == 1 ? $house->image: asset('storage/'.$house->image) }}" alt="house pic">
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2">
                            <div class="p-5 bg-white shadow lg:h-96">
                                <ul class=" lg:self-start">
                                    <li class="flex gap-x-3 items-center mb-3 font-medium ">
                                        <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" color="gray">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                            </svg>
                                        </a>
{{--                                        taille de  mots 20 --}}
                                        <span>Location : {{  $house->city}}</span>
                                    </li>
                                    <li class="flex gap-x-3 items-center mb-3 font-medium">
                                        <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" color="gray">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                            </svg>
                                        </a>
                                        <span>Standard : {{ ($house->standard) }}</span>
                                    </li>
                                    <li class="flex gap-x-3 items-center mb-3 font-medium">
                                        <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" color="gray">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                            </svg>
                                        </a>
                                        <span>Monthly : {{ ($house->monthly) . '$'}}</span>
                                    </li>
                                    <li class="flex gap-x-3 items-center mb-3  font-medium">
                                        <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" color="gray">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                            </svg>
                                        </a>
                                        <span>Commission :  {{ ($house->commission) }}</span>
                                    </li>
                                    <li class="flex gap-x-3 items-center mb-3  font-medium">
                                        <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" color="gray">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                            </svg>
                                        </a>
                                        <span>Rent :  {{ ($house->rent) }}</span>
                                    </li>
                                    <li class="flex gap-x-3 items-center mb-3  font-medium">
                                        <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" color="gray">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                            </svg>
                                        </a>
                                        <span>Deposit : {{ ($house->deposit) }}</span>
                                    </li>
                                    <li class="flex gap-x-3 items-center mb-3  font-medium">
                                        <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" color="gray">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                            </svg>
                                        </a>
{{--                                        created --}}
                                        <span>Uploaded : {{ $house->created = date('d-m-Y', strtotime($house->created))}}</span>
                                    </li>
                                    <li class="flex gap-x-3 items-center mb-3  font-medium">
                                        <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" color="{{ strtolower($house->house_statue) == "available" ? "green": "red" }}">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                            </svg>
                                        </a>
                                        <span>Statue : {{ $house->house_statue }}</span>
                                    </li>
                                </ul>
                                <div class="flex flex-wrap items-center ">
                                    <a href="https://wa.me/905338505827"
                                       class="px-6 py-4 mb-4 mr-2 text-xs font-semibold leading-none text-center text-blue-600 bg-blue-200 rounded hover:bg-blue-600 hover:text-gray-200 dark:bg-blue-800 dark:text-gray-200 dark:hover:bg-blue-700">
                                        Contact</a>
                                    <a href="#"
                                       class="px-6 py-4 mb-4 mr-2 text-xs font-semibold leading-none text-center text-blue-600 bg-blue-200 rounded hover:bg-blue-600 hover:text-gray-200 dark:bg-blue-800 dark:text-gray-200 dark:hover:bg-blue-700">
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endforeach
</section>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

@endsection
