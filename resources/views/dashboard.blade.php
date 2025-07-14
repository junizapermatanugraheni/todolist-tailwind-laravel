@php
    $card = [[]];
@endphp
<x-app-layout>
    @include('layouts.header', ['title' => 'Dashboard'])
    <div class="flex flex-row justify-between items-center mt-5 px-2">
        <div class="text-lg font-semibold text-gray-900 dark:text-gray-100 ">
            My Dashboard
        </div>
        <div class="flex flex-row gap-2">
            <div class="relative w-full max-w-sm">
                <input id="rangeInput" type="text" placeholder="2025-07-12 to 2025-07-15"
                    class="w-full pl-10 pr-4 py-2 bg-transparent border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-400 dark:text-slate-200" />
                <!-- Calendar Icon (Heroicons or any SVG) -->
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 dark:text-slate-200" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>
            <button
                class="text-gray-600 bg-transparent border border-gray-300 rounded-lg px-4 py-2 flex flex-row gap-2 dark:text-slate-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6 dark:text-slate-200">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                </svg>
                Filter
            </button>
        </div>
    </div>
    <div class="flex flex-row sm:flex-col md:flex-col lg:flex-row gap-4 mt-5">
        <div class="flex-1 bg-white dark:bg-gray-700 rounded-xl px-6 py-3 flex flex-row justify-between items-center">
            <div class="flex flex-col">
                <span class="text-sm font-light text-gray-500 dark:text-white mb-3">Total project done</span>
                <span class="text-3xl font-bold text-gray-900 dark:text-white">50</span>
                <div class="flex flex-row items-center">
                    <span class="text-green-400 text-xs flex flex-row items-center"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 me-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                        </svg>
                        2,5%
                    </span>
                    <span class="text-xs text-gray-500 dark:text-white font-light ms-3">More than last month</span>
                </div>
            </div>
            <div class="bg-blue-300 rounded-xl p-3">
                <svg class="w-7 h-7 text-white transition duration-75 dark:text-gray-100 group-hover:text-gray-900 dark:group-hover:text-white"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                </svg>
            </div>
        </div>
        <div class="flex-1 bg-white dark:bg-gray-700 rounded-xl px-6 py-3 flex flex-row justify-between items-center">
            <div class="flex flex-col">
                <span class="text-sm font-light text-gray-500 dark:text-white mb-3">Total task done</span>
                <span class="text-3xl font-bold text-gray-900 dark:text-white">180</span>
                <div class="flex flex-row items-center">
                    <span class="text-green-400 text-xs flex flex-row items-center"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 me-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                        </svg>
                        5,5%
                    </span>
                    <span class="text-xs text-gray-500 font-light ms-3 dark:text-white">More than last month</span>
                </div>
            </div>
            <div class="bg-green-300 rounded-xl p-3">
                <svg class="w-7 h-7 text-white transition duration-75 dark:text-gray-100 group-hover:text-gray-900 dark:group-hover:text-white"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                </svg>
            </div>
        </div>
        <div class="flex-1 bg-white dark:bg-gray-700 rounded-xl px-6 py-3 flex flex-row justify-between items-center">
            <div class="flex flex-col">
                <span class="text-sm font-light text-gray-500 mb-3 dark:text-white">Total task on progress</span>
                <span class="text-3xl font-bold text-gray-900 dark:text-white">250</span>
                <div class="flex flex-row items-center">
                    <span class="text-green-400 text-xs flex flex-row items-center"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 me-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                        </svg>
                        3,5%
                    </span>
                    <span class="text-xs text-gray-500 font-light ms-3 dark:text-white">More than last month</span>
                </div>
            </div>
            <div class="bg-yellow-300 rounded-xl p-3">
                <svg class="w-7 h-7 text-white transition duration-75 dark:text-gray-100 group-hover:text-gray-900 dark:group-hover:text-white"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
            </div>
        </div>
        <div class="flex-1 bg-white dark:bg-gray-700 rounded-xl px-6 py-3 flex flex-row justify-between items-center">
            <div class="flex flex-col">
                <span class="text-sm font-light text-gray-500 mb-3 dark:text-white">Total team</span>
                <span class="text-3xl font-bold text-gray-900 dark:text-white">150</span>
                <div class="flex flex-row items-center">
                    <span class="text-green-400 text-xs flex flex-row items-center"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 me-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                        </svg>
                        0,5%
                    </span>
                    <span class="text-xs text-gray-500 font-light ms-3 dark:text-white">More than last month</span>
                </div>
            </div>
            <div class="bg-pink-300 rounded-xl p-3">
                <svg class="w-7 h-7 text-white transition duration-75 dark:text-gray-100 group-hover:text-gray-900 dark:group-hover:text-white"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                </svg>
            </div>
        </div>
    </div>
    <div class="flex flex-row sm:flex-col md:flex-col lg:flex-row gap-4 mt-5">
        <div
            class="flex-1 bg-slate-150 dark:bg-gray-700 rounded-xl p-6 border-4 border-slate-50 shadow-sm dark:border-0">
            <div class="flex flex-col">
                <span
                    class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-lg dark:bg-blue-900 dark:text-blue-300 mb-6 text-center inline-flex w-fit">UI
                    Design</span>
                <span class="text-xl font-bold text-gray-900 dark:text-white">E-Commerce Design</span>
                <span
                    class="text-sm font-extralight text-gray-500 dark:text-slate-300 mt-2 break-words max-w-64 mb-3">This
                    project focuses
                    on
                    redesigning the
                    admin dashboard</span>
                <span
                    class="text-gray-400 text-xs font-medium px-2.5 py-1.5 rounded-lg dark:bg-gray-300 dark:text-gray-700 text-center inline-flex w-fit border border-1 border-gray-300 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 me-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                    </svg>

                    1/5</span>
                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-600">
                <div class="flex flex-row justify-between">
                    <div class="flex -space-x-3 rtl:space-x-reverse ">
                        <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                            src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                            alt="">
                        <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                            src="https://i.pinimg.com/736x/8b/42/da/8b42da28243a95af418ef32cc5df9261.jpg"
                            alt="">
                        <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                            src="https://i.pinimg.com/736x/36/f0/c6/36f0c69fccfd2113b617c371f0969dfe.jpg"
                            alt="">
                        <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                            href="#">+3</a>
                    </div>
                    <div class="flex flex-row gap-5">
                        <span
                            class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            </svg>
                            3
                        </span>
                        <span
                            class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                            </svg>
                            2
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="flex-1 bg-slate-150 dark:bg-gray-700 rounded-xl p-6 border-4 border-slate-50 shadow-sm dark:border-0">
            <div class="flex flex-col">
                <span
                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-lg dark:bg-green-900 dark:text-green-300 mb-6 text-center inline-flex w-fit">Build
                    UI</span>
                <span class="text-xl font-bold text-gray-900 dark:text-white">Reporting Page Design</span>
                <span
                    class="text-sm font-extralight text-gray-500 dark:text-slate-300 mt-2 break-words max-w-64 mb-3">This
                    project focuses
                    on
                    redesigning the
                    admin dashboard</span>
                <span
                    class="text-gray-400 text-xs font-medium px-2.5 py-1.5 rounded-lg dark:bg-gray-300 dark:text-gray-700 text-center inline-flex w-fit border border-1 border-gray-300 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 me-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                    </svg>

                    1/5</span>
                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-600">
                <div class="flex flex-row justify-between">
                    <div class="flex -space-x-3 rtl:space-x-reverse ">
                        <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                            src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                            alt="">
                        <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                            src="https://i.pinimg.com/736x/8b/42/da/8b42da28243a95af418ef32cc5df9261.jpg"
                            alt="">
                        <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                            src="https://i.pinimg.com/736x/36/f0/c6/36f0c69fccfd2113b617c371f0969dfe.jpg"
                            alt="">
                        <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                            href="#">+3</a>
                    </div>
                    <div class="flex flex-row gap-5">
                        <span
                            class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            </svg>
                            3
                        </span>
                        <span
                            class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                            </svg>
                            2
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="flex-1 bg-slate-150 dark:bg-gray-700 rounded-xl p-6 border-4 border-slate-50 shadow-sm dark:border-0">
            <div class="flex flex-col">
                <span
                    class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-lg dark:bg-yellow-900 dark:text-yellow-300 mb-6 inline-flex w-fit">Implementasi</span>
                <span class="text-xl font-bold text-gray-900 dark:text-white">Master Page</span>
                <span
                    class="text-sm font-extralight text-gray-500 dark:text-slate-300 mt-2 break-words max-w-64 mb-3">This
                    project focuses
                    on
                    redesigning the
                    admin dashboard</span>
                <span
                    class="text-gray-400 text-xs font-medium px-2.5 py-1.5 rounded-lg dark:bg-gray-300 dark:text-gray-700 text-center inline-flex w-fit border border-1 border-gray-300 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 me-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                    </svg>

                    1/5</span>
                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-600">
                <div class="flex flex-row justify-between">
                    <div class="flex -space-x-3 rtl:space-x-reverse ">
                        <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                            src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                            alt="">
                        <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                            src="https://i.pinimg.com/736x/8b/42/da/8b42da28243a95af418ef32cc5df9261.jpg"
                            alt="">
                        <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                            src="https://i.pinimg.com/736x/36/f0/c6/36f0c69fccfd2113b617c371f0969dfe.jpg"
                            alt="">
                        <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                            href="#">+3</a>
                    </div>
                    <div class="flex flex-row gap-5">
                        <span
                            class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            </svg>
                            3
                        </span>
                        <span
                            class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                            </svg>
                            2
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="flex-1 bg-slate-150 dark:bg-gray-700 rounded-xl p-6 border-4 border-slate-50 shadow-sm dark:border-0">
            <div class="flex flex-col">
                <span
                    class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-lg dark:bg-yellow-900 dark:text-yellow-300 mb-6 inline-flex w-fit">Implementasi</span>
                <span class="text-xl font-bold text-gray-900 dark:text-white">Master Page</span>
                <span
                    class="text-sm font-extralight text-gray-500 dark:text-slate-300 mt-2 break-words max-w-64 mb-3">This
                    project focuses
                    on
                    redesigning the
                    admin dashboard</span>
                <span
                    class="text-gray-400 text-xs font-medium px-2.5 py-1.5 rounded-lg dark:bg-gray-300 dark:text-gray-700 text-center inline-flex w-fit border border-1 border-gray-300 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 me-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                    </svg>

                    1/5</span>
                <hr class="h-px my-5 bg-gray-200 border-0 dark:bg-gray-600">
                <div class="flex flex-row justify-between">
                    <div class="flex -space-x-3 rtl:space-x-reverse ">
                        <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                            src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                            alt="">
                        <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                            src="https://i.pinimg.com/736x/8b/42/da/8b42da28243a95af418ef32cc5df9261.jpg"
                            alt="">
                        <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                            src="https://i.pinimg.com/736x/36/f0/c6/36f0c69fccfd2113b617c371f0969dfe.jpg"
                            alt="">
                        <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                            href="#">+3</a>
                    </div>
                    <div class="flex flex-row gap-5">
                        <span
                            class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            </svg>
                            3
                        </span>
                        <span
                            class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                            </svg>
                            2
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- table start -->
    <div class="p-8 bg-slate-150 shadow-sm border-4 border-gray-50 dark:bg-gray-700 mt-5 rounded-xl">
        <div class="flex flex-col">
            <span class="font-bold text-xl text-gray-900 dark:text-slate-100">Performance Team</span>
            <span class="text-gray-500 dark:text-slate-100 font-extralight text-sm">Monitoring performance team
                monthly</span>
        </div>
        <div class="relative overflow-x-auto sm:rounded-lg mt-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-50 dark:text-gray-600">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Assigned
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Completed
                        </th>
                        <th scope="col" class="px-6 py-3">
                            On Going
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Overdue
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Department
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-4 font-light">
                            0250100
                        </td>
                        <td
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex flex-row items-center">
                            <img class="w-8 h-8 border-white rounded-lg dark:border-gray-800 me-2"
                                src="https://i.pinimg.com/736x/a7/96/9e/a7969ea5987c3a96e90c4f1896656d5a.jpg"
                                alt=""> John Smith
                        </td>
                        <td class="px-6 py-4 font-light">
                            120 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            50 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            100 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            75 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            Development
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="badge-green">Excellent</span>
                        </td>
                    </tr>
                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-4 font-light">
                            0250100
                        </td>
                        <td
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex flex-row items-center">
                            <img class="w-8 h-8 border-white rounded-lg dark:border-gray-800 me-2"
                                src="https://i.pinimg.com/736x/a7/96/9e/a7969ea5987c3a96e90c4f1896656d5a.jpg"
                                alt=""> Romi Smith
                        </td>
                        <td class="px-6 py-4 font-light">
                            120 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            50 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            100 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            75 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            Development
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="badge-yellow">Excellent</span>
                        </td>
                    </tr>
                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-4 font-light">
                            0250100
                        </td>
                        <td
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex flex-row items-center">
                            <img class="w-8 h-8 border-white rounded-lg dark:border-gray-800 me-2"
                                src="https://i.pinimg.com/736x/a7/96/9e/a7969ea5987c3a96e90c4f1896656d5a.jpg"
                                alt=""> Soy Joy
                        </td>
                        <td class="px-6 py-4 font-light">
                            120 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            50 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            100 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            75 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            Development
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="badge-green">Excellent</span>
                        </td>
                    </tr>
                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-4 font-light">
                            0250100
                        </td>
                        <td
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex flex-row items-center">
                            <img class="w-8 h-8 border-white rounded-lg dark:border-gray-800 me-2"
                                src="https://i.pinimg.com/736x/a7/96/9e/a7969ea5987c3a96e90c4f1896656d5a.jpg"
                                alt=""> Macarell
                        </td>
                        <td class="px-6 py-4 font-light">
                            120 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            50 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            100 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            75 task
                        </td>
                        <td class="px-6 py-4 font-light">
                            Development
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="badge-yellow">Good</span>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!-- table end -->

    @push('scripts')
        <script>
            flatpickr("#rangeInput", {
                mode: "range",
                dateFormat: "Y-m-d",
                defaultDate: [new Date()], // optional: set tanggal hari ini
            });
        </script>
    @endpush
</x-app-layout>
