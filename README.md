# 🎨 KEP — Personal Portfolio Website

> *"Creating Visual Stories That Speak."*

Sebuah website portofolio pribadi milik **Fikri Abiyyu Rahman** — seorang mahasiswa yang berfokus di bidang desain, fotografi, dan editing. Website ini dibangun menggunakan PHP, MySQL, HTML, CSS, dan Bootstrap 5 sebagai tugas Mini Project mata kuliah Pemrograman Berbasis Web (PBW).

---

## 📋 Deskripsi Singkat

**KEP Portfolio** adalah website portofolio **dinamis** berbasis PHP/MySQL yang menampilkan profil pribadi, keahlian (hard skill & soft skill), riwayat pendidikan dan pengalaman kerja, serta koleksi sertifikat yang dimiliki. Data ditampilkan secara dinamis dari database MySQL, sehingga konten dapat diperbarui tanpa mengubah kode. Desain menggunakan tema gelap (*dark mode*) dengan tipografi Poppins untuk kesan modern dan profesional.

---

## ✨ Fitur Utama

- **Navigasi Responsif** — Navbar sticky dengan efek collapse di perangkat mobile
- **Hero Section** — Tampilan pembuka yang bold dan impactful
- **About Me** — Foto diri, deskripsi, hard skill dengan progress bar animasi, dan soft skill
- **Progress Bar Animasi Dinamis** — Data keahlian per software diambil dari database (tabel `hard_skills`)
- **Soft Skill Dinamis** — Data pendidikan, pengalaman kerja, dan organisasi diambil dari database (tabel `soft_skills`)
- **Certificates Gallery** — Grid kartu sertifikat yang responsif
- **Fully Responsive** — Tampilan optimal di desktop, tablet, dan smartphone
- **Dark Theme** — Desain konsisten bernuansa gelap dan elegan

---

## 🖼️ Tampilan Setiap Section

### 1. Navbar
Navigasi tetap di bagian atas halaman dengan latar belakang hitam dan teks putih. Terdapat tombol *hamburger* untuk tampilan mobile.

```
[ KEP ]   Home   About Me   Certificates
```

> 📸 *Screenshot placeholder — Navbar Desktop & Mobile*
<img width="1919" height="71" alt="image" src="https://github.com/user-attachments/assets/e5e0117e-6764-48d5-b3db-b0584bb15fd5" />
<img width="474" height="59" alt="image" src="https://github.com/user-attachments/assets/7c684608-9b7e-40ee-9247-7efce4e824b3" />

---

### 2. Hero Section
Bagian pembuka dengan heading besar bertuliskan *"Creating Visual Stories That Speak."* dan subjudul yang menjelaskan identitas singkat pemilik portofolio.

> 📸 *Screenshot placeholder — Hero Section*
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/eee32fe8-fabe-486d-bdb5-fc049a9a2362" />

---

### 3. About Me Section
Terbagi menjadi beberapa sub-bagian:

- **Foto diri** dengan efek crop dan border elegan
- **Deskripsi pribadi** yang menjelaskan latar belakang dan passion
- **Hard Skill** — 6 kartu software (Illustrator, Photoshop, Premiere Pro, Affinity Studio, DaVinci Resolve, Figma) masing-masing dengan progress bar berwarna, **data diambil dari tabel `hard_skills`**
- **Soft Skill** — Riwayat pendidikan, pengalaman kerja, dan pengalaman organisasi, **data diambil dari tabel `soft_skills`**

> 📸 *Screenshot placeholder — About Me Section*
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/1abcaa6d-4c51-4315-a55a-c3ce735eb8dc" />

> 📸 *Screenshot placeholder — Hard Skill Cards & Soft Skill Panel*
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/330b5f4d-6635-4101-9849-14e8e5f650ef" />

---

### 4. Certificates Section
Galeri sertifikat dalam format grid (3 kolom di desktop, 2 di tablet, 1 di mobile) menggunakan Bootstrap Cards dengan gambar sertifikat, judul, dan penerbit sertifikat.

> 📸 *Screenshot placeholder — Certificates Section*
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/553dbec7-8c74-4d01-a124-442848224e5f" />

---

### 5. Footer
Footer sederhana berisi alamat email kontak (`kepvisual@gmail.com`) dengan garis pemisah di bagian atas.

---

## 🗄️ Struktur Database

### Tabel `hard_skills`

Menyimpan data keahlian software beserta persentase dan warna progress bar.

| Kolom | Tipe | Keterangan |
|---|---|---|
| `id` | INT AUTO_INCREMENT | Primary key |
| `nama_software` | VARCHAR(100) | Nama software |
| `icon_path` | VARCHAR(255) | Path ke file ikon |
| `persentase` | INT | Nilai progress bar (0–100) |
| `warna_bar` | VARCHAR(50) | Warna hex progress bar |

```sql
CREATE TABLE hard_skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_software VARCHAR(100) NOT NULL,
    icon_path VARCHAR(255) NOT NULL,
    persentase INT NOT NULL,
    warna_bar VARCHAR(50) NOT NULL
);
```

---

### Tabel `soft_skills`

Menyimpan data pendidikan, pengalaman kerja, dan pengalaman organisasi.

| Kolom | Tipe | Keterangan |
|---|---|---|
| `id` | INT AUTO_INCREMENT | Primary key |
| `kategori` | VARCHAR(50) | `Education`, `Work`, atau `Organizational` |
| `judul` | VARCHAR(150) | Nama posisi / gelar |
| `keterangan` | VARCHAR(255) | Instansi dan periode |

```sql
CREATE TABLE soft_skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kategori VARCHAR(50) NOT NULL,
    judul VARCHAR(150) NOT NULL,
    keterangan VARCHAR(255) NOT NULL
);
```

---

