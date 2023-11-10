<section class="bg-white ">
    <div class="max-w-6xl px-4 mx-auto " x-data="{open:false}">
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
