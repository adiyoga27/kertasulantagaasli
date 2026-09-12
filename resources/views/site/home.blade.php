@extends('layouts.site')

@section('title', 'Kertas Ulantaga Asli Denpasar – Daluang Suci untuk Upacara & Kerajinan')
@section('meta_description', 'Jual kertas Ulantaga / Daluang asli Bali. Bahan kulit kayu daluang, disucikan untuk upacara, lontar & seni. Ukuran 25x140cm & custom. Pesan WA 087762225026.')

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {"@@type": "Question", "name": "Apa itu kertas Ulantaga?", "acceptedAnswer": {"@@type": "Answer", "text": "Ulantaga / daluang adalah kertas tradisional Bali dari kulit kayu Broussonetia papyrifera, digunakan untuk upacara, lontar dan seni."}},
        {"@@type": "Question", "name": "Berapa ukuran kertas Ulantaga?", "acceptedAnswer": {"@@type": "Answer", "text": "Ukuran favorit 25 x 140 cm untuk lontar dan upacara, tersedia juga lembaran custom untuk kerajinan."}},
        {"@@type": "Question", "name": "Bagaimana cara pesan?", "acceptedAnswer": {"@@type": "Answer", "text": "Pesan via WhatsApp 087762225026 atau marketplace Shopee, Tokopedia, Lazada. Pengiriman dari Denpasar Utara, Bali."}}
    ]
}
</script>
@endpush

@section('content')
{{-- Breadcrumb SEO --}}
<nav aria-label="Breadcrumb" class="max-w-7xl mx-auto px-4 pt-5 text-xs text-meta">
    <ol class="flex gap-2"><li><a href="{{ route('home') }}" class="hover:text-brand">Beranda</a></li><li aria-hidden="true">/</li><li aria-current="page" class="text-ink font-semibold">Kertas Ulantaga Asli</li></ol>
</nav>

