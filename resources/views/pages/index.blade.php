<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >

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
{{--button  --}}
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







<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
