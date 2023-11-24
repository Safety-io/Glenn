<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

<div class="max-w-6xl px-4 mx-auto">
    <div class="  px-4 lg:px-6 py-2.5 ">
        <div class="w-full mx-auto mb-16 sm:w-4/5 sm:mb-0 flex justify-end ">
    <button id="filter-btn" type="button" class="px-4 py-2 border-2 rounded-sm mb-5" >
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAGNJREFUSEvtkVsOABAMBPWoHIyj8uuVVrAqot9quzNkwEPg/80PEAk/iMhZG8XezAMfQkGlQQQPWLm+t6sreRRXzT1vwjaAB+zwoesgb1Dj4rgPOzgaMOvjHge/wSwBcQ8uOQGR9xgZA/2zngAAAABJRU5ErkJggg==" alt="icon"/>
    </button>
    <button id="filter-btn-close"  type="button" class="px-4  hidden py-2 border-2 rounded-sm mb-5" >
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAR9JREFUSEvF1c8qBmEUx/HP6xoUpfxdcBEUV2AjN6AkW1LugJUsZKGUjUuwJq5ACQv/SqHcAx3N1DS9Q887M69nNzXP73vO73c6T0fLp9Oyvr4CFrGDmZpd3WITZ6FT7OAVIzXF8+uPmCoDvhoSz2V+ii920DdA3eDzQis7+BfAFk7wkRkcw7CMvS65JXewjgM8Yy4TvMQ4VnFUgiQDhnGOaTxhAGO4wwLe6wLi/hAuMkh832Aen01YFBqDuCoA7jHbFKBYfeQQJ/yPlRAW5cHnzSRnsIZDPGS2hFDYNYkVHDeRwQZO8VYY0yXsN5VByppKtihFPP6tBLxgNFWt4v8YhonyNo0HZ7cwir2yrrHd7cHpVfDXe3U3559FtQ74Btq5QBmn8YzGAAAAAElFTkSuQmCC" alt="closed"/>
    </button>
</div>
        </div>
    </div>




<div class="w-full px-4  hidden md:px-0 " id="filter">
    <form action="/search" method="GET" class="  md:w-4/6 w-full max-w-6xl mx-auto px-6 py-8 bg-white ">
        <div class="flex flex-wrap -mx-3 mb-2 md:justify-between">
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
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
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
        <br>

        <div class="flex flex-wrap -mx-3 mb-2 md:justify-between">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <div class="relative">
                    <button type="reset" name="city" class="    w-full bg-red-400 text-white font-bold py-3 px-4 pr-8 rounded   focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">Filter Reset
                    </button>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <div class="relative">
                    <button type="submit" name="city" class="    w-full bg-green-500  text-white font-bold py-3 px-4 pr-8 rounded   focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">Filter Search</button>
                </div>
            </div>
        </div>
    </form>
</div>
<br>{{--
<div class="max-w-6xl px-4 mx-auto">
    <div class="items-center">
        <div class="w-full mx-auto mb-16 sm:w-4/5 sm:mb-0">
            @if($houses->count() == 0)
                <div class="flex justify-center items-center h-screen">
                    <div class="flex flex-col justify-center items-center">
                        <h1 class="text-4xl font-bold text-gray-700">No Apartments Found</h1>
                        <img src="{{ asset('/imgs/Empty.png') }}" alt="no apartments found" class="w-96 h-96">
                        <a href="{{ route('pages.index') }}" class="text-blue-700 hover:text-blue-800">Go Back</a>
                    </div>
                </div>
            @else
                <h1 class="text-4xl font-bold text-gray-700">{{ $houses->count() }}  Apartments Found</h1>
            @endif
        </div>
    </div>
</div>--}}
<br>
