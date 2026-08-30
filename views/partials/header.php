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