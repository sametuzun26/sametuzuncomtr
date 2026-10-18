<?php
$config = require_once __DIR__ . '/config.php';
include __DIR__ . '/includes/header.php';
?>

<div class="flex flex-col w-full overflow-hidden">

    <!-- 1. HERO SECTION (Gradia Centered Studio Hero with Signature Background & 3D Badges) -->
    <section class="relative isolate pt-12 pb-20 lg:pt-16 lg:pb-28 overflow-hidden">

        <!-- Floating 3D Avatar Badges & Sparkle Stars (Gradia Signature Elements) -->
        <div class="absolute inset-0 max-w-6xl mx-auto pointer-events-none overflow-hidden select-none">
            <!-- Top-Left: Cyan 3D Triangle Avatar (Boy in Blue Hat) -->
            <div class="hidden md:block absolute left-4 lg:left-8 top-12 lg:top-16 w-18 lg:w-24 animate-float-slow drop-shadow-[0_15px_30px_rgba(139,89,255,0.18)]">
                <img src="assets/gradia/fT9gIH7gHsDqfRtIIXheXASlNLk.png" alt="3D Avatar Boy" class="w-full h-auto"/>
            </div>

            <!-- Bottom-Left: Yellow 3D Triangle Avatar (Girl in Yellow Beanie) -->
            <div class="hidden md:block absolute left-6 lg:left-12 bottom-12 lg:bottom-16 w-18 lg:w-24 animate-float-reverse drop-shadow-[0_15px_30px_rgba(255,243,74,0.22)]">
                <img src="assets/gradia/unCyvpfgMvwv2pdTkmL0DIUjSek.png" alt="3D Avatar Beanie" class="w-full h-auto"/>
            </div>

            <!-- Top-Right: Coral 3D Squircle Avatar (Woman in Red Hat) -->
            <div class="hidden md:block absolute right-4 lg:right-8 top-10 lg:top-14 w-18 lg:w-24 animate-float-delayed drop-shadow-[0_15px_30px_rgba(255,100,100,0.2)]">
                <img src="assets/gradia/BRzEQ7WwS3yelo8v0KOTXFPZGo.png" alt="3D Avatar Red Hat" class="w-full h-auto"/>
            </div>

            <!-- Bottom-Right: Teal 3D Tilted Diamond Avatar (Woman with Sunglasses) -->
            <div class="hidden md:block absolute right-6 lg:right-12 bottom-10 lg:bottom-14 w-18 lg:w-24 animate-float-slow drop-shadow-[0_15px_30px_rgba(6,182,212,0.22)]">
                <img src="assets/gradia/i5grOIYyMVOOXLc1bblf9pICi28.png" alt="3D Avatar Sunglasses" class="w-full h-auto"/>
            </div>

            <!-- Floating 4-Point Pastel Sparkle Stars -->
            <!-- Star 1: Cyan/Blue (Left) -->
            <div class="hidden sm:block absolute left-[18%] lg:left-[20%] top-[34%] w-6 h-6 text-sky-400 animate-sparkle">
                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                    <path d="M 12 0 Q 12 12 0 12 Q 12 12 12 24 Q 12 12 24 12 Q 12 12 12 0 Z"/>
                </svg>
            </div>

            <!-- Star 2: Yellow/Gold (Right) -->
            <div class="hidden sm:block absolute right-[18%] lg:right-[22%] top-[46%] w-7 h-7 text-amber-300 animate-sparkle" style="animation-delay: 1.5s;">
                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                    <path d="M 12 0 Q 12 12 0 12 Q 12 12 12 24 Q 12 12 24 12 Q 12 12 12 0 Z"/>
                </svg>
            </div>

            <!-- Star 3: Soft Violet (Bottom-Left) -->
            <div class="hidden sm:block absolute left-[26%] bottom-[24%] w-5 h-5 text-purple-300 animate-sparkle" style="animation-delay: 0.8s;">
                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                    <path d="M 12 0 Q 12 12 0 12 Q 12 12 12 24 Q 12 12 24 12 Q 12 12 12 0 Z"/>
                </svg>
            </div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex flex-col items-center">
            
            <!-- Centered Pill Badge (Gradia Signature Style) -->
            <div class="inline-flex items-center gap-2 px-3.5 sm:px-4 py-1.5 rounded-full bg-[#fcf5ff] border border-purple-200/70 shadow-[inset_0px_0px_6px_0px_rgba(193,78,243,0.3)] backdrop-blur-md mb-6 max-w-full">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse shrink-0"></span>
                <span class="text-[10px] sm:text-xs font-bold text-[#791d9c] tracking-wide uppercase text-center leading-tight"><?= htmlspecialchars($config['profile']['role']) ?></span>
            </div>

            <!-- Centered Main Headline -->
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[66px] font-extrabold text-secondary leading-[1.14] tracking-tight max-w-3xl">
                Fikirleri yaşayan, hızlı ve <span class="bg-gradient-to-r from-[#8b59ff] via-[#c14ef3] to-[#5921b2] bg-clip-text text-transparent">keyifli web deneyimlerine</span> dönüştürüyorum.
            </h1>

            <!-- Centered Subtitle -->
            <p class="text-base sm:text-lg text-muted mt-5 max-w-2xl leading-relaxed">
                <?= htmlspecialchars($config['profile']['bio']) ?>
            </p>

            <!-- Centered Action Buttons (Gradia Pill Style) -->
            <div class="flex flex-wrap items-center justify-center gap-3.5 mt-8">
                <a href="#work-section" class="px-7 py-3.5 rounded-full bg-white/90 hover:bg-white text-secondary font-bold text-sm shadow-md border border-purple-100/90 hover:border-primary/40 hover:scale-105 active:scale-95 transition-all">
                    <span>Çalışmalarım</span>
                </a>

                <a href="#contact-section" class="px-7 py-3.5 rounded-full bg-gradient-to-r from-primary to-primary-dark hover:from-primary-dark hover:to-primary text-white font-bold text-sm shadow-lg shadow-primary/25 hover:shadow-xl hover:scale-105 active:scale-95 transition-all inline-flex items-center gap-2 group">
                    <span>Projeyi Başlatalım</span>
                    <span class="material-symbols-outlined transition-transform duration-200 group-hover:translate-x-1" style="font-size: 18px;">arrow_forward</span>
                </a>

                <?php if (!empty($config['profile']['cv_url'])): ?>
                    <a href="<?= htmlspecialchars($config['profile']['cv_url']) ?>" target="_blank" class="px-6 py-3.5 rounded-full bg-primary-tint hover:bg-primary-light text-secondary font-bold text-sm border border-purple-100 hover:border-primary/40 transition-all inline-flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-primary" style="font-size: 18px;">description</span>
                        <span>CV İncele</span>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Trust & Academic Credentials Strip -->
            <div class="flex flex-wrap items-center justify-center gap-2.5 sm:gap-6 mt-10 pt-6 border-t border-purple-100/80 text-[11px] sm:text-xs font-semibold text-muted">
                <div class="flex items-center gap-1.5 shrink-0">
                    <span class="material-symbols-outlined text-primary" style="font-size: 16px;">school</span>
                    <span>MCBÜ Mezun &bull; Anadolu Üniv.</span>
                </div>
                <div class="flex items-center gap-1.5 shrink-0">
                    <span class="material-symbols-outlined text-primary" style="font-size: 16px;">psychology</span>
                    <span>PixelByte (Borsify &bull; Pixcode AI)</span>
                </div>
                <div class="flex items-center gap-1.5 shrink-0">
                    <span class="material-symbols-outlined text-primary" style="font-size: 16px;">analytics</span>
                    <span>Porland Ar-Ge Süreçleri</span>
                </div>
                <div class="flex items-center gap-1.5 shrink-0">
                    <span class="material-symbols-outlined text-emerald-600" style="font-size: 16px;">speed</span>
                    <span>Google PageSpeed: 98+</span>
                </div>
            </div>

            <!-- Interactive Studio Terminal Frame Mockup (Clean Showcase) -->
            <div class="w-full max-w-2xl mt-12 text-left">
                <div class="bg-white/95 backdrop-blur-xl rounded-[28px] sm:rounded-[32px] p-4 sm:p-7 shadow-[0_20px_50px_rgba(139,89,255,0.08)] border border-purple-100/90 card-gradia flex flex-col">
                    
                    <!-- Header Bar with Traffic Lights -->
                    <div class="flex items-center justify-between pb-3.5 sm:pb-4 border-b border-purple-50 mb-4 gap-2">
                        <div class="flex items-center gap-1.5 sm:gap-2 shrink-0">
                            <span class="w-2.5 sm:w-3 h-2.5 sm:h-3 rounded-full bg-[#ef4444] inline-block"></span>
                            <span class="w-2.5 sm:w-3 h-2.5 sm:h-3 rounded-full bg-[#f59e0b] inline-block"></span>
                            <span class="w-2.5 sm:w-3 h-2.5 sm:h-3 rounded-full bg-[#10b981] inline-block"></span>
                        </div>
                        <div class="flex items-center gap-1.5 text-muted font-code text-[11px] sm:text-xs bg-primary-tint px-2.5 sm:px-3 py-1 rounded-full border border-purple-100 max-w-[190px] sm:max-w-none truncate">
                            <span class="material-symbols-outlined text-primary shrink-0" style="font-size: 14px;">terminal</span>
                            <span class="truncate">sametuzun.com.tr/profile.json</span>
                        </div>
                        <button class="text-muted hover:text-primary transition-colors flex items-center p-1.5 rounded-full hover:bg-primary-tint shrink-0" id="copy-log-btn" title="Kopyala">
                            <span class="material-symbols-outlined" style="font-size: 18px;">content_copy</span>
                        </button>
                    </div>

                    <!-- Terminal Window Body -->
                    <div class="font-code text-xs space-y-1.5 bg-[#171924] text-slate-200 p-4 sm:p-5 rounded-[20px] sm:rounded-[22px] overflow-x-auto max-h-[300px] sm:max-h-none overflow-y-auto shadow-inner border border-slate-800">
                        <p class="text-purple-300 font-bold">// Samet Uzun — Geliştirici Kartı</p>
                        <p class="text-purple-400">const <span class="text-white">samet</span> = {</p>
                        <p class="pl-3 sm:pl-4">name: <span class="text-[#e2ff3b]">"Samet Uzun"</span>,</p>
                        <p class="pl-3 sm:pl-4">role: <span class="text-emerald-400">"Full-Stack Web Geliştirici"</span>,</p>
                        <p class="pl-3 sm:pl-4">experience: <span class="text-emerald-400">"PixelByte (Web Dev) &amp; Ar-Ge"</span>,</p>
                        <p class="pl-3 sm:pl-4">education: <span class="text-emerald-400">"MCBÜ (Mezun) &amp; Anadolu Üniv."</span>,</p>
                        <p class="pl-3 sm:pl-4">location: <span class="text-emerald-400">"Bilecik / Eskişehir (Remote)"</span>,</p>
                        <p class="pl-3 sm:pl-4">stack: [<span class="text-sky-300">"PHP 8"</span>, <span class="text-sky-300">"MySQL"</span>, <span class="text-sky-300">"Tailwind"</span>, <span class="text-sky-300">"AI Tools"</span>],</p>
                        <p class="pl-3 sm:pl-4">status: <span class="text-[#e2ff3b]">"Yeni fikirlere &amp; tanışmalara açık 🚀"</span></p>
                        <p class="text-purple-400">};</p>
                        <div class="bg-slate-800/90 p-2 sm:p-2.5 rounded-xl my-2 flex flex-col sm:flex-row sm:items-center justify-between gap-1 border border-slate-700/60">
                            <span class="text-purple-300">samet.sayHello();</span>
                            <span class="text-[#e2ff3b] font-bold">&quot;Birlikte üretelim!&quot;</span>
                        </div>
                        <p class="text-slate-300 pt-1 flex items-center">
                            <span class="text-primary mr-1.5">samet@sametuzun:~$</span>
                            <span class="inline-block w-2 h-4 bg-primary animate-pulse"></span>
                        </p>
                    </div>

                    <!-- Card Footer -->
                    <div class="flex flex-wrap items-center justify-between gap-2.5 pt-4 text-muted font-code text-[11px] sm:text-xs">
                        <span class="flex items-center gap-1.5 shrink-0">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            <strong class="text-secondary">Aktif &amp; Çevrimiçi</strong>
                        </span>
                        <span class="shrink-0">HIZ: <strong class="text-primary">&lt;0.6sn</strong></span>
                        <span class="shrink-0">PAGESPEED: <strong class="text-emerald-600">98+</strong></span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 2. TECH STACK MARQUEE STRIP -->
    <section class="w-full max-w-full py-6 border-y border-purple-100/80 bg-white/70 backdrop-blur-md overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 mb-3 flex items-center justify-between">
            <span class="text-xs font-bold text-muted uppercase tracking-wider">KULLANDIĞIM TEKNOLOJİLER &amp; ARAÇLAR</span>
            <span class="hidden sm:inline-flex items-center gap-1.5 text-xs text-primary font-semibold">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                <span>Sürekli Öğrenen &amp; Optimize Eden Kod Mimarisi</span>
            </span>
        </div>
        
        <div class="mask-fade-x overflow-hidden w-full max-w-full" style="contain: paint;">
            <div class="animate-marquee flex items-center gap-3 py-1.5">
                <?php 
                $techBadges = [
                    ['name' => 'PHP 8.2+', 'svg' => '<svg class="w-4 h-4 text-[#8b59ff] fill-current shrink-0" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-4.5 13.5H6.2l1.6-7h2.4c1.3 0 2.1.8 1.9 2-.2 1.4-1.2 2-2.3 2H8.6l-.7 3zm5.6 0H11.8l1.6-7h1.3l-.3 1.5c.5-.9 1.4-1.6 2.4-1.6 1.4 0 2 1 1.7 2.4l-1.1 4.7h-1.3l1-4.4c.2-.8-.1-1.3-.9-1.3-.8 0-1.5.7-1.8 1.8l-.9 3.9zm5.9-4.8c-.3 1.5-1.5 2.1-2.7 2.1h-1.1l-.6 2.7h-1.3l1.6-7h2.3c1.3 0 2.1.8 1.8 2.2zm-9.3-3.2l-.5 2.2h1.1c.7 0 1.2-.4 1.3-1 .1-.6-.2-1.2-1-1.2h-.9zm7.3 0l-.5 2.2h1c.7 0 1.3-.4 1.4-1 .1-.7-.2-1.2-1-1.2h-.9z"/></svg>'],
                    ['name' => 'MySQL / MariaDB', 'svg' => '<svg class="w-4 h-4 text-[#00758F] fill-current shrink-0" viewBox="0 0 24 24"><path d="M12 3C7.58 3 4 4.79 4 7v10c0 2.21 3.58 4 8 4s8-1.79 8-4V7c0-2.21-3.58-4-8-4zm0 2c3.87 0 6 1.5 6 2s-2.13 2-6 2-6-1.5-6-2 2.13-2 6-2zm-6 4.78c1.38.79 3.55 1.22 6 1.22s4.62-.43 6-1.22V12c0 .5-2.13 2-6 2s-6-1.5-6-2V9.78zm0 5c1.38.79 3.55 1.22 6 1.22s4.62-.43 6-1.22V17c0 .5-2.13 2-6 2s-6-1.5-6-2v-2.22z"/></svg>'],
                    ['name' => 'Tailwind CSS', 'svg' => '<svg class="w-4 h-4 text-[#06B6D4] fill-current shrink-0" viewBox="0 0 24 24"><path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z"/></svg>'],
                    ['name' => 'JavaScript (ES6+)', 'svg' => '<svg class="w-4 h-4 text-[#F7DF1E] fill-current shrink-0" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.63-1.514-.946-2.58-.946-1.425 0-2.476.795-2.73 1.996-.285 1.305.42 2.235 1.89 2.82.9.39 1.47.646 1.636 1.156.24.69-.27 1.126-1.275 1.126-1.066 0-1.606-.57-2.041-1.396l-1.815 1.051c.361.765.811 1.305 1.426 1.68 1.006.6 2.37.75 3.51.525 1.77-.345 2.76-1.515 2.58-3.468zm-8.851-7.261h-2.265v6.526c0 1.2-.18 1.845-.735 2.205-.555.36-1.29.345-1.785.24-.39-.105-.721-.33-.946-.645l-1.666 1.2c.45.72 1.11 1.26 1.936 1.545 1.125.39 2.58.33 3.615-.36 1.185-.795 1.846-2.146 1.846-4.186v-6.525z"/></svg>'],
                    ['name' => 'Git / GitHub', 'svg' => '<svg class="w-4 h-4 text-[#F05032] fill-current shrink-0" viewBox="0 0 24 24"><path d="M23.546 10.93L13.067.452c-.604-.603-1.582-.603-2.188 0L8.708 2.627l2.76 2.76c.645-.215 1.379-.07 1.889.441.516.515.658 1.258.438 1.9l2.658 2.66c.645-.223 1.387-.078 1.9.435.721.72.721 1.884 0 2.604-.719.719-1.881.719-2.6 0-.529-.527-.667-1.297-.414-1.954L12.79 8.922v6.574c.217.106.417.25.584.417.72.72.72 1.884 0 2.604-.719.719-1.881.719-2.6 0-.721-.72-.721-1.884 0-2.604.223-.223.494-.37.781-.447V8.877c-.287-.077-.558-.224-.781-.447-.539-.538-.672-1.325-.398-1.989L7.65 3.685.454 10.88c-.605.604-.605 1.581 0 2.186l10.481 10.481c.604.604 1.582.604 2.187 0l10.424-10.424c.606-.603.606-1.58 0-2.193z"/></svg>'],
                    ['name' => 'REST API Entegrasyonu', 'svg' => '<span class="material-symbols-outlined text-primary" style="font-size: 18px;">sync_alt</span>'],
                    ['name' => 'Sanal POS (Iyzico / PayTR)', 'svg' => '<span class="material-symbols-outlined text-primary" style="font-size: 18px;">credit_card</span>'],
                    ['name' => 'Google Lighthouse 98+', 'svg' => '<span class="material-symbols-outlined text-amber-500" style="font-size: 18px;">speed</span>'],
                    ['name' => 'Plesk & Linux Sunucu', 'svg' => '<span class="material-symbols-outlined text-secondary" style="font-size: 18px;">dns</span>'],
                    ['name' => '256-Bit SSL Güvenlik', 'svg' => '<span class="material-symbols-outlined text-primary" style="font-size: 18px;">lock</span>'],
                ];
                for ($loop = 0; $loop < 2; $loop++):
                    foreach ($techBadges as $tech):
                ?>
                    <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-purple-100 text-secondary text-xs font-bold whitespace-nowrap shadow-sm hover:scale-105 transition-transform cursor-default">
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

    <!-- 4. CAPABILITIES / UZMANLIKLAR (Gradia Signature 3 Colorful Cards) -->
    <section class="py-20 sm:py-28" id="capabilities">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="px-3.5 py-1 rounded-full bg-primary-tint text-primary text-xs font-bold tracking-wider uppercase mb-2 inline-block">YETENEKLER &amp; UZMANLIKLAR</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-secondary tracking-tight">
                    Neler <span class="text-primary">Yapabiliyorum?</span>
                </h2>
                <p class="text-muted text-base mt-2">
                    Kullanıcıların keyifle gezindiği modern arayüzlerden, arkada güvenle çalışan veritabanı ve API sistemlerine kadar anahtar teslim geliştirme.
                </p>
            </div>

            <!-- Gradia 3 Colorful Cards Grid (Peach, Cyan, Lavender) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 items-stretch">
                
                <!-- CARD 1: Brand / UI (Peach & Coral Gradient + 3D Megaphone) -->
                <div class="rounded-[32px] p-7 sm:p-8 relative overflow-hidden flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl border border-[#fed8ce]"
                     style="background: linear-gradient(135deg, rgba(255, 243, 238, 0.95) 0%, rgba(255, 228, 220, 0.85) 100%); box-shadow: 0 20px 40px -15px rgba(251, 146, 60, 0.15);">
                    
                    <!-- 3D Illustration at Top Right -->
                    <div class="absolute -top-2 -right-2 sm:-top-3 sm:-right-3 w-28 sm:w-32 lg:w-36 pointer-events-none drop-shadow-[0_12px_24px_rgba(251,146,60,0.22)] animate-float-slow select-none">
                        <img src="assets/gradia/c9X6m6XNRqJ0Lq3CggfI2agDV38.png" alt="Frontend UI 3D" class="w-full h-auto"/>
                    </div>

                    <div>
                        <span class="text-[11px] font-bold text-orange-600 uppercase tracking-wider block mb-1">ARAYÜZ &amp; DENEYİM</span>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-secondary tracking-tight mb-5 pr-14">Brand &amp; UI</h3>

                        <!-- Checklist -->
                        <div class="space-y-3 text-xs sm:text-sm font-semibold text-secondary/90 mb-6">
                            <div class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-orange-500/15 text-orange-600 flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                                </span>
                                <span>Responsive &amp; Mobil Öncelikli</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-orange-500/15 text-orange-600 flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                                </span>
                                <span>Tailwind CSS &amp; Modern JavaScript</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-orange-500/15 text-orange-600 flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                                </span>
                                <span>Kullanıcı Deneyimi &amp; UI Tasarım</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-orange-500/15 text-orange-600 flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                                </span>
                                <span>Akıcı &amp; Şık Animasyonlar</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="flex flex-wrap gap-1.5 pt-4 border-t border-orange-200/60 mt-auto">
                        <span class="px-2.5 py-1 rounded-full bg-white/70 text-orange-900 text-xs font-semibold border border-orange-200/60">HTML5/CSS3</span>
                        <span class="px-2.5 py-1 rounded-full bg-white/70 text-orange-900 text-xs font-semibold border border-orange-200/60">JavaScript (ES6+)</span>
                        <span class="px-2.5 py-1 rounded-full bg-white/70 text-orange-900 text-xs font-semibold border border-orange-200/60">Tailwind CSS</span>
                        <span class="px-2.5 py-1 rounded-full bg-white/70 text-orange-900 text-xs font-semibold border border-orange-200/60">Responsive UI</span>
                    </div>
                </div>

                <!-- CARD 2: 3D / Backend (Cyan & Mint Gradient + 3D Podium) -->
                <div class="rounded-[32px] p-7 sm:p-8 relative overflow-hidden flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl border border-[#c2f2ec]"
                     style="background: linear-gradient(135deg, rgba(234, 251, 249, 0.95) 0%, rgba(216, 248, 244, 0.85) 100%); box-shadow: 0 20px 40px -15px rgba(20, 184, 166, 0.15);">
                    
                    <!-- 3D Illustration at Top Right -->
                    <div class="absolute -top-2 -right-2 sm:-top-3 sm:-right-3 w-28 sm:w-32 lg:w-36 pointer-events-none drop-shadow-[0_12px_24px_rgba(20,184,166,0.22)] animate-float-delayed select-none">
                        <img src="assets/gradia/hlHUPvreygsH7y3wseIjszBmsr8.png" alt="Backend 3D" class="w-full h-auto"/>
                    </div>

                    <div>
                        <span class="text-[11px] font-bold text-teal-600 uppercase tracking-wider block mb-1">BACKEND &amp; MİMARİ</span>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-secondary tracking-tight mb-5 pr-14">PHP &amp; API</h3>

                        <!-- Checklist -->
                        <div class="space-y-3 text-xs sm:text-sm font-semibold text-secondary/90 mb-6">
                            <div class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-teal-500/15 text-teal-600 flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                                </span>
                                <span>PHP 8+ Nesne Yönelimli Kod</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-teal-500/15 text-teal-600 flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                                </span>
                                <span>Güvenli &amp; Optimize MySQL</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-teal-500/15 text-teal-600 flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                                </span>
                                <span>Özel Yönetim Paneli (CMS)</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-teal-500/15 text-teal-600 flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                                </span>
                                <span>REST API Entegrasyonları</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="flex flex-wrap gap-1.5 pt-4 border-t border-teal-200/60 mt-auto">
                        <span class="px-2.5 py-1 rounded-full bg-white/70 text-teal-900 text-xs font-semibold border border-teal-200/60">PHP 8+</span>
                        <span class="px-2.5 py-1 rounded-full bg-white/70 text-teal-900 text-xs font-semibold border border-teal-200/60">MySQL</span>
                        <span class="px-2.5 py-1 rounded-full bg-white/70 text-teal-900 text-xs font-semibold border border-teal-200/60">Yönetim Paneli</span>
                        <span class="px-2.5 py-1 rounded-full bg-white/70 text-teal-900 text-xs font-semibold border border-teal-200/60">REST API</span>
                    </div>
                </div>

                <!-- CARD 3: Dev / SEO (Lavender & Purple Gradient + 3D Laptop) -->
                <div class="rounded-[32px] p-7 sm:p-8 relative overflow-hidden flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl border border-[#ddd0ff]"
                     style="background: linear-gradient(135deg, rgba(245, 240, 255, 0.95) 0%, rgba(234, 226, 255, 0.85) 100%); box-shadow: 0 20px 40px -15px rgba(139, 89, 255, 0.18);">
                    
                    <!-- 3D Illustration at Top Right -->
                    <div class="absolute -top-2 -right-2 sm:-top-3 sm:-right-3 w-28 sm:w-32 lg:w-36 pointer-events-none drop-shadow-[0_12px_24px_rgba(139,89,255,0.22)] animate-float-reverse select-none">
                        <img src="assets/gradia/oXfETJzmknjqePHhf1ntaeHIRmI.png" alt="Dev 3D Laptop" class="w-full h-auto"/>
                    </div>

                    <div>
                        <span class="text-[11px] font-bold text-primary uppercase tracking-wider block mb-1">PERFORMANS &amp; HIZ</span>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-secondary tracking-tight mb-5 pr-14">Dev &amp; SEO</h3>

                        <!-- Checklist -->
                        <div class="space-y-3 text-xs sm:text-sm font-semibold text-secondary/90 mb-6">
                            <div class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-primary/15 text-primary flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                                </span>
                                <span>Google PageSpeed 98+ Puanı</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-primary/15 text-primary flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                                </span>
                                <span>Teknik SEO &amp; Semantik HTML5</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-primary/15 text-primary flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                                </span>
                                <span>&lt;0.6sn Yıldırım Açılış Süresi</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-primary/15 text-primary flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                                </span>
                                <span>256-Bit SSL &amp; Güvenli Altyapı</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="flex flex-wrap gap-1.5 pt-4 border-t border-purple-200/60 mt-auto">
                        <span class="px-2.5 py-1 rounded-full bg-white/70 text-purple-950 text-xs font-semibold border border-purple-200/60">PageSpeed 98+</span>
                        <span class="px-2.5 py-1 rounded-full bg-white/70 text-purple-950 text-xs font-semibold border border-purple-200/60">Teknik SEO</span>
                        <span class="px-2.5 py-1 rounded-full bg-white/70 text-purple-950 text-xs font-semibold border border-purple-200/60">Hızlı Açılış</span>
                        <span class="px-2.5 py-1 rounded-full bg-white/70 text-purple-950 text-xs font-semibold border border-purple-200/60">SSL Güvenlik</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. GRADIA 5-STEP PROCESS WORKFLOW ("Nasıl Çalışıyoruz?") -->
    <!-- 5. ÇALIŞMA SÜRECİ & İŞ AKIŞI -->
    <section class="py-20 sm:py-28" id="process-section">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="px-3.5 py-1 rounded-full bg-primary-tint text-primary text-xs font-bold tracking-wider uppercase mb-2 inline-block">İŞ AKIŞI &amp; YÖNTEM</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-secondary tracking-tight">
                    Nasıl <span class="text-primary">Çalışıyoruz?</span>
                </h2>
                <p class="text-muted text-base mt-2">
                    Fikrinizi ilk andan canlıya alana kadar 5 adımlı şeffaf ve düzenli süreçle hayata geçiriyorum.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 sm:gap-5">
                <?php 
                $processSteps = [
                    [
                        'step' => '01',
                        'title' => 'Keşif & İhtiyaç',
                        'desc' => 'Beklentileri, hedef kitleyi ve teknik ihtiyaçları detaylıca masaya yatırıyoruz.',
                        'icon' => 'search'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Planlama & Mimari',
                        'desc' => 'Sayfa kurgusu, veritabanı şeması ve bileşen haritasını oluşturuyoruz.',
                        'icon' => 'architecture'
                    ],
                    [
                        'step' => '03',
                        'title' => 'UI/UX Tasarım',
                        'desc' => 'Kullanıcı dostu, modern ve mobil uyumlu görsel arayüzü tasarlıyoruz.',
                        'icon' => 'palette'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Temiz Kodlama',
                        'desc' => 'Modern PHP 8 ve Tailwind CSS ile hızlı, güvenli ve hafif kodu yazıyoruz.',
                        'icon' => 'code'
                    ],
                    [
                        'step' => '05',
                        'title' => 'Canlıya Alış',
                        'desc' => 'Testler, hız optimizasyonu, SSL kurulumu ve anahtar teslim yayınlama.',
                        'icon' => 'rocket_launch'
                    ],
                ];
                foreach ($processSteps as $p):
                ?>
                    <div class="bg-white/95 backdrop-blur-sm rounded-[28px] p-6 border border-purple-100 shadow-[0_8px_30px_rgba(139,89,255,0.04)] card-gradia flex flex-col justify-between relative group">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="font-code text-xl font-black text-primary/40 group-hover:text-primary transition-colors"><?= $p['step'] ?></span>
                                <div class="w-9 h-9 rounded-full bg-primary-tint border border-purple-100 text-primary flex items-center justify-center shadow-sm">
                                    <span class="material-symbols-outlined" style="font-size: 18px;"><?= $p['icon'] ?></span>
                                </div>
                            </div>
                            <h3 class="text-base font-bold text-secondary mb-2"><?= $p['title'] ?></h3>
                            <p class="text-xs text-muted leading-relaxed"><?= $p['desc'] ?></p>
                        </div>
                        <div class="mt-4 pt-3 border-t border-purple-100/60 flex items-center text-[11px] font-bold text-primary">
                            <span>Adım <?= $p['step'] ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 6. FEATURED PROJECTS VITRINI (Gradia Style Showcase) -->
    <section class="py-20 sm:py-28" id="work-section">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="px-3.5 py-1 rounded-full bg-primary-tint text-primary text-xs font-bold tracking-wider uppercase mb-2 inline-block">VAKA ANALİZLERİ &amp; PORTFOLYO</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-secondary tracking-tight">
                    Öne Çıkan <span class="text-primary">Projelerim</span>
                </h2>
                <p class="text-muted text-base mt-2">
                    PixelByte bünyesinde geliştirdiğim yapay zeka sistemleri ve sıfırdan hayata geçirdiğim yüksek hızlı web çözümleri.
                </p>

                <!-- Filter Tabs (Pill Buttons with Mobile Touch Scroll) -->
                <div class="w-full max-w-full overflow-x-auto no-scrollbar pb-2 sm:pb-0 px-1 flex items-center sm:justify-center gap-2 mt-8">
                    <button class="filter-tab shrink-0 px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-bold bg-primary text-white shadow-md shadow-primary/20 transition-all whitespace-nowrap" data-filter="all">
                        Tümü (<?= count($config['projects']) ?>)
                    </button>
                    <button class="filter-tab shrink-0 px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-bold bg-white text-muted hover:text-primary hover:bg-primary-tint border border-purple-100 transition-all whitespace-nowrap" data-filter="custom">
                        Yapay Zeka &amp; Özel Yazılım
                    </button>
                    <button class="filter-tab shrink-0 px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-bold bg-white text-muted hover:text-primary hover:bg-primary-tint border border-purple-100 transition-all whitespace-nowrap" data-filter="corporate">
                        Kurumsal &amp; Yönetim Paneli
                    </button>
                    <button class="filter-tab shrink-0 px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-bold bg-white text-muted hover:text-primary hover:bg-primary-tint border border-purple-100 transition-all whitespace-nowrap" data-filter="ecommerce">
                        E-Ticaret &amp; POS
                    </button>
                </div>
            </div>

            <!-- Showcase Cards -->
            <div class="space-y-16 sm:space-y-24">
                <?php foreach ($config['projects'] as $index => $project): 
                    $isEven = ($index % 2 === 0);
                    $projectJson = htmlspecialchars(json_encode($project, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE));
                ?>
                    <div class="project-card bg-white rounded-[32px] p-6 sm:p-10 border border-purple-100 shadow-[0_16px_45px_rgba(139,89,255,0.06)] card-gradia flex flex-col lg:flex-row items-center gap-8 lg:gap-12 <?= $isEven ? '' : 'lg:flex-row-reverse' ?>" 
                         data-category="<?= htmlspecialchars($project['category']) ?>">
                        
                        <!-- Text Side -->
                        <div class="w-full lg:w-1/2 flex flex-col gap-4">
                            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary-tint text-primary text-xs font-bold w-fit border border-purple-100">
                                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                                <span><?= htmlspecialchars($project['category_label']) ?></span>
                            </div>

                            <h3 class="text-2xl sm:text-3xl font-extrabold text-secondary leading-tight">
                                <?= htmlspecialchars($project['title']) ?>
                            </h3>

                            <p class="text-sm sm:text-base text-muted leading-relaxed">
                                <?= htmlspecialchars($project['desc']) ?>
                            </p>

                            <!-- Key Metrics Pills -->
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-2.5 pt-2">
                                <?php foreach ($project['metrics'] as $metric): ?>
                                    <div class="p-3 rounded-2xl bg-[#faf9ff] border border-purple-100/70">
                                        <span class="text-[10px] text-muted font-bold uppercase block truncate"><?= htmlspecialchars($metric['label']) ?></span>
                                        <span class="text-xs sm:text-sm font-extrabold text-secondary block truncate mt-0.5"><?= htmlspecialchars($metric['val']) ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Tags -->
                            <div class="flex flex-wrap gap-1.5 pt-1">
                                <?php foreach ($project['tags'] as $tag): ?>
                                    <span class="px-3 py-1 rounded-full bg-primary-tint text-secondary text-xs font-semibold border border-purple-100/50">
                                        <?= htmlspecialchars($tag) ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>

                            <!-- CTAs -->
                            <div class="flex flex-wrap items-center gap-2.5 sm:gap-3 pt-3">
                                <button type="button" 
                                        onclick="openProjectModal(<?= $projectJson ?>)" 
                                        class="inline-flex items-center font-bold text-white bg-gradient-to-r from-primary to-primary-dark hover:from-primary-dark hover:to-primary px-5 sm:px-6 py-2.5 sm:py-3 rounded-full text-xs sm:text-sm shadow-md shadow-primary/25 hover:shadow-lg transition-all gap-1.5 sm:gap-2 group">
                                    <span>Vaka Analizini Gör</span>
                                    <span class="material-symbols-outlined transition-transform duration-200 group-hover:scale-110" style="font-size: 16px;">open_in_new</span>
                                </button>

                                <?php if (!empty($project['demo_url']) && $project['demo_url'] !== '#'): ?>
                                    <a href="<?= htmlspecialchars($project['demo_url']) ?>" 
                                       target="_blank" 
                                       rel="noopener noreferrer" 
                                       class="inline-flex items-center font-bold text-secondary hover:text-primary bg-primary-tint hover:bg-primary-light border border-purple-100 px-4 sm:px-5 py-2.5 sm:py-3 rounded-full text-xs sm:text-sm transition-all gap-1.5 shadow-sm">
                                        <span>Siteye Git</span>
                                        <span class="material-symbols-outlined text-primary" style="font-size: 15px;">arrow_outward</span>
                                    </a>
                                <?php endif; ?>

                                <a href="#contact-section" 
                                   onclick="document.getElementById('project-notes').value = 'Merhaba Samet, portfolyondaki \'<?= htmlspecialchars(addslashes($project['title'])) ?>\' projesini inceledim, buna benzer bir çalışma üzerine konuşmak istiyorum.'; document.getElementById('project-notes').focus();" 
                                   class="inline-flex items-center font-bold text-muted hover:text-primary transition-colors text-xs sm:text-sm gap-1 py-2 px-2.5">
                                    <span>Bunu Konuşalım</span>
                                    <span class="material-symbols-outlined" style="font-size: 16px;">arrow_forward</span>
                                </a>
                            </div>
                        </div>

                        <!-- Mockup Side -->
                        <div class="w-full lg:w-1/2">
                            <div class="relative">
                                <div class="rounded-[24px] overflow-hidden bg-slate-900 border border-purple-100 shadow-xl relative">
                                    
                                    <!-- Browser Header Bar -->
                                    <div class="bg-[#171924] px-4 py-2.5 h-10 border-b border-slate-800 flex items-center justify-between gap-3">
                                        <div class="flex items-center gap-1.5">
                                             <span class="w-2.5 h-2.5 rounded-full bg-rose-400"></span>
                                             <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                                             <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
                                        </div>
                                        <?php if (!empty($project['demo_url']) && $project['demo_url'] !== '#'): ?>
                                            <div class="flex-1 max-w-[240px] bg-slate-800/80 px-3 py-0.5 rounded-full text-[10px] font-code text-slate-300 flex items-center justify-center gap-1.5 border border-slate-700 truncate">
                                                 <span class="material-symbols-outlined text-primary" style="font-size: 12px;">lock</span>
                                                 <span class="truncate"><?= htmlspecialchars(preg_replace('#^https?://#', '', rtrim($project['demo_url'], '/'))) ?></span>
                                            </div>
                                            <a href="<?= htmlspecialchars($project['demo_url']) ?>" target="_blank" rel="noopener noreferrer" class="text-[10px] font-bold text-emerald-400 hover:text-emerald-300 flex items-center gap-0.5" title="Siteyi Aç">
                                                 <span>Live</span>
                                                 <span class="material-symbols-outlined" style="font-size: 11px;">north_east</span>
                                            </a>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Image Preview Container -->
                                    <div class="relative h-60 sm:h-72 lg:h-80 overflow-hidden bg-slate-950">
                                        <img src="<?= htmlspecialchars($project['image']) ?>" 
                                             alt="<?= htmlspecialchars($project['title']) ?>" 
                                             class="w-full h-full object-cover"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- 7. HAKKIMDA & HİKAYEM (Story & Academic Credentials) -->
    <section class="py-20 sm:py-28" id="about-section">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
                
                <!-- Left: Story & Values -->
                <div class="lg:col-span-7 flex flex-col gap-6">
                    <div>
                        <span class="px-3.5 py-1 rounded-full bg-primary-tint text-primary text-xs font-bold tracking-wider uppercase mb-2 inline-block">BEN KİMİM?</span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-secondary leading-tight">
                            Hikayem, Kodlama Tutkum ve Çalışma Yaklaşımım
                        </h2>
                    </div>

                    <div class="space-y-4 text-sm sm:text-base text-muted leading-relaxed">
                        <?php foreach ($config['about']['paragraphs'] as $para): ?>
                            <p><?= htmlspecialchars($para) ?></p>
                        <?php endforeach; ?>
                    </div>

                    <!-- Personal Traits / Highlights -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 pt-4 border-t border-purple-50">
                        <?php foreach ($config['about']['highlights'] as $item): ?>
                            <div class="flex items-start gap-3 p-4 rounded-[22px] bg-white/95 border border-purple-100 shadow-sm card-gradia">
                                <span class="material-symbols-outlined text-primary shrink-0 mt-0.5" style="font-size: 22px;"><?= htmlspecialchars($item['icon']) ?></span>
                                <div>
                                    <h4 class="text-sm font-bold text-secondary"><?= htmlspecialchars($item['title']) ?></h4>
                                    <p class="text-xs text-muted mt-1 leading-relaxed"><?= htmlspecialchars($item['desc']) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Right: Profile Card & Quick Info -->
                <div class="lg:col-span-5 bg-white/95 rounded-[32px] p-7 sm:p-8 border border-purple-100 shadow-[0_12px_40px_rgba(139,89,255,0.05)] flex flex-col justify-between card-gradia">
                    <div>
                        <!-- Avatar / Initial Badge -->
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-primary to-primary-dark text-white flex items-center justify-center text-xl font-black shadow-lg shadow-primary/25">
                                SU
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-secondary"><?= htmlspecialchars($config['profile']['name']) ?></h3>
                                <p class="text-xs text-primary font-bold uppercase tracking-wider"><?= htmlspecialchars($config['profile']['role']) ?></p>
                                <span class="inline-flex items-center gap-1.5 text-xs text-emerald-600 font-semibold mt-1">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span>Aktif &bull; Yeni Projeler Üretiyor</span>
                                </span>
                            </div>
                        </div>

                        <!-- Quick Facts -->
                        <div class="space-y-3 text-xs text-muted border-y border-purple-100/70 py-5 my-5">
                            <div class="flex items-center justify-between">
                                <span class="text-muted/80 font-medium">Eğitim:</span>
                                <span class="text-secondary font-semibold">MCBÜ (Mezun) &bull; Anadolu Üniv.</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-muted/80 font-medium">Deneyim:</span>
                                <span class="text-secondary font-semibold">PixelByte (Web) &bull; Porland Ar-Ge</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-muted/80 font-medium">Temel:</span>
                                <span class="text-secondary font-semibold">Bilişim Teknolojileri / Web Tasarım</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-muted/80 font-medium">Odak Alanı:</span>
                                <span class="text-secondary font-semibold">Full-Stack Web &amp; Yapay Zeka</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-muted/80 font-medium">Ana Diller:</span>
                                <span class="text-primary font-bold">PHP, MySQL, JavaScript, Tailwind</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-muted/80 font-medium">Konum:</span>
                                <span class="text-secondary font-semibold">Bilecik / Eskişehir &bull; Remote</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-muted/80 font-medium">E-Posta:</span>
                                <a href="mailto:<?= htmlspecialchars($config['contact']['email']) ?>" class="text-primary font-semibold hover:underline"><?= htmlspecialchars($config['contact']['email']) ?></a>
                            </div>
                            <?php if (!empty($config['contact']['phone'])): ?>
                                <div class="flex items-center justify-between">
                                    <span class="text-muted/80 font-medium">Telefon:</span>
                                    <a href="tel:<?= preg_replace('/[^0-9+]/', '', $config['contact']['phone']) ?>" class="text-secondary font-semibold hover:text-primary transition-colors"><?= htmlspecialchars($config['contact']['phone']) ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Connect Actions -->
                    <div class="space-y-2.5 pt-2">
                        <a href="#contact-section" class="w-full inline-flex items-center justify-center gap-2 px-5 py-3 rounded-full bg-gradient-to-r from-primary to-primary-dark hover:from-primary-dark hover:to-primary text-white text-xs font-bold transition-all shadow-md shadow-primary/20">
                            <span class="material-symbols-outlined" style="font-size: 16px;">mail</span>
                            <span>Bana Mesaj Gönder</span>
                        </a>
                        <?php if (!empty($config['profile']['cv_url'])): ?>
                            <a href="<?= htmlspecialchars($config['profile']['cv_url']) ?>" target="_blank" class="w-full inline-flex items-center justify-center gap-2 px-5 py-3 rounded-full bg-white hover:bg-primary-tint text-secondary text-xs font-bold transition-colors border border-purple-100">
                                <span class="material-symbols-outlined text-primary" style="font-size: 16px;">description</span>
                                <span>Özgeçmişimi İndir (PDF)</span>
                            </a>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 8. KARİYER & DENEYİM YOLCULUĞU (Timeline) -->
    <section class="py-20 sm:py-28" id="journey-section">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="px-3.5 py-1 rounded-full bg-primary-tint text-primary text-xs font-bold tracking-wider uppercase mb-2 inline-block">GELİŞİM SÜRECİ</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-secondary tracking-tight">
                    Yazılım Serüvenim &amp; Adımlarım
                </h2>
                <p class="text-muted text-base mt-2">
                    İlk kod satırından bugüne kadar kat ettiğim mesafe, öğrendiğim teknolojiler ve odaklandığım alanlar.
                </p>
            </div>

            <div class="max-w-3xl mx-auto relative border-l-2 border-primary/25 pl-6 sm:pl-8 space-y-8 ml-4 sm:ml-auto">
                <?php foreach ($config['journey'] as $item): ?>
                    <div class="relative group">
                        <!-- Marker Node -->
                        <div class="absolute -left-[33px] sm:-left-[41px] top-2 w-4 h-4 rounded-full bg-white border-2 border-primary group-hover:bg-primary transition-colors flex items-center justify-center shadow-sm">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary group-hover:bg-white"></span>
                        </div>

                        <div class="bg-white rounded-[28px] p-6 sm:p-7 border border-purple-100 shadow-[0_8px_30px_rgba(139,89,255,0.04)] card-gradia">
                            <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
                                <span class="px-3 py-1 rounded-full bg-primary-tint text-primary text-xs font-bold border border-purple-100/60">
                                    <?= htmlspecialchars($item['period']) ?>
                                </span>
                                <span class="text-xs font-semibold text-muted"><?= htmlspecialchars($item['role']) ?></span>
                            </div>
                            <h3 class="text-lg font-bold text-secondary mb-2"><?= htmlspecialchars($item['title']) ?></h3>
                            <p class="text-sm text-muted mb-4 leading-relaxed">
                                <?= htmlspecialchars($item['desc']) ?>
                            </p>
                            <div class="flex flex-wrap gap-1.5 pt-3 border-t border-purple-50">
                                <?php foreach ($item['tags'] as $tag): ?>
                                    <span class="px-2.5 py-1 rounded-full bg-primary-tint text-secondary text-xs font-medium border border-purple-100/40">
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

    <!-- 9. MÜHENDİSLİK & KALİTE STANDARTLARI (Özgün Mimari Grid) -->
    <section class="relative isolate py-20 sm:py-28 overflow-hidden" id="features-section">
        <span id="collaboration-section" class="sr-only"></span>
        <!-- Subtle Ambient Glow Orbs -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true" style="contain: paint;">
            <div class="absolute top-1/4 -left-28 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 -right-28 w-96 h-96 bg-purple-300/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-14 sm:mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary-tint border border-purple-100 text-primary shadow-sm mb-4">
                    <span class="material-symbols-outlined text-primary" style="font-size: 16px;">verified_user</span>
                    <span class="text-xs font-bold tracking-wider uppercase">Geliştirme &amp; Mühendislik Yaklaşımı</span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-secondary tracking-tight leading-[1.18]">
                    Ödün Vermediğim Kalite &amp; Mimari Standartlarım
                </h2>
                <p class="text-muted text-sm sm:text-base mt-3 max-w-2xl mx-auto leading-relaxed">
                    Şişkin şablonlar ve günü kurtaran geçici yamalar yerine; hız, güvenlik ve sürdürülebilirlik odaklı profesyonel kodlama prensipleri.
                </p>
            </div>

            <!-- Bento Layout: Row 1 = 2 Large Spotlight Cards, Row 2 = 6 Balanced Pillar Cards -->
            <div class="space-y-5">
                
                <!-- TOP ROW: 2 Primary Hero Spotlight Cards -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                    
                    <!-- SPOTLIGHT 1: Speed & Core Web Vitals -->
                    <div class="bg-white rounded-[32px] p-7 sm:p-8 border border-purple-100 shadow-[0_10px_35px_rgba(139,89,255,0.05)] hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between relative overflow-hidden group">
                        <div class="h-1 bg-gradient-to-r from-amber-400 via-primary to-primary-dark absolute top-0 inset-x-0"></div>
                        <div>
                            <div class="flex items-center justify-between gap-3 mb-6">
                                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-amber-50 to-amber-100/80 border border-amber-200/60 flex items-center justify-center text-amber-500 shadow-sm group-hover:scale-105 transition-transform">
                                    <span class="material-symbols-outlined" style="font-size: 26px;">bolt</span>
                                </div>
                                <span class="px-3.5 py-1 rounded-full bg-emerald-50 border border-emerald-200/80 text-emerald-700 text-xs font-bold flex items-center gap-1.5 shadow-sm">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span>98+ PageSpeed</span>
                                </span>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold text-secondary mb-2 tracking-tight">Hız &amp; Performans Optimizasyonu</h3>
                            <p class="text-xs sm:text-sm text-muted leading-relaxed max-w-xl">
                                Gereksiz kütüphaneler, şişkin hazır temalar ve 30+ eklenti hantallığından arındırılmış saf kod. Ziyaretçilerinizi bekletmeyen &lt;0.6s açılış süreleri ve Google sıralamalarında doğrudan avantaj sağlayan teknik altyapı.
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-2 pt-5 border-t border-purple-50 mt-6">
                            <span class="px-3 py-1 rounded-full bg-primary-tint text-secondary text-xs font-semibold border border-purple-100/50">⚡ &lt;0.6s Açılış Süresi</span>
                            <span class="px-3 py-1 rounded-full bg-primary-tint text-secondary text-xs font-semibold border border-purple-100/50">🚀 Google Core Web Vitals</span>
                            <span class="px-3 py-1 rounded-full bg-primary-tint text-secondary text-xs font-semibold border border-purple-100/50">📦 Sıfır Eklenti Şişkinliği</span>
                        </div>
                    </div>

                    <!-- SPOTLIGHT 2: Clean Architecture & Full Ownership -->
                    <div class="bg-white rounded-[32px] p-7 sm:p-8 border border-purple-100 shadow-[0_10px_35px_rgba(139,89,255,0.05)] hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between relative overflow-hidden group">
                        <div class="h-1 bg-gradient-to-r from-primary via-primary-dark to-indigo-600 absolute top-0 inset-x-0"></div>
                        <div>
                            <div class="flex items-center justify-between gap-3 mb-6">
                                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-purple-50 to-primary-tint border border-purple-200/60 flex items-center justify-center text-primary shadow-sm group-hover:scale-105 transition-transform">
                                    <span class="material-symbols-outlined" style="font-size: 26px;">code_blocks</span>
                                </div>
                                <span class="px-3.5 py-1 rounded-full bg-purple-50 border border-purple-200 text-primary text-xs font-bold flex items-center gap-1.5 shadow-sm">
                                    <span class="material-symbols-outlined" style="font-size: 15px;">lock_open</span>
                                    <span>%100 Kod Mülkiyeti</span>
                                </span>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold text-secondary mb-2 tracking-tight">Temiz Kod &amp; Bağımsız Altyapı</h3>
                            <p class="text-xs sm:text-sm text-muted leading-relaxed max-w-xl">
                                Her yıl tekrar ödenen zorunlu eklenti ve tema lisansları yok. Projenin tüm kaynak kodları, veritabanı şeması ve mülkiyeti tamamen sizindir. PSR standartlarında temiz, okunabilir ve gelecekte kolayca geliştirilebilir mimari.
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-2 pt-5 border-t border-purple-50 mt-6">
                            <span class="px-3 py-1 rounded-full bg-primary-tint text-secondary text-xs font-semibold border border-purple-100/50">🛡️ PSR Standartları</span>
                            <span class="px-3 py-1 rounded-full bg-primary-tint text-secondary text-xs font-semibold border border-purple-100/50">💰 Sıfır Gizli Maliyet</span>
                            <span class="px-3 py-1 rounded-full bg-primary-tint text-secondary text-xs font-semibold border border-purple-100/50">🔑 Tam Mülkiyet</span>
                        </div>
                    </div>

                </div>

                <!-- BOTTOM ROW: 6 Balanced Pillar Cards (3 Columns) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    
                    <!-- CARD 3: Scalability -->
                    <div class="bg-white rounded-[28px] p-6 sm:p-7 border border-purple-100 shadow-[0_8px_30px_rgba(139,89,255,0.03)] hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-5">
                                <div class="w-11 h-11 rounded-2xl bg-blue-50 border border-blue-100/80 flex items-center justify-center text-blue-600 shadow-sm group-hover:scale-105 transition-transform">
                                    <span class="material-symbols-outlined" style="font-size: 22px;">database</span>
                                </div>
                                <span class="px-2.5 py-0.5 rounded-full bg-blue-50/70 border border-blue-100 text-blue-700 text-[11px] font-bold">MySQL Optimize</span>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold text-secondary mb-1.5 tracking-tight">Ölçeklenebilir Veritabanı</h3>
                            <p class="text-xs sm:text-[13px] text-muted leading-relaxed font-normal">
                                Ziyaretçi veya ürün sayınız katlansa dahi kilitlenmeyen; doğru indekslenmiş, normalize ve anlık yanıt veren temiz MySQL tabloları.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 4: Flexibility -->
                    <div class="bg-white rounded-[28px] p-6 sm:p-7 border border-purple-100 shadow-[0_8px_30px_rgba(139,89,255,0.03)] hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-5">
                                <div class="w-11 h-11 rounded-2xl bg-fuchsia-50 border border-fuchsia-100/80 flex items-center justify-center text-fuchsia-600 shadow-sm group-hover:scale-105 transition-transform">
                                    <span class="material-symbols-outlined" style="font-size: 22px;">tune</span>
                                </div>
                                <span class="px-2.5 py-0.5 rounded-full bg-fuchsia-50/70 border border-fuchsia-100 text-fuchsia-700 text-[11px] font-bold">%100 Özel</span>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold text-secondary mb-1.5 tracking-tight">Kalıpsız &amp; Özgür Tasarım</h3>
                            <p class="text-xs sm:text-[13px] text-muted leading-relaxed font-normal">
                                Kalıp şablonların sınırlarına ve hazır temaların kısıtlamalarına takılmadan; markanızın kimliğine sıfırdan uyarlanan sınırsız özgürlük.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 5: Direct Communication -->
                    <div class="bg-white rounded-[28px] p-6 sm:p-7 border border-purple-100 shadow-[0_8px_30px_rgba(139,89,255,0.03)] hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-5">
                                <div class="w-11 h-11 rounded-2xl bg-emerald-50 border border-emerald-100/80 flex items-center justify-center text-emerald-600 shadow-sm group-hover:scale-105 transition-transform">
                                    <span class="material-symbols-outlined" style="font-size: 22px;">forum</span>
                                </div>
                                <span class="px-2.5 py-0.5 rounded-full bg-emerald-50/70 border border-emerald-100 text-emerald-700 text-[11px] font-bold">Bire Bir Temas</span>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold text-secondary mb-1.5 tracking-tight">Doğrudan Geliştirici Teması</h3>
                            <p class="text-xs sm:text-[13px] text-muted leading-relaxed font-normal">
                                Araya aracı, satış temsilcisi veya destek botu girmeden; doğrudan projenizin kodunu yazan kişiyle hızlı, şeffaf ve çözüm odaklı iletişim.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 6: Easy Management -->
                    <div class="bg-white rounded-[28px] p-6 sm:p-7 border border-purple-100 shadow-[0_8px_30px_rgba(139,89,255,0.03)] hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-5">
                                <div class="w-11 h-11 rounded-2xl bg-violet-50 border border-violet-100/80 flex items-center justify-center text-violet-600 shadow-sm group-hover:scale-105 transition-transform">
                                    <span class="material-symbols-outlined" style="font-size: 22px;">dashboard_customize</span>
                                </div>
                                <span class="px-2.5 py-0.5 rounded-full bg-violet-50/70 border border-violet-100 text-violet-700 text-[11px] font-bold">Pratik Kontrol</span>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold text-secondary mb-1.5 tracking-tight">Kolay &amp; Hafif Yönetim</h3>
                            <p class="text-xs sm:text-[13px] text-muted leading-relaxed font-normal">
                                Karmaşık ve kafa karıştıran sistemler yerine; içeriklerinizi, bloglarınızı ve hizmetlerinizi saniyeler içinde güncelleyeceğiniz pratik yönetim paneli.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 7: Security & Isolation -->
                    <div class="bg-white rounded-[28px] p-6 sm:p-7 border border-purple-100 shadow-[0_8px_30px_rgba(139,89,255,0.03)] hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-5">
                                <div class="w-11 h-11 rounded-2xl bg-rose-50 border border-rose-100/80 flex items-center justify-center text-rose-600 shadow-sm group-hover:scale-105 transition-transform">
                                    <span class="material-symbols-outlined" style="font-size: 22px;">shield_lock</span>
                                </div>
                                <span class="px-2.5 py-0.5 rounded-full bg-rose-50/70 border border-rose-100 text-rose-700 text-[11px] font-bold">Sıfır Açık</span>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold text-secondary mb-1.5 tracking-tight">Güvenlik &amp; İzole Yapı</h3>
                            <p class="text-xs sm:text-[13px] text-muted leading-relaxed font-normal">
                                Sürekli güncellenmeyen eklenti açıkları ve SQL injection riskleri yerine; filtrelenmiş veritabanı sorguları ve harici müdahalelere kapalı güvenli mimari.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 8: Full-Stack Solution -->
                    <div class="bg-white rounded-[28px] p-6 sm:p-7 border border-purple-100 shadow-[0_8px_30px_rgba(139,89,255,0.03)] hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-5">
                                <div class="w-11 h-11 rounded-2xl bg-teal-50 border border-teal-100/80 flex items-center justify-center text-teal-600 shadow-sm group-hover:scale-105 transition-transform">
                                    <span class="material-symbols-outlined" style="font-size: 22px;">layers</span>
                                </div>
                                <span class="px-2.5 py-0.5 rounded-full bg-teal-50/70 border border-teal-100 text-teal-700 text-[11px] font-bold">Uçtan Uca</span>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold text-secondary mb-1.5 tracking-tight">Çok Yönlü Full-Stack Çözüm</h3>
                            <p class="text-xs sm:text-[13px] text-muted leading-relaxed font-normal">
                                Arayüz tasarımından REST API entegrasyonlarına, veritabanından sunucu yapılandırmasına kadar tüm süreçte tek noktadan uzmanlık.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Bottom Collaboration Pill Action -->
            <div class="mt-12 sm:mt-14 text-center">
                <div class="inline-flex flex-col sm:flex-row items-center justify-between gap-4 p-3 sm:p-3.5 sm:px-6 rounded-full bg-white border border-purple-100 shadow-[0_8px_30px_rgba(139,89,255,0.06)] max-w-2xl mx-auto">
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm font-semibold text-secondary px-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>Yeni bir proje veya freelance iş birliği için hazır mısınız?</span>
                    </div>
                    <a href="#contact-section" 
                       onclick="document.getElementById('project-notes').value = 'Merhaba Samet, seninle yeni bir web projesi geliştirmek istiyorum.'; document.getElementById('project-notes').focus();"
                       class="inline-flex items-center gap-1.5 px-5 py-2 sm:py-2.5 rounded-full bg-gradient-to-r from-primary to-primary-dark text-white text-xs sm:text-sm font-bold shadow-md shadow-primary/25 hover:shadow-lg hover:shadow-primary/30 hover:scale-[1.02] active:scale-95 transition-all whitespace-nowrap">
                        <span>Birlikte Üretelim</span>
                        <span class="material-symbols-outlined" style="font-size: 16px;">arrow_forward</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- 10. GELİŞTİRİCİ FELSEFEM (WordPress vs Temiz Kod + Speed Benchmark) -->
    <section class="py-20 sm:py-28" id="philosophy-section">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="px-3.5 py-1 rounded-full bg-primary-tint text-primary text-xs font-bold tracking-wider uppercase mb-2 inline-block">GELİŞTİRİCİ FELSEFEM</span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-secondary tracking-tight">
                    Neden Hazır Şablonlar Yerine <span class="text-primary">Temiz Kod?</span>
                </h2>
                <p class="text-muted text-base mt-2">
                    Bir web projesinin uzun ömürlü olması, güvenliği ve hızı doğrudan arkasındaki mimariye bağlıdır.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 items-stretch">
                <!-- Left: Heavy Templates -->
                <div class="bg-white/95 rounded-[32px] p-8 border border-rose-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between pb-4 border-b border-rose-100 mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-2xl bg-rose-50 text-rose-600 flex items-center justify-center font-bold">
                                    <span class="material-symbols-outlined" style="font-size: 22px;">warning</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-secondary">Hazır Sistemler &amp; Ağır Eklentiler</h3>
                                    <span class="text-xs text-rose-600 font-semibold">Güvenlik Riskleri &amp; Şişkin Kod</span>
                                </div>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-rose-50 text-rose-700 text-xs font-bold uppercase">ZORLUKLAR</span>
                        </div>

                        <div class="space-y-4">
                            <?php foreach ($config['comparison'] as $item): ?>
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-rose-500 shrink-0 mt-0.5" style="font-size: 18px;">close</span>
                                    <div>
                                        <strong class="text-sm font-bold text-secondary block"><?= htmlspecialchars($item['title']) ?></strong>
                                        <p class="text-xs text-muted mt-0.5 leading-relaxed"><?= htmlspecialchars($item['wp']) ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="mt-8 pt-4 border-t border-rose-100 bg-rose-50/70 -mx-8 -mb-8 p-4 rounded-b-[32px] flex items-center gap-2 text-rose-800 text-xs font-semibold">
                        <span class="material-symbols-outlined shrink-0" style="font-size: 18px;">gpp_bad</span>
                        <span>Birçok web güvenlik açığı, kontrolsüz eklenti yığınlarından doğar.</span>
                    </div>
                </div>

                <!-- Right: Clean Architecture -->
                <div class="bg-white rounded-[32px] p-8 border-2 border-primary shadow-[0_16px_40px_rgba(139,89,255,0.08)] flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between pb-4 border-b border-purple-50 mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-2xl bg-primary-tint text-primary flex items-center justify-center font-bold">
                                    <span class="material-symbols-outlined" style="font-size: 22px;">verified_user</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-secondary">Özel &amp; Sade Kod Mimarisi</h3>
                                    <span class="text-xs text-primary font-semibold">Temiz, Hızlı ve Uzun Ömürlü</span>
                                </div>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-primary-tint text-primary text-xs font-bold uppercase">BENİM STANDARTLARIM</span>
                        </div>

                        <div class="space-y-4">
                            <?php foreach ($config['comparison'] as $item): ?>
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-emerald-500 shrink-0 mt-0.5" style="font-size: 18px;">check_circle</span>
                                    <div>
                                        <strong class="text-sm font-bold text-secondary block"><?= htmlspecialchars($item['title']) ?></strong>
                                        <p class="text-xs text-muted mt-0.5 leading-relaxed"><?= htmlspecialchars($item['custom']) ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="mt-8 pt-4 border-t border-purple-50 bg-primary-tint -mx-8 -mb-8 p-4 rounded-b-[32px] flex items-center gap-2 text-secondary text-xs font-semibold">
                        <span class="material-symbols-outlined shrink-0 text-primary" style="font-size: 18px;">bolt</span>
                        <span>Sadece gereken kodlar yazılır; sayfa &lt;0.8 saniyede açılır, kullanıcı beklemez.</span>
                    </div>
                </div>
            </div>

            <!-- Speed Benchmark Bar Chart -->
            <div class="mt-10 bg-white/95 rounded-[32px] p-8 border border-purple-100 shadow-[0_10px_35px_rgba(139,89,255,0.04)]">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
                    <div>
                        <span class="text-xs font-bold text-primary uppercase tracking-wider">HIZ VE DENEYİM</span>
                        <h3 class="text-lg font-bold text-secondary mt-1">Açılış Süresi Kıyaslaması</h3>
                    </div>
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white text-xs font-bold text-secondary border border-purple-100">
                        <span class="material-symbols-outlined text-primary" style="font-size: 16px;">bolt</span>
                        <span>Google İdeal Web Standardı: &lt;1.2 sn</span>
                    </div>
                </div>

                <div class="space-y-5">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-bold text-secondary">Hazır Şablonlar / Çok Sayıda Eklenti</span>
                            <span class="text-sm font-extrabold text-rose-600">4.8 sn <span class="text-xs text-muted font-normal">(Yavaş)</span></span>
                        </div>
                        <div class="w-full h-3 bg-purple-50 rounded-full overflow-hidden p-0.5">
                            <div class="h-full bg-rose-500 rounded-full" style="width: 82%;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-bold text-secondary">Samet Uzun Özel Kodlama</span>
                            <span class="text-sm font-extrabold text-primary">0.6 sn <span class="text-xs text-muted font-normal">(Yıldırım Hız)</span></span>
                        </div>
                        <div class="w-full h-3 bg-purple-50 rounded-full overflow-hidden p-0.5">
                            <div class="h-full bg-gradient-to-r from-primary to-primary-dark rounded-full shadow-sm" style="width: 14%;"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 12. SIKÇA SORULAN SORULAR (FAQ) -->
    <section class="py-20 sm:py-28" id="faq-section">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="px-3.5 py-1 rounded-full bg-primary-tint text-primary text-xs font-bold tracking-wider uppercase mb-2 inline-block">SORULAR &amp; CEVAPLAR</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-secondary tracking-tight">
                    Merak Edilenler
                </h2>
                <p class="text-muted text-base mt-2">
                    Çalışma prensiplerim ve süreç hakkında aklınıza takılabilecek konular.
                </p>
            </div>

            <div class="max-w-3xl mx-auto space-y-3.5">
                <?php foreach ($config['faq'] as $index => $item): ?>
                    <div class="bg-white rounded-[22px] border border-purple-100 overflow-hidden shadow-sm transition-colors">
                        <button type="button" class="faq-toggle w-full px-6 py-4 text-left flex items-center justify-between gap-4 font-bold text-sm sm:text-base text-secondary hover:text-primary transition-colors" data-target="faq-<?= $index ?>">
                            <span><?= htmlspecialchars($item['q']) ?></span>
                            <span class="faq-icon material-symbols-outlined text-muted transition-transform duration-200" style="font-size: 20px;">expand_more</span>
                        </button>
                        <div id="faq-<?= $index ?>" class="faq-content hidden px-6 pb-5 pt-1 text-xs sm:text-sm text-muted leading-relaxed border-t border-purple-50">
                            <?= htmlspecialchars($item['a']) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 13. GRADIA SIGNATURE LARGE GRADIENT CTA BANNER -->
    <section class="py-12 sm:py-16" id="cta-banner">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative bg-gradient-to-r from-[#171924] via-[#242734] to-[#5921b2] rounded-[36px] p-8 sm:p-14 text-white text-center overflow-hidden shadow-2xl">
                <!-- Ambient Glow inside CTA -->
                <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true" style="contain: paint;">
                    <div class="absolute -top-24 -left-24 w-72 h-72 bg-primary/30 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-24 -right-24 w-72 h-72 bg-[#c14ef3]/20 rounded-full blur-3xl"></div>
                </div>

                <div class="relative z-10 max-w-2xl mx-auto space-y-6">
                    <span class="px-4 py-1.5 rounded-full bg-[#e2ff3b] text-[#171924] font-black text-xs uppercase tracking-wider inline-block">
                        BİRLİKTE ÜRETELİM
                    </span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold leading-tight tracking-tight">
                        Fikrinizi yaşayan bir web sitesine dönüştürmeye hazır mısınız?
                    </h2>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                        İster sıfırdan anahtar teslim bir proje, ister ekibiniz için esnek bir iş birliği. Çekinmeden mesaj atın!
                    </p>
                    <div class="flex flex-wrap items-center justify-center gap-3.5 pt-2">
                        <a href="#contact-section" class="px-7 py-3.5 rounded-full bg-gradient-to-r from-primary to-primary-dark hover:from-primary-dark hover:to-primary text-white font-bold text-sm shadow-xl shadow-primary/30 hover:scale-105 active:scale-95 transition-all inline-flex items-center gap-2">
                            <span>Hemen İletişime Geçin</span>
                            <span class="material-symbols-outlined" style="font-size: 18px;">arrow_forward</span>
                        </a>
                        <?php if (!empty($config['contact']['whatsapp'])): ?>
                            <?php 
                                $waTarget = ltrim($config['contact']['whatsapp'], '@');
                                $waUrl = "https://wa.me/" . rawurlencode($waTarget) . "?text=" . urlencode($config['contact']['whatsapp_msg']);
                            ?>
                            <a href="<?= htmlspecialchars($waUrl) ?>" target="_blank" rel="noopener noreferrer" class="px-6 py-3.5 rounded-full bg-white/10 hover:bg-white/20 text-white font-bold text-sm border border-white/20 transition-all inline-flex items-center gap-2">
                                <span class="material-symbols-outlined text-emerald-400" style="font-size: 18px;">chat</span>
                                <span>WhatsApp'tan Yaz</span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 14. CONTACT FORM (Gradia Card) -->
    <section class="py-16 sm:py-24" id="contact-section">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white/95 backdrop-blur-md rounded-[32px] p-8 sm:p-12 shadow-[0_16px_50px_rgba(139,89,255,0.06)] border border-purple-100">
                
                <!-- Section Header -->
                <div class="flex flex-col md:flex-row md:items-start justify-between gap-6 mb-8 pb-6 border-b border-purple-100">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-tint text-primary text-xs font-bold mb-2">
                            <span class="material-symbols-outlined" style="font-size: 16px;">coffee</span>
                            <span>BİR MERHABA DEYİN</span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-secondary">
                            Birlikte Bir Şeyler Üretelim
                        </h2>
                        <p class="text-muted text-xs sm:text-sm mt-2 max-w-lg leading-relaxed">
                            Aklınızda bir web projesi mi var, ekibinize bir geliştirici mi arıyorsunuz? Yazın, tanışmaktan mutluluk duyarım!
                        </p>
                    </div>
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold whitespace-nowrap self-start">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>Ortalama 2 Saat İçinde Yanıt</span>
                    </div>
                </div>

                <!-- Form -->
                <form class="space-y-5" id="project-engagement-form">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-bold text-secondary mb-2 uppercase tracking-wider" for="client-name">Adınız Soyadınız *</label>
                            <input class="w-full bg-white border border-purple-100 px-4 py-3 rounded-2xl text-secondary text-sm focus:outline-none focus:ring-2 focus:ring-primary/40 focus:border-primary transition-all" id="client-name" name="name" placeholder="Örn: Ahmet Yılmaz" required="" type="text"/>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-secondary mb-2 uppercase tracking-wider" for="client-email">E-posta Adresiniz *</label>
                            <input class="w-full bg-white border border-purple-100 px-4 py-3 rounded-2xl text-secondary text-sm focus:outline-none focus:ring-2 focus:ring-primary/40 focus:border-primary transition-all" id="client-email" name="email" placeholder="ahmet@example.com" required="" type="email"/>
                        </div>
                    </div>

                    <!-- Subject Selection -->
                    <div>
                        <label class="block text-xs font-bold text-secondary mb-2 uppercase tracking-wider">Görüşmek İstediğiniz Konu</label>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <label class="flex items-center gap-2.5 bg-white border border-purple-100 p-3 rounded-2xl cursor-pointer hover:bg-primary-tint transition-colors">
                                <input checked="" class="accent-primary" name="scope" type="radio" value="Yeni Bir Web Projesi"/>
                                <span class="text-xs font-bold text-secondary">Yeni Bir Proje</span>
                            </label>
                            <label class="flex items-center gap-2.5 bg-white border border-purple-100 p-3 rounded-2xl cursor-pointer hover:bg-primary-tint transition-colors">
                                <input class="accent-primary" name="scope" type="radio" value="Ekip &amp; İş Teklifi"/>
                                <span class="text-xs font-bold text-secondary">Ekip / İş Teklifi</span>
                            </label>
                            <label class="flex items-center gap-2.5 bg-white border border-purple-100 p-3 rounded-2xl cursor-pointer hover:bg-primary-tint transition-colors">
                                <input class="accent-primary" name="scope" type="radio" value="Sadece Merhaba &amp; Sohbet"/>
                                <span class="text-xs font-bold text-secondary">Tanışma &amp; Sohbet ☕</span>
                            </label>
                        </div>
                    </div>

                    <!-- Notes -->
                    <div>
                        <label class="block text-xs font-bold text-secondary mb-2 uppercase tracking-wider" for="project-notes">Mesajınız *</label>
                        <textarea class="w-full bg-white border border-purple-100 px-4 py-3 rounded-2xl text-secondary text-sm focus:outline-none focus:ring-2 focus:ring-primary/40 focus:border-primary transition-all" id="project-notes" name="notes" placeholder="Aklınızdaki fikri, projeyi veya sormak istediğiniz herhangi bir şeyi yazabilirsiniz..." required="" rows="4"></textarea>
                    </div>

                    <!-- Actions Bar -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-2">
                        <div class="flex items-center gap-2 text-muted text-xs">
                            <span class="material-symbols-outlined text-primary" style="font-size: 16px;">lock</span>
                            <span>Mesajınız doğrudan güvenli gelen kutuma iletilir.</span>
                        </div>
                        <button id="submit-form-btn" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-full bg-gradient-to-r from-primary to-primary-dark hover:from-primary-dark hover:to-primary text-white text-xs sm:text-sm font-bold transition-all shadow-md shadow-primary/25 hover:shadow-lg" type="submit">
                            <span>Mesajı Gönder</span>
                            <span class="material-symbols-outlined" style="font-size: 16px;">send</span>
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
