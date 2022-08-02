
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-security-policy" content=""><title>Drawer — Tailwind CSS Components</title><link rel="preconnect" href="https://fonts.googleapis.com" data-svelte="svelte-1gpj4sv"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin data-svelte="svelte-1gpj4sv"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap&text=daisyUIThemostpopular,freeandopen-sourceTailwindCSScomponentlibrary" rel="stylesheet" data-svelte="svelte-1gpj4sv"><meta name="description" content="Drawer is a grid layout that can show/hide a sidebar on the left or right side of the page." data-svelte="svelte-16rcqg9"><meta name="twitter:card" content="summary_large_image" data-svelte="svelte-16rcqg9"><meta name="twitter:title" content="Drawer — Tailwind CSS Components" data-svelte="svelte-16rcqg9"><meta name="twitter:description" content="Drawer is a grid layout that can show/hide a sidebar on the left or right side of the page." data-svelte="svelte-16rcqg9"><meta name="twitter:image" content="https://daisyui.com/images/components/drawer.jpg" data-svelte="svelte-16rcqg9"><meta name="twitter:image:alt" content="Drawer — Tailwind CSS Components" data-svelte="svelte-16rcqg9"><meta property="og:title" content="Drawer — Tailwind CSS Components" data-svelte="svelte-16rcqg9"><meta property="og:description" content="Drawer is a grid layout that can show/hide a sidebar on the left or right side of the page." data-svelte="svelte-16rcqg9"><meta property="og:image" content="https://daisyui.com/images/components/drawer.jpg" data-svelte="svelte-16rcqg9">
<script data-svelte="svelte-2vbx5w">;(function (w, d, s, l, i) {
        w[l] = w[l] || []
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" })
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : ""
        j.async = true
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl
        f.parentNode.insertBefore(j, f)
      })(window, document, "script", "dataLayer", "GTM-WJ8HL28")
    </script>
<link rel="stylesheet" href="/_app/assets/vendor-faf725f4.css">
<link rel="stylesheet" href="/_app/assets/pages/__layout.svelte-2b7f9b96.css">
<link rel="stylesheet" href="/_app/assets/Ads-898681a7.css">
<link rel="stylesheet" href="/_app/assets/actions-779d2a81.css">
<link rel="modulepreload" href="/_app/start-c2e9888b.js">
<link rel="modulepreload" href="/_app/chunks/vendor-c5cb7521.js">
<link rel="modulepreload" href="/_app/chunks/preload-helper-ec9aa979.js">
<link rel="modulepreload" href="/_app/chunks/singletons-a6a7384f.js">
<link rel="modulepreload" href="/_app/pages/__layout.svelte-603c456b.js">
<link rel="modulepreload" href="/_app/chunks/index-1be83551.js">
<link rel="modulepreload" href="/_app/chunks/stores-596c3501.js">
<link rel="modulepreload" href="/_app/pages/components/drawer.svelte.md-bcb422f7.js">
<link rel="modulepreload" href="/_app/chunks/_markdown-2f2fd2c3.js">
<link rel="modulepreload" href="/_app/chunks/Ads-d58c862e.js">
<link rel="modulepreload" href="/_app/chunks/SEO-d1592b6a.js">
<link rel="modulepreload" href="/_app/chunks/actions-57cda8f4.js">
<link rel="modulepreload" href="/_app/chunks/Translate-2b0f46a6.js">
</head>
<body>
<div class="bg-base-100 drawer drawer-mobile"><input id="drawer" type="checkbox" class="drawer-toggle">
<div class="drawer-content" style="scroll-behavior: smooth; scroll-padding-top: 5rem;"><div class="\n  sticky top-0 z-30 flex h-16 w-full justify-center bg-opacity-90 backdrop-blur transition-all duration-100 \n  bg-base-100 text-base-content\n  "><nav class="navbar w-full"><div class="flex flex-1 md:gap-1 lg:gap-2"><span class="tooltip tooltip-bottom before:text-xs before:content-[attr(data-tip)]" data-tip="Menu"><label for="drawer" class="btn btn-square btn-ghost drawer-button lg:hidden"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current md:h-6 md:w-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg></label></span>
<div class="flex items-center gap-2 lg:hidden"><a href="/" aria-current="page" aria-label="Homepage" class="flex-0 btn btn-ghost px-2 "><div class="font-title text-primary inline-flex text-lg transition-all duration-200 md:text-3xl"><span class="lowercase text-primary">daisy</span>
<span class="uppercase text-base-content">UI</span></div></a>
<a href="/docs/changelog" class="link link-hover font-mono text-xs text-opacity-50 "><div data-tip="Changelog" class="tooltip tooltip-bottom">2.20.0</div></a></div>
<div class="hidden w-full max-w-sm lg:flex">
<label class="searchbox relative mx-3 w-full"><svg class="text-base-content pointer-events-none absolute z-10 my-3 ml-2 stroke-current opacity-60 " width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
<div data-svelte-typeahead role="combobox" aria-haspopup="listbox" aria-owns="typeahead-0.saa53e53iec-listbox" aria-expanded="false" id="typeahead-0.saa53e53iec-typeahead" class="svelte-6c74g2"><form data-svelte-search><label id="typeahead-0.saa53e53iec-label" for="typeahead-0.saa53e53iec" class="svelte-wqugyy">Search</label>
<input name="search" type="search" placeholder="Search…" autocomplete="off" spellcheck="false" aria-autocomplete="list" aria-controls="typeahead-0.saa53e53iec-listbox" aria-labelledby="typeahead-0.saa53e53iec-label" id="typeahead-0.saa53e53iec" class="svelte-wqugyy" value="">
</form>
<ul role="listbox" aria-labelledby="typeahead-0.saa53e53iec-label" id="typeahead-0.saa53e53iec-listbox" class="svelte-6c74g2 svelte-typeahead-list">
</ul>
</div>
<div class="pointer-events-none absolute right-8 top-2 gap-1 opacity-50 hidden lg:flex"></div>
</label></div></div>
<div class="flex-0"><div class="items-center flex-none hidden "><a sveltekit:prefetch href="/components" class="btn btn-ghost drawer-button normal-case"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block h-6 w-6 fill-current md:mr-2"><path d="M6.5,22 C4.01471863,22 2,19.9852814 2,17.5 C2,15.0147186 4.01471863,13 6.5,13 C8.98528137,13 11,15.0147186 11,17.5 C11,19.9852814 8.98528137,22 6.5,22 Z M17.5,22 C15.0147186,22 13,19.9852814 13,17.5 C13,15.0147186 15.0147186,13 17.5,13 C19.9852814,13 22,15.0147186 22,17.5 C22,19.9852814 19.9852814,22 17.5,22 Z M6.5,11 C4.01471863,11 2,8.98528137 2,6.5 C2,4.01471863 4.01471863,2 6.5,2 C8.98528137,2 11,4.01471863 11,6.5 C11,8.98528137 8.98528137,11 6.5,11 Z M17.5,11 C15.0147186,11 13,8.98528137 13,6.5 C13,4.01471863 15.0147186,2 17.5,2 C19.9852814,2 22,4.01471863 22,6.5 C22,8.98528137 19.9852814,11 17.5,11 Z M17.5,9 C18.8807119,9 20,7.88071187 20,6.5 C20,5.11928813 18.8807119,4 17.5,4 C16.1192881,4 15,5.11928813 15,6.5 C15,7.88071187 16.1192881,9 17.5,9 Z M6.5,9 C7.88071187,9 9,7.88071187 9,6.5 C9,5.11928813 7.88071187,4 6.5,4 C5.11928813,4 4,5.11928813 4,6.5 C4,7.88071187 5.11928813,9 6.5,9 Z M17.5,20 C18.8807119,20 20,18.8807119 20,17.5 C20,16.1192881 18.8807119,15 17.5,15 C16.1192881,15 15,16.1192881 15,17.5 C15,18.8807119 16.1192881,20 17.5,20 Z M6.5,20 C7.88071187,20 9,18.8807119 9,17.5 C9,16.1192881 7.88071187,15 6.5,15 C5.11928813,15 4,16.1192881 4,17.5 C4,18.8807119 5.11928813,20 6.5,20 Z"></path></svg>
Components</a></div>
<div title="Change Theme" class="dropdown dropdown-end "><div tabindex="0" class="btn gap-1 normal-case btn-ghost"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current md:h-6 md:w-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
<span class="hidden md:inline">Theme</span>
<svg width="12px" height="12px" class="ml-1 hidden h-3 w-3 fill-current opacity-60 sm:inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048"><path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path></svg></div>
<div class="dropdown-content bg-base-200 text-base-content rounded-t-box rounded-b-box top-px max-h-96 h-[70vh] w-52 overflow-y-auto shadow-2xl mt-16"><div class="grid grid-cols-1 gap-3 p-3" tabindex="0"><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="light" data-act-class="outline"><div data-theme="light" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">light</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="dark" data-act-class="outline"><div data-theme="dark" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">dark</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="cupcake" data-act-class="outline"><div data-theme="cupcake" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">cupcake</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="bumblebee" data-act-class="outline"><div data-theme="bumblebee" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">bumblebee</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="emerald" data-act-class="outline"><div data-theme="emerald" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">emerald</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="corporate" data-act-class="outline"><div data-theme="corporate" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">corporate</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="synthwave" data-act-class="outline"><div data-theme="synthwave" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">synthwave</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="retro" data-act-class="outline"><div data-theme="retro" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">retro</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="cyberpunk" data-act-class="outline"><div data-theme="cyberpunk" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">cyberpunk</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="valentine" data-act-class="outline"><div data-theme="valentine" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">valentine</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
 <div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="halloween" data-act-class="outline"><div data-theme="halloween" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">halloween</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="garden" data-act-class="outline"><div data-theme="garden" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">garden</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="forest" data-act-class="outline"><div data-theme="forest" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">forest</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="aqua" data-act-class="outline"><div data-theme="aqua" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">aqua</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="lofi" data-act-class="outline"><div data-theme="lofi" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">lofi</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="pastel" data-act-class="outline"><div data-theme="pastel" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">pastel</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="fantasy" data-act-class="outline"><div data-theme="fantasy" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">fantasy</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="wireframe" data-act-class="outline"><div data-theme="wireframe" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">wireframe</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="black" data-act-class="outline"><div data-theme="black" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">black</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="luxury" data-act-class="outline"><div data-theme="luxury" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">luxury</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="dracula" data-act-class="outline"><div data-theme="dracula" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">dracula</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="cmyk" data-act-class="outline"><div data-theme="cmyk" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">cmyk</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="autumn" data-act-class="outline"><div data-theme="autumn" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">autumn</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="business" data-act-class="outline"><div data-theme="business" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">business</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="acid" data-act-class="outline"><div data-theme="acid" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">acid</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="lemonade" data-act-class="outline"><div data-theme="lemonade" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">lemonade</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="night" data-act-class="outline"><div data-theme="night" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">night</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="coffee" data-act-class="outline"><div data-theme="coffee" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">coffee</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div><div class="outline-base-content overflow-hidden rounded-lg outline outline-2 outline-offset-2" data-set-theme="winter" data-act-class="outline"><div data-theme="winter" class="bg-base-100 text-base-content w-full cursor-pointer font-sans"><div class="grid grid-cols-5 grid-rows-3"><div class="col-span-5 row-span-3 row-start-1 flex gap-1 py-3 px-4"><div class="flex-grow text-sm font-bold">winter</div>
