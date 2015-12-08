<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mail extends CI_Controller {

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
     header("Location: http://localhost/dashboard/tablePending");
	}
	public function getMailSent()
	{
	$this->load->model('mail_model', 'mail');
	$id=$this->session->userdata('id');
	$datos['mail'] =$this->mail->getMailSent($id);
	$this->load->view('dashboard', $datos);
	}
/*public function addBr($value)
{
	$length = strlen($value);
	for ($i=0; $i < $length; $i++) {
		if ($value[$i]=='\n') {
			$value[$i]='</br>';
		}
	}
	return $value;
}*/
	public function delete($id)
	{
			$this->load->model('mail_model', 'mail');
	$this->mail->delete($id);
	  header("Location: http://localhost/dashboard/tablePending");
	}

	public function edit($id)
	{
			$this->load->model('mail_model', 'mail');
			$datos['mail']=$this->mail->getInfo($id);
		$this->load->view('edit',$datos);
	}
	public function update()
	{
		$issue = $this->input->post('issue');
		$id = $this->input->post('id');
		$recipent = ($this->input->post('recipent'));
		$content = ($this->input->post('content'));
   $this->load->model('mail_model', 'mail');
	 $this->mail->update($issue,$recipent,$content,$id);
	 	  header("Location: http://localhost/dashboard/tablePending");
	}
}
