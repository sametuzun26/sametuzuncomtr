<?php
/**
 * Header Bileşeni
 * @var array $config
 */
?>
<!DOCTYPE html>
<html class="dark scroll-smooth" lang="<?= htmlspecialchars($config['site']['lang']) ?>">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0"/>
    <meta name="theme-color" content="#0a0e16"/>
    <meta name="color-scheme" content="dark"/>
    <meta name="description" content="<?= htmlspecialchars($config['site']['description']) ?>"/>
    <meta name="author" content="<?= htmlspecialchars($config['site']['author']) ?>"/>
    <link rel="manifest" href="manifest.json"/>

    <!-- OpenGraph & Social Sharing Meta Tags -->
    <meta property="og:title" content="<?= htmlspecialchars($config['site']['title']) ?>"/>
    <meta property="og:description" content="<?= htmlspecialchars($config['site']['description']) ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?= htmlspecialchars($config['site']['url']) ?>"/>
    <meta property="og:image" content="<?= htmlspecialchars($config['site']['url']) ?>/screen.png"/>
    <meta property="og:site_name" content="<?= htmlspecialchars($config['profile']['brand']) ?>"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="<?= htmlspecialchars($config['site']['title']) ?>"/>
    <meta name="twitter:description" content="<?= htmlspecialchars($config['site']['description']) ?>"/>
    <meta name="twitter:image" content="<?= htmlspecialchars($config['site']['url']) ?>/screen.png"/>

    <title><?= htmlspecialchars($config['site']['title']) ?></title>

    <!-- Google Fonts & Material Symbols -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>

    <style>
        @layer base {
            html, body { margin: 0; padding: 0; }
            body { overscroll-behavior: none; }
            main > :first-child { margin-top: 0 !important; }
            main > :last-child { margin-bottom: 0 !important; }
        }
        /* Custom neon scrollbar */
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #0a0e16; }
        ::-webkit-scrollbar-thumb { 
            background: #262a33; 
            border-radius: 9999px; 
            border: 2px solid #0a0e16; 
        }
        ::-webkit-scrollbar-thumb:hover { 
            background: #06b6d4; 
            box-shadow: 0 0 12px rgba(6, 182, 212, 0.8); 
        }
        * { scrollbar-width: thin; scrollbar-color: #262a33 #0a0e16; }

        /* Card micro-elevation & cyber glow */
        .card-glow-hover {
            transition: transform 0.28s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.28s cubic-bezier(0.4, 0, 0.2, 1), border-color 0.28s;
        }
        .card-glow-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 34px -4px rgba(6, 182, 212, 0.16), 0 0 16px -2px rgba(6, 182, 212, 0.12);
            border-color: rgba(6, 182, 212, 0.45);
        }

        /* Subtle Developer Dot Grid Background */
        .bg-grid-dots {
            background-image: radial-gradient(rgba(223, 226, 238, 0.07) 1px, transparent 1px);
            background-size: 28px 28px;
        }
        /* Faint Cyber Glow Orbs */
        .glow-orb {
            position: absolute;
            border-radius: 9999px;
            filter: blur(120px);
            pointer-events: none;
            opacity: 0.15;
            z-index: 0;
        }

        /* Marquee Animation */
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 28s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }
        .mask-fade-x {
            mask-image: linear-gradient(to right, transparent, black 12%, black 88%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 12%, black 88%, transparent);
        }
    </style>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface": "#0f131c",
                        "surface-dim": "#0f131c",
                        "surface-bright": "#353942",
                        "surface-container-lowest": "#0a0e16",
                        "surface-container-low": "#181c24",
                        "surface-container": "#1c2028",
                        "surface-container-high": "#262a33",
                        "surface-container-highest": "#31353e",
                        "surface-variant": "#31353e",
                        "on-surface": "#dfe2ee",
                        "on-surface-variant": "#bcc9cd",
                        "outline": "#869397",
                        "outline-variant": "#3d494c",
                        "primary": "#4cd7f6",
                        "on-primary": "#003640",
                        "primary-container": "#06b6d4",
                        "on-primary-container": "#00424f",
                        "secondary": "#c0c1ff",
                        "secondary-container": "#3131c0",
                        "tertiary": "#4edea3",
                        "tertiary-container": "#1bbd85",
                        "error": "#ffb4ab",
                        "error-container": "#93000a",
                    },
                    borderRadius: {
                        DEFAULT: "0.125rem",
                        lg: "0.375rem",
                        xl: "0.75rem",
                        full: "9999px"
                    },
                    fontFamily: {
                        "code-md": ["JetBrains Mono"],
                        "code-sm": ["JetBrains Mono"],
                        "label-caps": ["JetBrains Mono"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "display-xl": ["Plus Jakarta Sans"],
                        "display-xl-mobile": ["Plus Jakarta Sans"],
                        "body-sm": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                    }
                }
            }
        };
    </script>
