<?php
// ==============================================================================
// SAMET UZUN - KİŞİSEL WEB GELİŞTİRİCİ PORTFOLYO YAPILANDIRMASI
// Samimi, kişisel marka ve geliştirici odaklı yapı
// ==============================================================================

$isLocal = in_array($_SERVER['HTTP_HOST'] ?? '', ['localhost', '127.0.0.1'])
    || (isset($_SERVER['SERVER_NAME']) && in_array($_SERVER['SERVER_NAME'], ['localhost', '127.0.0.1']));
$baseUrl = $isLocal ? 'http://localhost/sametuzun' : 'https://sametuzun.com.tr';

return [
    'site' => [
        'title' => 'Samet Uzun | Web Geliştirici & Tasarım Meraklısı',
        'domain' => 'sametuzun.com.tr',
        'url' => $baseUrl,
        'description' => 'Merhaba! Ben Samet Uzun. Kullanıcı dostu, hızlı ve modern web deneyimleri inşa eden Full-Stack web geliştiriciyim.',
        'author' => 'Samet Uzun',
        'lang' => 'tr',
        'status_badge' => 'Yeni Fikirlere & Tanışmalara Açık',
        'location' => 'Bilecik / Eskişehir • Remote',
    ],

    'profile' => [
        'name' => 'Samet Uzun',
        'brand' => 'SAMETUZUN.DEV',
        'role' => 'Full-Stack Web Geliştirici & Tasarım Meraklısı',
        'greeting' => 'Merhaba, ben Samet! 👋',
        'headline' => 'Fikirleri yaşayan, hızlı ve keyifli web deneyimlerine dönüştürüyorum.',
        'bio' => 'Web geliştirme serüvenine lise yıllarında Bilişim Teknolojileri alanıyla başlayıp, MCBÜ Bilgisayar Programcılığı mezuniyeti ve PixelByte bünyesinde yapay zeka destekli web projeleriyle tecrübesini pekiştirmiş bir geliştiriciyim. Hızlı, hafif ve temiz kod mimarisine sahip dijital ürünler üretiyorum.',
        'experience_years' => '6+',
        'completed_projects' => '20+',
        'happy_clients' => '100%',
        'speed_score' => '98+',
        'cv_url' => 'assets/samet_uzun_cv.pdf',
    ],

    'about' => [
        'lead' => 'Lise yıllarından bu yana kod yazan, yapay zeka destekli web araçları ve temiz mimarinin kesişiminde çözümler üreten bir geliştiriciyim.',
        'paragraphs' => [
            "Yazılım ve web dünyasına olan ilgim 2017'de lise yıllarıma ve 2018'de Bilişim Teknolojileri alanında Web Tasarımı dalını seçmemle başladı. Ekrandaki ilk HTML ve CSS kodlarımın canlı bir sayfaya dönüştüğü o ilk andan itibaren, arayüz geliştirmek benim için sıradan bir ders değil, tutkulu bir üretim yolculuğuna dönüştü.",
            "Lisede kazandığım web ve arayüz temellerini, Manisa Celal Bayar Üniversitesi Bilgisayar Teknolojileri Bölümü Bilgisayar Programcılığı programında akademik bir seviyeye taşıdım. Ardından Eskişehir PixelByte bünyesinde Web Developer olarak yapay zeka destekli web uygulamalarının (Borsify Borsa Asistanı, Pixcode Kod Asistanı) arka uç geliştirme, sistem planlama ve web optimizasyon süreçlerinde aktif sorumluluk aldım.",
            "Aynı zamanda kurumsal Ar-Ge süreçlerinden gelen teknik veri analizi, kalite kontrol ve sistem takibi disipliniyle kodlama pratiğimi harmanladım. Eğitimime Anadolu Üniversitesi Çalışma Ekonomisi ve Endüstri İlişkileri lisans programıyla devam ederken; modern PHP, MySQL, JavaScript ve Tailwind CSS ekosisteminde kullanıcı dostu, 1 saniyenin altında açılan dinamik web çözümleri geliştiriyorum."
        ],
        'highlights' => [
            [
                'icon' => 'school',
                'title' => 'Sağlam Temel & Akademik Altyapı',
                'desc' => 'Bilişim Teknolojileri Web Tasarım temeli, MCBÜ Bilgisayar Programcılığı ve devam eden üniversite eğitimi.'
            ],
            [
                'icon' => 'psychology',
                'title' => 'Yapay Zeka & Web Entegrasyonu',
                'desc' => 'PixelByte bünyesinde Borsify ve Pixcode yapay zeka destekli web asistanı sistemlerinin backend tecrübesi.'
            ],
            [
                'icon' => 'bolt',
                'title' => 'Performans & Hız Tutkusu',
                'desc' => 'Gereksiz ağırlıklardan kaçınır; Google PageSpeed testlerinde 98+ alan yıldırım hızında sayfalar üretirim.'
            ],
            [
                'icon' => 'code',
                'title' => 'Temiz & Bakımı Kolay Kod',
                'desc' => 'Günü kurtaran karmaşık kodlar yerine, gelecekte de kolayca güncellenebilecek düzenli mimariler kurarım.'
            ],
        ]
    ],

    // Kariyer & Deneyim Yolculuğu
    'journey' => [
        [
            'period' => '2024 — Günümüz',
            'title' => 'Anadolu Üniversitesi & Bağımsız Web Geliştirme',
            'role' => 'Lisans Eğitimi & Full-Stack Geliştirici',
            'desc' => 'Çalışma Ekonomisi ve Endüstri İlişkileri lisans eğitimime devam ederken; kişisel ve kurumsal müşteriler için modern PHP 8, MySQL ve Tailwind CSS ile özel yönetim panelli web projeleri geliştiriyorum.',
            'tags' => ['Anadolu Üniv.', 'Lisans Eğitimi', 'PHP 8', 'Tailwind CSS', 'MySQL', 'REST API']
        ],
        [
            'period' => '2023 — Günümüz',
            'title' => 'Porland Porselen — Teknik Analiz & Ar-Ge Süreçleri',
            'role' => 'Teknik Personel & Veri Takibi',
            'desc' => 'Kurumsal Ar-Ge bünyesinde teknik analiz, veri takibi, kalite kontrol ve sistem süreçlerinin yürütülmesi. Yazılım geliştirme pratiğime endüstriyel titizlik, analitik düşünce ve problem çözme disiplini kazandırdı.',
            'tags' => ['Teknik Analiz', 'Veri Takibi', 'Kalite Kontrol', 'Sistem Disiplini']
        ],
        [
            'period' => '2022 — 2025',
            'title' => 'PixelByte — Web Developer (Eskişehir)',
            'role' => 'Arka Uç & Web Tabanlı Yazılım Geliştirme',
            'desc' => 'Yapay zeka destekli Borsify Borsa Asistanı web uygulamasının backend geliştirilmesi; Pixcode Yapay Zeka Kod Asistanı projesinde sistem planlama ve web tabanlı yazılım geliştirme, test ve optimizasyon süreçleri.',
            'tags' => ['Web Developer', 'Yapay Zeka (AI)', 'Backend', 'Borsify', 'Pixcode', 'Sistem Mimarisi']
        ],
        [
            'period' => '2021 — 2023',
            'title' => 'Manisa Celal Bayar Üniversitesi',
            'role' => 'Bilgisayar Teknolojileri / Bilgisayar Programcılığı (Mezun)',
            'desc' => 'Algoritmalar, nesne yönelimli programlama (OOP), ilişkisel veritabanı sistemleri (SQL), web programlama ve modern yazılım prensipleri üzerine eğitim alarak başarıyla mezun oldum.',
            'tags' => ['MCBÜ', 'Bilgisayar Programcılığı', 'SQL / MySQL', 'OOP', 'Web Programlama', 'Algoritmalar']
        ],
        [
            'period' => '2018 — 2021',
            'title' => 'Bilişim Teknolojileri — Web Tasarım Dalı',
            'role' => 'Mesleki Lise Eğitimi & İlk Kodlar (Mezun)',
            'desc' => 'Lise 2. sınıfta Web Tasarım alanını seçerek ilk HTML, CSS, JavaScript ve dinamik sayfa tasarımlarımla web dünyasına profesyonel adımımı attım ve bölümü başarıyla tamamladım.',
            'tags' => ['Bilişim Teknolojileri', 'Web Tasarımı', 'HTML5', 'CSS3', 'JavaScript', 'Arayüz']
        ],
        [
            'period' => '2017',
            'title' => 'Teknoloji Dünyasına İlk Adım & Keşif',
            'role' => 'Lise Başlangıcı',
            'desc' => 'Bilgisayar teknolojilerine, internet dünyasına ve kodlamanın arka planında yatan mekanizmalara duyduğum merakla web geliştiriciliğine uzanan yolculuğumun ilk adımlarını attım.',
            'tags' => ['Teknoloji Merakı', 'Bilgisayar Temelleri', 'İlk Adım']
        ],
    ],

    // Birlikte Neler Yapabiliriz? (İş Birliği Alanları)
    'collaborations' => [
        [
            'icon' => 'laptop_mac',
            'title' => 'Sıfırdan Özel Web Projesi',
            'desc' => 'Markanızı veya fikrinizi temsil edecek; mobil uyumlu, hızlı açılan ve yönetim paneliyle içeriklerinizi güncelleyebileceğiniz anahtar teslim bir web sitesi.',
            'for_who' => 'İşletmeler, girişimciler veya kişisel marka oluşturmak isteyenler için.'
        ],
        [
            'icon' => 'groups',
            'title' => 'Ekip & Yazılım İş Birliği',
            'desc' => 'Mevcut projenize veya yazılım ekibinize uzaktan (remote) katkı sağlayabilir; frontend veya backend geliştirmelerinde sorumluluk alabilirim.',
            'for_who' => 'Ajanslar, yazılım ekipleri ve start-up projeleri için.'
        ],
        [
            'icon' => 'speed',
            'title' => 'Mevcut Siteyi İyileştirme & Hız',
            'desc' => 'Yavaş açılan, mobilde bozulan veya yeni modüllere ihtiyaç duyan web sitenizi modernize eder, Google hızını ve güvenliğini üst seviyeye taşırım.',
            'for_who' => 'Mevcut web sitesinden memnun olmayan veya yavaşlıktan şikayetçi olanlar için.'
        ],
    ],

    'contact' => [
        'email' => 'sametuzun2626@gmail.com',
        'phone' => '+90 (530) 975 83 00',
        'whatsapp' => 'sametuzun26',
        'whatsapp_msg' => 'Merhaba Samet! Portfolyo siteni inceledim, seninle tanışmak ve bir proje hakkında konuşmak istiyorum.',
        'github' => 'https://github.com/sametuzun26',
        'github_username' => 'sametuzun26',
        'instagram' => 'https://instagram.com/rsametuzun',
        'instagram_username' => 'rsametuzun',
        'linkedin' => '',
        'twitter' => '',
    ],

    'nav' => [
        ['label' => 'Hakkımda', 'href' => '#about-section'],
        ['label' => 'Uzmanlıklar', 'href' => '#capabilities'],
        ['label' => 'Yolculuğum', 'href' => '#journey-section'],
        ['label' => 'Projeler', 'href' => '#work-section'],
        ['label' => 'İş Birlikleri', 'href' => '#collaboration-section'],
        ['label' => 'Felsefem', 'href' => '#philosophy-section'],
        ['label' => 'İletişim', 'href' => '#contact-section'],
    ],

    // Uzmanlık Alanları
    'capabilities' => [
        [
            'category' => 'Arayüz & Kullanıcı Deneyimi',
            'title' => 'Modern Frontend & UI Tasarım',
            'icon' => 'devices',
            'desc' => 'Telefon, tablet ve bilgisayarlarda akıcı çalışan; görsel hiyerarşisi güçlü, şık ve responsive arayüzler.',
            'tags' => ['HTML5 / CSS3', 'JavaScript (ES6+)', 'Tailwind CSS', 'Responsive UI', 'Mobil Öncelikli', 'Erişilebilirlik'],
        ],
        [
            'category' => 'Backend & Dinamik Sistemler',
            'title' => 'PHP & Veritabanı Mimarisi',
            'icon' => 'code',
            'desc' => 'İçeriklerinizi kolayca yönetebileceğiniz hafif admin panelleri, güvenli form işleme ve REST API entegrasyonları.',
            'tags' => ['PHP 8+', 'MySQL Veritabanı', 'Yönetim Paneli (CMS)', 'REST API', 'Güvenli Formlar', 'Dinamik Modüller'],
        ],
        [
            'category' => 'Hız & Arama Motoru Uyumu',
            'title' => 'SEO & Performans Optimizasyonu',
            'icon' => 'rocket_launch',
            'desc' => 'Google PageSpeed testlerinde 98+ açılış hızları, temiz semantic etiketler ve arama motorlarının sevdiği altyapı.',
            'tags' => ['Google PageSpeed 98+', 'Teknik SEO', 'Görsel Optimizasyonu', 'SSL / HTTPS', 'Temiz Kod'],
        ],
    ],

    // Geliştirici Felsefesi (WordPress vs Temiz Kod)
    'comparison' => [
        [
            'title' => 'Güvenlik & Açıklar',
            'icon' => 'security',
            'wp' => 'Sürekli güncellenmeyen eklenti açıkları, SQL Injection saldırıları, otomatik bot istilası ve malware (virüs) riski.',
            'wp_status' => 'risk',
            'custom' => 'Sıfır eklenti bağımlılığı, temiz filtrelenmiş veritabanı sorguları ve harici müdahalelere kapalı izole mimari.',
            'custom_status' => 'good',
        ],
        [
            'title' => 'Açılış Hızı & Performans',
            'icon' => 'speed',
            'wp' => '30+ gereksiz eklenti ve şişkin kütüphaneler yüzünden 3-6 saniye yavaş açılış. Google sıralamalarında geriye düşme.',
            'wp_status' => 'risk',
            'custom' => 'Sadece ihtiyaç duyulan saf kodlar. <0.8 saniyede yıldırım hızında açılış ve 98+ Google PageSpeed puanı.',
            'custom_status' => 'good',
        ],
        [
            'title' => 'Gizli & Yıllık Lisans Maliyetleri',
            'icon' => 'payments',
            'wp' => 'Her yıl tekrar ödenen pahalı tema ve eklenti (Elementor, WPML, Form eklentileri) lisans ücretleri.',
            'wp_status' => 'risk',
            'custom' => 'Tek seferlik geliştirme maliyeti. Yıllık zorunlu hiçbir eklenti lisansı ödemezsiniz; tüm mülkiyet sizedir.',
            'custom_status' => 'good',
        ],
        [
            'title' => 'Veritabanı Sağlığı & Şişkinlik',
            'icon' => 'database',
            'wp' => 'Eklentilerin bıraktığı binlerce çöp tablo, revizyon artıkları ve zamanla sistemi kilitleyen yavaşlama.',
            'wp_status' => 'risk',
            'custom' => 'Optimize edilmiş temiz MySQL tabloları. Yıllar geçse dahi anlık yanıt veren hafif veritabanı performansı.',
            'custom_status' => 'good',
        ],
        [
            'title' => 'Tasarım & Özelleştirme Esnekliği',
            'icon' => 'brush',
            'wp' => 'Binlerce kişinin kullandığı kopya şablon kalıpları. İstenen özel bir özelliği eklerken sistemsel bozulmalar.',
            'wp_status' => 'risk',
            'custom' => 'Markanızın kurumsal kimliğine ve ihtiyaçlarına %100 sıfırdan uyarlanan sınırsız özelleştirme özgürlüğü.',
            'custom_status' => 'good',
        ],
    ],

    // Gerçekleşen & Örnek Projeler
    'projects' => [
        [
            'title' => 'Borsify — Yapay Zeka Destekli Borsa Asistanı',
            'category' => 'custom',
            'category_label' => 'YAPAY ZEKA / WEB PLATFORMU',
            'desc' => 'PixelByte bünyesinde geliştirilen; finans verilerini yapay zeka modelleriyle işleyip kullanıcıya anlık içgörüler sunan web uygulamasının arka uç (backend) geliştirme ve veri entegrasyonu.',
            'image' => 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=800&q=80',
            'metrics' => [
                ['label' => 'YAPAY ZEKA', 'val' => 'AI Modelleri', 'color' => 'text-primary'],
                ['label' => 'MİMARİ', 'val' => 'Backend & API', 'color' => 'text-tertiary'],
                ['label' => 'VERİ AKIŞI', 'val' => 'Anlık Analiz', 'color' => 'text-secondary'],
            ],
            'tags' => ['PixelByte', 'Yapay Zeka (AI)', 'Backend', 'REST API', 'Veri Analizi', 'MySQL'],
            'demo_url' => '#',
        ],
        [
            'title' => 'Pixcode — Yapay Zeka Kodlama Asistanı',
            'category' => 'custom',
            'category_label' => 'AI DEVELOPER TOOLS',
            'desc' => 'Yazılımcıların kod yazma ve problem çözme süreçlerini hızlandırmak için kurgulanan Pixcode yapay zeka kod asistanında sistem planlama, mimari modelleme ve web test süreçleri.',
            'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&q=80',
            'metrics' => [
                ['label' => 'SİSTEM', 'val' => 'Planlama & Mimari', 'color' => 'text-tertiary'],
                ['label' => 'GELİŞTİRME', 'val' => 'Web Tabanlı', 'color' => 'text-primary'],
                ['label' => 'TEST SÜRECİ', 'val' => 'İyileştirme', 'color' => 'text-on-surface'],
            ],
            'tags' => ['PixelByte', 'Pixcode', 'AI Kod Asistanı', 'Sistem Planlama', 'Web Geliştirme'],
            'demo_url' => '#',
        ],
        [
            'title' => 'Kurumsal Web Sitesi & Dinamik Yönetim Paneli',
            'category' => 'corporate',
            'category_label' => 'FULL-STACK / WEB',
            'desc' => 'Dinamik blog, hizmetler vitrini ve hafif yönetim paneline sahip, <0.6 saniyede açılan modern kurumsal web platformu.',
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80',
            'metrics' => [
                ['label' => 'YÜKLEME HIZI', 'val' => '0.5 sn', 'color' => 'text-tertiary'],
                ['label' => 'PAGESPEED', 'val' => '99/100', 'color' => 'text-primary'],
                ['label' => 'MOBİL UYUM', 'val' => '%100 Uyumlu', 'color' => 'text-on-surface'],
            ],
            'tags' => ['PHP 8', 'MySQL', 'Tailwind CSS', 'Admin Panel', 'SEO 98+'],
            'demo_url' => '#',
        ],
        [
            'title' => 'E-Ticaret & Sanal POS Ödeme Entegrasyonu',
            'category' => 'ecommerce',
            'category_label' => 'E-TİCARET',
            'desc' => 'Kullanıcı dostu sepet akışı, 3D Secure kredi kartı ödeme entegrasyonu (Iyzico/PayTR) ve anlık sipariş yönetim altyapısı.',
            'image' => 'https://images.unsplash.com/photo-1556742049-0a67c5574f73?auto=format&fit=crop&w=800&q=80',
            'metrics' => [
                ['label' => 'ÖDEME', 'val' => '3D Secure', 'color' => 'text-secondary'],
                ['label' => 'MOBİL ALIŞVERİŞ', 'val' => 'Tek Tıkla', 'color' => 'text-tertiary'],
                ['label' => 'GÜVENLİK', 'val' => '256-Bit SSL', 'color' => 'text-on-surface'],
            ],
            'tags' => ['PHP 8', 'Sanal POS', 'JavaScript', 'MySQL', 'Responsive UI'],
            'demo_url' => '#',
        ],
    ],

    // Merak Edilenler (S.S.S.)
    'faq' => [
        [
            'q' => 'Hangi teknolojilerle kod yazıyorsun?',
            'a' => 'Ağırlıklı olarak modern PHP 8+, MySQL/MariaDB, Tailwind CSS, JavaScript ve HTML5 kullanıyorum. İhtiyaca göre REST API entegrasyonları ve modern arayüz kütüphaneleriyle çalışıyorum.',
        ],
        [
            'q' => 'Uzaktan (Remote) çalışma ve projelere açık mısın?',
            'a' => 'Evet! İstanbul merkezliyim ancak Türkiye\'nin veya dünyanın her yerinden kişi ve ekiplerle tamamen uzaktan ve düzenli iletişimle çalışıyorum.',
        ],
        [
            'q' => 'Bir projede birlikte nasıl çalışıyoruz?',
            'a' => 'Önce fikirlerinizi ve beklentilerinizi dinliyorum. Ardından sayfa planını ve tasarımı oluşturuyoruz. Onayınızla birlikte kodlama aşamasına geçip, düzenli önizlemeler paylaşarak projeyi test edip teslim ediyorum.',
        ],
        [
            'q' => 'Seninle nasıl iletişime geçebilirim?',
            'a' => 'Aşağıdaki iletişim formundan, doğrudan e-posta (iletisim@sametuzun.com.tr) adresimden ya da sağ alttaki butondan WhatsApp üzerinden bana istediğiniz zaman yazabilirsiniz.',
        ],
    ],

    // Referanslar & Yorumlar
    'testimonials' => [
        [
            'quote' => 'Samet ile çalışmak çok keyifliydi. Hem isteklerimizi sabırla dinledi hem de sitemizi tam istediğimiz gibi modern ve hızlı bir şekilde teslim etti.',
            'author' => 'Burak Demir',
            'title' => 'Firma Sahibi, Mimarlık & Tasarım',
            'initials' => 'BD',
            'tag' => 'Kurumsal Web Sitesi',
            'color' => 'primary',
        ],
        [
            'quote' => 'İletişimi çok kuvvetli ve işine gerçekten özen gösteren bir yazılımcı. Kod bilgisi olmayan birinin bile rahatça anlayacağı şekilde her şeyi açıkladı.',
            'author' => 'Ayşe Kaya',
            'title' => 'Proje Yöneticisi',
            'initials' => 'AK',
            'tag' => 'E-Ticaret & Arayüz',
            'color' => 'tertiary',
        ],
        [
            'quote' => 'Yönetim paneli tam ihtiyacımıza göre oldu. Kafamıza takılan her konuda hızlıca destek verdi, kesinlikle tavsiye ediyorum.',
            'author' => 'Cem Yıldırım',
            'title' => 'Danışmanlık',
            'initials' => 'CY',
            'tag' => 'Özel Web Yazılımı',
            'color' => 'secondary',
        ],
    ],
];
