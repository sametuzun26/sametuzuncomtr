<?php
$config = require_once __DIR__ . '/config.php';
include __DIR__ . '/includes/header.php';
?>

<div class="flex flex-col w-full">

    <!-- Hero Section (Sendit Style) -->
    <section class="relative isolate pt-8 pb-20 lg:pt-12 lg:pb-32 bg-gradient-to-b from-primary/5 via-primary/[0.02] to-white overflow-hidden">
        <!-- Subtle Sendit decorative background shapes -->
        <div class="hidden lg:block absolute top-0 left-0 -z-10 w-96 h-[600px] bg-primary/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
        <div class="absolute -top-[20%] right-0 -z-10 w-[600px] h-[600px] bg-primary/15 rounded-full blur-3xl translate-x-1/3 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <!-- Left Column: Copy & Actions -->
                <div class="lg:col-span-7 flex flex-col gap-6">
                    
                    <!-- Status Badge -->
                    <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs sm:text-sm font-bold w-fit shadow-sm">
                        <span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse"></span>
                        <span><?= htmlspecialchars($config['profile']['greeting']) ?></span>
                        <span class="text-primary/40">•</span>
                        <span class="text-gray-700 font-medium"><?= htmlspecialchars($config['site']['status_badge']) ?></span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[62px] font-extrabold text-gray-900 leading-[1.12] tracking-tight">
                        Hızlı, hafif ve <span class="text-primary">yaşayan web deneyimleri</span> inşa ediyorum.
                    </h1>

                    <!-- Lead Paragraph -->
                    <p class="text-lg sm:text-xl text-gray-600 leading-relaxed max-w-2xl">
                        <?= htmlspecialchars($config['profile']['bio']) ?>
                    </p>

                    <!-- CTAs (Sendit Signature Buttons) -->
                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="#contact-section" class="inline-flex items-center font-extrabold text-white bg-primary hover:bg-secondary border border-primary hover:border-secondary px-8 py-4 text-base sm:text-lg rounded-2xl shadow-xl shadow-primary/25 hover:shadow-2xl transition-all duration-300 gap-2 group">
                            <span>Proje Başlatalım</span>
                            <span class="material-symbols-outlined transition-transform duration-300 group-hover:translate-x-1" style="font-size: 20px;">arrow_forward</span>
                        </a>

                        <?php if (!empty($config['profile']['cv_url'])): ?>
                            <a href="<?= htmlspecialchars($config['profile']['cv_url']) ?>" target="_blank" class="inline-flex items-center font-bold text-gray-800 bg-white hover:bg-gray-50 border border-gray-200 hover:border-gray-300 px-6 py-4 text-base rounded-2xl shadow-sm hover:shadow transition-all duration-300 gap-2">
                                <span class="material-symbols-outlined text-primary" style="font-size: 20px;">description</span>
                                <span>CV İncele (PDF)</span>
                            </a>
                        <?php endif; ?>

                        <a href="#work-section" class="inline-flex items-center font-bold text-gray-600 hover:text-primary transition-colors text-base gap-1.5 py-4 px-2">
                            <span>Projeleri İncele</span>
                            <span class="material-symbols-outlined" style="font-size: 18px;">expand_more</span>
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="flex flex-wrap items-center gap-6 pt-4 text-xs font-semibold text-gray-500 border-t border-gray-200/80">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-emerald-600" style="font-size: 18px;">verified</span>
                            <span>PHP 8 &bull; MySQL &bull; Tailwind CSS</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-emerald-600" style="font-size: 18px;">speed</span>
                            <span>Google PageSpeed: 98+</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-emerald-600" style="font-size: 18px;">location_on</span>
                            <span><?= htmlspecialchars($config['site']['location']) ?></span>
                        </div>
                    </div>

                </div>

                <!-- Right Column: Interactive Profile Card Mockup -->
                <div class="lg:col-span-5 relative mt-6 lg:mt-0">
                    <div class="relative bg-white rounded-3xl p-6 sm:p-7 shadow-2xl border border-gray-100 ring-1 ring-black/5 flex flex-col card-sendit">
                        
                        <!-- Window Header Bar -->
                        <div class="flex items-center justify-between pb-4 border-b border-gray-100 mb-4">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-[#ef4444] inline-block"></span>
                                <span class="w-3 h-3 rounded-full bg-[#f59e0b] inline-block"></span>
                                <span class="w-3 h-3 rounded-full bg-[#10b981] inline-block"></span>
                            </div>
                            <div class="flex items-center gap-1.5 text-gray-500 font-code text-xs bg-gray-50 px-3 py-1 rounded-lg border border-gray-100">
                                <span class="material-symbols-outlined text-primary" style="font-size: 14px;">terminal</span>
                                <span>sametuzun.dev/profile.json</span>
                            </div>
                            <button class="text-gray-400 hover:text-primary transition-colors flex items-center p-1 rounded-lg hover:bg-gray-50" id="copy-log-btn" title="Kopyala">
                                <span class="material-symbols-outlined" style="font-size: 18px;">content_copy</span>
                            </button>
                        </div>

                        <!-- Terminal / Object Stream -->
                        <div class="font-code text-xs space-y-1.5 text-gray-600 bg-slate-900 text-slate-200 p-4 sm:p-5 rounded-2xl overflow-x-auto max-h-[320px] sm:max-h-none overflow-y-auto">
                            <p class="text-slate-400 font-bold">// Samet Uzun — Geliştirici Kartı</p>
                            <p class="text-indigo-400">const <span class="text-white">samet</span> = {</p>
                            <p class="pl-4">name: <span class="text-emerald-400">"Samet Uzun"</span>,</p>
                            <p class="pl-4">role: <span class="text-emerald-400">"Full-Stack Web Geliştirici"</span>,</p>
                            <p class="pl-4">experience: <span class="text-emerald-400">"PixelByte (Web Dev) &amp; Ar-Ge"</span>,</p>
                            <p class="pl-4">education: <span class="text-emerald-400">"MCBÜ (Mezun) &amp; Anadolu Üniv."</span>,</p>
                            <p class="pl-4">location: <span class="text-emerald-400">"Bilecik / Eskişehir (Remote)"</span>,</p>
                            <p class="pl-4">stack: [<span class="text-sky-300">"PHP 8"</span>, <span class="text-sky-300">"MySQL"</span>, <span class="text-sky-300">"Tailwind"</span>, <span class="text-sky-300">"AI Tools"</span>],</p>
                            <p class="pl-4">status: <span class="text-emerald-400">"Yeni fikirlere &amp; tanışmalara açık 🚀"</span></p>
                            <p class="text-indigo-400">};</p>
                            <div class="bg-slate-800/90 p-2.5 rounded-xl my-2 flex items-center justify-between border border-slate-700/60">
                                <span class="text-indigo-300">samet.sayHello();</span>
                                <span class="text-emerald-400 font-bold">&quot;Birlikte üretelim!&quot;</span>
                            </div>
                            <p class="text-slate-300 pt-1 flex items-center">
                                <span class="text-indigo-400 mr-1.5">samet@sametuzun:~$</span>
                                <span class="inline-block w-2 h-4 bg-primary animate-pulse"></span>
                            </p>
                        </div>

                        <!-- Terminal Footer -->
                        <div class="flex items-center justify-between pt-4 text-gray-500 font-code text-xs">
                            <span class="flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                <strong class="text-gray-800">Aktif &amp; Çevrimiçi</strong>
                            </span>
                            <span>HIZ: <strong class="text-primary">&lt;0.6sn</strong></span>
                            <span>PAGESPEED: <strong class="text-emerald-600">98+</strong></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sendit Counter / Stats Section (#counter-up) -->
    <section class="py-16 sm:py-20 bg-white border-y border-gray-100" id="counter-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-4">
                    Rakamlarla <span class="text-primary">Geliştirici Performansı</span>
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Akademik temel, PixelByte yapay zeka projeleri ve modern web mimarisiyle ölçülebilir başarı.
                </p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 text-center">
                <!-- Stat 1 -->
                <div class="p-6 sm:p-8 rounded-3xl bg-gray-50 border border-gray-100 card-sendit">
                    <div class="flex items-center justify-center text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-tight mb-2">
                        <span><?= htmlspecialchars($config['profile']['experience_years']) ?></span>
                        <span class="text-primary ml-1">Yıl</span>
                    </div>
                    <p class="text-sm sm:text-base font-semibold text-gray-800">Aktif Web &amp; Ar-Ge</p>
                    <p class="text-xs text-gray-500 mt-1">Yazılım ve üretim serüveni</p>
                </div>

                <!-- Stat 2 -->
                <div class="p-6 sm:p-8 rounded-3xl bg-gray-50 border border-gray-100 card-sendit">
                    <div class="flex items-center justify-center text-4xl sm:text-5xl font-extrabold text-primary tracking-tight mb-2">
                        <span><?= htmlspecialchars($config['profile']['completed_projects']) ?></span>
                    </div>
                    <p class="text-sm sm:text-base font-semibold text-gray-800">Tamamlanan Proje</p>
                    <p class="text-xs text-gray-500 mt-1">AI, Kurumsal &amp; E-Ticaret</p>
                </div>

                <!-- Stat 3 -->
                <div class="p-6 sm:p-8 rounded-3xl bg-gray-50 border border-gray-100 card-sendit">
                    <div class="flex items-center justify-center text-4xl sm:text-5xl font-extrabold text-emerald-600 tracking-tight mb-2">
                        <span><?= htmlspecialchars($config['profile']['speed_score']) ?></span>
                    </div>
                    <p class="text-sm sm:text-base font-semibold text-gray-800">Google PageSpeed</p>
                    <p class="text-xs text-gray-500 mt-1">Yıldırım hızında açılış süresi</p>
                </div>

                <!-- Stat 4 -->
                <div class="p-6 sm:p-8 rounded-3xl bg-gray-50 border border-gray-100 card-sendit">
                    <div class="flex items-center justify-center text-4xl sm:text-5xl font-extrabold text-secondary tracking-tight mb-2">
                        <span><?= htmlspecialchars($config['profile']['happy_clients']) ?></span>
                    </div>
                    <p class="text-sm sm:text-base font-semibold text-gray-800">Memnuniyet Oranı</p>
                    <p class="text-xs text-gray-500 mt-1">Şeffaf iletişim ve düzenli destek</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Marquee Strip -->
    <section class="w-full py-7 border-b border-gray-100 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 mb-3 flex items-center justify-between">
            <span class="text-xs font-bold text-gray-500 uppercase tracking-wider">KULLANDIĞIM TEKNOLOJİLER &amp; ARAÇLAR</span>
            <span class="hidden sm:inline-flex items-center gap-1.5 text-xs text-primary font-semibold">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                <span>Sürekli Öğrenen &amp; Optimize Eden Kod Mimarisi</span>
            </span>
        </div>
        
        <div class="mask-fade-x overflow-hidden w-full">
            <div class="animate-marquee flex items-center gap-3 py-1.5">
                <?php 
                $techBadges = [
                    ['name' => 'PHP 8.2+', 'svg' => '<svg class="w-4 h-4 text-[#777BB4] fill-current shrink-0" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-4.5 13.5H6.2l1.6-7h2.4c1.3 0 2.1.8 1.9 2-.2 1.4-1.2 2-2.3 2H8.6l-.7 3zm5.6 0H11.8l1.6-7h1.3l-.3 1.5c.5-.9 1.4-1.6 2.4-1.6 1.4 0 2 1 1.7 2.4l-1.1 4.7h-1.3l1-4.4c.2-.8-.1-1.3-.9-1.3-.8 0-1.5.7-1.8 1.8l-.9 3.9zm5.9-4.8c-.3 1.5-1.5 2.1-2.7 2.1h-1.1l-.6 2.7h-1.3l1.6-7h2.3c1.3 0 2.1.8 1.8 2.2zm-9.3-3.2l-.5 2.2h1.1c.7 0 1.2-.4 1.3-1 .1-.6-.2-1.2-1-1.2h-.9zm7.3 0l-.5 2.2h1c.7 0 1.3-.4 1.4-1 .1-.7-.2-1.2-1-1.2h-.9z"/></svg>'],
                    ['name' => 'MySQL / MariaDB', 'svg' => '<svg class="w-4 h-4 text-[#00758F] fill-current shrink-0" viewBox="0 0 24 24"><path d="M12 3C7.58 3 4 4.79 4 7v10c0 2.21 3.58 4 8 4s8-1.79 8-4V7c0-2.21-3.58-4-8-4zm0 2c3.87 0 6 1.5 6 2s-2.13 2-6 2-6-1.5-6-2 2.13-2 6-2zm-6 4.78c1.38.79 3.55 1.22 6 1.22s4.62-.43 6-1.22V12c0 .5-2.13 2-6 2s-6-1.5-6-2V9.78zm0 5c1.38.79 3.55 1.22 6 1.22s4.62-.43 6-1.22V17c0 .5-2.13 2-6 2s-6-1.5-6-2v-2.22z"/></svg>'],
                    ['name' => 'Tailwind CSS', 'svg' => '<svg class="w-4 h-4 text-[#06B6D4] fill-current shrink-0" viewBox="0 0 24 24"><path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z"/></svg>'],
                    ['name' => 'JavaScript (ES6+)', 'svg' => '<svg class="w-4 h-4 text-[#F7DF1E] fill-current shrink-0" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.63-1.514-.946-2.58-.946-1.425 0-2.476.795-2.73 1.996-.285 1.305.42 2.235 1.89 2.82.9.39 1.47.646 1.636 1.156.24.69-.27 1.126-1.275 1.126-1.066 0-1.606-.57-2.041-1.396l-1.815 1.051c.361.765.811 1.305 1.426 1.68 1.006.6 2.37.75 3.51.525 1.77-.345 2.76-1.515 2.58-3.468zm-8.851-7.261h-2.265v6.526c0 1.2-.18 1.845-.735 2.205-.555.36-1.29.345-1.785.24-.39-.105-.721-.33-.946-.645l-1.666 1.2c.45.72 1.11 1.26 1.936 1.545 1.125.39 2.58.33 3.615-.36 1.185-.795 1.846-2.146 1.846-4.186v-6.525z"/></svg>'],
                    ['name' => 'Git / GitHub', 'svg' => '<svg class="w-4 h-4 text-[#F05032] fill-current shrink-0" viewBox="0 0 24 24"><path d="M23.546 10.93L13.067.452c-.604-.603-1.582-.603-2.188 0L8.708 2.627l2.76 2.76c.645-.215 1.379-.07 1.889.441.516.515.658 1.258.438 1.9l2.658 2.66c.645-.223 1.387-.078 1.9.435.721.72.721 1.884 0 2.604-.719.719-1.881.719-2.6 0-.529-.527-.667-1.297-.414-1.954L12.79 8.922v6.574c.217.106.417.25.584.417.72.72.72 1.884 0 2.604-.719.719-1.881.719-2.6 0-.721-.72-.721-1.884 0-2.604.223-.223.494-.37.781-.447V8.877c-.287-.077-.558-.224-.781-.447-.539-.538-.672-1.325-.398-1.989L7.65 3.685.454 10.88c-.605.604-.605 1.581 0 2.186l10.481 10.481c.604.604 1.582.604 2.187 0l10.424-10.424c.606-.603.606-1.58 0-2.193z"/></svg>'],
                    ['name' => 'REST API Entegrasyonu', 'svg' => '<span class="material-symbols-outlined text-primary" style="font-size: 18px;">sync_alt</span>'],
                    ['name' => 'Sanal POS (Iyzico / PayTR)', 'svg' => '<span class="material-symbols-outlined text-emerald-600" style="font-size: 18px;">credit_card</span>'],
                    ['name' => 'Google Lighthouse 98+', 'svg' => '<span class="material-symbols-outlined text-amber-500" style="font-size: 18px;">speed</span>'],
                    ['name' => 'Plesk & Linux Sunucu', 'svg' => '<span class="material-symbols-outlined text-slate-800" style="font-size: 18px;">dns</span>'],
                    ['name' => '256-Bit SSL Güvenlik', 'svg' => '<span class="material-symbols-outlined text-primary" style="font-size: 18px;">lock</span>'],
                ];
                for ($loop = 0; $loop < 2; $loop++):
                    foreach ($techBadges as $tech):
                ?>
                    <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-gray-50 border border-gray-200/80 text-gray-800 text-xs font-bold whitespace-nowrap shadow-sm hover:scale-105 transition-transform cursor-default">
                        <?= $tech['svg'] ?>
                        <span><?= $tech['name'] ?></span>
                    </div>
                <?php 
                    endforeach;
                endfor; 
                ?>
            </div>
        </div>
    </section>

    <!-- Sendit Alternating Zig-Zag Features -> Projeler & Vaka Analizleri (#work-section) -->
    <section class="py-20 sm:py-28 bg-white" id="work-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-primary block mb-2">VAKA ANALİZLERİ &amp; PORTFOLYO</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-4">
                    Öne Çıkan <span class="text-primary">Projelerim</span>
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    PixelByte bünyesinde geliştirdiğim yapay zeka sistemleri ve sıfırdan hayata geçirdiğim yüksek hızlı web çözümleri.
                </p>

                <!-- Filter Tabs -->
                <div class="flex flex-wrap items-center justify-center gap-2 mt-8">
                    <button class="filter-tab px-5 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-primary text-white shadow-md transition-all" data-filter="all">
                        Tümü (<?= count($config['projects']) ?>)
                    </button>
                    <button class="filter-tab px-5 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-gray-100 text-gray-700 hover:bg-gray-200 transition-all" data-filter="custom">
                        Yapay Zeka &amp; Özel Yazılım
                    </button>
                    <button class="filter-tab px-5 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-gray-100 text-gray-700 hover:bg-gray-200 transition-all" data-filter="corporate">
                        Kurumsal &amp; Yönetim Paneli
                    </button>
                    <button class="filter-tab px-5 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-gray-100 text-gray-700 hover:bg-gray-200 transition-all" data-filter="ecommerce">
                        E-Ticaret &amp; POS
                    </button>
                </div>
            </div>

            <!-- Zig-Zag Projects Showcase -->
            <div class="space-y-24 sm:space-y-32">
                <?php foreach ($config['projects'] as $index => $project): 
                    $isEven = ($index % 2 === 0);
                    $projectJson = htmlspecialchars(json_encode($project, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE));
                ?>
                    <div class="project-card flex flex-col lg:flex-row items-center gap-10 lg:gap-16 <?= $isEven ? '' : 'lg:flex-row-reverse' ?>" 
                         data-category="<?= htmlspecialchars($project['category']) ?>">
                        
                        <!-- Text Side -->
                        <div class="w-full lg:w-1/2 flex flex-col gap-5">
                            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary/10 text-primary text-xs font-bold w-fit">
                                <span class="w-2 h-2 rounded-full bg-primary"></span>
                                <span><?= htmlspecialchars($project['category_label']) ?></span>
                            </div>

                            <h3 class="text-3xl sm:text-4xl font-extrabold text-gray-900 leading-tight">
                                <?= htmlspecialchars($project['title']) ?>
                            </h3>

                            <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                                <?= htmlspecialchars($project['desc']) ?>
                            </p>

                            <!-- Key Metrics Pills -->
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2">
                                <?php foreach ($project['metrics'] as $metric): ?>
                                    <div class="p-3.5 rounded-2xl bg-gray-50 border border-gray-100">
                                        <span class="text-[10px] text-gray-500 font-bold uppercase block truncate"><?= htmlspecialchars($metric['label']) ?></span>
                                        <span class="text-sm font-extrabold text-gray-900 block truncate mt-0.5"><?= htmlspecialchars($metric['val']) ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Tags -->
                            <div class="flex flex-wrap gap-2 pt-1">
                                <?php foreach ($project['tags'] as $tag): ?>
                                    <span class="px-3 py-1 rounded-lg bg-gray-100 text-gray-700 text-xs font-semibold">
                                        <?= htmlspecialchars($tag) ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>

                            <!-- CTAs -->
                            <div class="flex items-center gap-4 pt-3">
                                <button type="button" 
                                        onclick="openProjectModal(<?= $projectJson ?>)" 
                                        class="inline-flex items-center font-extrabold text-white bg-primary hover:bg-secondary px-6 py-3.5 rounded-2xl text-sm shadow-md shadow-primary/25 transition-all gap-2 group">
                                    <span>Vaka Analizini Gör</span>
                                    <span class="material-symbols-outlined transition-transform duration-200 group-hover:scale-110" style="font-size: 18px;">open_in_new</span>
                                </button>

                                <a href="#contact-section" 
                                   onclick="document.getElementById('project-notes').value = 'Merhaba Samet, portfolyondaki \'<?= htmlspecialchars(addslashes($project['title'])) ?>\' projesini inceledim, buna benzer bir çalışma üzerine konuşmak istiyorum.'; document.getElementById('project-notes').focus();" 
                                   class="inline-flex items-center font-bold text-gray-700 hover:text-primary transition-colors text-sm gap-1.5 py-3 px-2">
                                    <span>Bunu Konuşalım</span>
                                    <span class="material-symbols-outlined" style="font-size: 16px;">arrow_forward</span>
                                </a>
                            </div>
                        </div>

                        <!-- Image / Mockup Side -->
                        <div class="w-full lg:w-1/2">
                            <div class="relative group cursor-pointer" onclick="openProjectModal(<?= $projectJson ?>)">
                                <div class="rounded-3xl overflow-hidden bg-gray-100 border border-gray-200/80 shadow-2xl card-sendit relative">
                                    
                                    <!-- Browser Header Top Bar -->
                                    <div class="bg-gray-100 px-4 py-3 border-b border-gray-200/80 flex items-center justify-between gap-3">
                                        <div class="flex items-center gap-1.5">
                                            <span class="w-2.5 h-2.5 rounded-full bg-rose-400"></span>
                                            <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
                                        </div>
                                        <div class="flex-1 max-w-[260px] bg-white px-3 py-1 rounded-md text-[11px] font-code text-gray-500 flex items-center justify-center gap-1.5 border border-gray-200 truncate">
                                            <span class="material-symbols-outlined text-primary" style="font-size: 13px;">lock</span>
                                            <span class="truncate">https://<?= strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $project['category'])) ?>.sametuzun.dev</span>
                                        </div>
                                        <span class="text-[11px] font-bold text-primary">Live</span>
                                    </div>

                                    <!-- Image Preview -->
                                    <div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden">
                                        <img src="<?= htmlspecialchars($project['image']) ?>" 
                                             alt="<?= htmlspecialchars($project['title']) ?>" 
                                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                                        <div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-[2px]">
                                            <span class="px-5 py-2.5 rounded-2xl bg-white text-gray-900 font-bold text-xs shadow-xl flex items-center gap-2">
                                                <span class="material-symbols-outlined text-primary" style="font-size: 18px;">open_in_full</span>
                                                <span>Detayları İncele</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- Sendit Capabilities / Uzmanlıklar (#capabilities) -->
    <section class="py-20 sm:py-28 bg-gray-50 border-y border-gray-200/70" id="capabilities">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-primary block mb-2">YETENEKLER &amp; UZMANLIKLAR</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-4">
                    Neler <span class="text-primary">Yapabiliyorum?</span>
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Kullanıcıların keyifle gezindiği modern arayüzlerden, arkada güvenle çalışan veritabanı ve API sistemlerine kadar anahtar teslim geliştirme.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($config['capabilities'] as $cap): ?>
                    <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 card-sendit flex flex-col justify-between">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6">
                                <span class="material-symbols-outlined" style="font-size: 28px;"><?= htmlspecialchars($cap['icon']) ?></span>
                            </div>
                            <span class="text-xs font-bold text-primary uppercase tracking-wider block mb-2"><?= htmlspecialchars($cap['category']) ?></span>
                            <h3 class="text-xl font-bold text-gray-900 mb-3"><?= htmlspecialchars($cap['title']) ?></h3>
                            <p class="text-sm text-gray-600 mb-6 leading-relaxed">
                                <?= htmlspecialchars($cap['desc']) ?>
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-1.5 pt-4 border-t border-gray-100">
                            <?php foreach ($cap['tags'] as $tag): ?>
                                <span class="px-2.5 py-1 rounded-lg bg-gray-100 text-gray-700 text-xs font-semibold">
                                    <?= htmlspecialchars($tag) ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- HAKKIMDA & HİKAYEM (#about-section) -->
    <section class="py-20 sm:py-28 bg-white" id="about-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left Column: Story -->
                <div class="lg:col-span-7 flex flex-col gap-6">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-primary block mb-2">BEN KİMİM?</span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 leading-tight">
                            Hikayem, Kodlama Tutkum ve Çalışma Yaklaşımım
                        </h2>
                    </div>

                    <div class="space-y-4 text-base text-gray-600 leading-relaxed">
                        <?php foreach ($config['about']['paragraphs'] as $para): ?>
                            <p><?= htmlspecialchars($para) ?></p>
                        <?php endforeach; ?>
                    </div>

                    <!-- Personal Traits / Highlights -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-gray-100">
                        <?php foreach ($config['about']['highlights'] as $item): ?>
                            <div class="flex items-start gap-3.5 p-4 rounded-2xl bg-gray-50 border border-gray-100 card-sendit">
                                <span class="material-symbols-outlined text-primary shrink-0 mt-0.5" style="font-size: 24px;"><?= htmlspecialchars($item['icon']) ?></span>
                                <div>
                                    <h4 class="text-sm font-bold text-gray-900"><?= htmlspecialchars($item['title']) ?></h4>
                                    <p class="text-xs text-gray-500 mt-1 leading-relaxed"><?= htmlspecialchars($item['desc']) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Right Column: Profile Card & Quick Info -->
                <div class="lg:col-span-5 bg-white rounded-3xl p-7 sm:p-8 border border-gray-200/80 shadow-xl flex flex-col justify-between card-sendit">
                    <div>
                        <!-- Avatar / Initial Badge -->
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-2xl bg-primary text-white flex items-center justify-center text-2xl font-black shadow-lg shadow-primary/25">
                                SU
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900"><?= htmlspecialchars($config['profile']['name']) ?></h3>
                                <p class="text-xs text-primary font-bold uppercase tracking-wider"><?= htmlspecialchars($config['profile']['role']) ?></p>
                                <span class="inline-flex items-center gap-1.5 text-xs text-emerald-600 font-semibold mt-1">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span>Aktif &bull; Yeni Projeler Üretiyor</span>
                                </span>
                            </div>
                        </div>

                        <!-- Quick Facts -->
                        <div class="space-y-3 text-xs text-gray-600 border-y border-gray-100 py-5 my-5">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400 font-medium">Eğitim:</span>
                                <span class="text-gray-900 font-semibold">MCBÜ (Mezun) &bull; Anadolu Üniv.</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400 font-medium">Deneyim:</span>
                                <span class="text-gray-900 font-semibold">PixelByte (Web) &bull; Porland Ar-Ge</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400 font-medium">Temel:</span>
                                <span class="text-gray-900 font-semibold">Bilişim Teknolojileri / Web Tasarım</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400 font-medium">Odak Alanı:</span>
                                <span class="text-gray-900 font-semibold">Full-Stack Web &amp; Yapay Zeka</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400 font-medium">Ana Diller:</span>
                                <span class="text-primary font-bold">PHP, MySQL, JavaScript, Tailwind</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400 font-medium">Konum:</span>
                                <span class="text-gray-900 font-semibold">Bilecik / Eskişehir &bull; Remote</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400 font-medium">E-Posta:</span>
                                <a href="mailto:<?= htmlspecialchars($config['contact']['email']) ?>" class="text-primary font-semibold hover:underline"><?= htmlspecialchars($config['contact']['email']) ?></a>
                            </div>
                            <?php if (!empty($config['contact']['phone'])): ?>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400 font-medium">Telefon:</span>
                                    <a href="tel:<?= preg_replace('/[^0-9+]/', '', $config['contact']['phone']) ?>" class="text-gray-900 font-semibold hover:text-primary transition-colors"><?= htmlspecialchars($config['contact']['phone']) ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Connect Actions -->
                    <div class="space-y-3 pt-2">
                        <a href="#contact-section" class="w-full inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-2xl bg-primary hover:bg-secondary text-white text-xs font-bold transition-all shadow-md shadow-primary/20">
                            <span class="material-symbols-outlined" style="font-size: 18px;">mail</span>
                            <span>Bana Mesaj Gönder</span>
                        </a>
                        <?php if (!empty($config['profile']['cv_url'])): ?>
                            <a href="<?= htmlspecialchars($config['profile']['cv_url']) ?>" target="_blank" class="w-full inline-flex items-center justify-center gap-2 px-5 py-3 rounded-2xl bg-gray-100 hover:bg-gray-200 text-gray-800 text-xs font-bold transition-colors">
                                <span class="material-symbols-outlined text-primary" style="font-size: 18px;">description</span>
                                <span>Özgeçmişimi İndir (PDF)</span>
                            </a>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- KARİYER & DENEYİM YOLCULUĞU (#journey-section) -->
    <section class="py-20 sm:py-28 bg-gray-50 border-y border-gray-200/70" id="journey-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-primary block mb-2">GELİŞİM SÜRECİ</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-4">
                    Yazılım Serüvenim &amp; Adımlarım
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    İlk kod satırından bugüne kadar kat ettiğim mesafe, öğrendiğim teknolojiler ve odaklandığım alanlar.
                </p>
            </div>

            <div class="max-w-3xl mx-auto relative border-l-2 border-primary/30 pl-6 sm:pl-8 space-y-10 ml-4 sm:ml-auto">
                <?php foreach ($config['journey'] as $item): ?>
                    <div class="relative group">
                        <!-- Marker Dot -->
                        <div class="absolute -left-[33px] sm:-left-[41px] top-1.5 w-4 h-4 rounded-full bg-white border-2 border-primary group-hover:bg-primary transition-colors flex items-center justify-center shadow-sm">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary group-hover:bg-white"></span>
                        </div>

                        <div class="bg-white rounded-3xl p-6 sm:p-7 border border-gray-100 shadow-sm hover:shadow-lg transition-all card-sendit">
                            <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
                                <span class="px-3.5 py-1 rounded-full bg-primary/10 text-primary text-xs font-extrabold">
                                    <?= htmlspecialchars($item['period']) ?>
                                </span>
                                <span class="text-xs font-semibold text-gray-500"><?= htmlspecialchars($item['role']) ?></span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2"><?= htmlspecialchars($item['title']) ?></h3>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                                <?= htmlspecialchars($item['desc']) ?>
                            </p>
                            <div class="flex flex-wrap gap-1.5 pt-3 border-t border-gray-100">
                                <?php foreach ($item['tags'] as $tag): ?>
                                    <span class="px-2.5 py-1 rounded-md bg-gray-100 text-gray-700 text-xs font-medium">
                                        <?= htmlspecialchars($tag) ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- BİRLİKTE NELER YAPABİLİRİZ? (#collaboration-section) -->
    <section class="py-20 sm:py-28 bg-white" id="collaboration-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-primary block mb-2">İŞ BİRLİĞİ ALANLARI</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-4">
                    Birlikte Neler Yapabiliriz?
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Farklı ihtiyaçlara ve projelere esnek bir şekilde adapte olabilirim. İşte birlikte çalışabileceğimiz modeller:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($config['collaborations'] as $collab): ?>
                    <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 flex flex-col justify-between card-sendit">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-white shadow-sm border border-gray-100 text-primary flex items-center justify-center mb-6">
                                <span class="material-symbols-outlined" style="font-size: 28px;"><?= htmlspecialchars($collab['icon']) ?></span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3"><?= htmlspecialchars($collab['title']) ?></h3>
                            <p class="text-sm text-gray-600 mb-6 leading-relaxed">
                                <?= htmlspecialchars($collab['desc']) ?>
                            </p>
                        </div>

                        <div class="pt-4 border-t border-gray-200/80">
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block mb-2">Kimler İçin Uygun?</span>
                            <p class="text-xs text-gray-700 mb-4 leading-relaxed font-medium"><?= htmlspecialchars($collab['for_who']) ?></p>
                            <a href="#contact-section" 
                               onclick="document.getElementById('project-notes').value = 'Merhaba Samet, \'<?= htmlspecialchars(addslashes($collab['title'])) ?>\' konusunda seninle görüşmek istiyorum.'; document.getElementById('project-notes').focus();"
                               class="inline-flex items-center gap-1.5 text-primary hover:text-secondary font-bold text-xs transition-colors">
                                <span>Bu Konuda Yazışalım</span>
                                <span class="material-symbols-outlined" style="font-size: 16px;">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- GELİŞTİRME FELSEFEM (Neden Temiz Kod?) (#philosophy-section) -->
    <section class="py-20 sm:py-28 bg-gray-50 border-y border-gray-200/70" id="philosophy-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-primary block mb-2">GELİŞTİRİCİ FELSEFEM</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-4">
                    Neden Hazır Şablonlar Yerine <span class="text-primary">Temiz Kod?</span>
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Bir web projesinin uzun ömürlü olması, güvenliği ve hızı doğrudan arkasındaki kod mimarisine bağlıdır.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
                <!-- Left: Heavy Templates -->
                <div class="bg-rose-50/50 rounded-3xl p-8 border border-rose-200/80 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between pb-4 border-b border-rose-200/60 mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center font-bold">
                                    <span class="material-symbols-outlined" style="font-size: 24px;">warning</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900">Hazır Sistemler &amp; Ağır Eklentiler</h3>
                                    <span class="text-xs text-rose-700 font-semibold">Güvenlik Riskleri &amp; Şişkin Kod</span>
                                </div>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-rose-100 text-rose-700 text-xs font-bold uppercase">ZORLUKLAR</span>
                        </div>

                        <div class="space-y-5">
                            <?php foreach ($config['comparison'] as $item): ?>
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-rose-500 shrink-0 mt-0.5" style="font-size: 20px;">close</span>
                                    <div>
                                        <strong class="text-sm font-bold text-gray-900 block"><?= htmlspecialchars($item['title']) ?></strong>
                                        <p class="text-xs text-gray-600 mt-0.5 leading-relaxed"><?= htmlspecialchars($item['wp']) ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="mt-8 pt-4 border-t border-rose-200/60 bg-rose-100/50 -mx-8 -mb-8 p-4 rounded-b-3xl flex items-center gap-2 text-rose-800 text-xs font-semibold">
                        <span class="material-symbols-outlined shrink-0" style="font-size: 20px;">gpp_bad</span>
                        <span>Birçok web güvenlik açığı, kontrolsüz ve güncellenmeyen eklenti yığınlarından doğar.</span>
                    </div>
                </div>

                <!-- Right: Clean Architecture -->
                <div class="bg-white rounded-3xl p-8 border-2 border-primary shadow-xl shadow-primary/10 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between pb-4 border-b border-gray-100 mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center font-bold">
                                    <span class="material-symbols-outlined" style="font-size: 24px;">verified_user</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900">Özel &amp; Sade Kod Mimarisi</h3>
                                    <span class="text-xs text-emerald-600 font-semibold">Temiz, Hızlı ve Uzun Ömürlü</span>
                                </div>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold uppercase">BENİM STANDARTLARIM</span>
                        </div>

                        <div class="space-y-5">
                            <?php foreach ($config['comparison'] as $item): ?>
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-emerald-600 shrink-0 mt-0.5" style="font-size: 20px;">check_circle</span>
                                    <div>
                                        <strong class="text-sm font-bold text-gray-900 block"><?= htmlspecialchars($item['title']) ?></strong>
                                        <p class="text-xs text-gray-600 mt-0.5 leading-relaxed"><?= htmlspecialchars($item['custom']) ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="mt-8 pt-4 border-t border-gray-100 bg-emerald-50 -mx-8 -mb-8 p-4 rounded-b-3xl flex items-center gap-2 text-emerald-900 text-xs font-semibold">
                        <span class="material-symbols-outlined shrink-0 text-emerald-600" style="font-size: 20px;">bolt</span>
                        <span>Sadece gereken kodlar yazılır; sayfa &lt;0.8 saniyede açılır, kullanıcı beklemez.</span>
                    </div>
                </div>
            </div>

            <!-- Speed Benchmark Bar Chart -->
            <div class="mt-12 bg-white rounded-3xl p-8 border border-gray-200/80 shadow-sm">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
                    <div>
                        <span class="text-xs font-bold text-primary uppercase tracking-wider">HIZ VE DENEYİM</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-1">Açılış Süresi Kıyaslaması</h3>
                    </div>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-xl bg-gray-50 text-xs font-bold text-gray-600 border border-gray-200">
                        <span class="material-symbols-outlined text-emerald-600" style="font-size: 16px;">bolt</span>
                        <span>Google İdeal Web Standardı: &lt;1.2 sn</span>
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-bold text-gray-800">Hazır Şablonlar / Çok Sayıda Eklenti</span>
                            <span class="text-sm font-extrabold text-rose-600">4.8 sn <span class="text-xs text-gray-400 font-normal">(Yavaş)</span></span>
                        </div>
                        <div class="w-full h-3.5 bg-gray-100 rounded-full overflow-hidden p-0.5">
                            <div class="h-full bg-rose-500 rounded-full" style="width: 82%;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-bold text-gray-800">Samet Uzun Özel Kodlama</span>
                            <span class="text-sm font-extrabold text-emerald-600">0.6 sn <span class="text-xs text-gray-400 font-normal">(Yıldırım Hız)</span></span>
                        </div>
                        <div class="w-full h-3.5 bg-gray-100 rounded-full overflow-hidden p-0.5">
                            <div class="h-full bg-primary rounded-full shadow-sm" style="width: 14%;"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Sendit Testimonials Section (Signature Black & White Contrast) (#testimonials-section) -->
    <section class="py-16 sm:py-24 bg-slate-950 text-white" id="testimonials-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-primary block mb-2">REFERANSLAR &amp; GERİ BİLDİRİMLER</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">
                    Güven &amp; İş Birliğiyle <span class="text-primary">Gelişen Projeler</span>
                </h2>
                <p class="text-slate-400 text-lg leading-relaxed">
                    Birlikte çalıştığımız ortaklarımızın deneyimleri ve proje çıktıları üzerine değerlendirmeleri.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($config['testimonials'] as $t): ?>
                    <div class="bg-white text-gray-900 rounded-3xl p-8 shadow-xl flex flex-col justify-between card-sendit">
                        <div class="space-y-4">
                            <div class="flex items-center gap-1 text-amber-400">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <span class="material-symbols-outlined" style="font-size: 20px;">star</span>
                                <?php endfor; ?>
                            </div>
                            <p class="text-gray-700 text-sm leading-relaxed italic">
                                &ldquo;<?= htmlspecialchars($t['quote']) ?>&rdquo;
                            </p>
                        </div>
                        <div class="pt-6 border-t border-gray-100 flex items-center gap-3.5 mt-6">
                            <div class="w-11 h-11 rounded-2xl bg-primary/10 text-primary font-black flex items-center justify-center text-sm">
                                <?= htmlspecialchars($t['initials']) ?>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900"><?= htmlspecialchars($t['author']) ?></h4>
                                <p class="text-xs text-gray-500"><?= htmlspecialchars($t['title']) ?></p>
                                <span class="text-[10px] font-bold text-primary"><?= htmlspecialchars($t['tag']) ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Merak Edilenler (FAQ) (#faq-section) -->
    <section class="py-20 sm:py-28 bg-white" id="faq-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-primary block mb-2">SORULAR &amp; CEVAPLAR</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 leading-tight mb-4">
                    Merak Edilenler
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Çalışma prensiplerim ve süreç hakkında aklınıza takılabilecek konular.
                </p>
            </div>

            <div class="max-w-3xl mx-auto space-y-4">
                <?php foreach ($config['faq'] as $index => $item): ?>
                    <div class="bg-gray-50 rounded-2xl border border-gray-200/80 overflow-hidden transition-colors">
                        <button type="button" class="faq-toggle w-full px-6 py-4 text-left flex items-center justify-between gap-4 font-bold text-base text-gray-900 hover:text-primary transition-colors" data-target="faq-<?= $index ?>">
                            <span><?= htmlspecialchars($item['q']) ?></span>
                            <span class="faq-icon material-symbols-outlined text-gray-400 transition-transform duration-200" style="font-size: 22px;">expand_more</span>
                        </button>
                        <div id="faq-<?= $index ?>" class="faq-content hidden px-6 pb-5 pt-1 text-sm text-gray-600 leading-relaxed border-t border-gray-200/60">
                            <?= htmlspecialchars($item['a']) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Sendit Style Contact Section & Form (#contact-section) -->
    <section class="py-20 sm:py-28 bg-gray-50 border-t border-gray-200/70" id="contact-section">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-3xl p-8 sm:p-12 shadow-2xl border border-gray-100">
                
                <!-- Section Header -->
                <div class="flex flex-col md:flex-row md:items-start justify-between gap-6 mb-10 pb-8 border-b border-gray-100">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold mb-2">
                            <span class="material-symbols-outlined" style="font-size: 16px;">coffee</span>
                            <span>BİR MERHABA DEYİN</span>
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900">
                            Birlikte Bir Şeyler Üretelim
                        </h2>
                        <p class="text-gray-600 text-sm sm:text-base mt-2 max-w-xl leading-relaxed">
                            Aklınızda bir web projesi mi var, ekibinize bir geliştirici mi arıyorsunuz ya da yazılım üzerine konuşmak mı istersiniz? Çekinmeden yazın, tanışmaktan mutluluk duyarım!
                        </p>
                    </div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold whitespace-nowrap self-start">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>Ortalama 2 Saat İçinde Yanıt</span>
                    </div>
                </div>

                <!-- Form -->
                <form class="space-y-6" id="project-engagement-form">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-2 uppercase tracking-wider" for="client-name">Adınız Soyadınız *</label>
                            <input class="w-full bg-gray-50 border border-gray-200 px-4 py-3.5 rounded-2xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:bg-white transition-all" id="client-name" name="name" placeholder="Örn: Ahmet Yılmaz" required="" type="text"/>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-2 uppercase tracking-wider" for="client-email">E-posta Adresiniz *</label>
                            <input class="w-full bg-gray-50 border border-gray-200 px-4 py-3.5 rounded-2xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:bg-white transition-all" id="client-email" name="email" placeholder="ahmet@example.com" required="" type="email"/>
                        </div>
                    </div>

                    <!-- Konu Seçimi (Friendly Subject Selection) -->
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-2 uppercase tracking-wider">Görüşmek İstediğiniz Konu</label>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <label class="flex items-center gap-3 bg-gray-50 border border-gray-200 p-3.5 rounded-2xl cursor-pointer hover:bg-gray-100 transition-colors">
                                <input checked="" class="accent-primary" name="scope" type="radio" value="Yeni Bir Web Projesi"/>
                                <span class="text-xs font-bold text-gray-800">Yeni Bir Proje</span>
                            </label>
                            <label class="flex items-center gap-3 bg-gray-50 border border-gray-200 p-3.5 rounded-2xl cursor-pointer hover:bg-gray-100 transition-colors">
                                <input class="accent-primary" name="scope" type="radio" value="Ekip &amp; İş Teklifi"/>
                                <span class="text-xs font-bold text-gray-800">Ekip / İş Teklifi</span>
                            </label>
                            <label class="flex items-center gap-3 bg-gray-50 border border-gray-200 p-3.5 rounded-2xl cursor-pointer hover:bg-gray-100 transition-colors">
                                <input class="accent-primary" name="scope" type="radio" value="Sadece Merhaba &amp; Sohbet"/>
                                <span class="text-xs font-bold text-gray-800">Tanışma &amp; Sohbet ☕</span>
                            </label>
                        </div>
                    </div>

                    <!-- Notes / Mesaj -->
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-2 uppercase tracking-wider" for="project-notes">Mesajınız *</label>
                        <textarea class="w-full bg-gray-50 border border-gray-200 px-4 py-3.5 rounded-2xl text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:bg-white transition-all" id="project-notes" name="notes" placeholder="Aklınızdaki fikri, projeyi veya sormak istediğiniz herhangi bir şeyi yazabilirsiniz..." required="" rows="4"></textarea>
                    </div>

                    <!-- Actions Bar -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-2">
                        <div class="flex items-center gap-2 text-gray-500 text-xs">
                            <span class="material-symbols-outlined text-emerald-600" style="font-size: 18px;">lock</span>
                            <span>Mesajınız doğrudan güvenli gelen kutuma iletilir.</span>
                        </div>
                        <button id="submit-form-btn" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-2xl bg-primary hover:bg-secondary text-white text-sm font-extrabold transition-all shadow-xl shadow-primary/25 hover:shadow-2xl" type="submit">
                            <span>Mesajı Gönder</span>
                            <span class="material-symbols-outlined" style="font-size: 18px;">send</span>
                        </button>
                    </div>

                    <!-- Feedback Banner -->
                    <div class="hidden" id="form-feedback">
                        <span class="material-symbols-outlined" style="font-size: 20px;">info</span>
                        <span id="feedback-text"></span>
                    </div>
                </form>

            </div>
        </div>
    </section>

</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
