<div class="inner">
	<div class="row">
		<div class="col-md-2 col-xs-12">
			<div class="form-group">
				<a href="javascript:tambah()" class="btn btn-success btn-block"><i class="fa fa-plus"></i> &nbsp;&nbsp;&nbsp; Tambah</a>
			</div>
		</div>
		<div class="col-md-2 col-xs-12">
			<div class="form-group">
				<a href="javascript:drawTable()" class="btn btn-success btn-block"><i class="fa fa-refresh"></i> &nbsp;&nbsp;&nbsp; Refresh</a>
			</div>
		</div>
	</div>
	<div class="row" id="isidata">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					Data Pendaftar
				</div>
				<div class="card-body table-responsive">
					<table class="table table-striped table-bordered table-hover" id="tabel-pendaftar" width="100%" style="font-size:120%;">
						<thead>
							<tr>
								<th width="3%">No</th>
								<th width="5%">Bukti <br> Transfer</th>
								<th width="10%">Nama <br> Peserta</th>
								<th width="8%">Tanggal <br> Lahir</th>
								<th width="10%">Nama <br> Ayah</th>
								<th width="10%">Nama <br> Ibu</th>
								<th width="8%">Kontak <br> Ayah</th>
								<th width="8%">Kontak <br> Ibu</th>
								<th width="15%">Alamat</th>
								<th width="5%">Level</th>
								<th width="5%">Tanggal Entry</th>
								<th width="5%">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="3" align="center">Tidak ada data</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_pendaftar" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title"><i class="glyphicon glyphicon-info"></i> Form Pendaftar</h3>
			</div>
			<form class="form-group" id="frm_pendaftar">
				<div class="modal-body form">
					<div class="row">
						<input type="hidden" id="dft_id" name="dft_id" value="">
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
						<div class="col-lg-12">
							<div class="form-group mb-3">
								<label for="dft_alamat">Alamat</label>
								<textarea id="dft_alamat" name="dft_alamat" cols="30" rows="5" class="form-control" required></textarea>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Level</label>
								<select class="form-control" name="dft_level" id="dft_level" required>
									<option value="">== Pilih Level ==</option>
									<option value="1">TK</option>
									<option value="2">SD</option>
									<option value="3">SMP</option>
									<option value="4">SMA</option>
								</select>
							</div>
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
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success shadow" id="dft_simpan">Simpan</button>
						<button type="button" class="btn btn-danger shadow" data-dismiss="modal">Kembali</button>
					</div>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- DataTables -->
<script src="<?= base_url("assets"); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url("assets"); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url("assets"); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url("assets"); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url("assets"); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url("assets"); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url("assets"); ?>/plugins/datatables-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url("assets"); ?>/plugins/datatables-buttons/js/buttons.colVis.js"></script>
<script src="<?= base_url("assets"); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url("assets"); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url("assets"); ?>/plugins/datatables-buttons/js/pdfmake.min.js"></script>
<script src="<?= base_url("assets"); ?>/plugins/datatables-buttons/js/vfs_fonts.js"></script>
<script src="<?= base_url("assets"); ?>/plugins/datatables-buttons/js/jszip.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url("assets"); ?>/plugins/moment/moment.min.js"></script>
<script src="<?= base_url("assets"); ?>/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script src="<?= base_url("assets"); ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url("assets"); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Select 2 -->
<script src="<?= base_url("assets"); ?>/plugins/select2/select2.js"></script>

<!-- Toastr -->
<script src="<?= base_url("assets"); ?>/plugins/toastr/toastr.min.js"></script>

