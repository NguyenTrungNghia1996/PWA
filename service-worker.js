importScripts('https://storage.googleapis.com/workbox-cdn/releases/6.0.2/workbox-sw.js');

// https://developers.google.com/web/fundamentals/getting-started/primers/service-workers
// ------------------------------
// Pre Cache and Update
// ------------------------------

// const workboxSW = new WorkboxSW({ clientsClaim: true });
// workboxSW.router
// workboxSW.precache([]);

workbox.routing.registerRoute(
    ({request})=> request.destination ==='image',
    new workbox.strategies.CacheFirst()
);
