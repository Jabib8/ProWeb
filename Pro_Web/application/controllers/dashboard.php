<?php

if (!defined('BASEPATH'))
  exit('No direct script access');

class dashboard extends CI_Controller {

  function __construct() {
    parent::__construct();

if (!$this->session->userdata('login')) {
    header("Location: http://localhost/login");
}
  }

  public function index(){
    $this->load->model('mail_model', 'mail');
  	#$id=$this->session->userdata('id');
  	#$datos['mail'] =$this->mail->getMailSent($id);
  	$this->load->view('dashboard');
  }
public function tableSent()
{
  $this->load->model('mail_model', 'mail');
  $id=$this->session->userdata('id');
  $datos['mail'] =$this->mail->getMailSent($id);
  $this->load->view('tableSent', $datos);
}
public function tablePending()
{
  $this->load->model('mail_model', 'mail');
  $id=$this->session->userdata('id');
  $datos['mail'] =$this->mail->getMailPending($id);
  $this->load->view('tableSent', $datos);
}
}
