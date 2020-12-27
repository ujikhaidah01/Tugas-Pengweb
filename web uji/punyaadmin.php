<?php
Session_start();
if (isset($_SESSION["ses_email"])==""){
    header ("location: TAlogin");
}
else{
    $data_email= $_SESSION["ses_email"];
    $data_username= $_SESSION["ses_username"];
    $data_instansi = $_SESSION["ses_instansi"];
    $data_telepon = $_SESSION["ses_telepon"];
    $data_pass = $_SESSION["ses_pass"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bank Information APP</title>

    <!-- load CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" />
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="slick/slick.css" />
    <link rel="stylesheet" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/tooplate-style.css" />
    <!-- Templatemo style -->
</head>

<body>
    <!-- Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <div class="tm-main-container">
        <div class="tm-top-container">
            <!-- Menu -->
            <nav id="tmNav" class="tm-nav">
                <a class="tm-navbar-menu" href="#">Menu</a>
                <ul class="tm-nav-links">
                    <li class="tm-nav-item active">
                        <a href="#" data-linkid="0" data-align="right" class="tm-nav-link">About</a>
                    </li>
                    <li class="tm-nav-item">
                        <a href="#" data-linkid="1" data-align="right" class="tm-nav-link">Pilihan</a>
                    </li>
                    <li class="tm-nav-item">
                        <a href="tambahpostingan.html" button type=submit class="tm-nav-link external">Tambah</a>
                    </li>
                    <li class="tm-nav-item">
                        <a href="index.html" button type=submit class="tm-nav-link external">Keluar</a>
                    </li>
                </ul>
            </nav>

            <!-- Site header -->
            <header class="tm-site-header-box tm-bg-dark">
                <p class="mb-0 tm-site-subtitle">Selamat Datang Sebagai ADMIN</p>
                <br>
                <h1 class="tm-site-title">Bank Information APP</h1>

            </header>
        </div>
        <!-- tm-top-container -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Site content -->
                    <div class="tm-content">
                        <!-- Section 0 Introduction -->
                        <section class="tm-section tm-section-0">
                            <h2 class="tm-section-title mb-3 font-weight-bold">
                                About
                            </h2>
                            <div class="tm-textbox tm-bg-dark">
                                <p>
                                    Website ini dibuat guna menjadi pusat layanan informasi baik untuk perlombaan,
                                    beasiswa ataupun seminar yang akan dilaksanakan. </p>
                                <p class="mb-0">
                                    Bank information adalah sebuah website yang berisikan informasi-informasi mengenai
                                    beasiwa, seminar dan berbagai perlombaan yang dibuat khusus untuk menampung semua
                                    informasi tersebut guna memudahkan dalam hal mencari informasi, baik dari kalangan
                                    siswa,
                                    mahasiswa ataupun umum. Bank information ini akan berisikan deskripsi secara lengkap
                                    dan link tertera mengenai beasiwa, seminar dan berbagai perlombaan yang diadakan
                                    oleh swasta maupun pemerintahan. </p>
                                </p>
                            </div>
                        </section>

                        <!-- Section 1 About Me -->


                        <section class="tm-section tm-section-1">
                            <div class="tm-textbox tm-textbox-2 tm-bg-dark">
                                <a href="isiseminar.html" class="tm-text-blue mb-4">
                                    <h2>Seminar</h2>
                                </a>
                                <p class="mb-4">
                                    Seminar adalah pertemuan berkala yang diadakan oleh seseorang yang sedang
                                    melaksanakan tugasnya. Seminar berasal dari kata Latin semin yang berarti benih atau
                                    dari kata seminarium, yang artinya tanah tempat menanam benih. Jadi, seminar
                                    memiliki arti tempat
                                    benih-benih kebijaksanaan. Kebijaksanaan yang dimaksud tentu didasari oleh
                                    pengajaran akademis, baik pada sebuah universitas atau organisasi komersial yang
                                    profesional pada suatu bidang tertentu. </p>
                                <p class="mb-4">
                                    Dalam seminar terjadi tukar pikiran di antara penyaji dengan peserta diskusi.Materi
                                    yang dikemukan penyaji dibahas dari berbagai aspek dan sudut pandang. Seminar fokus
                                    pada topik tertentu yang sangat khusus, di mana peserta yang hadir bisa
                                    berpartisipasi
                                    aktif. </p>

                            </div>

                        </section>
                        <section class="tm-section tm-section-1">
                            <div class="tm-textbox tm-textbox-2 tm-bg-dark">
                                <a href="isibeasiswa.html" class="tm-text-blue mb-4">
                                    <h2>Beasiswa</h2>
                                </a>
                                <p class="mb-4">
                                    Beasiswa adalah pemberian berupa bantuan keuangan yang diberikan kepada perorangan
                                    yang bertujuan untuk digunakan demi keberlangsungan pendidikan yang ditempuh. </p>
                                <p class="mb-4">
                                    Beasiswa dapat diberikan oleh lembaga pemerintah, perusahaan ataupun yayasan.
                                    Pemberian beasiswa dapat dikategorikan pada pemberian cuma-cuma ataupun pemberian
                                    dengan ikatan kerja (biasa disebut ikatan dinas) setelah selesainya pendidikan. Lama
                                    ikatan
                                    dinas ini berbeda-beda, tergantung pada lembaga yang memberikan beasiswa tersebut
                                </p>
                            </div>


                        </section>
                        <section class="tm-section tm-section-1">
                            <div class="tm-textbox tm-textbox-2 tm-bg-dark">
                                <a href="isillomba.html" class="tm-text-blue mb-4">
                                    <h2>Lomba</h2>
                                </a>
                                <p class="mb-4">
                                    Lomba atau kompetisi adalah aktivitas mencapai tujuan dengan cara mengalahkan orang
                                    lain atau kelompok. Individu atau kelompok memilih untuk bekerja sama atau
                                    berkompetisi tergantung dari struktur reward dalam suatu situasi. </p>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            || Bank Information APP||

        </footer>
    </div>
    </div>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/background.cycle.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script>
    let slickInitDone = false;
    let previousImageId = 0,
        currentImageId = 0;
    let pageAlign = "right";
    let bgCycle;
    let links;
    let eachNavLink;

    window.onload = function() {
        $("body").addClass("loaded");
    };

    function navLinkClick(e) {
        if ($(e.target).hasClass("external")) {
            return;
        }

        e.preventDefault();

        if ($(e.target).data("align")) {
            pageAlign = $(e.target).data("align");
        }

        // Change bg image
        previousImageId = currentImageId;
        currentImageId = $(e.target).data("linkid");
        bgCycle.cycleToNextImage(previousImageId, currentImageId);

        // Change menu item highlight
        $(`.tm-nav-item:eq(${previousImageId})`).removeClass("active");
        $(`.tm-nav-item:eq(${currentImageId})`).addClass("active");

        // Change page content
        $(`.tm-section-${previousImageId}`).fadeOut(function(e) {
            $(`.tm-section-${currentImageId}`).fadeIn();
            // Gallery
            if (currentImageId === 2) {
                setupSlider();
            }
        });

        adjustFooter();
    }

    $(document).ready(function() {
        // Set first page
        $(".tm-section").fadeOut(0);
        $(".tm-section-0").fadeIn();

        // Set Background images
        // https://www.jqueryscript.net/slideshow/Simple-jQuery-Background-Image-Slideshow-with-Fade-Transitions-Background-Cycle.html
        bgCycle = $("body").backgroundCycle({
            imageUrls: [
                "img/bg5.jpg",
                "img/bg3.jpg",

            ],
            fadeSpeed: 2000,
            duration: -1,
            backgroundSize: SCALING_MODE_COVER
        });

        eachNavLink = $(".tm-nav-link");
        links = $(".tm-nav-links");

        // "Menu" open/close
        if (links.hasClass("open")) {
            links.fadeIn(0);
        } else {
            links.fadeOut(0);
        }

        $("#tm_about_link").on("click", navLinkClick);
        $("#tm_work_link").on("click", navLinkClick);

        // Each menu item click
        eachNavLink.on("click", navLinkClick);

        $(".tm-navbar-menu").click(function(e) {
            if (links.hasClass("open")) {
                links.fadeOut();
            } else {
                links.fadeIn();
            }

            links.toggleClass("open");
        });

        // window resize
        $(window).resize(function() {
            // If current page is Gallery page, set it up
            if (currentImageId === 2) {
                setupSlider();
            }

            // Adjust footer
            adjustFooter();
        });

        adjustFooter();
    }); // DOM is ready

    function adjustFooter() {
        const windowHeight = $(window).height();
        const topHeight = $(".tm-top-container").height();
        const middleHeight = $(".tm-content").height();
        let contentHeight = topHeight + middleHeight;

        if (pageAlign === "left") {
            contentHeight += $(".tm-bottom-container").height();
        }

        if (contentHeight > windowHeight) {
            $(".tm-bottom-container").addClass("tm-static");
        } else {
            $(".tm-bottom-container").removeClass("tm-static");
        }
    }

    function setupSlider() {
        let slidesToShow = 4;
        let slidesToScroll = 2;
        let windowWidth = $(window).width();

        if (windowWidth < 480) {
            slidesToShow = 1;
            slidesToScroll = 1;
        } else if (windowWidth < 768) {
            slidesToShow = 2;
            slidesToScroll = 1;
        } else if (windowWidth < 992) {
            slidesToShow = 3;
            slidesToScroll = 2;
        }

        if (slickInitDone) {
            $(".tm-gallery").slick("unslick");
        }

        slickInitDone = true;

        $(".tm-gallery").slick({
            dots: true,
            customPaging: function(slider, i) {
                var thumb = $(slider.$slides[i]).data();
                return `<a>${i + 1}</a>`;
            },
            infinite: true,
            prevArrow: false,
            nextArrow: false,
            slidesToShow: slidesToShow,
            slidesToScroll: slidesToScroll
        });

        // Open big image when a gallery image is clicked.
        $(".slick-list").magnificPopup({
            delegate: "a",
            type: "image",
            gallery: {
                enabled: true
            }
        });
    }
    </script>
</body>

</html>

</html>