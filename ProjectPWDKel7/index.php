<?php
session_start();

$slides = [

    [
        "img" => "img/styling.jpeg",
        "judul" => "Hair Styling",
        "desc" => "Tampil stylish dengan model rambut modern"
    ],

    [
        "img" => "img/coloring.jpeg",
        "judul" => "Hair Coloring",
        "desc" => "Warna rambut kekinian & keren"
    ],

    [
        "img" => "img/treatment.jpeg",
        "judul" => "Hair Treatment",
        "desc" => "Perawatan rambut sehat & kuat"
    ]

];
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Hair & Co.</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- ========================================
NAVBAR
======================================== -->

    <header>

        <div class="logo">
            Hair & Co.
        </div>

        <nav>

            <a href="index.php">HOME</a>

            <a href="detail.php">SERVICES</a>

            <a href="#about">ABOUT</a>

            <a href="#team">TEAM</a>

            <a href="#contact">CONTACT</a>

            <?php if (isset($_SESSION['nama'])) { ?>

                <span class="user-name">
                    <?php echo $_SESSION['nama']; ?>
                </span>

                <a href="logout.php" class="logout-btn">
                    LOGOUT
                </a>

            <?php } else { ?>

                <a href="login.php" class="logout-btn">
                    LOGIN
                </a>

            <?php } ?>

        </nav>

    </header>

    <!-- ========================================
HERO
======================================== -->

    <section class="hero">

        <h1>
            Hair & Co. WHERE STYLE<br>
            MEETS CONFIDENCE.
        </h1>

        <p>
            Hair & Co. adalah tempat terbaik untuk gaya rambut modern pria.
            Relax, stylish, dan tingkatkan kepercayaan dirimu.
        </p>

        <div class="hero-buttons">

            <a href="booking.php">

                <button class="booking-btn">
                    BOOK AN APPOINTMENT
                </button>

            </a>

            <a href="data_booking.php">

                <button class="data-btn">
                    DATA BOOKING
                </button>

            </a>

        </div>

    </section>

    <!-- ========================================
HIGHLIGHT
======================================== -->

    <section class="highlight">

        <div class="text">

            <h2>
                LAYANAN<br>PREMIUM
            </h2>

            <p>
                Berbagai layanan terbaik untuk penampilan maksimal.
            </p>

            <a href="detail.php" class="link">
                Selengkapnya
            </a>

        </div>

        <!-- SLIDER -->
        <div class="slider-wrapper">

            <!-- BUTTON KIRI -->
            <button class="slide-btn" onclick="prevSlide()">
                ❮
            </button>

            <!-- BOX -->
            <div class="slider-box">

                <img id="slide-img" src="img/styling.jpeg" alt="">

                <div class="slide-text">

                    <h3 id="slide-title">
                        Hair Styling
                    </h3>

                    <p id="slide-desc">
                        Tampil stylish dengan model rambut modern
                    </p>

                </div>

            </div>

            <!-- BUTTON KANAN -->
            <button class="slide-btn" onclick="nextSlide()">
                ❯
            </button>

        </div>

    </section>

    <!-- ========================================
ABOUT
======================================== -->

    <section class="about" id="about">

        <div class="about-container">

            <div class="about-image">

                <img src="img/about.us.jpeg" alt="About Us">

            </div>

            <div class="about-text">

                <span>
                    ABOUT US
                </span>

                <h2>
                    Hair & Co<br>
                    Classic Modern Barbershop
                </h2>

                <p>
                    Hair & Co adalah barbershop modern dengan sentuhan klasik
                    yang menghadirkan pengalaman grooming premium untuk pria masa kini
                </p>

                <p>
                    Kami percaya bahwa penampilan bukan hanya tentang gaya rambut
                    tetapi juga tentang kepercayaan diri karakter dan kenyamanan
                </p>

                <p>
                    Dengan barber profesional pelayanan berkualitas dan suasana elegan
                    Hair & Co siap memberikan pengalaman terbaik untuk setiap pelanggan
                </p>

                <div class="about-info">

                    <div class="about-box">

                        <h3>5+</h3>

                        <p>
                            Tahun Pengalaman
                        </p>

                    </div>

                    <div class="about-box">

                        <h3>1000+</h3>

                        <p>
                            Pelanggan Puas
                        </p>

                    </div>

                    <div class="about-box">

                        <h3>Premium</h3>

                        <p>
                            Quality Service
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ========================================
TEAM
======================================== -->

    <section class="team" id="team">

        <p class="section-subtitle">
            OUR BARBER
        </p>

        <h2>
            Professional Capster
        </h2>

        <p class="team-desc">
            Tim barber profesional Hair & Co siap memberikan pelayanan terbaik
            dengan gaya modern dan elegan
        </p>

        <div class="team-container">

            <div class="team-box">

                <img src="img/capster1.jpeg">

                <h3>
                    Adrian Fernando
                </h3>

                <p>
                    Classic Hair Specialist
                </p>

            </div>

            <div class="team-box">

                <img src="img/capster2.jpeg">

                <h3>
                    Kevin Mahendra
                </h3>

                <p>
                    Modern Style Barber
                </p>

            </div>

            <div class="team-box">

                <img src="img/capster3.png">

                <h3>
                    Rizky Alvaro
                </h3>

                <p>
                    Hair Treatment Expert
                </p>

            </div>

        </div>

    </section>

    <!-- ========================================
CONTACT
======================================== -->

    <section class="contact" id="contact">

        <h2>
            CONTACT US
        </h2>

        <div class="contact-container">

            <div class="contact-box">

                <h3>
                    Phone
                </h3>

                <p>
                    0812 3456 7890
                </p>

            </div>

            <div class="contact-box">

                <h3>
                    Email
                </h3>

                <p>
                    hairandco@gmail.com
                </p>

            </div>

            <div class="contact-box">

                <h3>
                    Location
                </h3>

                <p>
                    Depok, Yogyakarta
                </p>

            </div>

        </div>

    </section>

    <!-- ========================================
SLIDER SCRIPT
======================================== -->

    <script>

        const slides = [

            {
                img: "img/styling.jpeg",
                judul: "Hair Styling",
                desc: "Tampil stylish dengan model rambut modern"
            },

            {
                img: "img/coloring.jpeg",
                judul: "Hair Coloring",
                desc: "Warna rambut kekinian & keren"
            },

            {
                img: "img/treatment.jpeg",
                judul: "Hair Treatment",
                desc: "Perawatan rambut sehat & kuat"
            }

        ];

        let current = 0;

        const img = document.getElementById("slide-img");
        const title = document.getElementById("slide-title");
        const desc = document.getElementById("slide-desc");

        function showSlide(index) {

            img.style.opacity = "0";
            title.style.opacity = "0";
            desc.style.opacity = "0";

            setTimeout(() => {

                img.src = slides[index].img;
                title.innerText = slides[index].judul;
                desc.innerText = slides[index].desc;

                img.style.opacity = "1";
                title.style.opacity = "1";
                desc.style.opacity = "1";

            }, 300);
        }

        function nextSlide() {

            current++;

            if (current >= slides.length) {
                current = 0;
            }

            showSlide(current);
        }

        function prevSlide() {

            current--;

            if (current < 0) {
                current = slides.length - 1;
            }

            showSlide(current);
        }

    </script>

</body>

</html>