<section id="pricing" class="py-24 bg-white dark:bg-slate-900">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-4">
                <template x-if="lang === 'id'"><span>Pilihan Paket <span class="text-[#ed3969]">Terbaik</span></span></template>
                <template x-if="lang === 'en'"><span>Best Pricing <span class="text-[#ed3969]">Plans</span></span></template>
            </h2>
            <p class="text-slate-500 dark:text-slate-400">
                <template x-if="lang === 'id'"><span>Investasi cerdas untuk efisiensi bisnis jangka panjang.</span></template>
                <template x-if="lang === 'en'"><span>Smart investment for long-term business efficiency.</span></template>
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto items-start">

            <div class="relative bg-white dark:bg-slate-800 rounded-3xl p-8 border-2 border-[#ed3969] shadow-2xl transform hover:-translate-y-2 transition duration-300">
                <div class="absolute top-0 right-0 bg-[#ed3969] text-white text-xs font-bold px-4 py-1.5 rounded-bl-xl rounded-tr-2xl uppercase tracking-wider">
                    <template x-if="lang === 'id'"><span>Pilihan Terbaik</span></template>
                    <template x-if="lang === 'en'"><span>Best Choice</span></template>
                </div>

                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">
                    <template x-if="lang === 'id'"><span>Paket Promo 1 Tahun</span></template>
                    <template x-if="lang === 'en'"><span>1 Year Promo Package</span></template>
                </h3>

                <div class="mb-6">
                    <p class="text-[#ed3969] text-3xl font-extrabold">
                        Rp 3,219,000
                        <span class="text-sm text-slate-500 font-normal">
                            <template x-if="lang === 'id'"><span>/thn</span></template>
                            <template x-if="lang === 'en'"><span>/yr</span></template>
                        </span>
                    </p>
                    <p class="text-slate-400 line-through text-sm mt-1">Rp 4,262,400</p>

                    <div class="mt-3 bg-red-50 dark:bg-red-900/20 text-[#ed3969] px-3 py-2 rounded-lg text-sm font-bold inline-flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <template x-if="lang === 'id'"><span>Hemat 24%</span></template>
                        <template x-if="lang === 'en'"><span>Save 24%</span></template>
                    </div>
                </div>

                <hr class="border-slate-100 dark:border-slate-700 mb-6">

                <ul class="space-y-4 mb-8 text-slate-600 dark:text-slate-300">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <template x-if="lang === 'id'"><span>2 Akses Pengguna</span></template>
                        <template x-if="lang === 'en'"><span>2 Users Access</span></template>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <template x-if="lang === 'id'"><span>1 Data Usaha</span></template>
                        <template x-if="lang === 'en'"><span>1 Company Data</span></template>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <template x-if="lang === 'id'"><span>1 Outlet Accurate POS</span></template>
                        <template x-if="lang === 'en'"><span>1 Accurate POS Outlet</span></template>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <template x-if="lang === 'id'"><span>Gratis Coba 30 Hari</span></template>
                        <template x-if="lang === 'en'"><span>Free 30 Days Trial</span></template>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <template x-if="lang === 'id'"><span>Sudah Termasuk PPN 11%</span></template>
                        <template x-if="lang === 'en'"><span>Includes 11% VAT</span></template>
                    </li>
                </ul>

                <a href="https://wa.me/6281286369702?text=Halo%20Ratna,%20saya%20tertarik%20ambil%20Paket%20Promo%20Accurate%201%20Tahun."
                   class="block w-full bg-[#ed3969] hover:bg-[#d42d58] text-white font-bold py-4 rounded-xl text-center shadow-lg hover:shadow-red-500/30 transition-all transform hover:scale-[1.02]">
                    <template x-if="lang === 'id'"><span>Hubungi Sekarang</span></template>
                    <template x-if="lang === 'en'"><span>Contact Now</span></template>
                </a>
            </div>

            <div class="relative bg-white dark:bg-slate-800 rounded-3xl p-8 border border-slate-200 dark:border-slate-700 shadow-lg">
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">
                    <template x-if="lang === 'id'"><span>Paket Dasar 1 Tahun</span></template>
                    <template x-if="lang === 'en'"><span>1 Year Basic Package</span></template>
                </h3>

                <div class="mb-6">
                    <p class="text-slate-900 dark:text-white text-3xl font-extrabold">
                        Rp 3,996,000
                        <span class="text-sm text-slate-500 font-normal">
                            <template x-if="lang === 'id'"><span>/thn</span></template>
                            <template x-if="lang === 'en'"><span>/yr</span></template>
                        </span>
                    </p>
                    <div class="h-9 mt-3"></div> </div>

                <hr class="border-slate-100 dark:border-slate-700 mb-6">

                <ul class="space-y-4 mb-8 text-slate-600 dark:text-slate-300">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <template x-if="lang === 'id'"><span>1 Akses Pengguna</span></template>
                        <template x-if="lang === 'en'"><span>1 User Access</span></template>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <template x-if="lang === 'id'"><span>1 Data Usaha</span></template>
                        <template x-if="lang === 'en'"><span>1 Company Data</span></template>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <template x-if="lang === 'id'"><span>1 Outlet Accurate POS</span></template>
                        <template x-if="lang === 'en'"><span>1 Accurate POS Outlet</span></template>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <template x-if="lang === 'id'"><span>Gratis Coba 30 Hari</span></template>
                        <template x-if="lang === 'en'"><span>Free 30 Days Trial</span></template>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <template x-if="lang === 'id'"><span>Sudah Termasuk PPN 11%</span></template>
                        <template x-if="lang === 'en'"><span>Includes 11% VAT</span></template>
                    </li>
                </ul>

                <a href="https://accurate.id/trial/aol/?a=EDP7E5NG" target="_blank"
                   class="block w-full bg-white dark:bg-slate-700 border border-slate-300 dark:border-slate-600 text-slate-700 dark:text-white font-bold py-4 rounded-xl text-center hover:bg-slate-50 dark:hover:bg-slate-600 transition-all">
                    <template x-if="lang === 'id'"><span>Coba Gratis</span></template>
                    <template x-if="lang === 'en'"><span>Try for Free</span></template>
                </a>
            </div>

        </div>
    </div>
</section>
