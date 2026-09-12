@extends('layouts.site')
@section('title', $article->title . ' – Kertas Ulantaga Asli')
@section('meta_description', $article->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($article->body), 150))
@section('content')
<div class="max-w-6xl mx-auto px-4 pt-8 grid lg:grid-cols-[1fr_300px] gap-6">
    <article class="bg-foreground border border-outline rounded-2xl overflow-hidden">
        <div class="h-56 md:h-72 bg-gradient-to-br from-gold via-badge to-heading flex items-center justify-center text-white font-extrabold text-6xl">{{ mb_substr($article->title, 0, 1) }}</div>
        <div class="p-6 md:p-8">
            <p class="text-xs text-meta"><a href="{{ route('home') }}" class="hover:text-link">Home</a> / <a href="{{ route('articles.index') }}" class="hover:text-link">Artikel</a> / {{ $article->category?->name }}</p>
            <span class="mt-2 inline-block text-[11px] font-bold text-badgetext bg-badge px-3 py-1 rounded-full">{{ strtoupper($article->category?->name ?? 'ARTIKEL') }}</span>
            <h1 class="mt-2 text-2xl md:text-3xl font-extrabold text-heading leading-tight">{{ $article->title }}</h1>
            <p class="mt-2 text-xs text-meta">{{ $article->published_at?->format('d F Y') }} • {{ $article->views }} Views • Oleh {{ $article->author?->name ?? 'Admin' }}</p>
            <div class="mt-5 prose-ulantaga text-[15px] text-body">{!! nl2br(e($article->body)) !!}</div>
            <div class="mt-6 flex flex-wrap gap-2">
                <a href="https://wa.me/6287762225026?text=Halo,%20saya%20tertarik%20dengan%20artikel%20{{ urlencode($article->title) }}" target="_blank" class="text-sm font-bold bg-heading text-white px-5 py-2.5 rounded-full">Tanya via WA</a>
                <a href="{{ route('articles.index') }}" class="text-sm font-bold border border-outline px-5 py-2.5 rounded-full">← Kembali</a>
            </div>
        </div>
    </article>
    <aside class="space-y-4">
        <div class="bg-foreground border border-outline rounded-2xl p-5">
            <p class="font-extrabold text-heading mb-3">Artikel Terkait</p>
            <ul class="space-y-2 text-sm">
                @forelse($related as $r)
                    <li><a href="{{ route('articles.show', $r->slug) }}" class="text-link hover:text-linkactive font-semibold">{{ $r->title }}</a></li>
                @empty
                    @foreach($latest as $l)
                        <li><a href="{{ route('articles.show', $l->slug) }}" class="text-link hover:text-linkactive font-semibold">{{ $l->title }}</a></li>
                    @endforeach
                @endforelse
            </ul>
        </div>
        <div class="bg-heading text-white rounded-2xl p-5">
            <p class="font-extrabold">Pesan Kertas Ulantaga</p>
            <p class="text-sm text-white/70">Ukuran 25 x 140 cm siap kirim.</p>
            <a href="{{ route('sizes') }}" class="mt-3 inline-block bg-primary text-heading text-sm font-bold px-4 py-2 rounded-full">Lihat Ukuran</a>
        </div>
    </aside>
</div>
@endsection
