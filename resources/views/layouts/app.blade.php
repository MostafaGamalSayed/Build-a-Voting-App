<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Voting-App</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex justify-between items-center px-8 py-4">
            <span>
                Voting App Logo
            </span>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                            <!-- Logout -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                @auth
                    <img
                        src="https://www.gravatar.com/avatar/0?d=mp"
                        alt="avatar"
                        class="w-10 h-10 rounded-full"
                    />
                @endauth
            </div>
        </header>
        <main>
            <div class="flex container mx-auto max-w-custom">
                <div class="w-70 mr-5">
                    <div
                        class="bg-white rounded border-2 border-blue mt-16"
                        style="border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));border-image-slice: 1;
                               background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                                background-origin: border-box;
                                background-clip: content-box, border-box;"
                        >
                        <div class="text-center px-6 py-2 pt-6">
                            <h3 class="text-center font-semibold text-base text-gray-900">
                                Add an idea
                            </h3>
                            <p class="text-xs mt-4">
                                Let us know what would you like and we'll take a look over!
                            </p>
                        </div>
                        <form action="" method="post" class="px-4 py-2 space-y-4">
                            <div>
                                <input
                                    type="text"
                                    name="title"
                                    class="rounded-xl bg-gray-100 placeholder-gray-900 w-full border-none text-sm"
                                    placeholder="Add idea"
                                />
                            </div>
                            <div>
                                <select name="category" class="rounded-xl border-none bg-gray-100 w-full text-sm">
                                    <option value="category1">category1</option>
                                    <option value="category2">category2</option>
                                    <option value="category3">category3</option>
                                    <option value="category4">category4</option>
                                </select>
                            </div>
                            <div>
                                <textarea
                                    name="description"
                                    class="rounded-xl w-full bg-gray-100 border-none placeholder-gray-900 text-sm"
                                    placeholder="Describe your idea"
                                    rows="4"
                                ></textarea>
                            </div>
                            <div class="flex space-x-3">
                                <button type="button" class="flex items-center bg-gray-200 border border-gray-200 hover:border-gray-400 rounded-xl w-1/2 px-4 py-2 uppercase text-xs font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                    </svg>
                                    <span class="ml-1">attach</span>
                                </button>
                                <button type="submit" class="bg-blue text-white hover:bg-blue-hover rounded-xl w-1/2 px-4 py-2 uppercase text-xs font-semibold">
                                    submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-175">
                    <nav class="flex items-center text-xs justify-between">
                        <ul class="flex items-center space-x-10 border-b-4 pb-3 uppercase font-semibold">
                            <li>
                                <a href="#" class="border-b-4 pb-3 border-blue">
                                    all ideas(187)
                                </a>
                            </li>
                            <li>
                                <a href="#" class="border-b-4 hover:border-blue transition ease-in duration-300 pb-3 text-gray-400">
                                    considering(10)
                                </a>
                            </li>
                            <li>
                                <a href="#" class="border-b-4 hover:border-blue transition ease-in duration-300 pb-3 text-gray-400">
                                    in progress(1)
                                </a>
                            </li>
                        </ul>
                        <ul class="flex items-center space-x-10 border-b-4 pb-3 uppercase font-semibold">
                            <li>
                                <a href="#" class="border-b-4 hover:border-blue pb-3 transition ease-in duration-300 text-gray-400">
                                    all ideas(187)
                                </a>
                            </li>
                            <li>
                                <a href="#" class="border-b-4 hover:border-blue pb-3 transition ease-in duration-300 text-gray-400">
                                    considering(10)
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <div class="mt-8">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
