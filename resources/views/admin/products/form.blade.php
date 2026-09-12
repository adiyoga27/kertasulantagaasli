@extends('layouts.admin')
@section('title', ($product->exists ? 'Edit' : 'Tambah') . ' Produk')
@section('page_title', ($product->exists ? 'Edit' : 'Tambah') . ' Produk / Ukuran')
@section('content')
<form method="POST" action="{{ $product->exists ? route('admin.products.update', $product) : route('admin.products.store') }}" enctype="multipart/form-data" class="max-w-2xl bg-foreground border border-outline rounded-2xl p-5 grid gap-3">
    @csrf @if($product->exists) @method('PUT') @endif
    <div class="grid sm:grid-cols-2 gap-3">
        <div><label class="text-xs font-bold">Nama *</label><input name="name" required value="{{ old('name', $product->name) }}" class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white" placeholder="Kertas Ulantaga 25 x 140 cm"></div>
        <div><label class="text-xs font-bold">Ukuran</label><input name="size" value="{{ old('size', $product->size) }}" class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white" placeholder="25 x 140 cm"></div>
    </div>
    <div class="grid sm:grid-cols-2 gap-3">
        <div><label class="text-xs font-bold">Harga</label><input name="price" value="{{ old('price', $product->price) }}" class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white" placeholder="Hubungi WhatsApp"></div>
        <div><label class="text-xs font-bold">Urutan</label><input type="number" name="sort_order" value="{{ old('sort_order', $product->sort_order ?? 0) }}" class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white"></div>
    </div>
    <div><label class="text-xs font-bold">Deskripsi</label><textarea name="description" rows="4" class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white">{{ old('description', $product->description) }}</textarea></div>
    <div class="grid sm:grid-cols-3 gap-3">
        <div><label class="text-xs font-bold">Shopee URL</label><input name="marketplace_shopee" value="{{ old('marketplace_shopee', $product->marketplace_shopee) }}" class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white"></div>
        <div><label class="text-xs font-bold">Tokopedia URL</label><input name="marketplace_tokopedia" value="{{ old('marketplace_tokopedia', $product->marketplace_tokopedia) }}" class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white"></div>
        <div><label class="text-xs font-bold">Lazada URL</label><input name="marketplace_lazada" value="{{ old('marketplace_lazada', $product->marketplace_lazada) }}" class="mt-1 w-full border border-outline rounded-xl px-4 py-3 text-sm bg-white"></div>
    </div>
    <div><label class="text-xs font-bold">Foto (opsional)</label><input type="file" name="image_upload" accept="image/*" class="mt-1 w-full text-sm"></div>
    <label class="flex items-center gap-2 text-sm font-semibold"><input type="checkbox" name="is_available" value="1" @checked(old('is_available', $product->is_available ?? true))> Tersedia</label>
    <button class="bg-heading text-white font-bold py-3 rounded-xl">Simpan Produk</button>
</form>
@endsection
