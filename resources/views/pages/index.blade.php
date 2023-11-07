<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

<section class="bg-white">
    <div class="max-w-6xl px-4 mx-auto" x-data="{open:false}">
        <nav class="flex items-center justify-between py-2">
            <a href="" class="text-md font-medium leading-none  text-black">GNPropertie</a>
            <div class="flex lg:hidden">
                <a href="#"
                   class="inline-block px-4 py-3 mr-2 text-xs font-semibold leading-none text-blue-600 border border-blue-400 rounded dark:hover:text-blue-300 dark:text-gray-400 dark:border-gray-400 hover:text-blue-700 hover:border-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </a>
                <button
                    class="flex items-center px-3 py-2 text-blue-600 border border-blue-400 rounded dark:text-gray-400 hover:text-blue-800 hover:border-blue-300 dark:border-gray-400 lg:hidden"
                    @click="open =true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>

            </div>

            <ul class="hidden lg:w-auto lg:space-x-12 lg:items-center lg:flex ">
                <li><a href="" class="text-sm text-black font-medium">Home</a>
                </li>
                <li><a href=""  class="text-sm text-black font-medium">About us</a>
                </li>
            </ul>
            <div class="hidden lg:flex">
                <a href=""
                   class="inline-block px-4 py-3 mr-2 text-sm font-semibold leading-none text-gray-100 bg-blue-600 border border-blue-200 rounded dark:hover:border-blue-400 dark:hover:bg-blue-400 dark:border-blue-300 dark:bg-blue-300 dark:text-gray-700 hover:bg-blue-700">
                    Contact
                </a>

            </div>
        </nav>
        <!-- Mobile Sidebar -->
        <div class="fixed inset-0 w-full bg-gray-800 opacity-25 dark:bg-gray-400 lg:hidden"
             :class="{'translate-x-0 ease-in-opacity-100' :open===true, '-translate-x-full ease-out opacity-0' : open===false}">
        </div>
        <div class="absolute inset-0 z-10 h-screen p-3 text-gray-700 duration-500 transform shadow-md dark:bg-gray-800 bg-blue-50 w-80 lg:hidden lg:transform-none lg:relative"
             :class="{'translate-x-0 ease-in-opacity-100' :open===true, '-translate-x-full ease-out opacity-0' : open===false}">
            <div class="flex justify-between px-5 p-30 py-2">
                <a class="text-2xl font-bold dark:text-gray-400" href="#">GNPropertie</a>
                <button class="rounded-md hover:text-blue-300 lg:hidden dark:text-gray-400" @click="open=false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                         class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>
            </div>

            <ul class="px-5 text-left mt-7">
                <li class="pb-3">
                    <a href="" class="text-sm text-gray-700 hover:text-blue-400 dark:text-gray-100">Home</a>
                </li>
                <li class="pb-3">
                    <a href="" class="text-sm text-gray-700 hover:text-blue-400 dark:text-gray-400">About us</a>
                </li>
            </ul>
            <div class="px-4 mt-7 lg:hidden">

                <a href=""
                   class="inline-block w-full py-3 mr-2 text-xs font-medium leading-none text-center text-gray-100 bg-blue-600 border border-blue-200 rounded px-7 dark:hover:border-blue-400 dark:hover:bg-blue-400 dark:border-blue-300 dark:bg-blue-300 dark:text-gray-700 hover:bg-blue-700">
                    Contact
                </a>
            </div>
        </div>
    </div>
</section>

