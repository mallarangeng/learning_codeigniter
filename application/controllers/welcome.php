<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function home()
	{
		$this->load->view('welcome_home');
	}
	public function profile()
	{
		$this->load->view('welcome_profile');
	}
	public function lihat_biodata()
	{
		$this->load->view('biodata');
	}
	public function lihat_info()
		{
		echo "<head><title>Pelatihan Code Igniter 2014</title></head>";
		echo "<h1>Pelatihan Code Igniter 2014</h1>";
		echo "<h3>Presented by Lab Basis Data Ilmu Komputer UPI</h3>";
		echo "CodeIgniter merupakan salah satu <i>web framework</i> PHP yang sangat mudah dan menarik.";
		echo "Saya menghadiri ini untuk mulai mengenal dan mempelajari CodeIgniter";
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */