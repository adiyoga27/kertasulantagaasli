@extends('layouts.site')
@section('title', 'Artikel – Kertas Ulantaga Asli')
@section('content')
<div class="max-w-6xl mx-auto px-4 pt-8 grid lg:grid-cols-[1fr_300px] gap-6">
    <div>
        <p class="text-xs text-meta"><a href="{{ route('home') }}" class="hover:text-link">Home</a> / Artikel</p>
        <h1 class="mt-1 text-3xl font-extrabold text-heading">Artikel</h1>
        <form method="GET" class="mt-4 flex gap-2">
            <input name="q" value="{{ request('q') }}" placeholder="Cari artikel..." class="flex-1 border border-outline rounded-full px-5 py-2.5 text-sm bg-white focus:outline-none focus:border-gold">
            <button class="bg-heading text-white text-sm font-bold px-5 rounded-full">Cari</button>
        </form>
        <div class="mt-3 flex flex-wrap gap-2">
            <a href="{{ route('articles.index') }}" class="text-xs font-bold px-3 py-1.5 rounded-full border {{ !request('kategori') ? 'bg-heading text-white border-heading' : 'bg-white border-outline' }}">Semua</a>
            @foreach($categories as $cat)
                <a href="{{ route('articles.index', ['kategori' => $cat->slug]) }}" class="text-xs font-bold px-3 py-1.5 rounded-full border {{ request('kategori') === $cat->slug ? 'bg-heading text-white border-heading' : 'bg-white border-outline' }}">{{ $cat->name }}</a>
            @endforeach
        </div>
        <div class="mt-5 grid md:grid-cols-2 gap-4">
            @forelse($articles as $item)
                <article class="bg-foreground border border-outline rounded-2xl overflow-hidden">
                    <div class="h-40 bg-gradient-to-br from-cream via-gold/40 to-heading/70 flex items-center justify-center text-white font-extrabold text-3xl">{{ mb_substr($item->title, 0, 1) }}</div>
                    <div class="p-5">
                        <span class="text-[11px] font-bold text-link">{{ strtoupper($item->category?->name ?? 'ARTIKEL') }}</span>
                        <h2 class="font-bold text-heading leading-snug"><a href="{{ route('articles.show', $item->slug) }}" class="hover:text-link">{{ $item->title }}</a></h2>
                        <p class="text-xs text-meta mt-1">{{ $item->published_at?->format('d M Y') }} • {{ $item->views }} views</p>
                        <p class="text-sm text-meta mt-2">{{ \Illuminate\Support\Str::limit($item->excerpt, 110) }}</p>
                    </div>
                </article>
            @empty
                <p class="text-meta">Belum ada artikel.</p>
            @endforelse
        </div>
        <div class="mt-6">{{ $articles->links() }}</div>
    </div>
    <aside class="space-y-4">
        <div class="bg-foreground border border-outline rounded-2xl p-5">
            <p class="font-extrabold text-heading mb-3">Paling Populer</p>
            <div class="grid gap-3">
                @foreach($popular as $p)
                    <a href="{{ route('articles.show', $p->slug) }}" class="flex gap-3 items-center">
                        <span class="w-14 h-14 shrink-0 rounded-xl bg-heading text-primary flex items-center justify-center font-extrabold">{{ mb_substr($p->title, 0, 1) }}</span>
                        <span><span class="block text-sm font-bold text-heading leading-snug">{{ \Illuminate\Support\Str::limit($p->title, 55) }}</span><span class="text-xs text-meta">{{ $p->views }} views</span></span>
                    </a>
                @endforeach
            </div>
        </div>
    </aside>
</div>
@endsection
