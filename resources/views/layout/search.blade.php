{{--<section class="flex w-full mt-16 mb-16">--}}
{{--    <div--}}
{{--        class="rounded-lg w-4/6 px-16 pt-12 bg-white max-w-6xl mx-auto justify-center hover:drop-shadow-xl transition duration-700 hover:ease-in-out">--}}
{{--        <div class=" ">--}}

{{--            <form action="/search" method="GET">--}}
{{--                <div>--}}
{{--                    <div class="pb-10">--}}
{{--                        <h2 class="text-xl font-sm text-black md:text-xl">--}}
{{--                            Search Form--}}
{{--                        </h2>--}}
{{--                    </div>--}}
{{--                    <div class="flex w-full">--}}
{{--                        <div class="w-full flex-wrap">--}}
{{--                            <div class="">--}}
{{--                                <div class="w-full p-3 md:flex-1">--}}
{{--                                    <div class="flex flex-wrap -m-3">--}}
{{--                                        <div class="p-3 w-full md:w-1/2">--}}
{{--                                            <label class="mb-2 text-md" for="city">City</label>--}}
{{--                                            <select--}}
{{--                                                class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "--}}
{{--                                                name="city" id="city">--}}
{{--                                                <option value="" class="py-3">All</option>--}}
{{--                                                @foreach( $cities as $it)--}}
{{--                                                    <option value="{{ $it->name }}">{{ $it->name }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="p-3 w-full md:w-1/2">--}}
{{--                                            <label for="standard">Standard</label>--}}
{{--                                            <select--}}
{{--                                                class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "--}}
{{--                                                name="standard" id="standard">--}}
{{--                                                <option value="">All</option>--}}

{{--                                                @foreach($standards as $it)--}}
{{--                                                    <option value="{{ $it->standard }}">{{ $it->standard }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="p-3 w-full md:w-1/2">--}}
{{--                                            <label for="price">Price</label><select--}}
{{--                                                class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "--}}
{{--                                                name="monthly" id="price">--}}
{{--                                                <option value="">All</option>--}}
{{--                                                @foreach($prices as $it)--}}
{{--                                                    <option value="{{ $it->price }}">{{ $it->price }}</option>--}}
{{--                                                @endforeach--}}

{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="p-3 w-full md:w-1/2">--}}
{{--                                            <label for="rent">Rent</label>--}}
{{--                                            <select--}}
{{--                                                class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "--}}
{{--                                                name="rent" id="rent">--}}
{{--                                                <option value="">All</option>--}}
{{--                                                @foreach($rents as $it)--}}
{{--                                                    <option value="{{ $it->rent }}">{{ $it->rent }}</option>--}}
{{--                                                @endforeach--}}

{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="p-3 w-full md:w-1/2">--}}
{{--                                            <label for="deposit">Deposit</label>--}}
{{--                                            <select--}}
{{--                                                class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "--}}
{{--                                                name="deposit" id="deposit">--}}

{{--                                                <option value="">All</option>--}}
{{--                                                @foreach($deposits as $it)--}}
{{--                                                    <option value="{{ $it->deposit }}">{{ $it->deposit }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="p-3 w-full md:w-1/2">--}}
{{--                                            <label for="commission">Commission</label><select--}}
{{--                                                class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "--}}
{{--                                                name="commission" id="commission">--}}
{{--                                                <option value="">All</option>--}}
{{--                                                @foreach($commissions as $it)--}}
{{--                                                    <option value="{{ $it->commission }}">{{ $it->commission }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="w-full mt-4 mb-8">--}}
{{--                        <div class="flex flex-wrap justify-between">--}}
{{--                            <div class="w-full md:w-1/2 p-3">--}}
{{--                                <button--}}
{{--                                    type="reset"--}}
{{--                                    class="flex flex-wrap justify-center w-full px-4 py-2 text-sm font-medium text-blue-500 bg-white border border-blue-500 rounded-md dark:text-gray-300 dark:bg-gray-700 dark:hover:bg-gray-800 dark:border-gray-700 hover:bg-blue-100 ">--}}
{{--                                    reset--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div class="w-full md:w-1/2 p-3">--}}
{{--                                <button--}}
{{--                                    type="submit"--}}
{{--                                    class="flex flex-wrap justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-blue-500 rounded-md hover:bg-blue-600 ">--}}
{{--                                    search--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<div class="w-full">
    <form class="w-full max-w-lg mx-auto py-5 ">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    City
                </label>
                <div class="relative">
                    <select name="city" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="">All</option>
                        @foreach($cities as $it)
                            <option value="{{ $it->name}}">{{$it->name }}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Standard
                </label>
                <div class="relative">
                    <select name="standard" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="">All</option>
                        @foreach($standards as $it)--}}
                        <option value="{{ $it->standard }}">{{ $it->standard }}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Rent
                </label>
                <div class="relative">
                    <select name="rent" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="">All</option>
                        @foreach($rents as $it)
                            <option value="{{ $it->rent }}">{{ $it->rent }}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
        </div><div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Deposit
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="">All</option>
                        @foreach($deposits as $it)
                            <option value="{{ $it->deposit }}">{{ $it->deposit }}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Commission
                </label>
                <div class="relative">
                    <select name="commission" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="">All</option>
                        @foreach($commissions as $it)--}}
                        <option value="{{ $it->commission }}">{{ $it->commission }}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Price
                </label>
                <div class="relative">
                    <select name="monthly" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="">All</option>
                        @foreach($prices as $it)--}}
                        <option value="{{ $it->price }}">{{ $it->price }}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