{{-- HERO --}}
<section class="max-w-7xl mx-auto px-4 pt-4 pb-2">
    <div class="grid lg:grid-cols-[1.05fr_0.95fr] gap-6 items-stretch">
        <div class="reveal bg-[#FFFEFA] border border-outline rounded-[28px] p-7 md:p-11 flex flex-col justify-center shadow-[0_20px_60px_-30px_rgba(94,53,32,0.4)]">
            <div class="flex flex-wrap items-center gap-2">
                <span class="inline-flex items-center gap-2 text-[11px] font-extrabold tracking-widest uppercase text-white bg-brand px-3.5 py-1.5 rounded-full">● 100% Daluang Asli Bali</span>
                <span class="inline-flex items-center gap-1 text-xs font-bold text-brand-dark">★★★★★ <span class="font-semibold text-meta">4.9 dari pembeli upacara & seniman</span></span>
            </div>
            <h1 class="mt-4 text-[34px] md:text-[52px] leading-[1.02] font-black text-ink tracking-tight" style="font-family:Fraunces,Inter,sans-serif">Kertas <span class="text-brand">Ulantaga Asli</span> untuk Upacara, Lontar & Seni.</h1>
            <p class="mt-4 text-[15px] md:text-base text-meta leading-relaxed max-w-xl">Dari kulit kayu <strong class="text-ink">daluang pilihan</strong>, diproses manual lalu disucikan. Kuat berserat alami — dipercaya untuk sarana agama Hindu Bali, penulisan riwayat, kaligrafi & koleksi.</p>
            <div class="mt-6 flex flex-col sm:flex-row gap-3">
                <a href="https://wa.me/6287762225026?text=Halo%20Ulantagga%20Asli,%20saya%20mau%20pesan%20ukuran%2025x140cm" target="_blank" rel="noopener" class="inline-flex justify-center items-center gap-2 bg-brand text-white font-bold px-7 py-4 rounded-2xl hover:bg-brand-dark text-[15px]">Pesan via WhatsApp →</a>
                <a href="{{ route('sizes') }}" class="inline-flex justify-center items-center gap-2 bg-ink text-[#EFE5CF] font-bold px-7 py-4 rounded-2xl hover:bg-black text-[15px]">Lihat Ukuran 25 × 140 cm</a>
            </div>
            <dl class="mt-7 grid grid-cols-3 gap-3 max-w-md">
                <div class="border border-outline rounded-2xl p-3 text-center bg-paper"><dt class="text-[11px] font-bold text-meta uppercase">Bahan</dt><dd class="font-extrabold text-ink">Daluang</dd></div>
                <div class="border border-outline rounded-2xl p-3 text-center bg-paper"><dt class="text-[11px] font-bold text-meta uppercase">Proses</dt><dd class="font-extrabold text-ink">Manual</dd></div>
                <div class="border border-outline rounded-2xl p-3 text-center bg-paper"><dt class="text-[11px] font-bold text-meta uppercase">Fungsi</dt><dd class="font-extrabold text-ink">Disucikan</dd></div>
            </dl>
            <p class="mt-4 text-xs text-meta">✔ Stok ready Denpasar • ✔ Bisa custom • ✔ Kirim seluruh Indonesia</p>
        </div>

        <div class="reveal relative overflow-hidden rounded-[28px] bg-ink text-white p-7 md:p-9 paper-texture" style="background-color:#2A1D12">
            <div class="absolute -right-20 -top-20 w-72 h-72 rounded-full bg-brand/40 blur-2xl" aria-hidden="true"></div>
            <div class="absolute -left-16 -bottom-20 w-64 h-64 rounded-full bg-primary/20 blur-2xl" aria-hidden="true"></div>
            <p class="relative text-[11px] font-extrabold tracking-[0.25em] text-primary">UNGGULAN MINGGU INI</p>
            @if(! empty($featured))
                <h2 class="relative mt-3 text-2xl md:text-[28px] font-extrabold leading-snug"><a href="{{ route('articles.show', $featured->slug) }}">{{ $featured->title }}</a></h2>
                <p class="relative mt-3 text-sm text-white/70 leading-relaxed">{{ $featured->excerpt }}</p>
                <div class="relative mt-5 flex flex-wrap gap-2">
                    <a href="{{ route('articles.show', $featured->slug) }}" class="bg-primary text-ink font-bold px-5 py-2.5 rounded-full text-sm">Baca Cerita →</a>
                    <span class="text-xs text-white/50 self-center">{{ optional($featured->published_at)->format('d M Y') }} • {{ $featured->views }} dibaca</span>
                </div>
            @endif
            {{-- Visual kertas --}}
            <div class="relative mt-7 bg-[#EFE5CF] rounded-2xl p-5 text-ink flex gap-4 items-center" role="img" aria-label="Ilustrasi lembaran kertas Ulantaga asli berwarna krem kecoklatan">
                <div class="w-20 h-28 rounded-lg bg-gradient-to-b from-[#F7F1E0] via-[#DFD0B9] to-[#834D30]/60 border border-[#834D30]/30 rotate-[-4deg] shrink-0" aria-hidden="true"></div>
                <div>
                    <p class="font-extrabold">Tekstur serat alami, tidak licin</p>
                    <p class="text-sm text-meta">Cocok untuk tinta cina, pulpen & lukisan. Tidak mudah sobek saat disurat.</p>
                    <p class="mt-2 text-xs font-bold text-brand">Ukuran favorit: 25 × 140 cm</p>
                </div>
            </div>
            <div class="relative mt-4 grid grid-cols-3 gap-3 text-center text-[12px]">
                <div class="bg-white/10 rounded-xl py-3"><p class="font-extrabold text-primary text-base">500+</p><p class="text-white/60">Pemangku & seniman</p></div>
                <div class="bg-white/10 rounded-xl py-3"><p class="font-extrabold text-primary text-base">4.9★</p><p class="text-white/60">Rating pembeli</p></div>
                <div class="bg-white/10 rounded-xl py-3"><p class="font-extrabold text-primary text-base">Same-day</p><p class="text-white/60">Kirim Denpasar</p></div>
            </div>
        </div>
    </div>

    {{-- Trust bar --}}
    <div class="mt-4 bg-brand text-[#EFE5CF] rounded-2xl px-5 py-3.5 flex gap-6 overflow-x-auto text-[13px] font-bold whitespace-nowrap" aria-label="Kegunaan utama">
        <span>◍ Upacara Agama</span><span>◍ Lontar & Prasasti</span><span>◍ Kerajinan Tangan</span><span>◍ Kaligrafi</span><span>◍ Penelitian Budaya</span><span>◍ Koleksi Naskah</span>
    </div>
