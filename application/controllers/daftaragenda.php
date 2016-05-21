<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftaragenda extends CI_Controller {


	public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('input');
			$this->load->model('daftaragenda/agenda_model');
		}
		// bagian pengelolaan agenda
		public function index()
		{
			$data['daftar_agenda'] = $this->agenda_model->select_all()->result();
			$this->load->view('daftaragenda/daftar_agenda', $data);
		}
	
	
}

