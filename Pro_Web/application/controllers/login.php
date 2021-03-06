<?php

if (!defined('BASEPATH'))
  exit('No direct script access');

class login extends CI_Controller {

  function __construct() {
    parent::__construct();
$this->load->library('session');
    $this->load->model('login_model');
    $this->load->helper('form');
    $this->load->library(array('session','form_validation'));
    $data = array(
      'login'=> false
    );
    $this->session->set_userdata($data);
  }

  public function index(){
    $this->login();
  }

  public function login(){
//Validar los campos del formulario
    $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean');
    $this->form_validation->set_rules('pass', 'Password', 'required|trim|xss_clean');

    if ($this->form_validation->run() == false) {
      $data1 = array(
        'message' => ' '
      );
      $this->load->view('login',$data1);

    }
    else{
      //Asignar variables a lo obtenido desde el formulario
      $usr = $this->input->post('email');
      $pass = ($this->input->post('pass'));
      $ingreso = $this->login_model->login($usr, md5($pass));
      $num=0;
if ($ingreso!=false) {
  $num=1;
}
      switch ($num){
        case 0:
        if ($this->login_model->errorLogin($usr, md5($pass))==true) {
          $data = array(
            'message' => 'Account not verify'
          );
        }
        else{
          $data = array(
            'message' => 'Username or password incorrect'
          );
        }

        $this->load->view('login',$data);
        #  header("Location: http://localhost/login");
        break;
        case 1:
        $data = array(
          'email' => $usr,
          'id' => $ingreso->id_user,
          'login'=> true
        );
        $this->session->set_userdata($data);
        header("Location: http://localhost/dashboard");
        break;

    }
  }
  }
}
