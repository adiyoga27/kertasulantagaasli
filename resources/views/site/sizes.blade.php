@extends('layouts.site')
@section('title', 'Ukuran Kertas Ulantaga – Kertas Ulantaga Asli')
@section('content')
<div class="max-w-6xl mx-auto px-4 pt-8">
    <p class="text-xs text-meta"><a href="{{ route('home') }}" class="hover:text-link">Home</a> / Ukuran Kertas</p>
    <h1 class="mt-1 text-3xl font-extrabold text-heading">Ukuran Kertas Ulantaga</h1>
    <p class="mt-2 text-meta text-sm">Pilih ukuran favorit: 25 x 140 cm untuk lontar & upacara, atau lembaran custom untuk seni.</p>
    <div class="mt-5 grid md:grid-cols-2 lg:grid-cols-3 gap-4">
        @forelse($products as $product)
            <div class="bg-foreground border border-outline rounded-2xl overflow-hidden">
                <div class="h-40 bg-gradient-to-br from-gold via-badge to-heading flex items-center justify-center text-white font-extrabold text-2xl">{{ $product->size ?? 'KU' }}</div>
                <div class="p-5">
                    <p class="font-extrabold text-heading">{{ $product->name }}</p>
                    <p class="text-xs text-meta mt-1">{{ $product->size }} • {{ $product->price }}</p>
                    <p class="text-sm text-meta mt-2 leading-relaxed">{{ $product->description }}</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <a href="https://wa.me/6287762225026?text=Halo,%20saya%20mau%20pesan%20{{ urlencode($product->name) }}" target="_blank" class="text-xs font-bold bg-heading text-white px-4 py-2 rounded-full">Pesan WA</a>
                        @if($product->marketplace_shopee)<a href="{{ $product->marketplace_shopee }}" target="_blank" class="text-xs font-bold border border-outline px-4 py-2 rounded-full">Shopee</a>@endif
                        @if($product->marketplace_tokopedia)<a href="{{ $product->marketplace_tokopedia }}" target="_blank" class="text-xs font-bold border border-outline px-4 py-2 rounded-full">Tokopedia</a>@endif
                    </div>
                </div>
            </div>
        @empty
            <p class="text-meta">Belum ada produk. Silakan hubungi WhatsApp.</p>
        @endforelse
    </div>
</div>
@endsection
