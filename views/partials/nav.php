<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img class="size-8"
                        src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company">
                </div>
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="/"
                        class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> rounded-md px-3 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white"
                        aria-current="page">Home</a>
                    <a href="/about"
                        class="<?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> rounded-md px-3 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white"
                        aria-current="page">About</a>
                    <a href="/notes"
                        class="<?= urlIs('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> rounded-md px-3 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white"
                        aria-current="page">Notes</a>
                    <a href="/contact"
                        class="<?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> rounded-md px-3 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white"
                        aria-current="page">Contact</a>
                </div>
            </div>
            <div class="ml-4 flex items-center">
                <button type="button"
                    class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                </button>
                <div class="relative ml-3">
                    <button type="button"
                        class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <?php if ($_SESSION['user'] ?? false) : ?>
                            <span class="text-white">You are signed in!</span>
                        <?php else : ?>
                            <a href="/register" class="text-white">Register</a>
                        <?php endif; ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>