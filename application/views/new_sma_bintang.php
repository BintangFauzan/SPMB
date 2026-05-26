<style>
    /* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
    :root {
        --background-color: #ffffff;
        /* Background color for the entire website, including individual sections */
        --default-color: #212529;
        /* Default color used for the majority of the text content across the entire website */
        --heading-color: #37373f;
        /* Color for headings, subheadings and title throughout the website */
        --accent-color: #4B577B !important;
        /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
        --surface-color: #ffffff;
        /* The surface color is used as a background of boxed elements within sections, such as cards, icon boxes, or other elements that require a visual separation from the global background. */
        --contrast-color: #ffffff;
        /* Contrast color for text, ensuring readability against backgrounds of accent, heading, or default colors. */
    }

    /* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
    :root {
        --nav-color: #7f7f90;
        /* The default color of the main navmenu links */
        --nav-hover-color: #56357F !important;
        /* Applied to main navmenu links when they are hovered over or active */
        --nav-mobile-background-color: #ffffff;
        /* Used as the background color for mobile navigation menu */
        --nav-dropdown-background-color: #ffffff;
        /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
        --nav-dropdown-color: #7f7f90;
        /* Used for navigation links of the dropdown items in the navigation menu. */
        --nav-dropdown-hover-color: #4B577B !important;
        /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
    }
</style>

<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

        <div class="container">
            <div class="row gy-4 justify-content-center justify-content-lg-between">
                <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up" style="font-family: sans-serif; font-size: 1.8rem;" class="p-2">Mari
                        Bergabung Bersama STP Khoiru Ummah, Sekolahnya Penghafal Al-Qur'an dan Pemimpin Masa Depan</h1>
                    <p data-aos="fade-up" data-aos-delay="100" class="p-2"> "Tiada suatu pemberian yang lebih utama dari
                        orang tua kepada anaknya selain pendidikan yang baik." (HR. Al Hakim: 7679)</p>
                    <div class="d-flex p-2" data-aos="fade-up" data-aos-delay="200">
                        <a href="#register" class="btn-get-started">Daftar</a>
                        <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="<?= base_url("assets/"); ?>new-asset/assets/img/SMA/foto-SMA-halaman-awal-SMA.PNG"
                        class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <!-- <h2>About Us<br></h2> -->
            <img class="img-fluid w-50" src="<?= base_url("assets/"); ?>new-asset/assets/img/sma/foto-SMA-tengah.PNG"
                alt="">
            <p style="font-family: sans-serif; font-size: 1.5rem; font-weight:bold;"><span>Kenapa Harus</span> <br>
                <span class="description-title">STP Khoiru Ummah?</span>
            </p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <p>Sekolah Tahfizh Plus Khoiru Ummah <b>Sebagai representasi institusi pendidikan berbasis
                                Aqidah Islam, yang terdepan dalam melahirkan generasi pemimpin pembangun peradaban mulia
                                (Islam) dengan memiliki Core Values "Al BI'AH KU"</b></p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> <span><b>A</b>l-Qur'an, Bacaan dan
                                    AmalanKU</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span><b>B</b>ersih, Diri dan
                                    LingkunganKU</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span><b>I</b>badah, Sepanjang HayatKU</span>
                            </li>
                            <li><i class="bi bi-check-circle-fill"></i> <span><b>A</b>hsan, Tutur Kata dan
                                    PerbuatanKU</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span><b>H</b>alalan Thoyyiban, Makanan dan
                                    MinumanKU</span></li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->
    <!-- Registration Section -->
    <section id="register" class="book-a-table section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Registrasi</h2>
            <p style="font-family: sans-serif; font-size: 1.5rem; font-weight:bold;"><span>Ayo Daftar di</span> <br>
                <span class="description-title">Khoiru Ummah<br></span>
            </p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

                <!-- <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);"></div> -->

                <div class="col-lg-12 d-flex align-items-center reservation-form-bg" data-aos="fade-up"
                    data-aos-delay="200">
                    <form role="form" class="php-email-form" id="form_daftar_sma">
                        <input type="hidden" id="dft_id" name="dft_id" value="">
                        <input type="hidden" id="dft_level" name="dft_level" value="4">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="dft_nama" class="form-control" id="dft_nama"
                                    placeholder="Nama Anak" required>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="dft_tgl_lahir" class="form-control tgl" id="dft_tgl_lahir"
                                    placeholder="Tanggal Lahir Anak" required>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control" name="dft_nama_ayah" id="dft_nama_ayah"
                                    placeholder="Nama Ayah" required>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control" name="dft_nama_ibu" id="dft_nama_ibu"
                                    placeholder="Nama Ibu" required>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control" name="dft_kontak_ayah" id="dft_kontak_ayah"
                                    placeholder="Kontak Ayah" required>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control" name="dft_kontak_ibu" id="dft_kontak_ibu"
                                    placeholder="Kontak Ibu" required>
                            </div>


                        </div>

                        <div class="form-group mt-3">
                            <textarea class="form-control" id="dft_alamat" name="dft_alamat" rows="5"
                                placeholder="Alamat Lengkap" required></textarea>
                        </div>
                        <!-- <div class="col-lg-12 col-md-6">
                                <p>Untuk memastikan kuota, booking dengan transfer biaya pendaftaran.</p>
                                <div class="row">
                                    <div class="col-md-5">
                                        <img class="img-thumbnail img-preview"
                                            src="<?= base_url("assets/dist/img/no-image.jpg"); ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="file" accept=".jpg, .jpeg, .png" class="filestyle"
                                            id="dft_transfer" name="dft_transfer" data-buttonname="btn-white"
                                            onchange="previewImg()">
                                    </div>
                                </div>
                            </div> -->

                         <div class="text-center mt-3">
                            <!-- <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your booking request was sent. We will call back or send an Email
                                to confirm your reservation. Thank you!</div> -->
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#confirmationModal" style="background-color: var(--accent-color); color: var(--contrast-color);">Simpan</button>
                        </div>
                    </form>
                </div><!-- End Reservation Form -->

            </div>
 
        </div>

    </section><!-- /Book A Table Section -->
