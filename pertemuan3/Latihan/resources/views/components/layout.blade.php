<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Menggunakan Named Slot untuk Title --}}
    <title>{{ $title ?? 'Default Title' }}</title>
    </head>
<body>
    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/blog">Blog</a> |
        <a href="/contact">Contact</a>
    </nav>

    <main>
        {{-- Menggunakan Slot untuk menampung konten dinamis dari view lain --}}
        {{ $slot }} [cite: 830]
    </main>

    <footer>
        {{-- Tugas: Buat Footer di dalam Layout.blade.php [cite: 846] --}}
        <p>&copy; {{ date('Y') }} Modul Praktikum Laravel</p>
    </footer>
</body>
</html>