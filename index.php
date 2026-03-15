<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>MINPRO-PBW-1</title>
</head>
<body>
<!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: rgb(0, 0, 0);" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand poppins-bold" href="#">KEP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav poppins-medium">
            <a class="nav-link" href="#Home">Home</a>
            <a class="nav-link" href="#Aboutme">About Me</a>
            <a class="nav-link" href="#certificates">Certificates</a>
        </div>
        </div>
    </div>
    </nav>

<!-- Home -->
<section id="Home" class="hero">
    <div class="container-fluid px-5">
        <h1 class="poppins-semibold">
            Creating Visual <br> Stories That Speak.</h1>
        <p class="poppins-medium" style="opacity: 0.2; padding-top: 24px;">
            I am a visual storyteller who turns complex problems into simple, <br> beautiful and easy to understand stories.
        </p>
    </div>
</section>

<!-- About Me -->
<section id="Aboutme" class="aboutMe">
    <div class="container-fluid px-5">
        <div class="row align-items-stretch g-5">
            <div class="col-12 col-lg-6">
                <div class="gambar-wrapper"> 
                    <img src="photos\DSCF3219.JPG" class="gambar">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <p class="poppins-medium" style="opacity: 0.2">
                    Hello there, i'am
                </p>
                <h2 class="poppins-bold">
                    Fikri Abiyyu Rahman
                </h2>
                <p class="poppins-medium"">
                    A student focused on design, photography, and editing. I believe that visuals are not just about aesthetics, but about conveying stories and emotions in a powerful and meaningful way.<br>
                    <br> I enjoy capturing moments through the lens, arranging them into strong compositions, and refining them through editing to bring the intended message to life.
                </p>
            </div>
            <!-- Hard Skill -->
            <div class="col-12 col-lg-6 d-flex flex-column">
                <h3 class="poppins-semibold hardSkill" style="padding-bottom: 12px;">
                    Hard Skill
                </h3>
                <?php
                include 'koneksi.php';
                $query = mysqli_query($koneksi, "SELECT * FROM hard_skills");
                ?>

                <div class="row g-3 flex-grow-1">
                    <?php while ($skill = mysqli_fetch_assoc($query)) : ?>
                    <div class="col-6 d-flex">
                        <div class="hard-skill">
                            <img src="<?= $skill['icon_path'] ?>" class="software-icon">
                            <p class="poppins-medium"><?= $skill['nama_software'] ?></p>
                            <div class="progress poppins-medium" role="progressbar"
                                aria-valuenow="<?= $skill['persentase'] ?>"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated"
                                    style="width: <?= $skill['persentase'] ?>%;
                                            background-color: <?= $skill['warna_bar'] ?>;">
                                    <?= $skill['persentase'] ?>%
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <!-- Soft Skll -->
            <div class="col-12 col-lg-6 d-lex flex-column">
                <h3 class="poppins-semibold softSkill" style='padding-bottom: 12px;'">
                    Soft Skill
                </h3>
                <?php
                $query_soft = mysqli_query($koneksi, "SELECT * FROM soft_skills ORDER BY kategori, id");
                $soft_skills = [];
                while ($row = mysqli_fetch_assoc($query_soft)) {
                    $soft_skills[$row['kategori']][] = $row;
                }
                ?>

                <div class="soft-skill">

                    <!-- Education -->
                    <div class="Education">
                        <h4 class="poppins-semibold" style="padding-bottom: 12px;">Education 🎓</h4>
                        <?php foreach ($soft_skills['Education'] as $item) : ?>
                            <div>
                                <p class="poppins-semibold mb-0"><?= $item['judul'] ?></p>
                                <p class="poppins-medium" style="opacity: 0.4;"><?= $item['keterangan'] ?></p>
                            </div>
                        <?php endforeach; ?>
                        <hr class="my-4">
                    </div>

                    <!-- Work Experience -->
                    <div class="Work">
                        <h4 class="poppins-semibold">Work Experience 💼</h4>
                        <?php foreach ($soft_skills['Work'] as $item) : ?>
                            <div>
                                <p class="poppins-semibold mb-0"><?= $item['judul'] ?></p>
                                <p class="poppins-medium" style="opacity: 0.4;"><?= $item['keterangan'] ?></p>
                            </div>
                        <?php endforeach; ?>
                        <hr class="my-4">
                    </div>

                    <!-- Organizational -->
                    <div class="Organizational">
                        <h4 class="poppins-semibold">Organizational Experience 🏢</h4>
                        <?php foreach ($soft_skills['Organizational'] as $item) : ?>
                            <div>
                                <p class="poppins-semibold mb-0"><?= $item['judul'] ?></p>
                                <p class="poppins-medium" style="opacity: 0.4;"><?= $item['keterangan'] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
                <div class="col-6">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- certificates -->
<section id="certificates" class="certificates">
    <div class="container-fluid px-5">
        <h3 class="aliceblue poppins-semibold" style="padding-bottom: 12px;">
            Certificates
        </h3>
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <img src="assets/certificates/INFORSA.png" class="card-img-top" alt="Sertifikat-INFORSA">
                    <div class="card-body">
                        <h5 class="card-title aliceblue poppins-semibold">Certificate of Organizational Management - INFORSA</h5>
                        <p class="card-text poppins-medium" style="opacity: 0.4;">Information Systems Student Association (INFORSA)</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <img src="assets/certificates/APLIKASI.jpg" class="card-img-top" alt="Sertifikat-APLIKASI">
                    <div class="card-body">
                        <h5 class="card-title aliceblue poppins-semibold">Certificate of Committee Service - APLIKASI</h5>
                        <p class="card-text poppins-medium" style="opacity: 0.4;">Akselerasi Pengenalan Lingkungan Kampus (APLIKASI)</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <img src="assets/certificates/Job Fair.png" class="card-img-top" alt="Sertifikat-JOBFAIR">
                    <div class="card-body">
                        <h5 class="card-title aliceblue poppins-semibold">Certificate of Committee Service - Job Fair Event</h5>
                        <p class="card-text poppins-medium" style="opacity: 0.4;">Unit Penunjang Akademik Pengembangan Karier Dan Kewirausahaan Universitas Mulawarman (UPA PERKASA)</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <img src="assets/certificates/KC 1.jpg" class="card-img-top" alt="Sertifikat-KC1">
                    <div class="card-body">
                        <h5 class="card-title aliceblue poppins-semibold">Certificate of Committee Service - Knowledge Center</h5>
                        <p class="card-text poppins-medium" style="opacity: 0.4;">Information Systems Student Association (INFORSA)</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <img src="assets/certificates/KC 2.jpg" class="card-img-top" alt="Sertifikat-KC2">
                    <div class="card-body">
                        <h5 class="card-title aliceblue poppins-semibold">Certificate of Committee Service - Knowledge Center</h5>
                        <p class="card-text poppins-medium" style="opacity: 0.4;">Information Systems Student Association (INFORSA)</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <img src="assets/certificates/SC.png" class="card-img-top" alt="Sertifikat-SC">
                    <div class="card-body">
                        <h5 class="card-title aliceblue poppins-semibold">Certificate of Participation - Study Club PKM</h5>
                        <p class="card-text poppins-medium" style="opacity: 0.4;">Program Kreativitas Mahasiswa (PKM)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bottom">
    <p class="gmail poppins-semibold">
        kepvisual@gmail.com
    </p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>