<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Kertas Ulantaga Asli Denpasar – Daluang untuk Upacara & Kerajinan')</title>
    <meta name="description" content="@yield('meta_description', 'Jual kertas Ulantaga / Daluang asli Denpasar Bali. Disucikan untuk upacara agama, lontar, riwayat & kerajinan tangan. Ukuran 25x140cm siap kirim. WA 087762225026.')">
    <meta name="keywords" content="kertas ulantaga, daluang, ulantaga asli, kertas bali kuno, lontar, upacara bali, kerajinan bali, denpasar">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="theme-color" content="#834d30">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Kertas Ulantaga Asli">
    <meta property="og:title" content="@yield('title', 'Kertas Ulantaga Asli Denpasar')">
    <meta property="og:description" content="@yield('meta_description', 'Kertas Daluang asli yang disucikan untuk upacara, lontar & seni.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='14' fill='%23834d30'/%3E%3Ctext x='32' y='42' font-size='28' text-anchor='middle' fill='%23EFE5CF' font-family='Arial' font-weight='bold'%3EU%3C/text%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Fraunces:opsz,wght@9..144,700;9..144,900&display=swap" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @endif
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "LocalBusiness",
        "name": "Kertas Ulantaga Asli",
        "slogan": "Melestarikan Warisan, Menyediakan Kualitas",
        "description": "Penyedia kertas Daluang / Ulantaga asli untuk upacara agama, lontar, seni dan penelitian.",
        "telephone": "+6287762225026",
        "email": "igedesusanto@gmail.com",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Jl. Patih Nambi XXIV, Banjar Permata Anyar, Ubung Kaja",
            "addressLocality": "Denpasar Utara",
            "addressRegion": "Bali",
            "addressCountry": "ID"
        },
        "url": "{{ url('/') }}",
        "priceRange": "Rp$$"
    }
    </script>
    @stack('schema')
</head>
<body class="bg-cream text-body font-sans antialiased">
<a href="#konten" class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 focus:z-50 focus:bg-white focus:px-4 focus:py-2 focus:rounded-lg">Lewati ke konten</a>

{{-- Topbar --}}
<div class="bg-ink text-[#EFE5CF] text-xs">
    <div class="max-w-7xl mx-auto px-4 py-2 flex items-center justify-between gap-4">
        <p class="truncate">★ Melestarikan Warisan, Menyediakan Kualitas — Daluang / Ulantaga Asli Denpasar</p>
        <div class="hidden md:flex items-center gap-4 shrink-0">
            <a href="https://wa.me/6287762225026" class="hover:text-white">WA 087762225026</a>
            <span class="text-white/30">|</span>
            <span>Ubung Kaja, Denpasar Utara</span>
        </div>
    </div>
</div>

