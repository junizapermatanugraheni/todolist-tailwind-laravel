<x-app-layout>
    @include('layouts.header', ['title' => 'Project'])
    <div class="flex flex-row justify-between items-center mt-5 px-2">
        <div class="text-lg font-semibold text-gray-900 dark:text-gray-100 ">
            Project
        </div>
        <button class="btn-indigo flex flex-row gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                <path
                    d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
            </svg>
            Add Project
        </button>
    </div>
    <div class="flex flex-row gap-5 mt-5">
        <div class="flex-1 flex flex-col gap-4">
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
            <div
                class="bg-slate-150 dark:bg-gray-700 rounded-xl p-6 border-4 border-slate-50 shadow-sm dark:border-0">
                <div class="flex flex-col">
                    <span class="text-xl font-bold text-gray-900 dark:text-white">E-Commerce Clothes</span>
                    <div
                        class="flex flex-row gap-2 items-center text-xs font-light mt-2 text-gray-500 dark:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Due July 26
                        <span class="badge-red">Low</span>
                    </div>
                    <span
                        class="text-sm font-extralight text-gray-600 dark:text-slate-300 mt-2 break-words max-w-64 mb-3">This
                        project focuses
                        on
                        redesigning the
                        admin dashboard</span>
                    <span
                        class="bg-transparent border border-1 border-gray-400 px-2.5 py-0.5 rounded-lg dark:text-slate-100 text-gray-500 font-medium inline-flex w-fit text-xs">Web
                        Developer</span>
                    <div class="flex justify-between mb-1 mt-3">
                        <span class="text-sm font-normal text-gray-600 dark:text-white">Project Progress</span>
                        <span class="text-sm font-normal text-gray-600 dark:text-white">45%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                    </div>
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
                class="bg-slate-150 dark:bg-gray-700 rounded-xl p-6 border-4 border-slate-50 shadow-sm dark:border-0">
                <div class="flex flex-col">
                    <span class="text-xl font-bold text-gray-900 dark:text-white">E-Commerce Clothes</span>
                    <div
                        class="flex flex-row gap-2 items-center text-xs font-light mt-2 text-gray-500 dark:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Due July 26
                        <span class="badge-red">Low</span>
                    </div>
                    <span
                        class="text-sm font-extralight text-gray-600 dark:text-slate-300 mt-2 break-words max-w-64 mb-3">This
                        project focuses
                        on
                        redesigning the
                        admin dashboard</span>
                    <span
                        class="bg-transparent border border-1 border-gray-400 px-2.5 py-0.5 rounded-lg dark:text-slate-100 text-gray-500 font-medium inline-flex w-fit text-xs">Web
                        Developer</span>
                    <div class="flex justify-between mb-1 mt-3">
                        <span class="text-sm font-normal text-gray-600 dark:text-white">Project Progress</span>
                        <span class="text-sm font-normal text-gray-600 dark:text-white">45%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                    </div>
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
        <div class="flex-1 flex flex-col gap-4">
            <div class="flex flex-row items-center justify-between gap-10 pe-4 rounded-xl border border-pink-400">
                <div class="flex flex-row gap-2 dark:text-white items-center font-semibold">
                    <div class="bg-pink-400 rounded-s-lg py-3 px-3 flex justify-center me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="size-5 text-slate-100">
                            <path fill-rule="evenodd"
                                d="M15.312 11.424a5.5 5.5 0 0 1-9.201 2.466l-.312-.311h2.433a.75.75 0 0 0 0-1.5H3.989a.75.75 0 0 0-.75.75v4.242a.75.75 0 0 0 1.5 0v-2.43l.31.31a7 7 0 0 0 11.712-3.138.75.75 0 0 0-1.449-.39Zm1.23-3.723a.75.75 0 0 0 .219-.53V2.929a.75.75 0 0 0-1.5 0V5.36l-.31-.31A7 7 0 0 0 3.239 8.188a.75.75 0 1 0 1.448.389A5.5 5.5 0 0 1 13.89 6.11l.311.31h-2.432a.75.75 0 0 0 0 1.5h4.243a.75.75 0 0 0 .53-.219Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    ON PROGRESS
                    <span class="badge-red">2</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="size-5 dark:text-white">
                    <path
                        d="M10 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10 8.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM11.5 15.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg>
            </div>
            <div
                class="bg-slate-150 dark:bg-gray-700 rounded-xl p-6 border-4 border-slate-50 shadow-sm dark:border-0">
                <div class="flex flex-col">
                    <span class="text-xl font-bold text-gray-900 dark:text-white">E-Commerce Clothes</span>
                    <div
                        class="flex flex-row gap-2 items-center text-xs font-light mt-2 text-gray-500 dark:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Due July 26
                        <span class="badge-red">Low</span>
                    </div>
                    <span
                        class="text-sm font-extralight text-gray-600 dark:text-slate-300 mt-2 break-words max-w-64 mb-3">This
                        project focuses
                        on
                        redesigning the
                        admin dashboard</span>
                    <span
                        class="bg-transparent border border-1 border-gray-400 px-2.5 py-0.5 rounded-lg dark:text-slate-100 text-gray-500 font-medium inline-flex w-fit text-xs">Web
                        Developer</span>
                    <div class="flex justify-between mb-1 mt-3">
                        <span class="text-sm font-normal text-gray-600 dark:text-white">Project Progress</span>
                        <span class="text-sm font-normal text-gray-600 dark:text-white">45%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                    </div>
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
        <div class="flex-1 flex flex-col gap-4">
            <div class="flex flex-row items-center justify-between gap-10 pe-4 rounded-xl border border-green-400">
                <div class="flex flex-row gap-2 dark:text-white items-center font-semibold">
                    <div class="bg-green-400 rounded-s-lg py-3 px-3 flex justify-center me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="size-5 text-slate-100">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    COMPLETED
                    <span class="badge-red">1</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="size-5 dark:text-white">
                    <path
                        d="M10 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10 8.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM11.5 15.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg>
            </div>
            <div
                class="bg-slate-150 dark:bg-gray-700 rounded-xl p-6 border-4 border-slate-50 shadow-sm dark:border-0">
                <div class="flex flex-col">
                    <span class="text-xl font-bold text-gray-900 dark:text-white">E-Commerce Clothes</span>
                    <div
                        class="flex flex-row gap-2 items-center text-xs font-light mt-2 text-gray-500 dark:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Due July 26
                        <span class="badge-red">Low</span>
                    </div>
                    <span
                        class="text-sm font-extralight text-gray-600 dark:text-slate-300 mt-2 break-words max-w-64 mb-3">This
                        project focuses
                        on
                        redesigning the
                        admin dashboard</span>
                    <span
                        class="bg-transparent border border-1 border-gray-400 px-2.5 py-0.5 rounded-lg dark:text-slate-100 text-gray-500 font-medium inline-flex w-fit text-xs">Web
                        Developer</span>
                    <div class="flex justify-between mb-1 mt-3">
                        <span class="text-sm font-normal text-gray-600 dark:text-white">Project Progress</span>
                        <span class="text-sm font-normal text-gray-600 dark:text-white">45%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                    </div>
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
        <div class="flex-1 flex flex-col">
            <div class="bg-slate-150 border-4 border-white rounded-xl px-6 py-6 flex flex-col dark:bg-gray-700">
                <div class="flex flex-row justify-between items-center dark:text-white">
                    <span class="font-semibold text-md ">OUR TEAM</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="size-5 dark:text-white">
                        <path
                            d="M10 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10 8.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM11.5 15.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                    </svg>
                </div>
                <div class="flex flex-row justify-between mt-3">
                    <span class="text-sm font-semibold text-gray-600 dark:text-white">Team</span>
                    <span class="text-sm font-semibold text-gray-600 dark:text-white">Task Completed</span>
                </div>
                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-600">
                <div class="flex flex-row justify-between mb-1 gap-28 items-center">
                    <span class="text-sm font-normal text-gray-600 dark:text-white">Web Developer</span>
                    <div class="flex-1 flex flex-col">
                        <span class="text-xs font-normal text-gray-600 dark:text-white text-end">25%</span>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 25%"></div>
                        </div>
                    </div>
                </div>
                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-600">
                <div class="flex flex-row justify-between mb-1 gap-28 items-center">
                    <span class="text-sm font-normal text-gray-600 dark:text-white">Android Developer</span>
                    <div class="flex-1 flex flex-col">
                        <span class="text-xs font-normal text-gray-600 dark:text-white text-end">45%</span>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                </div>
                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-600">
                <div class="flex flex-row justify-between mb-1 gap-28 items-center">
                    <span class="text-sm font-normal text-gray-600 dark:text-white">UI Designer</span>
                    <div class="flex-1 flex flex-col">
                        <span class="text-xs font-normal text-gray-600 dark:text-white text-end">35%</span>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 35%"></div>
                        </div>
                    </div>
                </div>
                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-600">
                <div class="flex flex-row justify-between mb-1 gap-28 items-center">
                    <span class="text-sm font-normal text-gray-600 dark:text-white">Design Graphic</span>
                    <div class="flex-1 flex flex-col">
                        <span class="text-xs font-normal text-gray-600 dark:text-white text-end">15%</span>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-300">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 15%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow p-5 w-[400px] mt-5">
                <div class="flex justify-between items-center mb-4">
                    <button onclick="changeMonth(-1)" class="text-gray-500 hover:text-black">←</button>
                    <h2 id="monthYear" class="text-lg font-semibold text-gray-800">Month Year</h2>
                    <button onclick="changeMonth(1)" class="text-gray-500 hover:text-black">→</button>
                </div>

                <div class="grid grid-cols-7 text-xs text-center text-gray-400 mb-2">
                    <div>Su</div>
                    <div>Mo</div>
                    <div>Tu</div>
                    <div>We</div>
                    <div>Th</div>
                    <div>Fr</div>
                    <div>Sa</div>
                </div>
                <div id="calendar" class="grid grid-cols-7 text-center gap-1 text-sm text-gray-700"></div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            const calendar = document.getElementById("calendar");
            const monthYear = document.getElementById("monthYear");
            let date = new Date();

            function renderCalendar() {
                const year = date.getFullYear();
                const month = date.getMonth();

                const firstDay = new Date(year, month, 1).getDay();
                const lastDate = new Date(year, month + 1, 0).getDate();

                const today = new Date();
                calendar.innerHTML = "";
                monthYear.innerText = `${date.toLocaleString("default", { month: "long" })} ${year}`;

                for (let i = 0; i < firstDay; i++) {
                    calendar.innerHTML += `<div class="text-gray-300">.</div>`;
                }

                for (let i = 1; i <= lastDate; i++) {
                    const isToday =
                        i === today.getDate() &&
                        month === today.getMonth() &&
                        year === today.getFullYear();

                    calendar.innerHTML += `
          <div class="${isToday ? 'bg-blue-500 text-white' : 'hover:bg-blue-100'} rounded-full py-1">
            ${i}
          </div>
        `;
                }
            }

            function changeMonth(offset) {
                date.setMonth(date.getMonth() + offset);
                renderCalendar();
            }

            renderCalendar();
        </script>
    @endpush
</x-app-layout>
