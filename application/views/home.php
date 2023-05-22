<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">

</head>

<body>
    <?php $this->load->view("_partials/navbar.php") ?>

    <section id="home">
        <img src="<?php echo base_url('assets/img/home.jpg') ?>" alt="">
        <div class="headline">
            <h3>Bisnis anda siap</h3>
            <h3>untuk Shifting Up ?</h3>
            <div class="text-hero">
                <p class="body-text">
                    Kamu bisa belajar langsung dari para professional
                    di industri teknologi, dan juga banyak aktifitas
                    seru yang bisa kamu ikuti.
                </p>
                <button class="primary-button">
                    Eksplore Sekarang
                </button>
            </div>
        </div>
    </section>

    <section id="partnerku" class="section-pb1">
        <div class="container">
            <div class="list-partner my-3">
                <?php for ($i = 1; $i <= 8; $i++) { ?>
                <img src="<?php echo base_url('assets/img/partner/partner (' . $i . ').jpg') ?>" alt="">
                <?php } ?>
            </div>
        </div>
    </section>


    <section id="about-us">
        <div class="container">
            <div class="row display-default my-5">
                <div class="col">
                    <iframe class="frame" src="https://www.youtube.com/embed/Vrl5dYPf82E" allowfullscreen></iframe>
                </div>
                <div class="col">
                    <div class="my-3">
                        <span>Tentang Kami</span>
                        <h6 class="body-text mt-3">Kami Berkomitmen Menyusun Solusi Bisnis yang Unik dan Sesuai dengan
                            Kebutuhan Anda.</h6>
                    </div>
                    <p class="body-text">Kingdom Business Community (KBC) adalah sebuah gerakan moral dalam dunia kerja
                        berbentuk yayasan niralaba dengan fokus untuk memiliki ‘transformasi pola pikir’ dalam melakukan
                        Bisnis / Pekerjaan dengan Tujuan yang Mulia (tidak hanya orientasi profit) dan mempraktekkan
                        nilai spritual dalam bekerja.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="our-service" class="section-pb1">
        <div class="container my-5">
            <div class="my-5">
                <span>Layanan Kami</span>
                <h6 class="mt-3">Tim Kami Bekerja Sama Untuk Merancang Strategi</h6>
                <h6>yang Tepat Guna Meningkatkan Performa Bisnis Anda.</h6>
            </div>
            <div class="row our-gap">
                <?php foreach ($service as $item) : ?>
                <div class=" card-our-service col">
                    <div class="icon-frame">
                        <i class="<?php echo $item->icon ?>"></i>
                    </div>
                    <div class="text-group">
                        <h6><?= $item->title ?></h6>
                        <p class="body-text">
                            <?= $item->description ?>
                        </p>
                    </div>
                    <button class="log-secondary-button">
                        Eksplor Lebih Lengkap
                    </button>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="our-consultant" class="section-p1">
        <div class="container my-5">
            <div class="my-5 title-box">
                <div>
                    <span>Konsultan Kami</span>
                    <h6 class="mt-3">Para Ahli dalam Bidangnya yang Berdedikasi Untuk </h6>
                    <h6>Memberikan Layanan Terbaik Kepada Anda.</h6>
                </div>
                <a href="<?php echo site_url('./consultation') ?>">
                    <p class="detail-text">Lihat Semua Konsultan</p>
                </a>
            </div>
            <div class="row our-gap display-default">
                <div class="box-icon">
                    <i class="ri-arrow-left-line"></i>
                </div>
                <?php foreach ($consultant as $item) : ?>
                <div class="card card-our-consultant col">
                    <img src="<?php echo base_url('assets/img/consultant/' . $item->photo) ?>" alt="">
                    <h6><?php echo $item->name ?></h6>
                    <p><?php echo $item->profesi ?></p>
                </div>
                <?php endforeach; ?>
                <div class="box-icon">
                    <i class="ri-arrow-right-line"></i>
                </div>
            </div>
        </div>
    </section>

    <section id="tobe-consultant">
        <div class="title-box">
            <img src="<?php echo base_url('assets/img/tobe-consultant.jpg') ?>" alt="">
            <div class="container tobe-consultant-box">
                <div class="col-md-6">
                    <h5>Tertarik Bergabung Menjadi Konsultan?</h5>
                    <div class="text-hero mt-3">
                        <p class="body-text">
                            Dengan menjadi konsultan kami, Anda memiliki kesempatan untuk berkontribusi dalam membantu
                            bisnis dan pelanggan kami, serta mengembangkan karir Anda dalam bisnis. Segera bergabung
                            dengan kami dan jadilah bagian dari tim ahli kami yang berdedikasi dan berpengalaman
                        </p>
                    </div>
                    <a href="https://bit.ly/ProfilKonsultanBuild">
                        <button class="primary-button mt-3">Daftar Konsultan</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="our-program">
        <div class="container my-5">
            <div class="my-5 title-box">
                <div>
                    <span>Program kami</span>
                    <h6 class="mt-3">Temukan Program yang Tepat dalam Membantu Anda</h6>
                    <h6> Mencapai Tujuan Bisnis dengan Lebih Efektif.</h6>
                </div>
                <a href="<?php echo site_url('./eksplorasi') ?>">
                    <p class="detail-text">Lihat Selengkapnya</p>
                </a>
            </div>
            <div class="row program-gap">
                <?php foreach ($program as $item) : ?>
                <a href="<?php echo 'homecontroller/detailProgram/' . $item->id ?>">
                    <div class="card card-our-program">
                        <img src="<?php echo base_url('assets/img/program/' . $item->photo) ?>" alt="">
                        <div class="our-program-text">
                            <span><?= $item->type ?></span>
                            <h6><?= $item->name ?></h6>
                            <p><?= date('d M Y', strtotime($item->dateStart)) . " - " . date('d M Y', strtotime($item->dateEnd)) ?>
                            </p>
                            <span class="text-capitalize">
                                <?php if ($item->priceMin == $item->priceMax) {
                                        echo "Rp. " . number_format($item->priceMin);
                                    } else {
                                        echo "Rp. " . number_format($item->priceMin) . " - " . "Rp." . number_format($item->priceMax);
                                    }
                                    ?>
                            </span>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="testimoni">
        <div class="layer">
            <img src="<?php echo base_url('assets/img/testimoni.jpg') ?>" alt="">
        </div>
        <div class="container testimoni-box">
            <div class="my-5 text-white">
                <span class="text-uppercase text-white">Testimoni</span>
                <h6 class="mt-3">Apa yang Dikatakan Oleh Klien Kami?</h6>
            </div>
            <div class="row our-gap">
                <div class="card card-testimoni col">
                    <img src="<?php echo base_url('assets/img/svg/double-quote.svg') ?>" alt="">
                    <div class="testimoni-text text-gap">
                        <p class="body-text">Sangat terkesan dengan event pelatihan bisnis ini! Sangat informatif dan
                            bermanfaat bagi bisnis saya. Pembicaranya ahli dan memberikan banyak wawasan dan tips yang
                            dapat langsung saya terapkan di bisnis saya. Saya sangat merekomendasikan event ini bagi
                            siapa saja yang ingin meningkatkan kinerja bisnis mereka!</p>
                        <div class="display-default testimoni-user text-gap">
                            <img src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="">
                            <div class="box-user">
                                <p>Khoirul</p>
                                <div class="star-user">
                                    <?php for ($i = 0; $i < 5; $i++) { ?>
                                    <i class="ri-star-fill"></i>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-testimoni col">
                    <img src="<?php echo base_url('assets/img/svg/double-quote.svg') ?>" alt="">
                    <div class="testimoni-text text-gap">
                        <p class="body-text">Sangat terkesan dengan event pelatihan bisnis ini! Sangat informatif dan
                            bermanfaat bagi bisnis saya. Pembicaranya ahli dan memberikan banyak wawasan dan tips yang
                            dapat langsung saya terapkan di bisnis saya. Saya sangat merekomendasikan event ini bagi
                            siapa saja yang ingin meningkatkan kinerja bisnis mereka!</p>
                        <div class="display-default testimoni-user text-gap">
                            <img src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="">
                            <div class="box-user">
                                <p>Khoirul</p>
                                <div class="star-user">
                                    <?php for ($i = 0; $i < 5; $i++) { ?>
                                    <i class="ri-star-fill"></i>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-testimoni col">
                    <img src="<?php echo base_url('assets/img/svg/double-quote.svg') ?>" alt="">
                    <div class="testimoni-text text-gap">
                        <p class="body-text">Sangat terkesan dengan event pelatihan bisnis ini! Sangat informatif dan
                            bermanfaat bagi bisnis saya. Pembicaranya ahli dan memberikan banyak wawasan dan tips yang
                            dapat langsung saya terapkan di bisnis saya. Saya sangat merekomendasikan event ini bagi
                            siapa saja yang ingin meningkatkan kinerja bisnis mereka!</p>
                        <div class="display-default testimoni-user text-gap">
                            <img src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="">
                            <div class="box-user">
                                <p>Khoirul</p>
                                <div class="star-user">
                                    <?php for ($i = 0; $i < 4; $i++) { ?>
                                    <i class="ri-star-fill"></i>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container my-5">
            <div class="my-3">
                <span>Blog & Artikel</span>
                <h6 class="mt-3">Informasi Terbaru Tentang Produk dan Layanan Kami</h6>
                <h6>untuk Memenuhi Kebutuhan Kisnis Anda.</h6>
            </div>
            <div class="row display-default my-5">
                <div class="col">
                    <img src="<?php echo base_url('assets/img/blog/headline-blog.jpg') ?>" alt="">
                </div>
                <div class="col">
                    <p>23 Juni - 30 Juli 2023</p>
                    <h6 class="body-text">Merancang Strategi Kebenaran : Kisah Stanley</h6>
                    <p class="body-text">Namanya mudah diingat orang, Stanley. Pendidikannya mudah dilupakan orang,
                        lulusan Sekolah Menengah Kejuruan. Perawakannya mudah dilecehkan, karena kurus, pendek dan tidak
                        menunjukkan profil 'macho' sehingga dikejar para gadis. Namun gaya bicara dan semangatnya tak
                        mudah diikuti orang karena termasuk manusia luar biasa.</p>
                    <a href="<?php echo base_url('') ?>" class="link-text">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="row our-gap">
                <div class="card card-blog col">
                    <img src="<?php echo base_url('assets/img/blog/blog (1).jpg') ?>" alt="">
                    <div class="blog-text">
                        <p>23 Juni - 30 Juli 2023</p>
                        <h6>Transformasi Dimulai Dari Pemimpin</h6>
                        <p class="body-text">Setelah mengenyam pendidikan dan pelatihan di Jepang selama lebih 12 tahun,
                            ia berketetapan hati kembali ke Indonesia pada tahun 1996.</p>
                        <a href="<?php echo base_url('') ?>" class="link-text">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card card-blog col">
                    <img src="<?php echo base_url('assets/img/blog/blog (2).jpg') ?>" alt="">
                    <div class="blog-text">
                        <p>23 Juni - 30 Juli 2023</p>
                        <h6>Kingdom Financial for Kids Program</h6>
                        <p class="body-text">Setelah mengenyam pendidikan dan pelatihan di Jepang selama lebih 12 tahun,
                            ia berketetapan hati kembali ke Indonesia pada tahun 1996.</p>
                        <a href="<?php echo base_url('') ?>" class="link-text">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card card-blog col">
                    <img src="<?php echo base_url('assets/img/blog/blog (3).jpg') ?>" alt="">
                    <div class="blog-text">
                        <p>23 Juni - 30 Juli 2023</p>
                        <h6>Shifting Up: Tranforming Your Business</h6>
                        <p class="body-text">Setelah mengenyam pendidikan dan pelatihan di Jepang selama lebih 12 tahun,
                            ia berketetapan hati kembali ke Indonesia pada tahun 1996.</p>
                        <a href="<?php echo base_url('') ?>" class="link-text">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view("_partials/footer.php") ?>

</body>

</html>