<?php
class Home extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Welcome!';

		$data['data_diri'] = $this->db->get('data_diri')->result_array();
		$data['work'] = $this->db->get('work')->result_array();
		
		$data['organization'] = $this->db->get('organization')->result_array();
		
		$this->load->view('tamplates/headerMarvel', $data);
		$this->load->view('home/index', $data); 
		$this->load->view('tamplates/footerMarvel'); 
	}

	//halaman cast dari web marvel
	public function design()
	{
		$data['judul'] = 'GRAPHIC DESIGN';

		$data['design'] = $this->db->get('design')->result_array();
		
		$this->load->view('tamplates/headerMarvel', $data); 
		$this->load->view('home/design', $data); 
		$this->load->view('tamplates/footerMarvel'); 
	}

	//halaman movie dari web marvel 
	public function web()
	{
		$data['judul'] = 'WEBSITE';

		$data['web'] = $this->db->get('web')->result_array();

		$this->load->view('tamplates/headerMarvel', $data); 
		$this->load->view('home/web', $data); 
		$this->load->view('tamplates/footerMarvel'); 
	}

	public function pengalaman()
	{
		$data['judul'] = 'Experience';

		$data['work'] = $this->db->get('work')->result_array();
		$data['organization'] = $this->db->get('organization')->result_array();

		$this->load->view('tamplates/headerMarvel', $data); 
		$this->load->view('home/pengalaman', $data); 
		$this->load->view('tamplates/footerMarvel'); 
	}

}
