<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        /* Mendefinisikan Warna Kustom yang Mendekati Palet Pink pada Gambar */
        :root {
            --color-light-pink: #fcebeb; 
            --color-dark-pink: #d18d9f; 
            --color-brand-text: #a04c63; 
        }

        .bg-light-pink { background-color: var(--color-light-pink); }
        .bg-dark-pink { background-color: var(--color-dark-pink); }
        .text-brand-text { color: var(--color-brand-text); }
        
        /* Styling untuk Hero Section dengan Gambar Latar */
        .hero-bg {
            background-image: url("{{ asset('images/hero-background.jpeg') }}"); 
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
        }

        /* Styling untuk menghilangkan scrollbar pada carousel/galeri */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="font-Jomolhari text-gray-800">

    @yield('content')
    
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>