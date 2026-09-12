@extends('layouts.admin')
@section('title', ($article->exists ? 'Edit' : 'Tambah') . ' Artikel – Ulantaga Admin')
@section('page_title', ($article->exists ? 'Edit' : 'Tambah') . ' Artikel')
@section('content')
<form method="POST" action="{{ $article->exists ? route('admin.articles.update', $article) : route('admin.articles.store') }}" enctype="multipart/form-data" class="grid lg:grid-cols-[1fr_300px] gap-4">
    @csrf @if($article->exists) @method('PUT') @endif
    <div class="bg-foreground border border-outline rounded-2xl p-5 grid gap-3">
        <div><label class="text-xs font-bold text-heading">Judul *</label><input name="title" required value="{{ old('title', $article->title) }}" class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white" placeholder="cth. Kertas Ulantaga Suci Bali Kuno"></div>
        <div class="grid sm:grid-cols-2 gap-3">
            <div><label class="text-xs font-bold text-heading">Kategori</label><select name="category_id" class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white"><option value="">— Tanpa kategori —</option>@foreach($categories as $c)<option value="{{ $c->id }}" @selected(old('category_id', $article->category_id) == $c->id)>{{ $c->name }}</option>@endforeach</select></div>
            <div><label class="text-xs font-bold text-heading">Tanggal Publish</label><input type="datetime-local" name="published_at" value="{{ old('published_at', $article->published_at?->format('Y-m-d\TH:i')) }}" class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white"></div>
        </div>
        <div><label class="text-xs font-bold text-heading">Ringkasan (excerpt)</label><textarea name="excerpt" rows="2" class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white" placeholder="1-2 kalimat pembuka...">{{ old('excerpt', $article->excerpt) }}</textarea></div>
        <div><label class="text-xs font-bold text-heading">Isi Artikel *</label><textarea name="body" rows="14" required class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white leading-relaxed" placeholder="Tulis isi lengkap di sini...">{{ old('body', $article->body) }}</textarea></div>
    </div>
    <div class="space-y-4">
        <div class="bg-foreground border border-outline rounded-2xl p-5 grid gap-3">
            <label class="flex items-center gap-2 text-sm font-semibold"><input type="checkbox" name="is_published" value="1" @checked(old('is_published', $article->is_published ?? true))> Publish</label>
            <label class="flex items-center gap-2 text-sm font-semibold"><input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $article->is_featured))> Unggulan (hero)</label>
            <div><label class="text-xs font-bold text-heading">Cover (opsional, max 2MB)</label><input type="file" name="cover" accept="image/*" class="mt-1 w-full text-sm">@if($article->cover_image)<p class="text-xs text-meta mt-1">Sudah ada cover. Upload baru untuk mengganti.</p>@endif</div>
            <button class="bg-heading text-white font-bold py-3 rounded-xl">Simpan Artikel</button>
            <a href="{{ route('admin.articles.index') }}" class="text-center text-sm font-bold text-meta">Batal</a>
        </div>
        <div class="bg-primary/20 border border-primary rounded-2xl p-4 text-xs leading-relaxed"><strong>Tips:</strong> samakan gaya situs lama — judul jelas, tambah views otomatis, slug dibuat otomatis dari judul.</div>
    </div>
</form>
@endsection
