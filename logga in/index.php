<?php 
include '../config.php'; 
include '../header.php'; 
?>

<main class="relative min-h-[calc(100vh-70px)] flex flex-col justify-center bg-zinc-950 w-full overflow-hidden py-4 sm:py-8 lg:py-12 bg-cover bg-center" style="background-image: url('/img/faq-bg.webp');">
    
    <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/40 to-black/70 lg:bg-gradient-to-r lg:from-black/70 lg:via-black/40 lg:to-black/80 z-0 pointer-events-none"></div>

    <div class="relative z-10 w-full px-4 lg:px-12 xl:px-24 max-w-[1600px] mx-auto flex flex-col lg:grid lg:grid-cols-12 gap-6 lg:gap-8 items-start">
        
        <section class="col-span-12 lg:col-span-5 flex flex-col justify-between w-full space-y-4 order-1 lg:order-2">
            
            <div class="w-full bg-ragCard/95 border-2 border-ragAmber/50 rounded-2xl p-5 sm:p-8 shadow-2xl shadow-ragAmber/5 backdrop-blur-md flex flex-col justify-between space-y-5 sm:space-y-6 transition-all duration-300">
                
                <div class="space-y-4 sm:space-y-5">
                    <div class="text-center lg:text-left space-y-1.5">
                        <div class="flex items-center justify-center lg:justify-start gap-2.5">
                            <img src="/img/lightning.png" alt="⚡" class="w-5 h-5 object-contain">
                            <h2 class="text-xl md:text-2xl font-black text-ragAmber uppercase tracking-wider italic">Logga in på Ragnaro</h2>
                        </div>
                        <p class="text-xs text-zinc-300 font-bold uppercase tracking-wider">Snabba metoder med BankID & Pay N Play</p>
                    </div>

                    <div class="bg-zinc-950 p-1 rounded-xl border border-zinc-900 grid grid-cols-2 gap-1 text-center text-xs font-black uppercase tracking-wider" id="bankid-toggle">
                        <button type="button" id="btn-bankid" class="bg-gradient-to-b from-zinc-800 to-zinc-900 text-white p-2.5 sm:p-3 rounded-lg border border-zinc-700/50 shadow-md cursor-pointer transition-all duration-200 active:scale-98 focus:outline-none">
                            🇸🇪 BankID
                        </button>
                        <button type="button" id="btn-mobilt" class="text-zinc-400 hover:text-white p-2.5 sm:p-3 rounded-lg cursor-pointer transition-all duration-200 active:scale-98 focus:outline-none">
                            Mobilt BankID
                        </button>
                    </div>

                    <div class="space-y-1.5">
                        <label id="input-label" class="block text-[10px] sm:text-[11px] font-black uppercase text-zinc-400 tracking-widest px-1 transition-all duration-200">
                            Ange Personnummer (ÅÅÅÅMMDD-XXXX)
                        </label>
                        <div class="relative">
                            <input type="text" id="auth-input" placeholder="YYYYMMDD-XXXX" maxlength="13" class="w-full bg-zinc-950 text-white font-bold tracking-widest border border-zinc-800 focus:border-ragAmber focus:ring-1 focus:ring-ragAmber/30 rounded-xl px-4 py-3.5 sm:py-4 text-sm outline-none transition-all duration-200 placeholder-zinc-700 shadow-inner">
                            <span id="input-icon" class="absolute right-4 top-1/2 -translate-y-1/2 text-lg filter opacity-40 transition-all duration-200">🆔</span>
                        </div>
                        <p id="error-text" class="text-[11px] text-red-500 font-bold mt-1 hidden transition-all duration-200 pl-1"></p>
                    </div>

                    <p class="text-[10px] text-zinc-400 font-bold leading-relaxed text-center lg:text-left">
                        Logga in säkert på under 60 sekunder tack vare <strong>Trustly</strong>. Inga lösenord eller e-postadresser krävs.
                    </p>
                </div>

                <div class="pt-2 sm:pt-4">
                    <button type="button" id="submit-auth-btn" class="w-full text-center text-sm font-black text-black bg-gradient-to-b from-amber-400 via-ragAmber to-amber-600 hover:from-amber-500 hover:to-orange-600 py-3.5 sm:py-4 rounded-xl uppercase tracking-wider font-extrabold shadow-[0_4px_20px_rgba(255,153,0,0.35)] transition-all duration-300 border border-amber-300/20 flex items-center justify-center gap-2 transform active:scale-97 active:brightness-110">
                        <img src="/img/lightning.png" alt="" id="btn-lightning" class="w-4 h-4 object-contain brightness-0 transition-all duration-200">
                        <span id="btn-text">Identifiera med BankID</span>
                    </button>
                </div>

            </div>

            <div class="w-full bg-zinc-950/85 border border-zinc-900/60 rounded-xl p-3.5 text-center backdrop-blur-sm">
                <p class="text-xs text-zinc-400 font-medium">
                    Problem med inloggning? <a href="#support" class="text-ragAmber font-black underline hover:text-amber-400 transition-colors">Uppdatera BankID-appen</a>, rensa dina cookies eller kontakta vår Live Support 24/7.
                </p>
            </div>

        </section>

        <section class="col-span-12 lg:col-span-7 flex flex-col justify-center order-2 lg:order-1 mt-4 lg:mt-0 w-full">
            <div class="rounded-2xl p-5 sm:p-8 lg:p-10 backdrop-blur-sm h-full flex flex-col justify-center space-y-4 sm:space-y-6">
                <div class="flex items-center gap-3">
                    <span class="bg-red-700 text-white font-black text-[10px] tracking-widest uppercase px-2 py-1 rounded">Media</span>
                    <span class="text-zinc-400 text-xs font-bold uppercase tracking-wider">Analys • Dagens Industri (Di.se)</span>
                </div>
                
                <h2 class="text-xl lg:text-3xl font-black text-white uppercase tracking-tight italic leading-tight filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.9)] border-l-4 border-ragAmber pl-4">
                    Ragnaro i media — iGaming-marknadens nya finansiella fenomen
                </h2>
                
                <div class="space-y-4 text-zinc-200 text-xs sm:text-sm leading-relaxed font-semibold filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.95)] pl-4">
                    <p>
                        Den svenska iGaming-sektorn fortsätter att visa stark tillväxt under 2026. Enligt de senaste finansiella rapporterna har plattformen <strong>Ragnaro</strong> etablerat sig som en av de mest stabila aktörerna på marknaden.
                    </p>
                    <p>
                        Genom att kombinera Spelinspektionens strikta reglering med ett unikt och engagerande hårdrockskoncept, lyckas varumärket attrahera en lojal målgrupp utan att kompromissa med ansvarsfullt spelande och finansiell transparens.
                    </p>
                    <p class="text-[11px] text-zinc-500 italic border-t border-zinc-800/40 pt-4 mt-2">
                        *Denna sektion är en del av Ragnaros finansiella pressmeddelande i samarbete med oberoende svenska marknadsanalytiker
                    </p>
                </div>
            </div>
        </section>
        
    </div>
</main>

<script src="../assets-js/auth-script.js" defer></script>

<?php 
include '../footer.php'; 
?>