<?php 
include '../config.php'; 
include '../header.php'; 
?>

<main class="relative min-h-screen flex flex-col justify-start bg-zinc-950 w-full overflow-x-hidden bg-cover bg-center" style="background-image: url('/img/mobil-bg.webp');">
    
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-black/50 z-0 pointer-events-none"></div>

    <div class="relative z-10 w-full px-4 lg:px-12 xl:px-24 max-w-[1600px] mx-auto flex flex-col gap-12 md:gap-16 pt-11 md:pt-23 pb-12">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <section class="col-span-12 lg:col-span-7">
                <div class="bg-black/60 border border-zinc-900/50 rounded-2xl p-6 sm:p-8 backdrop-blur-md space-y-6 shadow-2xl">
                    <div class="flex items-center gap-3">
                        <span class="bg-amber-500 text-black font-black text-[10px] tracking-widest uppercase px-2 py-1 rounded">Tech Review</span>
                        <span class="text-zinc-100 text-sm font-bold uppercase tracking-wider">Mobil.se • Hårdvarutest 2026</span>
                    </div>
                    
                    <h2 class="text-2xl lg:text-4xl font-black text-white uppercase tracking-tight italic leading-tight border-l-4 border-ragAmber pl-4">
                        Ragnaro i media — iGaming-marknadens nya finansiella fenomen
                    </h2>
                    
                    <div class="space-y-4 text-zinc-100 text-sm sm:text-base leading-relaxed font-semibold pl-4">
                        <p>Moderna smartphone-processorer har revolutionerat hur vi upplever casinospel i mobilen. Med dedikerade hårdvarubaserade grafikbussar levererar dessa chipsets en prestanda som tidigare krävde tunga stationära datorer.</p>
                        <p>Våra tekniska tester visar att Ragnaro utnyttjar denna kraft till max, vilket sätter en ny standard för den svenska mobilmarknaden.</p>
                    </div>
                </div>
            </section>

            <section class="col-span-12 lg:col-span-5 self-center">
                <div class="w-full bg-black/60 border border-zinc-900/50 rounded-2xl p-6 sm:p-8 backdrop-blur-md space-y-6 shadow-2xl">
                    <div class="flex items-center gap-2.5">
                        <img src="/img/lightning.png" alt="⚡" class="w-5 h-5 object-contain">
                        <h2 class="text-xl font-black text-white uppercase tracking-wider italic">Spela direkt i Safari & Chrome</h2>
                    </div>
                    
                    <div class="space-y-4 text-zinc-100 text-sm sm:text-base leading-relaxed font-semibold">
                        <p>Glöm krångliga appar som tar upp lagringsutrymme. Tack vare avancerad <strong class="text-white font-black">HTML5 och PWA-teknologi</strong> anpassar sig Ragnaro perfekt efter din skärm.</p>
                    </div>

                    <div class="flex items-center justify-center gap-10 pt-2 text-sm font-bold text-zinc-100 uppercase tracking-widest">
                        <a href="#" aria-label="Spela på iOS" class="flex items-center gap-2.5 hover:text-white transition-colors duration-200 group">
                            <img src="/img/apple.svg" alt="iOS" class="w-5 h-5 object-contain shrink-0 opacity-90 group-hover:opacity-100" style="filter: brightness(0) invert(1);">
                            <span class="font-sans text-xs tracking-wider">iOS</span>
                        </a>
                        <a href="#" aria-label="Spela på Android" class="flex items-center gap-2.5 hover:text-white transition-colors duration-200 group">
                            <img src="/img/android.svg" alt="Android" class="w-5 h-5 object-contain shrink-0 opacity-90 group-hover:opacity-100" style="filter: brightness(0) invert(1);">
                            <span class="font-sans text-xs tracking-wider">Android</span>
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <section class="space-y-8 w-full">
            <div class="w-full text-center">
                <h2 class="text-2xl md:text-4xl font-black text-white uppercase tracking-tight italic filter drop-shadow-[0_4px_8px_rgba(0,0,0,0.8)]">
                    Fördelar med Ragnaro i Mobilen
                </h2>
                <p class="text-base md:text-xl text-white font-extrabold uppercase tracking-[0.12em] mt-4.5 antialiased">
                    Exklusiva mobilfunktioner för svenska spelare
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 w-full">
    <?php 
    $cards = [
        ['img' => '/img/bonus-cashback.webp', 'title' => '10% Veckovis Cashback', 'text' => 'Få 10% tillbaka på dina eventuella nettoförluster varje vecka.'],
        ['img' => '/img/bonus-spins.webp', 'title' => 'Mobil Free Spins', 'text' => 'Få direkt tillgång till exklusiva free spins anpassade för touch.'],
        ['img' => '/img/bonus-mobile.webp', 'title' => 'Responsiv UI Design', 'text' => 'Optimerat för enhandsnavigering för maximal spelkomfort.']
    ];
    foreach ($cards as $card) { ?>
        <div class="w-full max-w-sm lg:max-w-none mx-auto bg-black/60 border border-zinc-900/50 rounded-3xl p-6 md:p-8 hover:border-ragAmber/40 backdrop-blur-sm transition-all duration-300 group flex flex-col items-center text-center">
            <img src="<?= $card['img'] ?>" 
                 loading="lazy" 
                 width="280" 
                 height="280" 
                 alt="<?= $card['title'] ?>" 
                 class="w-full max-w-[240px] aspect-square object-cover rounded-2xl mb-6 shadow-2xl group-hover:scale-103 transition-transform duration-300">
            <h3 class="text-xl font-black text-ragAmber uppercase tracking-wide mb-3"><?= $card['title'] ?></h3>
            <p class="text-sm text-zinc-100 leading-relaxed font-semibold"><?= $card['text'] ?></p>
        </div>
    <?php } ?>
</div>
        </section>

        <section class="w-full text-center -mt-4 pb-4">
            <a href="/logga in/" class="block w-full max-w-sm mx-auto text-center text-base sm:text-lg font-black text-black bg-gradient-to-b from-amber-400 via-ragAmber to-amber-600 py-5 rounded-xl uppercase tracking-widest shadow-[0_5px_0_#b36b00] hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 border border-amber-300/20 flex items-center justify-center gap-3">
                <img src="/img/lightning.png" alt="" class="w-5 h-5 object-contain brightness-0">
                Spela i Mobilen Nu
            </a>
        </section>

    </div>
</main>

<?php include '../footer.php'; ?>