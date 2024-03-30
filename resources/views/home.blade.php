<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
        .dropdown:hover .dropdown-menu {
            display: block;

        }

    </style>

</head>

<body>
    <div class="flex h-screen w-screen bg-white">
        <aside
            class="flex h-full w-min px-4 pt-6 pb-12 flex-col items-center shadow">
            <!-- Side Nav Bar-->

            <ul class="flex h-full w-full flex-col">
                <!-- Items Section -->
                <li class="mb-2 hover:bg-sidebarHover sm:rounded-xl">
                    <a href="{{ route('home') }}"
                        class="flex h-12 w-full items-center justify-center px-0 text-sm font-normal text-gray-400 focus:text-red-400 sm:justify-start sm:px-6 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="mr-0 h-5 w-5 sm:mr-3">
                        <path
                            d="M15 3.75H9v16.5h6V3.75zM16.5 20.25h3.375c1.035 0 1.875-.84 1.875-1.875V5.625c0-1.036-.84-1.875-1.875-1.875H16.5v16.5zM4.125 3.75H7.5v16.5H4.125a1.875 1.875 0 01-1.875-1.875V5.625c0-1.036.84-1.875 1.875-1.875z" />
                    </svg>

                        <span class="hidden sm:block">Home</span>
                    </a>
                </li>

                <li class="mb-2 hover:bg-sidebarHover sm:rounded-xl">
                    <a href="{{ route('pesanan') }}"
                        class="flex h-12 w-full items-center justify-center px-0 text-sm font-normal text-gray-400 focus:text-red-400 sm:justify-start sm:px-6 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="mr-0 h-5 w-5 sm:mr-3">
                            <path
                                d="M15 3.75H9v16.5h6V3.75zM16.5 20.25h3.375c1.035 0 1.875-.84 1.875-1.875V5.625c0-1.036-.84-1.875-1.875-1.875H16.5v16.5zM4.125 3.75H7.5v16.5H4.125a1.875 1.875 0 01-1.875-1.875V5.625c0-1.036.84-1.875 1.875-1.875z" />
                        </svg>

                        <span class="hidden sm:block">Pesanan</span>
                    </a>
                </li>
                <li class="mb-2 hover:bg-sidebarHover sm:rounded-xl">
                    <a href="{{ route('menu') }}"
                        class="flex h-12 w-full items-center justify-center px-0 text-sm font-normal text-gray-400 focus:text-red-400 sm:justify-start sm:px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="mr-0 h-5 w-5 sm:mr-3">
                            <path fill-rule="evenodd"
                                d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                clip-rule="evenodd" />
                        </svg>

                        <span class="hidden sm:block">Menu</span>
                    </a>
                </li>
                <li class="mb-2 hover:bg-sidebarHover sm:rounded-xl">
                    <a href="{{ route('keuangan') }}"
                        class="flex h-12 w-full items-center justify-center px-0 text-sm font-normal text-gray-400 focus:text-red-400 sm:justify-start sm:px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="mr-0 h-5 w-5 sm:mr-3">
                            <path
                                d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z" />
                        </svg>

                        <span class="hidden sm:block">Keuangan</span>
                    </a>
                </li>
                <li class="mt-auto mb-2 hover:bg-sidebarHover sm:rounded-xl">
                    <a href="#"
                        class="flex h-12 w-full items-center justify-center px-0 text-sm font-normal text-gray-400 focus:text-orange-500 sm:justify-start sm:px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="mr-0 h-5 w-5 sm:mr-3">
                            <path fill-rule="evenodd"
                                d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z"
                                clip-rule="evenodd" />
                        </svg>

                        <span class="hidden sm:block">Saved</span>
                    </a>
                </li>
                <li class="hover:bg-sidebarHover sm:rounded-xl">
                    <a href="#"
                        class="flex h-12 w-full items-center justify-center px-0 text-sm font-normal text-gray-400 focus:text-orange-500 sm:justify-start sm:px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="mr-0 h-5 w-5 sm:mr-3">
                            <path fill-rule="evenodd"
                                d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                                clip-rule="evenodd" />
                        </svg>

                        <span class="hidden sm:block">Keluar</span>
                    </a>
                </li>
            </ul>
        </aside>

        {{-- Main Content --}}
        <div class="flex flex-col text-gray-800 p-6 h-full items-start gap-y-12">
            {{-- <main class="p-6 space-y-6"> --}}

                <div class="flex flex-col gap-y-4">
                    <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                        <div class="mr-6">
                            <h1 class="text-4xl font-semibold mb-2">Yuk Cek Hasil Penjualan Toko Kamu</h1>
                        </div>
                    </div>
                    <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
                        <div class="flex items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div>
                                <span class="block text-gray-500">Total Pesanan Masuk</span>
                                <span class="block text-2xl font-bold">62</span>

                            </div>
                        </div>
                        <div class="flex items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>
                            <div>
                                <span class="block text-gray-500">Total Pesanan Selesai</span>
                                <span class="block text-2xl font-bold">50</span>

                            </div>
                        </div>
                        <div class="flex items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                                </svg>
                            </div>
                            <div>
                                <span class="block text-gray-500">Total Pesanan Dibatalkan</span>
                                <span class="block text-2xl font-bold">50</span>
                            </div>
                        </div>
                        <div class="flex items-center p-8 bg-white shadow rounded-lg">
                            <div
                                class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <div>
                                <span class="block text-gray-500">Total Penjualan</span>
                                <span class="block text-2xl font-bold">Rp. 2.456.000</span>

                            </div>
                        </div>
                    </section>
                </div>
                <!-- Chart -->
                {{-- <section class="grid md:grid-cols-2  xl:grid-rows-3 xl:grid-flow-col gap-6"> --}}
                    <div class="flex justify-between w-full gap-10">

                        <div
                        class="flex flex-col w-full
                        md:col-span-2 md:row-span-2 bg-white shadow rounded-lg">

                        <div class="p-10">
                            <div class="flex w-full justify-between items-center">
                                <div class="px-6 py-5 font-semibold border-b border-gray-100">Penjualan Bulanan</div>
                                <div class="dropdown inline-block relative">

                                    <button
                                        class="bg-gray-300 text-gray-700 font-semibold py-2 px-6 rounded inline-flex items-center">
                                        <span class="mr-1">Hari ini</span>
                                        <svg class="fill-current h-4 w-6" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                        <li class=""><a
                                                class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-6 block whitespace-no-wrap"
                                                href="#">Hari ini</a></li>
                                        <li class=""><a
                                                class="bg-gray-200 hover:bg-gray-400 py-2 px-6 block whitespace-no-wrap"
                                                href="#">Minggu ini</a></li>
                                        <li class=""><a
                                                class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-6 block whitespace-no-wrap"
                                                href="#">Bulan ini</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                               <div class="p-4 flex-grow">
                                   <div
                                       class="flex items-center justify-center h-[300px] text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">
                                       Chart</div>
                               </div>
                           </div>


                        <!-- Menu paling sering dipesan -->
                        <div class="flex flex-col bg-white shadow rounded-lg h-full w-[372px]">
                            <div
                                class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
                                <span>Menu Paling Sering Dipesan</span>
                                <!-- Refer here for full dropdown menu code: https://tailwindui.com/components/application-ui/elements/dropdowns -->
                            </div>
                            <div class="overflow-y-auto h-full">
                                <ul class="p-6 space-y-6">
                                    <li class="flex items-center">
                                        <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                            <img src="https://randomuser.me/api/portraits/women/82.jpg"
                                                alt="Annette Watson profile picture">
                                        </div>
                                        <span class="text-gray-600">Ayam Geprek</span>
                                        <span class="ml-auto font-semibold">12</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                            <img src="https://randomuser.me/api/portraits/men/81.jpg"
                                                alt="Calvin Steward profile picture">
                                        </div>
                                        <span class="text-gray-600">Nasi Geprek</span>
                                        <span class="ml-auto font-semibold">10</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                            <img src="https://randomuser.me/api/portraits/men/80.jpg"
                                                alt="Ralph Richards profile picture">
                                        </div>
                                        <span class="text-gray-600">Jamur Geprek</span>
                                        <span class="ml-auto font-semibold">8</span>
                                    </li>

                                    <li class="flex items-center">
                                        <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                            <img src="https://randomuser.me/api/portraits/men/76.jpg"
                                                alt="Pat Mckinney profile picture">
                                        </div>
                                        <span class="text-gray-600">Ayam Sosis</span>
                                        <span class="ml-auto font-semibold">8</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                            <img src="https://randomuser.me/api/portraits/men/75.jpg"
                                                alt="Norman Walters profile picture">
                                        </div>
                                        <span class="text-gray-600">Jamur Enoki</span>
                                        <span class="ml-auto font-semibold">5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
            {{-- </main> --}}
        </div>
        {{-- <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Poppins', 'system-ui'],
                        },
                        colors: {
                            sidebar: '#141414',
                            sidebarHover: '#2F2F2F',
                        },
                        width: {
                            sidebar: '252px',
                            small_sidebar: '59px',
                        },
                    },
                },
            }
        </script> --}}
</body>

</html>
