<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div>
            <div class="inline-flex items-center gap-2 bg-accurate-red/10 text-accurate-red px-4 py-2 rounded-full text-xs font-bold mb-6">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accurate-red opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-accurate-red"></span>
                </span>
                Official Sales Partner Accurate
            </div>

            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6 dark:text-white">
                <template x-if="lang === 'id'"><span>Solusi Pembukuan <span class="text-accurate-red">Cerdas.</span></span></template>
                <template x-if="lang === 'en'"><span>Smart Bookkeeping <span class="text-accurate-red">Solution.</span></span></template>
            </h1>

            <p class="text-lg text-slate-600 dark:text-slate-400 mb-10" x-text="lang === 'id' ? 'Bantu bisnis Anda tumbuh lebih cepat dengan sistem akuntansi yang rapi, otomatis, dan sesuai regulasi pajak Indonesia.' : 'Help your business grow faster with a neat, automated accounting system that complies with Indonesian tax regulations.'"></p>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="https://accurate.id/trial/aol/?a=EDP7E5NG" target="_blank" class="bg-accurate-red hover:bg-[#d42d58] text-white px-8 py-4 rounded-2xl font-bold text-center shadow-lg shadow-red-200 dark:shadow-none transition-all hover:-translate-y-1">
                    🎯 <span x-text="lang === 'id' ? 'Coba Gratis Sekarang' : 'Start Free Trial'"></span>
                </a>

                <a href="https://calendar.app.google/up4zJP5QsHt4KPsP8" target="_blank" class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-white px-8 py-4 rounded-2xl font-bold text-center hover:bg-slate-50 transition-all">
                    📆 <span x-text="lang === 'id' ? 'Jadwalkan Konsultasi' : 'Book Appointment'"></span>
                </a>
            </div>
        </div>

        <div class="relative"
             x-data="{
                activeSlide: 0,
                slides: [
                      '{{ asset('1.jpeg') }}',
                    '{{ asset('2.jpeg') }}',
                    '{{ asset('3.jpeg') }}',
                    '{{ asset('4.jpeg') }}'
                ],
                init() {
                    setInterval(() => {
                        this.activeSlide = (this.activeSlide + 1) % this.slides.length;
                    }, 3000); // Durasi 3 Detik
                }
             }">

            <div class="absolute -inset-4 bg-accurate-red/20 blur-3xl rounded-full opacity-30"></div>

            <div class="relative bg-slate-200 dark:bg-slate-800 rounded-3xl p-3 shadow-2xl border border-white/20">

                <div class="relative w-full h-[300px] md:h-[700px] rounded-2xl overflow-hidden bg-white">
                    <template x-for="(slide, index) in slides" :key="index">
                        <img :src="slide"
                             class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out"
                             :class="activeSlide === index ? 'opacity-100' : 'opacity-0'"
                             alt="Accurate Online Slide">
                    </template>
                </div>

                <div class="absolute bottom-6 left-0 right-0 flex justify-center gap-2 z-10">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="activeSlide = index"
                                class="w-2.5 h-2.5 rounded-full transition-all duration-300"
                                :class="activeSlide === index ? 'bg-accurate-red w-6' : 'bg-slate-300 dark:bg-slate-600'">
                        </button>
                    </template>
                </div>
            </div>
        </div>

    </div>
</section>
