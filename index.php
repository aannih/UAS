<?php
    require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Web</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>AanPrakasa.</a></div>
            <a href="#" class="tombol-menu">
    <span class="garis"></span>
    <span class="garis"></span>
    <span class="garis"></span>
    </a>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#courses">WEB Programming</a></li>
                    <li><a href="#tutors">Tokoh</a></li>
                    <li><a href="#partners">Tools</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="login.php" class="tbl-biru">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="https://img.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161"/>
            <div class="kolom">
                <p class="deskripsi">Apa itu Teknik Informatika?</p>
                <h2>Deskirpsi,Alasan harus di Teknik Informatika,Prospek Kerja</h2>
                <p>Teknik Informatika merupakan bidang ilmu yang mempelajari bagaimana menggunakan teknologi komputer secara optimal guna menangani masalah transformasi atau pengolahan data dengan proses logika. </p>
                <p><a href="https://campus.quipper.com/majors/id-teknik-informatika" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi">apa itu Web Programing?</p>
                <h2>Pengenalan web Programming </h2>
                <p>Pemrograman web diambil dari 2 suku kata yaitu pemrograman dan web. Pemrograman yang dalam bahasa English adalah programming dan diartikan proses, cara, perbuatan program.</p>
                <p>Definisi Web : jaringan komputer yang terdiri dari kumpulan situs internet yang menawarkan teks dan grafik dan suara dan sumber daya animasi melalui protokol transfer hypertext.</p>
                <p><a href="https://www.duniailkom.com/ingin-belajar-web-programming-harus-mulai-dari-mana/" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
            </div>
            <img src="https://img.freepik.com/free-vector/online-learning-isometric-concept_1284-17947.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161"/>
        </section>

        <!-- untuk tutors -->
        <section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Tokoh Programmer</p>
                    <h2>Dunia</h2>
                    <p>beberapa tokoh hebat pemrograman dan pencipta Java,Google,Python,dan PHP</p>
                </div>

                <div class="tutor-list">
                    <div class="kartu-tutor">
                        <img src="img2.png" /><br>
                        <a href="https://id.wikipedia.org/wiki/James_Gosling">James Gosling</a><br>
                    </div>
                    <div class="kartu-tutor">
                        <img src="img3.png"/><br>
                        <a href="https://id.wikipedia.org/wiki/Bill_Gates">Bill Gates</a>
                    </div>
                    <div class="kartu-tutor">
                        <img src="img4.png"/><br>
                        <a href="https://id.wikipedia.org/wiki/Guido_van_Rossum">Guido van Rossum</a>
                    </div>
                    <div class="kartu-tutor">
                        <img src="img5.png"/><br>
                        <a href="https://id.wikipedia.org/wiki/Rasmus_Lerdorf">Rasmus Lerdorf</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- untuk partners -->
        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Tools/Aplikasi</p>
                    <h2>Text Editor</h2>
                    <p>Digunakan Untuk memodifikasi Bermacam Coding.berikut adalah contoh aplikasi yang dapat memodifikasi text:</p>
                </div>

                <div class="partner-list">
                    <div class="kartu-partner">
                        <img src="img6.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="img7.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="img8.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="img9.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="img10.png"/>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Saya Anabela Aji Prakasa</p>
                    <p>saya belajar bahasa pemrograman</p>
                    <p>saya Mahsiswa di Universitas Ahmad Dahlan</p>
                    <p>Fakultas Teknologi Industri,Teknik Informatika.</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Gg.Giombong,Gombong,Kebumen,Jawa Tengah</p>
                    <p>Kode Pos: 54411</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <a href="https://www.youtube.com/channel/UCnb8taESFlnNiTL5jue_J9A" class="tbl-pink">You Tube</a><br><br><br>
                    <a href="https://www.instagram.com/aan.prakasa/" class="tbl-pink">Instagram</a><br><br><br>
                    <a href="https://web.facebook.com/aji.p.9469/" class="tbl-biru">Facebook</a><br>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2021. <b>Anabela Aji Prakasa.</b> All Rights Reserved.
        </div>
    </div>
    
</body>
</html>