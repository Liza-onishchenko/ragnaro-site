<?php 
include '../config.php'; 
include '../header.php'; 
?>

<main class="relative min-h-screen flex flex-col justify-start bg-zinc-950 w-full overflow-x-hidden">
    <!-- Секція 1 -->
    <section class="relative w-full bg-cover shadow-2xl border-b border-zinc-900/40 bg-[right_-120px_center] sm:bg-[right_-60px_center] md:bg-center" style="background-image: url('/img/image_255bf7.webp');">
        <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/50 to-transparent md:bg-none z-0 pointer-events-none"></div>
        <div class="relative z-10 w-full px-4 lg:px-12 xl:px-24 max-w-[1600px] mx-auto pt-20 md:pt-28 pb-14 md:pb-20 flex flex-col gap-8">
            <div class="-mt-8 md:-mt-14 relative z-10 w-full max-w-xl lg:max-w-3xl space-y-2.5 pl-2 text-left">
                <span class="bg-amber-500 text-black font-black text-[10px] tracking-widest uppercase px-2.5 py-1 rounded shadow-md">Erbjudanden 2026</span>
                <h2 class="text-3xl sm:text-5xl md:text-6xl font-black text-white uppercase tracking-tight italic leading-tight filter drop-shadow-[0_4px_8px_rgba(0,0,0,0.9)]">
                    Ragnaro Promo Codes <br class="hidden sm:block"> & Casino Bonusar
                </h2>
                <p class="text-sm sm:text-base md:text-lg text-zinc-100 font-semibold leading-relaxed filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.8)]">
                    Här hittar du jackpot- och kampanjkodsinformation om hur våra bonusar fungerar, vilka omsättningskrav som gäller på plattformen och hur du ansluter dig till vår exklusiva VIP-klubb.
                </p>
            </div>
            
            <div class="relative z-10 w-full max-w-xl lg:max-w-4xl bg-black/60 backdrop-blur-md border border-ragAmber/40 rounded-2xl p-5 sm:p-6 md:p-8 shadow-[0_0_25px_rgba(255,153,0,0.15)]">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
                    <div class="lg:col-span-7 space-y-3.5 flex flex-col justify-center text-left">
                        <h2 class="text-lg sm:text-xl font-black text-white uppercase tracking-wide italic border-l-4 border-ragAmber pl-3">Ragnaro Promo Codes — Aktivering</h2>
                        <div class="text-zinc-100 text-xs sm:text-sm leading-relaxed font-semibold space-y-2.5 pl-3">
                            <p>Våra officiella kampanjkoder distribueras exklusivt via nyhetsbrev eller pålitliga partnersidor.</p>
                            <p class="text-ragAmber font-black">Observera: Koden måste anges manuellt i sektionen "Bonusar" efter inloggning.</p>
                        </div>
                    </div>
                    <div class="lg:col-span-5 flex flex-col justify-between gap-4 pl-0 lg:pl-8 border-l-0 lg:border-l border-zinc-800/30 pt-5 lg:pt-0 py-1 max-w-sm mx-auto w-full">
                        <?php foreach ([1 => 'Logga in säkert med BankID.', 2 => 'Öppna fliken "Bonusar".', 3 => 'Ange koden och bekräfta.'] as $num => $text) { ?>
                            <div class="flex items-center gap-4 w-full text-left">
                                <span class="w-7 h-7 rounded-full bg-ragAmber text-black flex items-center justify-center text-xs font-black shrink-0 shadow-[0_0_15px_rgba(255,153,0,0.7)]"><?= $num ?></span>
                                <p class="text-xs sm:text-sm text-zinc-100 font-bold leading-snug"><?= $text ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Секція 2: Фішки -->
    <section class="relative w-full bg-cover bg-center shadow-2xl border-t border-zinc-900/60" style="background-image: url('/img/coins.webp');">
        <div class="absolute inset-0 bg-gradient-to-b from-black/20 via-black/40 to-zinc-950 z-0 pointer-events-none"></div>
        <div class="relative z-10 w-full px-4 lg:px-12 xl:px-24 max-w-[1600px] mx-auto pt-14 pb-20 flex flex-col gap-12">
            
            <?php
            $terms = [
                ['title' => '20x – 40x Omsättningskrav', 'text' => 'Beroende på bonusens specifika typ varierar kravet från <strong class="text-white">20x upp till 40x</strong>. Detta anger hur många gånger summan måste spelas igenom.'],
                ['title' => '24h – 72h Giltighetstid', 'text' => 'Aktiverade Free Spins är strikt giltiga i endast <strong class="text-ragAmber">24 till 72 timmar</strong>. Om omsättningskravet inte slutförs annulleras bonusen.']
            ];
            ?>
            <div class="w-full max-w-xl lg:max-w-4xl bg-black/65 backdrop-blur-md border border-ragAmber/30 rounded-2xl p-6 md:p-8 space-y-6">
                <h2 class="text-xl sm:text-2xl font-black text-white uppercase tracking-wide italic border-l-4 border-ragAmber pl-3">Uppsägningsvillkor & Omsättningskrav</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pl-3 text-left">
                    <?php foreach ($terms as $term) { ?>
                        <div class="space-y-1.5">
                            <div class="text-ragAmber text-base sm:text-lg font-black uppercase tracking-wide italic"><?= $term['title'] ?></div>
                            <p class="text-xs sm:text-sm text-zinc-300 font-semibold leading-relaxed"><?= $term['text'] ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="w-full max-w-xl lg:max-w-4xl bg-black/65 backdrop-blur-md border border-yellow-500/30 rounded-2xl p-6 md:p-8 shadow-[0_0_25px_rgba(234,179,8,0.12)]">
                <h2 class="text-xl sm:text-2xl font-black text-white uppercase tracking-wide italic border-l-4 border-amber-500 pl-3 mb-4">Exklusivt VIP-program</h2>
                <div class="text-zinc-100 text-sm sm:text-base leading-relaxed font-semibold pl-3 space-y-3">
                    <p>Vårt lojalitetsprogram är skräddarsytt för spelare som söker en högre nivå av komfort och förstklassig service.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include '../footer.php'; ?>