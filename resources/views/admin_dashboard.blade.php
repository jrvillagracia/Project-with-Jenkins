<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | BHNHS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,500,0,0" />
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="h-screen">
    <div class="flex">
        <!-- Sidebar --> <!-- May na Update dito -->
        <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="1E56A0" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button> <!-- May na Update dito -->

        <!-- Sizing and Icons -->
        <aside id="sidebar" class="fixed top-0 left-0 z-40 w-80 h-screen transition-all duration-300" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto  ">

                <div id="burger" class="cursor-pointer text-white p-4 flex justify-end h-7">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white transition-transform duration-300 hover:scale-110 hover:text-gray-300">
                        <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                    </svg>
                </div>


                <div class="flex items-center justify-center mb-0">
                    <div class=" rounded-full w-20 h-15 flex items-center justify-center mt-10 overflow-hidden">
                        <img src="{{asset('img/logo.png')}}" alt="Logo" class="w-full h-full object-cover" />
                    </div>
                    <div class="ml-4 school-text">
                        <span class="font-bold text-lg hidden md:block mt-10 text-white">Batasan Hills National High School</span>
                    </div>
                </div>

                <div class="pt-5">
                    <hr>
                </div>

                <nav class="mt-7">
                    <ul class="space-y-2">
                        <li class="hover:bg-gray-200 p-3 rounded-md shadow-sm">
                            <a href="{{ route('admin_dashboard') }}" class="flex items-center justify-center md:justify-start space-x-2 text-white hover:text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor" class="w-7 h-7">
                                    <path d="M111.87-520v-328.13H440V-520H111.87Zm0 408.13V-440H440v328.13H111.87ZM520-520v-328.13h328.13V-520H520Zm0 408.13V-440h328.13v328.13H520Z" />
                                </svg>

                                <span class="sidebar-text font-bold">Dashboard</span>
                            </a>
                        </li>
                        <li class="p-3 rounded-md relative">
                            <!-- Dropdown Button -->
                            <button type="button" class="dropdownButton flex items-center w-full p-2 -ml-1 text-base text-white transition duration-75 rounded-lg group hover:bg-gray-100 hover:text-black dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor" class="w-6 h-7 flex-shrink-0">
                                <path d="M120-120v-80h80v-640h400v40h160v600h80v80H680v-600h-80v600H120Zm320-320q17 0 28.5-11.5T480-480q0-17-11.5-28.5T440-520q-17 0-28.5 11.5T400-480q0 17 11.5 28.5T440-440Z"/>
                            </svg>
                                <span class="ml-3 flex-1 sidebar-text font-bold text-left rtl:text-right whitespace-nowrap">Facility</span>
                                <svg id="dropdownIcon" class="w-3 h-3 transition-transform duration-300 transform" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>

                            <ul id="dropdownContent" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{route('admin_facilityRegRoom')}}" class="flex items-center w-full sidebar-text p-2 font-bold text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-black">Regular Room</a>
                                </li>
                                <li>
                                    <a href="{{route('admin_facilitySpecRoom')}}" class="flex items-center w-full sidebar-text p-2 font-bold text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-black">Special Room</a>

                                </li>
                            </ul>
                        </li>


                        <li class="hover:bg-gray-200 p-3 rounded-md">
                            <a href="#" class="flex items-center justify-center md:justify-start space-x-2 text-white hover:text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor" class="w-7 h-7">
                                    <path d="M438-223.37 293.37-367.76l60.39-60.39L438-343.91l168.24-168.24 60.39 60.39L438-223.37ZM202.87-71.87q-37.78 0-64.39-26.61t-26.61-64.39v-554.26q0-37.78 26.61-64.39t64.39-26.61H240v-80h85.5v80h309v-80H720v80h37.13q37.78 0 64.39 26.61t26.61 64.39v554.26q0 37.78-26.61 64.39t-64.39 26.61H202.87Zm0-91h554.26V-560H202.87v397.13Z" />
                                </svg>
                                <span class="sidebar-text font-bold">Event & Activities</span>
                            </a>
                        </li>


                        <li class="p-3 rounded-md relative">
                            <!-- Dropdown Button -->
                            <button type="button" class="dropdownButton flex items-center w-full p-2 -ml-1 text-base text-white transition duration-75 rounded-lg group hover:bg-gray-100 hover:text-black dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor" class="w-6 h-7 flex-shrink-0">
                                    <path d="M202.87-71.87q-37.78 0-64.39-26.61t-26.61-64.39V-612.2q-18.24-12.43-29.12-31.48-10.88-19.06-10.88-43.02v-110.43q0-37.78 26.61-64.39t64.39-26.61h634.26q37.78 0 64.39 26.61t26.61 64.39v110.43q0 23.96-10.88 43.02-10.88 19.05-29.12 31.48v449.33q0 37.78-26.61 64.39t-64.39 26.61H202.87Zm-40-614.83h634.5v-110.43h-634.5v110.43Zm193.06 292.44H604.3v-86.22H355.93v86.22Z" />
                                </svg>
                                <span class="ml-3 flex-1 sidebar-text font-bold text-left rtl:text-right whitespace-nowrap">Inventory</span>
                                <svg id="dropdownIcon" class="w-3 h-3 transition-transform duration-300 transform" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>

                            <ul id="dropdownContent" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{ route('admin_supplies') }}" class="flex items-center w-full sidebar-text p-2 font-bold text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-black">Supplies</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin_equipment') }}" class="flex items-center w-full sidebar-text p-2 font-bold text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-black">Equipment</a>

                                </li>
                            </ul>
                        </li>

                        <li class="p-3 rounded-md relative">
                            <!-- Dropdown Button -->
                            <button type="button" class="dropdownButton flex items-center w-full p-2 -ml-1 text-base text-white transition duration-75 rounded-lg group hover:bg-gray-100 hover:text-black dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor" class="w-6 h-7 flex-shrink-0">
                                    <path d="M440-240h80v-120h120v-80H520v-120h-80v120H320v80h120v120ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520h200L520-800v200Z" />
                                </svg>
                                <span class="ml-3 flex-1 sidebar-text font-bold text-left rtl:text-right whitespace-nowrap">Request</span>
                                <svg id="dropdownIcon" class="w-3 h-3 transition-transform duration-300 transform" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>

                            <ul id="dropdownContent" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{ route('admin_approvalSupplies') }}" class="flex items-center w-full sidebar-text p-2 font-bold text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-black">Request Supplies</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin_approvalEquipment') }}" class="flex items-center w-full sidebar-text p-2 font-bold text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-black">Request Equipment</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>




        <!-- Main Content --> <!-- EASE IN OUT n MARGIN SIZE-->
        <main id="main-content" class="flex-1 p-8 transition-all duration-300 ease-in-out ml-80">
            <header class="flex justify-end mb-8">
                <div class="bg-gray-200 rounded-full px-4 py-2 inline-flex items-center space-x-4">
                    <div>
                        <span class="font-semibold text-black">Jersom Tumacder</span>
                        <p class="text-gray-600 text-xs pl-11">administrator</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-9 h-9">
                        <path fillRule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clipRule="evenodd" />
                    </svg>

                </div>
            </header>
            <section>
                <div class="flex items-center pb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5" stroke="currentColor" class="w-9 h-9">
                        <path strokeLinecap="round" strokeLinejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                    <h1 class="text-3xl font-bold ml-2">Dashboard Analytics</h1>
                </div>

                <!-- Breadcrumb -->
                <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                Dashboard Analytics
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Templates</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Flowbite</span>
                            </div>
                        </li>
                    </ol>
                </nav>


                <div class="grid grid-cols-3 gap-4 mt-8 pb-8">
                    <!-- Card 1 -->
                    <div class="block max-w-screen-md p-6 bg-white border border-gray-200 rounded-lg shadow transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                        <img class="w-full" src="{{asset('img/facility.jpg')}}" alt="Facility">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">School Facility Analytics</div>
                            <p class="text-gray-700 text-base">
                                Look up at the night sky, and find yourself <span class="font-semibold">immersed</span> in the amazing mountain range of Aspen.
                            </p>
                        </div>
                        <div class="px-6 py-4 flex justify-end">
                            <button class="bg-blue-100 text-blue-700 font-semibold py-2 px-4 rounded hover:bg-blue-200 transition duration-300">
                                Explore →
                            </button>
                        </div>
                    </div>


                    <!-- Card 2 -->
                    <div class="block max-w-screen-md p-6 bg-white border border-gray-200 rounded-lg shadow transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                        <img class="w-full" src="{{asset('img/eventactivities.jpg')}}" alt="Facility">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Event and Activities</div>
                            <p class="text-gray-700 text-base">
                                Look up at the night sky, and find yourself <span class="font-semibold">immersed</span> in the amazing mountain range of Aspen.
                            </p>
                        </div>
                        <div class="px-6 py-4 flex justify-end">
                            <button class="bg-blue-100 text-blue-700 font-semibold py-2 px-4 rounded hover:bg-blue-200 transition duration-300">
                                Explore →
                            </button>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="block max-w-screen-md p-6 bg-white border border-gray-200 rounded-lg shadow transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                        <img class="w-full" src="{{asset('img/inventory.jpg')}}" alt="Facility">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Inventory</div>
                            <p class="text-gray-700 text-base">
                                Look up at the night sky, and find yourself <span class="font-semibold">immersed</span> in the amazing mountain range of Aspen.
                            </p>
                        </div>
                        <div class="px-6 py-4 flex justify-end">
                            <button class="bg-blue-100 text-blue-700 font-semibold py-2 px-4 rounded hover:bg-blue-200 transition duration-300">
                                Explore →
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Add additional content here -->
            </section>
        </main>
    </div>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>