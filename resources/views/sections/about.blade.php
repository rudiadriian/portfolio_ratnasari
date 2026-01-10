<section id="about" class="py-28 bg-white dark:bg-slate-900 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <div class="bg-slate-50 dark:bg-slate-800 p-10 rounded-[3rem] shadow-lg border border-slate-100 dark:border-slate-700 relative" data-aos="fade-right">
            <div class="absolute top-0 right-0 -mt-10 -mr-10 w-32 h-32 bg-[#ed3969]/10 rounded-full blur-2xl"></div>

            <h2 class="text-3xl font-bold text-[#ed3969] mb-6 relative z-10">
                <template x-if="lang === 'id'"><span>Tentang Saya</span></template>
                <template x-if="lang === 'en'"><span>About Me</span></template>
            </h2>

            <p class="mb-8 text-slate-700 dark:text-slate-300 leading-relaxed text-lg relative z-10">
                <template x-if="lang === 'id'"><span>Perkenalkan, saya <strong>Ratnasari Kusumadewi</strong>, partner resmi Accurate Online yang berdedikasi membantu transformasi digital bisnis Anda. Fokus saya adalah memastikan Anda mendapatkan solusi pembukuan yang tepat, efisien, dan mudah digunakan dari tahap awal hingga mahir.</span></template>
                <template x-if="lang === 'en'"><span>Hello, I am <strong>Ratnasari Kusumadewi</strong>, an official Accurate Online partner dedicated to helping your business digital transformation. My focus is ensuring you get the right, efficient, and easy-to-use bookkeeping solution from early stages to mastery.</span></template>
            </p>

            <ul class="space-y-4 text-slate-700 dark:text-slate-300 relative z-10 font-medium">
                <li class="flex items-center gap-4 p-3 bg-white dark:bg-slate-900/50 rounded-2xl">
                    <span class="bg-red-100 dark:bg-red-900/20 p-2 rounded-xl text-2xl">🔥</span>
                    <template x-if="lang === 'id'"><span>Konsultasi Kebutuhan Bisnis Gratis</span></template>
                    <template x-if="lang === 'en'"><span>Free Business Needs Consultation</span></template>
                </li>
                <li class="flex items-center gap-4 p-3 bg-white dark:bg-slate-900/50 rounded-2xl">
                    <span class="bg-blue-100 dark:bg-blue-900/20 p-2 rounded-xl text-2xl">⚙️</span>
                    <template x-if="lang === 'id'"><span>Pendampingan Setup & Implementasi</span></template>
                    <template x-if="lang === 'en'"><span>Setup & Implementation Assistance</span></template>
                </li>
                <li class="flex items-center gap-4 p-3 bg-white dark:bg-slate-900/50 rounded-2xl">
                    <span class="bg-green-100 dark:bg-green-900/20 p-2 rounded-xl text-2xl">🎓</span>
                    <template x-if="lang === 'id'"><span>Training Penggunaan Sampai Bisa</span></template>
                    <template x-if="lang === 'en'"><span>Training Until Mastery</span></template>
                </li>
                <li class="flex items-center gap-4 p-3 bg-white dark:bg-slate-900/50 rounded-2xl">
                    <span class="bg-purple-100 dark:bg-purple-900/20 p-2 rounded-xl text-2xl">🤝</span>
                    <template x-if="lang === 'id'"><span>Support Prioritas via WhatsApp</span></template>
                    <template x-if="lang === 'en'"><span>Priority Support via WhatsApp</span></template>
                </li>
            </ul>
        </div>

        <div class="flex justify-center relative" data-aos="fade-left">
            <div class="absolute inset-0 bg-gradient-to-tr from-[#ed3969]/30 to-purple-500/30 blur-[80px] rounded-full transform scale-110 z-0"></div>

            <div class="relative w-96 h-96 rounded-full bg-gradient-to-br from-[#ed3969] via-rose-500 to-purple-600 shadow-2xl p-[6px] z-10 group">
                 <div class="w-full h-full bg-slate-200 rounded-full overflow-hidden border-[5px] border-white dark:border-slate-800 relative">
                     <img src="{{ asset('foto_ratna.png') }}"
                          alt="Ratnasari Kusumadewi - Accurate Sales"
                          class="w-full h-full object-cover object-top transform group-hover:scale-110 transition duration-700 ease-in-out">
                 </div>
            </div>
        </div>

    </div>
</section>
