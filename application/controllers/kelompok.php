<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelompok extends CI_Controller {


	public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('input');
			$this->load->model('kelompok/m_kelompok');
		}
		// bagian pengelolaan agenda
		public function index()
		{
			$data['data_kelompok']=$this->m_kelompok->select_all()->result();
			$this->load->view('kelompok/v_kelompok',$data);
		}
		public function form_kelompok()
		{
			$this->load->view('kelompok/v_kelompok_form');
		}
		public function proses_tambah_kelompok(){
			$data['id_kelompok']=$this->input->post('id_kelompok');
			$data['nm_kelompok']=$this->input->post('nm_kelompok');
			$data['parent']=$this->input->post('parent');
			$data['alamat']=$this->input->post('alamat');
			$data['nohp']=$this->input->post('nohp');
			$data['penjab']=$this->input->post('penjab');
			$data['password']=$this->input->post('password');
			$this->m_kelompok->insert_kelompok($data);
			redirect(site_url('kelompok'));
		}
		public function ubah($id_kelompok){
			$data['kelompok']=$this->m_kelompok->select_id($id_kelompok)->row();
			$this->load->view('kelompok/v_kelompok_update',$data);
		}
	
	
}
?>

