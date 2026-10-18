<?php
/**
 * Header Bileşeni — Sendit Teması
 * @var array $config
 */
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="<?= htmlspecialchars($config['site']['lang']) ?>">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0"/>
    <meta name="theme-color" content="#ffffff"/>
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

    <!-- Google Fonts & Material Symbols -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>

    <style>
        @layer base {
            html, body { margin: 0; padding: 0; }
            body { overscroll-behavior: none; }
        }
        /* Custom Sendit scrollbar */
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { 
            background: #cbd5e1; 
            border-radius: 9999px; 
            border: 2px solid #f1f5f9; 
        }
        ::-webkit-scrollbar-thumb:hover { 
            background: #6366f1; 
        }
        * { scrollbar-width: thin; scrollbar-color: #cbd5e1 #f1f5f9; }

        /* Card micro-elevation */
        .card-sendit {
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .card-sendit:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 30px -10px rgba(99, 102, 241, 0.12), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Subtle Developer Dot Grid Background */
        .bg-grid-dots {
            background-image: radial-gradient(rgba(15, 23, 42, 0.06) 1px, transparent 1px);
            background-size: 28px 28px;
        }

        /* Marquee Animation */
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 30s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }
        .mask-fade-x {
            mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        }
    </style>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#6366f1",
                        "primary-hover": "#4f46e5",
                        "primary-light": "#eef2ff",
                        secondary: "#0f172a",
                        "secondary-hover": "#1e293b",
                        accent: "#06b6d4",
                        surface: "#ffffff",
                        "surface-alt": "#f8fafc",
                    },
                    borderRadius: {
                        "2xl": "1rem",
                        "3xl": "1.5rem",
                    },
                    fontFamily: {
                        "sans": ["Plus Jakarta Sans", "Inter", "sans-serif"],
                        "code": ["JetBrains Mono", "monospace"],
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-white font-sans text-gray-900 antialiased min-h-screen flex flex-col justify-between overflow-x-hidden">

<!-- Header Navigation Bar (Sendit Style) -->
<header class="fixed top-0 left-0 right-0 w-full z-50 bg-white/85 backdrop-blur-md border-b border-gray-100">
    <div class="h-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-4">
        
        <!-- Logo & Brand -->
        <a class="flex items-center gap-3 group" href="#">
            <div class="w-10 h-10 rounded-2xl bg-primary text-white flex items-center justify-center font-bold shadow-md shadow-primary/30 group-hover:bg-secondary transition-colors">
                <span class="font-code text-sm">&lt;/&gt;</span>
            </div>
            <div class="flex flex-col">
                <span class="font-bold text-gray-900 text-lg leading-tight tracking-tight group-hover:text-primary transition-colors">
                    <?= htmlspecialchars($config['profile']['brand']) ?>
                </span>
                <span class="text-[11px] font-semibold text-primary uppercase tracking-wider">
                    <?= htmlspecialchars($config['profile']['role']) ?>
                </span>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden md:flex items-center gap-8">
            <?php foreach ($config['nav'] as $item): ?>
                <a class="text-sm font-medium text-gray-600 hover:text-primary transition-colors" href="<?= htmlspecialchars($item['href']) ?>">
                    <?= htmlspecialchars($item['label']) ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <!-- Right CTA & Mobile Toggle -->
        <div class="flex items-center gap-3">
            <?php if (!empty($config['profile']['cv_url'])): ?>
                <a class="hidden lg:inline-flex items-center gap-1.5 px-4 py-2.5 rounded-xl text-gray-700 bg-gray-50 hover:bg-gray-100 text-sm font-bold border border-gray-200 transition-all" href="<?= htmlspecialchars($config['profile']['cv_url']) ?>" target="_blank">
                    <span class="material-symbols-outlined text-primary" style="font-size: 18px;">description</span>
                    <span>CV İndir</span>
                </a>
            <?php endif; ?>
            <a class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl bg-primary hover:bg-secondary text-white text-sm font-bold transition-all shadow-md shadow-primary/25 hover:shadow-lg" href="#contact-section">
                <span>İletişime Geç</span>
                <span class="material-symbols-outlined ml-1.5" style="font-size: 18px;">arrow_forward</span>
            </a>

            <!-- Mobile Menu Toggle Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2 rounded-xl bg-gray-100 text-gray-700 hover:text-primary transition-colors" aria-label="Menüyü Aç">
                <span class="material-symbols-outlined" id="mobile-menu-icon" style="font-size: 24px;">menu</span>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-gray-200 px-6 py-6 space-y-4 shadow-xl">
        <nav class="flex flex-col space-y-3">
            <?php foreach ($config['nav'] as $item): ?>
                <a class="mobile-nav-link text-base font-semibold text-gray-800 hover:text-primary py-2 px-3 rounded-xl hover:bg-primary/5 transition-colors" href="<?= htmlspecialchars($item['href']) ?>">
                    <?= htmlspecialchars($item['label']) ?>
                </a>
            <?php endforeach; ?>
        </nav>
        <div class="pt-4 border-t border-gray-100 flex flex-col gap-2">
            <a class="w-full inline-flex items-center justify-center px-5 py-3 rounded-xl bg-primary text-white text-sm font-bold shadow-md shadow-primary/25" href="#contact-section">
                <span>İletişime Geç</span>
                <span class="material-symbols-outlined ml-1.5" style="font-size: 18px;">arrow_forward</span>
            </a>
            <?php if (!empty($config['profile']['cv_url'])): ?>
                <a class="w-full inline-flex items-center justify-center px-5 py-2.5 rounded-xl bg-gray-100 text-gray-800 hover:text-primary text-sm font-bold border border-gray-200" href="<?= htmlspecialchars($config['profile']['cv_url']) ?>" target="_blank">
                    <span class="material-symbols-outlined mr-1.5 text-primary" style="font-size: 18px;">description</span>
                    <span>Özgeçmişimi İndir (PDF)</span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</header>
<main class="w-full pt-20 pb-20 sm:pb-0 bg-white flex-1">
