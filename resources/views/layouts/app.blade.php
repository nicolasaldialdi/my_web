<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PO. 27 Trans')</title>

    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <!-- Custom CSS Global Theme -->
    <style>
        /* Theme Global Dark & Orange PO 27 Trans */
        body {
            background-color: #121212 !important; /* Background utama gelap arang */
            color: #e0e0e0;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Utility Class Warna khas PO 27 Trans */
        .bg-orange {
            background-color: #ff6600 !important;
        }
        .text-orange {
            color: #ff6600 !important;
        }
        .btn-orange {
            background-color: #ff6600;
            color: #ffffff;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-orange:hover {
            background-color: #e55c00;
            color: #ffffff;
            box-shadow: 0 0 15px rgba(255, 102, 0, 0.4);
        }

        /* Container utama fleksibel */
        main {
            flex: 1;
        }
    </style>
</head>
<body>

    <!-- Header / Navbar -->
    @include('partials.header')

    <!-- Konten Halaman Dinamis -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>