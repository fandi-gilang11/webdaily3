<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Daily Journal</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        html {
            scroll-behavior: smooth;
        }

        section {
            padding-top: 70px;
            padding-bottom: 40px;
        }
        
        .card {
            transition: all 0.2s ease-in-out;
        }

        .card:hover {
            opacity: 0.9;
            transform: translateY(-2px); 
            box-shadow: 0 4px 12px rgb(183, 5, 242);
        }
        
        .profile-list-icon {
            width: 20px;
            text-align: center;
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#mainNavbar">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand" href="#">My Daily Journal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#schedule">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profile">Profile</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <button class="btn btn-outline-light btn-sm" id="theme-toggle-button">
                            <i class="fa-solid fa-moon" id="theme-icon"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="schedule" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Jadwal Kuliah Dan Kegiatan Mahasiswa</h2>
            
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

                <div class="col">
                    <div class="card h-100 border-primary">
                        <div class="card-header text-primary border-primary fw-bold">Senin</div>
                        <div class="card-body">
                            <b>PENDIDIKAN KEWARGANEGARAAN</b>
                            <br>
                            N603A 2 SKS
                            <br>
                            12-30-14.10 Kulino
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-success">
                        <div class="card-header text-success border-success fw-bold">Selasa</div>
                        <div class="card-body">
                            <b>SISTEM OPERASI</b> 
                            <br>
                            A11.4306 3 SKS
                            <br>
                            07.00-09.30 H.5.7
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-danger">
                        <div class="card-header text-danger border-danger fw-bold">Rabu</div>
                        <div class="card-body">
                            <b>PROBABILITAS DAN STATISKA</b>
                            <br>
                            A11.4312 3 SKS
                            <br>
                            07.00-09.30 H.5.11
                            <br>
                            <b>PEMROGRAMAN BERBASIS WEB</b>
                            <br>
                            A11.4312 2 SKS
                            <br>
                            10.20-12.00 D.2.J
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-warning">
                        <div class="card-header text-warning border-warning fw-bold">Kamis</div>
                        <div class="card-body">
                            <b>KRIPTOGRAFI</b>
                            <br>
                            A11.4513 3 SKS
                            <br>
                            07.00-09.30 H.3.2
                            <br>
                            <b>LOGIKA INFORMATIKA</b>
                            <br>
                            A11.4308 3 SKS
                            <br>
                            09.30-12.00 H.4.6
                            <br>
                            <b>BASIS DATA</b>
                            <br>
                            A11.4303 4 SKS
                            <br>
                            14.10-15.00 H.5.8
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card h-100 border-info">
                        <div class="card-header text-info border-info fw-bold">Jumat</div>
                        <div class="card-body">
                            <b>BASIS DATA</b>
                            <br>
                            A11.4312 4 SKS
                            <br>
                            08.40-09.30 D.2.K
                            <br>
                            <b>REKAYASA PERANGKAT LUNAK</b>
                            <br>
                            A11.4309 3 SKS
                            <br>
                            12.30-15.00 H.3.8
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-secondary">
                        <div class="card-header text-secondary border-secondary fw-bold">Sabtu</div>
                        <div class="card-body">
                            <b>AKTIFITAS SAYA PAGI HARI</b>
                            <br>
                            Joging Long Run
                            <br>
                            <b>AKTIFITAS SAYA MALAM HARI</b>
                            <br>
                            Ngopi(nongkrong)
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-dark">
                        <div class="card-header border-dark fw-bold">Minggu</div>
                        <div class="card-body">
                            <p>ISTIRAHAT</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

   <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    <section id="gallery" class="text-center p-5 bg-danger-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <?php
                    $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
                    $hasil = $conn->query($sql);
                    $active = true;
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <div class="carousel-item <?= $active ? 'active' : '' ?>">
                            <img src="img/<?= $row["gambar"] ?>" class="d-block w-100" alt="...">
                        </div>
                    <?php
                        $active = false;
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section id="profile" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Profile Mahasiswa</h2>
            
            <div class="row g-4 align-items-center justify-content-center">
                <div class="col-md-4 text-center">
                    <img src="0.jpg" class="img-fluid rounded-circle shadow" alt="Profile Picture" style="max-width: 250px;">
                </div>

                <div class="col-md-7">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title text-center mb-2">Fandi Gilang Angkasa</h3>
                            <p class="card-text text-center text-muted mb-4">A11.2024.16007</p>

                            <ul class="list-group list-group-flush fs-5">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa-solid fa-graduation-cap text-primary profile-list-icon me-3"></i>
                                    Teknik Informatika
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa-solid fa-at text-primary profile-list-icon me-3"></i>
                                    gilang16007@mhs.dinus.ac.id
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa-solid fa-mobile-screen-button text-primary profile-list-icon me-3"></i>
                                    +62 812 3456 7890
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa-solid fa-location-dot text-primary profile-list-icon me-3"></i>
                                    Jl. Paramount Village No. 123, Semarang
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script>
        const htmlElement = document.documentElement;
        const toggleButton = document.getElementById('theme-toggle-button');
        const themeIcon = document.getElementById('theme-icon');

        toggleButton.addEventListener('click', () => {
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            
            if (currentTheme === 'dark') {
                htmlElement.setAttribute('data-bs-theme', 'light');
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            } else {
                htmlElement.setAttribute('data-bs-theme', 'dark');
                themeIcon.classList.remove('fa-moon'); 
                themeIcon.classList.add('fa-sun');   
            }
        });
    </script>
</body>
</html>