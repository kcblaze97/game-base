<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — GameVault Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        base: '#0c0b14',
                        panel: '#15131f',
                        panel2: '#1b1929',
                        border: '#2a2740',
                        brand: { DEFAULT: '#7c3aed', hover: '#6d28d9', light: '#a78bfa' },
                    },
                    fontFamily: { display: ['"Sora"', 'sans-serif'], sans: ['"Inter"', 'sans-serif'] },
                },
            },
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Sora', sans-serif; }
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-thumb { background: #2a2740; border-radius: 999px; }
    </style>
</head>
<body class="bg-base text-gray-200 antialiased">
<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="hidden w-60 shrink-0 flex-col border-r border-border bg-panel md:flex">
        <div class="flex items-center gap-2 px-5 py-5">
            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-br from-brand to-fuchsia-600 font-display text-lg font-bold text-white">G</span>
            <div>
                <p class="font-display text-sm font-bold tracking-wide text-white">GAMEVAULT</p>
                <p class="text-[11px] text-gray-500">Admin</p>
            </div>
        </div>

        <nav class="flex-1 space-y-6 overflow-y-auto px-3 py-2 text-sm">
            <div>
                <p class="px-2 pb-2 text-[11px] font-semibold uppercase tracking-wide text-gray-600">Main</p>
                <a href="dashboard.html" class="flex items-center gap-3 rounded-lg bg-brand/15 px-3 py-2 font-medium text-white">
                    <span>📊</span> Dashboard
                </a>
                <a href="games.html" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-400 hover:bg-panel2 hover:text-white">
                    <span>🎮</span> Games
                </a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-400 hover:bg-panel2 hover:text-white">
                    <span>🗂️</span> Categories
                </a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-400 hover:bg-panel2 hover:text-white">
                    <span>🧰</span> Tools
                </a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-400 hover:bg-panel2 hover:text-white">
                    <span>📰</span> News
                </a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-400 hover:bg-panel2 hover:text-white">
                    <span>👥</span> Users
                </a>
            </div>

            <div>
                <p class="px-2 pb-2 text-[11px] font-semibold uppercase tracking-wide text-gray-600">Manage</p>
                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-400 hover:bg-panel2 hover:text-white">
                    <span>🤝</span> Collaborators
                </a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-400 hover:bg-panel2 hover:text-white">
                    <span>🔐</span> Roles &amp; Permissions
                </a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-400 hover:bg-panel2 hover:text-white">
                    <span>💬</span> Comments
                </a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-400 hover:bg-panel2 hover:text-white">
                    <span>⬇️</span> Downloads
                </a>
            </div>

            <div>
                <p class="px-2 pb-2 text-[11px] font-semibold uppercase tracking-wide text-gray-600">System</p>
                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-400 hover:bg-panel2 hover:text-white">
                    <span>⚙️</span> Settings
                </a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-400 hover:bg-panel2 hover:text-white">
                    <span>📄</span> Logs
                </a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-400 hover:bg-panel2 hover:text-white">
                    <span>💾</span> Backups
                </a>
            </div>
        </nav>

        <div class="flex items-center gap-3 border-t border-border px-4 py-4">
            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-panel2 text-sm font-semibold text-white">A</span>
            <div class="min-w-0 flex-1">
                <p class="truncate text-sm font-medium text-white">Admin</p>
                <p class="truncate text-xs text-gray-500">Super Admin</p>
            </div>
            <button class="text-gray-500 hover:text-white">›</button>
        </div>
    </aside>

    <!-- MAIN -->
    <main class="flex-1 overflow-y-auto p-6">
        <div class="mb-6 flex items-center justify-between">
            <h1 class="font-display text-2xl font-bold text-white">Dashboard</h1>
            <a href="games.html" class="rounded-lg bg-brand px-4 py-2 text-sm font-semibold text-white hover:bg-brand-hover">+ Add New Game</a>
        </div>

        <!-- STAT CARDS -->
        <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
            <div class="rounded-2xl border border-border bg-panel p-5">
                <div class="mb-3 flex h-9 w-9 items-center justify-center rounded-lg bg-amber-500/20 text-amber-400">🎮</div>
                <p class="text-2xl font-bold text-white">156</p>
                <p class="text-sm text-gray-500">Total Games</p>
                <p class="mt-1 text-xs font-medium text-emerald-400">↑ 12% this month</p>
            </div>
            <div class="rounded-2xl border border-border bg-panel p-5">
                <div class="mb-3 flex h-9 w-9 items-center justify-center rounded-lg bg-brand/20 text-brand-light">⬇️</div>
                <p class="text-2xl font-bold text-white">24,532</p>
                <p class="text-sm text-gray-500">Total Downloads</p>
                <p class="mt-1 text-xs font-medium text-emerald-400">↑ 6.5% this month</p>
            </div>
            <div class="rounded-2xl border border-border bg-panel p-5">
                <div class="mb-3 flex h-9 w-9 items-center justify-center rounded-lg bg-sky-500/20 text-sky-400">👥</div>
                <p class="text-2xl font-bold text-white">8</p>
                <p class="text-sm text-gray-500">Collaborators</p>
                <p class="mt-1 text-xs font-medium text-emerald-400">↑ 2 this month</p>
            </div>
            <div class="rounded-2xl border border-border bg-panel p-5">
                <div class="mb-3 flex h-9 w-9 items-center justify-center rounded-lg bg-fuchsia-500/20 text-fuchsia-400">💬</div>
                <p class="text-2xl font-bold text-white">342</p>
                <p class="text-sm text-gray-500">Comments</p>
                <p class="mt-1 text-xs font-medium text-emerald-400">↑ 18% this month</p>
            </div>
        </div>

        <!-- CHART + TOP DOWNLOADED -->
        <div class="mt-6 grid grid-cols-1 gap-6 lg:grid-cols-3">
            <div class="rounded-2xl border border-border bg-panel p-5 lg:col-span-2">
                <div class="mb-4 flex items-center justify-between">
                    <h2 class="font-display text-base font-bold text-white">Downloads Overview</h2>
                    <select class="rounded-lg border border-border bg-panel2 px-2 py-1 text-xs text-gray-300">
                        <option>Last 30 Days</option>
                        <option>Last 7 Days</option>
                        <option>Last 90 Days</option>
                    </select>
                </div>
                <svg viewBox="0 0 560 200" class="w-full">
                    <polyline fill="none" stroke="#7c3aed" stroke-width="2.5"
                              points="0,140 40,110 80,150 120,90 160,120 200,70 240,100 280,60 320,95 360,55 400,80 440,50 480,75 520,40 560,65" />
                    <polyline fill="url(#grad)" stroke="none"
                              points="0,140 40,110 80,150 120,90 160,120 200,70 240,100 280,60 320,95 360,55 400,80 440,50 480,75 520,40 560,65 560,200 0,200" />
                    <defs>
                        <linearGradient id="grad" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#7c3aed" stop-opacity="0.35"/>
                            <stop offset="100%" stop-color="#7c3aed" stop-opacity="0"/>
                        </linearGradient>
                    </defs>
                </svg>
                <div class="flex justify-between text-xs text-gray-500">
                    <span>May 1</span><span>May 9</span><span>May 13</span><span>May 17</span><span>May 21</span><span>May 25</span><span>May 29</span>
                </div>
            </div>

            <div class="rounded-2xl border border-border bg-panel p-5">
                <h2 class="font-display mb-4 text-base font-bold text-white">Top Downloaded Games</h2>
                <ol class="space-y-3 text-sm">
                    <li class="flex items-center gap-3">
                        <span class="w-4 text-gray-500">1</span>
                        <img src="https://images.unsplash.com/photo-1608889175638-9e3bfd7f7f7c?q=80&w=100&auto=format&fit=crop" class="h-8 w-8 rounded object-cover">
                        <span class="flex-1 truncate text-gray-200">Elden Ring</span>
                        <span class="font-semibold text-white">4,523</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-4 text-gray-500">2</span>
                        <img src="https://images.unsplash.com/photo-1615680022647-99c397cbcaea?q=80&w=100&auto=format&fit=crop" class="h-8 w-8 rounded object-cover">
                        <span class="flex-1 truncate text-gray-200">Ghost of Tsushima</span>
                        <span class="font-semibold text-white">3,241</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-4 text-gray-500">3</span>
                        <img src="https://images.unsplash.com/photo-1533327325824-76bc4e62d560?q=80&w=100&auto=format&fit=crop" class="h-8 w-8 rounded object-cover">
                        <span class="flex-1 truncate text-gray-200">Red Dead Redemption 2</span>
                        <span class="font-semibold text-white">2,987</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-4 text-gray-500">4</span>
                        <img src="https://images.unsplash.com/photo-1608889175638-9e3bfd7f7f7c?q=80&w=100&auto=format&fit=crop" class="h-8 w-8 rounded object-cover">
                        <span class="flex-1 truncate text-gray-200">God of War</span>
                        <span class="font-semibold text-white">2,456</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-4 text-gray-500">5</span>
                        <img src="https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?q=80&w=100&auto=format&fit=crop" class="h-8 w-8 rounded object-cover">
                        <span class="flex-1 truncate text-gray-200">Cyberpunk 2077</span>
                        <span class="font-semibold text-white">1,876</span>
                    </li>
                </ol>
            </div>
        </div>

        <!-- COMMENTS + ACTIVITY -->
        <div class="mt-6 grid grid-cols-1 gap-6 lg:grid-cols-2">
            <div class="rounded-2xl border border-border bg-panel p-5">
                <div class="mb-4 flex items-center justify-between">
                    <h2 class="font-display text-base font-bold text-white">Latest Comments</h2>
                    <a href="#" class="text-xs font-medium text-brand-light hover:text-white">View All</a>
                </div>
                <ul class="space-y-4 text-sm">
                    <li>
                        <p><span class="font-semibold text-white">mario_98</span> <span class="text-gray-500">on Elden Ring</span></p>
                        <p class="text-gray-400">Amazing game! Thanks for the upload!</p>
                        <p class="mt-1 text-xs text-gray-600">2h ago</p>
                    </li>
                    <li>
                        <p><span class="font-semibold text-white">shadowhunter</span> <span class="text-gray-500">on God of War</span></p>
                        <p class="text-gray-400">Installation guide was very helpful.</p>
                        <p class="mt-1 text-xs text-gray-600">5h ago</p>
                    </li>
                    <li>
                        <p><span class="font-semibold text-white">ghostplayer</span> <span class="text-gray-500">on Cyberpunk 2077</span></p>
                        <p class="text-gray-400">Game runs smooth, no issues!</p>
                        <p class="mt-1 text-xs text-gray-600">1d ago</p>
                    </li>
                </ul>
            </div>

            <div class="rounded-2xl border border-border bg-panel p-5">
                <div class="mb-4 flex items-center justify-between">
                    <h2 class="font-display text-base font-bold text-white">Recent Activities</h2>
                    <a href="#" class="text-xs font-medium text-brand-light hover:text-white">View All</a>
                </div>
                <ul class="space-y-4 text-sm">
                    <li class="flex gap-3">
                        <span class="mt-0.5 h-2 w-2 shrink-0 rounded-full bg-brand"></span>
                        <div>
                            <p class="text-gray-200"><span class="font-semibold text-white">Admin</span> added new game Ghost of Tsushima</p>
                            <p class="text-xs text-gray-600">May 18, 2024 · 10:30 AM</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-0.5 h-2 w-2 shrink-0 rounded-full bg-emerald-400"></span>
                        <div>
                            <p class="text-gray-200"><span class="font-semibold text-white">john_doe</span> updated Red Dead Redemption 2 info</p>
                            <p class="text-xs text-gray-600">May 15, 2024 · 04:22 PM</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span class="mt-0.5 h-2 w-2 shrink-0 rounded-full bg-amber-400"></span>
                        <div>
                            <p class="text-gray-200"><span class="font-semibold text-white">alex</span> uploaded 3 new screenshots for Forza Horizon 5</p>
                            <p class="text-xs text-gray-600">May 15, 2024 · 01:15 PM</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
<?php require base_path('views/partials/footer.php'); ?>
