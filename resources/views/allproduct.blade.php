<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="/resources/css/output.css"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .font-gloock {
            font-family: 'Gloock';
            letter-spacing: 2px;
            font-weight: 900;
        }

        .img:hover {
            transform: scale(1.5);
            /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>
</head>


<body class="dark:bg-black overflow-x-hidden">
    {{-- <div class="flex justify-between p-5 text-cyan-50 bg-gray-900">
        <h1>WEBSHOP</h1>
        <div class="auth">

            @if (Route::has('login'))
                <div class="sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div> --}}
    {{-- <div class="bg-slate"> --}}
    <header class="mx-auto sticky top-0 z-20" x-data="{ 'showModal': false }">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">TEMPLATIN</span>
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                    @click="showModal = true">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div
                class="hidden w-screen lg:flex justify-between inset-x-0 backdrop-blur-md bg-slate-800/40 rounded-md p-5 text-cyan-50">
                <h1>
                    {{ $title }}
                </h1>


                <div class="info">
                    <a href="#" class="hover:underline">
                        Marketplace
                    </a>
                </div>

                {{-- <div class="auth">

                    @if (Route::has('login'))
                        <div class="sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div> --}}
                {{-- </div> --}}
            </div>
        </nav>

        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true" x-show="showModal">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-50"></div>
            <div
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-slate-800 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">TEMPLATIN</span>
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="showModal = false">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root ">
                    <div class="-my-6 divide-y  divide-gray-500/10">
                        <div class="py-6">
                            @if (Route::has('login'))
                                {{-- <div class="sm:block"> --}}
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                        in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Register</a>
                                    @endif
                                @endauth
                                {{-- </div> --}}
                            @endif
                            {{-- </div> --}}
                            {{-- </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- Showcase Produk --}}
    <div class="bg-slate py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 ">
            <div class="mx-auto text-center lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-200 sm:text-4xl font-gloock">All Product</h2>
                </p>
            </div>
            <hr class="border-t border-gray-200 my-10">
            <div class="text-white">
            </div>
            <div class="flex justify-center flex-wrap gap-5 mb-10">
                @forelse ($products as $product)
                    <div class="relative w-96 pb-20 bg-gray-800 border-5 rounded-md">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 object-fill">
                            <img src="{{ asset('storage/' . $product->thumbnail) }}"
                                alt="Front of men&#039;s Basic Tee in black."
                                class="h-full w-full transition-transform hover:scale-110 object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 p-5 pt-2 rounded-md flex justify-between">
                            <div>
                                <div class="flex flex-col">
                                    {{-- <h1 class="text-gray-300 pb-2 text-2xl"> --}}
                                    <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="font-gloock hover:underline text-gray-300 pb-2 text-2xl capitalize">
                                        {{ Str::limit($product->name, 60) }}
                                    </a>
                                    {{-- </h1> --}}
                                    <p class="text-sm font-medium text-gray-400">Rp{{  number_format($product->price, 0, ',', '.')}}</p>
                                </div>
                                <hr class="border-t border-gray-200 my-5">
                                <div class="mt-1 text-sm text-gray-100">  
                                    {!! Str::limit($product->description , 250)!!}</div>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="text-center w-full font-black my-7 text-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" class="mx-auto" width="300"
                            height="300" viewBox="0 0 647.63626 632.17383"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M687.3279,276.08691H512.81813a15.01828,15.01828,0,0,0-15,15v387.85l-2,.61005-42.81006,13.11a8.00676,8.00676,0,0,1-9.98974-5.31L315.678,271.39691a8.00313,8.00313,0,0,1,5.31006-9.99l65.97022-20.2,191.25-58.54,65.96972-20.2a7.98927,7.98927,0,0,1,9.99024,5.3l32.5498,106.32Z"
                                transform="translate(-276.18187 -133.91309)" fill="#3D3B81" />
                            <path
                                d="M725.408,274.08691l-39.23-128.14a16.99368,16.99368,0,0,0-21.23-11.28l-92.75,28.39L380.95827,221.60693l-92.75,28.4a17.0152,17.0152,0,0,0-11.28028,21.23l134.08008,437.93a17.02661,17.02661,0,0,0,16.26026,12.03,16.78926,16.78926,0,0,0,4.96972-.75l63.58008-19.46,2-.62v-2.09l-2,.61-64.16992,19.65a15.01489,15.01489,0,0,1-18.73-9.95l-134.06983-437.94a14.97935,14.97935,0,0,1,9.94971-18.73l92.75-28.4,191.24024-58.54,92.75-28.4a15.15551,15.15551,0,0,1,4.40966-.66,15.01461,15.01461,0,0,1,14.32032,10.61l39.0498,127.56.62012,2h2.08008Z"
                                transform="translate(-276.18187 -133.91309)" fill="#3D3B81" />
                            <path
                                d="M398.86279,261.73389a9.0157,9.0157,0,0,1-8.61133-6.3667l-12.88037-42.07178a8.99884,8.99884,0,0,1,5.9712-11.24023l175.939-53.86377a9.00867,9.00867,0,0,1,11.24072,5.9707l12.88037,42.07227a9.01029,9.01029,0,0,1-5.9707,11.24072L401.49219,261.33887A8.976,8.976,0,0,1,398.86279,261.73389Z"
                                transform="translate(-276.18187 -133.91309)" fill="#6c63ff" />
                            <circle cx="190.15351" cy="24.95465" r="20" fill="#6c63ff" />
                            <circle cx="190.15351" cy="24.95465" r="12.66462" fill="#3D3B81" />
                            <path
                                d="M878.81836,716.08691h-338a8.50981,8.50981,0,0,1-8.5-8.5v-405a8.50951,8.50951,0,0,1,8.5-8.5h338a8.50982,8.50982,0,0,1,8.5,8.5v405A8.51013,8.51013,0,0,1,878.81836,716.08691Z"
                                transform="translate(-276.18187 -133.91309)" fill="#3D3B81" />
                            <path
                                d="M723.31813,274.08691h-210.5a17.02411,17.02411,0,0,0-17,17v407.8l2-.61v-407.19a15.01828,15.01828,0,0,1,15-15H723.93825Zm183.5,0h-394a17.02411,17.02411,0,0,0-17,17v458a17.0241,17.0241,0,0,0,17,17h394a17.0241,17.0241,0,0,0,17-17v-458A17.02411,17.02411,0,0,0,906.81813,274.08691Zm15,475a15.01828,15.01828,0,0,1-15,15h-394a15.01828,15.01828,0,0,1-15-15v-458a15.01828,15.01828,0,0,1,15-15h394a15.01828,15.01828,0,0,1,15,15Z"
                                transform="translate(-276.18187 -133.91309)" fill="#3f3d56" />
                            <path
                                d="M801.81836,318.08691h-184a9.01015,9.01015,0,0,1-9-9v-44a9.01016,9.01016,0,0,1,9-9h184a9.01016,9.01016,0,0,1,9,9v44A9.01015,9.01015,0,0,1,801.81836,318.08691Z"
                                transform="translate(-276.18187 -133.91309)" fill="#6c63ff" />
                            <circle cx="433.63626" cy="105.17383" r="20" fill="#6c63ff" />
                            <circle cx="433.63626" cy="105.17383" r="12.18187" fill="#3D3B81" />
                        </svg>
                        <h1 class="my-5">THERE ARE NO PRODUCTS LEFT!!</h1>
                    </div>
                @endforelse

            </div>
            <div class="text-center">
                <a href="{{ route('product.all') }}" class=" hover:underline text-white">More Website.</a>
            </div>
        </div>

        <div
            class="text-center flex items-center justify-between mt-32 bg-indigo-600 w-9/12 mx-auto rounded-sm py-8 px-12">
            <h1 class="font-gloock font-bold text-white">TEMPLATIN</h1>

            <div class="flex text-lg gap-x-10 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"
                    style="fill: rgb(231, 231, 231);transform: ;msFilter:;">
                    <path
                        d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                    </path>
                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                    <path
                        d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                    </path>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"
                    style="fill: rgb(231, 231, 231);transform: ;msFilter:;">
                    <path
                        d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                    </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"
                    style="fill: rgb(231, 231, 231);transform: ;msFilter:;">
                    <path
                        d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z">
                    </path>
                </svg>
            </div>
        </div>
    </div>
    

</body>

</html>