<div class="flex flex-shrink-0 flex-wrap gap-1"><div class="bg-primary w-2 rounded"></div>
<div class="bg-secondary w-2 rounded"></div>
<div class="bg-accent w-2 rounded"></div>
<div class="bg-neutral w-2 rounded"></div>
</div></div>
</div></div>
</div>
<a class="outline-base-content overflow-hidden rounded-lg" href="/theme-generator/"><div class="hover:bg-neutral hover:text-neutral-content w-full cursor-pointer font-sans"><div class="flex gap-2 p-3"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 512 512"><path d="M96,208H48a16,16,0,0,1,0-32H96a16,16,0,0,1,0,32Z"></path><line x1="90.25" y1="90.25" x2="124.19" y2="124.19"></line><path d="M124.19,140.19a15.91,15.91,0,0,1-11.31-4.69L78.93,101.56a16,16,0,0,1,22.63-22.63l33.94,33.95a16,16,0,0,1-11.31,27.31Z"></path><path d="M192,112a16,16,0,0,1-16-16V48a16,16,0,0,1,32,0V96A16,16,0,0,1,192,112Z"></path><line x1="293.89" y1="90.25" x2="259.95" y2="124.19"></line><path d="M260,140.19a16,16,0,0,1-11.31-27.31l33.94-33.95a16,16,0,0,1,22.63,22.63L271.27,135.5A15.94,15.94,0,0,1,260,140.19Z"></path><line x1="124.19" y1="259.95" x2="90.25" y2="293.89"></line><path d="M90.25,309.89a16,16,0,0,1-11.32-27.31l33.95-33.94a16,16,0,0,1,22.62,22.63l-33.94,33.94A16,16,0,0,1,90.25,309.89Z"></path><path d="M219,151.83a26,26,0,0,0-36.77,0l-30.43,30.43a26,26,0,0,0,0,36.77L208.76,276a4,4,0,0,0,5.66,0L276,214.42a4,4,0,0,0,0-5.66Z"></path><path d="M472.31,405.11,304.24,237a4,4,0,0,0-5.66,0L237,298.58a4,4,0,0,0,0,5.66L405.12,472.31a26,26,0,0,0,36.76,0l30.43-30.43h0A26,26,0,0,0,472.31,405.11Z"></path></svg>
<div class="flex-grow text-sm font-bold">Make your theme!</div></div></div></a></div></div></div>
<div title="Change Language" class="dropdown dropdown-end"><div tabindex="0" class="btn btn-ghost gap-1 normal-case"><svg class="inline-block h-4 w-4 fill-current md:h-5 md:w-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path d="M363,176,246,464h47.24l24.49-58h90.54l24.49,58H480ZM336.31,362,363,279.85,389.69,362Z"></path><path d="M272,320c-.25-.19-20.59-15.77-45.42-42.67,39.58-53.64,62-114.61,71.15-143.33H352V90H214V48H170V90H32v44H251.25c-9.52,26.95-27.05,69.5-53.79,108.36-32.68-43.44-47.14-75.88-47.33-76.22L143,152l-38,22,6.87,13.86c.89,1.56,17.19,37.9,54.71,86.57.92,1.21,1.85,2.39,2.78,3.57-49.72,56.86-89.15,79.09-89.66,79.47L64,368l23,36,19.3-11.47c2.2-1.67,41.33-24,92-80.78,24.52,26.28,43.22,40.83,44.3,41.67L255,362Z"></path></svg>
<svg width="12px" height="12px" class="ml-1 hidden h-3 w-3 fill-current opacity-60 sm:inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048"><path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path></svg></div>
<div class="dropdown-content bg-base-200 text-base-content rounded-t-box rounded-b-box top-px mt-16 w-56 overflow-y-auto shadow-2xl"><ul class="menu menu-compact gap-1 p-3" tabindex="0"><li><button class="flex active"><img loading="lazy" width="20" height="20" alt="English" src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1ec-1f1e7.svg">
<span class="flex flex-1 justify-between">English
</span></button>
</li><li><button class="flex"><img loading="lazy" width="20" height="20" alt="Español" src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1ea-1f1f8.svg">
<span class="flex flex-1 justify-between">Español
<span class="badge badge-sm badge-ghost">beta
</span>
</span></button>
</li><li><button class="flex"><img loading="lazy" width="20" height="20" alt="Indonesia" src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1ee-1f1e9.svg">
<span class="flex flex-1 justify-between">Indonesia
<span class="badge badge-sm badge-ghost">Beta
</span>
</span></button>
</li><li><button class="flex"><img loading="lazy" width="20" height="20" alt="日本語" src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1ef-1f1f5.svg">
<span class="flex flex-1 justify-between">日本語
<span class="badge badge-sm badge-ghost">ベータ
</span>
</span></button>
</li><li><button class="flex"><img loading="lazy" width="20" height="20" alt="한국어" src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1f0-1f1f7.svg">
<span class="flex flex-1 justify-between">한국어
</span></button>
</li><li><button class="flex"><img loading="lazy" width="20" height="20" alt="中文" src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1e8-1f1f3.svg">
<span class="flex flex-1 justify-between">中文
<span class="badge badge-sm badge-ghost">测试版
</span>
</span></button>
</li><li><button class="flex"><img loading="lazy" width="20" height="20" alt="繁體中文" src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1f9-1f1fc.svg">
<span class="flex flex-1 justify-between">繁體中文
<span class="badge badge-sm badge-ghost">測試版
</span>
</span></button>
</li></ul></div></div>
<span class="tooltip tooltip-bottom before:text-xs before:content-[attr(data-tip)]" data-tip="GitHub"><div class="flex-none items-center"><a aria-label="Github" target="_blank" href="https://github.com/saadeghi/daisyui" rel="noopener" class="btn btn-ghost drawer-button btn-square normal-case"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="inline-block h-5 w-5 fill-current md:h-6 md:w-6"><path d="M256,32C132.3,32,32,134.9,32,261.7c0,101.5,64.2,187.5,153.2,217.9a17.56,17.56,0,0,0,3.8.4c8.3,0,11.5-6.1,11.5-11.4,0-5.5-.2-19.9-.3-39.1a102.4,102.4,0,0,1-22.6,2.7c-43.1,0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1,1.4-14.1h.1c22.5,2,34.3,23.8,34.3,23.8,11.2,19.6,26.2,25.1,39.6,25.1a63,63,0,0,0,25.6-6c2-14.8,7.8-24.9,14.2-30.7-49.7-5.8-102-25.5-102-113.5,0-25.1,8.7-45.6,23-61.6-2.3-5.8-10-29.2,2.2-60.8a18.64,18.64,0,0,1,5-.5c8.1,0,26.4,3.1,56.6,24.1a208.21,208.21,0,0,1,112.2,0c30.2-21,48.5-24.1,56.6-24.1a18.64,18.64,0,0,1,5,.5c12.2,31.6,4.5,55,2.2,60.8,14.3,16.1,23,36.6,23,61.6,0,88.2-52.4,107.6-102.3,113.3,8,7.1,15.2,21.1,15.2,42.5,0,30.7-.3,55.5-.3,63,0,5.4,3.1,11.5,11.4,11.5a19.35,19.35,0,0,0,4-.4C415.9,449.2,480,363.1,480,261.7,480,134.9,379.7,32,256,32Z"></path></svg></a></div></span></div></nav></div>
<div class="p-6 pb-16">
<div class="flex flex-col-reverse justify-between gap-6 xl:flex-row"><div class="prose w-full max-w-4xl flex-grow">
<h1>Drawer</h1>
<p>Drawer is a grid layout that can show/hide a sidebar on the left or right side of the page.</p>
<div class="not-prose mt-6 mb-10 overflow-x-auto"><table class="table-compact table w-full"><thead><tr><th class="flex items-center gap-2 normal-case"><div class="tooltip tooltip-right font-normal" data-tip="Add custom prefix"><input class="input input-bordered input-xs w-min max-w-[3.8rem]" type="text" placeholder="Prefix–" value=""></div>
<span>Class name</span></th>
<th class="normal-case">Type</th>
<th></th></tr></thead>
<tbody>
<tr><th class="font-normal"><span class="font-mono lowercase">drawer</span></th>
<td><span class="badge badge-sm badge-ghost w-20">Component</span>
</td>
<td>Container element</td>
</tr><tr><th class="font-normal"><span class="font-mono lowercase">drawer-toggle</span></th>
<td><span class="badge badge-sm badge-ghost w-20">Component</span>
</td>
<td>For checkbox element that controls the drawer</td>
</tr><tr><th class="font-normal"><span class="font-mono lowercase">drawer-content</span></th>
<td><span class="badge badge-sm badge-ghost w-20">Component</span>
</td>
<td>The content container</td>
</tr><tr><th class="font-normal"><span class="font-mono lowercase">drawer-side</span></th>
<td><span class="badge badge-sm badge-ghost w-20">Component</span>
</td>
<td>The sidebar container</td>
</tr><tr><th class="font-normal"><span class="font-mono lowercase">drawer-overlay</span></th>
<td><span class="badge badge-sm badge-ghost w-20">Component</span>
</td>
<td>The label covers the content when drawer is open</td>
</tr><tr><th class="font-normal"><span class="font-mono lowercase">drawer-mobile</span></th>
<td>
<div class="tooltip tooltip-right cursor-help" data-tip="Changes the style of a component"><span class="badge badge-sm badge-outline w-20">Modifier</span>
</div>
</td>
<td>Makes drawer to open/close on mobile but will be always visible on desktop</td>
</tr><tr><th class="font-normal"><span class="font-mono lowercase">drawer-end</span></th>
<td>
<div class="tooltip tooltip-right cursor-help" data-tip="Changes the style of a component"><span class="badge badge-sm badge-outline w-20">Modifier</span>
</div>
</td>
<td>puts drawer to the right</td>
</tr></tbody></table></div>
<p>Drawer sidebar can be visible by default on large screens or it can be toggleable on both large and small screens.</p>
<p>Drawer tags structure:</p>
<pre class="language-js"><code class="language-js"><span class="token punctuation">.</span>drawer <span class="token comment">// The root container</span>
  ├── <span class="token punctuation">.</span>drawer<span class="token operator">-</span>toggle <span class="token comment">// A hidden checkbox to toggle the visibility of the sidebar</span>
  ├── <span class="token punctuation">.</span>drawer<span class="token operator">-</span>content <span class="token comment">// All your page content goes here</span>
  │    ├── <span class="token comment">// navbar</span>
  │    ├── <span class="token comment">// content</span>
  │    └── <span class="token comment">// footer</span>
  └── <span class="token punctuation">.</span>drawer<span class="token operator">-</span>side <span class="token comment">// Sidebar wrapper</span>
       ├── <span class="token punctuation">.</span>drawer<span class="token operator">-</span>overlay <span class="token comment">// A dark overlay that covers the whole page when the drawer is open</span>
       └── <span class="token comment">// Sidebar content (menu or anything)</span></code></pre>
