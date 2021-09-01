<x-app-layout>
    <div class="font-semibold">
        <!-- start filters -->
            <div class="flex items-center space-x-6">
                <div class="w-1/4">
                    <select name="category" class="px-4 py-2 rounded w-full border-none text-gray-900 text-sm">
                        <option value="category1">category1</option>
                        <option value="category2">category2</option>
                        <option value="category3">category3</option>
                    </select>
                </div>
                <div class="w-1/4">
                    <select name="category" class="px-4 py-2 rounded w-full border-none text-gray-900 text-sm">
                        <option value="category1">category1</option>
                        <option value="category2">category2</option>
                        <option value="category3">category3</option>
                    </select>
                </div>
                <div class="w-2/4">
                    <input name="Find an idea" placeholder="search" class="w-full placeholder-gray-900 border-none rounded px-4 py-2 text-sm"/>
                </div>
            </div>
        <!-- /end filters -->

        <!-- start ideas-container -->
        <div class="ideas-container space-y-6 my-4">

            <!-- start single-idea-container -->
            <div class="idea-container flex rounded bg-white">
                <div class="px-5 py-8 space-y-8 border-r border-gray-100">
                    <div class="text-center">
                        <div class="text-2xl font-semibold">12</div>
                        <div class="text-gray-500">votes</div>
                    </div>
                    <div>
                        <button class="text-xxs px-6 py-3 flex justify-center w-16 rounded-full border bg-gray-200 border-gray-200 hover:border-gray-400 uppercase font-semibold">
                            vote
                        </button>
                    </div>
                </div>
                <div class="flex px-5 py-8">
                    <a href="#" class="flex-none px-2 mt-1">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="user" class="h-16 w-16 rounded">
                    </a>
                    <div class="px-2 space-y-3">
                        <h4 class="text-xl font-semibold">
                            <a href="#" class="hover:underline">A random title to test</a>
                        </h4>
                        <div class="mt-3 text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur consequuntur cumque,
                            deleniti deserunt et id saepe sint sunt voluptatibus.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, nesciunt.
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2 text-gray-400 text-xs font-semibold">
                                <div>10 hours ago</div>
                                <div>&bull;</div>
                                <div>Category</div>
                                <div>&bull;</div>
                                <div class="text-gray-900">3 comments</div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="rounded-full text-xxs px-4 py-2 h-7 font-semibold leading-none uppercase bg-gray-200 w-28 text-center">
                                    open
                                </button>
                                <button class="rounded-full px-4 flex items-center h-7 py-3 bg-gray-100 hover:bg-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single-idea-container -->

            <!-- start single-idea-container -->
            <div class="idea-container flex rounded bg-white">
                <div class="px-5 py-8 space-y-8 border-r border-gray-100">
                    <div class="text-center">
                        <div class="text-2xl font-semibold text-blue">45</div>
                        <div class="text-gray-500">votes</div>
                    </div>
                    <div>
                        <button class="text-xxs px-6 py-3 flex justify-center w-16 rounded-full bg-blue hover:bg-blue-hover text-white uppercase font-semibold">
                            voted
                        </button>
                    </div>
                </div>
                <div class="flex px-5 py-8">
                    <a href="#" class="flex-none px-2 mt-1">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="user" class="h-16 w-16 rounded">
                    </a>
                    <div class="px-2 space-y-3">
                        <h4 class="text-xl font-semibold">
                            <a href="#" class="hover:underline">A random title to test</a>
                        </h4>
                        <div class="mt-3 text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur consequuntur cumque, deleniti deserunt et id saepe sint sunt voluptatibus.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, nesciunt.
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2 text-gray-400 text-xs font-semibold">
                                <div>10 hours ago</div>
                                <div>&bull;</div>
                                <div>Category</div>
                                <div>&bull;</div>
                                <div class="text-gray-900">5 comments</div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="rounded-full text-xxs px-4 py-2 font-semibold text-white leading-none uppercase bg-red w-28 text-center">
                                    closed
                                </button>
                                <button class="rounded-full px-4 flex items-center h-7 py-3 bg-gray-100 hover:bg-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single-idea-container -->

            <!-- start single-idea-container -->
            <div class="idea-container flex rounded bg-white">
                <div class="px-5 py-8 space-y-8 border-r border-gray-100">
                    <div class="text-center">
                        <div class="text-2xl font-semibold">12</div>
                        <div class="text-gray-500">votes</div>
                    </div>
                    <div>
                        <button class="text-xxs px-6 py-3 flex justify-center w-16 rounded-full border bg-gray-200 border-gray-200 hover:border-gray-400 uppercase font-semibold">
                            vote
                        </button>
                    </div>
                </div>
                <div class="flex px-5 py-8">
                    <a href="#" class="flex-none px-2 mt-1">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="user" class="h-16 w-16 rounded">
                    </a>
                    <div class="px-2 space-y-3">
                        <h4 class="text-xl font-semibold">
                            <a href="#" class="hover:underline">Some title goes here</a>
                        </h4>
                        <div class="mt-3 text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur consequuntur cumque,
                            deleniti deserunt et id saepe sint sunt voluptatibus.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, nesciunt.
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2 text-gray-400 text-xs font-semibold">
                                <div>10 hours ago</div>
                                <div>&bull;</div>
                                <div>Category</div>
                                <div>&bull;</div>
                                <div class="text-gray-900">3 comments</div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="rounded-full text-xxs text-white px-4 py-2 h-7 font-semibold leading-none uppercase bg-yellow w-28 text-center">
                                    loremchannel
                                </button>
                                <button class="rounded-full px-4 flex items-center h-7 py-3 bg-gray-100 hover:bg-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single-idea-container -->

        </div>
        <!-- end ideas-container -->
    </div>
</x-app-layout>
