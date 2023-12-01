<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

{{--<div class="--}}{{--max-w-6xl--}}{{-- px-4 --}}{{--mx-auto--}}{{--">--}}
{{--    <div class="  px-4 lg:px-6 py-2.5 ">--}}
        <div class="w-full {{--mx-auto--}} mb-4 {{--sm:w-4/5--}} {{--sm:mb-0--}} flex justify-end mt-4 filter-none">
            <button id="filter-btn" type="button" class="flex items-center gap-x-2 py-2 w-28 justify-center border border-[#4e4539] rounded-lg bg-[#ffdeaa] {{--mb-5--}}" >
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAr5JREFUSEu1lUtoU2kUx3/npq3odBR08LERlaLSJlEsiAstiRFLHXxFw4wO46IijKAuHHDhzo3iRhEVH6CgIoKSG8cy4gN7Y3wUF7U1vVGrIIgyCwcf+Bhtk3vPcEsVa9vcgO3Z3u/7/875zvmfKwxzyDDrMyggsah6cqEQWCOiS4BZXiIKbQZcVDXOmOns81KS6wf4raFq9MdPI0+BLisioMDZfOWIxqam1v+KgfoAli6tHVX+vusOEAS6BI6oIfvMax1PPJF4LDRNXLYqugGoALnz09uKBUdbW/ODQfoA4tHgSeB34Jk61Kcy9oOBLq6KBcPqcgmYpOielJX70xewvC4UCgQ0CxTEcecmM/fbipUeXxiqQ/U60F0oy0+9cLXzn4HOf6kgHqnZj8gmVA+Y6dzmUhoYj9acBlkLbDcte1dxQDT4GKgS3GDSup8rCRCrieJKs6reSKVzdX6AD8CoUJ0d2LEDtxRAor5mrNMtL4FXpmWP8wO8BX78odyoPHUl68F8IxGprnTEeAf8a1r2eD9Ae4+hxKg1m7N3fdW9sY2E5yFuC0izaXXEfACh3aDbRDmcTNsbSwJEgyeAdcB+07K3FAWsjM2aLq7zEHBKGdPVsfAC13UzPaJFqu5jtJXR4DGBRuCpGoHFqWv3Hg2U1YpI9WxDDM9oE4AjpmX/4Ws078A3q+KTIIcKju79K2M/8773VrkVWA+U9YgqLYV8vv7CrU6v2f2i37JLLKod4zhdp4Gfi/ThjcBOhV+BOYi0uW5g4fl0+5tv7wy6rldEZk8xpOC5tEEhLPBRVO+qwe2ubuPg3zc7Xvf6oNmbPoF2o0Jj5y7nXn0N+e4fTi/kFjAT4bGWGfNTV7IvPkO+G9DTm8Xh8eTdjMAMgfVJyz4+pABPLBGpnuhi/JJM2/uG9In8DDkkT1QMMuyA/wFEFgooO73yVAAAAABJRU5ErkJggg==" alt="" class="w-5"/>
                <span class="text-[#271900] text-sm">Search</span>
            </button>
            <button id="filter-btn-close"  type="button" class="flex items-center gap-x-2  hidden py-2 w-28 justify-center border border-[#410002] rounded-lg bg-[#ffdad6] {{--mb-5--}}" >
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAR9JREFUSEvF1c8qBmEUx/HP6xoUpfxdcBEUV2AjN6AkW1LugJUsZKGUjUuwJq5ACQv/SqHcAx3N1DS9Q887M69nNzXP73vO73c6T0fLp9Oyvr4CFrGDmZpd3WITZ6FT7OAVIzXF8+uPmCoDvhoSz2V+ii920DdA3eDzQis7+BfAFk7wkRkcw7CMvS65JXewjgM8Yy4TvMQ4VnFUgiQDhnGOaTxhAGO4wwLe6wLi/hAuMkh832Aen01YFBqDuCoA7jHbFKBYfeQQJ/yPlRAW5cHnzSRnsIZDPGS2hFDYNYkVHDeRwQZO8VYY0yXsN5VByppKtihFPP6tBLxgNFWt4v8YhonyNo0HZ7cwir2yrrHd7cHpVfDXe3U3559FtQ74Btq5QBmn8YzGAAAAAElFTkSuQmCC" alt="closed" class="w-5"/>
                <span class="text-[#271900] text-sm">Close</span>
            </button>
        </div>
    {{--</div>
</div>--}}




<div class="absolute z-50 left-auto md:left-auto max-w-4xl w-5/6 shadow-2xl hover:shadow-lg {{--px-4--}}  hidden md:px-0 filter-none " id="filter">
    <form action="/search" method="GET" class="{{--  md:w-4/6 --}}w-full {{--max-w-6xl--}}{{-- mx-auto--}} px-6 py-8 bg-[#fffbff] text-[#1f1b16] rounded-md">
        <div class="flex flex-wrap -mx-3 mb-2 md:mb-6 md:justify-between">
            <div class="px-3 mb-3 w-full">
                <h2 class="block uppercase tracking-wide text-gray-700 text-1xl font-bold mb-2">

                    Search Form
                </h2>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    City
                </label>
                <div class="relative">
                    <select name="city" class="block appearance-none w-full bg-[#eee0cf] border border-[#4e4539] text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="">All</option>
                        @foreach($cities as $it)
                            <option value="{{ $it->id}}">{{$it->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Standard
                </label>
                <div class="relative">
                    <select name="standard" class="block appearance-none w-full bg-[#eee0cf] border border-[#4e4539] text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="">All</option>
                        @foreach($standards as $it)--}}
                        <option value="{{ $it->id }}">{{ $it->standard }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Rent
                </label>
                <div class="relative">
                    <select name="rent" class="block appearance-none w-full bg-[#eee0cf] border border-[#4e4539] text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="">All</option>
                        @foreach($rents as $it)
                            <option value="{{ $it->id }}">{{ $it->rent }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Deposit
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full bg-[#eee0cf] border border-[#4e4539] text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="">All</option>
                        @foreach($deposits as $it)
                            <option value="{{ $it->id }}">{{ $it->deposit }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Commission
                </label>
                <div class="relative">
                    <select name="commission" class="block appearance-none w-full bg-[#eee0cf] border border-[#4e4539] text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="">All</option>
                        @foreach($commissions as $it)--}}
                        <option value="{{ $it->id }}">{{ $it->commission }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Price
                </label>
                <div class="relative">
                    <select name="monthly" class="block appearance-none w-full bg-[#eee0cf] border border-[#4e4539] text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="">All</option>
                        @foreach($prices as $it)--}}
                        <option value="{{ $it->id }}">{{ $it->price }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <br>

        <div class="flex flex-wrap -mx-3 md:justify-between">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <div class="relative">
                    <button type="reset"   class="    w-full bg-[#ffdad6] text-[#410002]  hover:text-[#ffffff] font-bold py-3 px-4 pr-8 rounded   focus:outline-none   ">Reset
                    </button>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-3{{-- mb-6--}} md:mb-0">
                <div class="relative">
                    <button type="submit"   class="    w-full bg-[#d0ebc0] text-[#0c2006]  hover:text-[#ffffff] font-bold py-3 px-4 pr-8 rounded   focus:outline-none   ">Search</button>
                </div>
            </div>
        </div>
    </form>
</div>
