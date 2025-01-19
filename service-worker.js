self.addEventListener('install', (event) => {
    event.waitUntil(
        caches.open('simple-pwa-cache').then((cache) => {
            return cache.addAll([
                '/login.php',
                '/index.php',
                '/style.css',
                '/app.js',
            ]);
        })
    );
});

self.addEventListener('fetch', (event) => {
    event.respondWith(
        caches.match(event.request).then((cachedResponse) => {
            return cachedResponse || fetch(event.request);
        })
    );
});
