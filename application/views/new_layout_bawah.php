<!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url("assets/"); ?>new-asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url("assets/"); ?>new-asset/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url("assets/"); ?>new-asset/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url("assets/"); ?>new-asset/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url("assets/"); ?>new-asset/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url("assets/"); ?>new-asset/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Toastr -->
  <script src="<?= base_url("assets"); ?>/plugins/toastr/toastr.min.js"></script>
  <!-- Main JS File -->
  <script src="<?= base_url("assets/"); ?>new-asset/assets/js/main.js"></script>
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

    $("#form_daftar_sma").submit(function(e) {
      e.preventDefault();
      $("#simpan_sma").html("Menyimpan...");
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
            resetFormSma();
            $('#konfirmasiModal').modal('hide');
          } else {
            toastr.error(res.desc);
          }
          $("#simpan_sma").html("Ya");
          $(".btn").attr("disabled", false);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          $("#simpan_sma").html("Ya");
          $(".btn").attr("disabled", false);
          toastr.error(errorThrown);
        }
      });
    });

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

    function resetFormSma() {
      $("#dft_id").val(0);
      $("#form_daftar_sma")[0].reset();
      $(".img-preview").attr('src', '<?= base_url("assets/dist/img/no-image.jpg"); ?>');
    }
</script>
</body>

</html>
