<!DOCTYPE html>
<html lang="id" x-data="app()" :class="{ 'dark': darkMode }" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratna Accurate | Solution Consultant</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style> [x-cloak] { display: none !important; } body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-white dark:bg-slate-950 text-slate-900 dark:text-slate-100 transition-colors duration-300">

    <nav class="fixed w-full z-50 bg-white/80 dark:bg-slate-950/80 backdrop-blur-md border-b border-slate-200 dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2 font-extrabold text-xl">
                <span class="text-accurate-red uppercase">Ratna</span><span class="dark:text-white uppercase text-slate-800">Accurate</span>
            </div>

            <div class="flex items-center gap-4">
                <button @click="toggleLang()" class="text-xs font-bold px-3 py-1.5 rounded-full border border-slate-200 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 transition">
                    <span x-text="lang === 'id' ? '🇮🇩 ID' : '🇺🇸 EN'"></span>
                </button>

                <button @click="toggleDark()" class="p-2 rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-yellow-400">
                    <template x-if="!darkMode">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    </template>
                    <template x-if="darkMode">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </template>
                </button>
            </div>
        </div>
    </nav>

    <main> <?php echo $__env->yieldContent('content'); ?> </main>

    <div x-data="{ open: false }" class="fixed bottom-6 right-6 z-[999]">
        <div x-show="open" x-cloak x-transition class="absolute bottom-20 right-0 w-72 bg-white dark:bg-slate-800 shadow-2xl rounded-2xl border border-slate-100 dark:border-slate-700 overflow-hidden mb-2">
            <div class="bg-accurate-red p-4 text-white">
                <p class="font-bold">Halo, saya Ratna! 👋</p>
                <p class="text-xs opacity-80">Ada yang bisa saya bantu terkait Accurate?</p>
            </div>
            <div class="p-4 bg-slate-50 dark:bg-slate-900">
                <a href="https://wa.me/6281286369702?text=Halo%20Ratna,%20saya%20ingin%20tanya%20tentang%20Accurate" target="_blank" class="block w-full bg-green-500 hover:bg-green-600 text-white text-center py-2 rounded-lg font-bold transition text-sm">
                    Mulai Chat WhatsApp
                </a>
            </div>
        </div>
        <button @click="open = !open" class="bg-green-500 text-white p-4 rounded-full shadow-2xl hover:scale-110 transition duration-300">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
        </button>
    </div>

    <script>
        function app() {
            return {
                darkMode: localStorage.getItem('dark') === 'true',
                lang: localStorage.getItem('lang') || 'id',
                toggleDark() {
                    this.darkMode = !this.darkMode;
                    localStorage.setItem('dark', this.darkMode);
                },
                toggleLang() {
                    this.lang = this.lang === 'id' ? 'en' : 'id';
                    localStorage.setItem('lang', this.lang);
                }
            }
        }
    </script>
</body>
</html>
<?php /**PATH D:\Project\portofolio-ratna\resources\views/layouts/app.blade.php ENDPATH**/ ?>