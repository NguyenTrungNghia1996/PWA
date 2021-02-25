    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/service-worker.js');
    }
    let deferredPrompt;
    window.addEventListener('beforeinstallprompt', (e) => {
        e.preventDefault();
        deferredPrompt = e;
        btnAdd.style.display = 'block';
    });
    btnAdd.addEventListener('click', (e) => {
        deferredPrompt.prompt();
        deferredPrompt.userChoice.then((choiceResult) => {
            if (choiceResult.outcome === 'accepted') {
                console.log('usser')
            }
            deferredPrompt = null;
        });
    });
    window.addEventListener('appinstalled', (evt) => {
        app.logEvent('a2hs', 'installed');
    });
