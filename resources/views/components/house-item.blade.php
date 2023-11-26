@php use App\Models\City;use App\Models\Commission;use App\Models\Deposit;use App\Models\Price;use App\Models\Rent;use App\Models\Standard; @endphp
<div class="{{--max-w-6xl--}} {{--mx-auto--}} w-full">
    {{--<div class="items-center">--}}
        {{--<div class="w-full mx-auto mb-16 sm:w-4/5 sm:mb-0">
            <div class=" transition-shadow hover:shadow-lg">--}}
                <div class="flex flex-wrap mb-8">
                    <div class="self-stretch w-full overflow-hidden lg:w-1/2 ">
                        <div class=" overflow-hidden group">
                            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                                <!-- Carousel wrapper -->
                                <div class="relative h-72 overflow-hidden rounded-t md:rounded-l-lg md:h-96">
                                    <!-- Item 1 -->
                                    @if ($house->image)
                                        @foreach ($house->image as $image)
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="storage/{{ $image }}"
                                                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                     alt="...">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <!-- Slider indicators -->
                                <div
                                    class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                    @if ($house->image)
                                        @foreach($house->image as $image)
                                            @if($loop->first)
                                                <button type="button" class="w-3 h-3 rounded-full !bg-[#eee0cf]/60" aria-current="true"
                                                        aria-label="Slide {{ $loop->index + 1 }}"
                                                        data-carousel-slide-to="{{ $loop->index }}"></button>
                                            @else
                                                <button type="button" class="w-3 h-3 rounded-full !bg-[#eee0cf]/60" aria-current="false"
                                                        aria-label="Slide {{ $loop->index + 1 }}"
                                                        data-carousel-slide-to="{{ $loop->index }}"></button>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                                <!-- Slider controls -->
                                <button type="button"
                                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#eee0cf]/30 dark:bg-[#eee0cf]/30 group-hover:bg-white/50 dark:group-hover:bg-[#eee0cf]/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-[#1f1b16] rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
                                </button>
                                <button type="button"
                                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#eee0cf]/30 dark:bg-[#eee0cf]/30 group-hover:bg-white/50 dark:group-hover:bg-[#eee0cf]/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-[#1f1b16] rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
                                </button>
                            </div>


                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 ">
                        <div class="p-5 bg-[#fffbff] shadow lg:h-96 text-[#1f1b16] rounded-b-md md:rounded-r-md">
                            <ul class=" lg:self-start">
                                <li class="flex gap-x-3 items-center mb-3 font-medium ">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAjdJREFUSEu11dmrTmEUBvDfMacMkTlEhDIryZThQobEjSJKhkjccCH+AG5QoiSkSDJdSOTGlKFEkcxCxsxKkplWvUef49t7f+G8d3u31nretZ5nPW+VWj5VtVxfJQCdMB0T0C9d6BKOYDce510yD6ApdmJyToEf2Is5+FAuLgugMc6jNz5hM9bjXirSFUsxHw1S7Ah8qQmSBbADs/AI43Ajo4u+OIp2WIdllQD0wRV8xWDEvNtiK4akAmcxDy8xEqfwGV3wtBSkXAcbsBgbsSQVrwYpzY3u+uMNdmEGVmJ1EcAddEvzv5aInomDWJGS12J84mYhRuM4TqeOfmGU6yBIDeLq4jueoD3a4EUJyXfxEJ3RAq9TNy2LOniL5miC90nnHdCxRPOxGw/Sd/yP2HeI3ADL7eAiBqEHbmM7ZqcRLUcjrEqLty2R3QvXcSEJIxdgS0oKgoPoVriK1jUkGBscJMdoQp5rsAmLijoYg2O4jAEpODiolmnwcgYL8Bx1cBPdMQznigCC+PuJvClpNHl2EwoLS7mFnpUsWsRMwx48QyzeqwyEID/GF6KYhMOVAkTcCYxKWzoW32okN0zjGIhDWaaY56ZhD7FoIbtQSxhbuGecetiHGGHsQpAdEv3jFL0HQ3ES9REGODfJNN6BGElYdBAbgih7igAiaSr2J7XEIxPvxPBk4xOT4jJFUAlAJAcHB9AsVQry4yGKxco9lQJEkdjWUNbHNPvfbPlfRlR0yf/WwV8B/QQWDHYZj3ZwRAAAAABJRU5ErkJggg=="/>
                                    </a>
                                    <span>Location : {{ City::find($house->city + 1)?->name ?? 'Cyprus' /*$house->city->name*/}}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3 font-medium ">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAM9JREFUSEvt1DFqwkEQxeFPCHgUIanMCWy8QW5iaxHB0qPkCIKeQC2i4FECAUPAbfS/OxthMYFsPbzfmzez09P49RrriwAvmGOQMXLEFG85oxFgj8egywOebgWcKiPMGo06aA5IDeRAkcFwyP+A3xHREJvMuj5jW1rl0hb0McMEDxmRTyzwio+umhLgvfRDL8R2+O706pUAtZ8siXZq3RWwwqjyFi0x/mlEXfUptvBEFHMruP77gPW5u9rZVJ+KlFoSTqBwB6qHFSplCpoDvgAuUB0ZwJGejgAAAABJRU5ErkJggg=="/>
                                    </a>
                                    <span>Address : {{ $house->address}}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3 font-medium">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAVJJREFUSEvV1b0uBVEUhuHnFBqdQiEKChKFxAUIoVCIgkIibkOiJBGd6F0CHQUq8ZNwA1R+QyGikKg0CNmyTzLGHjmDIzm7m73W+t611nyTqajzqdRZXxlAK7bxhlE81NJcCtCEdYzVIpDJ2cQEXrN1KcAslgrEr+N9Z0E81C5/B2jDBZoTAjfoj/dH6EjkPKELd9VYfoI1TCUKrzCI2xhrRxEkaEynAMPYTYhfYgDPcYIXbCFADpFa1xAOglZ2ghP05gDnsfMguoLJGJ/HYoTsx7VkS4/RlwcE+2XPGUInYZ/j2MgEH9ESn8N7C9125+o/ms9OUAWknBUsG2xYPafoKXDSJ51aAUFrDjO4xwJWfwv4bqKsdj6v5gn+HZA3QXW9P54gv+IiQFFeKRcFkcYBFLiv9PWXFe3FL7e0UqJgByP5L/kvhL9olPll/qiBxge8A94KSRn+hJMJAAAAAElFTkSuQmCC"/>
                                    </a>
                                    <span>Standard : {{ Standard::find($house->standard + 1)?->standard }}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3 font-medium">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAATlJREFUSEvl1L8rhWEYxvHPSZJIMVEii8KqxGhSGCRWC/EfyGAx+QdkkEwmkiiblJRQMlAsNsnAIpuip96j06lznvOeH5N7ent77ut7d90/MmocmRrr+x+AOixiGV14ww22cBSzOGZRE04xVEBoBevFIDHAGlbxgQWcJ2KT2EAjxnFSCBIDPKEXM9jPE1nCJg4wXS7gJ0lswWeeSOhNN54rsegbQage4Tt1xCx6RTs68ZJaneiiHWMC89iuJiDrfbm9+8srZFHNAdkKmpPpCRMUJil1xJocdiDswiP6UquX0OTsMu1httqABtyiH1M4rCagDbsYyxF9x0MCvcAVejCX7Enu2+gUjSZXNE3R4eJe5ycUanL4f4f75KBdogPDGMEgBtCKM+wkR++rVECayou+jY1pxaCaA34BtpAxGfHt0MMAAAAASUVORK5CYII="/>
                                    </a>
                                    <span>Monthly : {{ Price::find($house->monthly + 1)->price . '£'}}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3  font-medium">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAIBJREFUSEtjZKAxYKSx+QykWJDIwMDQCXVQOQMDw3xiHEeKBa8YGBhEoYa+ZmBgEBtyFtA8iIgJEQw12OLgP1kmITShmDkgFmDzAC5fEUyFBBVAbRu1gGC6GT5BBEsUMB8RTCQEFaClolELcKYm9DAfjQOCGY9oBcQmU6INRFcIABAiHhlgT66aAAAAAElFTkSuQmCC"/>
                                    </a>
                                    <span>Commission :  {{ Commission::find($house->commission + 1)->commission }}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3  font-medium">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAJZJREFUSEvt1MsJwkAUheEvdQiCuNBubCYbO9CGLMSNO1Gwj0gigRCjQWbuZnD29z9zzn1Ugl8VzFeWwA4HbBNju6DGqeUMI3pgkQjvy69YjwWaTPAe031+6CBcILOBF66sMQ2PKLzJZQl8mq5fXH5dtHCBHBP15uCOZQ4ybliNN7k910dsEkXO2E+d60TudPn/Fs3G+gQekhQZlIm1PgAAAABJRU5ErkJggg=="/>
                                    </a>
                                    <span>Rent :  {{ Rent::find($house->rent + 1)->rent }}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3  font-medium">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbdJREFUSEvV1D1oFVEQhuEngiAIFmksRFHBSITYqCD4UyhaBMHKWFhYJhZGG4VY+NMoaKOx0VZsTBUCNoqCkGCjjRYaQlSijY2FKAgikQlj2Cx77957MaDTLLvn7LzzfTPndFnm6Frm/P4pwBZcSsUX8a4V9a0qWIm32JxJZ9GLn3WQVgFncBPTmXArhnH7bwBWYw7dOMZC38bwBRvwvRmkFQVXEJ6/xvZM9gp9uIxYbxh1gKg6qg8VB/E0Mx3Ak6w+VISayqgDjOI0HuNwKcMjHMItnO0EsA7vERMU1oRF85koCguLwqqYpJiuT1WQZgru40Q29Hj+XATEpwcYwD2cbAfwp7pfiAMWSiLKgE2YycnaVhjjRVYjBQ/Rj7sYKlRWBsTSHQxiAkfLKqoAezCJH9iIzzWAtfiAVdiFF0VIFSA27MA1XKg7qbl+FSNZ2L5mgJA4jq9Yn8/i/iqLYn0NPubzCMLihSgqWIE36MF53KiovhEgtp7D9dKJXwLYj2fpeXgfPWgnogfRi+jJXkyVFezG83YyNtm7Ey/LgHgPW07l3dMJ61te4YvDUXcXdQJZ8s//D/gNQe1OGS34fZEAAAAASUVORK5CYII="/>
                                    </a>
                                    <span>Deposit : {{ Deposit::find($house->deposit + 1)->deposit }}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3  font-medium">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAK5JREFUSEvtlcEJwzAMRV/mKBRCDu02WSaXbNAulEF6yS000D0SAnYLNopARimU+mbsryfpG6vCeVXO8dEAS0hAuqedHw9ogRtwNbZuBDpgiPq09BdwMgaPsgloJEDsaSHj0/q0AtU0hZzpvwZwb9HvAKJHqXnSPnudksnpRTeA1Yt34loF7oC/B9k8cP/sZuBsdTbonkAtfdfbwLkDFyPkAfR7A8cYV5ZpQ78YuAI+nioZTWsWPwAAAABJRU5ErkJggg=="/>
                                    </a>
                                    created
                                    <span>Uploaded : {{ $house->created = date('d-m-Y', strtotime($house->created))}}</span>
                                </li>
                                <li class="flex gap-x-3 items-center mb-3  font-medium">
                                    <a href="" class="mr-1 text-green-600 dark:text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                             color="{{ strtolower($house->house_statue == 0 ? "available": "unavailable" ) == "available" ? "green": "red" }}">
                                            <path d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm-7.933 13.481-3.774-3.774 1.414-1.414 2.226 2.226 4.299-5.159 1.537 1.28-5.702 6.841z"></path>
                                        </svg>
                                    </a>
                                    <span>Statue : {{ $house->house_statue == 0 ? "Available": "Unavailable" }}</span>
                                </li>
                            </ul>
                            <div class="flex flex-wrap items-center ">
                                <a href="https://wa.me/905338505827"
                                   class="px-4 py-3 {{--mb-4--}} {{--mr-2--}} text-md font-bold bg-[#d0ebc0] text-[#0c2006] text-center    rounded hover:bg-[#4e6543] hover:text-[#ffffff] ">
                                    Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            {{--</div>
        </div>--}}
    {{--</div>--}}
</div>