<!-- Custom Java Script -->
<script>
	var save_method; //for save method string
	var table;

	function previewImg() {
		const foto = document.querySelector('#dft_transfer');
		const imgPreview = document.querySelector('.img-preview');

		const fileFoto = new FileReader();
		fileFoto.readAsDataURL(foto.files[0]);

		fileFoto.onload = function(e) {
			imgPreview.src = e.target.result;
		}
	}

	function drawTable() {
		$('#tabel-pendaftar').DataTable({
			"destroy": true,
			dom: 'Bfrtip',
			lengthMenu: [
				[10, 25, 50, -1],
				['10 rows', '25 rows', '50 rows', 'Show all']
			],
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print', 'pageLength'
			],
			// "oLanguage": {
			// "sProcessing": '<center><img src="<?= base_url("assets/"); ?>assets/img/fb.gif" style="width:2%;"> Loading Data</center>',
			// },
			"responsive": true,
			"sort": true,
			"processing": true, //Feature control the processing indicator.
			"serverSide": true, //Feature control DataTables' server-side processing mode.
			"order": [], //Initial no order.
			// Load data for the table's content from an Ajax source
			"ajax": {
				"url": "ajax_list_pendaftar/",
				"type": "POST"
			},
			//Set column definition initialisation properties.
			"columnDefs": [{
				"targets": [-1], //last column
				"orderable": false, //set not orderable
			}, ],
			"initComplete": function(settings, json) {
				$("#process").html("<i class='glyphicon glyphicon-search'></i> Process")
				$(".btn").attr("disabled", false);
				$("#isidata").fadeIn();
			}
		});
	}

	function tambah() {
		$("#dft_id").val(0);
		$("#frm_pendaftar").trigger("reset");
		$('#modal_pendaftar').modal({
			show: true,
			keyboard: false,
			backdrop: 'static'
		});
	}

	$("#frm_pendaftar").submit(function(e) {
		// var dataString = $("#frm_pendaftar").serialize();
		e.preventDefault();
		$("#dft_simpan").html("Menyimpan...");
		$(".btn").attr("disabled", true);
		$.ajax({
			type: "POST",
			url: "simpan",
			data: new FormData(this),
			processData: false,
			contentType: false,
			success: function(d) {
				var res = JSON.parse(d);
				var msg = "";
				if (res.status == 1) {
					toastr.success(res.desc);
					drawTable();
					reset_form();
					$("#modal_pendaftar").modal("hide");
				} else {
					toastr.error(res.desc);
				}
				$("#dft_simpan").html("Simpan");
				$(".btn").attr("disabled", false);
			},
			error: function(jqXHR, namaStatus, errorThrown) {
				$("#dft_simpan").html("Simpan");
				$(".btn").attr("disabled", false);
				alert('Error get data from ajax');
			}
		});

	});

	function reset_form() {
		$("#dft_id").val(0);
		$("#frm_pendaftar")[0].reset();
		$(".img-preview").attr('src', '<?= base_url("assets/dist/img/no-image.jpg"); ?>');
	}

	function hapus_pendaftar(id) {
		event.preventDefault();
		$("#id").val(id);
		$("#jdlKonfirm").html("Konfirmasi hapus data");
		$("#isiKonfirm").html("Yakin ingin menghapus data ini ?");
		$("#frmKonfirm").modal({
			show: true,
			keyboard: false,
			backdrop: 'static'
		});
	}

	function ubah_pendaftar(id) {
		event.preventDefault();
		$.ajax({
			type: "POST",
			url: "cari",
			data: "dft_id=" + id,
			dataType: "json",
			success: function(data) {
				var obj = Object.entries(data);
				obj.map((dt) => {
					if (dt[0] == "dft_sumber") {
						$("#" + dt[0]).select2("val", dt[1]);
					} else {
						$("#" + dt[0]).val(dt[1]);
					}
				});

				$(".inputan").attr("disabled", false);
				$("#modal_pendaftar").modal({
					show: true,
					keyboard: false,
					backdrop: 'static'
				});
				return false;
			}
		});
	}

	function cek_pendaftar(wa) {
		event.preventDefault();
		$.ajax({
			type: "POST",
			url: "caribywa",
			data: "dft_telp=" + wa,
			dataType: "json",
			success: function(data) {
				if (data) {
					var obj = Object.entries(data);
					obj.map((dt) => {
						if (dt[0] == "dft_sumber") {
							$("#" + dt[0]).select2("val", dt[1]);
						} else {
							$("#" + dt[0]).val(dt[1]);
						}
					});
				} else {
					$("#dft_id").val(0);
				}
				return false;
			}
		});
	}

	$("#yaKonfirm").click(function() {
		var id = $("#id").val();

		$("#isiKonfirm").html("Sedang menghapus data...");
		$(".btn").attr("disabled", true);
		$.ajax({
			type: "GET",
			url: "hapus/" + id,
			success: function(d) {
				var res = JSON.parse(d);
				var msg = "";
				if (res.status == 1) {
					toastr.success(res.desc);
					$("#frmKonfirm").modal("hide");
					drawTable();
				} else {
					toastr.error(res.desc + "[" + res.err + "]");
				}
				$(".btn").attr("disabled", false);
			},
			error: function(jqXHR, namaStatus, errorThrown) {
				alert('Error get data from ajax');
			}
		});
	});

	$('.tgl').daterangepicker({
		locale: {
			format: 'DD/MM/YYYY'
		},
		showDropdowns: true,
		singleDatePicker: true,
		"autoApdft": true,
		opens: 'left'
	});

	$(document).ready(function() {
		drawTable();
	});
</script>