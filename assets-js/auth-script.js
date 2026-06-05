document.addEventListener("DOMContentLoaded", function() {
    const btnBankID = document.getElementById('btn-bankid');
    const btnMobilt = document.getElementById('btn-mobilt');
    const inputLabel = document.getElementById('input-label');
    const authInput = document.getElementById('auth-input');
    const inputIcon = document.getElementById('input-icon');
    const btnText = document.getElementById('btn-text');
    const submitBtn = document.getElementById('submit-auth-btn');
    const errorText = document.getElementById('error-text');

    let currentMode = 'bankid';

    const MESSAGES = {
        INVALID_PN_CHARS: "⚠️ Personnummer kan endast innehålla siffror.",
        INVALID_MOBILE_PREFIX: "⚠️ Mobilnummer måste börja med +46",
        INVALID_PN_LENGTH: "⚠️ Ange ett giltigt personnummer (10 eller 12 siffror).",
        INVALID_MOBILE_FORMAT: "⚠️ Felaktigt format. Nummer måste starta med +46..."
    };

    const activeClasses = ["bg-gradient-to-b", "from-zinc-800", "to-zinc-900", "text-white", "border", "border-zinc-700/50", "shadow-md"];
    const inactiveClasses = ["text-zinc-400", "hover:text-white"];

    function resetErrors() {
        authInput.classList.remove('border-red-500/80', 'bg-red-500/5', 'focus:border-red-500');
        authInput.classList.add('border-zinc-800', 'focus:border-ragAmber');
        errorText.classList.add('hidden');
        
        submitBtn.disabled = false;
        submitBtn.classList.remove('opacity-40', 'pointer-events-none', 'shadow-none');
        submitBtn.classList.add('shadow-[0_4px_20px_rgba(255,153,0,0.35)]');
    }

    function triggerError(msg) {
        authInput.classList.remove('border-zinc-800', 'focus:border-ragAmber');
        authInput.classList.add('border-red-500/80', 'bg-red-500/5', 'focus:border-red-500');
        errorText.innerText = msg;
        errorText.classList.remove('hidden');
        
        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-40', 'pointer-events-none', 'shadow-none');
        submitBtn.classList.remove('shadow-[0_4px_20px_rgba(255,153,0,0.35)]');
    }

    function updateButtonStyles(activeBtn, inactiveBtn) {
        activeBtn.classList.remove(...inactiveClasses);
        activeBtn.classList.add(...activeClasses);
        inactiveBtn.classList.remove(...activeClasses);
        inactiveBtn.classList.add(...inactiveClasses);
    }

    authInput.addEventListener('input', function() {
        const value = this.value.trim();
        resetErrors();
        if (value === "") return;

        if (currentMode === 'bankid') {
            const cleanValue = value.replace(/[^\d-]/g, '');
            if (this.value !== cleanValue) this.value = cleanValue;
            if (/[a-zA-Zа-яА-Я]/.test(value)) triggerError(MESSAGES.INVALID_PN_CHARS);
        } else {
            let cleanValue = value.replace(/[^\d+]/g, '');
            if (cleanValue.includes('+') && cleanValue.indexOf('+') !== 0) cleanValue = '+' + cleanValue.replace(/\+/g, '');
            if (this.value !== cleanValue) this.value = cleanValue;
            if (value.length >= 1 && !value.startsWith('+')) triggerError(MESSAGES.INVALID_MOBILE_PREFIX);
        }
    });

    submitBtn.addEventListener('click', function(e) {
        const value = authInput.value.trim();
        const digitsOnly = value.replace(/\D/g, '');

        if (currentMode === 'bankid') {
            if (digitsOnly.length < 10 || digitsOnly.length > 12) {
                e.preventDefault();
                triggerError(MESSAGES.INVALID_PN_LENGTH);
            } else { alert("Ansluter till BankID..."); }
        } else {
            if (!value.startsWith('+46') || digitsOnly.length < 9) {
                e.preventDefault();
                triggerError(MESSAGES.INVALID_MOBILE_FORMAT);
            } else { alert("Öppnar Mobilt BankID-app..."); }
        }
    });

    btnBankID.addEventListener('click', function() {
        currentMode = 'bankid';
        resetErrors();
        updateButtonStyles(btnBankID, btnMobilt);
        inputLabel.innerText = "Ange Personnummer (ÅÅÅÅMMDD-XXXX)";
        authInput.placeholder = "YYYYMMDD-XXXX";
        authInput.maxLength = 13;
        authInput.value = "";
        inputIcon.innerText = "🆔";
        btnText.innerText = "Identifiera med BankID";
    });

    btnMobilt.addEventListener('click', function() {
        currentMode = 'mobilt';
        resetErrors();
        updateButtonStyles(btnMobilt, btnBankID);
        inputLabel.innerText = "Ange Mobilnummer";
        authInput.placeholder = "+46 XX XXX XX XX";
        authInput.maxLength = 15;
        authInput.value = "+46";
        inputIcon.innerText = "📱";
        btnText.innerText = "Öppna Mobilt BankID";
    });
});