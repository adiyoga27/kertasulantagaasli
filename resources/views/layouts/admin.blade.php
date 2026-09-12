<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin – Kertas Ulantaga Asli')</title>
    <meta name="theme-color" content="#dd9933">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @endif
</head>
<body class="bg-cream text-body font-sans min-h-screen">
<div class="min-h-screen lg:grid lg:grid-cols-[260px_1fr]">
    <aside class="bg-heading text-white lg:min-h-screen">
        <div class="px-5 py-5 flex items-center gap-3 border-b border-white/10">
            <span class="w-10 h-10 rounded-xl bg-primary text-heading flex items-center justify-center font-extrabold">KU</span>
            <div class="leading-tight">
                <p class="font-extrabold">Ulantaga Admin</p>
                <p class="text-xs text-white/60">Kertas Ulantaga Asli</p>
            </div>
        </div>
        <nav class="p-4 grid gap-1 text-sm font-semibold">
            <a href="{{ route('admin.dashboard') }}" class="px-3 py-2.5 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-primary text-heading' : 'hover:bg-white/10' }}">📊 Dashboard</a>
            <a href="{{ route('admin.articles.index') }}" class="px-3 py-2.5 rounded-lg {{ request()->routeIs('admin.articles.*') ? 'bg-primary text-heading' : 'hover:bg-white/10' }}">📝 Artikel</a>
            <a href="{{ route('admin.categories.index') }}" class="px-3 py-2.5 rounded-lg {{ request()->routeIs('admin.categories.*') ? 'bg-primary text-heading' : 'hover:bg-white/10' }}">🏷️ Kategori</a>
            <a href="{{ route('admin.products.index') }}" class="px-3 py-2.5 rounded-lg {{ request()->routeIs('admin.products.*') ? 'bg-primary text-heading' : 'hover:bg-white/10' }}">📦 Produk / Ukuran</a>
            <a href="{{ route('admin.messages.index') }}" class="px-3 py-2.5 rounded-lg {{ request()->routeIs('admin.messages.*') ? 'bg-primary text-heading' : 'hover:bg-white/10' }}">✉️ Pesan Masuk</a>
            <div class="my-2 border-t border-white/10"></div>
            <a href="{{ route('home') }}" target="_blank" class="px-3 py-2.5 rounded-lg hover:bg-white/10">🌐 Lihat Landing</a>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button class="w-full text-left px-3 py-2.5 rounded-lg hover:bg-white/10">🚪 Keluar</button>
            </form>
        </nav>
    </aside>
    <div class="min-w-0">
        <header class="bg-foreground border-b border-outline px-5 py-4 flex items-center justify-between gap-3 sticky top-0 z-30">
            <p class="font-bold text-heading">@yield('page_title', 'Dashboard')</p>
            <p class="text-xs text-meta hidden sm:block">{{ auth()->user()?->name }} • {{ auth()->user()?->email }}</p>
        </header>
        <main class="p-5 max-w-6xl">
            @if(session('success'))
                <div class="mb-4 bg-green-50 border border-green-200 text-green-800 text-sm px-4 py-3 rounded-xl">{{ session('success') }}</div>
            @endif
            @if($errors->any())
                <div class="mb-4 bg-red-50 border border-red-200 text-red-800 text-sm px-4 py-3 rounded-xl">
                    <ul class="list-disc ml-5">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
                </div>
            @endif
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
