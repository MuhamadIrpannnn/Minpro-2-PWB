

-- Tabel: profil (data utama profil)
CREATE TABLE IF NOT EXISTS profil (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    tagline VARCHAR(255),
    deskripsi TEXT,
    foto VARCHAR(255)
);

-- Tabel: pengalaman
CREATE TABLE IF NOT EXISTS pengalaman (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100) NOT NULL,
    tahun VARCHAR(10)
);

-- Tabel: skills
CREATE TABLE IF NOT EXISTS skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    persentase INT NOT NULL
);

-- Tabel: sertifikat
CREATE TABLE IF NOT EXISTS sertifikat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    icon VARCHAR(10),
    judul VARCHAR(100) NOT NULL,
    organisasi VARCHAR(150),
    tahun VARCHAR(10)
);

-- DATA AWAL (SEED)

INSERT INTO profil (nama, tagline, deskripsi, foto) VALUES (
    'Muhamad Irpan Santoso',
    'Masyarakat Sipil &nbsp;|&nbsp; Masyarakat Melawan &nbsp;|&nbsp; Hidup Mahasiswa',
    'Halo, saya Muhamad Irpan Santoso. Saya orangnya santai dan simpel, dan jujur aja saya suka banget tidur. Buat saya, rebahan itu healing paling gampang dan paling aman. Nggak ribet, nggak drama — hidup dijalani aja pelan-pelan sambil tetap enjoy.',
    'image.png'
);

INSERT INTO pengalaman (judul, tahun) VALUES
    ('Suka Tidur', '2024'),
    ('Suka Tidur', '2025'),
    ('Suka Tidur', NULL);

INSERT INTO skills (nama, persentase) VALUES
    ('Tidur', 90),
    ('Baring', 80),
    ('Memejamkan Mata', 70),
    ('Lelap', 65);

INSERT INTO sertifikat (icon, judul, organisasi, tahun) VALUES
    ('🏆', 'Sertifikat 1', 'Top 1 Pencinta Tidur', '2024'),
    ('🎖️', 'Sertifikat 2', 'The Best 3 Sleeping', '2024'),
    ('📜', 'Sertifikat 3', 'Penghargaan Tidur Nasional', '2025');
