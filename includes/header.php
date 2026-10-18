<?php
/**
 * Header Bileşeni — Gradia Creative Agency Teması
 * @var array $config
 */
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="<?= htmlspecialchars($config['site']['lang']) ?>">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0"/>
    <meta name="theme-color" content="#faf9ff"/>
    <meta name="color-scheme" content="light"/>
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

    <!-- Google Fonts: Instrument Sans (Gradia Original) + JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600;1,700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>

    <style>
        @layer base {
            html, body { margin: 0; padding: 0; }
        }

        /* Gradia Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #faf9ff; }
        ::-webkit-scrollbar-thumb { 
            background: #dcd5fd; 
            border-radius: 9999px; 
            border: 2px solid #faf9ff; 
        }
        ::-webkit-scrollbar-thumb:hover { 
            background: #8b59ff; 
        }
        * { scrollbar-width: thin; scrollbar-color: #dcd5fd #faf9ff; }

        /* Gradia Card Glow & Hover */
        .card-gradia {
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease;
        }
        .card-gradia:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -15px rgba(139, 89, 255, 0.15), 0 0 0 1px rgba(139, 89, 255, 0.25);
        }

        /* Subtle Purple Radial Ambient Blobs */
        .ambient-gradia-1 {
            background: radial-gradient(circle at 50% 50%, rgba(139, 89, 255, 0.12) 0%, rgba(220, 213, 253, 0.04) 50%, transparent 80%);
        }
        .ambient-gradia-2 {
            background: radial-gradient(circle at 50% 50%, rgba(193, 78, 243, 0.1) 0%, rgba(139, 89, 255, 0.03) 50%, transparent 75%);
        }

        /* Gradia Signature Diagonal Pinstripe Pattern */
        .gradia-pinstripe-bg {
            background: repeating-linear-gradient(
                45deg,
                rgba(236, 232, 253, 0.75),
                rgba(236, 232, 253, 0.75) 1px,
                transparent 1px,
                transparent 4px
            );
        }

        /* Gradia Dreamy Pastel Radial Glow (Center Aura) */
        .gradia-hero-glow {
            background: radial-gradient(
                ellipse 75% 55% at 50% 32%,
                rgba(255, 195, 245, 0.45) 0%,
                rgba(220, 213, 253, 0.35) 30%,
                rgba(250, 249, 255, 0.8) 65%,
                #faf9ff 100%
            );
        }

        /* Gentle Floating Animations for 3D Badges & Sparkles */
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(2deg); }
        }
        @keyframes float-delayed {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-12px) rotate(-2.5deg); }
        }
        @keyframes float-reverse {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(10px) rotate(-2deg); }
        }
        @keyframes sparkle-pulse {
            0%, 100% { opacity: 0.5; transform: scale(0.95); }
            50% { opacity: 1; transform: scale(1.1); }
        }

        .animate-float-slow {
            animation: float-slow 6s ease-in-out infinite;
        }
        .animate-float-delayed {
            animation: float-delayed 7s ease-in-out 1.2s infinite;
        }
        .animate-float-reverse {
            animation: float-reverse 6.5s ease-in-out 0.6s infinite;
        }
        .animate-sparkle {
            animation: sparkle-pulse 3.5s ease-in-out infinite;
        }

        /* Marquee Animation */
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 32s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }
        .mask-fade-x {
            mask-image: linear-gradient(to right, transparent, black 8%, black 92%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 8%, black 92%, transparent);
        }
        @keyframes bounce-subtle {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-4px); }
        }
        .animate-bounce-subtle {
            animation: bounce-subtle 3s ease-in-out infinite;
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#8b59ff",
                        "primary-dark": "#5921b2",
                        "primary-light": "#ece8fd",
                        "primary-tint": "#f4f2fe",
                        secondary: "#171924",
                        "secondary-soft": "#242734",
                        muted: "#464c69",
                        accent: "#e2ff3b",
                        "accent-yellow": "#fff34a",
                        gradia: "#faf9ff",
                        surface: "#ffffff",
                    },
                    borderRadius: {
                        "2xl": "1rem",
                        "3xl": "1.5rem",
                        "4xl": "2rem",
                    },
                    fontFamily: {
                        "sans": ["Instrument Sans", "Inter", "sans-serif"],
                        "code": ["JetBrains Mono", "monospace"],
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-[#faf9ff] font-sans text-secondary antialiased min-h-screen flex flex-col justify-between selection:bg-primary/20 selection:text-primary">

<!-- Floating Glass Pill Navbar (Gradia Signature) -->
<header class="fixed top-3 sm:top-6 inset-x-0 z-50 px-3 sm:px-6 pointer-events-none">
    <div class="max-w-5xl mx-auto bg-white/85 backdrop-blur-xl border border-white/90 shadow-[0_12px_40px_rgba(139,89,255,0.08)] rounded-full px-3.5 sm:px-6 py-2 sm:py-3 flex items-center justify-between pointer-events-auto transition-all">
        
        <!-- Logo & Brand (Clean 1-Line Gradia Style) -->
        <a class="flex items-center gap-2.5 group shrink-0" href="#">
            <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-primary to-primary-dark text-white flex items-center justify-center font-bold shadow-sm shadow-primary/30 group-hover:scale-105 transition-transform">
                <span class="font-code text-xs">&lt;/&gt;</span>
            </div>
            <span class="font-bold text-secondary text-sm sm:text-base tracking-tight group-hover:text-primary transition-colors whitespace-nowrap">
                <?= htmlspecialchars($config['profile']['brand']) ?>
            </span>
        </a>

        <!-- Desktop Navigation Links (Gradia Style Pill Links) -->
        <nav class="hidden md:flex items-center gap-1.5 lg:gap-2">
            <?php foreach ($config['nav'] as $item): ?>
                <a class="text-xs lg:text-sm font-semibold text-muted hover:text-primary px-3.5 py-1.5 rounded-full hover:bg-primary-tint transition-all" href="<?= htmlspecialchars($item['href']) ?>">
                    <?= htmlspecialchars($item['label']) ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <!-- Right Action Button & Mobile Toggle -->
        <div class="flex items-center gap-2.5">
            <?php if (!empty($config['profile']['cv_url'])): ?>
                <a class="hidden lg:inline-flex items-center gap-1.5 px-4 py-2 rounded-full text-secondary hover:text-primary bg-primary-tint hover:bg-primary-light text-xs font-bold border border-purple-100 transition-all" href="<?= htmlspecialchars($config['profile']['cv_url']) ?>" target="_blank">
                    <span class="material-symbols-outlined text-primary" style="font-size: 16px;">description</span>
                    <span>CV İndir</span>
                </a>
            <?php endif; ?>

            <a class="hidden sm:inline-flex items-center justify-center px-4 sm:px-5 py-2 sm:py-2.5 rounded-full bg-gradient-to-r from-primary to-primary-dark hover:from-primary-dark hover:to-primary text-white text-xs sm:text-sm font-bold transition-all shadow-md shadow-primary/25 hover:shadow-lg hover:shadow-primary/30 hover:scale-[1.02] active:scale-95" href="#contact-section">
                <span>İletişime Geç</span>
                <span class="material-symbols-outlined ml-1" style="font-size: 16px;">arrow_forward</span>
            </a>

            <!-- Mobile Menu Toggle Button (Clean & Compact Pill) -->
            <button id="mobile-menu-btn" class="md:hidden flex items-center gap-1.5 py-1.5 px-3 rounded-full bg-primary-tint text-secondary hover:text-primary border border-purple-100 transition-colors shadow-sm" aria-label="Menüyü Aç">
                <span class="material-symbols-outlined" id="mobile-menu-icon" style="font-size: 18px;">menu</span>
                <span class="text-xs font-bold">Menü</span>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer Menu (Glass Dropdown) -->
    <div id="mobile-menu" class="hidden md:hidden max-w-sm mx-auto mt-3 bg-white/95 backdrop-blur-xl border border-purple-100 rounded-3xl p-5 shadow-2xl space-y-3 pointer-events-auto">
        <nav class="flex flex-col space-y-2">
            <?php foreach ($config['nav'] as $item): ?>
                <a class="mobile-nav-link text-sm font-semibold text-secondary hover:text-primary py-2 px-3 rounded-2xl hover:bg-primary-tint transition-colors" href="<?= htmlspecialchars($item['href']) ?>">
                    <?= htmlspecialchars($item['label']) ?>
                </a>
            <?php endforeach; ?>
        </nav>
        <div class="pt-3 border-t border-purple-50 flex flex-col gap-2">
            <?php if (!empty($config['profile']['cv_url'])): ?>
                <a class="w-full inline-flex items-center justify-center px-4 py-2.5 rounded-full bg-primary-tint text-secondary hover:text-primary text-xs font-bold border border-purple-100" href="<?= htmlspecialchars($config['profile']['cv_url']) ?>" target="_blank">
                    <span class="material-symbols-outlined mr-1.5 text-primary" style="font-size: 16px;">description</span>
                    <span>Özgeçmişimi İndir (PDF)</span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</header>

<main class="w-full max-w-full pt-28 sm:pt-32 pb-20 sm:pb-0 flex-1 relative isolate bg-[#faf9ff]">

    <!-- Main Content Background: Signature Pinstripe & Pastel Auras -->
    <div class="absolute inset-0 pointer-events-none -z-10 overflow-hidden" aria-hidden="true" style="contain: paint;">
        <!-- Continuous Diagonal Pinstripe Pattern across all sections -->
        <div class="absolute inset-0 gradia-pinstripe-bg opacity-75"></div>
        
        <!-- Top Hero Pastel Radial Aura -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1400px] h-[950px] gradia-hero-glow opacity-90"></div>
        
        <!-- Mid-Page Left Violet/Purple Aura -->
        <div class="absolute top-[28%] -left-40 w-[700px] h-[700px] rounded-full bg-gradient-to-tr from-primary/10 via-[#c14ef3]/8 to-transparent blur-3xl"></div>
        
        <!-- Mid-Page Right Warm Pastel Pink Aura -->
        <div class="absolute top-[54%] -right-40 w-[750px] h-[750px] rounded-full bg-gradient-to-bl from-[#ffc3f5]/25 via-purple-200/15 to-transparent blur-3xl"></div>
        
        <!-- Lower Left Ambient Glow (Above Contact) -->
        <div class="absolute top-[78%] -left-32 w-[650px] h-[650px] rounded-full bg-gradient-to-tr from-primary/8 via-purple-100/20 to-transparent blur-3xl"></div>
    </div>
