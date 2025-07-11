<x-app-layout>
    @include('layouts.header', ['title' => 'Project'])
    <div class="mt-5">
        {{-- <div class="flex flex-row justify-between gap-2 bg-white p-4 rounded-xl">
            <button type="button" class="btn-light bg-white flex flex-row mb-0 text-gray-700"><svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 me-2">
                    <path
                        d="M17 2.75a.75.75 0 0 0-1.5 0v5.5a.75.75 0 0 0 1.5 0v-5.5ZM17 15.75a.75.75 0 0 0-1.5 0v1.5a.75.75 0 0 0 1.5 0v-1.5ZM3.75 15a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5a.75.75 0 0 1 .75-.75ZM4.5 2.75a.75.75 0 0 0-1.5 0v5.5a.75.75 0 0 0 1.5 0v-5.5ZM10 11a.75.75 0 0 1 .75.75v5.5a.75.75 0 0 1-1.5 0v-5.5A.75.75 0 0 1 10 11ZM10.75 2.75a.75.75 0 0 0-1.5 0v1.5a.75.75 0 0 0 1.5 0v-1.5ZM10 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4ZM3.75 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4ZM16.25 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                </svg>

                </svg>
                Filter</button>
            <div class="flex flex-row justify-end">
                <button type="button" class="btn-light bg-white flex flex-row mb-0 text-gray-700"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 me-2">
                        <path
                            d="M13 4.5a2.5 2.5 0 1 1 .702 1.737L6.97 9.604a2.518 2.518 0 0 1 0 .792l6.733 3.367a2.5 2.5 0 1 1-.671 1.341l-6.733-3.367a2.5 2.5 0 1 1 0-3.475l6.733-3.366A2.52 2.52 0 0 1 13 4.5Z" />
                    </svg>
                    Share</button>
                <button type="button" class="btn-indigo bg-indigo-600 flex flex-row mb-0"> <svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                        <path
                            d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                    </svg>

                    Add Project</button>
            </div>
        </div> --}}
        <div class="flex flex-row justify-end">
            <button type="button" class="btn-light bg-white flex flex-row mb-0 text-gray-700"><svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 me-2">
                    <path
                        d="M13 4.5a2.5 2.5 0 1 1 .702 1.737L6.97 9.604a2.518 2.518 0 0 1 0 .792l6.733 3.367a2.5 2.5 0 1 1-.671 1.341l-6.733-3.367a2.5 2.5 0 1 1 0-3.475l6.733-3.366A2.52 2.52 0 0 1 13 4.5Z" />
                </svg>
                Share</button>
            <button type="button" class="btn-indigo bg-indigo-600 flex flex-row mb-0"> <svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path
                        d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                </svg>

                Add Project</button>
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
                        class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-lg dark:bg-green-900 dark:text-green-300 mb-6 text-center inline-flex w-fit">Front
                        End</span>
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
                        class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-lg dark:bg-yellow-900 dark:text-yellow-300 mb-6 inline-flex w-fit">Backend</span>
                    <span class="text-xl font-bold text-gray-900 dark:text-white">Master Page</span>
                    <span
                        class="text-sm font-extralight text-gray-500 dark:text-slate-300 mt-2 break-words max-w-64 mb-3">This
                        project focuses
                        on
                        redesigning the
                        admin dashboard</span>
                    <span
                        class="text-gray-400 text-xs font-medium px-2.5 py-1.5 rounded-lg dark:bg-gray-300 dark:text-gray-700 text-center inline-flex w-fit border border-1 border-gray-300 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6 me-2">
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
                class="flex-1 bg-slate-150 dark:bg-gray-700 rounded-xl p-6 border-2 border-dashed border-gray-500 shadow-sm dark:border-0 flex justify-center">
                <div class="flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M19.5 21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3h-5.379a.75.75 0 0 1-.53-.22L11.47 3.66A2.25 2.25 0 0 0 9.879 3H4.5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h15Zm-6.75-10.5a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V10.5Z"
                            clip-rule="evenodd" />
                    </svg>

                    <span class="text-lg font-normal text-gray-700 dark:text-white mt-2">Add New Project</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
