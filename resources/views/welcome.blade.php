<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyVisitor - Selamat Datang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans antialiased">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600">EasyVisitor</a>
            <div class="space-x-6">
                <a href="/login" class="text-gray-600 hover:text-blue-600">Masuk</a>
                <a href="/register" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">Daftar</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="container mx-auto px-6 py-16 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6">
            Kelola Tamu Jadi <span class="text-blue-600">Lebih Mudah</span>
        </h1>
        <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto">
            Sistem manajemen pengunjung modern untuk kantor, sekolah, dan gedung Anda. Aman, cepat, dan terorganisir.
        </p>
        <div class="flex justify-center gap-4">
            <button class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition">Mulai Sekarang</button>
            <button class="bg-white border border-gray-300 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Lihat Demo</button>
        </div>
    </header>

    <!-- Status Database (Opsional untuk cek koneksi) -->
    <footer class="mt-20 py-10 border-t border-gray-200">
        <div class="text-center text-gray-500 text-sm">
            &copy; 2024 EasyVisitor Application. Database: <span class="text-green-600 font-mono">{{ config('database.connections.mysql.database') }}</span>
        </div>
    </footer>

</body>
</html>
