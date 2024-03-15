<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="flex h-screen w-screen bg-white">
        <!-- container -->

        <aside
            class="flex h-full w-small_sidebar flex-col items-center overflow-y-auto bg-sidebar px-0 shadow transition-all sm:w-sidebar sm:px-3">
            <!-- Side Nav Bar-->

            <ul class="flex h-full w-full flex-col">
                <!-- Items Section -->
                <li class="mb-2 hover:bg-sidebarHover sm:rounded-xl">
                    <a href="{{ route('home') }}"
                        class="flex h-12 w-full items-center justify-center px-0 text-sm font-normal text-gray-400 focus:text-red-400 sm:justify-start sm:px-6 ">
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
                <li class="mb-2 hover:bg-sidebarHover sm:rounded-xl">
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
        <div class="flex items-center justify-center w-screen h-screen text-black bg-gray-100">
            <!-- Component Start -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="w-48 bg-white shadow-2xl p-6 rounded-2xl">
                    <div class="flex items-center">
                        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-pink-100">
                            <svg class="w-4 h-4 stroke-current text-pink-600" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm font-medium text-gray-500">Followers</span>
                    </div>
                    <span class="block text-4xl font-semibold mt-4">1,320</span>
                    <div class="flex text-xs mt-3 font-medium">
                        <span class="text-green-500">+8%</span>
                        <span class="ml-1 text-gray-500">last 14 days</span>
                    </div>
                </div>
                <div class="w-48 bg-white shadow-2xl p-6 rounded-2xl">
                    <div class="flex items-center">
                        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-red-100">
                            <svg class="w-4 h-4 stroke-current text-red-600" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm font-medium text-gray-500">Likes</span>
                    </div>
                    <span class="block text-4xl font-semibold mt-4">3,814</span>
                    <div class="flex text-xs mt-3 font-medium">
                        <span class="text-green-500">+12%</span>
                        <span class="ml-1 text-gray-500">last 14 days</span>
                    </div>
                </div>
                <div class="w-48 bg-white shadow-2xl p-6 rounded-2xl">
                    <div class="flex items-center">
                        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-blue-100">
                            <svg class="w-4 h-4 stroke-current text-blue-600" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm font-medium text-gray-500">Comments</span>
                    </div>
                    <span class="block text-4xl font-semibold mt-4">264</span>
                    <div class="flex text-xs mt-3 font-medium">
                        <span class="text-red-500">-2%</span>
                        <span class="ml-1 text-gray-500">last 14 days</span>
                    </div>
                </div>
            </div>
            <!-- Component End  -->

        </div>
</body>

</html>
