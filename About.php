<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Perpustakaan Sekolah</title>
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

        /* Jumbotron Styling for About */
        .jumbotron {
            background: linear-gradient(to bottom, rgba(42, 139, 242, 0.8), rgba(24, 90, 200, 0.9)), 
                        url('https://via.placeholder.com/1920x800?text=About+Us') no-repeat center center;
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
        
        /* Content Section Styling */
        .content {
            padding: 50px 20px;
            background-color: #f9f9f9;
        }
        .content h2 {
            font-size: 2.5rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 30px;
        }
        .content p {
            font-size: 1.2rem;
            line-height: 1.6;
            text-align: justify;
            color: #333;
        }
        .team {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 40px;
        }
        .team .member {
            text-align: center;
            margin: 20px;
        }
        .team .member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .team .member h4 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: 10px;
        }
        .team .member p {
            font-size: 1rem;
            color: #777;
        }

        /* Decorative Circles */
        .circle {
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            animation: float 6s infinite ease-in-out;
        }
        .circle.circle1 {
            top: 15%;
            left: 5%;
        }
        .circle.circle2 {
            bottom: 25%;
            right: 10%;
        }
        .circle.circle3 {
            bottom: 10%;
            left: 40%;
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
                        <a class="nav-link active" href="About.php">About</a>
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
        <h1>Tentang Kami</h1>
        <p>Perpustakaan Sekolah adalah tempat di mana pengetahuan bertumbuh dan imajinasi berkembang.</p>
        <!-- Floating Circles -->
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>
    </div>

    <!-- About Content Section -->
    <div class="content">
        <h2>Visi dan Misi Kami</h2>
        <p>Perpustakaan Sekolah memiliki visi untuk menyediakan akses informasi yang mudah, cepat, dan tepat untuk mendukung proses belajar mengajar di sekolah. Misi kami adalah untuk memfasilitasi siswa dan tenaga pendidik dengan koleksi buku yang berkualitas serta layanan yang memadai.</p>

        <h2>Tim Kami</h2>
        <div class="team">
            <div class="member">
                <img src="Member 1.jpg" alt="Team Member 1">
                <h4>Ir. Shyne Pattynama, S.E.</h4>
                <p>Manajer Perpustakaan</p>
            </div>
            <div class="member">
                <img src="Member 2.jpg" alt="Team Member 2">
                <h4>Drs. Mees Hilgers, S.Si.</h4>
                <p>Wakil Manajer Perpustakaan Layanan</p>
            </div>
            <div class="member">
                <img src="Member 3.jpg" alt="Team Member 3">
                <h4>Drs. Jay Idzes, S.H.</h4>
                <p>Koordinator Perpustakaan</p>
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
