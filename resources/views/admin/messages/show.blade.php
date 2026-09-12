@extends('layouts.admin')
@section('title', 'Detail Pesan')
@section('page_title', 'Detail Pesan')
@section('content')
<div class="max-w-2xl bg-foreground border border-outline rounded-2xl p-6">
    <p class="font-extrabold text-heading text-lg">{{ $message->name }}</p>
    <p class="text-sm text-meta">WA: {{ $message->whatsapp ?? '-' }} • Email: {{ $message->email ?? '-' }} • {{ $message->created_at->format('d M Y H:i') }}</p>
    @if($message->subject)<p class="mt-2 text-sm font-bold text-heading">Subjek: {{ $message->subject }}</p>@endif
    <p class="mt-3 text-[15px] leading-relaxed">{{ $message->message }}</p>
    <div class="mt-5 flex gap-2">
        @if($message->whatsapp)<a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $message->whatsapp) }}" target="_blank" class="text-sm font-bold bg-heading text-white px-5 py-2.5 rounded-full">Balas WA</a>@endif
        <a href="{{ route('admin.messages.index') }}" class="text-sm font-bold border border-outline px-5 py-2.5 rounded-full">← Kembali</a>
    </div>
</div>
@endsection
