@extends('layouts.admin')
@section('title', ($category->exists ? 'Edit' : 'Tambah') . ' Kategori')
@section('page_title', ($category->exists ? 'Edit' : 'Tambah') . ' Kategori')
@section('content')
<form method="POST" action="{{ $category->exists ? route('admin.categories.update', $category) : route('admin.categories.store') }}" class="max-w-lg bg-foreground border border-outline rounded-2xl p-5 grid gap-3">
    @csrf @if($category->exists) @method('PUT') @endif
    <div><label class="text-xs font-bold">Nama *</label><input name="name" required value="{{ old('name', $category->name) }}" class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white"></div>
    <div><label class="text-xs font-bold">Deskripsi</label><textarea name="description" rows="3" class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white">{{ old('description', $category->description) }}</textarea></div>
    <button class="bg-heading text-white font-bold py-3 rounded-xl">Simpan</button>
</form>
@endsection
