<header class="bg-white dark:bg-gray-800 rounded-xl shadow-sm">
    <div
        class="max-w-9xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex flex-col sm:flex-row items-center gap-4">
            <!-- Judul -->
            <div class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                {{ $title }}
            </div>

            <!-- Search -->
            <div class="w-full sm:w-64 relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                        </path>
                    </svg>
                </span>
                <input type="text" id="search-input"
                    class="block w-full pl-10 pr-4 py-2 text-sm text-gray-900 placeholder-gray-500 bg-gray-100 border-0 focus:ring-0 rounded-lg shadow-sm dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:border-gray-600"
                    placeholder="Search...">
            </div>
        </div>
        <div class="flex flex-col sm:flex-row items-center gap-4">
            <button type="button"
                class="relative text-gray-600 dark:text-gray-300 hover:text-blue-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                    </path>
                </svg>
                <!-- Lencana -->
                <span
                    class="absolute -top-1 -right-1 inline-flex items-center justify-center w-4 h-4 text-xs font-bold leading-none text-white bg-red-600 rounded-full">3</span>
            </button>

            <!-- Avatar Profile -->
            <div class="relative">
                <button type="button" class="focus:outline-none">
                    <img class="w-9 h-9 rounded-full object-cover ring-2 ring-gray-300 dark:ring-gray-600"
                        src="https://i.pravatar.cc/36?img=5" alt="User avatar">
                </button>
            </div>
        </div>
    </div>
</header>
