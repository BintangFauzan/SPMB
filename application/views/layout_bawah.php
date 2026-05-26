  <!-- Copyright Start -->
  <div class="container-fluid copyright text-dark py-4 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-light text-center text-md-start mb-3 mb-md-0">
          &copy; <script>
            document.write(new Date().getFullYear());
          </script> Sekolah Tahfizh Plus Khoiru Ummah Pekanbaru, All Right Reserved.
        </div>
      </div>
    </div>
  </div>
  <!-- Copyright End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url("assets"); ?>/lib/wow/wow.min.js"></script>
  <script src="<?= base_url("assets"); ?>/lib/easing/easing.min.js"></script>
  <script src="<?= base_url("assets"); ?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url("assets"); ?>/lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url("assets"); ?>/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="<?= base_url("assets"); ?>/js/main.js"></script>

  <!-- Toastr -->
  <script src="<?= base_url("assets"); ?>/plugins/toastr/toastr.min.js"></script>
  <!-- date-range-picker -->
  <script src="<?= base_url("assets"); ?>/plugins/moment/moment.min.js"></script>
  <script src="<?= base_url("assets"); ?>/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
  <script src="<?= base_url("assets"); ?>/plugins/daterangepicker/daterangepicker.js"></script>

  <script>
    function previewImg() {
      const foto = document.querySelector('#dft_transfer');
      const imgPreview = document.querySelector('.img-preview');

      const fileFoto = new FileReader();
      fileFoto.readAsDataURL(foto.files[0]);

      fileFoto.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }

    $("#form_daftar_tk").submit(function(e) {
      e.preventDefault();
      $("#simpan_tk").html("Menyimpan...");
      $(".btn").attr("disabled", true);
      $.ajax({
        type: "POST",
        url: "simpan",
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function(d) {
          var res = JSON.parse(d);
          console.log(res);
          if (res.status == 1) {
            toastr.success(res.desc);
            resetFormTK();
          } else {
            toastr.error(res.desc);
          }
          $("#simpan_tk").html("Simpan");
          $(".btn").attr("disabled", false);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          $("#simpan_tk").html("Simpan");
          $(".btn").attr("disabled", false);
          toastr.error(res.errorThrown);
        }
      });
    });

    function resetFormTK() {
      $("#dft_id").val(0);
      $("#form_daftar_tk")[0].reset();
      $(".img-preview").attr('src', '<?= base_url("assets/dist/img/no-image.jpg"); ?>');
    }

    $("#form_daftar_sd").submit(function(e) {
      e.preventDefault();
      $("#simpan_sd").html("Menyimpan...");
      $(".btn").attr("disabled", true);
      $.ajax({
        type: "POST",
        url: "simpan",
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function(d) {
          var res = JSON.parse(d);
          console.log(res);
          if (res.status == 1) {
            toastr.success(res.desc);
            resetFormSd();
          } else {
            toastr.error(res.desc);
          }
          $("#simpan_sd").html("Simpan");
          $(".btn").attr("disabled", false);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          $("#simpan_sd").html("Simpan");
          $(".btn").attr("disabled", false);
          toastr.error(res.errorThrown);
        }
      });
    });

    function resetFormSd() {
      $("#dft_id").val(0);
      $("#form_daftar_sd")[0].reset();
      $(".img-preview").attr('src', '<?= base_url("assets/dist/img/no-image.jpg"); ?>');
    }

    $("#form_daftar_smp").submit(function(e) {
      e.preventDefault();
      $("#simpan_smp").html("Menyimpan...");
      $(".btn").attr("disabled", true);
      $.ajax({
        type: "POST",
        url: "simpan",
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function(d) {
          var res = JSON.parse(d);
          console.log(res);
          if (res.status == 1) {
            toastr.success(res.desc);
            resetFormSmp();
          } else {
            toastr.error(res.desc);
          }
          $("#simpan_smp").html("Simpan");
          $(".btn").attr("disabled", false);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          $("#simpan_smp").html("Simpan");
          $(".btn").attr("disabled", false);
          toastr.error(res.errorThrown);
        }
      });
    });

    function resetFormSmp() {
      $("#dft_id").val(0);
      $("#form_daftar_smp")[0].reset();
      $(".img-preview").attr('src', '<?= base_url("assets/dist/img/no-image.jpg"); ?>');
    }

    $(document).on('focus', '.tgl', function() {
      $(this).daterangepicker({
        locale: {
          format: 'DD/MM/YYYY'
        },
        showDropdowns: true,
        singleDatePicker: true,
        "autoApply": true,
        opens: 'left'
      });
    });
  </script>
  </body>

  </html>