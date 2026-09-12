@extends('layouts.admin')
@section('title', 'Kategori – Ulantaga Admin')
@section('page_title', 'Kategori')
@section('content')
<div class="mb-4"><a href="{{ route('admin.categories.create') }}" class="bg-primary text-heading text-sm font-bold px-4 py-2.5 rounded-xl">+ Tambah Kategori</a></div>
<div class="bg-foreground border border-outline rounded-2xl overflow-hidden">
    <table class="w-full text-sm">
        <thead><tr class="text-left text-xs text-meta border-b border-outline"><th class="px-4 py-3">Nama</th><th class="px-4 py-3">Slug</th><th class="px-4 py-3">Jumlah Artikel</th><th class="px-4 py-3 text-right">Aksi</th></tr></thead>
        <tbody class="divide-y divide-outline">
            @forelse($categories as $c)
                <tr><td class="px-4 py-3 font-bold text-heading">{{ $c->name }}</td><td class="px-4 py-3 text-meta">{{ $c->slug }}</td><td class="px-4 py-3 text-meta">{{ $c->articles_count }}</td>
                <td class="px-4 py-3 text-right"><a href="{{ route('admin.categories.edit', $c) }}" class="font-bold text-heading">Edit</a> • <form method="POST" action="{{ route('admin.categories.destroy', $c) }}" class="inline" onsubmit="return confirm('Hapus?')">@csrf @method('DELETE')<button class="font-bold text-red-600">Hapus</button></form></td></tr>
            @empty<tr><td colspan="4" class="px-4 py-8 text-center text-meta">Belum ada kategori.</td></tr>@endforelse
        </tbody>
    </table>
</div>
<div class="mt-4">{{ $categories->links() }}</div>
@endsection
