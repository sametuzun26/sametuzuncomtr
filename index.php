<?php
$config = require_once __DIR__ . '/config.php';
include __DIR__ . '/includes/header.php';
?>

<div class="flex flex-col w-full">

    <!-- Top Telemetry Header -->
    <section class="w-full max-w-[1280px] mx-auto px-4 md:px-8 pt-6 pb-2">
        <div class="flex flex-wrap items-center justify-between gap-3 bg-surface-container-lowest/80 p-3 px-4 rounded-xl border border-surface-container-high/50 backdrop-blur">
            <div class="flex items-center gap-2.5">
                <span class="w-2.5 h-2.5 rounded-full bg-tertiary animate-pulse"></span>
                <span class="font-label-caps text-xs text-tertiary uppercase tracking-wider font-semibold">
                    <?= htmlspecialchars($config['site']['status_badge']) ?>
                </span>
            </div>
            <div class="hidden sm:flex items-center gap-4 font-code-sm text-xs text-on-surface-variant">
                <span>KONUM: <strong class="text-on-surface"><?= htmlspecialchars($config['site']['location']) ?></strong></span>
                <span class="text-outline-variant">/</span>
                <span>ROL: <strong class="text-primary"><?= htmlspecialchars($config['profile']['role']) ?></strong></span>
                <span class="text-outline-variant">/</span>
                <span class="text-tertiary">GOOGLE HIZI: 98+</span>
            </div>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="relative w-full max-w-[1280px] mx-auto px-4 md:px-8 py-12 md:py-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            
            <!-- Left Column: Bio & Warm Greeting -->
            <div class="lg:col-span-7 flex flex-col gap-5">
                <div class="inline-flex items-center gap-2 font-code-sm text-xs text-primary bg-surface-container-high/70 w-fit px-3.5 py-1.5 rounded-full border border-primary/25">
                    <span class="material-symbols-outlined text-primary" style="font-size: 16px;">waving_hand</span>
                    <span class="font-bold"><?= htmlspecialchars($config['profile']['greeting']) ?></span>
                </div>

                <h1 class="font-display-xl text-3xl sm:text-4xl md:text-5xl lg:text-[50px] leading-tight font-extrabold text-on-surface tracking-tight">
                    <?= htmlspecialchars($config['profile']['headline']) ?>
                </h1>

                <p class="font-body-lg text-base md:text-lg text-on-surface-variant max-w-[620px] leading-relaxed">
                    <?= htmlspecialchars($config['profile']['bio']) ?>
                </p>

                <!-- CTAs -->
                <div class="flex flex-wrap items-center gap-3 pt-2">
                    <a class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-primary-container text-on-primary-container font-code-md text-sm font-bold transition-all hover:scale-[1.02] shadow-[0_0_24px_-4px_rgba(6,182,212,0.4)]" href="#work-section">
                        <span>Projelerime Göz At</span>
                        <span class="material-symbols-outlined" style="font-size: 18px;">arrow_forward</span>
                    </a>
                    <a class="inline-flex items-center gap-2 px-5 py-3 rounded-lg bg-surface-container-high text-on-surface font-code-md text-sm transition-all hover:bg-surface-bright border border-surface-container-highest" href="#contact-section">
                        <span class="material-symbols-outlined text-primary" style="font-size: 18px;">coffee</span>
                        <span>Bir Merhaba De</span>
                    </a>
                    <?php if (!empty($config['profile']['cv_url'])): ?>
                        <a class="inline-flex items-center gap-2 px-5 py-3 rounded-lg bg-surface-container-high text-on-surface hover:text-tertiary font-code-md text-sm transition-all hover:bg-surface-bright border border-surface-container-highest" href="<?= htmlspecialchars($config['profile']['cv_url']) ?>" target="_blank" title="Özgeçmişimi Görüntüle / İndir">
                            <span class="material-symbols-outlined text-tertiary" style="font-size: 18px;">description</span>
                            <span>CV (PDF)</span>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Stats / Highlight Bar -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-6">
                    <div class="bg-surface-container-low p-4 rounded-xl border border-surface-container-high/50 flex flex-col justify-between">
                        <span class="font-label-caps text-xs text-outline uppercase font-semibold">Deneyim</span>
                        <span class="font-code-md text-2xl text-on-surface font-bold my-1"><?= $config['profile']['experience_years'] ?></span>
                        <span class="font-body-sm text-xs text-on-surface-variant">Yazılım Serüveni</span>
                    </div>
                    <div class="bg-surface-container-low p-4 rounded-xl border border-surface-container-high/50 flex flex-col justify-between">
                        <span class="font-label-caps text-xs text-outline uppercase font-semibold">Projeler</span>
                        <span class="font-code-md text-2xl text-primary font-bold my-1"><?= $config['profile']['completed_projects'] ?></span>
                        <span class="font-body-sm text-xs text-on-surface-variant">Tamamlanan Çalışma</span>
                    </div>
                    <div class="bg-surface-container-low p-4 rounded-xl border border-surface-container-high/50 flex flex-col justify-between">
                        <span class="font-label-caps text-xs text-outline uppercase font-semibold">Hız Skoru</span>
                        <span class="font-code-md text-2xl text-tertiary font-bold my-1"><?= $config['profile']['speed_score'] ?></span>
                        <span class="font-body-sm text-xs text-on-surface-variant">Google PageSpeed</span>
                    </div>
                    <div class="bg-surface-container-low p-4 rounded-xl border border-surface-container-high/50 flex flex-col justify-between">
                        <span class="font-label-caps text-xs text-outline uppercase font-semibold">Memnuniyet</span>
                        <span class="font-code-md text-2xl text-secondary font-bold my-1"><?= $config['profile']['happy_clients'] ?></span>
                        <span class="font-body-sm text-xs text-on-surface-variant">Özenli &amp; Şeffaf İletişim</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Developer Profile Terminal -->
            <div class="lg:col-span-5 relative mt-6 lg:mt-0">
                <div class="absolute -inset-1 rounded-2xl bg-gradient-to-r from-primary/20 via-secondary-container/20 to-tertiary/20 blur-xl opacity-60"></div>
                <div class="relative bg-surface-container-lowest rounded-2xl p-5 shadow-2xl flex flex-col border border-surface-container-high">
                    
                    <!-- Window Header Bar -->
                    <div class="flex items-center justify-between pb-3 border-b border-surface-container-high mb-3">
                        <div class="flex items-center gap-1.5">
                            <span class="w-3 h-3 rounded-full bg-error inline-block"></span>
                            <span class="w-3 h-3 rounded-full bg-[#f59e0b] inline-block"></span>
                            <span class="w-3 h-3 rounded-full bg-tertiary inline-block"></span>
                        </div>
                        <div class="flex items-center gap-1.5 text-on-surface-variant font-code-sm text-xs">
                            <span class="material-symbols-outlined text-outline" style="font-size: 14px;">badge</span>
                            <span>sametuzun.profile.json</span>
                        </div>
                        <button class="text-outline hover:text-primary transition-colors flex items-center" id="copy-log-btn" title="Kopyala">
                            <span class="material-symbols-outlined" style="font-size: 18px;">content_copy</span>
                        </button>
                    </div>

                    <!-- Terminal / Object Stream -->
                    <div class="font-code-sm text-[11px] sm:text-xs space-y-1.5 sm:space-y-2 text-on-surface-variant bg-surface-container p-3 sm:p-4 rounded-xl overflow-x-auto max-h-[340px] sm:max-h-none overflow-y-auto">
                        <p class="text-secondary font-bold">// Samet Uzun — Geliştirici Kartı</p>
                        <p class="text-primary">const <span class="text-on-surface">samet</span> = {</p>
                        <p class="pl-3 sm:pl-4">name: <span class="text-tertiary">"Samet Uzun"</span>,</p>
                        <p class="pl-3 sm:pl-4">role: <span class="text-tertiary">"Full-Stack Web Geliştirici"</span>,</p>
                        <p class="pl-3 sm:pl-4">experience: <span class="text-tertiary">"PixelByte (Web Dev) &amp; Ar-Ge"</span>,</p>
                        <p class="pl-3 sm:pl-4">education: <span class="text-tertiary">"MCBÜ (Mezun) &amp; Anadolu Üniv."</span>,</p>
                        <p class="pl-3 sm:pl-4">location: <span class="text-tertiary">"Bilecik / Eskişehir (Remote)"</span>,</p>
                        <p class="pl-3 sm:pl-4">social: { github: <span class="text-tertiary">"@sametuzun26"</span>, ig: <span class="text-tertiary">"@rsametuzun"</span> },</p>
                        <p class="pl-3 sm:pl-4">stack: [<span class="text-tertiary">"PHP 8"</span>, <span class="text-tertiary">"MySQL"</span>, <span class="text-tertiary">"Tailwind"</span>, <span class="text-tertiary">"AI Tools"</span>],</p>
                        <p class="pl-3 sm:pl-4">interests: [<span class="text-secondary">"Temiz Kod"</span>, <span class="text-secondary">"Yapay Zeka"</span>, <span class="text-secondary">"Kahve ☕"</span>],</p>
                        <p class="pl-3 sm:pl-4">status: <span class="text-tertiary">"Yeni fikirlere &amp; tanışmalara açık 🚀"</span></p>
                        <p class="text-primary">};</p>
                        <div class="bg-surface-container-high p-2 rounded-lg my-1.5 sm:my-2 flex items-center justify-between">
                            <span class="text-primary">samet.sayHello();</span>
                            <span class="text-tertiary font-bold">&quot;Birlikte üretelim!&quot;</span>
                        </div>
                        <p class="text-on-surface pt-1 flex items-center">
                            <span class="text-primary mr-1">samet@sametuzun:~$</span>
                            <span class="inline-block w-2 h-3.5 bg-primary animate-pulse ml-0.5"></span>
                        </p>
                    </div>

                    <!-- Terminal Footer -->
                    <div class="flex items-center justify-between pt-3 text-outline font-code-sm text-[11px] sm:text-xs">
                        <span>ORTAM: Modern Web</span>
                        <span class="text-tertiary">DURUM: Aktif &amp; Çevrimiçi</span>
                        <span>HIZ: &lt;0.6sn</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Marquee Strip -->
    <section class="w-full py-6 border-y border-surface-container-high/40 bg-surface-container-lowest/60 backdrop-blur-sm overflow-hidden">
        <div class="max-w-[1280px] mx-auto px-4 mb-3 flex items-center justify-between">
            <span class="font-label-caps text-[11px] text-outline uppercase tracking-wider font-semibold">KULLANDIĞIM TEKNOLOJİLER &amp; ARAÇLAR</span>
            <span class="hidden sm:inline-flex items-center gap-1.5 font-code-sm text-[11px] text-tertiary font-medium">
                <span class="w-1.5 h-1.5 rounded-full bg-tertiary animate-pulse"></span>
                <span>Sürekli Öğrenen &amp; Gelişen Kod Mimarisi</span>
            </span>
        </div>
        
        <div class="mask-fade-x overflow-hidden w-full">
            <div class="animate-marquee flex items-center gap-3.5 py-1.5">
                <?php 
                $techBadges = [
                    [
                        'name' => 'PHP 8.2+',
                        'svg' => '<svg class="w-4 h-4 text-[#777BB4] fill-current shrink-0" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-4.5 13.5H6.2l1.6-7h2.4c1.3 0 2.1.8 1.9 2-.2 1.4-1.2 2-2.3 2H8.6l-.7 3zm5.6 0H11.8l1.6-7h1.3l-.3 1.5c.5-.9 1.4-1.6 2.4-1.6 1.4 0 2 1 1.7 2.4l-1.1 4.7h-1.3l1-4.4c.2-.8-.1-1.3-.9-1.3-.8 0-1.5.7-1.8 1.8l-.9 3.9zm5.9-4.8c-.3 1.5-1.5 2.1-2.7 2.1h-1.1l-.6 2.7h-1.3l1.6-7h2.3c1.3 0 2.1.8 1.8 2.2zm-9.3-3.2l-.5 2.2h1.1c.7 0 1.2-.4 1.3-1 .1-.6-.2-1.2-1-1.2h-.9zm7.3 0l-.5 2.2h1c.7 0 1.3-.4 1.4-1 .1-.7-.2-1.2-1-1.2h-.9z"/></svg>',
                        'border' => 'border-[#777BB4]/35'
                    ],
                    [
                        'name' => 'MySQL / MariaDB',
                        'svg' => '<svg class="w-4 h-4 text-[#00758F] fill-current shrink-0" viewBox="0 0 24 24"><path d="M12 3C7.58 3 4 4.79 4 7v10c0 2.21 3.58 4 8 4s8-1.79 8-4V7c0-2.21-3.58-4-8-4zm0 2c3.87 0 6 1.5 6 2s-2.13 2-6 2-6-1.5-6-2 2.13-2 6-2zm-6 4.78c1.38.79 3.55 1.22 6 1.22s4.62-.43 6-1.22V12c0 .5-2.13 2-6 2s-6-1.5-6-2V9.78zm0 5c1.38.79 3.55 1.22 6 1.22s4.62-.43 6-1.22V17c0 .5-2.13 2-6 2s-6-1.5-6-2v-2.22z"/></svg>',
                        'border' => 'border-[#00758F]/35'
                    ],
                    [
                        'name' => 'Tailwind CSS',
                        'svg' => '<svg class="w-4 h-4 text-[#06B6D4] fill-current shrink-0" viewBox="0 0 24 24"><path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z"/></svg>',
                        'border' => 'border-[#06B6D4]/35'
                    ],
                    [
                        'name' => 'JavaScript (ES6+)',
                        'svg' => '<svg class="w-4 h-4 text-[#F7DF1E] fill-current shrink-0" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.63-1.514-.946-2.58-.946-1.425 0-2.476.795-2.73 1.996-.285 1.305.42 2.235 1.89 2.82.9.39 1.47.646 1.636 1.156.24.69-.27 1.126-1.275 1.126-1.066 0-1.606-.57-2.041-1.396l-1.815 1.051c.361.765.811 1.305 1.426 1.68 1.006.6 2.37.75 3.51.525 1.77-.345 2.76-1.515 2.58-3.468zm-8.851-7.261h-2.265v6.526c0 1.2-.18 1.845-.735 2.205-.555.36-1.29.345-1.785.24-.39-.105-.721-.33-.946-.645l-1.666 1.2c.45.72 1.11 1.26 1.936 1.545 1.125.39 2.58.33 3.615-.36 1.185-.795 1.846-2.146 1.846-4.186v-6.525z"/></svg>',
                        'border' => 'border-[#F7DF1E]/35'
                    ],
                    [
                        'name' => 'HTML5 / Semantic',
                        'svg' => '<svg class="w-4 h-4 text-[#E34F26] fill-current shrink-0" viewBox="0 0 24 24"><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.883-.804-.188-2.097H6.308l.36 4.17 5.332 1.48 5.305-1.48.729-8.169H8.531z"/></svg>',
                        'border' => 'border-[#E34F26]/35'
                    ],
                    [
                        'name' => 'Git Versiyon Kontrolü',
                        'svg' => '<svg class="w-4 h-4 text-[#F05032] fill-current shrink-0" viewBox="0 0 24 24"><path d="M23.546 10.93L13.067.452c-.604-.603-1.582-.603-2.188 0L8.708 2.627l2.76 2.76c.645-.215 1.379-.07 1.889.441.516.515.658 1.258.438 1.9l2.658 2.66c.645-.223 1.387-.078 1.9.435.721.72.721 1.884 0 2.604-.719.719-1.881.719-2.6 0-.529-.527-.667-1.297-.414-1.954L12.79 8.922v6.574c.217.106.417.25.584.417.72.72.72 1.884 0 2.604-.719.719-1.881.719-2.6 0-.721-.72-.721-1.884 0-2.604.223-.223.494-.37.781-.447V8.877c-.287-.077-.558-.224-.781-.447-.539-.538-.672-1.325-.398-1.989L7.65 3.685.454 10.88c-.605.604-.605 1.581 0 2.186l10.481 10.481c.604.604 1.582.604 2.187 0l10.424-10.424c.606-.603.606-1.58 0-2.193z"/></svg>',
                        'border' => 'border-[#F05032]/35'
                    ],
                    [
                        'name' => 'REST API & Webhooks',
                        'svg' => '<span class="material-symbols-outlined text-tertiary" style="font-size: 18px;">sync_alt</span>',
                        'border' => 'border-tertiary/30'
                    ],
                    [
                        'name' => 'Sanal POS (Iyzico/PayTR)',
                        'svg' => '<span class="material-symbols-outlined text-primary" style="font-size: 18px;">credit_card</span>',
                        'border' => 'border-primary/30'
                    ],
                    [
                        'name' => 'Mobil Öncelikli UI',
                        'svg' => '<span class="material-symbols-outlined text-secondary" style="font-size: 18px;">smartphone</span>',
                        'border' => 'border-secondary/30'
                    ],
                    [
                        'name' => 'Google Lighthouse 98+',
                        'svg' => '<span class="material-symbols-outlined text-tertiary" style="font-size: 18px;">speed</span>',
                        'border' => 'border-tertiary/30'
                    ],
                    [
                        'name' => 'Nginx & Apache',
                        'svg' => '<span class="material-symbols-outlined text-[#009639]" style="font-size: 18px;">dns</span>',
                        'border' => 'border-[#009639]/30'
                    ],
                    [
                        'name' => '256-Bit SSL Şifreleme',
                        'svg' => '<span class="material-symbols-outlined text-primary" style="font-size: 18px;">verified_user</span>',
                        'border' => 'border-primary/30'
                    ],
                ];
                for ($loop = 0; $loop < 2; $loop++):
                    foreach ($techBadges as $tech):
                ?>
                    <div class="flex items-center gap-2.5 px-3.5 py-1.5 rounded-lg bg-surface-container border <?= $tech['border'] ?> whitespace-nowrap shadow-sm hover:scale-105 transition-transform cursor-default">
                        <?= $tech['svg'] ?>
                        <span class="font-code-sm text-xs font-bold text-on-surface"><?= $tech['name'] ?></span>
                    </div>
                <?php 
                    endforeach;
                endfor; 
                ?>
            </div>
        </div>
    </section>

    <!-- HAKKIMDA & HİKAYEM (About Me) -->
    <section class="w-full max-w-[1280px] mx-auto px-4 md:px-8 py-16 md:py-20" id="about-section">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            
            <!-- Left Column: Story -->
            <div class="lg:col-span-7 flex flex-col gap-6">
                <div>
                    <span class="font-label-caps text-xs text-primary uppercase tracking-widest font-bold block mb-2">BEN KİMİM?</span>
                    <h2 class="font-headline-lg text-2xl md:text-3xl lg:text-4xl font-bold text-on-surface">
                        Hikayem, Kodlama Tutkum ve Çalışma Yaklaşımım
                    </h2>
                </div>

                <div class="space-y-4 font-body-md text-sm md:text-base text-on-surface-variant leading-relaxed">
                    <?php foreach ($config['about']['paragraphs'] as $para): ?>
                        <p><?= htmlspecialchars($para) ?></p>
                    <?php endforeach; ?>
                </div>

                <!-- Personal Traits / Highlights -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-surface-container-high/60">
                    <?php foreach ($config['about']['highlights'] as $item): ?>
                        <div class="flex items-start gap-3 p-3.5 rounded-xl bg-surface-container-low border border-surface-container-high/50">
                            <span class="material-symbols-outlined text-primary shrink-0 mt-0.5" style="font-size: 22px;"><?= htmlspecialchars($item['icon']) ?></span>
                            <div>
                                <h4 class="font-headline-sm text-sm font-bold text-on-surface"><?= htmlspecialchars($item['title']) ?></h4>
                                <p class="font-body-sm text-xs text-on-surface-variant mt-1 leading-relaxed"><?= htmlspecialchars($item['desc']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Right Column: Profile Card & Quick Info -->
            <div class="lg:col-span-5 bg-surface-container rounded-2xl p-6 lg:p-8 border border-surface-container-high/70 flex flex-col justify-between shadow-xl relative overflow-hidden">
                <div class="absolute -top-12 -right-12 w-48 h-48 bg-primary/10 rounded-full blur-2xl pointer-events-none"></div>

                <div>
                    <!-- Avatar / Initial Badge -->
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-primary to-tertiary flex items-center justify-center font-display-xl text-2xl font-extrabold text-on-primary-container shadow-lg">
                            SU
                        </div>
                        <div>
                            <h3 class="font-headline-md text-xl font-bold text-on-surface"><?= htmlspecialchars($config['profile']['name']) ?></h3>
                            <p class="font-code-sm text-xs text-primary font-medium"><?= htmlspecialchars($config['profile']['role']) ?></p>
                            <span class="inline-flex items-center gap-1.5 text-[11px] font-code-sm text-tertiary mt-1">
                                <span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
                                <span>Aktif &amp; Yeni Projeler Üretiyor</span>
                            </span>
                        </div>
                    </div>

                    <!-- Quick Facts -->
                    <div class="space-y-3 font-code-sm text-xs text-on-surface-variant border-y border-surface-container-high/60 py-5 my-5">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-0.5 sm:gap-2">
                            <span class="text-outline">Eğitim:</span>
                            <span class="text-on-surface font-semibold text-left sm:text-right">MCBÜ (Mezun) &bull; Anadolu Üniv.</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-0.5 sm:gap-2">
                            <span class="text-outline">Deneyim:</span>
                            <span class="text-on-surface font-semibold text-left sm:text-right">PixelByte (Web) &bull; Porland Ar-Ge</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-0.5 sm:gap-2">
                            <span class="text-outline">Temel:</span>
                            <span class="text-on-surface font-semibold text-left sm:text-right">Bilişim Teknolojileri / Web Tasarım</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-0.5 sm:gap-2">
                            <span class="text-outline">Odak Alanı:</span>
                            <span class="text-on-surface font-semibold text-left sm:text-right">Full-Stack Web &amp; Yapay Zeka</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-0.5 sm:gap-2">
                            <span class="text-outline">Ana Diller:</span>
                            <span class="text-primary font-semibold text-left sm:text-right">PHP, MySQL, JavaScript, HTML/CSS</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-0.5 sm:gap-2">
                            <span class="text-outline">Konum:</span>
                            <span class="text-on-surface font-semibold text-left sm:text-right">Bilecik / Eskişehir &bull; Remote</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-0.5 sm:gap-2">
                            <span class="text-outline">E-Posta:</span>
                            <div class="flex items-center gap-1.5 self-start sm:self-auto">
                                <a href="mailto:<?= htmlspecialchars($config['contact']['email']) ?>" class="text-tertiary font-semibold hover:underline"><?= htmlspecialchars($config['contact']['email']) ?></a>
                                <button type="button" data-copy="<?= htmlspecialchars($config['contact']['email']) ?>" title="E-postayı Kopyala" class="p-1 rounded hover:bg-surface-container-high text-outline hover:text-primary transition-colors inline-flex items-center">
                                    <span class="material-symbols-outlined" style="font-size: 15px;">content_copy</span>
                                </button>
                            </div>
                        </div>
                        <?php if (!empty($config['contact']['phone'])): ?>
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-0.5 sm:gap-2">
                                <span class="text-outline">Telefon:</span>
                                <div class="flex items-center gap-1.5 self-start sm:self-auto">
                                    <a href="tel:<?= preg_replace('/[^0-9+]/', '', $config['contact']['phone']) ?>" class="text-on-surface hover:text-primary font-semibold transition-colors"><?= htmlspecialchars($config['contact']['phone']) ?></a>
                                    <button type="button" data-copy="<?= preg_replace('/[^0-9+]/', '', $config['contact']['phone']) ?>" title="Numarayı Kopyala" class="p-1 rounded hover:bg-surface-container-high text-outline hover:text-primary transition-colors inline-flex items-center">
                                        <span class="material-symbols-outlined" style="font-size: 15px;">content_copy</span>
                                    </button>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($config['contact']['github'])): ?>
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-0.5 sm:gap-2">
                                <span class="text-outline">GitHub:</span>
                                <a href="<?= htmlspecialchars($config['contact']['github']) ?>" target="_blank" rel="noopener noreferrer" class="text-primary hover:underline font-semibold text-left sm:text-right">@<?= htmlspecialchars($config['contact']['github_username'] ?? 'sametuzun26') ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($config['contact']['instagram'])): ?>
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-0.5 sm:gap-2">
                                <span class="text-outline">Instagram:</span>
                                <a href="<?= htmlspecialchars($config['contact']['instagram']) ?>" target="_blank" rel="noopener noreferrer" class="text-[#E1306C] hover:underline font-semibold text-left sm:text-right">@<?= htmlspecialchars($config['contact']['instagram_username'] ?? 'rsametuzun') ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Connect Buttons -->
                <div class="space-y-2.5 pt-2">
                    <a href="#contact-section" class="w-full inline-flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-primary-container text-on-primary-container font-code-md text-xs font-bold hover:scale-[1.02] transition-transform shadow-md">
                        <span class="material-symbols-outlined" style="font-size: 18px;">mail</span>
                        <span>Bana Mesaj Gönder</span>
                    </a>
                    <?php if (!empty($config['profile']['cv_url'])): ?>
                        <a href="<?= htmlspecialchars($config['profile']['cv_url']) ?>" target="_blank" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-surface-container-high text-on-surface hover:text-tertiary font-code-md text-xs font-bold transition-colors border border-surface-container-highest">
                            <span class="material-symbols-outlined text-tertiary" style="font-size: 18px;">description</span>
                            <span>Özgeçmişimi İndir (PDF)</span>
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($config['contact']['whatsapp'])): ?>
                        <a href="https://wa.me/<?= htmlspecialchars($config['contact']['whatsapp']) ?>" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-surface-container-high text-on-surface hover:text-primary font-code-md text-xs font-bold transition-colors border border-surface-container-highest">
                            <span class="material-symbols-outlined text-[#25D366]" style="font-size: 18px;">chat</span>
                            <span>WhatsApp'tan Yaz (@<?= htmlspecialchars($config['contact']['whatsapp']) ?>)</span>
                        </a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>

    <!-- Uzmanlık Alanları -->
    <section class="w-full bg-surface-container-lowest/80 py-16 border-y border-surface-container-high/40" id="capabilities">
        <div class="max-w-[1280px] mx-auto px-4 md:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
                <div>
                    <span class="font-label-caps text-xs text-primary uppercase tracking-wider block mb-2 font-bold">NELER YAPIYORUM?</span>
                    <h2 class="font-headline-lg text-2xl md:text-3xl font-bold text-on-surface">Uzmanlık Alanlarım &amp; Becerilerim</h2>
                </div>
                <p class="font-body-md text-sm md:text-base text-on-surface-variant max-w-[420px]">
                    Kullanıcıların rahatça gezindiği modern arayüzlerden, arkada güvenle çalışan veritabanı sistemlerine kadar eksiksiz çözümler.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach ($config['capabilities'] as $cap): ?>
                    <div class="card-glow-hover bg-surface-container rounded-2xl p-6 flex flex-col justify-between group hover:bg-surface-container-high transition-all border border-surface-container-high/50 shadow-sm">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-surface-container-highest flex items-center justify-center mb-4 group-hover:bg-primary-container transition-colors">
                                <span class="material-symbols-outlined text-primary group-hover:text-on-primary-container" style="font-size: 28px;"><?= htmlspecialchars($cap['icon']) ?></span>
                            </div>
                            <span class="font-label-caps text-xs text-outline uppercase block mb-1 font-semibold"><?= htmlspecialchars($cap['category']) ?></span>
                            <h3 class="font-headline-md text-xl font-bold text-on-surface mb-2"><?= htmlspecialchars($cap['title']) ?></h3>
                            <p class="font-body-md text-sm text-on-surface-variant mb-6 leading-relaxed">
                                <?= htmlspecialchars($cap['desc']) ?>
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-1.5 pt-2 border-t border-surface-container-high">
                            <?php foreach ($cap['tags'] as $tag): ?>
                                <span class="px-2.5 py-1 rounded bg-surface-container-highest text-primary font-code-sm text-xs font-medium">
                                    <?= htmlspecialchars($tag) ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- KARİYER & DENEYİM YOLCULUĞU (Journey Timeline) -->
    <section class="w-full max-w-[1280px] mx-auto px-4 md:px-8 py-16 md:py-20" id="journey-section">
        <div class="flex flex-col items-center text-center mb-12">
            <span class="font-label-caps text-xs text-primary uppercase tracking-widest mb-2 font-bold">GELİŞİM SÜRECİ</span>
            <h2 class="font-headline-lg text-2xl md:text-3xl font-bold text-on-surface">Yazılım Serüvenim &amp; Adımlarım</h2>
            <p class="font-body-md text-sm text-on-surface-variant mt-2 max-w-[550px]">
                İlk kod satırından bugüne kadar kat ettiğim mesafe, öğrendiğim teknolojiler ve odaklandığım alanlar.
            </p>
        </div>

        <div class="max-w-[800px] mx-auto relative border-l-2 border-surface-container-high/80 pl-4 sm:pl-6 md:pl-8 ml-2.5 sm:ml-4 md:ml-auto space-y-8 sm:space-y-10">
            <?php foreach ($config['journey'] as $item): ?>
                <div class="relative group">
                    <!-- Marker Dot -->
                    <div class="absolute -left-[25px] sm:-left-[31px] md:-left-[39px] top-1.5 w-4 h-4 rounded-full bg-surface border-2 border-primary group-hover:bg-primary transition-colors flex items-center justify-center">
                        <span class="w-1.5 h-1.5 rounded-full bg-primary group-hover:bg-surface"></span>
                    </div>

                    <div class="card-glow-hover bg-surface-container rounded-2xl p-4 sm:p-6 border border-surface-container-high/60 shadow-sm transition-all">
                        <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
                            <span class="px-3 py-1 rounded-full bg-primary/10 text-primary font-code-sm text-xs font-bold">
                                <?= htmlspecialchars($item['period']) ?>
                            </span>
                            <span class="font-code-sm text-xs text-outline font-medium"><?= htmlspecialchars($item['role']) ?></span>
                        </div>
                        <h3 class="font-headline-sm text-lg font-bold text-on-surface mb-2"><?= htmlspecialchars($item['title']) ?></h3>
                        <p class="font-body-md text-sm text-on-surface-variant mb-4 leading-relaxed">
                            <?= htmlspecialchars($item['desc']) ?>
                        </p>
                        <div class="flex flex-wrap gap-1.5 pt-2 border-t border-surface-container-high/50">
                            <?php foreach ($item['tags'] as $tag): ?>
                                <span class="px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant font-code-sm text-xs">
                                    <?= htmlspecialchars($tag) ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Projeler & Referans Çalışmalar -->
    <section class="w-full bg-surface-container-lowest/80 py-16 border-y border-surface-container-high/40" id="work-section">
        <div class="max-w-[1280px] mx-auto px-4 md:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
                <div>
                    <span class="font-label-caps text-xs text-primary uppercase tracking-widest block mb-2 font-bold">PORTFOLYO</span>
                    <h2 class="font-headline-lg text-2xl md:text-3xl font-bold text-on-surface">Öne Çıkan Çalışmalarım</h2>
                </div>
                <!-- Filter Pills -->
                <div class="flex flex-wrap items-center gap-1.5 bg-surface-container p-1 rounded-lg border border-surface-container-high">
                    <button class="filter-tab px-3.5 py-1.5 rounded font-code-sm text-xs text-on-surface bg-surface-container-high transition-colors" data-filter="all">
                        Tümü (<?= count($config['projects']) ?>)
                    </button>
                    <button class="filter-tab px-3.5 py-1.5 rounded font-code-sm text-xs text-on-surface-variant hover:text-on-surface transition-colors" data-filter="corporate">
                        Kurumsal &amp; Landing
                    </button>
                    <button class="filter-tab px-3.5 py-1.5 rounded font-code-sm text-xs text-on-surface-variant hover:text-on-surface transition-colors" data-filter="ecommerce">
                        E-Ticaret
                    </button>
                    <button class="filter-tab px-3.5 py-1.5 rounded font-code-sm text-xs text-on-surface-variant hover:text-on-surface transition-colors" data-filter="custom">
                        Özel Yazılım &amp; AI
                    </button>
                </div>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php foreach ($config['projects'] as $project): 
                    $projectJson = htmlspecialchars(json_encode($project, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE));
                ?>
                    <div class="project-card card-glow-hover bg-surface-container rounded-2xl overflow-hidden border border-surface-container-high/60 flex flex-col group cursor-pointer transition-all duration-300" 
                         data-category="<?= htmlspecialchars($project['category']) ?>"
                         onclick="openProjectModal(<?= $projectJson ?>)">
                        
                        <!-- Browser Window Mockup Bar -->
                        <div class="bg-surface-container-lowest/90 px-4 py-2.5 border-b border-surface-container-high flex items-center justify-between gap-3">
                            <div class="flex items-center gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-[#ef4444] inline-block opacity-85"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-[#eab308] inline-block opacity-85"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-[#22c55e] inline-block opacity-85"></span>
                            </div>
                            <div class="flex-1 max-w-[260px] bg-surface-container-low px-3 py-0.5 rounded-md text-[11px] font-code-sm text-on-surface-variant flex items-center justify-center gap-1.5 border border-surface-container-high/50 truncate">
                                <span class="material-symbols-outlined text-tertiary" style="font-size: 13px;">lock</span>
                                <span class="truncate">https://<?= strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $project['category'])) ?>.sametuzun.dev</span>
                            </div>
                            <span class="font-code-sm text-[10px] font-bold px-2 py-0.5 rounded bg-surface-container-high text-primary uppercase">
                                <?= htmlspecialchars($project['category_label']) ?>
                            </span>
                        </div>

                        <!-- Screen Preview -->
                        <div class="relative h-56 sm:h-60 overflow-hidden bg-surface-container-highest">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['title']) ?>"/>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface-container via-transparent to-transparent opacity-40 group-hover:opacity-10 transition-opacity"></div>
                            <div class="absolute bottom-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity bg-surface-container-lowest/90 backdrop-blur px-2.5 py-1 rounded-md text-[11px] font-code-sm text-primary flex items-center gap-1 border border-primary/30">
                                <span>İncele</span>
                                <span class="material-symbols-outlined" style="font-size: 14px;">open_in_full</span>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6 flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <h3 class="font-headline-md text-lg font-bold text-on-surface group-hover:text-primary transition-colors"><?= htmlspecialchars($project['title']) ?></h3>
                                    <span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">arrow_outward</span>
                                </div>
                                <p class="font-body-md text-sm text-on-surface-variant mb-4 leading-relaxed">
                                    <?= htmlspecialchars($project['desc']) ?>
                                </p>
                                <!-- Responsive Metrics Bar -->
                                <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 bg-surface-container-low p-2.5 sm:p-3 rounded-lg mb-4 border border-surface-container-high/40">
                                    <?php foreach ($project['metrics'] as $metric): ?>
                                        <div class="min-w-0">
                                            <span class="font-label-caps text-[10px] text-outline block font-semibold truncate"><?= htmlspecialchars($metric['label']) ?></span>
                                            <span class="font-code-md text-xs <?= htmlspecialchars($metric['color']) ?> font-bold truncate block"><?= htmlspecialchars($metric['val']) ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            
                            <!-- Tags & Action Button -->
                            <div class="pt-3 border-t border-surface-container-high flex flex-wrap items-center justify-between gap-3">
                                <div class="flex flex-wrap gap-1.5">
                                    <?php foreach ($project['tags'] as $tag): ?>
                                        <span class="px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant font-code-sm text-xs">
                                            <?= htmlspecialchars($tag) ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                                <div class="flex items-center gap-3">
                                    <button type="button" 
                                            onclick="event.stopPropagation(); openProjectModal(<?= $projectJson ?>);" 
                                            class="inline-flex items-center gap-1 text-on-surface-variant hover:text-primary font-code-sm text-xs font-semibold py-1 px-2 rounded hover:bg-surface-container-high transition-colors">
                                        <span class="material-symbols-outlined" style="font-size: 15px;">visibility</span>
                                        <span>Case Study</span>
                                    </button>
                                    <a href="#contact-section" 
                                       onclick="event.stopPropagation(); document.getElementById('project-notes').value = 'Merhaba Samet, portfolyondaki \'<?= htmlspecialchars(addslashes($project['title'])) ?>\' projesini inceledim, buna benzer bir çalışma üzerine konuşmak istiyorum.'; document.getElementById('project-notes').focus();" 
                                       class="inline-flex items-center gap-1 text-primary hover:underline font-code-sm text-xs font-bold">
                                        <span>Bunu Konuşalım</span>
                                        <span class="material-symbols-outlined" style="font-size: 14px;">arrow_forward</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- BİRLİKTE NELER YAPABİLİRİZ? (İş Birliği Alanları - Sıcak & Samimi) -->
    <section class="w-full max-w-[1280px] mx-auto px-4 md:px-8 py-16 md:py-20" id="collaboration-section">
        <div class="flex flex-col items-center text-center mb-12">
            <span class="font-label-caps text-xs text-primary uppercase tracking-widest mb-2 font-bold">İŞ BİRLİĞİ</span>
            <h2 class="font-headline-lg text-2xl md:text-3xl font-bold text-on-surface">Birlikte Neler Yapabiliriz?</h2>
            <p class="font-body-md text-sm text-on-surface-variant mt-2 max-w-[550px]">
                Farklı ihtiyaçlara ve projelere esnek bir şekilde adapte olabilirim. İşte iş birliği yapabileceğimiz alanlar:
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
            <?php foreach ($config['collaborations'] as $collab): ?>
                <div class="card-glow-hover bg-surface-container-low rounded-2xl p-6 lg:p-8 border border-surface-container-high/60 flex flex-col justify-between transition-all group">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-surface-container-highest flex items-center justify-center mb-5 group-hover:bg-primary-container transition-colors">
                            <span class="material-symbols-outlined text-primary group-hover:text-on-primary-container" style="font-size: 26px;"><?= htmlspecialchars($collab['icon']) ?></span>
                        </div>
                        <h3 class="font-headline-md text-xl font-bold text-on-surface mb-3"><?= htmlspecialchars($collab['title']) ?></h3>
                        <p class="font-body-md text-sm text-on-surface-variant mb-6 leading-relaxed">
                            <?= htmlspecialchars($collab['desc']) ?>
                        </p>
                    </div>

                    <div class="pt-4 border-t border-surface-container-high">
                        <span class="font-code-sm text-xs text-outline block mb-3 font-medium">Kimler İçin Uygun?</span>
                        <p class="font-body-sm text-xs text-on-surface mb-4 leading-relaxed"><?= htmlspecialchars($collab['for_who']) ?></p>
                        <a href="#contact-section" 
                           onclick="document.getElementById('project-notes').value = 'Merhaba Samet, \'<?= htmlspecialchars(addslashes($collab['title'])) ?>\' konusunda seninle görüşmek istiyorum.'; document.getElementById('project-notes').focus();"
                           class="inline-flex items-center gap-1.5 text-primary hover:underline font-code-sm text-xs font-bold">
                            <span>Bu Konuda Yazışalım</span>
                            <span class="material-symbols-outlined" style="font-size: 16px;">arrow_forward</span>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- GELİŞTİRME FELSEFEM (Neden Temiz Kod?) -->
    <section class="w-full bg-surface-container-lowest/80 py-16 border-y border-surface-container-high/40" id="philosophy-section">
        <div class="max-w-[1280px] mx-auto px-4 md:px-8">
            <div class="flex flex-col items-center text-center mb-12">
                <span class="font-label-caps text-xs text-primary uppercase tracking-widest mb-2 font-bold">GELİŞTİRİCİ FELSEFEM</span>
                <h2 class="font-headline-lg text-2xl md:text-3xl font-bold text-on-surface max-w-[700px]">
                    Neden Hazır Şablonlar Yerine Temiz Kod Yazıyorum?
                </h2>
                <p class="font-body-md text-sm text-on-surface-variant mt-2 max-w-[620px]">
                    Bir web projesinin uzun ömürlü olması, güvenliği ve hızı doğrudan arkasındaki kod mimarisine bağlıdır.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
                <!-- Sol: Hazır Şablon / Eklenti Dünyası -->
                <div class="bg-surface-container-low rounded-2xl p-6 lg:p-8 border border-error/40 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between pb-4 border-b border-surface-container-high mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-error/10 text-error flex items-center justify-center font-bold">
                                    <span class="material-symbols-outlined" style="font-size: 24px;">warning</span>
                                </div>
                                <div>
                                    <h3 class="font-headline-sm text-lg font-bold text-on-surface">Hazır Sistemler &amp; Ağır Eklentiler</h3>
                                    <span class="font-code-sm text-xs text-error font-semibold">Güvenlik Riskleri &amp; Şişkin Kod</span>
                                </div>
                            </div>
                            <span class="px-2.5 py-1 rounded bg-error/15 text-error font-code-sm text-xs font-bold uppercase">ZORLUKLAR</span>
                        </div>

                        <div class="space-y-5">
                            <?php foreach ($config['comparison'] as $item): ?>
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-error shrink-0 mt-0.5" style="font-size: 20px;">close</span>
                                    <div>
                                        <strong class="font-headline-sm text-sm text-on-surface block"><?= htmlspecialchars($item['title']) ?></strong>
                                        <p class="font-body-sm text-xs text-on-surface-variant mt-0.5 leading-relaxed"><?= htmlspecialchars($item['wp']) ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="mt-8 pt-4 border-t border-surface-container-high/60 bg-error/5 -mx-6 -mb-6 p-4 rounded-b-2xl flex items-center gap-2.5 text-error font-code-sm text-xs">
                        <span class="material-symbols-outlined shrink-0" style="font-size: 20px;">gpp_bad</span>
                        <span>Birçok web güvenlik açığı, kontrolsüz ve güncellenmeyen eklenti yığınlarından doğar.</span>
                    </div>
                </div>

                <!-- Sağ: Samet Uzun Geliştirme Yaklaşımı -->
                <div class="bg-surface-container rounded-2xl p-6 lg:p-8 border-2 border-primary/50 flex flex-col justify-between shadow-[0_0_32px_-8px_rgba(6,182,212,0.25)]">
                    <div>
                        <div class="flex items-center justify-between pb-4 border-b border-surface-container-high mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-primary-container text-on-primary-container flex items-center justify-center font-bold">
                                    <span class="material-symbols-outlined" style="font-size: 24px;">verified_user</span>
                                </div>
                                <div>
                                    <h3 class="font-headline-sm text-lg font-bold text-on-surface">Özel &amp; Sade Kod Mimarisi</h3>
                                    <span class="font-code-sm text-xs text-tertiary font-semibold">Temiz, Hızlı ve Uzun Ömürlü</span>
                                </div>
                            </div>
                            <span class="px-2.5 py-1 rounded bg-tertiary-container/20 text-tertiary font-code-sm text-xs font-bold uppercase">BENİM STANDARTLARIM</span>
                        </div>

                        <div class="space-y-5">
                            <?php foreach ($config['comparison'] as $item): ?>
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-tertiary shrink-0 mt-0.5" style="font-size: 20px;">check_circle</span>
                                    <div>
                                        <strong class="font-headline-sm text-sm text-on-surface block"><?= htmlspecialchars($item['title']) ?></strong>
                                        <p class="font-body-sm text-xs text-on-surface-variant mt-0.5 leading-relaxed"><?= htmlspecialchars($item['custom']) ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="mt-8 pt-4 border-t border-surface-container-high/60 bg-primary/5 -mx-6 -mb-6 p-4 rounded-b-2xl flex items-center gap-2.5 text-primary font-code-sm text-xs">
                        <span class="material-symbols-outlined shrink-0" style="font-size: 20px;">lock</span>
                        <span>Sadece gereken kodlar yazılır; sayfa &lt;0.8 saniyede açılır, kullanıcı beklemez.</span>
                    </div>
                </div>
            </div>

            <!-- Görsel Hız Kıyaslama Grafiği -->
            <div class="mt-10 bg-surface-container-low rounded-2xl p-6 lg:p-8 border border-surface-container-high/70 shadow-lg">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
                    <div>
                        <span class="font-label-caps text-xs text-primary uppercase font-bold tracking-wider">HIZ DENEYİMİ</span>
                        <h3 class="font-headline-sm text-lg font-bold text-on-surface mt-1">Açılış Süresi Kıyaslaması</h3>
                    </div>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container-high font-code-sm text-xs text-tertiary border border-surface-container-highest">
                        <span class="material-symbols-outlined text-tertiary" style="font-size: 16px;">bolt</span>
                        <span>İdeal Web Standardı: &lt;1.2 sn</span>
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="font-headline-sm text-sm font-semibold text-on-surface">Hazır Şablonlar / Çok Sayıda Eklenti</span>
                            <span class="font-code-md text-sm font-bold text-error">4.8 sn <span class="text-xs text-outline font-normal">(Yavaş)</span></span>
                        </div>
                        <div class="w-full h-3 bg-surface-container-lowest rounded-full overflow-hidden p-0.5 border border-surface-container-high">
                            <div class="h-full bg-error rounded-full" style="width: 82%;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="font-headline-sm text-sm font-semibold text-on-surface">Samet Uzun Özel Kodlama</span>
                            <span class="font-code-md text-sm font-bold text-tertiary">0.6 sn <span class="text-xs text-outline font-normal">(Yıldırım Hız)</span></span>
                        </div>
                        <div class="w-full h-3 bg-surface-container-lowest rounded-full overflow-hidden p-0.5 border border-surface-container-high">
                            <div class="h-full bg-gradient-to-r from-primary to-tertiary rounded-full shadow-[0_0_12px_rgba(78,222,163,0.5)]" style="width: 14%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Merak Edilenler (FAQ) -->
    <section class="w-full max-w-[1280px] mx-auto px-4 md:px-8 py-16" id="faq-section">
        <div class="flex flex-col items-center text-center mb-12">
            <span class="font-label-caps text-xs text-primary uppercase tracking-widest mb-2 font-bold">SORULAR &amp; CEVAPLAR</span>
            <h2 class="font-headline-lg text-2xl md:text-3xl font-bold text-on-surface">Merak Edilenler</h2>
            <p class="font-body-md text-sm text-on-surface-variant mt-2 max-w-[500px]">
                Çalışma prensiplerim ve süreç hakkında aklınıza takılabilecek konular.
            </p>
        </div>

        <div class="max-w-[800px] mx-auto space-y-3.5">
            <?php foreach ($config['faq'] as $index => $item): ?>
                <div class="bg-surface-container-low rounded-2xl border border-surface-container-high/60 overflow-hidden transition-colors">
                    <button type="button" class="faq-toggle w-full px-6 py-4 text-left flex items-center justify-between gap-4 font-headline-sm text-base font-semibold text-on-surface hover:text-primary transition-colors" data-target="faq-<?= $index ?>">
                        <span><?= htmlspecialchars($item['q']) ?></span>
                        <span class="faq-icon material-symbols-outlined text-outline transition-transform duration-200" style="font-size: 22px;">expand_more</span>
                    </button>
                    <div id="faq-<?= $index ?>" class="faq-content hidden px-6 pb-4 pt-1 font-body-md text-sm text-on-surface-variant leading-relaxed border-t border-surface-container-high/30">
                        <?= htmlspecialchars($item['a']) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- SAMİMİ İLETİŞİM BÖLÜMÜ (Bir Kahve Ismarla / Mesaj Bırak) -->
    <section class="w-full bg-surface-container-lowest/90 py-16 md:py-20 border-t border-surface-container-high/40" id="contact-section">
        <div class="max-w-[880px] mx-auto px-4 md:px-8">
            <div class="relative rounded-3xl bg-gradient-to-b from-primary/30 via-transparent to-transparent p-[1px] shadow-[0_0_32px_-6px_rgba(6,182,212,0.25)]">
                <div class="bg-surface-container rounded-3xl p-6 md:p-10 backdrop-blur-2xl border border-surface-container-high">
                    
                    <!-- Header -->
                    <div class="flex flex-col md:flex-row md:items-start justify-between gap-4 mb-8">
                        <div>
                            <div class="flex items-center gap-1.5 font-code-sm text-xs text-primary mb-1 font-bold">
                                <span class="material-symbols-outlined" style="font-size: 18px;">coffee</span>
                                <span>BİR MERHABA DEYİN</span>
                            </div>
                            <h2 class="font-headline-lg text-2xl md:text-3xl font-bold text-on-surface">Birlikte Bir Şeyler Üretelim</h2>
                            <p class="font-body-md text-sm text-on-surface-variant mt-1.5">
                                Aklınızda bir proje mi var, ekibinize bir geliştirici mi arıyorsunuz ya da sadece yazılım üzerine konuşmak mı istersiniz? Çekinmeden yazın, tanışmaktan mutluluk duyarım!
                            </p>
                        </div>
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container-high font-code-sm text-xs text-tertiary whitespace-nowrap self-start border border-surface-container-highest">
                            <span class="w-2 h-2 rounded-full bg-tertiary"></span>
                            <span>Hızlı Geri Dönüş</span>
                        </div>
                    </div>

                    <!-- Form -->
                    <form class="space-y-4" id="project-engagement-form">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-code-sm text-xs text-on-surface mb-1.5 uppercase font-semibold" for="client-name">Adınız Soyadınız *</label>
                                <input class="w-full bg-surface-container-lowest border border-surface-container-high px-4 py-2.5 rounded-xl text-on-surface font-body-md text-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary transition-all" id="client-name" name="name" placeholder="Örn: Ahmet Yılmaz" required="" type="text"/>
                            </div>
                            <div>
                                <label class="block font-code-sm text-xs text-on-surface mb-1.5 uppercase font-semibold" for="client-email">E-posta Adresiniz *</label>
                                <input class="w-full bg-surface-container-lowest border border-surface-container-high px-4 py-2.5 rounded-xl text-on-surface font-body-md text-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary transition-all" id="client-email" name="email" placeholder="ahmet@example.com" required="" type="email"/>
                            </div>
                        </div>

                        <!-- Konu Seçimi (Friendly Subject Selection) -->
                        <div>
                            <label class="block font-code-sm text-xs text-on-surface mb-1.5 uppercase font-semibold">Görüşmek İstediğiniz Konu</label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                                <label class="flex items-center gap-2 bg-surface-container-lowest border border-surface-container-high p-3 rounded-xl cursor-pointer hover:bg-surface-container-high transition-colors">
                                    <input checked="" class="accent-primary" name="scope" type="radio" value="Yeni Bir Web Projesi"/>
                                    <span class="font-code-sm text-xs text-on-surface">Yeni Bir Proje</span>
                                </label>
                                <label class="flex items-center gap-2 bg-surface-container-lowest border border-surface-container-high p-3 rounded-xl cursor-pointer hover:bg-surface-container-high transition-colors">
                                    <input class="accent-primary" name="scope" type="radio" value="Ekip &amp; İş Teklifi"/>
                                    <span class="font-code-sm text-xs text-on-surface">Ekip / İş Teklifi</span>
                                </label>
                                <label class="flex items-center gap-2 bg-surface-container-lowest border border-surface-container-high p-3 rounded-xl cursor-pointer hover:bg-surface-container-high transition-colors">
                                    <input class="accent-primary" name="scope" type="radio" value="Sadece Merhaba &amp; Sohbet"/>
                                    <span class="font-code-sm text-xs text-on-surface">Tanışma &amp; Sohbet ☕</span>
                                </label>
                            </div>
                        </div>

                        <!-- Notes / Mesaj -->
                        <div>
                            <label class="block font-code-sm text-xs text-on-surface mb-1.5 uppercase font-semibold" for="project-notes">Mesajınız *</label>
                            <textarea class="w-full bg-surface-container-lowest border border-surface-container-high px-4 py-3 rounded-xl text-on-surface font-body-md text-sm focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary transition-all" id="project-notes" name="notes" placeholder="Aklınızdaki fikri, projeyi veya sormak istediğiniz herhangi bir şeyi yazabilirsiniz..." required="" rows="4"></textarea>
                        </div>

                        <!-- Actions Bar -->
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-2">
                            <div class="flex items-center gap-2 text-outline font-code-sm text-xs">
                                <span class="material-symbols-outlined text-tertiary" style="font-size: 18px;">sentiment_satisfied</span>
                                <span>Mesajınız doğrudan gelen kutuma düşer.</span>
                            </div>
                            <button id="submit-form-btn" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-primary-container text-on-primary-container font-code-md text-sm font-bold hover:scale-[1.02] transition-transform shadow-[0_0_20px_-2px_rgba(6,182,212,0.35)]" type="submit">
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
        </div>
    </section>

</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
