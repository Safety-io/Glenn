<div class="max-w-6xl px-4 mx-auto">
    <div class="items-center">
        <div class="w-full mx-auto mb-16 sm:w-4/5 sm:mb-0">
            <div class=" transition-shadow hover:shadow-lg">
                <div class="flex flex-wrap mb-8">
                    <div class="self-stretch w-full overflow-hidden lg:w-1/2 ">
                        <div class="h-96 overflow-hidden group">
                            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                                <!-- Carousel wrapper -->
                                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                    <!-- Item 1 -->
                                    @if ($house->image)
                                        @foreach ($house->image as $image)
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="storage/{{ $image }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                            </div>
                                        @endforeach
                                    @else
                                        {{ "hrrrr" }}
                                    @endif
                                </div>
                                <!-- Slider indicators -->
                                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                    @foreach($house->image as $image)
                                        @if($loop->first)
                                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide {{ $loop->index + 1 }}" data-carousel-slide-to="{{ $loop->index }}"></button>
                                        @else
                                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide {{ $loop->index + 1 }}" data-carousel-slide-to="{{ $loop->index }}"></button>
                                        @endif
                                    @endforeach
                                </div>
                                <!-- Slider controls -->
                                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
                                </button>
                                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
                                </button>
                            </div>



                        </div>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <div class="p-5 bg-white shadow lg:h-96">
                            <ul class=" lg:self-start">
                                <li class="flex gap-x-3 items-center mb-3 font-medium ">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"
                                             color="gray">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                        </svg>
                                    </a>
                                    <span>Location : {{  $house->city}}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3 font-medium">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"
                                             color="gray">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                        </svg>
                                    </a>
                                    <span>Standard : {{ ($house->standard) }}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3 font-medium">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"
                                             color="gray">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                        </svg>
                                    </a>
                                    <span>Monthly : {{ ($house->monthly) . '$'}}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3  font-medium">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"
                                             color="gray">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                        </svg>
                                    </a>
                                    <span>Commission :  {{ ($house->commission) }}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3  font-medium">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"
                                             color="gray">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                        </svg>
                                    </a>
                                    <span>Rent :  {{ ($house->rent) }}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3  font-medium">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"
                                             color="gray">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                        </svg>
                                    </a>
                                    <span>Deposit : {{ ($house->deposit) }}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3  font-medium">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"
                                             color="gray">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                        </svg>
                                    </a>
                                    created
                                    <span>Uploaded : {{ $house->created = date('d-m-Y', strtotime($house->created))}}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3  font-medium">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16"
                                             color="{{ strtolower($house->house_statue) == "available" ? "green": "red" }}">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                        </svg>
                                    </a>
                                    <span>Statue : {{ $house->house_statue }}</span>
                                </li>
                            </ul>
                            <div class="flex flex-wrap items-center ">
                                <a href="https://wa.me/905338505827"
                                   class="px-6 py-4 mb-4 mr-2 text-xs font-bold bg-green-500  text-white text-center    rounded hover:bg-green-600  ">
                                    Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
