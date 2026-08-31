<?php require base_path('views/partials/header.php');?>

<!-- BREADCRUMB -->
<div class="mx-auto max-w-7xl px-4 pt-5 sm:px-6 lg:px-8">
    <nav class="flex items-center gap-2 text-sm text-gray-500">
        <a href="index.html" class="hover:text-white">Home</a>
        <span>/</span>
        <a href="#" class="hover:text-white">Games</a>
        <span>/</span>
        <a href="#" class="hover:text-white">Action</a>
        <span>/</span>
        <span class="text-gray-300">Ghost of Tsushima Director's Cut</span>
    </nav>
</div>

<main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-4">

        <!-- MEDIA + INFO -->
        <section class="lg:col-span-3 space-y-6">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-5">
                <!-- Cover / gallery -->
                <div class="sm:col-span-3">
                    <div class="overflow-hidden rounded-2xl border border-border bg-panel">
                        <img id="main-shot" src="https://images.unsplash.com/photo-1615680022647-99c397cbcaea?q=80&w=1200&auto=format&fit=crop" alt="Ghost of Tsushima" class="aspect-video w-full object-cover">
                    </div>
                    <div class="mt-3 flex gap-2 overflow-x-auto">
                        <img src="https://images.unsplash.com/photo-1615680022647-99c397cbcaea?q=80&w=200&auto=format&fit=crop" class="thumb-active h-16 w-24 shrink-0 cursor-pointer rounded-lg object-cover" alt="thumb">
                        <img src="https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?q=80&w=200&auto=format&fit=crop" class="h-16 w-24 shrink-0 cursor-pointer rounded-lg object-cover opacity-70 hover:opacity-100" alt="thumb">
                        <img src="https://images.unsplash.com/photo-1608889175638-9e3bfd7f7f7c?q=80&w=200&auto=format&fit=crop" class="h-16 w-24 shrink-0 cursor-pointer rounded-lg object-cover opacity-70 hover:opacity-100" alt="thumb">
                        <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=200&auto=format&fit=crop" class="h-16 w-24 shrink-0 cursor-pointer rounded-lg object-cover opacity-70 hover:opacity-100" alt="thumb">
                        <img src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?q=80&w=200&auto=format&fit=crop" class="h-16 w-24 shrink-0 cursor-pointer rounded-lg object-cover opacity-70 hover:opacity-100" alt="thumb">
                    </div>
                </div>

                <!-- Title & meta -->
                <div class="sm:col-span-2 rounded-2xl border border-border bg-panel p-5">
                    <h1 class="font-display text-2xl font-bold text-white">Ghost of Tsushima</h1>
                    <span class="mt-1 inline-block rounded bg-brand/20 px-2 py-0.5 text-xs font-semibold text-brand-light">DIRECTOR'S CUT</span>
                    <div class="mt-3 flex items-center gap-2 text-sm">
                        <span class="font-semibold text-yellow-400">★ 9.4</span>
                        <span class="text-gray-500">(2.4k reviews)</span>
                    </div>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span class="rounded-full bg-panel2 px-3 py-1 text-xs text-gray-300">Action</span>
                        <span class="rounded-full bg-panel2 px-3 py-1 text-xs text-gray-300">Adventure</span>
                        <span class="rounded-full bg-panel2 px-3 py-1 text-xs text-gray-300">Open World</span>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-gray-400">In the late 13th century, the Mongol empire has laid waste to entire nations along their campaign to conquer the East. On the island of Tsushima, samurai warrior Jin Sakai stands as one of the last surviving members of his clan.</p>
                    <dl class="mt-5 space-y-2 text-sm">

                        <div class="flex justify-between border-t border-border pt-2">
                            <dt class="text-gray-500">Release Date</dt><dd class="text-gray-200">May 16, 2024</dd>
                        </div>
                        <div class="flex justify-between border-t border-border pt-2">
                            <dt class="text-gray-500">Genre</dt><dd class="text-gray-200">Action, Adventure, Open World</dd>
                        </div>
                        <div class="flex justify-between border-t border-border pt-2">
                            <dt class="text-gray-500">Size</dt><dd class="text-gray-200">75 GB</dd>
                        </div>
                    </dl>
                </div>
            </div>

            <!-- ABOUT + REQUIREMENTS -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div class="rounded-2xl border border-border bg-panel p-5">
                    <h2 class="font-display mb-3 text-base font-bold text-white">About This Game</h2>
                    <p class="text-sm leading-relaxed text-gray-400">A storm is coming. Venture into the complete Ghost of Tsushima DIRECTOR'S CUT, forge alliance with unlikely allies and uncover its hidden wonders.</p>
                    <p class="mt-3 text-sm leading-relaxed text-gray-400">Experience the rise of Jin Sakai as he masters the way of the samurai and leads a resistance against the invaders of Tsushima.</p>
                    <p class="mt-4 text-sm font-semibold text-white">Includes:</p>
                    <ul class="mt-2 list-inside list-disc space-y-1 text-sm text-gray-400">
                        <li>Ghost of Tsushima</li>
                        <li>Iki Island expansion</li>
                        <li>Legends online multiplayer mode</li>
                    </ul>
                </div>
                <div class="rounded-2xl border border-border bg-panel p-5">
                    <h2 class="font-display mb-3 text-base font-bold text-white">System Requirements</h2>
                    <div class="grid grid-cols-2 gap-4 text-sm">
                        <div>
                            <p class="mb-2 font-semibold text-gray-300">Minimum</p>
                            <dl class="space-y-2">
                                <div><dt class="text-xs text-gray-500">OS</dt><dd class="text-gray-300">Windows 10 64-bit</dd></div>
                                <div><dt class="text-xs text-gray-500">Processor</dt><dd class="text-gray-300">Intel Core i7-3100 / AMD Ryzen 3 1200</dd></div>
                                <div><dt class="text-xs text-gray-500">Memory</dt><dd class="text-gray-300">8 GB RAM</dd></div>
                                <div><dt class="text-xs text-gray-500">Graphics</dt><dd class="text-gray-300">NVIDIA GeForce GTX 960 / AMD Radeon R9 380</dd></div>
                                <div><dt class="text-xs text-gray-500">DirectX</dt><dd class="text-gray-300">Version 12</dd></div>
                                <div><dt class="text-xs text-gray-500">Storage</dt><dd class="text-gray-300">75 GB available space</dd></div>
                            </dl>
                        </div>
                        <div>
                            <p class="mb-2 font-semibold text-gray-300">Recommended</p>
                            <dl class="space-y-2">
                                <div><dt class="text-xs text-gray-500">OS</dt><dd class="text-gray-300">Windows 10 64-bit</dd></div>
                                <div><dt class="text-xs text-gray-500">Processor</dt><dd class="text-gray-300">Intel Core i5-8600 / AMD Ryzen 5 2600</dd></div>
                                <div><dt class="text-xs text-gray-500">Memory</dt><dd class="text-gray-300">16 GB RAM</dd></div>
                                <div><dt class="text-xs text-gray-500">Graphics</dt><dd class="text-gray-300">NVIDIA GeForce RTX 2060 / AMD Radeon R9 480</dd></div>
                                <div><dt class="text-xs text-gray-500">DirectX</dt><dd class="text-gray-300">Version 12</dd></div>
                                <div><dt class="text-xs text-gray-500">Storage</dt><dd class="text-gray-300">75 GB available space</dd></div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SIDEBAR: DOWNLOAD + TRAILER -->
        <aside class="space-y-6">
            <div class="rounded-2xl border border-border bg-panel p-5">
                <h2 class="font-display mb-4 text-base font-bold text-white">Download</h2>
                <button class="flex w-full items-center justify-center gap-2 rounded-lg bg-brand py-3 text-sm font-semibold text-white hover:bg-brand-hover">
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 3a1 1 0 0 1 1 1v7.59l2.3-2.3a1 1 0 1 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 1 1 1.4-1.42l2.3 2.3V4a1 1 0 0 1 1-1Z"/><path d="M4 15a1 1 0 0 1 1 1v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a1 1 0 1 1 2 0v1a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-1a1 1 0 0 1 1-1Z"/></svg>
                    Download Game (75 GB)
                </button>
                <button class="mt-3 flex w-full items-center justify-center gap-2 rounded-lg border border-border bg-panel2 py-3 text-sm font-semibold text-white hover:border-brand">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21l1.4-1.4-5.83-5.83M11.42 15.17l-3.02-3.02a4.5 4.5 0 1 1 6.36-6.36l1.7 1.7"/></svg>
                    Download Tools (Required)
                </button>
                <p class="mt-3 text-xs text-gray-500">Make sure to install all required tools before installing the game.</p>

                <div class="mt-5 border-t border-border pt-4">
                    <p class="mb-2 text-xs font-semibold uppercase tracking-wide text-gray-500">Tools Included</p>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> DirectX End-User Runtimes</li>
                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Visual C++ Redistributable</li>
                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> .NET Framework 4.8</li>
                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> WinRAR 6.24 (64-bit)</li>
                    </ul>
                </div>
            </div>

            <div class="rounded-2xl border border-border bg-panel p-5">
                <h2 class="font-display mb-3 text-base font-bold text-white">Trailer</h2>
                <a href="#" class="group relative block overflow-hidden rounded-xl">
                    <img src="https://images.unsplash.com/photo-1615680022647-99c397cbcaea?q=80&w=600&auto=format&fit=crop" class="aspect-video w-full object-cover" alt="Trailer thumbnail">
                    <span class="absolute inset-0 flex items-center justify-center bg-black/40">
              <span class="flex h-12 w-12 items-center justify-center rounded-full bg-red-600 text-white group-hover:bg-red-500">▶</span>
            </span>
                </a>
                <p class="mt-3 text-sm font-medium text-white">Ghost of Tsushima — PC Official Trailer</p>
                <p class="text-xs text-gray-500">Watch on YouTube</p>
            </div>
        </aside>
    </div>
</main>



<?php require base_path('views/partials/footer.php');?>