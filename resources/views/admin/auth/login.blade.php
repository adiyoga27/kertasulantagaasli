<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin – Kertas Ulantaga Asli</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css'])
    @else
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @endif
</head>
<body class="min-h-screen bg-cream flex items-center justify-center p-4 font-sans" style="font-family:Inter,sans-serif">
<div class="w-full max-w-md bg-white border border-[#e5e5e5] rounded-2xl p-8 shadow-xl">
    <div class="flex items-center gap-3">
        <span class="w-11 h-11 rounded-xl bg-[#171717] text-[#ffc514] flex items-center justify-center font-extrabold">KU</span>
        <div><p class="font-extrabold text-[#171717]">Ulantaga Admin</p><p class="text-xs text-[#757575]">Kertas Ulantaga Asli</p></div>
    </div>
    <h1 class="mt-6 text-xl font-extrabold text-[#171717]">Masuk Admin</h1>
    <p class="text-sm text-[#757575]">Kelola artikel, kategori, produk & pesan.</p>
    @if($errors->any())
        <div class="mt-4 bg-red-50 border border-red-200 text-red-700 text-sm px-4 py-3 rounded-xl">{{ $errors->first() }}</div>
    @endif
    <form method="POST" action="{{ route('admin.login.post') }}" class="mt-5 grid gap-3">
        @csrf
        <input name="email" type="email" required value="{{ old('email') }}" placeholder="admin@kertasulantagaasli.com" class="border border-[#e5e5e5] rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#dd9933]">
        <input name="password" type="password" required placeholder="Password" class="border border-[#e5e5e5] rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#dd9933]">
        <label class="text-sm text-[#757575] flex items-center gap-2"><input type="checkbox" name="remember" value="1"> Ingat saya</label>
        <button class="bg-[#171717] text-white font-bold py-3 rounded-xl hover:bg-black">Masuk</button>
    </form>
    <p class="mt-4 text-xs text-[#757575]">Default: admin@kertasulantagaasli.com / ulantaga123 — segera ganti setelah login.</p>
    <a href="{{ route('home') }}" class="mt-2 inline-block text-sm font-bold text-[#f69847]">← Kembali ke landing</a>
</div>
</body>
</html>
