// importScripts('https://storage.googleapis.com/workbox-cdn/releases/6.0.2/workbox-sw.js');
// workbox.routing.registerRoute(
//     ({request})=> request.destination ==='image',
//     new workbox.strategies.CacheFirst()
// );
// https://developers.google.com/web/fundamentals/getting-started/primers/service-workers
// ------------------------------
// Pre Cache and Update
// ------------------------------
importScripts('https://storage.googleapis.com/workbox-cdn/releases/6.0.2/workbox-sw.js');

const workboxSW = new WorkboxSW({ clientsClaim: true });
/**
 * precache() is passed a manifest of URLs and versions
 * each time the service worker starts up.
 * Use workbox-build to generate the manifest
 */
workboxSW.precache([]);