</section>

{{-- KEUNGGULAN --}}
<section aria-labelledby="unggul" class="max-w-7xl mx-auto px-4 mt-12">
    <p class="text-[11px] font-extrabold tracking-[0.25em] text-brand">KENAPA ULANTAGGA ASLI?</p>
    <h2 id="unggul" class="reveal mt-2 text-2xl md:text-[34px] font-black text-ink tracking-tight" style="font-family:Fraunces,serif">Bukan kertas biasa. Ini warisan.</h2>
    <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <article class="reveal bg-[#FFFEFA] border border-outline rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition"><p class="text-2xl">🌿</p><h3 class="mt-3 font-extrabold text-ink">Kulit Daluang Pilihan</h3><p class="mt-1 text-sm text-meta">Serat panjang <em>Broussonetia papyrifera</em>, kuat & lentur, tidak seperti HVS.</p></article>
        <article class="reveal bg-[#FFFEFA] border border-outline rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition"><p class="text-2xl">🙏</p><h3 class="mt-3 font-extrabold text-ink">Disucikan untuk Upacara</h3><p class="mt-1 text-sm text-meta">Layak untuk banten, pelawatan & sarana persembahyangan Hindu Bali.</p></article>
        <article class="reveal bg-[#FFFEFA] border border-outline rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition"><p class="text-2xl">✍️</p><h3 class="mt-3 font-extrabold text-ink">Enak Ditulisi & Dilukis</h3><p class="mt-1 text-sm text-meta">Tinta meresap pas, garis tegas untuk riwayat, usada & kaligrafi.</p></article>
        <article class="reveal bg-[#FFFEFA] border border-outline rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition"><p class="text-2xl">📦</p><h3 class="mt-3 font-extrabold text-ink">Ready & Custom</h3><p class="mt-1 text-sm text-meta">Stok 25×140cm selalu ada. Butuh potongan khusus? Bisa.</p></article>
    </div>
</section>

{{-- PRODUK --}}
<section aria-labelledby="produk" class="max-w-7xl mx-auto px-4 mt-12">
    <div class="bg-[#FFFEFA] border border-outline rounded-[28px] p-6 md:p-10">
        <div class="flex flex-wrap items-end justify-between gap-3">
            <div>
                <p class="text-[11px] font-extrabold tracking-[0.25em] text-brand">UKURAN & HARGA</p>
                <h2 id="produk" class="mt-2 text-2xl md:text-[32px] font-black text-ink" style="font-family:Fraunces,serif">Pilih ukuran sesuai kebutuhanmu</h2>
            </div>
            <a href="{{ route('sizes') }}" class="text-sm font-bold text-brand hover:text-brand-dark">Lihat semua →</a>
        </div>
        <div class="mt-6 grid md:grid-cols-3 gap-4">
            @foreach($products as $product)
                <article class="reveal border border-outline rounded-3xl overflow-hidden bg-white hover:shadow-xl transition flex flex-col">
                    <div class="bg-gradient-to-br from-paper via-paper-deep to-brand/70 h-36 flex items-end p-4">
                        <span class="text-xs font-extrabold bg-ink text-[#EFE5CF] px-3 py-1.5 rounded-full">{{ $product->size ?? 'Custom' }}</span>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h3 class="font-extrabold text-ink leading-snug">{{ $product->name }}</h3>
                        <p class="text-sm font-bold text-brand mt-1">{{ $product->price ?? 'Hubungi WhatsApp' }}</p>
                        <p class="text-sm text-meta mt-2 flex-1">{{ \Illuminate\Support\Str::limit($product->description, 100) }}</p>
                        <div class="mt-4 grid grid-cols-2 gap-2">
                            <a href="https://wa.me/6287762225026?text=Halo,%20saya%20mau%20pesan%20{{ urlencode($product->name) }}" target="_blank" rel="noopener" class="text-center text-sm font-bold bg-brand text-white py-3 rounded-xl hover:bg-brand-dark">Pesan WA</a>
                            <a href="{{ route('sizes') }}" class="text-center text-sm font-bold border border-outline py-3 rounded-xl hover:border-brand">Detail</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        <p class="mt-4 text-xs text-meta">💡 Tips: untuk lontar & upacara pilih 25×140cm. Untuk lukisan / pigura pilih lembaran custom.</p>
    </div>
