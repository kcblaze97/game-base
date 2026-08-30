<?php require base_path('views/partials/header.php');?>

        <nav class="hidden lg:flex items-center gap-1 text-sm font-medium">
            <a href="index.html" class="rounded-md px-3 py-2 text-white border-b-2 border-brand">Home</a>
            <a href="#" class="rounded-md px-3 py-2 text-gray-400 hover:text-white">Games</a>
            <a href="#" class="rounded-md px-3 py-2 text-gray-400 hover:text-white">Categories</a>
            <a href="#" class="rounded-md px-3 py-2 text-gray-400 hover:text-white">Tools</a>
            <a href="#" class="rounded-md px-3 py-2 text-gray-400 hover:text-white">News</a>
            <a href="#" class="rounded-md px-3 py-2 text-gray-400 hover:text-white">Community</a>
        </nav>

        <div class="ml-auto flex flex-1 items-center justify-end gap-3">
            <div class="relative hidden sm:block w-full max-w-xs">
                <svg class="pointer-events-none absolute left-3 top-2.5 h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.3-4.3M17 11a6 6 0 1 1-12 0 6 6 0 0 1 12 0Z"/></svg>
                <input type="text" placeholder="Search games..." class="w-full rounded-lg border border-border bg-panel py-2 pl-9 pr-3 text-sm text-gray-200 placeholder-gray-500 focus:border-brand focus:outline-none focus:ring-1 focus:ring-brand">
            </div>
            <button class="rounded-lg bg-brand p-2 text-white hover:bg-brand-hover sm:hidden">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.3-4.3M17 11a6 6 0 1 1-12 0 6 6 0 0 1 12 0Z"/></svg>
            </button>
            <button class="relative rounded-lg p-2 text-gray-400 hover:bg-panel hover:text-white" aria-label="Notifications">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.4-1.4A2 2 0 0 1 18 14.2V11a6 6 0 1 0-12 0v3.2c0 .5-.2 1-.6 1.4L4 17h5m6 0v1a3 3 0 1 1-6 0v-1m6 0H9"/></svg>
                <span class="absolute right-1.5 top-1.5 h-2 w-2 rounded-full bg-fuchsia-500"></span>
            </button>
            <a href="../admin/dashboard.html" class="flex h-9 w-9 items-center justify-center rounded-full bg-panel2 text-gray-300 hover:text-white" aria-label="Account">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.25a7.5 7.5 0 0 1 15 0"/></svg>
            </a>
        </div>
    </div>
</header>

