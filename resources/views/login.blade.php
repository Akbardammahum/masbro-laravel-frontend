<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite("resources/css/app.css")

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />

        <style>
            .dropdown:hover .dropdown-menu {
                display: block;
            }
        </style>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
    </head>
    <body>
        <body class="bg-gray-200 font-sans text-gray-700">
            <div class="container mx-auto flex p-8">
                <div class="mx-auto w-full max-w-md">
                    <h1 class="mb-12 text-center text-4xl font-thin">
                        MasBro Canteen
                    </h1>

                    <div class="overflow-hidden rounded-lg bg-white shadow-2xl">
                        <div class="p-8">
                            <form
                                method="POST"
                                class=""
                                action="#"
                                onsubmit="return false;"
                            >
                                <div class="mb-5">
                                    <label
                                        for="email"
                                        class="mb-2 block text-sm font-medium text-gray-600"
                                    >
                                        Email
                                    </label>

                                    <input
                                        type="text"
                                        name="email"
                                        class="block w-full rounded border border-transparent bg-gray-200 p-3 focus:outline-none"
                                    />
                                </div>

                                <div class="mb-5">
                                    <label
                                        for="password"
                                        class="mb-2 block text-sm font-medium text-gray-600"
                                    >
                                        Password
                                    </label>

                                    <input
                                        type="text"
                                        name="password"
                                        class="block w-full rounded border border-transparent bg-gray-200 p-3 focus:outline-none"
                                    />
                                </div>

                                <button
                                    class="mt-4 w-full rounded bg-indigo-600 p-3 text-white shadow"
                                >
                                    Login
                                </button>
                            </form>
                        </div>

                        <div
                            class="flex justify-between border-t border-gray-300 bg-gray-100 p-8 text-sm"
                        >
                            <a href="#" class="font-medium text-indigo-500">
                                Create account
                            </a>

                            <a href="#" class="text-gray-600">
                                Forgot password?
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </body>
</html>
