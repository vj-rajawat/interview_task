<div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">
    <!-- Loading screen -->
    <div x-ref="loading" class="fixed inset-0 z-[200] flex items-center justify-center text-white bg-black bg-opacity-50" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
        Loading.....
    </div>
    <!-- Sidebar backdrop -->
    <div x-show.in.out.opacity="isSidebarOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"></div>
    <!-- Sidebar -->
    <aside x-transition:enter="transition transform duration-300" x-transition:enter-start="-translate-x-full opacity-30  ease-in" x-transition:enter-end="translate-x-0 opacity-100 ease-out" x-transition:leave="transition transform duration-1000 " x-transition:leave-start="translate-x-0 opacity-100 ease-out" x-transition:leave-end="-translate-x-full opacity-0 ease-in" class=" fixed inset-y-0 z-10 flex flex-col flex-shrink-0 lg:w-20 w-64  max-h-screen overflow-hidden transition-all
        transform bg-white border-r shadow-lg lg:z-auto lg:static lg:shadow-none" :class="{'-translate-x-full lg:translate-x-0 lg:w-60': !isSidebarOpen}">
        <!-- sidebar header -->
        <div class="flex items-center justify-between flex-shrink-0 p-2" :class="{ 'lg:justify-start': !isSidebarOpen }">
            <span class="p-2 text-xl font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">
                <span :class="{ 'lg:hidden': isSidebarOpen }">Music</span>
            </span>
            <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden">
                <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>



        <!-- Sidebar Links... -->
        <x-adminsidebar />
        <!-- Sidebar Links... -->

        <!-- Sidebar footer -->
        <div class="flex-shrink-0 p-2 border-t max-h-14   cursor-pointer">
            <a class="flex items-center justify-center w-full px-4 py-2 space-x-1 text-white font-medium tracking-wider uppercase bg-red-800 border  rounded-md focus:outline-none focus:rin" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                </span>
                <span :class="{'lg:hidden': isSidebarOpen}"> Logout </span>
            </a>



        </div>
    </aside>

    <div class="flex flex-col flex-1 h-full overflow-hidden">
        <header class="flex-shrink-0 border-b">
            <div class="flex items-center justify-between p-2">
                <!-- Navbar left -->
                <div class="flex items-center space-x-3">
                    <span class="p-2 text-xl font-semibold tracking-wider uppercase lg:hidden">NADA</span>
                    <!-- Toggle sidebar button -->
                    <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none focus:ring">
                        <svg class="w-4 h-4 text-gray-600  rotate-180" :class="{ 'transform transition-transform  rotate-180': !isSidebarOpen }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                        </svg>
                    </button>

                </div>

                <!-- Mobile search box -->
                <div x-show.transition="isSearchBoxOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
                    <div @click.away="isSearchBoxOpen = false" class="absolute inset-x-0 flex items-center justify-between p-2 bg-white shadow-md">
                        <div class="flex items-center flex-1 px-2 space-x-2">
                            <!-- search icon -->
                            <span>
                                <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </span>
                            <input type="text" placeholder="Search" class="w-full px-4 py-3 text-gray-600 rounded-md focus:bg-gray-100 focus:outline-none" />
                        </div>
                        <!-- close button -->
                        <button @click="isSearchBoxOpen = false" class="flex-shrink-0 p-4 rounded-md">
                            <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Desktop search box -->

                <!-- Navbar right -->
                <div class="relative flex items-center space-x-3 mr-5">
                    <!-- Search button -->
                    <button @click="isSearchBoxOpen = true" class="p-2 bg-gray-100 rounded-full md:hidden focus:outline-none focus:ring hover:bg-gray-200">
                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    <!-- Services Menu -->
                    <!-- User Menu -->

        </header>



        <script>
            const setup = () => {
                return {
                    loading: true,
                    isSidebarOpen: false,
                    toggleSidbarMenu() {
                        this.isSidebarOpen = !this.isSidebarOpen
                    },
                    isSettingsPanelOpen: false,
                    isSearchBoxOpen: false,
                }
            }
        </script>