<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Anggota - Perpustakaan Sekolah</title>
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

        /* Jumbotron Styling for Pendaftaran Anggota */
        .jumbotron {
            background: linear-gradient(to bottom, rgba(42, 139, 242, 0.8), rgba(24, 90, 200, 0.9)), 
                        url('https://via.placeholder.com/1920x800?text=Member+Registration') no-repeat center center;
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

        /* Form Styling */
        .registration-form {
            max-width: 800px;
            margin: 50px auto;
            background-color: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .registration-form h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 8px;
            padding: 10px;
            font-size: 1.1rem;
        }
        .form-check-label {
            font-size: 1.1rem;
        }
        .btn-submit {
            background-color: #ff7e5f;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            font-size: 1.2rem;
            border: none;
            width: 100%;
            transition: background-color 0.3s;
        }
        .btn-submit:hover {
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
        <h1>Pendaftaran Anggota</h1>
        <p>Daftar sekarang untuk menjadi anggota Pustaka Cendikia dan nikmati berbagai fasilitas buku dan layanan kami.</p>
        <!-- Floating Circles -->
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>
    </div>

    <!-- Registration Form -->
    <div class="registration-form">
        <h2>Isi Formulir Pendaftaran</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms" required>
                <label class="form-check-label" for="terms">
                    Saya setuju dengan <a href="#">syarat dan ketentuan</a>.
                </label>
            </div>
            <button type="submit" class="btn-submit">Daftar Sekarang</button>
        </form>
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
