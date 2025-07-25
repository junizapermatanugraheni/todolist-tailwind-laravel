<x-app-layout>
    @include('layouts.header', ['title' => 'Project'])
    <div class="flex flex-col mt-5 bg-white rounded-lg px-6 py-4 dark:bg-gray-700">
        <div class="flex flex-row justify-between items-center">
            <div class="flex flex-col">
                <div class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">
                    Task Management
                </div>
                <span class="font-semibold dark:text-white">Project : <span class="badge-primary">E-Commerce Clothes
                        Project</span></span>
            </div>

            <div class="flex -space-x-3 rtl:space-x-reverse ">
                <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                    src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg" alt="">
                <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                    src="https://i.pinimg.com/736x/8b/42/da/8b42da28243a95af418ef32cc5df9261.jpg" alt="">
                <img class="w-8 h-8 border-white rounded-full dark:border-gray-800"
                    src="https://i.pinimg.com/736x/36/f0/c6/36f0c69fccfd2113b617c371f0969dfe.jpg" alt="">
                <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                    href="#">+3</a>
            </div>
        </div>
    </div>
    <div class="flex flex-row gap-5 mt-4 ">
        <div class="flex-1 flex flex-col bg-white p-2 rounded-xl">
            <div class="flex flex-row items-center justify-between gap-10 border border-orange-400 rounded-xl pe-4">
                <div class="flex flex-row gap-2 dark:text-dark items-center font-semibold">
                    <div class="bg-orange-400 rounded-s-lg py-3 px-3 flex justify-center me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="size-5 text-slate-100">
                            <path fill-rule="evenodd"
                                d="M4.606 12.97a.75.75 0 0 1-.134 1.051 2.494 2.494 0 0 0-.93 2.437 2.494 2.494 0 0 0 2.437-.93.75.75 0 1 1 1.186.918 3.995 3.995 0 0 1-4.482 1.332.75.75 0 0 1-.461-.461 3.994 3.994 0 0 1 1.332-4.482.75.75 0 0 1 1.052.134Z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M5.752 12A13.07 13.07 0 0 0 8 14.248v4.002c0 .414.336.75.75.75a5 5 0 0 0 4.797-6.414 12.984 12.984 0 0 0 5.45-10.848.75.75 0 0 0-.735-.735 12.984 12.984 0 0 0-10.849 5.45A5 5 0 0 0 1 11.25c.001.414.337.75.751.75h4.002ZM13 9a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    TO DO
                    <span class="badge-red">5</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="size-5 dark:text-white">
                    <path
                        d="M10 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10 8.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM11.5 15.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg>
            </div>
            <div class="divide-base-content/25 divide-y *:cursor-move *:items-center" id="todo-tasks">
                <div class="bg-gray-100 dark:bg-gray-700 rounded-xl p-4 mt-4">
                    <div class="flex flex-col">
                        <span class=" mb-3 badge-indigo inline-flex w-fit">UI
                            Designer</span>
                        <span class="text-md font-bold text-gray-900 dark:text-white">Desain Wireframe Halaman
                            Utama</span>
                        <div class="flex flex-row mt-2 items-center">
                            <span class="badge-red">
                                Due : July 25
                            </span>
                            <span class="badge-yellow">Low</span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span class="flex flex-row items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                        </svg>
                                        3
                                    </span>
                                </div>
                            </span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span
                                        class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                        </svg>
                                        2
                                    </span>
                                </div>
                            </span>
                        </div>
                        <div class="flex flex-row gap-7 justify-between items-center mt-3">
                            <div class="flex-1 flex flex-col">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 0%"></div>
                                    </div>
                                    <span class="text-sm font-normal text-gray-600 dark:text-white">0%</span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="flex -space-x-3 rtl:space-x-reverse ">
                                    <img class="w-7 h-7 border-white rounded-full dark:border-gray-800"
                                        src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                                        alt="">
                                    <a class="flex items-center justify-center w-7 h-7 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                                        href="#">+3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 dark:bg-gray-700 rounded-xl p-4 mt-4">
                    <div class="flex flex-col">
                        <span class=" mb-3 badge-purple inline-flex w-fit">Web
                            Developer</span>
                        <span class="text-md font-bold text-gray-900 dark:text-white">Setup Structure Database
                            Product</span>
                        <div class="flex flex-row mt-2 items-center">
                            <span class="badge-red">
                                Due : July 26
                            </span>
                            <span class="badge-red">High</span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span class="flex flex-row items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                        </svg>
                                        3
                                    </span>
                                </div>
                            </span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span
                                        class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                        </svg>
                                        2
                                    </span>
                                </div>
                            </span>
                        </div>
                        <div class="flex flex-row gap-7 justify-between items-center mt-3">
                            <div class="flex-1 flex flex-col">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 0%"></div>
                                    </div>
                                    <span class="text-sm font-normal text-gray-600 dark:text-white">0%</span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="flex -space-x-3 rtl:space-x-reverse ">
                                    <img class="w-7 h-7 border-white rounded-full dark:border-gray-800"
                                        src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                                        alt="">
                                    <a class="flex items-center justify-center w-7 h-7 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                                        href="#">+3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 dark:bg-gray-700 rounded-xl p-4 mt-4">
                    <div class="flex flex-col">
                        <span class="mb-3 badge-primary inline-flex w-fit">Design
                            Graphic</span>
                        <span class="text-md font-bold text-gray-900 dark:text-white">Design Banner Promotion</span>
                        <div class="flex flex-row mt-2 items-center">
                            <span class="badge-red">
                                Due : July 27
                            </span>
                            <span class="badge-orange">Medium</span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span class="flex flex-row items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                        </svg>
                                        3
                                    </span>
                                </div>
                            </span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span
                                        class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                        </svg>
                                        2
                                    </span>
                                </div>
                            </span>
                        </div>
                        <div class="flex flex-row gap-7 justify-between items-center mt-3">
                            <div class="flex-1 flex flex-col">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 0%"></div>
                                    </div>
                                    <span class="text-sm font-normal text-gray-600 dark:text-white">0%</span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="flex -space-x-3 rtl:space-x-reverse ">
                                    <img class="w-7 h-7 border-white rounded-full dark:border-gray-800"
                                        src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                                        alt="">
                                    <a class="flex items-center justify-center w-7 h-7 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                                        href="#">+3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 flex flex-col bg-white p-2 rounded-xl">
            <div class="flex flex-row items-center justify-between gap-10 border border-orange-400 rounded-xl pe-4">
                <div class="flex flex-row gap-2 dark:text-dark items-center font-semibold">
                    <div class="bg-orange-400 rounded-s-lg py-3 px-3 flex justify-center me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="size-5 text-slate-100">
                            <path fill-rule="evenodd"
                                d="M4.606 12.97a.75.75 0 0 1-.134 1.051 2.494 2.494 0 0 0-.93 2.437 2.494 2.494 0 0 0 2.437-.93.75.75 0 1 1 1.186.918 3.995 3.995 0 0 1-4.482 1.332.75.75 0 0 1-.461-.461 3.994 3.994 0 0 1 1.332-4.482.75.75 0 0 1 1.052.134Z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M5.752 12A13.07 13.07 0 0 0 8 14.248v4.002c0 .414.336.75.75.75a5 5 0 0 0 4.797-6.414 12.984 12.984 0 0 0 5.45-10.848.75.75 0 0 0-.735-.735 12.984 12.984 0 0 0-10.849 5.45A5 5 0 0 0 1 11.25c.001.414.337.75.751.75h4.002ZM13 9a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    ON PROGRESS
                    <span class="badge-red">5</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="size-5 dark:text-white">
                    <path
                        d="M10 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10 8.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM11.5 15.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg>
            </div>
            <div class="divide-base-content/25 divide-y *:cursor-move *:items-center" id="onprogress-tasks">
                <div class="bg-gray-100 dark:bg-gray-700 rounded-xl p-4 mt-4">
                    <div class="flex flex-col">
                        <span class=" mb-3 badge-purple inline-flex w-fit">Web
                            Developer</span>
                        <span class="text-md font-bold text-gray-900 dark:text-white">Implementation Login &
                            Register</span>
                        <div class="flex flex-row mt-2 items-center">
                            <span class="badge-red">
                                Due : July 22
                            </span>
                            <span class="badge-red">High</span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span class="flex flex-row items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                        </svg>
                                        3
                                    </span>
                                </div>
                            </span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span
                                        class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                        </svg>
                                        2
                                    </span>
                                </div>
                            </span>
                        </div>
                        <div class="flex flex-row gap-7 justify-between items-center mt-3">
                            <div class="flex-1 flex flex-col">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 50%"></div>
                                    </div>
                                    <span class="text-sm font-normal text-gray-600 dark:text-white">50%</span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="flex -space-x-3 rtl:space-x-reverse ">
                                    <img class="w-7 h-7 border-white rounded-full dark:border-gray-800"
                                        src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                                        alt="">
                                    <a class="flex items-center justify-center w-7 h-7 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                                        href="#">+3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 dark:bg-gray-700 rounded-xl p-4 mt-4">
                    <div class="flex flex-col">
                        <span class=" mb-3 badge-pink inline-flex w-fit">Android
                            Developer</span>
                        <span class="text-md font-bold text-gray-900 dark:text-white">Design Mobile App Page
                            Home</span>
                        <div class="flex flex-row mt-2 items-center">
                            <span class="badge-red">
                                Due : July 24
                            </span>
                            <span class="badge-orange">Medium</span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span class="flex flex-row items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                        </svg>
                                        3
                                    </span>
                                </div>
                            </span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span
                                        class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                        </svg>
                                        2
                                    </span>
                                </div>
                            </span>
                        </div>
                        <div class="flex flex-row gap-7 justify-between items-center mt-3">
                            <div class="flex-1 flex flex-col">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 30%"></div>
                                    </div>
                                    <span class="text-sm font-normal text-gray-600 dark:text-white">30%</span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="flex -space-x-3 rtl:space-x-reverse ">
                                    <img class="w-7 h-7 border-white rounded-full dark:border-gray-800"
                                        src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                                        alt="">
                                    <a class="flex items-center justify-center w-7 h-7 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                                        href="#">+3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 dark:bg-gray-700 rounded-xl p-4 mt-4">
                    <div class="flex flex-col">
                        <span class="mb-3 badge-indigo inline-flex w-fit">UI
                            Designer</span>
                        <span class="text-md font-bold text-gray-900 dark:text-white">Design Banner Promotion</span>
                        <div class="flex flex-row mt-2 items-center">
                            <span class="badge-red">
                                Due : July 23
                            </span>
                            <span class="badge-red">High</span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span class="flex flex-row items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                        </svg>
                                        3
                                    </span>
                                </div>
                            </span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span
                                        class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                        </svg>
                                        2
                                    </span>
                                </div>
                            </span>
                        </div>
                        <div class="flex flex-row gap-7 justify-between items-center mt-3">
                            <div class="flex-1 flex flex-col">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 60%"></div>
                                    </div>
                                    <span class="text-sm font-normal text-gray-600 dark:text-white">60%</span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="flex -space-x-3 rtl:space-x-reverse ">
                                    <img class="w-7 h-7 border-white rounded-full dark:border-gray-800"
                                        src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                                        alt="">
                                    <a class="flex items-center justify-center w-7 h-7 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                                        href="#">+3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 flex flex-col bg-white p-2 rounded-xl">
            <div class="flex flex-row items-center justify-between gap-10 border border-orange-400 rounded-xl pe-4">
                <div class="flex flex-row gap-2 dark:text-dark items-center font-semibold">
                    <div class="bg-orange-400 rounded-s-lg py-3 px-3 flex justify-center me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="size-5 text-slate-100">
                            <path fill-rule="evenodd"
                                d="M4.606 12.97a.75.75 0 0 1-.134 1.051 2.494 2.494 0 0 0-.93 2.437 2.494 2.494 0 0 0 2.437-.93.75.75 0 1 1 1.186.918 3.995 3.995 0 0 1-4.482 1.332.75.75 0 0 1-.461-.461 3.994 3.994 0 0 1 1.332-4.482.75.75 0 0 1 1.052.134Z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M5.752 12A13.07 13.07 0 0 0 8 14.248v4.002c0 .414.336.75.75.75a5 5 0 0 0 4.797-6.414 12.984 12.984 0 0 0 5.45-10.848.75.75 0 0 0-.735-.735 12.984 12.984 0 0 0-10.849 5.45A5 5 0 0 0 1 11.25c.001.414.337.75.751.75h4.002ZM13 9a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    REVIEW
                    <span class="badge-red">5</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="size-5 dark:text-white">
                    <path
                        d="M10 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10 8.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM11.5 15.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg>
            </div>
            <div class="divide-base-content/25 divide-y *:cursor-move *:items-center" id="review-tasks">
                <div class="bg-gray-100 dark:bg-gray-700 rounded-xl p-4 mt-4">
                    <div class="flex flex-col">
                        <span class=" mb-3 badge-indigo inline-flex w-fit">UI Designer</span>
                        <span class="text-md font-bold text-gray-900 dark:text-white">Design UI Categories
                            Product</span>
                        <div class="flex flex-row mt-2 items-center">
                            <span class="badge-red">
                                Due : July 21
                            </span>
                            <span class="badge-red">High</span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span class="flex flex-row items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                        </svg>
                                        3
                                    </span>
                                </div>
                            </span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span
                                        class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                        </svg>
                                        2
                                    </span>
                                </div>
                            </span>
                        </div>
                        <div class="flex flex-row gap-7 justify-between items-center mt-3">
                            <div class="flex-1 flex flex-col">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 100%"></div>
                                    </div>
                                    <span class="text-sm font-normal text-gray-600 dark:text-white">100%</span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="flex -space-x-3 rtl:space-x-reverse ">
                                    <img class="w-7 h-7 border-white rounded-full dark:border-gray-800"
                                        src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                                        alt="">
                                    <a class="flex items-center justify-center w-7 h-7 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                                        href="#">+3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 dark:bg-gray-700 rounded-xl p-4 mt-4">
                    <div class="flex flex-col">
                        <span class=" mb-3 badge-primary inline-flex w-fit">Design Graphic</span>
                        <span class="text-md font-bold text-gray-900 dark:text-white">Ilustration Banner</span>
                        <div class="flex flex-row mt-2 items-center">
                            <span class="badge-red">
                                Due : July 21
                            </span>
                            <span class="badge-red">High</span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span class="flex flex-row items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                        </svg>
                                        3
                                    </span>
                                </div>
                            </span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span
                                        class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                        </svg>
                                        2
                                    </span>
                                </div>
                            </span>
                        </div>
                        <div class="flex flex-row gap-7 justify-between items-center mt-3">
                            <div class="flex-1 flex flex-col">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 100%"></div>
                                    </div>
                                    <span class="text-sm font-normal text-gray-600 dark:text-white">100%</span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="flex -space-x-3 rtl:space-x-reverse ">
                                    <img class="w-7 h-7 border-white rounded-full dark:border-gray-800"
                                        src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                                        alt="">
                                    <a class="flex items-center justify-center w-7 h-7 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                                        href="#">+3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 flex flex-col bg-white p-2 rounded-xl">
            <div class="flex flex-row items-center justify-between gap-10 border border-orange-400 rounded-xl pe-4">
                <div class="flex flex-row gap-2 dark:text-dark items-center font-semibold">
                    <div class="bg-orange-400 rounded-s-lg py-3 px-3 flex justify-center me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="size-5 text-slate-100">
                            <path fill-rule="evenodd"
                                d="M4.606 12.97a.75.75 0 0 1-.134 1.051 2.494 2.494 0 0 0-.93 2.437 2.494 2.494 0 0 0 2.437-.93.75.75 0 1 1 1.186.918 3.995 3.995 0 0 1-4.482 1.332.75.75 0 0 1-.461-.461 3.994 3.994 0 0 1 1.332-4.482.75.75 0 0 1 1.052.134Z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M5.752 12A13.07 13.07 0 0 0 8 14.248v4.002c0 .414.336.75.75.75a5 5 0 0 0 4.797-6.414 12.984 12.984 0 0 0 5.45-10.848.75.75 0 0 0-.735-.735 12.984 12.984 0 0 0-10.849 5.45A5 5 0 0 0 1 11.25c.001.414.337.75.751.75h4.002ZM13 9a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    COMPLETED
                    <span class="badge-red">5</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="size-5 dark:text-white">
                    <path
                        d="M10 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10 8.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM11.5 15.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg>
            </div>
            <div class="divide-base-content/25 divide-y *:cursor-move *:items-center" id="completed-tasks">
                <div class="bg-gray-100 dark:bg-gray-700 rounded-xl p-4 mt-4 cursor-pointer"
                    data-modal-target="select-modal" data-modal-toggle="select-modal">
                    <div class="flex flex-col">
                        <span class=" mb-3 badge-primary inline-flex w-fit">Design Graphic</span>
                        <span class="text-md font-bold text-gray-900 dark:text-white">Logo & Branding</span>
                        <div class="flex flex-row mt-2 items-center">
                            <span class="badge-red">
                                Due : July 20
                            </span>
                            <span class="badge-red">High</span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span class="flex flex-row items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                        </svg>
                                        3
                                    </span>
                                </div>
                            </span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span
                                        class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                        </svg>
                                        2
                                    </span>
                                </div>
                            </span>
                        </div>
                        <div class="flex flex-row gap-7 justify-between items-center mt-3">
                            <div class="flex-1 flex flex-col">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 100%"></div>
                                    </div>
                                    <span class="text-sm font-normal text-gray-600 dark:text-white">100%</span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="flex -space-x-3 rtl:space-x-reverse ">
                                    <img class="w-7 h-7 border-white rounded-full dark:border-gray-800"
                                        src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                                        alt="">
                                    <a class="flex items-center justify-center w-7 h-7 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                                        href="#">+3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 dark:bg-gray-700 rounded-xl p-4 mt-4">
                    <div class="flex flex-col">
                        <span class=" mb-3 badge-purple inline-flex w-fit">Web Developer</span>
                        <span class="text-md font-bold text-gray-900 dark:text-white">Setup Project Laravel &
                            Git</span>
                        <div class="flex flex-row mt-2 items-center">
                            <span class="badge-red">
                                Due : July 20
                            </span>
                            <span class="badge-red">High</span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span class="flex flex-row items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                        </svg>
                                        3
                                    </span>
                                </div>
                            </span>
                            <span class="badge-gray">
                                <div class="flex flex-row">
                                    <span
                                        class="flex flex-row text-gray-500 dark:text-white items-center gap-1 text-sm font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                        </svg>
                                        2
                                    </span>
                                </div>
                            </span>
                        </div>
                        <div class="flex flex-row gap-7 justify-between items-center mt-3">
                            <div class="flex-1 flex flex-col">
                                <div class="flex flex-row items-center gap-2">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 100%"></div>
                                    </div>
                                    <span class="text-sm font-normal text-gray-600 dark:text-white">100%</span>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between">
                                <div class="flex -space-x-3 rtl:space-x-reverse ">
                                    <img class="w-7 h-7 border-white rounded-full dark:border-gray-800"
                                        src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                                        alt="">
                                    <a class="flex items-center justify-center w-7 h-7 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                                        href="#">+3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="select-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">
                        Detail Task
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="select-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <div class="text-gray-900 dark:text-gray-400 mb-4 font-bold text-lg">Logo & Branding</div>
                    <div class="flex flex-col">
                        <div class="flex flex-row gap-1 mb-4 items-center">
                            <div class="flex flex-row gap-2 w-32">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h8m-8 6h16" />
                                </svg>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">Status</p>
                            </div>
                            <span class="badge-green">Completed</span>
                        </div>
                        <div class="flex flex-row gap-1 mb-4 items-center">
                            <div class="flex flex-row gap-2 w-32">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">
                                    Assignee</p>
                            </div>
                            <div class="flex -space-x-3 rtl:space-x-reverse ">
                                <img class="w-7 h-7 border-white rounded-full dark:border-gray-800"
                                    src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                                    alt="">
                                <a class="flex items-center justify-center w-7 h-7 text-xs font-medium text-white bg-gray-400 border-white rounded-full hover:bg-gray-500 dark:border-gray-800"
                                    href="#">+3</a>
                            </div>
                        </div>
                        <div class="flex flex-row gap-1 mb-4 items-center">
                            <div class="flex flex-row gap-2 w-32">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                </svg>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">Due Date</p>
                            </div>
                            <span class="text-sm text-gray-700 font-semibold">July 20, 2025</span>
                        </div>
                        <div class="flex flex-row gap-1 mb-4 items-center">
                            <div class="flex flex-row gap-2 w-32">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                </svg>
                                <p class="text-gray-500 dark:text-gray-400 text-sm">Label</p>
                            </div>
                            <span class="badge-primary">Logo</span>
                            <span class="badge-yellow">Branding</span>
                        </div>
                    </div>
                    {{-- <ul class="space-y-4 mb-4">
                        <li>
                            <input type="radio" id="job-1" name="job" value="job-1" class="hidden peer"
                                required />
                            <label for="job-1"
                                class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 dark:peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">UI/UX Engineer</div>
                                    <div class="w-full text-gray-500 dark:text-gray-400">Flowbite</div>
                                </div>
                                <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="job-2" name="job" value="job-2" class="hidden peer">
                            <label for="job-2"
                                class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 dark:peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">React Developer</div>
                                    <div class="w-full text-gray-500 dark:text-gray-400">Alphabet</div>
                                </div>
                                <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="job-3" name="job" value="job-3" class="hidden peer">
                            <label for="job-3"
                                class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 dark:peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Full Stack Engineer</div>
                                    <div class="w-full text-gray-500 dark:text-gray-400">Apple</div>
                                </div>
                                <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </label>
                        </li>
                    </ul> --}}
                    <div
                        class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700 mb-5">
                        <ul class="flex flex-wrap -mb-px">
                            <li class="me-2">
                                <a href="#comment"
                                    class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500"
                                    aria-current="page">Comment</a>
                            </li>
                            <li class="me-2">
                                <a href="#description"
                                    class="inline-block p-4 border-b-2 rounded-t-lg">Description</a>
                            </li>
                        </ul>
                    </div>
                    <div id="comment" class="mb-6">
                        <form>
                            <div
                                class="w-full  border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                    <label for="your_comment" class="sr-only">Your comment</label>
                                    <textarea id="your_comment" rows="4"
                                        class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                        placeholder="Write a comment..." required></textarea>
                                </div>
                                <div
                                    class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600 border-gray-200">
                                    <button type="submit"
                                        class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                        Post comment
                                    </button>
                                    <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                        <button type="button"
                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                            <svg class="w-4 h-4" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 12 20">
                                                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                                    d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                            </svg>
                                            <span class="sr-only">Attach file</span>
                                        </button>
                                        <button type="button"
                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                            <svg class="w-4 h-4" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 16 20">
                                                <path
                                                    d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                            </svg>
                                            <span class="sr-only">Set location</span>
                                        </button>
                                        <button type="button"
                                            class="inline-flex justify-center items-center p-2 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                            <svg class="w-4 h-4" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 18">
                                                <path
                                                    d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                            </svg>
                                            <span class="sr-only">Upload image</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                        <div class="flex flex-col mb-6">
                            <div class="flex flex-row items-center">
                                <img class="w-7 h-7 me-3 border-white rounded-full dark:border-gray-800"
                                    src="https://i.pinimg.com/736x/b1/88/c6/b188c6801ad1d71d3c962c6e4aa2d0cf.jpg"
                                    alt="">
                                <span class="text-sm me-1 text-gray-800 dark:text-gray-50 font-bold">Jonathan</span>
                                <span class="text-[10px] text-gray-400 dark:text-gray-50 font-normal">1 Hours
                                    Ago</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-xs mt-2 mb-3">Hai, <span
                                    class="badge-pink">@nina</span>Warna logo terlihat cocok dengan
                                tema fashion modern, namun mungkin bisa dipertimbangkan versi monokrom/hitam putih untuk
                                kebutuhan cetak atau watermark.</p>
                            <div class="flex flex-row gap-1 items-center">
                                <span class="badge-gray flex-row gap-2 items-center inline-flex w-fit font-bold"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                    </svg>
                                    1
                                </span>
                                <span class="text-xs font-bold text-gray-800 dark:text-gray-50">Replay</span>
                            </div>
                        </div>
                        <div class="flex flex-col mb-6">
                            <div class="flex flex-row items-center">
                                <img class="w-8 h-8 me-3 border-white rounded-full dark:border-gray-800"
                                    src="https://i.pinimg.com/736x/36/f0/c6/36f0c69fccfd2113b617c371f0969dfe.jpg"
                                    alt="">
                                <span class="text-sm me-1 text-gray-800 dark:text-gray-50 font-bold">Rena</span>
                                <span class="text-[10px] text-gray-400 dark:text-gray-50 font-normal">2 Minutes
                                    Ago</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-xs mt-2 mb-3">Hai, <span
                                    class="badge-pink">@nina</span>Warna logo terlihat cocok dengan
                                tema fashion modern, namun mungkin bisa dipertimbangkan versi monokrom/hitam putih untuk
                                kebutuhan cetak atau watermark.</p>
                            <div class="flex flex-row gap-1 items-center">
                                <span class="badge-gray flex-row gap-2 items-center inline-flex w-fit font-bold"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                    </svg>
                                    4
                                </span>
                                <span class="text-xs font-bold text-gray-800 dark:text-gray-50">Replay</span>
                            </div>
                        </div>
                    </div>
                    <div id="description" class="hidden mb-6">
                        <span class="text-sm text-gray-800 dark:text-gray-50 font-bold">Description Task :</span>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mt-2 mb-2">Membuat logo dan style guide
                            (warna,
                            font,
                            ikon)
                            untuk identitas visual brand e-commerce fashion ini.</p>
                        <span class="text-sm text-gray-800 dark:text-gray-50 font-bold">Working Progress :</span>
                        <img class="h-auto max-w-xs mt-2 rounded-lg"
                            src="https://i.pinimg.com/1200x/e3/76/d9/e376d90a888878ffcfae4b0fb0b532ee.jpg"
                            alt="image description">
                    </div>
                    {{-- <button
                        class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Next step
                    </button> --}}
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
        <script>
            window.addEventListener('load', () => {
                ;
                (function() {
                    // shared example
                    const todoTasks = document.querySelector('#todo-tasks')
                    const onprogressTasks = document.querySelector('#onprogress-tasks')
                    const reviewTasks = document.querySelector('#review-tasks')
                    const completedTasks = document.querySelector('#completed-tasks')

                    if (todoTasks) {
                        new Sortable(todoTasks, {
                            group: 'shared', // set both lists to same group
                            animation: 150
                        });
                    }
                    if (onprogressTasks) {
                        new Sortable(onprogressTasks, {
                            group: 'shared',
                            animation: 150
                        });
                    }
                    if (reviewTasks) {
                        new Sortable(reviewTasks, {
                            group: 'shared',
                            animation: 150
                        });
                    }
                    if (completedTasks) {
                        new Sortable(completedTasks, {
                            group: 'shared',
                            animation: 150
                        });
                    }
                })()
            })
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const tabLinks = document.querySelectorAll("a[href^='#']");
                const tabContents = document.querySelectorAll("#comment, #description");

                tabLinks.forEach(link => {
                    link.addEventListener("click", function(e) {
                        e.preventDefault();

                        // Hapus semua status aktif
                        tabLinks.forEach(l => l.classList.remove("text-blue-600", "border-blue-600",
                            "dark:text-blue-500", "dark:border-blue-500", "active"));
                        tabContents.forEach(c => c.classList.add("hidden"));

                        // Tambahkan status aktif ke tab yg diklik
                        this.classList.add("text-blue-600", "border-blue-600", "dark:text-blue-500",
                            "dark:border-blue-500", "active");

                        // Tampilkan konten yang sesuai
                        const targetId = this.getAttribute("href");
                        const target = document.querySelector(targetId);
                        if (target) {
                            target.classList.remove("hidden");
                        }
                    });
                });
            });
        </script>
    @endpush
</x-app-layout>
