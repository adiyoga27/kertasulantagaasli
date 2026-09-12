@extends('layouts.site')
@section('title', 'Tentang Kami – Kertas Ulantaga Asli')
@section('content')
<div class="max-w-6xl mx-auto px-4 pt-8">
    <p class="text-xs text-meta"><a href="{{ route('home') }}" class="hover:text-link">Home</a> / Tentang Kami</p>
    <h1 class="mt-1 text-3xl font-extrabold text-heading">Tentang Kami</h1>
    <div class="mt-5 grid lg:grid-cols-[1fr_340px] gap-6">
        <div class="bg-foreground border border-outline rounded-2xl p-6 md:p-8 prose-ulantaga text-[15px] text-body">
            <p>Selamat datang di <strong>kertasulantagaasli.com</strong> — penyedia resmi kertas <strong>Daluang atau Ulantaga</strong> berkualitas tinggi. Produk kami digunakan untuk keperluan naskah, seni, penelitian, hingga koleksi bersejarah.</p>
            <p>Apabila Anda memerlukan informasi lebih lanjut, penawaran khusus, atau ingin menjalin kerja sama, silakan hubungi kami melalui:<br>
            📱 WhatsApp: 087762225026<br>
            📧 Email: igedesusanto@gmail.com<br>
            🏠 Alamat: Jl. Patih Nambi XXIV No. Banjar Permata Anyar Desa Ubung Kaja Denpasar Utara.</p>
            <p>Kami berkomitmen memberikan layanan profesional, cepat, dan terpercaya.<br><strong>Kertas Ulantaga Asli – Melestarikan Warisan, Menyediakan Kualitas.</strong></p>
            <div class="grid sm:grid-cols-3 gap-3 mt-6">
                <div class="border border-outline rounded-xl p-4 text-center"><p class="font-extrabold text-heading">Asli</p><p class="text-xs text-meta">Bahan daluang pilihan</p></div>
                <div class="border border-outline rounded-xl p-4 text-center"><p class="font-extrabold text-heading">Suci</p><p class="text-xs text-meta">Untuk upacara agama</p></div>
                <div class="border border-outline rounded-xl p-4 text-center"><p class="font-extrabold text-heading">Seni</p><p class="text-xs text-meta">Riwayat & kerajinan</p></div>
            </div>
        </div>
        <aside class="space-y-4">
            <div class="bg-heading text-white rounded-2xl p-6">
                <p class="font-extrabold">Hubungi Langsung</p>
                <p class="text-sm text-white/70 mt-1">Respon cepat via WhatsApp.</p>
                <a href="https://wa.me/6287762225026" target="_blank" class="mt-3 inline-block bg-primary text-heading text-sm font-bold px-5 py-2.5 rounded-full">087762225026</a>
            </div>
            <div class="bg-foreground border border-outline rounded-2xl p-6">
                <p class="font-extrabold text-heading mb-2">Artikel Terbaru</p>
                <ul class="space-y-2 text-sm">
                    @foreach($latest as $item)
                        <li><a href="{{ route('articles.show', $item->slug) }}" class="text-link hover:text-linkactive">{{ $item->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
</div>
@endsection
