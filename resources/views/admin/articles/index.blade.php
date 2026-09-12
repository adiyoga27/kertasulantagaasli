@extends('layouts.admin')
@section('title', 'Artikel – Ulantaga Admin')
@section('page_title', 'Artikel')
@section('content')
<div class="flex items-center justify-between mb-4 gap-3">
    <form method="GET" class="flex gap-2 flex-1 max-w-md">
        <input name="q" value="{{ request('q') }}" placeholder="Cari judul..." class="flex-1 border border-outline rounded-xl px-4 py-2.5 text-sm bg-white">
        <button class="bg-heading text-white text-sm font-bold px-4 rounded-xl">Cari</button>
    </form>
    <a href="{{ route('admin.articles.create') }}" class="shrink-0 bg-primary text-heading text-sm font-bold px-4 py-2.5 rounded-xl">+ Tambah</a>
</div>
<div class="bg-foreground border border-outline rounded-2xl overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm min-w-[640px]">
            <thead><tr class="text-left text-xs text-meta border-b border-outline"><th class="px-4 py-3">Judul</th><th class="px-4 py-3">Kategori</th><th class="px-4 py-3">Status</th><th class="px-4 py-3">Views</th><th class="px-4 py-3 text-right">Aksi</th></tr></thead>
            <tbody class="divide-y divide-outline">
                @forelse($articles as $a)
                    <tr>
                        <td class="px-4 py-3 font-semibold text-heading">{{ \Illuminate\Support\Str::limit($a->title, 55) }}<span class="block text-xs font-normal text-meta">{{ $a->slug }}</span></td>
                        <td class="px-4 py-3 text-meta">{{ $a->category?->name ?? '-' }}</td>
                        <td class="px-4 py-3"><span class="text-[11px] font-bold px-2.5 py-1 rounded-full {{ $a->is_published ? 'bg-green-100 text-green-800' : 'bg-gray-200 text-gray-700' }}">{{ $a->is_published ? 'Publish' : 'Draft' }}</span>@if($a->is_featured)<span class="ml-1 text-[11px] font-bold px-2.5 py-1 rounded-full bg-badge text-badgetext">Unggulan</span>@endif</td>
                        <td class="px-4 py-3 text-meta">{{ $a->views }}</td>
                        <td class="px-4 py-3 text-right whitespace-nowrap">
                            <a href="{{ route('articles.show', $a->slug) }}" target="_blank" class="text-link font-bold">Lihat</a> •
                            <a href="{{ route('admin.articles.edit', $a) }}" class="font-bold text-heading">Edit</a> •
                            <form method="POST" action="{{ route('admin.articles.destroy', $a) }}" class="inline" onsubmit="return confirm('Hapus artikel ini?')">@csrf @method('DELETE')<button class="font-bold text-red-600">Hapus</button></form>
                        </td>
                    </tr>
                @empty<tr><td colspan="5" class="px-4 py-8 text-center text-meta">Belum ada artikel.</td></tr>@endforelse
            </tbody>
        </table>
    </div>
</div>
<div class="mt-4">{{ $articles->links() }}</div>
@endsection
