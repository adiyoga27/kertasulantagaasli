@extends('layouts.site')
@section('title', 'Marketplace – Kertas Ulantaga Asli')
@section('content')
<div class="max-w-6xl mx-auto px-4 pt-8">
    <p class="text-xs text-meta"><a href="{{ route('home') }}" class="hover:text-link">Home</a> / Marketplace</p>
    <h1 class="mt-1 text-3xl font-extrabold text-heading">Marketplace</h1>
    <p class="mt-2 text-meta text-sm">Belanja mudah di Shopee, Tokopedia, dan Lazada.</p>
    <div class="mt-5 grid md:grid-cols-3 gap-4">
        <a href="https://shopee.co.id/" target="_blank" class="bg-foreground border border-outline rounded-2xl p-6 hover:shadow-lg">
            <p class="font-extrabold text-heading text-lg">Shopee</p>
            <p class="text-sm text-meta mt-1">Cek stok & promo kertas Ulantaga.</p>
            <span class="mt-3 inline-block text-sm font-bold text-link">Kunjungi →</span>
        </a>
        <a href="https://www.tokopedia.com/" target="_blank" class="bg-foreground border border-outline rounded-2xl p-6 hover:shadow-lg">
            <p class="font-extrabold text-heading text-lg">Tokopedia</p>
            <p class="text-sm text-meta mt-1">Pesan ukuran 25 x 140 cm & custom.</p>
            <span class="mt-3 inline-block text-sm font-bold text-link">Kunjungi →</span>
        </a>
        <a href="https://www.lazada.co.id/" target="_blank" class="bg-foreground border border-outline rounded-2xl p-6 hover:shadow-lg">
            <p class="font-extrabold text-heading text-lg">Lazada</p>
            <p class="text-sm text-meta mt-1">Alternatif belanja cepat.</p>
            <span class="mt-3 inline-block text-sm font-bold text-link">Kunjungi →</span>
        </a>
    </div>
    @if($products->count())
        <h2 class="mt-8 font-extrabold text-heading text-xl">Produk Unggulan</h2>
        <div class="mt-3 grid md:grid-cols-2 gap-4">
            @foreach($products as $product)
                <div class="bg-foreground border border-outline rounded-2xl p-5 flex items-center justify-between gap-4">
                    <div><p class="font-bold text-heading">{{ $product->name }}</p><p class="text-xs text-meta">{{ $product->size }} • {{ $product->price }}</p></div>
                    <a href="https://wa.me/6287762225026?text=Halo,%20saya%20mau%20pesan%20{{ urlencode($product->name) }}" target="_blank" class="shrink-0 text-xs font-bold bg-primary text-heading px-4 py-2 rounded-full">Pesan</a>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