<body class="bg-surface font-body-md text-body-md text-on-surface antialiased selection:bg-primary selection:text-on-primary min-h-screen flex flex-col justify-between bg-grid-dots relative overflow-x-hidden">

<!-- Ambient Background Glows -->
<div class="glow-orb w-[600px] h-[600px] bg-primary/20 -top-40 -left-40"></div>
<div class="glow-orb w-[650px] h-[650px] bg-secondary/15 top-[35%] -right-40"></div>
<div class="glow-orb w-[500px] h-[500px] bg-tertiary/15 top-[70%] -left-32"></div>

<!-- Header Navigation Bar -->
<header class="fixed top-0 left-0 right-0 w-full z-50 bg-surface/85 backdrop-blur-xl border-b border-surface-container-high/50">
    <div class="h-20 max-w-[1280px] mx-auto px-4 md:px-8 flex items-center justify-between gap-4">
        
        <!-- Logo & Status Pill -->
        <div class="flex items-center gap-6">
            <a class="flex items-center gap-2.5 group" href="#">
                <div class="w-9 h-9 rounded-lg bg-surface-container-high border border-primary/30 flex items-center justify-center text-primary group-hover:border-primary transition-colors">
                    <span class="font-code-md font-bold text-base">&lt;/&gt;</span>
                </div>
                <span class="font-code-md text-on-surface tracking-tight group-hover:text-primary transition-colors font-bold text-lg">
                    <?= htmlspecialchars($config['profile']['brand']) ?>
                </span>
            </a>

            <!-- Status Pill (Desktop) -->
            <div class="hidden xl:flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container-high border border-surface-container-highest">
                <span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
                <span class="font-label-caps text-xs text-tertiary uppercase tracking-wider font-semibold">
                    <?= htmlspecialchars($config['site']['status_badge']) ?>
                </span>
            </div>
        </div>

        <!-- Desktop Navigation Links -->
        <nav class="hidden lg:flex items-center gap-7">
            <?php foreach ($config['nav'] as $item): ?>
                <a class="font-code-sm text-sm text-on-surface-variant hover:text-primary transition-colors" href="<?= htmlspecialchars($item['href']) ?>">
                    <?= htmlspecialchars($item['label']) ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <!-- Right CTA & Mobile Toggle -->
        <div class="flex items-center gap-3">
            <a class="hidden sm:inline-flex items-center justify-center px-4 py-2 rounded-md bg-primary-container text-on-primary-container font-code-sm text-sm font-bold hover:scale-[1.02] transition-transform shadow-[0_0_16px_-2px_rgba(6,182,212,0.35)]" href="#contact-section">
                <span>İletişime Geç</span>
                <span class="material-symbols-outlined ml-1" style="font-size: 18px;">arrow_forward</span>
            </a>

            <!-- Mobile Menu Toggle Button -->
            <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-md bg-surface-container-high text-on-surface hover:text-primary transition-colors" aria-label="Menüyü Aç">
                <span class="material-symbols-outlined" id="mobile-menu-icon" style="font-size: 24px;">menu</span>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer Menu (Animasyonlu Açılır Menü) -->
    <div id="mobile-menu" class="hidden lg:hidden bg-surface-container-low border-b border-surface-container-high px-4 py-6 space-y-4">
        <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container-high w-fit mb-4">
            <span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
            <span class="font-label-caps text-xs text-tertiary uppercase">
                <?= htmlspecialchars($config['site']['status_badge']) ?>
            </span>
        </div>
        <nav class="flex flex-col space-y-3">
            <?php foreach ($config['nav'] as $item): ?>
                <a class="mobile-nav-link font-code-sm text-base text-on-surface hover:text-primary py-2 px-2 rounded hover:bg-surface-container transition-colors" href="<?= htmlspecialchars($item['href']) ?>">
                    <?= htmlspecialchars($item['label']) ?>
                </a>
            <?php endforeach; ?>
        </nav>
        <div class="pt-4 border-t border-surface-container-high flex flex-col gap-2">
            <a class="w-full inline-flex items-center justify-center px-4 py-2.5 rounded-md bg-primary-container text-on-primary-container font-code-sm text-sm font-bold shadow-[0_0_16px_-2px_rgba(6,182,212,0.35)]" href="#contact-section">
                <span>İletişime Geç</span>
                <span class="material-symbols-outlined ml-1" style="font-size: 18px;">arrow_forward</span>
            </a>
            <?php if (!empty($config['profile']['cv_url'])): ?>
                <a class="w-full inline-flex items-center justify-center px-4 py-2 rounded-md bg-surface-container-high text-on-surface hover:text-primary font-code-sm text-sm font-bold border border-surface-container-highest" href="<?= htmlspecialchars($config['profile']['cv_url']) ?>" target="_blank">
                    <span class="material-symbols-outlined mr-1 text-tertiary" style="font-size: 18px;">description</span>
                    <span>Özgeçmişimi İndir (PDF)</span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</header>
<main class="w-full pt-20 pb-20 sm:pb-0 bg-surface flex-1">
