<?php
/**
 * Footer Bileşeni
 * @var array $config
 */
?>
</main>

<!-- Footer -->
<footer class="w-full bg-surface-container-lowest border-t border-surface-container-high/60 mt-auto">
    <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-10 flex flex-col md:flex-row items-center justify-between gap-6">
        
        <!-- Status & Copyright -->
        <div class="flex flex-col items-center md:items-start gap-2">
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-tertiary"></span>
                <span class="font-code-sm text-xs text-on-surface-variant">Sistem Durumu: 100% Aktif &amp; Çevrimiçi</span>
            </div>
            <p class="font-body-sm text-xs text-outline text-center md:text-left">
                &copy; <?= date('Y') ?> <?= htmlspecialchars($config['profile']['name']) ?> &bull; <?= htmlspecialchars($config['profile']['role']) ?>
            </p>
        </div>

        <!-- Social Media Links -->
        <div class="flex items-center flex-wrap justify-center gap-5">
            <?php if (!empty($config['contact']['github'])): ?>
                <a class="font-code-sm text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5" href="<?= htmlspecialchars($config['contact']['github']) ?>" target="_blank" rel="noopener noreferrer">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                    <span>GitHub (@<?= htmlspecialchars($config['contact']['github_username'] ?? 'sametuzun26') ?>)</span>
                </a>
            <?php endif; ?>

            <?php if (!empty($config['contact']['instagram'])): ?>
                <a class="font-code-sm text-sm text-on-surface-variant hover:text-[#E1306C] transition-colors flex items-center gap-1.5" href="<?= htmlspecialchars($config['contact']['instagram']) ?>" target="_blank" rel="noopener noreferrer">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    <span>Instagram (@<?= htmlspecialchars($config['contact']['instagram_username'] ?? 'rsametuzun') ?>)</span>
                </a>
            <?php endif; ?>

            <?php if (!empty($config['contact']['linkedin'])): ?>
                <a class="font-code-sm text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1" href="<?= htmlspecialchars($config['contact']['linkedin']) ?>" target="_blank" rel="noopener noreferrer">
                    <span>LinkedIn</span>
                </a>
            <?php endif; ?>

            <?php if (!empty($config['contact']['twitter'])): ?>
                <a class="font-code-sm text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1" href="<?= htmlspecialchars($config['contact']['twitter']) ?>" target="_blank" rel="noopener noreferrer">
                    <span>X / Twitter</span>
                </a>
            <?php endif; ?>

            <?php if (!empty($config['contact']['email'])): ?>
                <a class="font-code-sm text-sm text-primary hover:underline transition-colors flex items-center gap-1" href="mailto:<?= htmlspecialchars($config['contact']['email']) ?>">
                    <span class="material-symbols-outlined" style="font-size: 16px;">mail</span>
                    <span><?= htmlspecialchars($config['contact']['email']) ?></span>
                </a>
            <?php endif; ?>

            <?php if (!empty($config['contact']['phone'])): ?>
                <a class="font-code-sm text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1" href="tel:<?= preg_replace('/[^0-9+]/', '', $config['contact']['phone']) ?>">
                    <span class="material-symbols-outlined" style="font-size: 16px;">call</span>
                    <span><?= htmlspecialchars($config['contact']['phone']) ?></span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp Button -->
<?php if (!empty($config['contact']['whatsapp'])): ?>
<?php 
    $waTarget = ltrim($config['contact']['whatsapp'], '@');
    $waUrl = "https://wa.me/" . rawurlencode($waTarget);
    if (!empty($config['contact']['whatsapp_msg'])) {
        $waUrl .= "?text=" . urlencode($config['contact']['whatsapp_msg']);
    }
?>
<a href="<?= htmlspecialchars($waUrl) ?>" 
   target="_blank" 
   rel="noopener noreferrer" 
   class="fixed bottom-6 right-6 z-50 flex items-center gap-2.5 bg-[#25D366] hover:bg-[#20bd5a] text-white px-4 py-3 rounded-full shadow-[0_4px_24px_rgba(37,211,102,0.45)] hover:scale-105 active:scale-95 transition-all group"
   title="WhatsApp'tan Hızlı Mesaj Gönder (@<?= htmlspecialchars($waTarget) ?>)">
    <span class="relative flex h-3 w-3">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
        <span class="relative inline-flex rounded-full h-3 w-3 bg-white"></span>
    </span>
    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
    </svg>
    <span class="font-code-md text-sm font-bold hidden sm:inline-block">WhatsApp İletişim</span>
