if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('public/scripts/sw.js');
}
let deferredPrompt;
window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredPrompt = e;
});
let img = document.getElementById("myImg");
img.addEventListener('click', (e) => {
    deferredPrompt.prompt();
    deferredPrompt.userChoice.then((choiceResult) => {
        if (choiceResult.outcome === 'accepted') {
            alert('thanh cong')
            setCookiePWA('isPWA', '1', 365);
        }else {
            deferredPrompt = null;
            alert('no')
        }
    });
});
window.addEventListener('appinstalled', (evt) => {
    app.logEvent('a2hs', 'installed');
});
function setCookiePWA(cname, cvalue, exdays) {
    let d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
if ('serviceWorker' in navigator) {
    alert("sfs")
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('../../../public/scripts/service-worker.js')
            alert("sfs")
            .then(swReg => {
                console.log('Service Worker is registered', swReg);
            })
            .catch(err => {
                console.error('Service Worker Error', err);
            });
    });
}