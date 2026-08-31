<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameVault — Download PC Games</title>
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
                        brand: {
                            DEFAULT: '#7c3aed',
                            hover: '#6d28d9',
                            light: '#a78bfa',
                        },
                    },
                    fontFamily: {
                        display: ['"Sora"', 'sans-serif'],
                        sans: ['"Inter"', 'sans-serif'],
                    },
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
        .card-hover { transition: transform .2s ease, border-color .2s ease; }
        .card-hover:hover { transform: translateY(-4px); border-color: #7c3aed; }
    </style>
</head>
<body class="bg-base text-gray-200 antialiased">

<!-- NAVBAR -->
<header class="sticky top-0 z-30 border-b border-border bg-base/90 backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center gap-6 px-4 py-3 sm:px-6 lg:px-8">
        <a href="index.html" class="flex items-center gap-2 shrink-0">
            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-br from-brand to-fuchsia-600 font-display text-lg font-bold text-white">G</span>
            <span class="font-display text-lg font-bold tracking-wide text-white">GAME<span class="text-brand-light">VAULT</span></span>
        </a>
        <?php require base_path('views/partials/nav.php');?>



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