</section>

{{-- CARA PESAN --}}
<section aria-labelledby="cara" class="max-w-7xl mx-auto px-4 mt-12 grid lg:grid-cols-[0.9fr_1.1fr] gap-6 items-stretch">
    <div class="reveal rounded-[28px] bg-brand text-white p-7 md:p-10">
        <h2 id="cara" class="text-2xl md:text-3xl font-black" style="font-family:Fraunces,serif">Pesan dalam 1 menit, tanpa ribet.</h2>
        <ol class="mt-6 space-y-4 text-[15px]">
            <li class="flex gap-4"><span class="w-9 h-9 shrink-0 rounded-full bg-white text-brand font-extrabold flex items-center justify-center">1</span><span><strong>Chat WhatsApp</strong><br><span class="text-white/70 text-sm">Klik tombol, sebutkan ukuran & jumlah.</span></span></li>
            <li class="flex gap-4"><span class="w-9 h-9 shrink-0 rounded-full bg-white text-brand font-extrabold flex items-center justify-center">2</span><span><strong>Konfirmasi & bayar</strong><br><span class="text-white/70 text-sm">Bisa transfer / COD Denpasar / marketplace.</span></span></li>
            <li class="flex gap-4"><span class="w-9 h-9 shrink-0 rounded-full bg-white text-brand font-extrabold flex items-center justify-center">3</span><span><strong>Dikirim hari yang sama</strong><br><span class="text-white/70 text-sm">Packing pipa aman, tidak terlipat.</span></span></li>
        </ol>
        <a href="https://wa.me/6287762225026" target="_blank" rel="noopener" class="mt-7 inline-block bg-white text-brand-dark font-extrabold px-7 py-3.5 rounded-2xl">Mulai Chat →</a>
    </div>
    <div class="reveal bg-[#FFFEFA] border border-outline rounded-[28px] p-7 md:p-10">
        <h2 class="text-2xl font-black text-ink" style="font-family:Fraunces,serif">Testimoni pemangku & seniman</h2>
        <div class="mt-5 grid sm:grid-cols-2 gap-4 text-sm">
            <figure class="border border-outline rounded-2xl p-5 bg-paper"><blockquote class="text-ink">“Kertasnya tebal, seratnya bagus untuk nulis aksara. Suksma!”</blockquote><figcaption class="mt-2 font-bold">— Jro Mangku, Gianyar ★★★★★</figcaption></figure>
            <figure class="border border-outline rounded-2xl p-5 bg-paper"><blockquote class="text-ink">“Buat lukisan natural, warnanya keluar. Packing rapi pakai pipa.”</blockquote><figcaption class="mt-2 font-bold">— Made S., Seniman Ubud ★★★★★</figcaption></figure>
            <figure class="border border-outline rounded-2xl p-5 bg-paper sm:col-span-2"><blockquote class="text-ink">“Sudah langganan untuk keperluan pura. Selalu ready ukuran 25×140.”</blockquote><figcaption class="mt-2 font-bold">— Panitia Pura, Denpasar ★★★★★</figcaption></figure>
        </div>
    </div>
</section>