{{-- Header --}}
<header class="sticky top-0 z-40 bg-[#FFFEFA]/90 backdrop-blur border-b border-outline">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between gap-4">
        <a href="{{ route('home') }}" class="flex items-center gap-3" aria-label="Kertas Ulantaga Asli - Beranda">
            <span class="w-11 h-11 rounded-2xl bg-brand flex items-center justify-center shrink-0" aria-hidden="true">
                <svg width="26" height="26" viewBox="0 0 32 32" fill="none"><path d="M16 3C18 7 18 10 16 13C14 10 14 7 16 3Z" fill="#EFE5CF"/><path d="M16 29C14 25 14 22 16 19C18 22 18 25 16 29Z" fill="#EFE5CF"/><path d="M3 16C7 14 10 14 13 16C10 18 7 18 3 16Z" fill="#EFE5CF"/><path d="M29 16C25 18 22 18 19 16C22 14 25 14 29 16Z" fill="#EFE5CF"/><circle cx="16" cy="16" r="3.2" fill="#EFE5CF"/></svg>
            </span>
            <span class="leading-none">
                <span class="block font-extrabold text-ink text-[22px] tracking-tight lowercase" style="font-family:Fraunces,Inter,sans-serif">ulantagga <span class="font-sans font-semibold text-[11px] tracking-[0.3em] uppercase text-brand align-middle ml-1">ASLI</span></span>
                <span class="block text-[11px] text-meta mt-1">Kertas suci • Kerajinan • Lontar</span>
            </span>
        </a>
        <nav class="hidden lg:flex items-center gap-7 text-sm font-semibold text-ink" aria-label="Navigasi utama">
            <a href="{{ route('home') }}" class="hover:text-brand">Beranda</a>
            <a href="{{ route('about') }}" class="hover:text-brand">Tentang</a>
            <a href="{{ route('articles.index') }}" class="hover:text-brand">Artikel</a>
            <a href="{{ route('sizes') }}" class="hover:text-brand">Ukuran ▾</a>
            <a href="{{ route('marketplace') }}" class="hover:text-brand">Marketplace</a>
            <a href="{{ route('contact') }}" class="hover:text-brand">Kontak</a>
        </nav>
        <div class="flex items-center gap-2">
            <a href="https://wa.me/6287762225026?text=Halo%20Ulantagga%20Asli,%20saya%20mau%20pesan" target="_blank" rel="noopener" class="hidden sm:inline-flex items-center gap-2 bg-brand text-white text-sm font-bold px-5 py-2.5 rounded-full hover:bg-brand-dark focus:outline-none focus:ring-2 focus:ring-brand-light">Pesan Sekarang</a>
            <button id="menuBtn" aria-expanded="false" aria-controls="mobileMenu" aria-label="Buka menu" class="lg:hidden w-11 h-11 rounded-xl border border-outline bg-white font-bold text-lg">☰</button>
        </div>
    </div>
    <div id="mobileMenu" class="hidden lg:hidden border-t border-outline bg-[#FFFEFA]">
        <nav class="px-4 py-3 grid text-sm font-semibold text-ink" aria-label="Navigasi seluler">
            <a href="{{ route('home') }}" class="py-3 border-b border-outline">Beranda</a>
            <a href="{{ route('about') }}" class="py-3 border-b border-outline">Tentang Kami</a>
            <a href="{{ route('articles.index') }}" class="py-3 border-b border-outline">Artikel</a>
            <a href="{{ route('sizes') }}" class="py-3 border-b border-outline">Ukuran 25 × 140 cm</a>
            <a href="{{ route('marketplace') }}" class="py-3 border-b border-outline">Marketplace</a>
            <a href="{{ route('contact') }}" class="py-3">Kontak Kami</a>
            <a href="https://wa.me/6287762225026" class="my-2 text-center bg-brand text-white font-bold py-3 rounded-xl">Pesan via WhatsApp</a>
        </nav>
    </div>
</header>

<main id="konten">
    @yield('content')
</main>

