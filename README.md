# 🌐 Website Portfolio — Muhamad Irpan Santoso

Website portofolio pribadi yang dibuat menggunakan **PHP**, **MySQL**, **HTML**, dan **CSS**. Data ditampilkan secara dinamis dari database.

---

## 📁 Struktur File

```
Minpro/
├── index.php       → Halaman utama (dinamis dari database)
├── koneksi.php     → Konfigurasi koneksi ke database MySQL
├── style.css       → Styling tampilan website
├── database.sql    → Script pembuatan tabel dan data awal
└── image.png       → Foto profil
```

---

## 🗄️ Database

Nama database: `minpro2`

| Tabel | Isi |
|---|---|
| `profil` | Nama, tagline, deskripsi, foto |
| `pengalaman` | Daftar pengalaman |
| `skills` | Nama skill dan persentase |
| `sertifikat` | Icon, judul, organisasi, tahun |

---

## 🚀 Cara Menjalankan

1. Install **Laragon** dan jalankan **Start All**
2. Buat database `minpro2` di phpMyAdmin
3. Import file `database.sql` ke database `minpro2`
4. Taruh semua file di `C:\laragon\www\Minpro\`
5. Buka browser dan akses:
```
http://localhost/Minpro/
```

---

## 📸 Tampilan Setiap Section

| Section | Deskripsi |
|---|---|
| 🔝 Navbar | Navbar fixed dengan logo **UrMyMine** dan menu navigasi Home, About Me, Certificates. Tetap terlihat saat halaman di-scroll. |
| 🏠 Hero | Foto profil bulat, nama **Muhamad Irpan Santoso**, role, deskripsi singkat, dan dua tombol navigasi. |
| 👤 About Me | Deskripsi diri, daftar pengalaman, dan skill progress bar yang diambil dari database. |
| 🏆 Certificates | Tiga card sertifikat dalam layout grid dengan efek hover naik dan border emas. |
| 📄 Footer | Teks hak cipta di bagian bawah halaman. |

---

## 📋 Detail Setiap Section

### 1. Navbar
Menggunakan tag `nav` dengan `position: fixed` agar selalu tampil di atas saat scroll. Menu navigasi menggunakan `href` yang mengarah ke `id` masing-masing section.

### 2. Home (Hero Section)
Menggunakan tag `section` dengan `id="home"`. Foto profil diberi `border-radius: 50%` agar berbentuk lingkaran. Data nama, tagline, dan deskripsi diambil dari tabel `profil` di database menggunakan PHP.

### 3. About Me
Layout menggunakan CSS Grid dengan 2 kolom. Progress bar dibuat dari dua div bertumpuk. Data pengalaman diambil dari tabel `pengalaman` dan skills dari tabel `skills`. Skills yang ditampilkan:

| Skill | Persentase |
|---|---|
| Tidur | 90% |
| Baring | 80% |
| Memejamkan Mata | 70% |
| Lelap | 65% |

### 4. Certificates
Layout menggunakan CSS Grid `repeat(3, 1fr)`. Data diambil dari tabel `sertifikat` di database. Daftar sertifikat:

| Icon | Judul | Organisasi | Tahun |
|---|---|---|---|
| 🏆 | Sertifikat 1 | Top 1 Pencinta Tidur | 2024 |
| 🎖️ | Sertifikat 2 | The Best 3 Sleeping | 2024 |
| 📜 | Sertifikat 3 | Penghargaan Tidur Nasional | 2025 |

### 5. Footer
Menggunakan tag `footer` dengan `border-top` tipis berwarna emas sebagai pemisah.

---

## 💻 Penjelasan Code Setiap Section

### Navbar
Menggunakan tag `nav` dengan `position: fixed` agar selalu tampil di atas saat scroll. Menu navigasi menggunakan `href` yang mengarah ke `id` masing-masing section.

### Hero Section
Menggunakan tag `section` dengan `id="home"`. Foto profil diberi `border-radius: 50%` agar berbentuk lingkaran. Background menggunakan `linear-gradient` CSS. Data nama dan deskripsi diambil dari tabel `profil` di database menggunakan PHP.

### About Me Section
Layout menggunakan CSS Grid dengan 2 kolom agar deskripsi dan skills tampil berdampingan. Progress bar dibuat dari dua div bertumpuk, `skill-bar` sebagai latar dan `skill-fill` sebagai isian. Data pengalaman diambil dari tabel `pengalaman` dan skills dari tabel `skills` menggunakan PHP `foreach`.

### Certificates Section
Layout menggunakan CSS Grid `repeat(3, 1fr)`. Setiap card memiliki efek hover menggunakan CSS `transition` dan `transform: translateY` untuk animasi naik. Data diambil dari tabel `sertifikat` di database.

### Footer
Menggunakan tag `footer` dengan `border-top` tipis berwarna emas sebagai pemisah.

---

## 🎨 Palet Warna

| Elemen | Kode Warna |
|---|---|
| Background Utama | `#0d0d14` |
| Background Section | `#111119` |
| Background Card | `#141420` |
| Emas Aksen | `#c8a050` |
| Teks Utama | `#f0ece4` |
| Teks Abu | `#8a8678` |

---

## 📱 Responsif

- **768px ke bawah** — layout grid berubah menjadi 1 kolom
- **480px ke bawah** — ukuran font hero diperkecil

---

---

&copy; 2025 **Muhamad Irpan Santoso**
