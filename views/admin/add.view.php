<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameVault — Add New Game</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: 'Inter', system-ui, sans-serif; }
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #2a2d3a; border-radius: 4px; }
        .switch { position: relative; display: inline-block; width: 38px; height: 22px; }
        .switch input { opacity: 0; width: 0; height: 0; }
        .slider { position: absolute; cursor: pointer; inset: 0; background-color: #2a2d3a; transition: .2s; border-radius: 999px; }
        .slider:before { position: absolute; content: ""; height: 16px; width: 16px; left: 3px; bottom: 3px; background-color: #fff; transition: .2s; border-radius: 50%; }
        input:checked + .slider { background-color: #8b5cf6; }
        input:checked + .slider:before { transform: translateX(16px); }
    </style>
</head>
<body class="bg-[#0b0d13] text-gray-200 min-h-screen">

<div class="flex">

    <!-- SIDEBAR -->
    <aside class="w-60 shrink-0 h-screen sticky top-0 bg-[#0e1017] border-r border-white/5 flex flex-col">
        <div class="flex items-center gap-2 px-5 h-16 border-b border-white/5">
            <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-violet-500 to-fuchsia-600 flex items-center justify-center">
                <i data-lucide="gamepad-2" class="w-4.5 h-4.5 text-white"></i>
            </div>
            <span class="font-bold text-white tracking-wide text-[15px]">GAMEVAULT</span>
        </div>

        <nav class="flex-1 overflow-y-auto px-3 py-4 space-y-6 text-sm">
            <div>
                <p class="px-3 text-[11px] font-semibold tracking-wider text-gray-500 mb-2">MAIN</p>
                <a href="/admin" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white"><i data-lucide="layout-dashboard" class="w-4 h-4"></i>Dashboard</a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white"><i data-lucide="gamepad-2" class="w-4 h-4"></i>Games</a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg bg-violet-600/15 text-violet-400 font-medium border border-violet-600/20"><i data-lucide="circle-plus" class="w-4 h-4"></i>Add New Game</a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white"><i data-lucide="folder-tree" class="w-4 h-4"></i>Categories</a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white"><i data-lucide="wrench" class="w-4 h-4"></i>Tools</a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white"><i data-lucide="newspaper" class="w-4 h-4"></i>News</a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white"><i data-lucide="users" class="w-4 h-4"></i>Users</a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white"><i data-lucide="message-square" class="w-4 h-4"></i>Comments</a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white"><i data-lucide="download" class="w-4 h-4"></i>Downloads</a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white"><i data-lucide="bar-chart-3" class="w-4 h-4"></i>Reports</a>
            </div>
            <div>
                <p class="px-3 text-[11px] font-semibold tracking-wider text-gray-500 mb-2">MANAGE</p>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white"><i data-lucide="user-cog" class="w-4 h-4"></i>Collaborators</a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white"><i data-lucide="shield" class="w-4 h-4"></i>Roles & Permissions</a>
            </div>
            <div>
                <p class="px-3 text-[11px] font-semibold tracking-wider text-gray-500 mb-2">SYSTEM</p>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white"><i data-lucide="settings" class="w-4 h-4"></i>Settings</a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white"><i data-lucide="activity" class="w-4 h-4"></i>Activity Logs</a>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-white/5 hover:text-white"><i data-lucide="database-backup" class="w-4 h-4"></i>Backups</a>
            </div>
        </nav>

        <div class="p-3 border-t border-white/5">
            <div class="flex items-center gap-2 px-2 py-2 rounded-lg hover:bg-white/5 cursor-pointer">
                <img src="https://i.pravatar.cc/40?img=13" class="w-8 h-8 rounded-full">
                <div class="leading-tight">
                    <p class="text-sm text-white font-medium">Admin</p>
                    <p class="text-xs text-gray-500">Super Admin</p>
                </div>
                <i data-lucide="chevron-right" class="w-4 h-4 ml-auto text-gray-500"></i>
            </div>
        </div>
    </aside>

    <!-- MAIN -->
    <div class="flex-1 min-w-0">

        <!-- TOP HEADER -->
        <header class="h-16 flex items-center justify-between px-6 border-b border-white/5 sticky top-0 bg-[#0b0d13]/90 backdrop-blur z-10">
            <div class="flex items-center gap-3 text-sm text-gray-400">
                <i data-lucide="menu" class="w-5 h-5 text-gray-500"></i>
                <span>Dashboard</span><span class="text-gray-600">/</span>
                <span>Games</span><span class="text-gray-600">/</span>
                <span class="text-white">Add New Game</span>
            </div>
            <div class="flex items-center gap-4">
                <button class="flex items-center gap-1.5 px-3 py-1.5 text-sm rounded-lg border border-white/10 text-gray-300 hover:bg-white/5">
                    <a href="/">View Site</a><i data-lucide="external-link" class="w-3.5 h-3.5"></i></button>
                <div class="relative">
                    <i data-lucide="bell" class="w-5 h-5 text-gray-400"></i>
                    <span class="absolute -top-1 -right-1 w-4 h-4 rounded-full bg-violet-600 text-[10px] flex items-center justify-center text-white">3</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="https://i.pravatar.cc/40?img=13" class="w-8 h-8 rounded-full">
                    <div class="leading-tight text-sm">
                        <p class="text-white">Admin</p>
                        <p class="text-xs text-gray-500">Super Admin</p>
                    </div>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-gray-500"></i>
                </div>
            </div>
        </header>

        <div class="p-6 max-w-[1400px] mx-auto space-y-6">

            <!-- PAGE TITLE -->
            <div class="flex items-start justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-white">Add New Game</h1>
                    <p class="text-sm text-gray-500 mt-1">Fill in all the required information to add a new game to the library.</p>
                </div>
                <div class="flex items-center gap-2">
                    <button class="px-4 py-2 text-sm rounded-lg border border-white/10 text-gray-300 hover:bg-white/5">Save Draft</button>
                    <button class="flex items-center gap-1.5 px-4 py-2 text-sm rounded-lg border border-white/10 text-gray-300 hover:bg-white/5"><i data-lucide="eye" class="w-4 h-4"></i>Preview
                    <button class="px-4 py-2 text-sm rounded-lg bg-violet-600 hover:bg-violet-500 text-white font-medium">Publish Game</button>
                </div>
            </div>

            <div class="grid grid-cols-[1fr] gap-6 items-start">



                <!-- RIGHT COLUMN -->
                <div class="space-y-6 min-w-0">

                    <!-- BASIC INFO + COVER -->
                    <div class="grid grid-cols-[1fr_320px] gap-6 items-start">

                        <div class="bg-[#141720] border border-white/5 rounded-xl p-6">
                            <h2 class="text-white font-semibold mb-5">Basic Information</h2>
                            <div class="grid grid-cols-2 gap-x-5 gap-y-4 text-sm">

                                <label class="col-span-2">
                                    <span class="text-gray-400">Game Title <span class="text-violet-500">*</span></span>
                                    <input value="" class="mt-1.5 w-full bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-white focus:outline-none focus:ring-1 focus:ring-violet-500">
                                </label>

                                <label class="col-span-2">
                                    <span class="text-gray-400">Slug <span class="text-violet-500">*</span></span>
                                    <input value="" class="mt-1.5 w-full bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-white focus:outline-none focus:ring-1 focus:ring-violet-500">
                                    <span class="text-xs text-gray-600">URL friendly version of the title.</span>
                                </label>

                                <label>
                                    <span class="text-gray-400">Category <span class="text-violet-500">*</span></span>
                                    <select class="mt-1.5 w-full bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-white focus:outline-none focus:ring-1 focus:ring-violet-500">

                                    </select>
                                </label>
                                <label>
                                    <span class="text-gray-400">Sub Category</span>
                                    <select class="mt-1.5 w-full bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-white focus:outline-none focus:ring-1 focus:ring-violet-500">

                                    </select>
                                </label>

                                <label class="col-span-2">
                                    <span class="text-gray-400">Tags</span>
                                    <div class="mt-1.5 flex flex-wrap gap-1.5 bg-[#0e1017] border border-white/10 rounded-lg px-2.5 py-2">
                                        <span class="flex items-center gap-1 bg-white/5 border border-white/10 text-gray-300 text-xs px-2 py-1 rounded-md">Western <i data-lucide="x" class="w-3 h-3 cursor-pointer text-gray-500"></i></span>
                                        <span class="flex items-center gap-1 bg-white/5 border border-white/10 text-gray-300 text-xs px-2 py-1 rounded-md">Adventure <i data-lucide="x" class="w-3 h-3 cursor-pointer text-gray-500"></i></span>
                                        <span class="flex items-center gap-1 bg-white/5 border border-white/10 text-gray-300 text-xs px-2 py-1 rounded-md">Story Rich <i data-lucide="x" class="w-3 h-3 cursor-pointer text-gray-500"></i></span>
                                        <span class="flex items-center gap-1 bg-white/5 border border-white/10 text-gray-300 text-xs px-2 py-1 rounded-md">Shooter <i data-lucide="x" class="w-3 h-3 cursor-pointer text-gray-500"></i></span>
                                        <input placeholder="Add tags..." class="bg-transparent text-xs text-gray-400 focus:outline-none flex-1 min-w-[80px]">
                                    </div>
                                </label>

                                <label>
                                    <span class="text-gray-400">Release Date</span>
                                    <div class="relative mt-1.5">
                                        <input value="" type="date" class="w-full bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-white focus:outline-none focus:ring-1 focus:ring-violet-500">
                                        <i data-lucide="calendar" class="w-4 h-4 text-gray-500 absolute right-3 top-2.5"></i>
                                    </div>
                                </label>
                                <label>
                                    <span class="text-gray-400">Developer</span>
                                    <input value="Rockstar Games" class="mt-1.5 w-full bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-white focus:outline-none focus:ring-1 focus:ring-violet-500">
                                </label>

                                <div class="col-span-2 grid grid-cols-2 gap-5">
                                    <label>
                                        <span class="text-gray-400">Publisher</span>
                                        <input value="Rockstar Games" class="mt-1.5 w-full bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-white focus:outline-none focus:ring-1 focus:ring-violet-500">
                                    </label>
                                    <div>
                                        <span class="text-gray-400">Game Mode</span>
                                        <div class="mt-2.5 flex items-center gap-4 text-gray-300">
                                            <label class="flex items-center gap-1.5"><input type="checkbox" checked class="accent-violet-600 w-3.5 h-3.5">Single Player</label>
                                            <label class="flex items-center gap-1.5"><input type="checkbox" checked class="accent-violet-600 w-3.5 h-3.5">Multi Player</label>
                                            <label class="flex items-center gap-1.5"><input type="checkbox" class="accent-violet-600 w-3.5 h-3.5">Co-op</label>
                                        </div>
                                    </div>
                                </div>

                                <label class="col-span-2">
                                    <span class="text-gray-400">Platform <span class="text-violet-500">*</span></span>
                                    <div class="mt-1.5 flex flex-wrap gap-1.5 bg-[#0e1017] border border-white/10 rounded-lg px-2.5 py-2">
                                        <span class="flex items-center gap-1 bg-white/5 border border-white/10 text-gray-300 text-xs px-2 py-1 rounded-md">PC <i data-lucide="x" class="w-3 h-3 cursor-pointer text-gray-500"></i></span>
                                        <span class="flex items-center gap-1 bg-white/5 border border-white/10 text-gray-300 text-xs px-2 py-1 rounded-md">PlayStation 4 <i data-lucide="x" class="w-3 h-3 cursor-pointer text-gray-500"></i></span>
                                        <span class="flex items-center gap-1 bg-white/5 border border-white/10 text-gray-300 text-xs px-2 py-1 rounded-md">Xbox One <i data-lucide="x" class="w-3 h-3 cursor-pointer text-gray-500"></i></span>
                                    </div>
                                </label>

                                <label class="col-span-2">
                                    <span class="text-gray-400">Short Description <span class="text-violet-500">*</span></span>
                                    <textarea rows="3" class="mt-1.5 w-full bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-white focus:outline-none focus:ring-1 focus:ring-violet-500"></textarea>
                                </label>

                                <div class="col-span-2 flex items-center justify-between bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2.5">
                                    <div>
                                        <p class="text-gray-300">Featured</p>
                                        <p class="text-xs text-gray-600">Show this game on homepage</p>
                                    </div>
                                    <label class="switch"><input type="checkbox" checked><span class="slider"></span></label>
                                </div>

                                <label>
                                    <span class="text-gray-400">Game Size</span>
                                    <div class="relative mt-1.5">
                                        <input value="" class="w-full bg-[#0e1017] border border-white/10 rounded-lg pl-3 pr-10 py-2 text-white focus:outline-none focus:ring-1 focus:ring-violet-500">
                                        <span class="absolute right-3 top-2.5 text-xs text-gray-500">GB</span>
                                    </div>
                                </label>

                                <label>
                                    <span class="text-gray-400">Language</span>
                                    <input type="text" class="mt-1.5 flex flex-wrap gap-1.5 bg-[#0e1017] border border-white/10 rounded-lg px-2.5 py-2">
                                </label>

                                <label>
                                    <span class="text-gray-400">Rating (0-10)</span>
                                    <div class="relative mt-1.5">
                                        <input value="" class="w-full bg-[#0e1017] border border-white/10 rounded-lg pl-3 pr-8 py-2 text-white focus:outline-none focus:ring-1 focus:ring-violet-500">
                                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-yellow-500 absolute right-2.5 top-2.5"></i>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- COVER IMAGE -->
                        <div class="bg-[#141720] border border-white/5 rounded-xl p-5">
                            <h2 class="text-white font-semibold mb-3">Cover Image <span class="text-violet-500">*</span></h2>
                            <div class="rounded-lg overflow-hidden border border-white/10">
                                <img src="https://images.unsplash.com/photo-1509198397868-475647b2a1e5?w=600&q=80" class="w-full h-64 object-cover">
                            </div>
                            <button class="mt-4 w-full flex items-center justify-center gap-2 text-sm text-violet-400 border border-violet-600/30 bg-violet-600/10 rounded-lg py-2.5 hover:bg-violet-600/15">
                                <i data-lucide="upload" class="w-4 h-4"></i>Upload New Cover
                            </button>
                            <p class="text-xs text-gray-600 text-center mt-2">PNG, JPG or WEBP. Recommended size: 1280x720</p>
                        </div>
                    </div>

                    <!-- SCREENSHOTS + TRAILER -->
                    <div class="grid grid-cols-[1fr_420px] gap-6 items-start">
                        <div class="bg-[#141720] border border-white/5 rounded-xl p-6">
                            <h2 class="text-white font-semibold mb-1">Screenshots <span class="text-sm text-gray-500 font-normal">(Min 5 - Max 10)</span></h2>
                            <div class="grid grid-cols-6 gap-3 mt-4">
                                <div class="relative rounded-lg overflow-hidden h-24 group"><img src="https://images.unsplash.com/photo-1500534623283-312aade485b7?w=300&q=80" class="w-full h-full object-cover"><i data-lucide="x" class="absolute top-1 right-1 w-4 h-4 bg-black/60 rounded-full p-0.5 text-white cursor-pointer"></i></div>
                                <div class="relative rounded-lg overflow-hidden h-24 group"><img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?w=300&q=80" class="w-full h-full object-cover"><i data-lucide="x" class="absolute top-1 right-1 w-4 h-4 bg-black/60 rounded-full p-0.5 text-white cursor-pointer"></i></div>
                                <div class="relative rounded-lg overflow-hidden h-24 group"><img src="https://images.unsplash.com/photo-1533587851505-d119e13fa0d7?w=300&q=80" class="w-full h-full object-cover"><i data-lucide="x" class="absolute top-1 right-1 w-4 h-4 bg-black/60 rounded-full p-0.5 text-white cursor-pointer"></i></div>
                                <div class="relative rounded-lg overflow-hidden h-24 group"><img src="https://images.unsplash.com/photo-1542273917363-3b1817f69a2d?w=300&q=80" class="w-full h-full object-cover"><i data-lucide="x" class="absolute top-1 right-1 w-4 h-4 bg-black/60 rounded-full p-0.5 text-white cursor-pointer"></i></div>
                                <div class="relative rounded-lg overflow-hidden h-24 group"><img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?w=300&q=80" class="w-full h-full object-cover"><i data-lucide="x" class="absolute top-1 right-1 w-4 h-4 bg-black/60 rounded-full p-0.5 text-white cursor-pointer"></i></div>
                                <button class="h-24 rounded-lg border-2 border-dashed border-white/10 flex flex-col items-center justify-center text-gray-500 hover:border-violet-600/40 hover:text-violet-400 text-xs gap-1">
                                    <i data-lucide="plus" class="w-4 h-4"></i>Add Screenshot
                                </button>
                            </div>
                            <p class="text-xs text-gray-600 mt-3">You can drag and drop to reorder.</p>
                        </div>

                        <div class="bg-[#141720] border border-white/5 rounded-xl p-6">
                            <h2 class="text-white font-semibold mb-3">Trailer</h2>
                            <label class="text-xs text-gray-400">YouTube Video ID</label>
                            <input value="Ea7UQOYskas" class="mt-1.5 w-full bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-sm text-white focus:outline-none focus:ring-1 focus:ring-violet-500">
                            <div class="relative mt-3 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?w=600&q=80" class="w-full h-40 object-cover">
                                <div class="absolute inset-0 flex items-center justify-center bg-black/30">
                                    <div class="w-12 h-12 rounded-full bg-violet-600 flex items-center justify-center"><i data-lucide="play" class="w-5 h-5 text-white ml-0.5"></i></div>
                                </div>
                            </div>
                            <label class="text-xs text-gray-400 mt-3 block">Full YouTube URL (optional)</label>
                            <input value="https://www.youtube.com/watch?v=Ea7UQOYskas" class="mt-1.5 w-full bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-sm text-gray-400 focus:outline-none focus:ring-1 focus:ring-violet-500">
                        </div>
                    </div>

                    <!-- SYS REQ + DOWNLOAD LINKS + TOOLS -->
                    <div class="grid grid-cols-3 gap-6 items-start">

                        <div class="bg-[#141720] border border-white/5 rounded-xl p-6 text-sm">
                            <h2 class="text-white font-semibold mb-4">System Requirements</h2>
                            <p class="text-gray-400 font-medium mb-2">Minimum Requirements</p>
                            <div class="space-y-1.5 mb-4">
                                <div class="flex justify-between"><span class="text-gray-500">OS</span><span class="text-gray-300">Windows 10 64-bit</span></div>
                                <div class="flex justify-between"><span class="text-gray-500">Processor</span><span class="text-gray-300">i5-2500K / FX-6300</span></div>
                                <div class="flex justify-between"><span class="text-gray-500">Memory</span><span class="text-gray-300">8 GB RAM</span></div>
                                <div class="flex justify-between"><span class="text-gray-500">Graphics</span><span class="text-gray-300">GTX 770 2GB</span></div>
                                <div class="flex justify-between"><span class="text-gray-500">Storage</span><span class="text-gray-300">150 GB</span></div>
                                <div class="flex justify-between"><span class="text-gray-500">DirectX</span><span class="text-gray-300">Version 12</span></div>
                            </div>
                            <p class="text-gray-400 font-medium mb-2">Recommended Requirements</p>
                            <div class="space-y-1.5">
                                <div class="flex justify-between"><span class="text-gray-500">OS</span><span class="text-gray-300">Windows 10 64-bit</span></div>
                                <div class="flex justify-between"><span class="text-gray-500">Processor</span><span class="text-gray-300">i7-4770K / Ryzen 5 1500X</span></div>
                                <div class="flex justify-between"><span class="text-gray-500">Memory</span><span class="text-gray-300">12 GB RAM</span></div>
                                <div class="flex justify-between"><span class="text-gray-500">Graphics</span><span class="text-gray-300">GTX 1060 6GB</span></div>
                                <div class="flex justify-between"><span class="text-gray-500">Storage</span><span class="text-gray-300">150 GB</span></div>
                                <div class="flex justify-between"><span class="text-gray-500">DirectX</span><span class="text-gray-300">Version 12</span></div>
                            </div>
                        </div>

                        <div class="bg-[#141720] border border-white/5 rounded-xl p-6 text-sm">
                            <h2 class="text-white font-semibold mb-4">Download Links</h2>
                            <p class="text-gray-400 font-medium mb-2">Main Game Download <span class="text-violet-500">*</span></p>
                            <input value="" placeholder="Game title" class="w-full mb-2 bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-white text-xs focus:outline-none focus:ring-1 focus:ring-violet-500">
                            <input value="" placeholder="https://example.com/red-dead-redemption-2" class="w-full mb-2 bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-gray-500 text-xs focus:outline-none focus:ring-1 focus:ring-violet-500">
                            <div class="flex gap-2 mb-3">
                                <input value="" placeholder="Download size GB" class="w-1/2 bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-white text-xs focus:outline-none focus:ring-1 focus:ring-violet-500">
                                <select class="w-1/2 bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-white text-xs focus:outline-none focus:ring-1 focus:ring-violet-500">
                                    <option>.zip</option>
                                    <option>.rar</option>
                                    <option>.iso</option>
                                </select>
                            </div>
                            <div class="flex items-center justify-between mb-5">
                                <span class="text-xs text-gray-400">Direct Download Link</span>
                                <label class="switch"><input type="checkbox" checked><span class="slider"></span></label>
                            </div>

                        </div>

                        <div class="bg-[#141720] border border-white/5 rounded-xl p-6 text-sm">
                            <h2 class="text-white font-semibold mb-4">Required Tools</h2>
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center gap-2 bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2">
                                    <i data-lucide="shield-check" class="w-4 h-4 text-sky-400"></i>
                                    <span class="text-gray-300 flex-1">DirectX 12</span>
                                    <span class="text-xs text-gray-600">298 MB</span>
                                    <i data-lucide="x" class="w-3.5 h-3.5 text-rose-500 cursor-pointer"></i>
                                </div>
                                <div class="flex items-center gap-2 bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2">
                                    <i data-lucide="cpu" class="w-4 h-4 text-orange-400"></i>
                                    <span class="text-gray-300 flex-1">Visual C++ Redist.</span>
                                    <span class="text-xs text-gray-600">24.1 MB</span>
                                    <i data-lucide="x" class="w-3.5 h-3.5 text-rose-500 cursor-pointer"></i>
                                </div>
                                <div class="flex items-center gap-2 bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2">
                                    <i data-lucide="box" class="w-4 h-4 text-purple-400"></i>
                                    <span class="text-gray-300 flex-1">.NET Framework 4.8</span>
                                    <span class="text-xs text-gray-600">71.3 MB</span>
                                    <i data-lucide="x" class="w-3.5 h-3.5 text-rose-500 cursor-pointer"></i>
                                </div>
                                <div class="flex items-center gap-2 bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2">
                                    <i data-lucide="archive" class="w-4 h-4 text-yellow-400"></i>
                                    <span class="text-gray-300 flex-1">WinRAR 6.24 (64-bit)</span>
                                    <span class="text-xs text-gray-600">3.2 MB</span>
                                    <i data-lucide="x" class="w-3.5 h-3.5 text-rose-500 cursor-pointer"></i>
                                </div>
                                <div class="flex items-center gap-2 bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2">
                                    <i data-lucide="gamepad-2" class="w-4 h-4 text-red-400"></i>
                                    <span class="text-gray-300 flex-1">Rockstar Games Launcher</span>
                                    <span class="text-xs text-gray-600">120 MB</span>
                                    <i data-lucide="x" class="w-3.5 h-3.5 text-rose-500 cursor-pointer"></i>
                                </div>
                            </div>
                            <button class="w-full flex items-center justify-center gap-1.5 text-violet-400 border border-violet-600/30 bg-violet-600/10 rounded-lg py-2 text-xs hover:bg-violet-600/15"><i data-lucide="plus" class="w-3.5 h-3.5"></i>Add Tool</button>
                        </div>
                    </div>

                    <!-- DESCRIPTION -->
                    <div class="bg-[#141720] border border-white/5 rounded-xl p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h2 class="text-white font-semibold">Description <span class="text-violet-500">*</span></h2>
                            <button class="flex items-center gap-1.5 text-xs text-gray-400 border border-white/10 rounded-lg px-3 py-1.5 hover:bg-white/5"><i data-lucide="eye" class="w-3.5 h-3.5"></i>Preview</button>
                        </div>
                        <div class="border border-white/10 rounded-lg overflow-hidden">

                            <div class="p-4 text-sm text-gray-300 leading-relaxed space-y-3">
                                <textarea rows="10" class="mt-1.5 w-full bg-[#0e1017] border border-white/10 rounded-lg px-3 py-2 text-white focus:outline-none focus:ring-1 focus:ring-violet-500"></textarea>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>lucide.createIcons();</script>
</body>
</html>
