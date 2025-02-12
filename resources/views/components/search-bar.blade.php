<div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">
    <div class="mx-auto max-w-screen-md sm:text-center">
        <form action="/posts" method="GET">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                <div class="relative w-full">
                    <label for="search"
                        class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                    <input
                        class="block p-3 pl-5 w-full text-sm text-gray-500 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500"
                        placeholder="Search for article" type="search" id="search" name="search" autocomplete="off">
                </div>
                <div>
                    <button type="submit"
                        class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-gray-400 border-gray-500 sm:rounded-none sm:rounded-r-lg hover:bg-gray-500 focus:ring-4 focus:ring-gray-500 dark:bg-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-500">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>