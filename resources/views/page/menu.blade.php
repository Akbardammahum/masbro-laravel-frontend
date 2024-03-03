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
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                            </svg>
                                                        </button>
                                                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
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
                                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
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
                                id="age" type="text" v-model="age" placeholder="Masukan Deskripsi Menu">
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
