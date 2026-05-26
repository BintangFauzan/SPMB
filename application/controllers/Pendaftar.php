<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// if (!isset($this->session->userdata['id_user'])) {
		// redirect(base_url("login"));
		// }
		// if ($this->session->userdata("level") <> 1) {
		// redirect(base_url("Dashboard"));
		// }

		$this->load->library('upload');
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	//Pendaftaran	
	public function tampil()
	{

		$this->session->set_userdata("judul", "Data Master");
		$ba = [
			'judul' => "Data Master",
			'subjudul' => "Pendaftaran",
		];
		$info = ['WhatsApp', 'Instagram', 'Facebook', 'Stand', 'Teman', 'Spanduk', 'Brosur', 'Pengajian Ustadz', 'Youtube', 'Lainnya'];
		$d = [
			'info' => $info,
		];
		$this->load->helper('url');
		$this->load->view('dashboard/background_atas', $ba);
		$this->load->view('dashboard/pendaftar', $d);
		$this->load->view('dashboard/background_bawah');
	}

	public function ajax_list_pendaftar()
	{
		$list = $this->pendaftar->get_datatables();
		$data = array();
		$level="";
		$no = $_POST['start'];
		foreach ($list as $pendaftar) {

			switch ($pendaftar->dft_level) {
				case 1:
					$level = "TK";
					break;
				case 2:
					$level = "SD";
					break;
				case 3:
					$level = "SMP";
					break;
				case 4:
					$level = "SMA";
					break;
			}

			if ($pendaftar->dft_transfer) {
				$foto = '<img width="100" src="' . base_url("assets/files/bukti_transfer/{$pendaftar->dft_transfer}") . '" alt="">';
			} else {
				$foto = '<img width="100" src="' . base_url("assets/dist/img/no-image.jpg") . '" alt="">';
			}

			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $foto;
			$row[] = $pendaftar->dft_nama;
			$row[] = date("d M Y", strtotime($pendaftar->dft_tgl_lahir));
			$row[] = $pendaftar->dft_nama_ayah;
			$row[] = $pendaftar->dft_nama_ibu;
			$row[] = $pendaftar->dft_kontak_ayah;
			$row[] = $pendaftar->dft_kontak_ibu;
			$row[] = wordwrap($pendaftar->dft_alamat, 20, "<br>\n");
			$row[] = $level;
			$row[] = $pendaftar->dft_created;
			$row[] = "<a href='#' onClick='hapus_pendaftar(" . $pendaftar->dft_id . ")' class='btn btn-danger btn-sm mr-3' title='Hapus data Pendaftaran'><i class='fas fa-trash'></i></a>";
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->pendaftar->count_all(),
			"recordsFiltered" => $this->pendaftar->count_filtered(),
			"data" => $data,
			"query" => $this->pendaftar->getlastquery(),
		);
		//output to json format
		echo json_encode($output);
	}

	public function cari()
	{
		$id = $this->input->post('dft_id');
		$data = $this->pendaftar->cari_pendaftar($id);
		echo json_encode($data);
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

	public function hapus($id)
	{
		$pendaftar = $this->pendaftar->cari_pendaftar($id);
		$delete = $this->pendaftar->delete('lps_pendaftar', 'dft_id', $id);
		if ($delete) {
			if ($pendaftar->dft_transfer != null) {
				unlink(FCPATH . "assets/files/bukti_transfer/{$pendaftar->dft_transfer}");
				$resp['status'] = 1;
				$resp['desc'] = "Berhasil menghapus data";
			} else {
				$resp['status'] = 1;
				$resp['desc'] = "Berhasil menghapus data";
			}
		}
		echo json_encode($resp);
	}
}
