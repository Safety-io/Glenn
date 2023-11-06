<h1>Salut</h1>


{{-- affiches les articles--}}
<section class=" items-center bg-white lg:h-screen font-poppins">
    @foreach( $houses as $house)
        <div class="max-w-6xl px-4 mx-auto">
            <div class="  items-center   ">
                <div class="w-full mx-auto mb-16 sm:w-4/5 sm:mb-0">
                    <div class="">
                        <div class="flex flex-wrap pb-8 ">
                            <div class="self-stretch w-full overflow-hidden lg:w-1/2 ">
                                <div class="h-96"><img class="object-cover w-full h-full"
                                                       src="{{ ($house->image) }}" alt="">
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2">
                                <div class="p-5 bg-gray-100 rounded shadow dark:bg-gray-700 lg:h-96">
                                    <ul class=" lg:self-start">
                                        <li class="flex items-center mb-3 font-medium text-gray-500 dark:text-gray-400">
                                            <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                            </a>
                                            {{--                                        taille de  mots 20 --}}
                                            <span>Location : {{  $house->address}}</span>
                                        </li>
                                        <li class="flex items-center mb-3 font-medium text-gray-500 dark:text-gray-400">
                                            <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                            </a>
                                            <span>Standard : {{ ($house->standard) }}</span>
                                        </li>
                                        <li class="flex items-center mb-3 font-medium text-gray-500 dark:text-gray-400">
                                            <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                            </a>
                                            <span>Monthly : {{ ($house->monthly) . '$'}}</span>
                                        </li>
                                        <li class="flex items-center mb-3  font-medium text-gray-500 dark:text-gray-400">
                                            <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                            </a>
                                            <span>Commission :  {{ ($house->commission) }}</span>
                                        </li>
                                        <li class="flex items-center mb-3  font-medium text-gray-500 dark:text-gray-400">
                                            <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                            </a>
                                            <span>Rent :  {{ ($house->rent) }}</span>
                                        </li>
                                        <li class="flex items-center mb-3  font-medium text-gray-500 dark:text-gray-400">
                                            <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                            </a>
                                            <span>Deposit : {{ ($house->deposit) }}</span>
                                        </li>
                                        <li class="flex items-center mb-3  font-medium text-gray-500 dark:text-gray-400">
                                            <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                            </a>
                                            {{--                                        created --}}
                                            <span>Uploaded : {{ $house->created = date('d-m-Y', strtotime($house->created))}}</span>
                                        </li>
                                        <li class="flex items-center mb-3  font-medium text-gray-500 dark:text-gray-400">
                                            <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                                </svg>
                                            </a>
                                            <span>Description : {{ $house->house_statue }}</span>
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
