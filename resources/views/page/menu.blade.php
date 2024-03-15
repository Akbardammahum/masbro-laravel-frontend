<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
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
        <div class="container mx-auto mt-4">
            <!-- Tabs -->
            <ul id="tabs" class="flex border-b">
                <li id="pesananMasuk" class="px-4 py-2"><a href="#first">Menu saya</a></li>
                <li id="pesananBatal" class="px-4 py-2"><a href="#second">Tambah Menu</a></li>
            </ul>


            <!-- Tab Contents Menu saya -->
            <div id="tab-contents-first">
                <div id="first" class="p-4">
                    <div class="container mx-auto px-4 sm:px-8">
                        <div class="mt-0 mb-0">
                            <div class="font-sans text-black bg-white flex justify-between px-4">
                                <p class="self-center">Nama Menu</p>
                                <div class="flex items-center">
                                    <input type="text" class="px-4 py-2 border rounded" placeholder="Search...">
                                    <button class="flex justify-center px-4 border-l items-center">
                                        <svg class="h-4 w-4 text-grey-dark" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div>
                                <h2 class="text-2xl font-semibold leading-tight">3 Produk</h2>
                            </div>
                            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                                <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                                    <table class="min-w-full leading-normal">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                    Menu
                                                </th>
                                                <th
                                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                    Status
                                                </th>
                                                <th
                                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                    Harga
                                                </th>
                                                <th
                                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                    Total terjual
                                                </th>
                                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 w-10 h-10">
                                                            <img class="w-full h-full rounded-full"
                                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                                alt="" />
                                                        </div>
                                                        <div class="ml-3">
                                                            <p class="text-gray-900 whitespace-no-wrap">
                                                                Ayam Malaysia
                                                            </p>
                                                            {{-- <p class="text-gray-600 whitespace-no-wrap">000004</p> --}}
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <div class="p-10">

                                                        <div class="dropdown inline-block relative">
                                                            <button
                                                                class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                                                                <span class="mr-1">Ready</span>
                                                                <svg class="fill-current h-4 w-4"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20">
                                                                    <path
                                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                                </svg>
                                                            </button>
                                                            <ul
                                                                class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                                                <li class=""><a
                                                                        class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                                                        href="#">Ready</a></li>
                                                                <li class=""><a
                                                                        class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                                                        href="#">Kosong</a></li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap">Rp. 13.000 <i
                                                            class="fas fa-edit"></i></p>
                                                    {{-- <p class="text-gray-600 whitespace-no-wrap">Due in 3 days</p> --}}
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <span
                                                        class="relative inline-block px-3 py-1 font-semibold text-red leading-tight">
                                                        <span aria-hidden
                                                            class="absolute inset-0 bg-red-500 opacity-50 rounded-full"></span>
                                                        <span class="relative">Dibatalkan</span>
                                                    </span>
                                                </td>
                                                {{-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                                <button type="button"
                                                    class="inline-block text-gray-500 hover:text-gray-700">
                                                    <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                                    </svg>
                                                </button>
                                            </td> --}}
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab Contents Tambah Menu -->
            <div id="tab-content-second">
                <div id="second" class="p-4">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                        <!-- form -->
                        <div class="p-4">
                            <div class="my-6">
                                <div>
                                    <h2 class="text-2xl font-semibold leading-tight">Informasi Menu </h2>
                                </div>
                                <label class="block font-bold text-grey-darker mb-2" for="name">
                                    Tambahkan Foto Menu:
                                </label>
                                <div class="flex items-center justify-center w-full">
                                    <label for="dropzone-file"
                                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                    class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                                                (MAX.
                                                800x400px)</p>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div>
                                <label class="block font-bold text-grey-darker mb-2" for="name">
                                    Nama Menu:
                                </label>
                                <input
                                    class="w-full py-2 px-3 text-gray-700 shadow appearance-none border border-grey-light hover:border-grey rounded leading-tight focus:outline-none focus:shadow-outline"
                                    id="name" type="text" v-model="name" placeholder="Masukan Nama Menu">
                            </div>

                            <div class="my-6">
                                <label class="block font-bold text-grey-darker mb-2" for="age">
                                    Deskripsi Menu:
                                </label>
                                <input
                                    class="w-full py-2 px-3 text-gray-700 shadow appearance-none border rounded focus:outline-none focus:shadow-outline"
                                    id="age" type="text" v-model="age"
                                    placeholder="Masukan Deskripsi Menu">
                            </div>
                            <div>
                                <label class="block font-bold text-grey-darker mb-2" for="age">
                                    Kategori:
                                </label>
                                <div class="dropdown inline-block relative">
                                    <button
                                        class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                                        <span class="mr-1">Makanan</span>
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                        <li class=""><a
                                                class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                                href="#">Makanan</a></li>
                                        <li class=""><a
                                                class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                                href="#">Minuman</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div>
                                <h2 class="text-2xl font-semibold leading-tight">Informasi Penjualan </h2>
                                <label class="block font-bold text-grey-darker mb-2" for="age">
                                    Harga :
                                </label>
                                <input
                                    class="w-full py-2 px-3 text-gray-700 shadow appearance-none border rounded focus:outline-none focus:shadow-outline"
                                    id="age" type="text" v-model="age" placeholder="Masukan Harga">
                            </div>
                            <!-- button simpan -->
                            <button
                                class="col-start-9 col-end-11 rounded-lg px-4 py-2 bg-green-700 text-green-100 hover:bg-green-800 duration-300">Simpan
                                & Arsipkan</button>
                            <button
                                class="col-start-11 col-end-13 rounded-lg px-4 py-2 bg-green-700 text-green-100 hover:bg-green-800 duration-300">Simpan
                                & Tampilkan</button>
                        </div>
                    </div>
                </div>
            </div>
            </id=>
        </div>


    </div>
    </div>

    <!-- JavaScript for Tabs -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let tabTogglers = document.querySelectorAll("#tabs a");

            // Hide content of Pesanan Dibatalkan tab initially
            let tabContents = document.querySelectorAll("#tab-content-second > div");
            tabContents.forEach(function(tabContent) {
                tabContent.classList.add("hidden");
            });

            tabTogglers.forEach(function(toggler) {
                toggler.addEventListener("click", function(e) {
                    e.preventDefault();

                    let tabName = this.getAttribute("href");

                    let tabContents = document.querySelectorAll(
                        "#tab-contents-first > div, #tab-content-second > div");

                    tabContents.forEach(function(tabContent) {
                        if (tabContent.id === tabName.slice(1)) {
                            tabContent.classList.remove("hidden");
                        } else {
                            tabContent.classList.add("hidden");
                        }
                    });

                    tabTogglers.forEach(function(tabToggler) {
                        tabToggler.parentElement.classList.remove("border-t", "border-r",
                            "border-l", "-mb-px", "bg-white");
                    });

                    this.parentElement.classList.add("border-t", "border-r", "border-l", "-mb-px",
                        "bg-white");
                });
            });
        });
    </script>
    <!-- JavaScript for CRUD -->
    {{-- <script>
        new Vue({
            methods: { //functions
                addPerson() {
                    const person = {
                        name: this.name,
                        age: this.age
                    };
                    switch (true) {
                        case (this.age <= 19):
                            if (this.youngPeople.length < 5) {
                                this.youngPeople.push(person);
                            } else {
                                alert("A tabela de Jovens está cheia!");
                            }
                            break;
                        case (this.age >= 60):
                            if (this.elderlyPeople.length < 5) {
                                this.elderlyPeople.push(person);
                            } else {
                                alert("A tabela de Idosos está cheia!");
                            }
                            break;
                        default:
                            if (this.adultPeople.length < 5) {
                                this.adultPeople.push(person);
                            } else {
                                alert("A tabela de Adultos está cheia!");
                            }
                            break;
                    }
                    this.name = "";
                    this.age = "";
                    this.sortPeople();
                },
                editPerson(person) {
                    this.name = person.name;
                    this.age = person.age;
                    switch (true) {
                        case (this.youngPeople.includes(person)):
                            this.youngPeople.splice(this.youngPeople.indexOf(person), 1);
                            break;
                        case (this.elderlyPeople.includes(person)):
                            this.elderlyPeople.splice(this.elderlyPeople.indexOf(person), 1);
                            break;
                        default:
                            this.adultPeople.splice(this.adultPeople.indexOf(person), 1);
                            break;
                    }
                    this.sortPeople();
                },
                deletePerson(person) {
                    switch (true) {
                        case (this.youngPeople.includes(person)):
                            this.youngPeople.splice(this.youngPeople.indexOf(person), 1);
                            break;
                        case (this.elderlyPeople.includes(person)):
                            this.elderlyPeople.splice(this.elderlyPeople.indexOf(person), 1);
                            break;
                        default:
                            this.adultPeople.splice(this.adultPeople.indexOf(person), 1);
                            break;
                    }
                    this.sortPeople();
                },
                sortPeople() {
                    this.youngPeople.sort((a, b) => b.age - a.age);
                    this.adultPeople.sort((a, b) => b.age - a.age);
                    this.elderlyPeople.sort((a, b) => b.age - a.age);
                }
            }
        });
    </script> --}}
</body>

</html>