{{-- Footer --}}
<footer class="mt-20 bg-ink text-[#EFE5CF]">
    <div class="max-w-7xl mx-auto px-4 py-14 grid gap-10 md:grid-cols-4">
        <div>
            <div class="flex items-center gap-3 mb-4">
                <span class="w-10 h-10 rounded-xl bg-brand flex items-center justify-center font-extrabold text-white">U</span>
                <p class="font-extrabold text-white text-lg lowercase" style="font-family:Fraunces,serif">ulantagga <span class="text-[10px] tracking-[0.3em] font-sans">ASLI</span></p>
            </div>
            <p class="text-sm text-white/70 leading-relaxed">Tempat pembelian kertas asli Nusantara yang disucikan — untuk upacara agama, menulis riwayat / lontar, dan kegiatan seni.</p>
            <p class="mt-3 text-sm text-white/70">📍 Jl. Patih Nambi XXIV, Ubung Kaja, Denpasar Utara<br>📱 087762225026 • ✉️ igedesusanto@gmail.com</p>
        </div>
        <nav aria-label="Artikel terbaru">
            <p class="font-bold text-white mb-3">Artikel Terbaru</p>
            <ul class="space-y-2 text-sm">
                @foreach(($footerLatest ?? \App\Models\Article::where('is_published', true)->latest('published_at')->take(3)->get()) as $item)
                    <li><a href="{{ route('articles.show', $item->slug) }}" class="text-white/70 hover:text-white">{{ $item->title }}</a></li>
                @endforeach
            </ul>
        </nav>
        <nav aria-label="Kategori">
            <p class="font-bold text-white mb-3">Kategori</p>
            <div class="flex flex-wrap gap-2">
                @foreach(($footerCategories ?? \App\Models\Category::all()) as $cat)
                    <a href="{{ route('articles.index', ['kategori' => $cat->slug]) }}" class="text-xs font-semibold bg-white/10 px-3 py-1.5 rounded-full hover:bg-white/20">{{ $cat->name }}</a>
                @endforeach
            </div>
        </nav>
        <nav aria-label="Tautan penting">
            <p class="font-bold text-white mb-3">Link Penting</p>
            <ul class="space-y-2 text-sm text-white/70">
                <li><a href="{{ route('about') }}" class="hover:text-white">Tentang Kami</a></li>
                <li><a href="{{ route('sizes') }}" class="hover:text-white">Ukuran Kertas</a></li>
                <li><a href="{{ route('marketplace') }}" class="hover:text-white">Marketplace</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white">Kontak</a></li>
                <li><a href="{{ route('admin.login') }}" class="hover:text-white">Login Admin</a></li>
            </ul>
        </nav>
    </div>
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col sm:flex-row gap-2 items-center justify-between text-xs text-white/50">
            <p>© 2026 Kertas Ulantaga Asli. All Rights Reserved.</p>
            <p>Dibuat dengan ♥ di Bali — 100% Daluang Asli</p>
        </div>
    </div>
</footer>

{{-- Floating + sticky mobile CTA --}}
<a href="https://wa.me/6287762225026?text=Halo%20Ulantagga%20Asli,%20saya%20mau%20tanya%20stok" target="_blank" rel="noopener" aria-label="Chat WhatsApp" class="fixed bottom-5 right-5 z-40 bg-[#25D366] text-white font-bold text-sm pl-4 pr-5 py-3.5 rounded-full shadow-2xl hover:brightness-95 flex items-center gap-2">
    <span class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center">✆</span> WhatsApp
</a>
<div class="sm:hidden fixed bottom-0 inset-x-0 z-40 p-3 bg-gradient-to-t from-black/40 to-transparent pointer-events-none">
    <a href="https://wa.me/6287762225026" class="pointer-events-auto block text-center bg-brand text-white font-bold py-3.5 rounded-2xl shadow-2xl">Pesan Ulantaga Sekarang</a>
</div>

<script>
(function () {
    var btn = document.getElementById('menuBtn');
    var menu = document.getElementById('mobileMenu');
    if (btn && menu) {
        btn.addEventListener('click', function () {
            var open = menu.classList.toggle('hidden');
            btn.setAttribute('aria-expanded', open ? 'false' : 'true');
        });
    }
    var els = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && els.length) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { e.target.classList.add('is-visible'); io.unobserve(e.target); }
            });
        }, { threshold: 0.12 });
        els.forEach(function (el) { io.observe(el); });
    } else {
        els.forEach(function (el) { el.classList.add('is-visible'); });
    }
    document.querySelectorAll('[data-faq]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var panel = document.getElementById(btn.getAttribute('aria-controls'));
            var open = btn.getAttribute('aria-expanded') === 'true';
            btn.setAttribute('aria-expanded', open ? 'false' : 'true');
            if (panel) panel.classList.toggle('hidden', open);
        });
    });
})();
</script>
</body>
</html>
