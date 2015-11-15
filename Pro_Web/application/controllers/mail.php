<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mail extends CI_Controller {

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
		$this->load->view('mail');
	}
	 public function create()
	{
		$this->load->model('mail_model', 'mail');
		$issue = $this->input->post('issue');
		$recipent = ($this->input->post('recipent'));
		$content = ($this->input->post('content'));
    $id_user=$this->session->userdata('id');
		$this->mail->create($issue, $recipent,$content,$id_user);
	}
	public function getMailSent()
	{
	$this->load->model('mail_model', 'mail');
	$id=$this->session->userdata('id');
	$datos['mail'] =$this->mail->getMailSent($id);
	$this->load->view('dashboard', $datos);
	}

	public function delete($id)
	{
			$this->load->model('mail_model', 'mail');
	$this->mail->delete($id);
	  header("Location: http://localhost/mail/getMailSent");
	}
}
