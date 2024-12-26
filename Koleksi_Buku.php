<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Buku - Perpustakaan Sekolah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        /* Navbar Custom Styling */
        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Jumbotron Styling for Koleksi Buku */
        .jumbotron {
            background: linear-gradient(to bottom, rgba(42, 139, 242, 0.8), rgba(24, 90, 200, 0.9)), 
                        url('https://via.placeholder.com/1920x800?text=Book+Collection') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 80px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .jumbotron h1 {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: slideInLeft 2s ease-out;
        }
        .jumbotron p {
            font-size: 1.2rem;
            margin-top: 20px;
            animation: fadeInUp 2s;
        }

        /* Book Collection Section */
        .book-collection {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            padding: 40px 20px;
        }
        .book-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .book-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .book-card .card-body {
            padding: 20px;
        }
        .book-card h5 {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .book-card p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 15px;
        }
        .book-card .btn {
            margin-top: 10px;
            font-size: 1.1rem;
            background-color: #ff7e5f;
            color: white;
            border-radius: 50px;
            padding: 10px 20px;
            border: none;
            transition: background-color 0.3s, transform 0.3s;
        }
        .book-card .btn:hover {
            background-color: #feb47b;
            transform: scale(1.05);
        }

        /* Floating Circles */
        .circle {
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            animation: float 6s infinite ease-in-out;
        }
        .circle.circle1 {
            top: 10%;
            left: 5%;
        }
        .circle.circle2 {
            bottom: 20%;
            right: 10%;
        }
        .circle.circle3 {
            bottom: 15%;
            left: 30%;
        }

        /* Keyframe Animations */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        /* Footer Styling */
        footer {
            background-color: #242424;
            color: white;
            padding: 20px;
            text-align: center;
        }
        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand d-flex align-items-center">
                <img src="logo.png" alt="Logo" width="55" class="me-2"> Pustaka Cendikia
            </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Pendaftaran_Anggota.php">Pendaftaran Anggota</a></li>
                            <li><a class="dropdown-item" href="Informasi.php">Informasi Layanan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Koleksi_Buku.php">Koleksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1>Koleksi Buku</h1>
        <p>Temukan berbagai koleksi buku yang dapat memperluas wawasan Anda.</p>
        <!-- Floating Circles -->
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>
    </div>

    <!-- Book Collection Section -->
    <div class="book-collection">
        <!-- Book Card 1 -->
        <div class="book-card">
            <img src="Pemrograman.jpg" alt="Book 1">
            <div class="card-body">
                <h5>Belajar Pemrograman</h5>
                <p>Pelajari dasar-dasar pemrograman untuk memulai karir di dunia teknologi.</p>
                <a href="#" class="btn">Lihat Buku</a>
            </div>
        </div>
        <!-- Book Card 2 -->
        <div class="book-card">
            <img src="Sejarah.jpeg" alt="Book 2">
            <div class="card-body">
                <h5>Sejarah Dunia</h5>
                <p>Pelajari sejarah dunia dari berbagai peradaban yang telah mengubah dunia.</p>
                <a href="#" class="btn">Lihat Buku</a>
            </div>
        </div>
        <!-- Book Card 3 -->
        <div class="book-card">
            <img src="Grafis.jpg" alt="Book 3">
            <div class="card-body">
                <h5>Teknik Desain Grafis</h5>
                <p>Pelajari dasar desain grafis untuk menciptakan karya visual yang menarik.</p>
                <a href="#" class="btn">Lihat Buku</a>
            </div>
        </div>
        <!-- More books can be added similarly -->
    </div>

    <!-- Footer -->
    <footer>
        <p>Alamat: Jl. Pendidikan No.123, Jakarta</p>
        <p>Contact: 021-123456</p>
        <p>Follow kami di Instagram @pustaka.cendikia</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
