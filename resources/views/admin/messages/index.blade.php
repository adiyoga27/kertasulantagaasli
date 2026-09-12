@extends('layouts.admin')
@section('title', 'Pesan Masuk – Ulantaga Admin')
@section('page_title', 'Pesan Masuk')
@section('content')
<div class="bg-foreground border border-outline rounded-2xl overflow-hidden">
    <table class="w-full text-sm">
        <thead><tr class="text-left text-xs text-meta border-b border-outline"><th class="px-4 py-3">Nama</th><th class="px-4 py-3">Pesan</th><th class="px-4 py-3">Tanggal</th><th class="px-4 py-3 text-right">Aksi</th></tr></thead>
        <tbody class="divide-y divide-outline">
            @forelse($messages as $m)
                <tr class="{{ !$m->is_read ? 'bg-primary/10' : '' }}">
                    <td class="px-4 py-3 font-bold text-heading">{{ $m->name }}<span class="block text-xs font-normal text-meta">{{ $m->whatsapp }} {{ $m->email }}</span></td>
                    <td class="px-4 py-3 text-meta">{{ \Illuminate\Support\Str::limit($m->message, 60) }}</td>
                    <td class="px-4 py-3 text-meta">{{ $m->created_at->format('d M Y H:i') }}</td>
                    <td class="px-4 py-3 text-right"><a href="{{ route('admin.messages.show', $m) }}" class="font-bold text-heading">Buka</a> • <form method="POST" action="{{ route('admin.messages.destroy', $m) }}" class="inline" onsubmit="return confirm('Hapus?')">@csrf @method('DELETE')<button class="font-bold text-red-600">Hapus</button></form></td>
                </tr>
            @empty<tr><td colspan="4" class="px-4 py-8 text-center text-meta">Belum ada pesan.</td></tr>@endforelse
        </tbody>
    </table>
</div>
<div class="mt-4">{{ $messages->links() }}</div>
@endsection
