<?php 
include 'config.php'; 
include 'header.php'; 
?>

<!-- 1. МАСИВНИЙ БАНЕР З БОНУСОМ (Hero Section) -->
<section class="relative bg-black border-b border-zinc-950 overflow-hidden min-h-[480px] md:min-h-[550px] flex items-center w-full">
    
    <!-- АДАПТИВНЕ ФОТО -->
    <div class="absolute inset-0 bg-cover bg-[75%_center] sm:bg-[85%_center] md:bg-right-center z-0" style="background-image: url('/img/hero-bg.webp');"></div>
    
    <!-- РОЗУМНЕ ЗАТЕМНЕННЯ -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-black/20 md:bg-gradient-to-r md:from-black/80 md:via-black/30 md:to-transparent z-10 pointer-events-none"></div>
    
    <!-- КОНТЕНТ БАНЕРА -->
    <div class="relative w-full px-4 lg:px-12 xl:px-24 z-20 pt-16 pb-8 md:py-16 flex flex-col items-start text-left space-y-5 md:space-y-6">
        
        <div class="flex items-center gap-2 text-zinc-300 text-[11px] font-black tracking-widest uppercase drop-shadow-[0_2px_4px_rgba(0,0,0,0.8)]">
            <span class="w-2 h-2 rounded-full bg-ragAmber animate-pulse"></span>
            Välkomstbonus • 2026
        </div>
        
        <h1 class="text-4xl md:text-6xl font-black tracking-tighter text-white uppercase italic leading-none max-w-2xl filter drop-shadow-[0_4px_8px_rgba(0,0,0,0.95)]">
            100% UPP TILL <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-ragAmber via-amber-400 to-yellow-300">1000 SEK</span>
        </h1>
        
        <p class="text-zinc-200 text-xs md:text-sm max-w-xl leading-relaxed font-bold filter drop-shadow-[0_3px_6px_rgba(0,0,0,0.95)]">
            Plattformens licensiering under Spelinspektionen garanterar att alla transaktioner och spel sker enligt svenska regler. Sätt in minst 100 SEK och dubbla din första insättning direkt. Spela ansvarsfullt. 18+.
        </p>

        <div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-auto pt-2 z-30">
            <a href="/logga in/" class="w-full sm:w-auto font-black text-black bg-gradient-to-r from-ragAmber to-amber-500 hover:from-amber-500 hover:to-ragAmber px-10 py-4 rounded-xl uppercase tracking-wider text-sm text-center transform active:scale-95 transition-all duration-300 flex items-center justify-center gap-2 shadow-lg shadow-ragAmber/20 hover:shadow-[0_0_25px_rgba(255,153,0,0.6)]">
                <img src="/img/lightning.png" alt="⚡" class="w-4 h-4 object-contain brightness-0"> 
                Spela Nu
            </a>
            <a href="#om-ragnaro" class="w-full sm:w-auto font-black text-white hover:text-ragAmber border border-zinc-700 hover:border-ragAmber px-8 py-4 rounded-xl uppercase tracking-wider transition-all text-sm text-center bg-black/30 backdrop-blur-sm duration-200">
                🤘 Läs Recension
            </a>
        </div>
    </div>
</section>