<p>You can check/uncheck the checkbox using JavaScript or using <code>&lt;label&gt;</code> tag.</p>
<div class="component-preview not-prose text-base-content my-4 max-w-4xl" id="drawer"><div class="pb-2 text-sm font-bold"><a class="opacity-20 hover:opacity-60" href="#drawer">#</a>
<span class="component-preview-title">Drawer</span></div>
<div class="grid"><div class="tabs z-10 -mb-px"><button class="tab tab-lifted tab-active [--tab-bg:hsl(var(--b2))]">Preview</button>
<button class="tab tab-lifted ">HTML</button>
<div class="tab tab-lifted mr-6 flex-1 cursor-default [--tab-border-color:transparent]"></div></div>
<div class="bg-base-300 rounded-b-box rounded-tr-box relative overflow-x-auto"><div class="preview border-base-300 bg-base-200 rounded-b-box rounded-tr-box flex min-h-[6rem] min-w-[18rem] max-w-4xl flex-wrap items-center justify-center gap-2 overflow-x-hidden border bg-cover bg-top p-4 undefined" style="background-size: 5px 5px"><div class="drawer h-56 rounded"><input id="my-drawer" type="checkbox" class="drawer-toggle">
<div class="flex flex-col items-center justify-center drawer-content"><label for="my-drawer" class="btn btn-primary drawer-button">Open drawer</label></div>
<div class="drawer-side"><label for="my-drawer" class="drawer-overlay"></label>
<ul class="menu p-4 overflow-y-auto w-60 md:w-80 bg-base-100 text-base-content"><li><a>Sidebar Item 1</a></li>
<li><a>Sidebar Item 2</a></li></ul></div></div></div></div>
</div>
</div>
<div class="component-preview not-prose text-base-content my-4 max-w-4xl" id="drawer-for-mobile--fixed-sidebar-for-desktop"><div class="pb-2 text-sm font-bold"><a class="opacity-20 hover:opacity-60" href="#drawer-for-mobile--fixed-sidebar-for-desktop">#</a>
<span class="component-preview-title">Drawer for mobile + fixed sidebar for desktop</span></div>
<div class="pb-2 text-xs opacity-70">Drawer is always open on desktop size. Drawer can be toggled on mobile size. Resize the browser to see toggle button on mobile size</div>
<div class="grid"><div class="tabs z-10 -mb-px"><button class="tab tab-lifted tab-active [--tab-bg:hsl(var(--b2))]">Preview</button>
<button class="tab tab-lifted ">HTML</button>
<div class="tab tab-lifted mr-6 flex-1 cursor-default [--tab-border-color:transparent]"></div></div>
<div class="bg-base-300 rounded-b-box rounded-tr-box relative overflow-x-auto"><div class="preview border-base-300 bg-base-200 rounded-b-box rounded-tr-box flex min-h-[6rem] min-w-[18rem] max-w-4xl flex-wrap items-center justify-center gap-2 overflow-x-hidden border bg-cover bg-top p-4 undefined" style="background-size: 5px 5px"><div class="drawer drawer-mobile h-56 rounded"><input id="my-drawer-2" type="checkbox" class="drawer-toggle">
<div class="flex flex-col items-center justify-center drawer-content"><label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label></div>
<div class="drawer-side"><label for="my-drawer-2" class="drawer-overlay"></label>
<ul class="menu p-4 overflow-y-auto w-60 md:w-80 bg-base-100 text-base-content"><li><a>Sidebar Item 1</a></li>
<li><a>Sidebar Item 2</a></li></ul></div></div></div></div>
</div>
</div>
<div class="component-preview not-prose text-base-content my-4 max-w-4xl" id="navbar-menu-for-desktop--sidebar-drawer-for-mobile"><div class="pb-2 text-sm font-bold"><a class="opacity-20 hover:opacity-60" href="#navbar-menu-for-desktop--sidebar-drawer-for-mobile">#</a>
<span class="component-preview-title">Navbar menu for desktop + sidebar drawer for mobile</span></div>
<div class="pb-2 text-xs opacity-70">Change screen size to show/hide menu</div>
<div class="grid"><div class="tabs z-10 -mb-px"><button class="tab tab-lifted tab-active [--tab-bg:hsl(var(--b2))]">Preview</button>
<button class="tab tab-lifted ">HTML</button>
<div class="tab tab-lifted mr-6 flex-1 cursor-default [--tab-border-color:transparent]"></div></div>
<div class="bg-base-300 rounded-b-box rounded-tr-box relative overflow-x-auto"><div class="preview border-base-300 bg-base-200 rounded-b-box rounded-tr-box flex min-h-[6rem] min-w-[18rem] max-w-4xl flex-wrap items-center justify-center gap-2 overflow-x-hidden border bg-cover bg-top p-4 undefined" style="background-size: 5px 5px"><div class="drawer h-56 rounded"><input id="my-drawer-3" type="checkbox" class="drawer-toggle">
<div class="flex flex-col drawer-content"><div class="w-full navbar bg-base-300"><div class="flex-none lg:hidden"><label for="my-drawer-3" class="btn btn-square btn-ghost"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg></label></div>
<div class="flex-1 px-2 mx-2">Navbar Title</div>
<div class="flex-none hidden lg:block"><ul class="menu menu-horizontal"><li><a>Navbar Item 1</a></li>
<li><a>Navbar Item 2</a></li></ul></div></div>
<div class="flex justify-center items-center flex-grow">Content</div></div>
<div class="drawer-side"><label for="my-drawer-3" class="drawer-overlay"></label>
<ul class="p-4 overflow-y-auto menu w-60 md:w-80 bg-base-100"><li><a>Sidebar Item 1</a></li>
<li><a>Sidebar Item 2</a></li></ul></div></div></div></div>
</div>
</div>
<div class="component-preview not-prose text-base-content my-4 max-w-4xl" id="drawer-that-opens-from-right-side-of-page"><div class="pb-2 text-sm font-bold"><a class="opacity-20 hover:opacity-60" href="#drawer-that-opens-from-right-side-of-page">#</a>
<span class="component-preview-title">Drawer that opens from right side of page</span></div>
<div class="grid"><div class="tabs z-10 -mb-px"><button class="tab tab-lifted tab-active [--tab-bg:hsl(var(--b2))]">Preview</button>
<button class="tab tab-lifted ">HTML</button>
<div class="tab tab-lifted mr-6 flex-1 cursor-default [--tab-border-color:transparent]"></div></div>
<div class="bg-base-300 rounded-b-box rounded-tr-box relative overflow-x-auto"><div class="preview border-base-300 bg-base-200 rounded-b-box rounded-tr-box flex min-h-[6rem] min-w-[18rem] max-w-4xl flex-wrap items-center justify-center gap-2 overflow-x-hidden border bg-cover bg-top p-4 undefined" style="background-size: 5px 5px"><div class="drawer drawer-end h-56 rounded"><input id="my-drawer-4" type="checkbox" class="drawer-toggle">
<div class="flex flex-col items-center justify-center drawer-content"><label for="my-drawer-4" class="btn btn-primary drawer-button">Open drawer</label></div>
<div class="drawer-side"><label for="my-drawer-4" class="drawer-overlay"></label>
<ul class="menu p-4 overflow-y-auto w-60 md:w-80 bg-base-100 text-base-content"><li><a>Sidebar Item 1</a></li>
<li><a>Sidebar Item 2</a></li></ul></div></div></div></div>
</div>
</div>
<div class="not-prose pb-10"><div class="bg-base-content/10 my-10 mx-1 h-px"></div>
<div class="flex justify-between"><div><a href="/components/divider" class="btn btn-sm md:btn-md btn-ghost gap-2 normal-case lg:gap-3"><svg class="h-6 w-6 fill-current md:h-8 md:w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z"></path></svg>
<div class="flex flex-col items-start"><span class="text-base-content/50 hidden text-xs font-normal md:block">Prev</span>
<span>Divider</span></div></a></div>
<div><a href="/components/footer" class="btn btn-sm md:btn-md gap-2 normal-case lg:gap-3"><div class="flex flex-col items-end"><span class="text-neutral-content/50 hidden text-xs font-normal md:block">Next</span>
<span>Footer</span></div>
<svg class="h-6 w-6 fill-current md:h-8 md:w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"></path></svg></a></div></div>
<div class="bg-base-content/10 my-10 mx-1 h-px"></div>
<div class="flex flex-col justify-between gap-2 px-4 text-xs md:flex-row"><div class="flex flex-col gap-2"><div class="flex items-center gap-2"><svg class="inline-block h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12,23 C5.92486775,23 1,18.0751322 1,12 C1,5.92486775 5.92486775,1 12,1 C18.0751322,1 23,5.92486775 23,12 C23,18.0751322 18.0751322,23 12,23 Z M12,21 C16.9705627,21 21,16.9705627 21,12 C21,7.02943725 16.9705627,3 12,3 C7.02943725,3 3,7.02943725 3,12 C3,16.9705627 7.02943725,21 12,21 Z M12.0003283,16.9983464 C11.4478622,16.9983464 11,16.5506311 11,15.9983464 C11,15.4460616 11.4478622,14.9983464 12.0003283,14.9983464 C12.5527943,14.9983464 13.0006565,15.4460616 13.0006565,15.9983464 C13.0006565,16.5506311 12.5527943,16.9983464 12.0003283,16.9983464 Z M13,14 L11,14 C11,12.2983529 11.6245803,11.5696759 13.0527864,10.8555728 C13.8745803,10.4446759 14,10.2983529 14,9.5 C14,8.556407 13.2771608,8 12,8 C10.8954305,8 10,8.8954305 10,10 L8,10 C8,7.790861 9.790861,6 12,6 C14.2843464,6 16,7.32062807 16,9.5 C16,11.2016471 15.3754197,11.9303241 13.9472136,12.6444272 C13.1254197,13.0553241 13,13.2016471 13,14 Z"></path></svg>
<div>Do you have a question?
<a target="_blank" rel="noopener" class="link" href="https://github.com/saadeghi/daisyui/discussions">ask the community</a></div></div>
<div class="flex items-center gap-2"><svg class="inline-block h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1792 1792"><path d="M1696 960q0 26-19 45t-45 19h-224q0 171-67 290l208 209q19 19 19 45t-19 45q-18 19-45 19t-45-19l-198-197q-5 5-15 13t-42 28.5-65 36.5-82 29-97 13v-896h-128v896q-51 0-101.5-13.5t-87-33-66-39-43.5-32.5l-15-14-183 207q-20 21-48 21-24 0-43-16-19-18-20.5-44.5t15.5-46.5l202-227q-58-114-58-274h-224q-26 0-45-19t-19-45 19-45 45-19h224v-294l-173-173q-19-19-19-45t19-45 45-19 45 19l173 173h844l173-173q19-19 45-19t45 19 19 45-19 45l-173 173v294h224q26 0 45 19t19 45zm-480-576h-640q0-133 93.5-226.5t226.5-93.5 226.5 93.5 93.5 226.5z"></path></svg>
<div>Do you see a bug?
<a target="_blank" rel="noopener" class="link" href="https://github.com/saadeghi/daisyui/issues?q=Drawer">open an issue on GitHub</a></div></div>
<div class="flex items-center gap-2"><svg class="inline-block h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path d="M256,448a32,32,0,0,1-18-5.57c-78.59-53.35-112.62-89.93-131.39-112.8-40-48.75-59.15-98.8-58.61-153C48.63,114.52,98.46,64,159.08,64c44.08,0,74.61,24.83,92.39,45.51a6,6,0,0,0,9.06,0C278.31,88.81,308.84,64,352.92,64,413.54,64,463.37,114.52,464,176.64c.54,54.21-18.63,104.26-58.61,153-18.77,22.87-52.8,59.45-131.39,112.8A32,32,0,0,1,256,448Z"></path></svg>
<div>Do you like daisyUI?
<a target="_blank" rel="noopener" class="link" href="https://twitter.com/intent/tweet?text=daisyUI%20%0D%0AComponents%20for%20Tailwind%20CSS%20%0D%0Ahttps://daisyui.com">tweet about it!</a></div></div></div>
<div class="flex flex-col gap-2"><div class="flex items-center gap-2"><svg class="inline-block h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z"></path></svg>
<div><a target="_blank" rel="noopener" class="link" href="https://github.com/saadeghi/daisyui/blob/master/src/docs/src/routes/components/drawer.svelte.md?plain=1">Edit this page on GitHub</a></div></div>
</div></div></div>
<div class="not-prose flex justify-center xl:hidden"><div class="flex flex-col gap-2 pb-6"><h3 class="text-base-content/50 text-xs font-bold">Sponsors</h3>
<div class="flex gap-2 flex-col sm:flex-row"><a href="https://www.stackbit.com/?utm_source=daisyui" target="_blank" rel="nofollow" class="flex w-[130px] flex-col items-center rounded bg-base-100 border-base-100 border-base-content/10 hover:border-base-content/20 border"><svg class="fill-base-content mt-2 mb-1" width="110" height="20" viewBox="0 0 128 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M41.5717 8.50469C41.5717 6.29343 39.955 4.72344 37.3469 4.72344C35.234 4.72344 33.7217 5.68779 33.7217 7.27867C33.7217 11.6864 44.9893 8.11404 44.9893 15.8854C44.9893 19.615 41.7289 21.728 37.5558 21.728C34.0583 21.728 31.1468 20.1863 30.0535 17.3387L33.0178 14.3731C33.0178 17.007 34.7377 18.6728 37.5558 18.6728C39.767 18.6728 41.4157 17.6556 41.4157 16.0131C41.4157 11.5525 30.1481 15.1262 30.1481 7.50962C30.1481 3.9888 33.3826 1.66821 37.3469 1.66821C40.9095 1.66821 43.3935 3.37334 44.364 5.70744L41.5717 8.50469Z"></path><path d="M50.2694 2.6106V7.7702H54.0777V10.6461H50.2694V16.6975C50.2694 18.2356 50.8173 18.6275 52.122 18.6275C52.7266 18.608 53.3286 18.5381 53.9217 18.4186V21.367C53.4524 21.5488 52.0962 21.6803 51.6527 21.6803C48.5483 21.6803 46.8788 20.3756 46.8788 17.1681V10.6461H44.4219V7.77512H46.8788V6.00365L50.2694 2.6106Z"></path><path d="M124.192 2.6106V7.7702H128V10.6461H124.192V16.6975C124.192 18.2356 124.74 18.6275 126.044 18.6275C126.649 18.608 127.251 18.5381 127.844 18.4186V21.367C127.375 21.5488 126.018 21.6803 125.575 21.6803C122.471 21.6803 120.801 20.3756 120.801 17.1681V10.6461H118.344V7.77512H120.801V6.00365L124.192 2.6106Z"></path><path d="M83.6286 11.1374L80.6287 12.8843C80.3167 11.345 78.9088 10.3807 77.2393 10.3807C75.0281 10.3807 73.4569 11.8929 73.4569 14.501C73.4569 17.1091 74.9961 18.6311 77.2393 18.6311C78.856 18.6311 80.2381 17.5611 80.6287 16.2049L83.55 17.9002C82.6373 20.0648 80.2638 21.7343 77.2393 21.7343C72.8831 21.7343 69.936 18.7859 69.936 14.5096C69.936 10.2591 72.9876 7.28493 77.2393 7.28493C80.238 7.27879 82.7417 8.94829 83.6286 11.1374Z"></path><path d="M87.8767 2.16943V12.7589L92.9626 7.77744H97.5006L91.6579 13.437L97.6308 21.3337H93.4847L89.2845 15.7257L87.8767 17.077V21.3337H84.4861V2.16943H87.8767Z"></path><path d="M101.688 2.16943V9.20861C102.731 8.03541 104.218 7.27867 106.201 7.27867C110.217 7.27867 113.033 10.4088 113.033 14.5562C113.033 18.6507 110.217 21.728 106.175 21.728C104.192 21.728 102.706 20.9713 101.663 19.7981V21.3337H98.2979V2.16943H101.688ZM105.523 18.6531C107.817 18.6531 109.513 17.0094 109.513 14.5586C109.513 12.055 107.817 10.3597 105.523 10.3597C103.358 10.3597 101.584 12.0022 101.584 14.5586C101.584 17.0598 103.364 18.6507 105.523 18.6507V18.6531Z"></path><path d="M113.945 2.16943H117.466V5.56003H113.945V2.16943ZM117.385 7.77744V21.3337H113.994V7.77498L117.385 7.77744Z"></path><path d="M4.00607 0C3.47947 -6.18997e-07 2.95804 0.103822 2.4716 0.30553C1.98516 0.507237 1.54326 0.80287 1.17118 1.17552C0.799101 1.54817 0.504146 1.99052 0.303184 2.47727C0.102222 2.96401 -0.000802714 3.48561 4.70939e-06 4.01221V10.0207C-6.19753e-05 10.5153 0.137136 11.0001 0.396324 11.4213C0.655512 11.8426 1.02652 12.1836 1.46803 12.4064L6.68292 15.0243V6.67678H15.0243L21.6875 0H4.00607Z" fill="#FF364E"></path><path d="M17.6949 21.7023C18.7572 21.7019 19.7758 21.2797 20.5268 20.5285C21.2778 19.7772 21.6997 18.7585 21.6997 17.6962V11.6865C21.6993 11.1914 21.5612 10.7062 21.3009 10.2852C21.0405 9.86408 20.6682 9.52369 20.2256 9.30201L15.0242 6.67676V15.0243H6.68283L0.0134277 21.7023H17.6949Z" fill="#FF364E"></path><path d="M69.0011 21.3336H68.377H65.7321L65.7837 19.6334C64.7383 20.8889 63.1953 21.7218 61.129 21.7218C57.075 21.7218 54.2495 18.6359 54.2495 14.5303C54.2495 10.3719 57.048 7.23315 61.102 7.23315C63.0675 7.23315 64.554 7.99113 65.5994 9.14221V7.73437H68.9998L69.0011 21.3336ZM61.7531 18.6371C63.9238 18.6371 65.7284 17.0401 65.7284 14.5315C65.7284 11.9677 63.9238 10.3203 61.7531 10.3203C59.4779 10.3203 57.7777 12.0205 57.7777 14.5315C57.7875 16.9934 59.4816 18.6408 61.7567 18.6408L61.7531 18.6371Z"></path></svg>
<p class="text-base-content/50 px-1.5 py-2 text-xs tracking-tighter">Make your React site visually editable</p></a></div>
<a href="https://opencollective.com/daisyui" target="_blank" rel="nofollow" class="group link link-hover text-xs opacity-80">Become a sponsor
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="inline-block w-4 fill-current opacity-0 group-hover:opacity-50"><path fill-rule="evenodd" d="M19,14 L19,19 C19,20.1045695 18.1045695,21 17,21 L5,21 C3.8954305,21 3,20.1045695 3,19 L3,7 C3,5.8954305 3.8954305,5 5,5 L10,5 L10,7 L5,7 L5,19 L17,19 L17,14 L19,14 Z M18.9971001,6.41421356 L11.7042068,13.7071068 L10.2899933,12.2928932 L17.5828865,5 L12.9971001,5 L12.9971001,3 L20.9971001,3 L20.9971001,11 L18.9971001,11 L18.9971001,6.41421356 Z"></path></svg></a></div></div></div>
<div><div class="sticky top-20 xl:mt-32 my-6 xl:my-0 xl:w-[130px]"><div class="hidden xl:block "><div class="flex flex-col gap-2 pb-6"><h3 class="text-base-content/50 text-xs font-bold">Sponsors</h3>
<div class="flex gap-2 flex-col"><a href="https://www.stackbit.com/?utm_source=daisyui" target="_blank" rel="nofollow" class="flex w-[130px] flex-col items-center rounded bg-base-100 border-base-100 border-base-content/10 hover:border-base-content/20 border"><svg class="fill-base-content mt-2 mb-1" width="110" height="20" viewBox="0 0 128 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M41.5717 8.50469C41.5717 6.29343 39.955 4.72344 37.3469 4.72344C35.234 4.72344 33.7217 5.68779 33.7217 7.27867C33.7217 11.6864 44.9893 8.11404 44.9893 15.8854C44.9893 19.615 41.7289 21.728 37.5558 21.728C34.0583 21.728 31.1468 20.1863 30.0535 17.3387L33.0178 14.3731C33.0178 17.007 34.7377 18.6728 37.5558 18.6728C39.767 18.6728 41.4157 17.6556 41.4157 16.0131C41.4157 11.5525 30.1481 15.1262 30.1481 7.50962C30.1481 3.9888 33.3826 1.66821 37.3469 1.66821C40.9095 1.66821 43.3935 3.37334 44.364 5.70744L41.5717 8.50469Z"></path><path d="M50.2694 2.6106V7.7702H54.0777V10.6461H50.2694V16.6975C50.2694 18.2356 50.8173 18.6275 52.122 18.6275C52.7266 18.608 53.3286 18.5381 53.9217 18.4186V21.367C53.4524 21.5488 52.0962 21.6803 51.6527 21.6803C48.5483 21.6803 46.8788 20.3756 46.8788 17.1681V10.6461H44.4219V7.77512H46.8788V6.00365L50.2694 2.6106Z"></path><path d="M124.192 2.6106V7.7702H128V10.6461H124.192V16.6975C124.192 18.2356 124.74 18.6275 126.044 18.6275C126.649 18.608 127.251 18.5381 127.844 18.4186V21.367C127.375 21.5488 126.018 21.6803 125.575 21.6803C122.471 21.6803 120.801 20.3756 120.801 17.1681V10.6461H118.344V7.77512H120.801V6.00365L124.192 2.6106Z"></path><path d="M83.6286 11.1374L80.6287 12.8843C80.3167 11.345 78.9088 10.3807 77.2393 10.3807C75.0281 10.3807 73.4569 11.8929 73.4569 14.501C73.4569 17.1091 74.9961 18.6311 77.2393 18.6311C78.856 18.6311 80.2381 17.5611 80.6287 16.2049L83.55 17.9002C82.6373 20.0648 80.2638 21.7343 77.2393 21.7343C72.8831 21.7343 69.936 18.7859 69.936 14.5096C69.936 10.2591 72.9876 7.28493 77.2393 7.28493C80.238 7.27879 82.7417 8.94829 83.6286 11.1374Z"></path><path d="M87.8767 2.16943V12.7589L92.9626 7.77744H97.5006L91.6579 13.437L97.6308 21.3337H93.4847L89.2845 15.7257L87.8767 17.077V21.3337H84.4861V2.16943H87.8767Z"></path><path d="M101.688 2.16943V9.20861C102.731 8.03541 104.218 7.27867 106.201 7.27867C110.217 7.27867 113.033 10.4088 113.033 14.5562C113.033 18.6507 110.217 21.728 106.175 21.728C104.192 21.728 102.706 20.9713 101.663 19.7981V21.3337H98.2979V2.16943H101.688ZM105.523 18.6531C107.817 18.6531 109.513 17.0094 109.513 14.5586C109.513 12.055 107.817 10.3597 105.523 10.3597C103.358 10.3597 101.584 12.0022 101.584 14.5586C101.584 17.0598 103.364 18.6507 105.523 18.6507V18.6531Z"></path><path d="M113.945 2.16943H117.466V5.56003H113.945V2.16943ZM117.385 7.77744V21.3337H113.994V7.77498L117.385 7.77744Z"></path><path d="M4.00607 0C3.47947 -6.18997e-07 2.95804 0.103822 2.4716 0.30553C1.98516 0.507237 1.54326 0.80287 1.17118 1.17552C0.799101 1.54817 0.504146 1.99052 0.303184 2.47727C0.102222 2.96401 -0.000802714 3.48561 4.70939e-06 4.01221V10.0207C-6.19753e-05 10.5153 0.137136 11.0001 0.396324 11.4213C0.655512 11.8426 1.02652 12.1836 1.46803 12.4064L6.68292 15.0243V6.67678H15.0243L21.6875 0H4.00607Z" fill="#FF364E"></path><path d="M17.6949 21.7023C18.7572 21.7019 19.7758 21.2797 20.5268 20.5285C21.2778 19.7772 21.6997 18.7585 21.6997 17.6962V11.6865C21.6993 11.1914 21.5612 10.7062 21.3009 10.2852C21.0405 9.86408 20.6682 9.52369 20.2256 9.30201L15.0242 6.67676V15.0243H6.68283L0.0134277 21.7023H17.6949Z" fill="#FF364E"></path><path d="M69.0011 21.3336H68.377H65.7321L65.7837 19.6334C64.7383 20.8889 63.1953 21.7218 61.129 21.7218C57.075 21.7218 54.2495 18.6359 54.2495 14.5303C54.2495 10.3719 57.048 7.23315 61.102 7.23315C63.0675 7.23315 64.554 7.99113 65.5994 9.14221V7.73437H68.9998L69.0011 21.3336ZM61.7531 18.6371C63.9238 18.6371 65.7284 17.0401 65.7284 14.5315C65.7284 11.9677 63.9238 10.3203 61.7531 10.3203C59.4779 10.3203 57.7777 12.0205 57.7777 14.5315C57.7875 16.9934 59.4816 18.6408 61.7567 18.6408L61.7531 18.6371Z"></path></svg>
<p class="text-base-content/50 px-1.5 py-2 text-xs tracking-tighter">Make your React site visually editable</p></a></div>
<a href="https://opencollective.com/daisyui" target="_blank" rel="nofollow" class="group link link-hover text-xs opacity-80">Become a sponsor
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="inline-block w-4 fill-current opacity-0 group-hover:opacity-50"><path fill-rule="evenodd" d="M19,14 L19,19 C19,20.1045695 18.1045695,21 17,21 L5,21 C3.8954305,21 3,20.1045695 3,19 L3,7 C3,5.8954305 3.8954305,5 5,5 L10,5 L10,7 L5,7 L5,19 L17,19 L17,14 L19,14 Z M18.9971001,6.41421356 L11.7042068,13.7071068 L10.2899933,12.2928932 L17.5828865,5 L12.9971001,5 L12.9971001,3 L20.9971001,3 L20.9971001,11 L18.9971001,11 L18.9971001,6.41421356 Z"></path></svg></a></div></div>
<div class="mx-auto items-center carbonads-responsive flex justify-center"><script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CEAI423U&placement=daisyuicom" id="_carbonads_js"></script></div></div></div></div></div></div>
<div class="drawer-side" style="scroll-behavior: smooth; scroll-padding-top: 5rem;"><label for="drawer" class="drawer-overlay"></label>
<aside class="bg-base-200 w-80"><div class="z-20 bg-base-200 bg-opacity-90 backdrop-blur sticky top-0 items-center gap-2 px-4 py-2 hidden lg:flex "><a href="/" aria-current="page" aria-label="Homepage" class="flex-0 btn btn-ghost px-2"><div class="font-title text-primary inline-flex text-lg transition-all duration-200 md:text-3xl"><span class="lowercase">daisy</span>
<span class="text-base-content uppercase">UI</span></div></a>
<a href="/docs/changelog" class="link link-hover font-mono text-xs text-opacity-50"><div data-tip="Changelog" class="tooltip tooltip-bottom">2.20.0</div></a></div>
<div class="h-4"></div>
<ul class="menu menu-compact flex flex-col p-0 px-4">
<li><a sveltekit:prefetch href="/docs/install" id="" class="flex gap-4   "><span class="flex-none"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" /></svg>
</span>
<span class="flex-1">Install</span>
</a>
</li><li><a sveltekit:prefetch href="/docs/use" id="" class="flex gap-4   "><span class="flex-none"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
</span>
<span class="flex-1">Use</span>
</a>
</li><li><a sveltekit:prefetch href="/docs/customize" id="" class="flex gap-4   "><span class="flex-none"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
</span>
<span class="flex-1">Customize components</span>
</a>
</li><li><a sveltekit:prefetch href="/docs/config" id="" class="flex gap-4   "><span class="flex-none"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg>
</span>
<span class="flex-1">Config</span>
</a>
</li><li><a sveltekit:prefetch href="/docs/colors" id="" class="flex gap-4   "><span class="flex-none"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 fill-current"><path d="M19,11.5C19,11.5 17,13.67 17,15C17,16.1 17.9,17 19,17C20.1,17 21,16.1 21,15C21,13.67 19,11.5 19,11.5M5.21,10L10,5.21L14.79,10M16.56,8.94L7.62,0L6.21,1.41L8.59,3.79L3.44,8.94C2.85,9.5 2.85,10.47 3.44,11.06L8.94,16.56C9.23,16.85 9.62,17 10,17C10.38,17 10.77,16.85 11.06,16.56L16.56,11.06C17.15,10.47 17.15,9.5 16.56,8.94Z" /></svg>
</span>
<span class="flex-1">Colors</span>
</a>
</li><li><a sveltekit:prefetch href="/docs/themes" id="" class="flex gap-4   "><span class="flex-none"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" /></svg>
</span>
<span class="flex-1">Themes</span>
<span class="badge badge-sm flex-none lowercase">updated</span></a>
</li><li><a sveltekit:prefetch href="/theme-generator" id="" class="flex gap-4   "><span class="flex-none"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 512 512"><title>ionicons-v5-m</title><path d="M96,208H48a16,16,0,0,1,0-32H96a16,16,0,0,1,0,32Z" /><line x1="90.25" y1="90.25" x2="124.19" y2="124.19" /><path d="M124.19,140.19a15.91,15.91,0,0,1-11.31-4.69L78.93,101.56a16,16,0,0,1,22.63-22.63l33.94,33.95a16,16,0,0,1-11.31,27.31Z" /><path d="M192,112a16,16,0,0,1-16-16V48a16,16,0,0,1,32,0V96A16,16,0,0,1,192,112Z" /><line x1="293.89" y1="90.25" x2="259.95" y2="124.19" /><path d="M260,140.19a16,16,0,0,1-11.31-27.31l33.94-33.95a16,16,0,0,1,22.63,22.63L271.27,135.5A15.94,15.94,0,0,1,260,140.19Z" /><line x1="124.19" y1="259.95" x2="90.25" y2="293.89" /><path d="M90.25,309.89a16,16,0,0,1-11.32-27.31l33.95-33.94a16,16,0,0,1,22.62,22.63l-33.94,33.94A16,16,0,0,1,90.25,309.89Z" /><path d="M219,151.83a26,26,0,0,0-36.77,0l-30.43,30.43a26,26,0,0,0,0,36.77L208.76,276a4,4,0,0,0,5.66,0L276,214.42a4,4,0,0,0,0-5.66Z" /><path d="M472.31,405.11,304.24,237a4,4,0,0,0-5.66,0L237,298.58a4,4,0,0,0,0,5.66L405.12,472.31a26,26,0,0,0,36.76,0l30.43-30.43h0A26,26,0,0,0,472.31,405.11Z" /></svg>
</span>
<span class="flex-1">Theme Generator</span>
</a>
</li><li><a sveltekit:prefetch href="/docs/layout-and-typography" id="" class="flex gap-4   "><span class="flex-none"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 fill-current"><path d="M4,2 L20,2 C21.1045695,2 22,2.8954305 22,4 L22,20 C22,21.1045695 21.1045695,22 20,22 L4,22 C2.8954305,22 2,21.1045695 2,20 L2,4 C2,2.8954305 2.8954305,2 4,2 Z M4,4 L4,20 L20,20 L20,4 L4,4 Z M14.7999209,15 L9.19992091,15 L8,18 L6,18 L11,6 L13,6 L18,18 L16,18 L14.7999209,15 Z M13.9998682,13 L11.9997364,8 L9.99986818,13 L13.9998682,13 Z" /></svg>
</span>
<span class="flex-1">Layout & Typography</span>
</a>
</li>
</ul><ul class="menu menu-compact flex flex-col p-0 px-4"><li></li>
<li class="menu-title"><span>Actions</span></li>
<li><a sveltekit:prefetch href="/components/button" id="" class="flex gap-4   ">
<span class="flex-1">Button</span>
</a>
</li><li><a sveltekit:prefetch href="/components/dropdown" id="" class="flex gap-4   ">
<span class="flex-1">Dropdown</span>
</a>
</li><li><a sveltekit:prefetch href="/components/modal" id="" class="flex gap-4   ">
<span class="flex-1">Modal</span>
</a>
</li><li><a sveltekit:prefetch href="/components/swap" id="" class="flex gap-4   ">
<span class="flex-1">Swap</span>
</a>
</li>
</ul><ul class="menu menu-compact flex flex-col p-0 px-4"><li></li>
<li class="menu-title"><span>Data display</span></li>
<li><a sveltekit:prefetch href="/components/alert" id="" class="flex gap-4   ">
<span class="flex-1">Alert</span>
</a>
</li><li><a sveltekit:prefetch href="/components/avatar" id="" class="flex gap-4   ">
<span class="flex-1">Avatar</span>
</a>
</li><li><a sveltekit:prefetch href="/components/badge" id="" class="flex gap-4   ">
<span class="flex-1">Badge</span>
</a>
</li><li><a sveltekit:prefetch href="/components/card" id="" class="flex gap-4   ">
<span class="flex-1">Card</span>
</a>
</li><li><a sveltekit:prefetch href="/components/carousel" id="" class="flex gap-4   ">
<span class="flex-1">Carousel</span>
</a>
 </li><li><a sveltekit:prefetch href="/components/collapse" id="" class="flex gap-4   ">
