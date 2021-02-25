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
// Test this by running the code snippet below and then
// use the "Offline" checkbox in DevTools Network panel

window.addEventListener('online', handleConnection);
window.addEventListener('offline', handleConnection);

function handleConnection() {
  if (navigator.onLine) {
    isReachable(getServerUrl()).then(function(online) {
      if (online) {
        // handle online status
        console.log('online');
      } else {
        console.log('no connectivity');
      }
    });
  } else {
    // handle offline status
    console.log('offline');
  }
}

function isReachable(url) {
  /**
   * Note: fetch() still "succeeds" for 404s on subdirectories,
   * which is ok when only testing for domain reachability.
   *
   * Example:
   *   https://google.com/noexist does not throw
   *   https://noexist.com/noexist does throw
   */
  return fetch(url, { method: 'HEAD', mode: 'no-cors' })
    .then(function(resp) {
      return resp && (resp.ok || resp.type === 'opaque');
    })
    .catch(function(err) {
      console.warn('[conn test failure]:', err);
    });
}

function getServerUrl() {
  return document.getElementById('serverUrl').value || window.location.origin;
}
