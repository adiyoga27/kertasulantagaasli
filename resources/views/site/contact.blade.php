@extends('layouts.site')
@section('title', 'Kontak Kami – Kertas Ulantaga Asli')
@section('content')
<div class="max-w-6xl mx-auto px-4 pt-8">
    <p class="text-xs text-meta"><a href="{{ route('home') }}" class="hover:text-link">Home</a> / Kontak Kami</p>
    <h1 class="mt-1 text-3xl font-extrabold text-heading">Kontak Kami</h1>
    <div class="mt-5 grid lg:grid-cols-2 gap-6">
        <div class="bg-foreground border border-outline rounded-2xl p-6 md:p-8 text-[15px] leading-relaxed">
            <p>Apabila Anda memerlukan informasi lebih lanjut, penawaran khusus, atau ingin menjalin kerja sama, silakan hubungi kami melalui:<br>
            📱 WhatsApp: 087762225026<br>
            📧 Email: igedesusanto@gmail.com<br>
            🏠 Alamat: Jl. Patih Nambi XXIV No. Banjar Permata Anyar Desa Ubung Kaja Denpasar Utara.</p>
            <p class="mt-3">Kami berkomitmen memberikan layanan profesional, cepat, dan terpercaya.<br><strong>Kertas Ulantaga Asli – Melestarikan Warisan, Menyediakan Kualitas.</strong></p>
            <div class="mt-5 flex flex-wrap gap-2">
                <a href="https://wa.me/6287762225026" target="_blank" class="bg-heading text-white text-sm font-bold px-5 py-2.5 rounded-full">Chat WhatsApp</a>
                <a href="mailto:igedesusanto@gmail.com" class="border border-outline text-sm font-bold px-5 py-2.5 rounded-full">Kirim Email</a>
            </div>
        </div>
        <div class="bg-foreground border border-outline rounded-2xl p-6 md:p-8">
            <p class="font-extrabold text-heading">Formulir Pesan</p>
            @if(session('success'))
                <div class="mt-3 bg-green-50 border border-green-200 text-green-800 text-sm px-4 py-3 rounded-xl">{{ session('success') }}</div>
            @endif
            <form method="POST" action="{{ route('contact.store') }}" class="mt-4 grid gap-3">
                @csrf
                <input name="name" value="{{ old('name') }}" required placeholder="Nama lengkap" class="w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white focus:outline-none focus:border-gold">
                <div class="grid sm:grid-cols-2 gap-3">
                    <input name="whatsapp" value="{{ old('whatsapp') }}" placeholder="No. WhatsApp" class="w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white focus:outline-none focus:border-gold">
                    <input name="email" value="{{ old('email') }}" type="email" placeholder="Email (opsional)" class="w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white focus:outline-none focus:border-gold">
                </div>
                <input name="subject" value="{{ old('subject') }}" placeholder="Keperluan (mis. pesan 25x140cm)" class="w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white focus:outline-none focus:border-gold">
                <textarea name="message" required rows="5" placeholder="Tulis pesan..." class="w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white focus:outline-none focus:border-gold">{{ old('message') }}</textarea>
                <button class="bg-primary text-heading font-bold py-3 rounded-xl hover:brightness-95">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>
@endsection
