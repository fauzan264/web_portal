<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __Construct()
	{
		parent::__Construct();
		$this->load->model('m_dashboard');
	}

	public function index()
	{
		$data = array(
				'title' 				=> 'Web Portal - Terdepan, Tajam, Terpecaya dan Berimbang',
				'iklan_header'			=>	$this->m_dashboard->getdataiklanheader(),
				'iklan_sidebar1'		=>	$this->m_dashboard->getdataiklansidebar1(),
				'iklan_sidebar2'		=>	$this->m_dashboard->getdataiklansidebar2(),
				'iklan_sidebar3'		=>	$this->m_dashboard->getdataiklansidebar3(),
				'iklan_footer'			=>	$this->m_dashboard->getdataiklanfooter()
		);
		$this->load->view('halaman_utama',$data);
	}
}
?>