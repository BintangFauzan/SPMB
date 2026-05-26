<?php
// File Size 
function file_size($size)
{
	$ms = "B";
	$sz = number_format($size, 2, ",", ".");
	if ($size > 1024) {
		$sz = number_format($size / 1024, 2, ",", ".");
		$ms = "KB";
	}
	if ($size > 1048576) {
		$sz = number_format($size / 1048576, 2, ",", ".");
		$ms = "MB";
	}
	if ($size > 1073741824) {
		$sz = number_format($size / 1073741824, 2, ",", ".");
		$ms = "GB";
	}
	if ($size > 1099511627776) {
		$sz = number_format($size / 1099511627776, 2, ",", ".");
		$ms = "TB";
	}
	return "{$sz} {$ms}";
}

function tanggal($a)
{
	$arrBulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	$tgls = explode("-", $a);
	$tgl = $tgls[2];
	$bln = $arrBulan[(int) $tgls[1]];
	$thn = $tgls[0];
	return "$tgl $bln $thn";
}
?>

<div class="col-lg-12">
	<div class="card">
		<!-- <div class="card-header">
                            <h5>Data Penjemputan</h5>
                        </div> -->
		<div class="card-body">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="d-flex justify-content-center my-3">
						<img class="img-fluid" src="<?= base_url("assets"); ?>/dist/logo/ilustrasi.svg" width="70%">
					</div>
				</div>
				<div class="col-lg-8 col-md-12">
					<h4 class="text-success">Hello <?= $this->session->userdata("username"); ?>,</h4>
					<h4 class="text-success">Selamat Datang di Dashboard Pendaftaran Khoiru Ummah</h4>
					<hr>
					<p>Bekerja dengan Fokus dan Jujur adalah cara bekerja seorang muslim. Tuntaskan kewajiban kamu hari ini dan persiapkan diri untuk masa yang akan datang</p>
					<div class="row">
						<div class="col-lg-4 col-md-12 mb-3">
							<div class="row">
								<div class="col-3">
									<a class='btn' style="background-color: #28A745;font-size: 25px;border-radius: 10px;">
										<i class="fas fa-calendar text-light"></i>
									</a>
								</div>
								<div class="col-9">
									<span class="info-box-text">Jumlah Pendaftar TK</span><br>
									<span class="info-box-number"><?= number_format($total_tk, 0, ",", "."); ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 mb-3">
							<div class="row">
								<div class="col-3">
									<a class='btn' style="background-color: #28A745;font-size: 25px;border-radius: 10px;">
										<i class="fas fa-file text-light"></i>
									</a>
								</div>
								<div class="col-9">
									<span class="info-box-text">Jumlah Pendaftar SD</span><br>
									<span class="info-box-number"><?= number_format($total_sd, 0, ",", "."); ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="row">
								<div class="col-3">
									<a class='btn' style="background-color: #28A745;font-size: 25px;border-radius: 10px;">
										<i class="fas fa-file text-light"></i>
									</a>
								</div>
								<div class="col-9">
									<span class="info-box-text">Jumlah Pendaftar SMP</span><br>
									<span class="info-box-number"><?= number_format($total_smp, 0, ",", "."); ?></span>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="col-12">
						<div class="text-center">
							<a href="<?= base_url("TK/") ?>" class="btn btn-info my-2">Go To Website</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ basic-table ] end -->
</div>

<!-- Custom Java Script -->
<script>
	$(document).ready(function() {});
</script>