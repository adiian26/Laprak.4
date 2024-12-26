<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Sekolah</title>
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

        /* Jumbotron Styling */
        .jumbotron {
            background: linear-gradient(to bottom, rgba(42, 139, 242, 0.8), rgba(24, 90, 200, 0.9)), 
                        url('https://via.placeholder.com/1920x800?text=Welcome+Library') no-repeat center center;
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
        .jumbotron .btn {
            margin-top: 30px;
            font-size: 1.2rem;
            padding: 10px 30px;
            background: #ff7e5f;
            border: none;
            color: white;
            border-radius: 50px;
            transition: 0.3s;
        }
        .jumbotron .btn:hover {
            background: #feb47b;
            transform: scale(1.1);
        }

        /* Decorative Elements */
        .circle {
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            animation: float 6s infinite ease-in-out;
        }
        .circle.circle1 {
            top: 20%;
            left: 10%;
        }
        .circle.circle2 {
            bottom: 30%;
            right: 15%;
        }
        .circle.circle3 {
            bottom: 10%;
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
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Pendaftaran_Anggota.php">Pendaftaran Anggota</a></li>
                            <li><a class="dropdown-item" href="#informasi">Informasi Layanan</a></li>
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
        <!-- Decorative Elements -->
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>
        
        <h1>Selamat Datang di Perpustakaan Sekolah</h1>
        <p>Jelajahi dunia penuh ilmu, inspirasi, dan imajinasi. Buku adalah jendela dunia!</p>
        <a href="Koleksi_Buku.php" class="btn">Jelajahi Koleksi</a>
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
