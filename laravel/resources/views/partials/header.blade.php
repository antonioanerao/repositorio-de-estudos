<header
    x-trap.inert.noscroll="navIsOpen"
    class="main-header relative z-50 text-gray-700"
    @keydown.window.escape="navIsOpen = false"
    @click.away="navIsOpen = false"
>
    <x-header-news-bar />

    <div class="relative max-w-screen-2xl mx-auto w-full py-4 bg-white transition duration-200 lg:bg-transparent lg:py-6">
        <div class="max-w-screen-xl mx-auto px-5 flex items-center justify-between">
            <div class="flex-1">
                <a href="/" class="inline-flex items-center">
                    <h5 class="font-bold">
                        {{ config('app.name') }}
                    </h5>
                </a>
            </div>
            <ul class="relative hidden lg:flex lg:items-center lg:justify-center lg:gap-6 xl:gap-10">
                <li><a href="#">Menu 01</a></li>
                <li x-data="{ expanded: false }" class="relative" @keydown.window.escape="expanded = false">
                    <button class="flex items-center justify-center" @click="expanded = !expanded">
                        Mega Menu
                        <span class="ml-3 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': expanded }" class="h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </span>
                    </button>
                    <div
                        x-show="expanded"
                        x-cloak
                        class="absolute left-28 z-20 transition transform -translate-x-1/2"
                        x-transition:enter="duration-250 ease-out"
                        x-transition:enter-start="opacity-0 -translate-y-8"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="duration-250 ease-in"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0 -translate-y-8"
                    >
                        <div
                            class="mt-4 w-224 p-8 bg-white shadow-lg transform transition-transform origin-top"
                            @click.away="expanded = false"
                        >
                            <ul class="grid gap-6 relative sm:grid-cols-2 md:grid-cols-3">
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/starter-kits#laravel-breeze" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-breeze flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/breeze.min.svg" alt="Icon" class="w-7 h-7" width="47" height="32">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Item 1</div>
                                            <span class="text-gray-700 text-xs">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/starter-kits#laravel-breeze" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-breeze flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/breeze.min.svg" alt="Icon" class="w-7 h-7" width="47" height="32">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Item 2</div>
                                            <span class="text-gray-700 text-xs">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/starter-kits#laravel-breeze" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-breeze flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/breeze.min.svg" alt="Icon" class="w-7 h-7" width="47" height="32">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Item 3</div>
                                            <span class="text-gray-700 text-xs">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="flex-1 flex items-center justify-end">
                <button id="docsearch"></button>
                <x-button.secondary href="/docs" class="hidden lg:ml-4 lg:inline-flex">Material de estudo</x-button.secondary>
                <button
                    class="ml-2 relative w-10 h-10 inline-flex items-center justify-center p-2 text-gray-700 lg:hidden"
                    aria-label="Toggle Menu"
                    @click.prevent="navIsOpen = !navIsOpen"
                >
                    <svg x-show="! navIsOpen" class="w-6" viewBox="0 0 28 12" fill="none" xmlns="http://www.w3.org/2000/svg"><line y1="1" x2="28" y2="1" stroke="currentColor" stroke-width="2"/><line y1="11" x2="28" y2="11" stroke="currentColor" stroke-width="2"/></svg>
                    <svg x-show="navIsOpen" x-cloak class="absolute inset-0 mt-2.5 ml-2.5 w-5" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><rect y="1.41406" width="2" height="24" transform="rotate(-45 0 1.41406)" fill="currentColor"/><rect width="2" height="24" transform="matrix(0.707107 0.707107 0.707107 -0.707107 0.192383 16.9707)" fill="currentColor"/></svg>
                </button>
            </div>
        </div>
    </div>
    <div
        x-show="navIsOpen"
        class="lg:hidden"
        x-transition:enter="duration-150"
        x-transition:leave="duration-100 ease-in"
        x-cloak
    >
        <nav
            x-show="navIsOpen"
            x-transition.opacity
            x-cloak
            class="fixed inset-0 w-full pt-[4.2rem] z-10 pointer-events-none"
        >
            <div class="relative h-full w-full py-8 px-5 bg-white pointer-events-auto overflow-y-auto">
                <ul>
                    <li><a class="block w-full py-2" href="">Menu 1</a></li>
                    <li><a class="block w-full py-2" href="">Menu 2</a></li>
                    <li><a class="block w-full py-3" href="">Menu 3</a></li>
                    <li class="flex sm:justify-center"><x-button.secondary class="mt-3 w-full max-w-md" href="/docs">Material de estudo</x-button.secondary></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
