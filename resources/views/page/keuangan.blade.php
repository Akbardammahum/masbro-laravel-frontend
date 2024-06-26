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
        <div class="w-full flex-grow text-gray-800">
            <main class="p-6 sm:p-10 space-y-6">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Histori Transaksi</h1>
                    </div>
                </div>

                <div class="mx-auto mt-4 w-full">

                    <!-- Tab Contents pesanan masuk -->
                    <div id="tab-contents-first">
                        <div id="first" class="p-4">
                            <div class="container mx-auto px-4 sm:px-8">
                                    <div
                                        class="-mx-4 overflow-x-auto px-4 py-4 sm:-mx-8 sm:px-8"
                                    >
                                        <div
                                            class="inline-block min-w-full overflow-hidden rounded-lg shadow-md"
                                        >
                                            <table
                                                class="min-w-full leading-normal"
                                            >
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-700"
                                                        >
                                                            Nama Menu
                                                        </th>
                                                        <th
                                                            class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-700"
                                                        >
                                                            Tanggal Masuk
                                                        </th>
                                                        <th
                                                            class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-700"
                                                        >
                                                            Jumlah
                                                        </th>
                                                        <th
                                                            class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-700"
                                                        >
                                                            Harga
                                                        </th>
                                                        <th
                                                            class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-700"
                                                        >
                                                            Status
                                                        </th>
                                                        <th
                                                            class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3"
                                                        ></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                            <div
                                                                class="flex items-center"
                                                            >
                                                                <div
                                                                    class="h-10 w-10 flex-shrink-0"
                                                                >
                                                                    <img
                                                                        class="h-full w-full rounded-full"
                                                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                                <div class="ml-3">
                                                                    <p
                                                                        class="whitespace-no-wrap text-gray-900"
                                                                    >
                                                                        Ayam
                                                                        Malaysia
                                                                    </p>
                                                                    {{-- <p class="text-gray-600 whitespace-no-wrap">000004</p> --}}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                        <div class="ml-3">
                                                            <p
                                                                class="whitespace-no-wrap text-gray-900"
                                                            >
                                                                02 maret 2024
                                                            </p>
                                                        </div>
                                                        </td>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                            <p
                                                                class="whitespace-no-wrap text-gray-900"
                                                            >
                                                                x2
                                                            </p>
                                                            {{-- <p class="text-gray-600 whitespace-no-wrap">USD</p> --}}
                                                        </td>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                            <p
                                                                class="whitespace-no-wrap text-gray-900"
                                                            >
                                                                Rp. 13.000
                                                            </p>
                                                            {{-- <p class="text-gray-600 whitespace-no-wrap">Due in 3 days</p> --}}
                                                        </td>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                            <span
                                                                class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900"
                                                            >
                                                                <span
                                                                    aria-hidden
                                                                    class="absolute inset-0 rounded-full bg-green-200 opacity-50"
                                                                ></span>
                                                                <span
                                                                    class="relative"
                                                                >
                                                                    Selesai
                                                                </span>
                                                            </span>
                                                        </td>
                                                        {{--
                                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                                            <button type="button"
                                                            class="inline-block text-gray-500 hover:text-gray-700">
                                                            <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                                                            <path
                                                            d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                                            </svg>
                                                            </button>
                                                            </td>
                                                        --}}
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                            <div
                                                                class="flex items-center"
                                                            >
                                                                <div
                                                                    class="h-10 w-10 flex-shrink-0"
                                                                >
                                                                    <img
                                                                        class="h-full w-full rounded-full"
                                                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                                <div class="ml-3">
                                                                    <p
                                                                        class="whitespace-no-wrap text-gray-900"
                                                                    >
                                                                        Ayam
                                                                        Malaysia
                                                                    </p>
                                                                    {{-- <p class="text-gray-600 whitespace-no-wrap">000004</p> --}}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                        <div class="ml-3">
                                                            <p
                                                                class="whitespace-no-wrap text-gray-900"
                                                            >
                                                                02 maret 2024
                                                            </p>
                                                        </div>
                                                        </td>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                            <p
                                                                class="whitespace-no-wrap text-gray-900"
                                                            >
                                                                x2
                                                            </p>
                                                            {{-- <p class="text-gray-600 whitespace-no-wrap">USD</p> --}}
                                                        </td>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                            <p
                                                                class="whitespace-no-wrap text-gray-900"
                                                            >
                                                                Rp. 13.000
                                                            </p>
                                                            {{-- <p class="text-gray-600 whitespace-no-wrap">Due in 3 days</p> --}}
                                                        </td>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                            <span
                                                                class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900"
                                                            >
                                                                <span
                                                                    aria-hidden
                                                                    class="absolute inset-0 rounded-full bg-green-200 opacity-50"
                                                                ></span>
                                                                <span
                                                                    class="relative"
                                                                >
                                                                    Selesai
                                                                </span>
                                                            </span>
                                                        </td>
                                                        {{--
                                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                                            <button type="button"
                                                            class="inline-block text-gray-500 hover:text-gray-700">
                                                            <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                                                            <path
                                                            d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                                            </svg>
                                                            </button>
                                                            </td>
                                                        --}}
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                            <div
                                                                class="flex items-center"
                                                            >
                                                                <div
                                                                    class="h-10 w-10 flex-shrink-0"
                                                                >
                                                                    <img
                                                                        class="h-full w-full rounded-full"
                                                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                                        alt=""
                                                                    />
                                                                </div>
                                                                <div class="ml-3">
                                                                    <p
                                                                        class="whitespace-no-wrap text-gray-900"
                                                                    >
                                                                        Ayam
                                                                        Malaysia
                                                                    </p>
                                                                    {{-- <p class="text-gray-600 whitespace-no-wrap">000004</p> --}}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                        <div class="ml-3">
                                                            <p
                                                                class="whitespace-no-wrap text-gray-900"
                                                            >
                                                                02 maret 2024
                                                            </p>
                                                        </div>
                                                        </td>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                            <p
                                                                class="whitespace-no-wrap text-gray-900"
                                                            >
                                                                x2
                                                            </p>
                                                            {{-- <p class="text-gray-600 whitespace-no-wrap">USD</p> --}}
                                                        </td>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                            <p
                                                                class="whitespace-no-wrap text-gray-900"
                                                            >
                                                                Rp. 13.000
                                                            </p>
                                                            {{-- <p class="text-gray-600 whitespace-no-wrap">Due in 3 days</p> --}}
                                                        </td>
                                                        <td
                                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm"
                                                        >
                                                            <span
                                                                class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900"
                                                            >
                                                                <span
                                                                    aria-hidden
                                                                    class="absolute inset-0 rounded-full bg-green-200 opacity-50"
                                                                ></span>
                                                                <span
                                                                    class="relative"
                                                                >
                                                                    Selesai
                                                                </span>
                                                            </span>
                                                        </td>
                                                        {{--
                                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                                            <button type="button"
                                                            class="inline-block text-gray-500 hover:text-gray-700">
                                                            <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                                                            <path
                                                            d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                                            </svg>
                                                            </button>
                                                            </td>
                                                        --}}
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        console.clear();
                    </script>
            </body>

</html>
