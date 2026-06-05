<!DOCTYPE html>
<html lang="sv" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ragnaro Casino Sverige — Officiell Webbplats</title>
    <link rel="icon" type="image/png" href="/img/lightning.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ragDark: '#09090b',
                        ragCard: '#141417',
                        ragFire: '#ff5500',
                        ragAmber: '#ff9900'
                    }
                }
            }
        }
    </script>
    <style>
        .nav-link::after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #ff9900;
            transition: transform 0.25s ease-out;
        }
        .nav-link:hover::after { transform: scaleX(1); }
    </style>
</head>

<body class="bg-ragDark text-gray-200 font-sans min-h-screen flex flex-col">

    <header class="bg-black border-b border-ragAmber sticky top-0 z-40 backdrop-blur-md w-full">
        <div class="container mx-auto px-4 h-16 flex items-center justify-between">
           
            <!-- Логотип -->
            <a href="/" class="flex items-center gap-2 md:gap-3 group shrink-0">
                <img src="/img/lightning.png" alt="⚡" class="w-7 h-7 md:w-9 md:h-9 object-contain group-hover:scale-110 transition-transform">
                <span class="text-xl md:text-2xl font-black uppercase italic bg-clip-text text-transparent bg-gradient-to-r from-ragAmber to-yellow-300">
                    RAGNARO
                </span>
            </a>
           
            <!-- Навігація для пк -->
            <nav class="hidden lg:flex items-center gap-8 text-sm uppercase font-extrabold tracking-wider">
                <a href="/" class="nav-link relative text-white hover:text-ragAmber transition-colors">Hem</a>
                <a href="/logga in/" class="nav-link relative text-white hover:text-ragAmber transition-colors">Logga In</a>
                <a href="/mobil/" class="nav-link relative text-white hover:text-ragAmber transition-colors">Mobil Casino</a>
                <a href="/promo-codes/" class="nav-link relative text-white hover:text-ragAmber transition-colors">Promo Codes</a>
            </nav>

            <!-- Кнопки дій -->
            <div class="flex items-center gap-3">
                <div class="hidden sm:flex items-center gap-3">
                    <a href="/logga in/" class="text-xs font-bold uppercase px-4 py-2.5 rounded border border-ragAmber text-white hover:bg-ragAmber hover:text-black transition-all">Logga In</a>
                    <a href="/logga in/" class="text-xs font-bold uppercase px-4 py-2.5 rounded bg-gradient-to-r from-ragFire to-amber-600 text-white transition-transform hover:scale-105">Skapa Konto</a>
                </div>
                <!-- Мобільна кнопка профілю -->
                <a href="/logga in/" class="sm:hidden w-10 h-10 flex items-center justify-center rounded-full border border-ragAmber/40 bg-ragAmber/10 text-ragAmber" title="Logga In">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" /></svg>
                </a>
            </div>
        </div>

        <!-- Мобільна навігація -->
        <nav class="flex lg:hidden bg-ragCard/90 border-t border-zinc-900 justify-around py-2 text-[11px] uppercase font-black text-zinc-300">
            <a href="/" class="hover:text-ragAmber">Hem</a>
            <a href="/logga in/" class="hover:text-ragAmber">Logga In</a>
            <a href="/mobil/" class="hover:text-ragAmber">Mobil</a>
            <a href="/promo-codes/" class="hover:text-ragAmber">Codes</a>
        </nav>
    </header>