<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!isset($this->session->userdata['id_user'])) {
			redirect(base_url("login"));
		}
		$this->load->model('Model_Dashboard', 'dashboard');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		redirect(base_url("Dashboard/tampil"));
	}

	public function tampil()
	{
		$ba = [
			'judul' => "Dashboard",
			'subjudul' => "",
		];

		$d = [
			'total_tk' => $this->dashboard->get_total_tk(),
			'total_sd' => $this->dashboard->get_total_sd(),
			'total_smp' => $this->dashboard->get_total_smp(),
		];

		$this->load->view('dashboard/background_atas', $ba);
		$this->load->view('dashboard/dashboard', $d);
		$this->load->view('dashboard/background_bawah');
	}
}
