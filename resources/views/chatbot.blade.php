<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZaHi Bot - Chat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        /* Warna kustom */
        .bg-pink-brand { background-color: #E195AB; }
        .bg-pink-light { background-color: #FFE2E2; }
        
        /* Menggunakan gambar background dari konsultasi */
        .chat-bg {
            background-image: url('{{ asset('images/watercolor-bg.png') }}'); 
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col font-sans text-gray-800">

    <header class="bg-pink-brand text-white py-3 px-4 flex items-center shadow-md">
        <a href="/consultasi" class="mr-4">
            <i class="fas fa-arrow-left fa-lg"></i>
        </a>
        <div class="flex items-center space-x-3">
            <i class="fas fa-robot text-xl"></i>
            <h1 class="text-xl font-bold">ZaHi Bot</h1>
        </div>
    </header>

   <main class="flex-grow p-4 chat-bg relative">
        
        <div class="flex justify-start mb-4">
            <div class="bg-white p-3 rounded-xl max-w-xs shadow">
                <p class="text-gray-700">Halo, saya ZaHi Bot</p>
            </div>
        </div>
        
    </main>

    <footer class="bg-pink-brand text-white py-2 px-4 flex items-center shadow-lg">
        <form action="#" method="POST" class="flex w-full items-center space-x-3">
            {{-- Tambahkan token CSRF untuk keamanan jika nanti ada back-end --}}
            {{-- @csrf --}}

            <input type="text" 
                   placeholder="Selamat datang! Apa yang bisa saya bantu?" 
                   class="flex-grow py-2 px-4 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-white"
                   style="background-color: #FEE7EE;">
            
            <button type="submit" class="bg-white text-pink-brand p-3 rounded-full hover:opacity-80 transition duration-150">
                <i class="fas fa-paper-plane fa-lg"></i>
            </button>
        </form>
    </footer>

</body>
</html>

</body>
</html>