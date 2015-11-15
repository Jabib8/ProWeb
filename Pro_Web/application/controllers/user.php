<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

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
	 function __construct() {
		 parent::__construct();

	 }
	public function index()
	{
		#if (!$this->session->userdata('login')) {
		#		header("Location: http://localhost/login");
		#}
		$this->load->view('createAccount');
	}
	 public function create()
	{
			$this->load->model('user_model', 'user');
		$name = $this->input->post('name');
		$last_name = ($this->input->post('last_name'));
		$email = ($this->input->post('email'));
		$pass = ($this->input->post ('pass'));
		$this->user->create($name, $last_name,$email,md5($pass));
	$id= 	$this->user->getMaxid();
		$this->user->correoVerificar($email,$name,$id);
	}

public function check($id)
{
	$this->load->model('user_model', 'user');
	$this->user->updateCheck($id);
}


}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