## 🧩 Penjelasan Kode Setiap Section

### 📁 Struktur Folder

```
MINPRO-PBW-1/
│
├── index.php                   # File utama (diubah dari .html ke .php)
├── koneksi.php                 # File koneksi ke database MySQL
├── style.css                   # File styling utama
│
├── photos/
│   └── DSCF3219.JPG            # Foto profil
│
└── assets/
    ├── icon/                   # Ikon software (PNG)
    │   ├── adobe-illustrator-icon.png
    │   ├── adobe-photoshop-icon.png
    │   ├── adobe-premiere-pro-icon.png
    │   ├── affinity-studio-icon.png
    │   ├── DaVinci_Resolve_Studio.png
    │   └── figma-icon.png
    │
    └── certificates/           # Gambar sertifikat
        ├── INFORSA.png
        ├── APLIKASI.jpg
        ├── Job Fair.png
        ├── KC 1.jpg
        ├── KC 2.jpg
        └── SC.png
```

---

### 📄 PHP — Koneksi Database (`koneksi.php`)

File ini bertugas menghubungkan PHP ke database MySQL dan di-include di `index.php`.

```php
<?php
$host     = "localhost";
$username = "root";
$password = "";
$database = "db_profile";

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
```

---

### 📄 PHP — Hard Skill (Progress Bar Dinamis)

Data hard skill diambil dari tabel `hard_skills` dan di-loop untuk menghasilkan kartu progress bar secara otomatis.

```php
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
```

---

### 📄 PHP — Soft Skill Dinamis

Data soft skill diambil dari tabel `soft_skills`, dikelompokkan berdasarkan kolom `kategori`, lalu ditampilkan per kategori menggunakan `foreach`.

```php
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
    <!-- Work & Organizational (pola sama) -->
    ...
</div>
```

---

### 📄 HTML — Navbar

Menggunakan komponen Navbar Bootstrap 5 dengan `sticky-top` agar tetap terlihat saat scroll.

```html
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: rgb(0, 0, 0);" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand poppins-bold" href="#">KEP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
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
```

---

### 📄 HTML — Certificate Cards

Sertifikat ditampilkan menggunakan komponen Card Bootstrap dalam sistem grid responsif.

```html
<div class="col-12 col-md-6 col-lg-4">
  <div class="card h-100">
    <img src="assets/certificates/INFORSA.png" class="card-img-top" alt="Sertifikat-INFORSA">
    <div class="card-body">
      <h5 class="card-title aliceblue poppins-semibold">Certificate of Organizational Management - INFORSA</h5>
      <p class="card-text poppins-medium" style="opacity: 0.4;">Information Systems Student Association (INFORSA)</p>
    </div>
  </div>
</div>
```

---

### 🎨 CSS — Variabel Warna & Tema

```css
:root {
  --color-orange: #FF9A00;        /* Adobe Illustrator */
  --color-blue: #2585ca;          /* Adobe Photoshop */
  --color-purple: #00005B;        /* Adobe Premiere Pro */
  --color-green: #5ea132;         /* Affinity Studio */
  --color-red: #ED3B43;           /* DaVinci Resolve */
  --color-orange-figma: #FF7237;  /* Figma */
}
```

> ℹ️ *Warna progress bar kini juga disimpan di kolom `warna_bar` pada tabel `hard_skills`, sehingga nilai hex di atas sudah di-insert ke database dan tidak lagi di-hardcode di HTML.*

---

## 🛠️ Teknologi yang Digunakan

| Teknologi | Versi | Keterangan |
|---|---|---|
| PHP | 8.x | Server-side scripting & koneksi database |
| MySQL | 8.x | Penyimpanan data dinamis |
| HTML5 | — | Struktur dan konten halaman |
| CSS3 | — | Styling kustom dan layout |
| Bootstrap | 5.3.8 | Framework CSS responsif |
| Google Fonts | — | Tipografi Poppins |

---

## 🚀 Cara Menjalankan Project

Project ini memerlukan **XAMPP** (atau server lokal sejenis) karena menggunakan PHP dan MySQL.

**Langkah-langkah:**

1. Install dan jalankan **XAMPP**, pastikan Apache dan MySQL aktif
2. Clone atau salin folder project ke dalam `C:/xampp/htdocs/`
3. Buka **phpMyAdmin** di `http://localhost/phpmyadmin`
4. Buat database baru bernama `db_profile`
5. Import atau jalankan SQL berikut untuk membuat tabel dan mengisi data awal:

```sql
-- Tabel hard_skills
CREATE TABLE hard_skills ( ... );
INSERT INTO hard_skills ... ;

-- Tabel soft_skills
CREATE TABLE soft_skills ( ... );
INSERT INTO soft_skills ... ;
```

6. Pastikan `koneksi.php` sudah sesuai (host, username, password, nama database)
7. Buka browser dan akses `http://localhost/MINPRO-PBW-1/`

> ⚠️ Jangan buka file `index.php` langsung dari File Explorer — PHP hanya berjalan melalui server (XAMPP).

---

## 📁 Struktur Folder

```
MINPRO-PBW-1/
│
├── index.php
├── koneksi.php
├── style.css
├── README.md
│
├── photos/
│   └── DSCF3219.JPG
│
└── assets/
    ├── icon/
    │   ├── adobe-illustrator-icon.png
    │   ├── adobe-photoshop-icon.png
    │   ├── adobe-premiere-pro-icon.png
    │   ├── affinity-studio-icon.png
    │   ├── DaVinci_Resolve_Studio.png
    │   └── figma-icon.png
    │
    └── certificates/
        ├── INFORSA.png
        ├── APLIKASI.jpg
        ├── Job Fair.png
        ├── KC 1.jpg
        ├── KC 2.jpg
        └── SC.png
```