</main>

<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Pendaftaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menyimpan data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" form="form_daftar_sma" data-bs-dismiss="modal" style="background-color: var(--accent-color); border-color: var(--accent-color);">Ya, Yakin</button>
            </div>
        </div>
    </div>
</div>


<footer id="footer" class="footer dark-background">

    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-geo-alt icon"></i>
                <div class="address">
                    <h4>Alamat</h4>
                    <a href="https://www.google.com/maps/place/Pondok+Pesantren+Tahfizh+Plus+Khoiru+Ummah+Pekanbaru/@0.4173468,101.2739704,15z/data=!4m10!1m2!2m1!1sponpes+khoiru+ummah!3m6!1s0x31d5075775a43397:0x7c972a843827308d!8m2!3d0.4173468!4d101.2853002!15sChNwb25wZXMga2hvaXJ1IHVtbWFokgEQcmVsaWdpb3VzX3NjaG9vbKoBPBABMh8QASIbNvkkKXfsMB0bC-N43n5P-8jzakZ1XfeYQNApMhcQAiITcG9ucGVzIGtob2lydSB1bW1haOABAA!16s%2Fg%2F11crzgvzmm?entry=ttu&g_ep=EgoyMDI1MTAwNy4wIKXMDSoASAFQAw%3D%3D"
                        target="_blank" style="text-decoration: none; color: white;">
                        Jl. Raya Pekanbaru - Bangkinang No.KM 24, Rimba Panjang, Kec. Tambang, Kabupaten Kampar, Riau
                        28468</a>
                    <p></p>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-telephone icon"></i>
                <div>
                    <h4>Kontak </h4>
                    <p>
                        <strong> Admin SMA KU :</strong> <span> <a href="https://wa.me/6282324987785" target="_blank">
                                +62 823-2498-7785</a> </span><br>
                        <strong> Mudir SMA KU :</strong> <span> <a href="https://wa.me/6281312109978" target="_blank">
                                +62 813-1210-9978</a> </span><br>
                        <strong>Email:</strong> <span>khoiruummahpekanbaru@gmail.com</span><br>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-clock icon"></i>
                <div>
                    <h4>Jam Buka</h4>
                    <p>
                        <strong>Senin - Jum'at:</strong> <span>08.00 - 12.00</span><br>
                        <strong>Sabtu - Ahad:</strong> <span>Tutup</span>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4>Ikuti Kami</h4>
                <div class="social-links d-flex">
                    <a href="https://fb.com/pekanbaru.khoiruummah" target="_blank" class="facebook"><i
                            class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/khoiruummahpku_smp" target="_blank" class="instagram"><i
                            class="bi bi-instagram"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>©
            <script>
                document.write(new Date().getFullYear());
            </script> Sekolah Tahfizh Plus Khoiru Ummah Pekanbaru, All Right Reserved.
        </p>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a> -->
        </div>
    </div>

</footer>