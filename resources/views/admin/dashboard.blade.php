@extends('layouts.admin')
@section('title', 'Dashboard – Ulantaga Admin')
@section('page_title', 'Dashboard')
@section('content')
<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="bg-foreground border border-outline rounded-2xl p-5"><p class="text-xs font-bold text-meta">ARTIKEL</p><p class="text-3xl font-extrabold text-heading">{{ $totalArticles }}</p><a href="{{ route('admin.articles.index') }}" class="text-xs font-bold text-link">Kelola →</a></div>
    <div class="bg-foreground border border-outline rounded-2xl p-5"><p class="text-xs font-bold text-meta">KATEGORI</p><p class="text-3xl font-extrabold text-heading">{{ $totalCategories }}</p><a href="{{ route('admin.categories.index') }}" class="text-xs font-bold text-link">Kelola →</a></div>
    <div class="bg-foreground border border-outline rounded-2xl p-5"><p class="text-xs font-bold text-meta">PRODUK / UKURAN</p><p class="text-3xl font-extrabold text-heading">{{ $totalProducts }}</p><a href="{{ route('admin.products.index') }}" class="text-xs font-bold text-link">Kelola →</a></div>
    <div class="bg-heading text-white rounded-2xl p-5"><p class="text-xs font-bold text-primary">PESAN BELUM DIBACA</p><p class="text-3xl font-extrabold">{{ $unreadMessages }}</p><a href="{{ route('admin.messages.index') }}" class="text-xs font-bold text-primary">Lihat →</a></div>
</div>
<div class="mt-4 grid lg:grid-cols-2 gap-4">
    <div class="bg-foreground border border-outline rounded-2xl p-5">
        <div class="flex items-center justify-between mb-3"><p class="font-extrabold text-heading">Artikel Terpopuler</p><a href="{{ route('admin.articles.create') }}" class="text-xs font-bold bg-primary text-heading px-3 py-1.5 rounded-full">+ Artikel</a></div>
        <ul class="divide-y divide-outline">
            @forelse($popularArticles as $a)
                <li class="py-2.5 flex items-center justify-between gap-3 text-sm"><a href="{{ route('admin.articles.edit', $a) }}" class="font-semibold text-heading hover:text-link">{{ \Illuminate\Support\Str::limit($a->title, 50) }}</a><span class="text-xs text-meta shrink-0">{{ $a->views }} views</span></li>
            @empty<li class="text-sm text-meta">Belum ada artikel.</li>@endforelse
        </ul>
    </div>
    <div class="bg-foreground border border-outline rounded-2xl p-5">
        <div class="flex items-center justify-between mb-3"><p class="font-extrabold text-heading">Pesan Terbaru</p><a href="{{ route('admin.messages.index') }}" class="text-xs font-bold text-link">Semua →</a></div>
        <ul class="divide-y divide-outline">
            @forelse($latestMessages as $m)
                <li class="py-2.5 text-sm"><a href="{{ route('admin.messages.show', $m) }}" class="font-semibold text-heading">{{ $m->name }}</a><p class="text-xs text-meta">{{ \Illuminate\Support\Str::limit($m->message, 70) }}</p></li>
            @empty<li class="text-sm text-meta">Belum ada pesan.</li>@endforelse
        </ul>
    </div>
</div>
@endsection
