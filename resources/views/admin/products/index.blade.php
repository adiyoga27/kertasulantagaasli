@extends('layouts.admin')
@section('title', 'Produk / Ukuran – Ulantaga Admin')
@section('page_title', 'Produk / Ukuran Kertas')
@section('content')
<div class="mb-4"><a href="{{ route('admin.products.create') }}" class="bg-primary text-heading text-sm font-bold px-4 py-2.5 rounded-xl">+ Tambah Produk</a></div>
<div class="bg-foreground border border-outline rounded-2xl overflow-hidden">
    <div class="overflow-x-auto"><table class="w-full text-sm min-w-[680px]">
        <thead><tr class="text-left text-xs text-meta border-b border-outline"><th class="px-4 py-3">Nama</th><th class="px-4 py-3">Ukuran</th><th class="px-4 py-3">Harga</th><th class="px-4 py-3">Status</th><th class="px-4 py-3 text-right">Aksi</th></tr></thead>
        <tbody class="divide-y divide-outline">
            @forelse($products as $p)
                <tr><td class="px-4 py-3 font-bold text-heading">{{ $p->name }}</td><td class="px-4 py-3 text-meta">{{ $p->size ?? '-' }}</td><td class="px-4 py-3 text-meta">{{ $p->price ?? '-' }}</td><td class="px-4 py-3">{{ $p->is_available ? '✅ Tersedia' : '⛔ Kosong' }}</td>
                <td class="px-4 py-3 text-right"><a href="{{ route('admin.products.edit', $p) }}" class="font-bold text-heading">Edit</a> • <form method="POST" action="{{ route('admin.products.destroy', $p) }}" class="inline" onsubmit="return confirm('Hapus?')">@csrf @method('DELETE')<button class="font-bold text-red-600">Hapus</button></form></td></tr>
            @empty<tr><td colspan="5" class="px-4 py-8 text-center text-meta">Belum ada produk.</td></tr>@endforelse
        </tbody>
    </table></div>
</div>
<div class="mt-4">{{ $products->links() }}</div>
@endsection