<span class="flex-1">Collapse</span>
</a>
</li><li><a sveltekit:prefetch href="/components/countdown" id="" class="flex gap-4   ">
<span class="flex-1">Countdown</span>
</a>
</li><li><a sveltekit:prefetch href="/components/kbd" id="" class="flex gap-4   ">
<span class="flex-1">Kbd</span>
</a>
</li><li><a sveltekit:prefetch href="/components/progress" id="" class="flex gap-4   ">
<span class="flex-1">Progress</span>
</a>
</li><li><a sveltekit:prefetch href="/components/radial-progress" id="" class="flex gap-4   ">
<span class="flex-1">Radial progress</span>
</a>
</li><li><a sveltekit:prefetch href="/components/stat" id="" class="flex gap-4   ">
<span class="flex-1">Stat</span>
</a>
</li><li><a sveltekit:prefetch href="/components/table" id="" class="flex gap-4   ">
<span class="flex-1">Table</span>
</a>
</li><li><a sveltekit:prefetch href="/components/tooltip" id="" class="flex gap-4   ">
<span class="flex-1">Tooltip</span>
</a>
</li>
</ul><ul class="menu menu-compact flex flex-col p-0 px-4"><li></li>
<li class="menu-title"><span>Data input</span></li>
<li><a sveltekit:prefetch href="/components/checkbox" id="" class="flex gap-4   ">
<span class="flex-1">Checkbox</span>
</a>
</li><li><a sveltekit:prefetch href="/components/input" id="" class="flex gap-4   ">
<span class="flex-1">Text input</span>
</a>
</li><li><a sveltekit:prefetch href="/components/radio" id="" class="flex gap-4   ">
<span class="flex-1">Radio</span>
</a>
</li><li><a sveltekit:prefetch href="/components/range" id="" class="flex gap-4   ">
<span class="flex-1">Range</span>
</a>
</li><li><a sveltekit:prefetch href="/components/rating" id="" class="flex gap-4   ">
<span class="flex-1">Rating</span>
</a>
</li><li><a sveltekit:prefetch href="/components/select" id="" class="flex gap-4   ">
<span class="flex-1">Select</span>
</a>
</li><li><a sveltekit:prefetch href="/components/textarea" id="" class="flex gap-4   ">
<span class="flex-1">Textarea</span>
</a>
</li><li><a sveltekit:prefetch href="/components/toggle" id="" class="flex gap-4   ">
<span class="flex-1">Toggle</span>
</a>
</li>
</ul><ul class="menu menu-compact flex flex-col p-0 px-4"><li></li>
<li class="menu-title"><span>Layout</span></li>
<li><a sveltekit:prefetch href="/components/artboard" id="" class="flex gap-4   ">
<span class="flex-1">Artboard</span>
</a>
</li><li><a sveltekit:prefetch href="/components/button-group" id="" class="flex gap-4   ">
<span class="flex-1">Button group</span>
</a>
</li><li><a sveltekit:prefetch href="/components/divider" id="" class="flex gap-4   ">
<span class="flex-1">Divider</span>
</a>
</li><li><a sveltekit:prefetch href="/components/drawer" id="active-menu" class="flex gap-4   active">
<span class="flex-1">Drawer</span>
<span class="badge badge-sm flex-none lowercase">updated</span></a>
</li><li><a sveltekit:prefetch href="/components/footer" id="" class="flex gap-4   ">
<span class="flex-1">Footer</span>
</a>
</li><li><a sveltekit:prefetch href="/components/hero" id="" class="flex gap-4   ">
<span class="flex-1">Hero</span>
</a>
</li><li><a sveltekit:prefetch href="/components/indicator" id="" class="flex gap-4   ">
<span class="flex-1">Indicator</span>
</a>
</li><li><a sveltekit:prefetch href="/components/input-group" id="" class="flex gap-4   ">
<span class="flex-1">Input group</span>
</a>
</li><li><a sveltekit:prefetch href="/components/mask" id="" class="flex gap-4   ">
<span class="flex-1">Mask</span>
</a>
</li><li><a sveltekit:prefetch href="/components/stack" id="" class="flex gap-4   ">
<span class="flex-1">Stack</span>
</a>
</li><li><a sveltekit:prefetch href="/components/toast" id="" class="flex gap-4   ">
<span class="flex-1">Toast</span>
</a>
</li>
</ul><ul class="menu menu-compact flex flex-col p-0 px-4"><li></li>
<li class="menu-title"><span>Navigation</span></li>
<li><a sveltekit:prefetch href="/components/breadcrumbs" id="" class="flex gap-4   ">
<span class="flex-1">Breadcrumbs</span>
</a>
</li><li><a sveltekit:prefetch href="/components/bottom-navigation" id="" class="flex gap-4   ">
<span class="flex-1">Bottom navigation</span>
</a>
</li><li><a sveltekit:prefetch href="/components/link" id="" class="flex gap-4   ">
<span class="flex-1">Link</span>
</a>
</li><li><a sveltekit:prefetch href="/components/menu" id="" class="flex gap-4   ">
<span class="flex-1">Menu</span>
</a>
</li><li><a sveltekit:prefetch href="/components/navbar" id="" class="flex gap-4   ">
<span class="flex-1">Navbar</span>
</a>
</li><li><a sveltekit:prefetch href="/components/pagination" id="" class="flex gap-4   ">
<span class="flex-1">Pagination</span>
</a>
</li><li><a sveltekit:prefetch href="/components/steps" id="" class="flex gap-4   ">
<span class="flex-1">Steps</span>
</a>
</li><li><a sveltekit:prefetch href="/components/tab" id="" class="flex gap-4   ">
<span class="flex-1">Tab</span>
</a>
</li>
</ul><ul class="menu menu-compact flex flex-col p-0 px-4"><li></li>
<li class="menu-title"><span>Mockup</span></li>
<li><a sveltekit:prefetch href="/components/mockup-code" id="" class="flex gap-4   ">
<span class="flex-1">Code</span>
</a>
</li><li><a sveltekit:prefetch href="/components/mockup-phone" id="" class="flex gap-4   ">
<span class="flex-1">Phone</span>
</a>
</li><li><a sveltekit:prefetch href="/components/mockup-window" id="" class="flex gap-4   ">
<span class="flex-1">Window</span>
</a>
</li>
</ul><ul class="menu menu-compact flex flex-col p-0 px-4">
</ul>
<div class="from-base-200 pointer-events-none sticky bottom-0 flex h-20 bg-gradient-to-t to-transparent"></div></aside></div></div>
<input type="checkbox" id="my-modal" class="modal-toggle" aria-label="Open or close modal">
<div class="modal"><div class="modal-box"><h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
<p class="py-4">You&#39;ve been selected for a chance to get one year of subscription to use Wikipedia for free!</p>
<div class="modal-action"><label for="my-modal" class="btn">Yay!</label></div></div></div>
<div class="modal" id="my-modal-2"><div class="modal-box"><h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
<p class="py-4">You&#39;ve been selected for a chance to get one year of subscription to use Wikipedia for free!</p>
<div class="modal-action">
<a href="#" class="btn" rel="external">Yay!</a></div></div></div>
<input type="checkbox" id="my-modal-3" class="modal-toggle" aria-label="Open or close modal">
<div class="modal"><div class="modal-box relative"><label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
<h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
<p class="py-4">You&#39;ve been selected for a chance to get one year of subscription to use Wikipedia for free!</p></div></div>
<input type="checkbox" id="my-modal-4" class="modal-toggle" aria-label="Open or close modal">
<label for="my-modal-4" class="modal cursor-pointer"><label class="modal-box relative" for=""><h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
<p class="py-4">You&#39;ve been selected for a chance to get one year of subscription to use Wikipedia for free!</p></label></label>
<input type="checkbox" id="my-modal-5" class="modal-toggle" aria-label="Open or close modal">
<div class="modal"><div class="modal-box w-11/12 max-w-5xl"><h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
<p class="py-4">You&#39;ve been selected for a chance to get one year of subscription to use Wikipedia for free!</p>
<div class="modal-action"><label for="my-modal-5" class="btn">Yay!</label></div></div></div>
<input type="checkbox" id="my-modal-6" class="modal-toggle" aria-label="Open or close modal">
<div class="modal modal-bottom sm:modal-middle"><div class="modal-box"><h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
<p class="py-4">You&#39;ve been selected for a chance to get one year of subscription to use Wikipedia for free!</p>
<div class="modal-action"><label for="my-modal-6" class="btn">Yay!</label></div></div></div>
<noscript><iframe title="GTM" src="https://www.googletagmanager.com/ns.html?id=GTM-WJ8HL28" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script type="module" data-hydrate="16myh7x">
		import { start } from "/_app/start-c2e9888b.js";
		start({
			target: document.querySelector('[data-hydrate="16myh7x"]').parentNode,
			paths: {"base":"","assets":""},
			session: {},
			route: true,
			spa: false,
			trailing_slash: "always",
			hydrate: {
				status: 200,
				error: null,
				nodes: [
					import("/_app/pages/__layout.svelte-603c456b.js"),
						import("/_app/pages/components/drawer.svelte.md-bcb422f7.js")
				],
				url: new URL("http://sveltekit-prerender/components/drawer/"),
				params: {}
			}
		});
	</script>
</body>
</html>
