<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SMP extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// if (!isset($this->session->userdata['id_user'])) {
		// 	redirect(base_url("login"));
		// }
		$this->load->model('Model_Pendaftar', 'pendaftar');
		date_default_timezone_set('Asia/Jakarta');
	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function tampil()
	{
		$data = [
			'judul' => "Pendaftaran SMP",
		];
		$this->load->helper('url');
		$this->load->view('new_layout_atas', $data);
		$this->load->view('new_smp');
		$this->load->view('new_layout_bawah');
	}

	public function simpan()
	{
		$id = $this->input->post('dft_id');
		$data = $this->input->post();
		$tgl = explode("/", $data['dft_tgl_lahir']);
		$data['dft_tgl_lahir'] = "{$tgl[2]}-{$tgl[1]}-{$tgl[0]}";

		// $nmfile = "foto_" . time();


		// $config['upload_path']          = 'assets/files/bukti_transfer/';
		// $config['allowed_types']        = 'jpg|png|jpeg';
		// $config['file_name']			= $nmfile;

		// $this->load->library('upload', $config);
		// $this->upload->initialize($config);

		// if ($_FILES['dft_transfer']['name']) {
		// 	if (!$this->upload->do_upload('dft_transfer')) {
		// 		$error = array('error' => $this->upload->display_errors());
		// 		$resp['errorFoto'] = $error;
		// 	} else {
		// 		$data['dft_transfer'] = $this->upload->data('file_name');
		// 	}
		// }

		// Cek DB error
		$error = $this->db->error();
		if (!empty($error)) {
			$err = $error['message'];
		} else {
			$err = "";
		}

		if ($id == 0) {
			$insert = $this->pendaftar->simpan("lps_pendaftar", $data);
		} else {
			$insert = $this->pendaftar->update("lps_pendaftar", array('dft_id' => $id), $data);
		}

		if ($insert) {
			$resp['status'] = 1;
			$resp['desc'] = "Berhasil menyimpan data";
		} else {
			if ($id == 0) {
				$resp['status'] = 0;
				$resp['desc'] = "Ada kesalahan dalam penyimpanan!";
				$resp['error'] = $err;
			} else {
				$resp['status'] = 1;
				$resp['desc'] = "Berhasil menyimpan data";
			}
		}
		echo json_encode($resp);
	}
}