{{-- ARTIKEL --}}
<section aria-labelledby="artikel" class="max-w-7xl mx-auto px-4 mt-12">
    <div class="flex items-end justify-between">
        <h2 id="artikel" class="text-2xl md:text-[32px] font-black text-ink" style="font-family:Fraunces,serif">Cerita & pengetahuan daluang</h2>
        <a href="{{ route('articles.index') }}" class="text-sm font-bold text-brand">Semua artikel →</a>
    </div>
    <div class="mt-5 grid md:grid-cols-3 gap-4">
        @foreach($latest->take(3) as $item)
            <article class="reveal bg-[#FFFEFA] border border-outline rounded-3xl overflow-hidden hover:shadow-lg transition">
                <div class="h-40 bg-gradient-to-br from-paper via-paper-deep to-brand/60 flex items-center justify-center text-white font-black text-4xl" aria-hidden="true">{{ mb_substr($item->title, 0, 1) }}</div>
                <div class="p-5">
                    <p class="text-[11px] font-extrabold tracking-widest text-brand uppercase">{{ $item->category?->name ?? 'Artikel' }}</p>
                    <h3 class="mt-1 font-extrabold text-ink leading-snug"><a href="{{ route('articles.show', $item->slug) }}" class="hover:text-brand">{{ $item->title }}</a></h3>
                    <p class="mt-1 text-xs text-meta">{{ optional($item->published_at)->format('d M Y') }} • {{ $item->views }} dibaca</p>
                </div>
            </article>
        @endforeach
    </div>
</section>

{{-- FAQ --}}
<section aria-labelledby="faq" class="max-w-4xl mx-auto px-4 mt-12">
    <h2 id="faq" class="text-center text-2xl md:text-3xl font-black text-ink" style="font-family:Fraunces,serif">Sering ditanyakan</h2>
    <div class="mt-6 space-y-3">
        <div class="bg-[#FFFEFA] border border-outline rounded-2xl overflow-hidden">
            <button data-faq aria-expanded="false" aria-controls="faq1" class="w-full text-left px-5 py-4 font-bold text-ink flex justify-between gap-3">Apa itu kertas Ulantaga? <span aria-hidden="true">+</span></button>
            <div id="faq1" class="hidden px-5 pb-5 text-sm text-meta">Ulantaga / daluang adalah kertas tradisional dari kulit kayu Broussonetia papyrifera. Dipakai untuk upacara, lontar, seni & penelitian.</div>
        </div>
        <div class="bg-[#FFFEFA] border border-outline rounded-2xl overflow-hidden">
            <button data-faq aria-expanded="false" aria-controls="faq2" class="w-full text-left px-5 py-4 font-bold text-ink flex justify-between gap-3">Ukuran apa yang ready? <span aria-hidden="true">+</span></button>
            <div id="faq2" class="hidden px-5 pb-5 text-sm text-meta">Favorit 25 × 140 cm selalu ready. Bisa custom lembaran untuk pigura, kaligrafi & koleksi.</div>
        </div>
        <div class="bg-[#FFFEFA] border border-outline rounded-2xl overflow-hidden">
            <button data-faq aria-expanded="false" aria-controls="faq3" class="w-full text-left px-5 py-4 font-bold text-ink flex justify-between gap-3">Bisa beli di marketplace? <span aria-hidden="true">+</span></button>
            <div id="faq3" class="hidden px-5 pb-5 text-sm text-meta">Bisa. Tersedia di Shopee, Tokopedia & Lazada. Atau tercepat via WhatsApp 087762225026.</div>
        </div>
    </div>
</section>

{{-- FINAL CTA --}}
<section class="max-w-7xl mx-auto px-4 mt-12 mb-4">
    <div class="reveal rounded-[28px] bg-ink text-center px-6 py-12 md:py-16 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 paper-texture" aria-hidden="true"></div>
        <h2 class="relative text-2xl md:text-4xl font-black text-[#EFE5CF]" style="font-family:Fraunces,serif">Siap melestarikan warisan dengan Ulantaga asli?</h2>
        <p class="relative mt-3 text-white/60">Chat sekarang, dikirim hari ini dari Denpasar Utara.</p>
        <div class="relative mt-6 flex flex-col sm:flex-row justify-center gap-3">
            <a href="https://wa.me/6287762225026" target="_blank" rel="noopener" class="bg-primary text-ink font-extrabold px-8 py-4 rounded-2xl">WhatsApp 087762225026</a>
            <a href="{{ route('marketplace') }}" class="border border-white/20 text-white font-bold px-8 py-4 rounded-2xl">Belanja di Marketplace</a>
        </div>
    </div>
</section>
@endsection
