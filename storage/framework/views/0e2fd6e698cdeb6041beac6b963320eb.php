<section id="features" class="py-24 bg-white dark:bg-slate-900">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-6">
                <template x-if="lang === 'id'"><span>Pantau Penjualan, Stok & <br><span class="text-blue-600">Keuangan Bisnis Real Time</span></span></template>
                <template x-if="lang === 'en'"><span>Monitor Sales, Stock & <br><span class="text-blue-600">Business Finance Real Time</span></span></template>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-20">
            <div class="p-6 rounded-2xl border border-slate-100 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 hover:border-blue-500 transition">
                <h3 class="font-bold text-lg mb-2 text-slate-900 dark:text-white">
                    <template x-if="lang === 'id'"><span>Penjualan</span></template>
                    <template x-if="lang === 'en'"><span>Sales</span></template>
                </h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">
                    <template x-if="lang === 'id'"><span>Dari membuat penawaran, invoice, hingga pengiriman barang dapat disesuaikan dengan alur bisnis Anda.</span></template>
                    <template x-if="lang === 'en'"><span>From quotes, invoices, to shipping, customize it to your business flow.</span></template>
                </p>
            </div>

            <div class="p-6 rounded-2xl border border-slate-100 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 hover:border-blue-500 transition">
                <h3 class="font-bold text-lg mb-2 text-slate-900 dark:text-white">
                    <template x-if="lang === 'id'"><span>Laporan Keuangan</span></template>
                    <template x-if="lang === 'en'"><span>Financial Reports</span></template>
                </h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">
                    <template x-if="lang === 'id'"><span>Hasilkan laporan laba rugi, neraca, arus kas dan 200+ laporan lainnya secara instan.</span></template>
                    <template x-if="lang === 'en'"><span>Generate profit & loss, balance sheet, cash flow, and 200+ other reports instantly.</span></template>
                </p>
            </div>

            <div class="p-6 rounded-2xl border border-slate-100 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 hover:border-blue-500 transition">
                <h3 class="font-bold text-lg mb-2 text-slate-900 dark:text-white">Stock Opname</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">
                    <template x-if="lang === 'id'"><span>Lakukan stok opname secara menyeluruh untuk semua lokasi gudang Anda.</span></template>
                    <template x-if="lang === 'en'"><span>Perform comprehensive stock taking for all your warehouse locations.</span></template>
                </p>
            </div>

            <div class="p-6 rounded-2xl border border-slate-100 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 hover:border-blue-500 transition">
                <h3 class="font-bold text-lg mb-2 text-slate-900 dark:text-white">Integrasi POS</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">
                    <template x-if="lang === 'id'"><span>Gunakan aplikasi kasir Accurate POS secara gratis untuk mempercepat penjualan.</span></template>
                    <template x-if="lang === 'en'"><span>Use Accurate POS cashier app for free to speed up sales.</span></template>
                </p>
            </div>
        </div>

        <div class="relative bg-gradient-to-br from-indigo-900 to-slate-900 rounded-[2.5rem] p-10 md:p-16 overflow-hidden text-white shadow-2xl">
            <div class="absolute top-0 right-0 w-96 h-96 bg-purple-500/20 blur-[100px] rounded-full -mr-20 -mt-20"></div>

            <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block px-4 py-1.5 rounded-full bg-purple-500/20 border border-purple-400/30 text-purple-300 text-xs font-bold mb-6 tracking-wider uppercase">
                        New Feature
                    </div>
                    <h3 class="text-3xl md:text-5xl font-extrabold mb-6 leading-tight">
                        Smart Move for <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400">Smart Business!</span>
                    </h3>
                    <h4 class="text-xl font-bold mb-4 flex items-center gap-3">
                        <span class="text-2xl">🤖</span> Analisis Keuangan dengan AI
                    </h4>
                    <p class="text-slate-300 leading-relaxed mb-8">
                        <template x-if="lang === 'id'"><span><strong>AIlita</strong> siap menjadi teman setia dalam menganalisis performa keuangan bisnis antar-periode, seperti perkembangan pendapatan, perubahan biaya, dan profitabilitas yang meningkat.</span></template>
                        <template x-if="lang === 'en'"><span><strong>AIlita</strong> is ready to be your loyal companion in analyzing business financial performance between periods, such as revenue growth, cost changes, and increasing profitability.</span></template>
                    </p>
                    <a href="https://wa.me/6281286369702?text=Saya%20tertarik%20fitur%20AI%20Accurate" class="inline-flex items-center gap-2 bg-white text-indigo-900 px-6 py-3 rounded-xl font-bold hover:bg-slate-100 transition">
                        Tanya Tentang AIlita <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
                <div class="relative">
                     <div class="absolute inset-0 bg-gradient-to-t from-indigo-900 via-transparent to-transparent z-10"></div>
                     <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?q=80&w=2565&auto=format&fit=crop" class="rounded-2xl shadow-2xl opacity-80 border border-white/10" alt="AI Technology">
                </div>
            </div>
        </div>

    </div>
</section>
<?php /**PATH D:\Project\portofolio-ratna\resources\views/sections/features.blade.php ENDPATH**/ ?>