<!-- КОНТЕНТНИЙ БЛОК: py-6 на мобільних прибирає величезну діру, а max-w-[1600px] розширює межі під шапку -->
<div class="w-full px-4 lg:px-12 xl:px-24 max-w-[1600px] mx-auto py-6 md:py-16 space-y-12 md:space-y-20">

    <!-- 2. БЛОК "OM RAGNARO" (Компактний відступ для мобілок) -->
    <section id="om-ragnaro" class="grid md:grid-cols-12 gap-6 md:gap-8 items-center pt-2 md:pt-0">
        <div class="md:col-span-7 bg-gradient-to-b from-ragCard to-zinc-950 border border-ragAmber/40 rounded-2xl p-5 md:p-8 space-y-4 md:space-y-6 shadow-2xl shadow-ragAmber/5">
            <h2 class="text-xl md:text-3xl font-black text-ragAmber uppercase tracking-tight italic border-l-4 border-ragAmber pl-4">
                Om Ragnaro Casino — Äkta Rock 'N' Roll
            </h2>
            <p class="text-zinc-200 text-xs md:text-base leading-relaxed font-semibold">
                Ragnaro är inte bara ett i mängden. Vi är Sveriges bäst rankade plattform där den tunga, episka atmosfären av <span class="text-white font-black underline decoration-ragAmber">hårdrock och metal</span> möter spänningen i de modernaste casinospelen. Vi har skapat en fristad för spelare som kräver snabbhet, belysning och kompromisslös kvalitet.
            </p>
            <p class="text-zinc-400 text-xs md:text-sm leading-relaxed">
                Vårt samarbete med världsledande spelutvecklare gör att du får tillgång till de tyngsta spelsläppen direkt i din dator eller mobil. Inget krångel, inga dolda avgifter – bara ren energi.
            </p>
        </div>
        
        <div class="md:col-span-5 bg-gradient-to-br from-zinc-900 via-ragCard to-black p-6 md:p-8 rounded-2xl border border-ragAmber/30 text-center space-y-4 flex flex-col items-center justify-center min-h-[200px] md:min-h-[250px] shadow-xl">
            <div class="text-4xl md:text-5xl filter drop-shadow-[0_4px_10px_rgba(255,153,0,0.2)]">🇸🇪</div>
            <h3 class="text-sm md:text-base font-black uppercase text-white tracking-wider bg-clip-text text-transparent bg-gradient-to-r from-ragAmber to-amber-400">Officiell Svensk Licens</h3>
            <p class="text-xs md:text-sm text-zinc-300 leading-relaxed max-w-xs font-medium">
                Plattformens licensiering under <strong class="text-white">Spelinspektionen</strong> garanterar att alla transaktioner och spel sker strikt enligt svenska regler och lagar för din maximala trygghet.
            </p>
        </div>
    </section>

    <!-- 3. ІЛЮЗОРНА ВІТРИНА СЛОТІВ (РОЗТЯГНУТО НА ВЕСЬ БЛОК — КАРТИНКИ СТАЛИ БІЛЬШИМИ!) -->
    <section class="space-y-6 w-full">
        <div class="text-center space-y-2 border-b border-zinc-900 pb-6 relative">
            <h3 class="text-xl md:text-2xl font-black text-white uppercase tracking-wider italic flex items-center justify-center gap-3">
                <span class="w-2 h-2 rounded-full bg-ragAmber animate-pulse"></span> 
                Populära Spelautomater
                <span class="w-2 h-2 rounded-full bg-ragAmber animate-pulse"></span>
            </h3>
            <p class="text-xs text-zinc-500 font-bold uppercase tracking-widest">Utforska över 2 000+ premiumnivå slots</p>
        </div>
        
        <!-- Сітка тепер заповнює 100% ширини контейнера, карти стали набагато ширшими та цікавішими -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
            
            <!-- Слот 1: Book of Dead -->
            <div class="bg-ragCard border border-zinc-900 rounded-xl p-4 text-center space-y-4 hover:border-ragAmber/40 transition-all duration-300 group shadow-lg shadow-ragAmber/5 hover:shadow-[0_15px_40px_rgba(255,153,0,0.2)] flex flex-col justify-between w-full">
                <!-- Контейнер розширився і дає максимум простору для деталізації прев'ю -->
                <div class="bg-zinc-950 h-52 md:h-72 rounded-lg flex items-center justify-center group-hover:scale-[1.01] transition-transform duration-300 shadow-inner overflow-hidden relative w-full">
                    <img src="/img/book-of-dead.jpg" alt="Book of Dead" class="w-full h-full object-contain p-2 z-10 relative">
                    <img src="/img/book-of-dead.jpg" alt="" class="w-full h-full object-cover absolute inset-0 opacity-25 blur-sm scale-110 z-0">
                </div>
                <div class="text-left space-y-0.5 mt-2 px-1">
                    <h4 class="text-base md:text-lg font-black text-white truncate">Book of Dead</h4>
                    <p class="text-xs text-zinc-500 uppercase font-black tracking-wider">Play'n GO</p>
                </div>
                <a href="/logga in/" class="block w-full text-center text-sm font-black text-black bg-gradient-to-b from-amber-400 via-ragAmber to-amber-600 hover:from-amber-500 hover:to-orange-600 py-4 rounded-lg uppercase tracking-wider font-extrabold shadow-[0_4px_0_#b36b00] hover:shadow-[0_0_25px_rgba(255,153,0,0.6)] transform hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 border border-amber-300/20">
                    Spela
                </a>
            </div>

            <!-- Слот 2: Starburst -->
            <div class="bg-ragCard border border-zinc-900 rounded-xl p-4 text-center space-y-4 hover:border-ragAmber/40 transition-all duration-300 group shadow-lg shadow-ragAmber/5 hover:shadow-[0_15px_40px_rgba(255,153,0,0.2)] flex flex-col justify-between w-full">
                <div class="bg-zinc-950 h-52 md:h-72 rounded-lg flex items-center justify-center group-hover:scale-[1.01] transition-transform duration-300 shadow-inner overflow-hidden relative w-full">
                    <img src="/img/starburst.jpg" alt="Starburst" class="w-full h-full object-contain p-2 z-10 relative">
                    <img src="/img/starburst.jpg" alt="" class="w-full h-full object-cover absolute inset-0 opacity-25 blur-sm scale-110 z-0">
                </div>
                <div class="text-left space-y-0.5 mt-2 px-1">
                    <h4 class="text-base md:text-lg font-black text-white truncate">Starburst</h4>
                    <p class="text-xs text-zinc-500 uppercase font-black tracking-wider">NetEnt</p>
                </div>
                <a href="/logga in/" class="block w-full text-center text-sm font-black text-black bg-gradient-to-b from-amber-400 via-ragAmber to-amber-600 hover:from-amber-500 hover:to-orange-600 py-4 rounded-lg uppercase tracking-wider font-extrabold shadow-[0_4px_0_#b36b00] hover:shadow-[0_0_25px_rgba(255,153,0,0.6)] transform hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 border border-amber-300/20">
                    Spela
                </a>
            </div>

            <!-- Слот 3: Thunderstruck II -->
            <div class="bg-ragCard border border-zinc-900 rounded-xl p-4 text-center space-y-4 hover:border-ragAmber/40 transition-all duration-300 group shadow-lg shadow-ragAmber/5 hover:shadow-[0_15px_40px_rgba(255,153,0,0.2)] flex flex-col justify-between w-full">
                <div class="bg-zinc-950 h-52 md:h-72 rounded-lg flex items-center justify-center group-hover:scale-[1.01] transition-transform duration-300 shadow-inner overflow-hidden relative w-full">
                    <img src="/img/thunderstruck.jpg" alt="Thunderstruck II" class="w-full h-full object-contain p-2 z-10 relative">
                    <img src="/img/thunderstruck.jpg" alt="" class="w-full h-full object-cover absolute inset-0 opacity-25 blur-sm scale-110 z-0">
                </div>
                <div class="text-left space-y-0.5 mt-2 px-1">
                    <h4 class="text-base md:text-lg font-black text-white truncate">Thunderstruck II</h4>
                    <p class="text-xs text-zinc-500 uppercase font-black tracking-wider">Microgaming</p>
                </div>
                <a href="/logga in/" class="block w-full text-center text-sm font-black text-black bg-gradient-to-b from-amber-400 via-ragAmber to-amber-600 hover:from-amber-500 hover:to-orange-600 py-4 rounded-lg uppercase tracking-wider font-extrabold shadow-[0_4px_0_#b36b00] hover:shadow-[0_0_25px_rgba(255,153,0,0.6)] transform hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 border border-amber-300/20">
                    Spela
                </a>
            </div>

            <!-- Слот 4: Wolf Gold -->
            <div class="bg-ragCard border border-zinc-900 rounded-xl p-4 text-center space-y-4 hover:border-ragAmber/40 transition-all duration-300 group shadow-lg shadow-ragAmber/5 hover:shadow-[0_15px_40px_rgba(255,153,0,0.2)] flex flex-col justify-between w-full">
                <div class="bg-zinc-950 h-52 md:h-72 rounded-lg flex items-center justify-center group-hover:scale-[1.01] transition-transform duration-300 shadow-inner overflow-hidden relative w-full">
                    <img src="/img/wolf-gold.png" alt="Wolf Gold" class="w-full h-full object-contain p-2 z-10 relative">
                    <img src="/img/wolf-gold.png" alt="" class="w-full h-full object-cover absolute inset-0 opacity-25 blur-sm scale-110 z-0">
                </div>
                <div class="text-left space-y-0.5 mt-2 px-1">
                    <h4 class="text-base md:text-lg font-black text-white truncate">Wolf Gold</h4>
                    <p class="text-xs text-zinc-500 uppercase font-black tracking-wider">Pragmatic Play</p>
                </div>
                <a href="/logga in/" class="block w-full text-center text-sm font-black text-black bg-gradient-to-b from-amber-400 via-ragAmber to-amber-600 hover:from-amber-500 hover:to-orange-600 py-4 rounded-lg uppercase tracking-wider font-extrabold shadow-[0_4px_0_#b36b00] hover:shadow-[0_0_25px_rgba(255,153,0,0.6)] transform hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 border border-amber-300/20">
                    Spela
                </a>
            </div>
        </div>
    </section>
