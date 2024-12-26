<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Layanan - Perpustakaan Sekolah</title>
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

        /* Jumbotron Styling for Informasi Layanan */
        .jumbotron {
            background: linear-gradient(to bottom, rgba(42, 139, 242, 0.8), rgba(24, 90, 200, 0.9)), 
                        url('https://via.placeholder.com/1920x800?text=Library+Services') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .jumbotron h1 {
            font-size: 4rem;
            font-weight: 700;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: slideInLeft 2s ease-out;
        }
        .jumbotron p {
            font-size: 1.5rem;
            margin-top: 20px;
            animation: fadeInUp 2s;
        }

        /* Informasi Section */
        .informasi-section {
            padding: 60px 20px;
        }
        .informasi-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 30px;
        }
        .informasi-section .info-card {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        .info-card .info-text {
            width: 70%;
        }
        .info-card .info-image img {
            width: 200px;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }
        .info-card h4 {
            font-size: 1.7rem;
            font-weight: 600;
        }
        .info-card p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.6;
        }
        .info-card .btn {
            margin-top: 20px;
            background-color: #ff7e5f;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 1.1rem;
            transition: background-color 0.3s;
        }
        .info-card .btn:hover {
            background-color: #feb47b;
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
                        <a class="nav-link" href="Koleksi_Buku.php">Koleksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1>Informasi Layanan</h1>
        <p>Ketahui lebih lanjut tentang layanan yang kami tawarkan di Pustaka Cendikia.</p>
        <!-- Floating Circles -->
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>
    </div>

    <!-- Informasi Section -->
    <div class="informasi-section">
        <h2>Layanan Kami</h2>

        <!-- Informasi Card 1 -->
        <div class="info-card">
            <div class="info-text">
                <h4>Pendaftaran Anggota</h4>
                <p>Untuk menjadi anggota perpustakaan, Anda dapat melakukan pendaftaran secara online melalui website ini. Cukup isi formulir pendaftaran dan Anda akan mendapatkan ID anggota yang dapat digunakan untuk meminjam buku.</p>
                <a href="Pendaftaran_Anggota.php" class="btn">Daftar Sekarang</a>
            </div>
            <div class="info-image">
                <img src="https://via.placeholder.com/200" alt="Pendaftaran Anggota">
            </div>
        </div>

        <!-- Informasi Card 2 -->
        <div class="info-card">
            <div class="info-text">
                <h4>Proses Peminjaman Buku</h4>
                <p>Setelah menjadi anggota, Anda dapat meminjam buku selama 14 hari. Jika Anda membutuhkan waktu lebih, Anda bisa memperpanjang peminjaman secara online.</p>
                <a href="Peminjaman_Buku.php" class="btn">Pelajari Lebih Lanjut</a>
            </div>
            <div class="info-image">
                <img src="https://via.placeholder.com/200" alt="Peminjaman Buku">
            </div>
        </div>

        <!-- Informasi Card 3 -->
        <div class="info-card">
            <div class="info-text">
                <h4>Keuntungan Menjadi Anggota</h4>
                <p>Sebagai anggota perpustakaan, Anda akan mendapatkan akses penuh ke berbagai koleksi buku, serta bisa mengikuti berbagai seminar dan kegiatan literasi yang kami selenggarakan secara gratis.</p>
                <a href="Keuntungan_Anggota.php" class="btn">Bergabung Sekarang</a>
            </div>
            <div class="info-image">
                <img src="https://via.placeholder.com/200" alt="Keuntungan Anggota">
            </div>
        </div>

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
