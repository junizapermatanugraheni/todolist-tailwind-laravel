@php
    $menus = [
        ['title' => 'Dashboard', 'icon' => 'dashboard-icon', 'route' =>  route('dashboard')],
        ['title' => 'Project', 'icon' => 'project-icon', 'route' => route('project.index')],
        ['title' => 'Task', 'icon' => 'task-icon', 'route' => '#'],
        ['title' => 'Calendar', 'icon' => 'calendar-icon', 'route' => '#'],
        ['divider' => true],
        ['title' => 'Profile', 'icon' => 'profile-icon', 'route' => '#'],
        ['title' => 'Setting', 'icon' => 'setting-icon', 'route' => '#'],
    ];
@endphp

<aside id="default-sidebar"
    class="fixed inset-y-4 left-4 z-40 w-64 bg-slate-150 border-4 border-slate-50 dark:bg-gray-800 shadow-xl rounded-2xl p-4 transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="inline-flex items-center mb-4">
        <button id="toggleDark" class="w-fit bg-indigo-600 dark:bg-indigo-600 px-2 py-2 rounded-xl">
            <!-- Sun icon for light -->
            <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
            </svg>

            <!-- Moon icon for dark -->
            <svg id="icon-moon" class="w-6 h-6 hidden dark: text-slate-50" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
            </svg>
        </button>
        <h3 class="ms-4 font-extrabold text-xl dark:text-white">SMILE</h3>
    </div>
    <div class="relative mb-4">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 text-gray-500 dark:text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>


        </div>
        <input type="text" id="input-group-1"
            class="bg-gray-50 text-gray-900 border-0 text-sm rounded-lg   block w-full ps-10 p-2.5  dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white "
            placeholder="Search">
    </div>
    <h2 class="text-sm font-normal text-gray-500 dark:text-white mb-2">Menu</h2>
    <div class="overflow-y-auto max-h-[calc(90vh-10rem)]">
        <nav class="space-y-2">
            <ul class="font-medium">
                @foreach ($menus as $menu)
                    @if (isset($menu['divider']) && $menu['divider'])
                        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                    @else
                        <li>
                            <a href="{{ $menu['route'] }}"
                                class="flex items-center p-3 text-gray-900 rounded-lg dark:text-white hover:bg-indigo-100 dark:hover:bg-gray-700 group">
                                @include('components.icon.' . $menu['icon'])
                                <span
                                    class="text-sm ms-3 font-normal text-gray-900 dark:text-white">{{ $menu['title'] }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();"
                            class="flex items-center p-3 text-gray-900 rounded-lg dark:text-white hover:bg-indigo-100 dark:hover:bg-gray-700 group">
                            @include('components.icon.logout-icon')
                            <span class="text-sm ms-3 font-normal text-gray-900 dark:text-white">Log Out</span>
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const html = document.documentElement;
            const toggle = document.getElementById('toggleDark');
            const iconSun = document.getElementById('icon-sun');
            const iconMoon = document.getElementById('icon-moon');

            function updateIcons() {
                if (html.classList.contains('dark')) {
                    iconMoon.classList.remove('hidden');
                    iconSun.classList.add('hidden');
                } else {
                    iconMoon.classList.add('hidden');
                    iconSun.classList.remove('hidden');
                }
            }

            toggle.addEventListener('click', () => {
                html.classList.toggle('dark');
                const newTheme = html.classList.contains('dark') ? 'dark' : 'light';
                localStorage.setItem('theme', newTheme);
                updateIcons();
            });

            // Initial render
            updateIcons();
        });
    </script>
@endpush