</div> <!-- Закриваємо попередній загальний контейнер, щоб секція FAQ розійшлася на весь екран -->

<!-- 4. FAQ БЛОК: Твій стиль, але чистий код -->
<!-- 4. FAQ БЛОК: Оптимізований код -->
<section class="relative bg-black border-t border-b border-zinc-950 min-h-[500px] flex items-center w-full mt-16 py-16">
    <div class="absolute inset-0 bg-cover bg-center opacity-60 pointer-events-none" style="background-image: url('/img/faq-bg.webp');"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-transparent to-black/60 pointer-events-none"></div>
    
    <div class="relative w-full px-4 max-w-4xl mx-auto space-y-8 text-center">
        <h2 class="text-2xl md:text-4xl font-black text-white uppercase italic">
            Vanliga Frågor — <span class="text-ragAmber">FAQ Ragnaro</span>
        </h2>
        
        <div class="space-y-4 w-full">
            <?php 
            $faqs = [
                ['q' => 'Finns det någon avdelning för sport eller betting på Ragnaro?', 'a' => 'Nej, Ragnaro erbjuder för närvarande ingen sportsbook. Vi fokuserar helt på att leverera marknadens tyngsta casinoupplevelse.'],
                ['q' => 'Vilka satsningsgränser gäller för era slots?', 'a' => 'Satsningsgränserna beror på spelautomaten. Du kan starta från 1 SEK upp till 500 SEK per runda.'],
                ['q' => 'Hur ställer jag in mina insättningsgränser?', 'a' => 'Dessa ställer du in direkt vid din första inloggning via BankID i enlighet med Spelinspektionens krav.']
            ];
            foreach ($faqs as $item) { ?>
                <div class="bg-black/80 border border-zinc-800 hover:border-ragAmber/40 p-6 rounded-xl transition-all duration-300 shadow-xl backdrop-blur-sm">
                    <h3 class="font-black text-white text-sm md:text-base flex items-center justify-center gap-2 mb-3">
                        <span class="text-ragAmber">⚡</span> <?= $item['q'] ?> <span class="text-ragAmber">⚡</span>
                    </h3>
                    <p class="text-zinc-300 text-xs md:text-sm font-semibold max-w-2xl mx-auto">
                        <?= $item['a'] ?>
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php 
include 'footer.php'; 
?>