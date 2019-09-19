<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
	public function getdataiklanheader()
	{
		return $this->db->query("SELECT * FROM tbl_masterdataiklan where tata_letak_iklan = 'atas' ")->row_array();
	}

	public function getdataiklansidebar1()
	{
		return $this->db->query("SELECT * FROM tbl_masterdataiklan where tata_letak_iklan = 'kanan1' ")->row_array();
	}

	public function getdataiklansidebar2()
	{
		return $this->db->query("SELECT * FROM tbl_masterdataiklan where tata_letak_iklan = 'kanan2' ")->row_array();
	}

	public function getdataiklansidebar3()
	{
		return $this->db->query("SELECT * FROM tbl_masterdataiklan where tata_letak_iklan = 'kanan3' ")->row_array();
	}

	public function getdataiklanfooter()
	{
		return $this->db->query("SELECT * FROM tbl_masterdataiklan where tata_letak_iklan = 'bawah' ")->row_array();
	}
}