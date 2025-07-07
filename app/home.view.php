<x-base>
    <main class="w-screen h-screen overflow-hidden bg-sky-100/20">
        <div class="relative isolate px-6 lg:px-8 flex flex-col items-center justify-center h-full">
            <!-- Background gradient -->
            <div class="pointer-events-none absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div
                        class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#7fbdea] to-[#9980fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                ></div>
            </div>
            <!-- Bottom gradient -->
            <div class="pointer-events-none absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#7fbdea] to-[#9980fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <!-- Hero section -->
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="text-center">
                    <!-- Text -->
                    <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-800 sm:text-7xl">Tempest</h1>
                    <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">The PHP framework that gets out of your way.</p>
                    <!-- CTAs -->
                    <div class="mt-10 flex flex-col sm:flex-row gap-y-4 items-center justify-center gap-x-6">
                        <a href="https://tempestphp.com/docs" target="_blank" class="rounded-md bg-sky-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-sky-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">Documentation</a>
                        <a href="https://tempestphp.com/discord" class="text-sm/6 font-semibold text-gray-900 focus-visible:outline-none focus-visible:underline focus-visible:underline-offset-4 focus-visible:decoration-gray-300">Join our Discord
                            <span aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-base>