{{--
<section class=" font-poppins bg-black/50 py-2">
    <div class="max-w-6xl px-1  mx-auto lg:px-6 ">
        <div class="formbold-main-wrapper ">
            <div class="formbold-form-wrapper">
                <form action="/search" class=" p-12 " method="POST">
                    @csrf
                    <div class="formbold-form-step-1 active">
                        <div class="formbold-input-flex">
                            <div>
                                <label for="city" class="formbold-form-label"> City </label>
                                <select name="search" id="city" class="formbold-form-input">
                                    <option>All</option>
                                    @foreach( $houses as $house)
                                        <option value="{{ $house->id }}">{{ $house->city }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="formbold-input-flex">
                            <div>
                            <label for="standard" class="formbold-form-label"> Standard </label>
                            <select name="standard" id="standard" class="formbold-form-input">
                                <option>All</option>
                                @foreach( $houses as $house)
                                    <option value="{{ $house->id }}">{{ $house->standard }}</option>
                                @endforeach
                            </select>
                            </div>
                            <div>
                            <label for="monthly" class="formbold-form-label"> Prix </label>
                            <select name="monthly" id="monthly" class="formbold-form-input">
                                <option>All</option>
                                @foreach( $houses as $house)
                                    <option value="{{ $house->id }}">{{ $house->monthly }}</option>
                                @endforeach
                            </select>
                            </div>
                            </div>
                        </div>

                        <div class="formbold-input-flex">
                            <div>
                                <label for="rent" class="formbold-form-label">Rent </label>
                                <select name="rent" id="rent" class="formbold-form-input">
                                    <option>All</option>
                                    @foreach( $houses as $house)
                                        <option value="{{ $house->id }}">{{ $house->rent }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <div>
                                    <label for="deposit" class="formbold-form-label">Rent </label>
                                    <select name="deposit" id="deposit" class="formbold-form-input">
                                        <option>All</option>
                                        @foreach( $houses as $house)
                                            <option value="{{ $house->id }}">{{ $house->deposit }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div>
                                <div>
                                    <label for="commission" class="formbold-form-label">Commission </label>
                                    <select name="commission" id="commission" class="formbold-form-input">
                                        <option>All</option>
                                        @foreach( $houses as $house)
                                            <option value="{{ $house->id }}">{{ $house->commission }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div>
                            <label for="address" class="formbold-form-label"> Address </label>
                            <input
                                type="text"
                                name="address"
                                id="address"
                                class="formbold-form-input"
                            />
                        </div>
                    </div>
button
                    <div class="formbold-form-btn-wrapper">
                        <button type="submit" class="formbold-btn">Search</button>
                        <button type="reset" class="formbold-btn ">Reset</button>
                    </div>
                </form>
            </div>
        </div>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                font-family: "Inter", sans-serif;
            }
            .formbold-main-wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 48px;
            }

            .formbold-form-wrapper {
                margin: 0 auto;
                max-width: 550px;
                width: 100%;
                background: white;
            }

            .formbold-steps {
                padding-bottom: 18px;
                margin-bottom: 35px;
                border-bottom: 1px solid #DDE3EC;
            }
            .formbold-steps ul {
                padding: 0;
                margin: 0;
                list-style: none;
                display: flex;
                gap: 40px;
            }
            .formbold-steps li {
                display: flex;
                align-items: center;
                gap: 14px;
                font-weight: 500;
                font-size: 16px;
                line-height: 24px;
                color: #536387;
            }
            .formbold-steps li span {
                display: flex;
                align-items: center;
                justify-content: center;
                background: #DDE3EC;
                border-radius: 50%;
                width: 36px;
                height: 36px;
                font-weight: 500;
                font-size: 16px;
                line-height: 24px;
                color: #536387;
            }
            .formbold-steps li.active {
                color: #07074D;;
            }
            .formbold-steps li.active span {
                background: #6A64F1;
                color: #FFFFFF;
            }

            .formbold-input-flex {
                display: flex;
                gap: 20px;
                margin-bottom: 22px;
            }
            .formbold-input-flex > div {
                width: 50%;
            }
            .formbold-form-input {
                width: 100%;
                padding: 13px 22px;
                border-radius: 5px;
                border: 1px solid #DDE3EC;
                background: #FFFFFF;
                font-weight: 500;
                font-size: 16px;
                color: #536387;
                outline: none;
                resize: none;
            }
            .formbold-form-input:focus {
                border-color: #6a64f1;
                box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
            }
            .formbold-form-label {
                color: #07074D;
                font-weight: 500;
                font-size: 14px;
                line-height: 24px;
                display: block;
                margin-bottom: 10px;
            }

            .formbold-form-confirm {
                border-bottom: 1px solid #DDE3EC;
                padding-bottom: 35px;
            }
            .formbold-form-confirm p {
                font-size: 16px;
                line-height: 24px;
                color: #536387;
                margin-bottom: 22px;
                width: 75%;
            }
            .formbold-form-confirm > div {
                display: flex;
                gap: 15px;
            }

            .formbold-confirm-btn {
                display: flex;
                align-items: center;
                gap: 10px;
                background: #FFFFFF;
                border: 0.5px solid #DDE3EC;
                border-radius: 5px;
                font-size: 16px;
                line-height: 24px;
                color: #536387;
                cursor: pointer;
                padding: 10px 20px;
                transition: all .3s ease-in-out;
            }
            .formbold-confirm-btn {
                box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.12);
            }
            .formbold-confirm-btn.active {
                background: #6A64F1;
                color: #FFFFFF;
            }

            .formbold-form-step-1,
            .formbold-form-step-2,
            .formbold-form-step-3 {
                display: none;
            }
            .formbold-form-step-1.active,
            .formbold-form-step-2.active,
            .formbold-form-step-3.active {
                display: block;
            }

            .formbold-form-btn-wrapper {
                display: flex;
                align-items: center;
                justify-content: flex-end;
                gap: 25px;
                margin-top: 25px;
            }
            .formbold-back-btn {
                cursor: pointer;
                background: #FFFFFF;
                border: none;
                color: #07074D;
                font-weight: 500;
                font-size: 16px;
                line-height: 24px;
                display: none;
            }
            .formbold-back-btn.active {
                display: block;
            }
            .formbold-btn {
                display: flex;
                align-items: center;
                gap: 5px;
                font-size: 16px;
                border-radius: 5px;
                padding: 10px 25px;
                border: none;
                font-weight: 500;
                background-color: #6A64F1;
                color: white;
                cursor: pointer;
            }
            .formbold-btn:hover {
                box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
            }

        </style>
    </div>
</section>
--}}


<section class="flex w-full mt-16 mb-16">
    <div class="rounded-lg w-4/6 px-16 pt-12 bg-white max-w-6xl mx-auto justify-center hover:drop-shadow-xl transition duration-700 hover:ease-in-out">
        <div class=" ">
            <div >
                <div class="pb-10">
                    <h2 class="text-xl font-sm text-black md:text-xl">
                        Search Form
                    </h2>
                </div>
                <div class="flex w-full">
                    <div class="w-full flex-wrap">
                        <div class="">
                            {{--<div class="w-full p-3 md:w-1/3">

                            </div>--}}
                            <div class="w-full p-3 md:flex-1">
                                <div class="flex flex-wrap -m-3">
                                    <div class="p-3 w-full md:w-1/2 {{--md:w-1/2 sm:w-1/2--}}">
                                        <label class="mb-2 text-md" for="city">City</label>
                                        <select
                                            class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors bg-blue-50 outline-blue-300 mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                            name="" id="city">
                                            <option class="py-3">All</option>
                                            <option>Lubumbashi</option>
                                            <option>Likasi</option>
                                        </select>
                                    </div>
                                    <div class="p-3 w-full md:w-1/2 {{--md:w-1/2 sm:w-1/2--}}">
                                        <label for="standard">Standard</label>
                                        <select
                                            class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                            name="" id="standard">
                                            <option>1+2</option>
                                        </select>
                                    </div>
                                    <div class="p-3 w-full md:w-1/2 {{--md:w-1/2 sm:w-1/2--}}">
                                        <label for="price">Price</label><select
                                            class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                            name="" id="price">
                                            <option>500</option>
                                        </select>
                                    </div>
                                    <div class="p-3 w-full md:w-1/2 {{--md:w-1/2 sm:w-1/2--}}">
                                        <label for="rent">Rent</label>
                                        <select
                                            class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                            name="" id="rent">
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                    <div class="p-3 w-full md:w-1/2 {{--md:w-1/2 sm:w-1/2--}}">
                                        <label for="deposit">Deposit</label>
                                        <select
                                            class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                            name="" id="deposit">
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                    <div class="p-3 w-full md:w-1/2 {{--md:w-1/2 sm:w-1/2--}}">
                                        <label for="commision">Commision</label><select
                                            class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                            name="" id="commision">
                                            <option>1</option>
                                            <option>2</option>
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
                                class="flex flex-wrap justify-center w-full px-4 py-2 text-sm font-medium text-blue-500 bg-white border border-blue-500 rounded-md dark:text-gray-300 dark:bg-gray-700 dark:hover:bg-gray-800 dark:border-gray-700 hover:bg-blue-100 ">
                                reset
                            </button>
                        </div>
                        <div class="w-full md:w-1/2 p-3">
                            <button
                                class="flex flex-wrap justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-blue-500 rounded-md hover:bg-blue-600 ">
                                search
                            </button>
                        </div>
                    </div>
                </div>
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
                                        <span>Location : {{  $house->address}}</span>
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
                                    <a href="#"
                                       class="px-6 py-4 mb-4 mr-4 text-xs font-semibold leading-none text-center text-gray-200 bg-blue-600 rounded hover:bg-blue-700 dark:bg-blue-800 dark:hover:bg-blue-700">
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
</body>
</html>
