<section class="flex w-full mt-16 mb-16">
    <div
        class="rounded-lg w-4/6 px-16 pt-12 bg-white max-w-6xl mx-auto justify-center hover:drop-shadow-xl transition duration-700 hover:ease-in-out">
        <div class=" ">

            <form action="/search" method="POST">
                @csrf
                <div>
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
                                        <div class="p-3 w-full md:w-1/2 md:w-1/2 sm:w-1/2">
                                            <label class="mb-2 text-md" for="city">City</label>
                                            <select
                                                class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors bg-blue-50 outline-blue-300 mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                                name="city" id="city">
                                                <option class="py-3">All</option>
                                                @foreach( $cities as $it)
                                                    <option value="{{ $it->city }}">{{ $it->city }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="p-3 w-full md:w-1/2 md:w-1/2 sm:w-1/2">
                                            <label for="standard">Standard</label>
                                            <select
                                                class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                                name="standard" id="standard">
                                                <option>All</option>

                                                @foreach($standards as $it)
                                                    <option value="{{ $it->standard }}">{{ $it->standard }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="p-3 w-full md:w-1/2 md:w-1/2 sm:w-1/2">
                                            <label for="price">Price</label><select
                                                class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                                name="monthly" id="price">
                                                <option>All</option>
                                                @foreach($prices as $it)
                                                    <option value="{{ $it->monthly }}">{{ $it->monthly }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="p-3 w-full md:w-1/2 md:w-1/2 sm:w-1/2">
                                            <label for="rent">Rent</label>
                                            <select
                                                class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                                name="rent" id="rent">
                                                <option>All</option>
                                                @foreach($rents as $it)
                                                    <option value="{{ $it->rent }}">{{ $it->rent }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="p-3 w-full md:w-1/2 md:w-1/2 sm:w-1/2">
                                            <label for="deposit">Deposit</label>
                                            <select
                                                class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                                name="deposit" id="deposit">

                                                <option>All</option>
                                                @foreach($deposits as $it)
                                                    <option value="{{ $it->deposit }}">{{ $it->deposit }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="p-3 w-full md:w-1/2 md:w-1/2 sm:w-1/2">
                                            <label for="commission">Commission</label><select
                                                class="w-full bg-blue-50 outline-blue-300 outline-offset-4 transition-colors mt-2 py-2.5 px-4 text-gray-700 text-base font-normal border border-gray-200 rounded-lg "
                                                name="commission" id="commission">
                                                <option>All</option>
                                                @foreach($commission as $it)
                                                    <option value="{{ $it->commission }}">{{ $it->commission }}</option>
                                                @endforeach
                                            </select>
                                        </div>

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
                                    reset
                                </button>
                            </div>
                            <div class="w-full md:w-1/2 p-3">
                                <button
                                    type="submit"
                                    class="flex flex-wrap justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-blue-500 rounded-md hover:bg-blue-600 ">
                                    search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
