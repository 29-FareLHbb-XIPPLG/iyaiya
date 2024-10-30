<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio Saya</title>
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
}

.navbar {
    background: #333;
    color: #fff;
    padding: 15px 0;
}

.navbar ul {
    list-style: none;
    text-align: center;
}

.navbar ul li {
    display: inline;
    margin: 0 15px;
}

.navbar ul li a {
    color: #fff;
    text-decoration: none;
}

.navbar ul li a:hover {
    text-decoration: underline;
}

.content {
    padding: 20px;
}

.intro {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.description {
    flex: 1;
    padding-right: 20px;
}

.photo img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

.section {
    margin: 20px 0;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.section h2 {
    margin-bottom: 15px;
}

.project {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.project div {
    flex: 1 1 30%; /* 3 kolom */
    margin: 10px;
    background: #e9e9e9;
    padding: 10px;
    border-radius: 5px;
    max-width: 50%;
}

.project img {
    max-width: 50%;
    height: auto;
    border-radius: 5px;
}

.footer {
    text-align: center;
    padding: 15px;
    background: #333;
    color: #fff;
    position: relative;
    bottom: 0;
    width: 100%;
}

svg {
    display: block;
    margin: 0 auto;
}

    </style>
</head>
<body>

    <div class="navbar">
        <ul>
            <li><a href="#Beranda">Beranda</a></li>
            <li><a href="#Tentang saya">Tentang saya</a></li>
            <li>about</li>
            <li>Contact</li>
        </ul>
    </div>

    <div class="content" id="Beranda">
        <div class="intro">
            <div class="description">
                <h2>Hallo Saya SOEKARNO</h2>
                <p>Selamat datang di portofolio saya! Saya adalah seorang Presiden pertama indonesia orang pertama yang mencetuskan konsep Pancasila sebagai dasar negara Indonesia. Saya dikenal sebagai Bapak Proklamator Republik Indonesia dan Presiden Pertama Negara Kesatuan Republik Indonesia periode 1945—1967</p>
            </div>
            <div class="photo">
                <img src="image/sukarno.jpg" alt="Foto Saya">
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,288L26.7,282.7C53.3,277,107,267,160,261.3C213.3,256,267,256,320,250.7C373.3,245,427,235,480,224C533.3,213,587,203,640,176C693.3,149,747,107,800,90.7C853.3,75,907,85,960,96C1013.3,107,1067,117,1120,138.7C1173.3,160,1227,192,1280,186.7C1333.3,181,1387,139,1413,117.3L1440,96L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,32L26.7,32C53.3,32,107,32,160,26.7C213.3,21,267,11,320,42.7C373.3,75,427,149,480,154.7C533.3,160,587,96,640,96C693.3,96,747,160,800,170.7C853.3,181,907,139,960,144C1013.3,149,1067,203,1120,229.3C1173.3,256,1227,256,1280,245.3C1333.3,235,1387,213,1413,202.7L1440,192L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>
    <div class="section" id="projects">
        <h2  id="Tentang saya">TENTANG SAYA</h2>
        <div class="project">
            <div>
                <h3>Saya Adalah Presiden Pertama Indonesia</h3>
                <img src="image/1.jpg" alt="Foto Saya">
                <p>Deskripsi singkat tentang proyek ini.</p>
            </div>
            <div>
                <h3>Proyek 2</h3>
                <p>Deskripsi singkat tentang proyek ini.</p>
            </div>
            <div>
                <h3>Proyek 3</h3>
                <p>Deskripsi singkat tentang proyek ini.</p>
            </div>
        </div>
    </div>

    <div class="section" id="contact">
        <h2>Kontak</h2>
        <p>Email: contoh@example.com</p>
        <p>Telepon: 123-456-7890</p>
    </div>
</div>

<div class="footer">
    &copy; 2024 Portofolio Saya
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\belajar\resources\views/tampilan.blade.php ENDPATH**/ ?>