</a>
<?php endif; ?>

<!-- Scripts -->
<script>
    // 1. Mobile Menu Toggle
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileIcon = document.getElementById('mobile-menu-icon');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');

    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                mobileIcon.textContent = 'close';
            } else {
                mobileMenu.classList.add('hidden');
                mobileIcon.textContent = 'menu';
            }
        });

        // Menü linkine tıklandığında menüyü kapat
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileIcon.textContent = 'menu';
            });
        });
    }

    // 2. Tab Filter Interaction for Projects
    const filterButtons = document.querySelectorAll('.filter-tab');
    const projectCards = document.querySelectorAll('.project-card');

    if (filterButtons.length && projectCards.length) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                filterButtons.forEach(b => {
                    b.classList.remove('bg-surface-container-high', 'text-on-surface');
                    b.classList.add('text-on-surface-variant');
                });
                btn.classList.add('bg-surface-container-high', 'text-on-surface');
                btn.classList.remove('text-on-surface-variant');

                const filterVal = btn.getAttribute('data-filter');

                projectCards.forEach(card => {
                    if (filterVal === 'all') {
                        card.classList.remove('hidden');
                    } else if (card.getAttribute('data-category') === filterVal) {
                        card.classList.remove('hidden');
                    } else {
                        card.classList.add('hidden');
                    }
                });
            });
        });
    }

    // 3. Copy Terminal Log
    const copyBtn = document.getElementById('copy-log-btn');
    if (copyBtn) {
        copyBtn.addEventListener('click', () => {
            const originalHTML = copyBtn.innerHTML;
            copyBtn.innerHTML = '<span class="material-symbols-outlined text-tertiary" style="font-size: 18px;">done</span>';
            setTimeout(() => {
                copyBtn.innerHTML = originalHTML;
            }, 1800);
        });
    }

    // 4. Contact Form AJAX Handler
    const contactForm = document.getElementById('project-engagement-form');
    const feedbackBox = document.getElementById('form-feedback');
    const feedbackText = document.getElementById('feedback-text');
    const submitBtn = document.getElementById('submit-form-btn');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="material-symbols-outlined animate-spin" style="font-size: 18px;">progress_activity</span> Gönderiliyor...';
            }

            const formData = new FormData(contactForm);

            try {
                const response = await fetch('contact.php', {
                    method: 'POST',
                    body: formData
                });
                const result = await response.json();

                feedbackBox.classList.remove('hidden');
                if (result.success) {
                    feedbackBox.className = 'p-4 rounded-lg bg-tertiary/10 border border-tertiary/30 text-tertiary flex items-center gap-3 font-code-sm text-sm';
                    feedbackText.innerHTML = result.message || 'Mesajınız başarıyla iletildi!';
                    contactForm.reset();
                } else {
                    feedbackBox.className = 'p-4 rounded-lg bg-error/10 border border-error/30 text-error flex items-center gap-3 font-code-sm text-sm';
                    feedbackText.innerHTML = result.message || 'Bir hata oluştu. Lütfen tekrar deneyin.';
                }
            } catch (err) {
                feedbackBox.classList.remove('hidden');
                feedbackBox.className = 'p-4 rounded-lg bg-error/10 border border-error/30 text-error flex items-center gap-3 font-code-sm text-sm';
                feedbackText.innerHTML = 'Sunucuya bağlanılamadı. Lütfen doğrudan e-posta ile iletişime geçin.';
            } finally {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<span>Teklif &amp; İletişim İsteği Gönder</span><span class="material-symbols-outlined" style="font-size: 18px;">send</span>';
                }
            }
        });
    }

    // 5. FAQ Accordion Toggle
    const faqToggles = document.querySelectorAll('.faq-toggle');
    faqToggles.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetId = btn.getAttribute('data-target');
            const content = document.getElementById(targetId);
            const icon = btn.querySelector('.faq-icon');

            if (content) {
                const isHidden = content.classList.contains('hidden');
                document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
                document.querySelectorAll('.faq-icon').forEach(i => i.classList.remove('rotate-180'));

                if (isHidden) {
                    content.classList.remove('hidden');
                    if (icon) icon.classList.add('rotate-180');
                }
            }
        });
    });
</script>
</body>
</html>
