<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::orderBy('sort_order')->paginate(12);

        return view('admin.products.index', compact('products'));
    }

    public function create(): View
    {
        return view('admin.products.form', ['product' => new Product(['is_available' => true])]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateProduct($request);
        $validated['image'] = $this->storeImage($request);

        Product::create($validated);

        return redirect()->route('admin.products.index')->with('success', 'Produk / ukuran ditambahkan.');
    }

    public function edit(Product $product): View
    {
        return view('admin.products.form', compact('product'));
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $validated = $this->validateProduct($request);

        if ($image = $this->storeImage($request)) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $validated['image'] = $image;
        }

        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success', 'Produk diperbarui.');
    }

    public function destroy(Product $product): RedirectResponse
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();

        return back()->with('success', 'Produk dihapus.');
    }

    /** @return array<string, mixed> */
    private function validateProduct(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'size' => ['nullable', 'string', 'max:100'],
            'price' => ['nullable', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'image_upload' => ['nullable', 'image', 'max:2048'],
            'marketplace_shopee' => ['nullable', 'url', 'max:255'],
            'marketplace_tokopedia' => ['nullable', 'url', 'max:255'],
            'marketplace_lazada' => ['nullable', 'url', 'max:255'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]) + ['is_available' => $request->boolean('is_available')];
    }

    private function storeImage(Request $request): ?string
    {
        if (! $request->hasFile('image_upload')) {
            return null;
        }

        /** @var UploadedFile $file */
        $file = $request->file('image_upload');

        return $file->store('products', 'public');
    }
}
