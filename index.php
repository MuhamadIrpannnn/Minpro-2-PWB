<?php
// index.php — Halaman utama portofolio (dinamis dari database)
require_once 'koneksi.php';

// ── Ambil data profil ──────────────────────────────────────────
$profil = $conn->query("SELECT * FROM profil LIMIT 1")->fetch_assoc();

// ── Ambil data pengalaman ──────────────────────────────────────
$pengalaman_result = $conn->query("SELECT * FROM pengalaman ORDER BY id ASC");

// ── Ambil data skills ──────────────────────────────────────────
$skills_result = $conn->query("SELECT * FROM skills ORDER BY persentase DESC");

// ── Ambil data sertifikat ──────────────────────────────────────
$sertifikat_result = $conn->query("SELECT * FROM sertifikat ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio - <?= htmlspecialchars($profil['nama']) ?></title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar">
    <div class="nav-logo">UrMyMine</div>
    <ul class="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About Me</a></li>
      <li><a href="#certificates">Certificates</a></li>
    </ul>
  </nav>

  <!-- HOME / HERO SECTION -->
  <section id="home" class="hero">
    <div class="hero-content">
      <img
        src="<?= htmlspecialchars($profil['foto']) ?>"
        alt="Foto Profil"
        class="profile-img"
      />
      <h1>halooo, Saya <span><?= htmlspecialchars($profil['nama']) ?></span></h1>
      <p class="hero-role"><?= $profil['tagline'] /* tagline boleh mengandung &nbsp; jadi tidak di-escape */ ?></p>
      <p class="hero-desc">
        <?= htmlspecialchars($profil['deskripsi']) ?>
      </p>
      <div class="hero-btns">
        <a href="#about" class="btn btn-primary">Tentang Saya</a>
        <a href="#certificates" class="btn btn-outline">Lihat Sertifikat</a>
      </div>
    </div>
  </section>

  <!-- ABOUT ME SECTION -->
  <section id="about" class="about">
    <div class="container">
      <h2 class="section-title">About Me</h2>
      <div class="section-line"></div>

      <div class="about-grid">

        <!-- Deskripsi diri -->
        <div class="about-text">
          <p>
            Halo! Saya adalah seorang mahasiswa yang suka tidur
          </p>
          <p>
            Saat ini saya hanya tidur dan tidur
          </p>

          <h3 class="sub-title">Pengalaman</h3>
          <ul class="exp-list">
            <?php while ($exp = $pengalaman_result->fetch_assoc()): ?>
              <li>
                <?= htmlspecialchars($exp['judul']) ?>
                <?= $exp['tahun'] ? ' (' . htmlspecialchars($exp['tahun']) . ')' : '' ?>
              </li>
            <?php endwhile; ?>
          </ul>
        </div>

        <!-- Skills -->
        <div class="skills">
          <h3 class="sub-title">Skills</h3>

          <?php while ($skill = $skills_result->fetch_assoc()): ?>
            <div class="skill-item">
              <div class="skill-info">
                <span><?= htmlspecialchars($skill['nama']) ?></span>
                <span><?= (int)$skill['persentase'] ?>%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-fill" style="width: <?= (int)$skill['persentase'] ?>%;"></div>
              </div>
            </div>
          <?php endwhile; ?>

        </div>
      </div>
    </div>
  </section>

  <!-- CERTIFICATES SECTION -->
  <section id="certificates" class="certificates">
    <div class="container">
      <h2 class="section-title">Certificates</h2>
      <div class="section-line"></div>

      <div class="cert-grid">

        <?php while ($cert = $sertifikat_result->fetch_assoc()): ?>
          <div class="cert-card">
            <div class="cert-icon"><?= htmlspecialchars($cert['icon']) ?></div>
            <h3><?= htmlspecialchars($cert['judul']) ?></h3>
            <p class="cert-org"><?= htmlspecialchars($cert['organisasi']) ?></p>
            <p class="cert-year"><?= htmlspecialchars($cert['tahun']) ?></p>
          </div>
        <?php endwhile; ?>

      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2025 <strong>Saya Irpan, Kamu Siapa?</strong>. All rights reserved.</p>
  </footer>

</body>
</html>

<?php $conn->close(); ?>