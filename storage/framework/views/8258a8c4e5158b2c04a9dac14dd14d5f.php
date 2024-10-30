<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio Soekarno</title>

    <style>
        * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4; /* Warna latar belakang */
    color: #333; /* Warna teks */
}




.navbar {
    text-align: center;
    background-color: #0f0f0f;

}

.navbar ul {
    list-style-type: none;
    background-color: rgb(7, 7, 7);
    overflow: hidden;
    position: fixed;
    width: 100%;

}

.navbar li {
    display: inline; /* Menampilkan item dalam satu baris */
    margin: 0 15px;/*  Jarak antar item */
}

.navbar a {
    color: white; /* Warna teks link */
    text-decoration: none; /* Menghilangkan garis bawah pada link */
    font-size: 1.2rem; /* Ukuran font link */
    transition: color 0.3s; /* Transisi saat hover */
}

.navbar a:hover {
    color: #ffffff; /* Warna saat hover */
}

main {
    padding: 40px; /* Padding untuk ruang di dalam konten */
}

.intro {
    display: flex; /* Menggunakan flexbox untuk tata letak */
    align-items: center; /* Menyelaraskan item di tengah secara vertikal */
    justify-content: center; /* Menyelaraskan item di tengah secara horizontal */
    flex-wrap: wrap; /* Membungkus jika diperlukan */
    margin-bottom: 40px; /* Jarak bawah dari intro */
}

.description {
    max-width: 600px; /* Lebar maksimum untuk deskripsi */
    margin-right: 20px; /* Jarak kanan antara deskripsi dan gambar */
}

.description h2 {
    font-size: 2.5rem; /* Ukuran font untuk judul */
    margin-bottom: 15px; /* Jarak bawah judul */
}

.photo img {
    max-width: 300px; /* Ukuran maksimum gambar */
    border-radius: 8px; /* Sudut melengkung pada gambar */
}

.section {
    background-color: white; /* Warna latar belakang putih untuk setiap section */
    padding: 40px; /* Padding untuk ruang di dalam section */
    margin: 20px 0; /* Margin atas dan bawah untuk jarak antar section */
    border-radius: 8px; /* Sudut melengkung pada section */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
    text-align: center; /* Tengah teks */
}

.section h2 {
    font-size: 2.5rem; /* Ukuran font untuk judul section */
    margin-bottom: 20px; /* Jarak bawah judul section */
}

.project {
    display: flex; /* Menggunakan flexbox untuk tata letak */
    justify-content: space-around; /* Menyebar item secara merata */
    flex-wrap: wrap; /* Membungkus jika diperlukan */
}

.project > div {
    background-color: #e2e2e2; /* Latar belakang untuk setiap proyek */
    border-radius: 8px; /* Sudut melengkung */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
    padding: 20px; /* Ruang dalam setiap proyek */
    margin: 10px; /* Jarak antar proyek */
    flex: 1; /* Membuat setiap proyek fleksibel */
    min-width: 250px; /* Lebar minimum proyek */
    max-width: 300px; /* Lebar maksimum proyek */
}

.project img {
    max-width: 100%; /* Memastikan gambar responsif */
    border-radius: 8px; /* Sudut melengkung pada gambar */
    margin: 15px 0; /* Jarak atas dan bawah untuk gambar */
}

.project h3 {
    font-size: 1.5rem; /* Ukuran font untuk judul proyek */
    margin-bottom: 15px; /* Jarak bawah judul proyek */
}

.footer {
    background-color: #333; /* Warna latar belakang footer */
    color: white; /* Warna teks footer */
    text-align: center;
    padding: 15px 0; /* Padding atas dan bawah */
    position: relative;
    width: 100%; /* Memastikan footer memenuhi lebar halaman */
}

    </style>
</head>
<body>

    <header>
        <div class="navbar">
            <ul>
                <li><a href="#index">Beranda</a></li>
                <li><a href="#tentang">Tentang Saya</a></li>
                <li><a href="#proyek">Proyek</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
        </div>
    </header>

    <main>
        <section class="content" id="index">
            <div class="intro">
                <div class="description">
                    <h2>Hallo, Saya Soekarno</h2>
                    <p>Saya lahir pada 6 Juni 1901 di Blitar, Jawa Timur. Sebagai Presiden pertama Indonesia, saya memperjuangkan kemerdekaan dan meletakkan dasar negara ini.</p>
                </div>
                <div class="photo">
                    <img src="image/sukarno.jpg" alt="Foto Soekarno">
                </div>
            </div>
        </section>

        <section class="section" id="tentang">
            <h2>TENTANG SAYA</h2>
            <p>Saya berasal dari keluarga Jawa keturunan bangsawan. Meskipun memiliki latar belakang yang cukup beruntung, saya tumbuh dengan semangat nasionalisme yang kuat. Saya belajar di berbagai sekolah di Jawa, termasuk HBS di Surabaya, di mana saya terpapar pemikiran politik dan nasionalisme.</p>
        </section>

        <section class="section" id="proyek">
            <h2>PROYEK</h2>
            <div class="project">
                <div>
                    <h3>Proklamasi Kemerdekaan</h3>
                    <img src="image/1.jpg" alt="Proklamasi Kemerdekaan">
                    <p>Pada 17 Agustus 1945, saya memproklamirkan kemerdekaan Indonesia. Momen bersejarah ini menjadi tonggak awal bagi bangsa Indonesia untuk berdiri sebagai negara yang merdeka.</p>
                </div>
                <div>
                    <h3>Pembangunan Nasional</h3>
                    <img src="image/2.jpg" alt="Pembangunan Nasional">
                    <p>Saya memimpin berbagai program pembangunan untuk memajukan infrastruktur dan ekonomi negara, termasuk pembangunan jalan, sekolah, dan fasilitas kesehatan.</p>
                </div>
                <div>
                    <h3>Hubungan Internasional</h3>
                    <img src="image/3.jpeg" alt="Hubungan Internasional">
                    <p>Membangun hubungan diplomatik dengan berbagai negara untuk memperkuat posisi Indonesia di kancah internasional dan menggalang kerjasama dalam berbagai bidang.</p>
                </div>
            </div>
        </section>

        <section class="section" id="kontak">
            <h2>KONTAK</h2>
            <p>Email: soekarno@example.com</p>
            <p>Telepon: 123-456-7890</p>
        </section>
    </main>

    <footer class="footer">
        &copy; 2024 Portofolio Soekarno
    </footer>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\belajar\resources\views/index.blade.php ENDPATH**/ ?>