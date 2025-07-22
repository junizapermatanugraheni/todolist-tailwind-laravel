<x-app-layout>
    @include('layouts.header', ['title' => 'Project'])
    <div class="flex flex-col mt-5 bg-white rounded-lg px-6 py-4 dark:bg-gray-700">
        <div class="flex flex-row justify-between items-center">
            <div class="flex flex-col">
                <div class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">
                    Task Management
                </div>
                <span class="font-semibold">Project : <span class="badge-primary">E-Commerce Clothes Project</span></span>
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
                <div class="flex flex-row gap-2 dark:text-white items-center font-semibold">
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
                <div class="flex flex-row gap-2 dark:text-white items-center font-semibold">
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
                <div class="flex flex-row gap-2 dark:text-white items-center font-semibold">
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
                <div class="flex flex-row gap-2 dark:text-white items-center font-semibold">
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
    @endpush
</x-app-layout>