<main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">

        <!-- HERO -->
        <section class="lg:col-span-2 relative overflow-hidden rounded-2xl border border-border bg-panel">
            <img src="https://images.unsplash.com/photo-1509198397868-475647b2a1e5?q=80&w=1600&auto=format&fit=crop" alt="Elden Ring key art" class="absolute inset-0 h-full w-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-r from-base via-base/70 to-transparent"></div>
            <div class="relative flex h-full min-h-[420px] flex-col justify-end p-8">
                <p class="mb-2 text-xs font-semibold uppercase tracking-widest text-brand-light">Action, RPG</p>
                <h1 class="font-display mb-3 text-5xl font-extrabold text-white">ELDEN RING</h1>
                <p class="mb-6 max-w-md text-sm leading-relaxed text-gray-300">The Golden Order has been broken. Rise, Tarnished, and be guided by grace to brandish the power of the Elden Ring and become an Elden Lord.</p>
                <div class="flex gap-3">
                    <a href="game.html" class="rounded-lg bg-brand px-5 py-2.5 text-sm font-semibold text-white hover:bg-brand-hover">View Details</a>
                    <a href="#" class="flex items-center gap-2 rounded-lg border border-border bg-panel2 px-5 py-2.5 text-sm font-semibold text-white hover:border-brand">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 3a1 1 0 0 1 1 1v7.59l2.3-2.3a1 1 0 1 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 1 1 1.4-1.42l2.3 2.3V4a1 1 0 0 1 1-1Z"/><path d="M4 15a1 1 0 0 1 1 1v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a1 1 0 1 1 2 0v1a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-1a1 1 0 0 1 1-1Z"/></svg>
                        Download Now
                    </a>
                </div>
            </div>
        </section>

        <!-- LATEST RELEASES -->
        <section class="rounded-2xl border border-border bg-panel p-5">
            <div class="mb-4 flex items-center justify-between">
                <h2 class="font-display text-base font-bold text-white">Latest Releases</h2>
            </div>
            <ul class="space-y-3">
                <li class="flex items-center gap-3">
                    <img src="https://images.unsplash.com/photo-1610890690846-5149750ac6b6?q=80&w=200&auto=format&fit=crop" class="h-12 w-12 rounded-lg object-cover" alt="Star Wars Jedi Survivor">
                    <div class="min-w-0 flex-1">
                        <p class="truncate text-sm font-medium text-white">Star Wars Jedi: Survivor</p>
                        <p class="text-xs text-gray-500">May 2, 2024</p>
                    </div>
                    <span class="flex items-center gap-1 text-xs font-semibold text-yellow-400">★ 8.6</span>
                </li>

            </ul>
        </section>
    </div>

    <!-- POPULAR GAMES -->
    <section class="mt-8">
        <div class="mb-4 flex items-center justify-between">
            <h2 class="font-display text-lg font-bold text-white">Popular Games</h2>
            <a href="#" class="text-sm font-medium text-brand-light hover:text-white">View All →</a>
        </div>
        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-6">
            <a href="game.html" class="card-hover overflow-hidden rounded-xl border border-border bg-panel">
                <img src="https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?q=80&w=400&auto=format&fit=crop" class="aspect-[3/4] w-full object-cover" alt="Cyberpunk 2077">
                <div class="p-3">
                    <p class="truncate text-sm font-medium text-white">Cyberpunk 2077</p>
                    <p class="text-xs font-semibold text-yellow-400">★ 9.1</p>
                </div>
            </a>

        </div>
    </section>

    <div class="mt-8 grid grid-cols-1 gap-6 lg:grid-cols-3">
        <!-- CATEGORIES -->
        <section class="lg:col-span-2 rounded-2xl border border-border bg-panel p-5">
            <div class="mb-4 flex items-center justify-between">
                <h2 class="font-display text-base font-bold text-white">Categories</h2>
                <a href="#" class="text-sm font-medium text-brand-light hover:text-white">View All →</a>
            </div>
            <div class="grid grid-cols-3 gap-3 sm:grid-cols-4">
                <a href="#" class="flex flex-col items-center gap-2 rounded-xl border border-border bg-panel2 p-4 text-center hover:border-brand">
                    <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-brand/20 text-brand-light">⚔️</span>
                    <span class="text-sm font-medium text-white">Action</span>
                    <span class="text-xs text-gray-500">128 Games</span>
                </a>
                <a href="#" class="flex flex-col items-center gap-2 rounded-xl border border-border bg-panel2 p-4 text-center hover:border-brand">
                    <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-amber-500/20 text-amber-400">🗺️</span>
                    <span class="text-sm font-medium text-white">Adventure</span>
                    <span class="text-xs text-gray-500">96 Games</span>
                </a>
                <a href="#" class="flex flex-col items-center gap-2 rounded-xl border border-border bg-panel2 p-4 text-center hover:border-brand">
                    <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500/20 text-emerald-400">🛡️</span>
                    <span class="text-sm font-medium text-white">RPG</span>
                    <span class="text-xs text-gray-500">153 Games</span>
                </a>
                <a href="#" class="flex flex-col items-center gap-2 rounded-xl border border-border bg-panel2 p-4 text-center hover:border-brand">
                    <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-sky-500/20 text-sky-400">🏁</span>
                    <span class="text-sm font-medium text-white">Racing</span>
                    <span class="text-xs text-gray-500">72 Games</span>
                </a>
                <a href="#" class="flex flex-col items-center gap-2 rounded-xl border border-border bg-panel2 p-4 text-center hover:border-brand">
                    <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-fuchsia-500/20 text-fuchsia-400">♟️</span>
                    <span class="text-sm font-medium text-white">Strategy</span>
                    <span class="text-xs text-gray-500">64 Games</span>
                </a>
                <a href="#" class="flex flex-col items-center gap-2 rounded-xl border border-border bg-panel2 p-4 text-center hover:border-brand">
                    <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-red-500/20 text-red-400">🔪</span>
                    <span class="text-sm font-medium text-white">Horror</span>
                    <span class="text-xs text-gray-500">48 Games</span>
                </a>
                <a href="#" class="flex flex-col items-center gap-2 rounded-xl border border-border bg-panel2 p-4 text-center hover:border-brand">
                    <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-orange-500/20 text-orange-400">🎯</span>
                    <span class="text-sm font-medium text-white">Shooter</span>
                    <span class="text-xs text-gray-500">105 Games</span>
                </a>
                <a href="#" class="flex flex-col items-center gap-2 rounded-xl border border-border bg-panel2 p-4 text-center hover:border-brand">
                    <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-teal-500/20 text-teal-400">🕹️</span>
                    <span class="text-sm font-medium text-white">Indie</span>
                    <span class="text-xs text-gray-500">63 Games</span>
                </a>
            </div>
        </section>

        <!-- TOP TOOLS -->
        <section class="rounded-2xl border border-border bg-panel p-5">
            <div class="mb-4 flex items-center justify-between">
                <h2 class="font-display text-base font-bold text-white">Top Tools</h2>
            </div>
            <ul class="space-y-2">
                <li class="flex items-center gap-3 rounded-lg px-2 py-2 hover:bg-panel2">
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-panel2 text-brand-light">🧩</span>
                    <div class="min-w-0 flex-1">
                        <p class="truncate text-sm font-medium text-white">DirectX End-User Runtimes</p>
                        <p class="text-xs text-gray-500">June 2010</p>
                    </div>
                </li>

            </ul>
            <a href="#" class="mt-4 block rounded-lg border border-border py-2 text-center text-sm font-medium text-gray-300 hover:border-brand hover:text-white">View All Tools</a>
        </section>
    </div>
</main>

<footer class="mt-12 border-t border-border py-8 text-center text-xs text-gray-500">
    © 2026 GameVault. A practice project — not a real download service.
</footer>
</body>
</html>
