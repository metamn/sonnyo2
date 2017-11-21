importScripts('/_nuxt/workbox.476439e0.js')

const workboxSW = new self.WorkboxSW({
  "cacheId": "wp-vue-ssr",
  "clientsClaim": true,
  "directoryIndex": "/"
})

workboxSW.precache([
  {
    "url": "/_nuxt/app.d78dc43064e2e59aaeb0.js",
    "revision": "352ed75d20c4e94da102a7f47a320cb9"
  },
  {
    "url": "/_nuxt/common.821c987f1d5ae1040a32.js",
    "revision": "b69ef1de03b768b0a07c102cd1aba0da"
  },
  {
    "url": "/_nuxt/layouts/default.bc8b51cefa000994c816.js",
    "revision": "6646cbb6763e10594dff7a3a34fa25e0"
  },
  {
    "url": "/_nuxt/manifest.70e453bad740e5969b48.js",
    "revision": "689a6a557a97ba6ee80e100c89cc42e6"
  },
  {
    "url": "/_nuxt/pages/_slug/index.5c873b79cf60aa29f361.js",
    "revision": "69e9ec1ceda71a6f60ecfa3198b75bda"
  },
  {
    "url": "/_nuxt/pages/about/index.16b00a681955af164be2.js",
    "revision": "e1dad910dcadab4315fe564b58340506"
  },
  {
    "url": "/_nuxt/pages/category/_slug/index.e1a97a0a4f52150ff26a.js",
    "revision": "8c406cc24a4ceb1692b8217146601a8f"
  },
  {
    "url": "/_nuxt/pages/index.5db972f158b5bd81a328.js",
    "revision": "6f87be203d18909239ec08746b3d5278"
  }
])


workboxSW.router.registerRoute(new RegExp('/_nuxt/.*'), workboxSW.strategies.cacheFirst({}), 'GET')

workboxSW.router.registerRoute(new RegExp('/.*'), workboxSW.strategies.networkFirst({}), 'GET')

