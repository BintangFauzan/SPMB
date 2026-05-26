<?php

class Model_Pendaftar extends CI_Model
{
	var $table = 'lps_pendaftar';
	var $column_order = array('dft_id', 'dft_nama', 'dft_tgl_lahir', 'dft_nama_ayah', 'dft_nama_ibu', 'dft_kontak_ayah', 'dft_kontak_ibu', 'dft_alamat', 'dft_level'); //set column field database for datatable orderable
	var $column_search = array('dft_nama',); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('dft_nama' => 'asc'); // default order  	private $db_sts;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		$role = $this->session->userdata('role');
		$this->db->from($this->table);

		if ($this->session->userdata('level') == 3) {
			$this->db->where("dft_level", $role);
		}

		$this->db->where("YEAR(dft_created) =".date('Y'));

		$this->db->order_by('dft_created','desc');

		$i = 0;

		foreach ($this->column_search as $item) // loop column 
		{
			if ($_POST['search']['value']) // if datatable send POST for search
			{
				if ($i === 0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if (isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			foreach ($this->order as $key => $order) {
				$this->db->order_by($key, $order);
			}
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if ($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpan($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function get_pendaftar()
	{
		$this->db->from("lps_pendaftar");
		$query = $this->db->get();

		return $query->result();
	}

	public function cari_pendaftar($id)
	{
		$this->db->from("lps_pendaftar");
		$this->db->where("dft_id", $id);
		$query = $this->db->get();

		return $query->row();
	}

	public function update($table, $where, $data)
	{
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete($table, $field, $id)
	{
		$this->db->where($field, $id);
		$this->db->delete($table);

		return $this->db->affected_rows();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);

		return $this->db->count_all_results();
	}

	public function getlastquery()
	{
		$query = str_replace(array("\r", "\n", "\t"), '', trim($this->db->last_query()));

		return $query;
	}
}
