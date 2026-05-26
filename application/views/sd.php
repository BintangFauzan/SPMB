  <!-- Carousel Start -->
  <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="<?= base_url("assets"); ?>/img/16.png" alt="">
        <div class="owl-carousel-inner">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-lg-8">
              <h1 class="mb-5 mt-3 animated slideInDown" style="font-family: sans-serif;font-size: 40px;">Mari Bergabung Bersama STP Khoiru Ummah, Sekolahnya Penghafal Al-Qur'an dan Pemimpin Masa Depan</h1>
              <p style="font-size: 20px;">"Tiada suatu pemberian yang lebih utama dari orang tua kepada anaknya selain pendidikan yang baik." (HR. Al Hakim: 7679)</p>
                <a href="#daftar" class="btn rounded-pill text-light py-3 px-5" style="background-color: #567409;">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- About Start -->
  <div class="container-xxl py-6">
    <div class="container">
      <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.05s">
          <img class="img-fluid rounded img_program" src="<?= base_url("assets"); ?>/img/11.png" alt="">
        </div>
        <div class="col-lg-6 align-self-center wow fadeInUp" data-wow-delay="0.05s">
        <h1 style="font-size: 40px;">
            <span style="color: #567409;">Kenapa Harus</span><br> STP Khoiru Ummah?
          </h1>
          <p>Sekolah Tahfizh Plus Khoiru Ummah <b>Sebagai representasi institusi pendidikan berbasis Aqidah Islam, yang terdepan dalam melahirkan generasi pemimpin pembangun peradaban mulia (Islam) dengan memiliki Core Values "Al BI'AH KU"</b></p>

          <ul>
            <li><b>A</b>l-Qur'an, Bacaan dan AmalanKU</li>
            <li><b>B</b>ersih, Diri dan LingkunganKU</li>
            <li><b>I</b>badah, Sepanjang HayatKU</li>
            <li><b>A</b>hsan, Tutur Kata dan PerbuatanKU</li>
            <li><b>H</b>alalan Thoyyiban, Makanan dan MinumanKU</li>
          
          </ul>
        </div>
       
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Facts Start -->
  <div class="container-xxl py-6" id="daftar">
    <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <h1 class="display-6 mb-4">Ayo Daftar Di</h1>
        <h1 style="color: #567409;">Khoiru Ummah</h1>
      </div>
      <div class="row g-4">
        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
          <div class="fact-item bg-light rounded h-100 p-5">
            <form class="form-group" id="form_daftar_sd">
              <input type="hidden" id="dft_id" name="dft_id" value="">
              <input type="hidden" id="dft_level" name="dft_level" value="2">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="dft_nama">Nama Anak</label>
                    <input type="text" id="dft_nama" name="dft_nama" class="form-control" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="dft_tgl_lahir">Tanggal Lahir Anak</label>
                    <input type="text" id="dft_tgl_lahir" name="dft_tgl_lahir" class="form-control tgl" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="dft_nama_ayah">Nama Ayah</label>
                    <input type="text" id="dft_nama_ayah" name="dft_nama_ayah" class="form-control" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="dft_nama_ibu">Nama Ibu</label>
                    <input type=" text" id="dft_nama_ibu" name="dft_nama_ibu" class="form-control" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="dft_kontak_ayah">Kontak Ayah</label>
                    <input type="number" id="dft_kontak_ayah" name="dft_kontak_ayah" class="form-control" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="dft_kontak_ibu">Kontak Ibu</label>
                    <input type="number" id="dft_kontak_ibu" name="dft_kontak_ibu" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="form-group mb-3">
                <label for="dft_alamat">Alamat</label>
                <textarea id="dft_alamat" name="dft_alamat" cols="30" rows="5" class="form-control" required></textarea>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Untuk memastikan kuota, booking dengan transfer biaya pendaftaran.</label>
                  <div class="row">
                    <div class="col-md-5">
                      <img class="img-thumbnail img-preview" src="<?= base_url("assets/dist/img/no-image.jpg"); ?>">
                    </div>
                    <div class="col-md-2">
                      <input type="file" accept=".jpg, .jpeg, .png" class="filestyle" id="dft_transfer" name="dft_transfer" data-buttonname="btn-white" onchange="previewImg()">
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" id="simpan_sd" class="btn text-light" style="background-color: #567409;" style="width: 150px;">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Facts End -->
  <!-- Footer Start -->
  <div class="container-fluid text-dark footer my-6 mb-0 py-5 wow fadeIn" style="background-color: #A8CF45;" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h4 class="text-dark mb-4">Alamat</h4>
          <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
            Jalan Delima Gg. Khoiru Ummah No. 3 – 6 Kel. Tobek Godang, Kec. Tampan, Kota Pekanbaru, Riau</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-dark mb-4">Unit Pekanbaru</h4>
          <a href="<?= base_url("TK/tampil"); ?>" class="btn btn-link text-dark">Taman Anak-Anak</a>
          <a href="<?= base_url("SD/tampil"); ?>" class="btn btn-link text-dark">Sekolah Dasar</a>
          <a href="<?= base_url("SMP/tampil"); ?>" class="btn btn-link text-dark">Sekolah Menengah Pertama</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-dark mb-4">Kontak</h4>
          <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(+62) 813-1199-4452</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class=" d-flex align-items-center">
            <img class="img-fluid text-center" src="<?= base_url("assets"); ?>/img/logo-header.png" width="50%" alt="Image">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->