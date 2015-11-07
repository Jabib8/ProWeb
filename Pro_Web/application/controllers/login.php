<?php

if (!defined('BASEPATH'))
  exit('No direct script access');

class login extends CI_Controller {

  function __construct() {
    parent::__construct();

    $this->load->model('login_model');
    $this->load->helper('form');
    $this->load->library(array('session','form_validation'));
  }

  public function index(){
    $this->login();
  }

  public function login(){
    if ($this->session->userdata('id_user') == false) :

    //Validar los campos del formulario
    $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean');
    $this->form_validation->set_rules('pass', 'Password', 'required|trim|xss_clean');

    if ($this->form_validation->run() == false) :
      $this->load->view('login');
    else:
      //Asignar variables a lo obtenido desde el formulario
      $usr = $this->input->post('email');
      $pass = ($this->input->post('pass'));
      $ingreso = $this->login_model->login($usr, $pass);

      switch ($ingreso):
        case 0:
          $this->load->view('login');
        break;
        case 1:
          $data = array(
            'email' => $usr
          );
          $this->load->view('CreateAccount', $data);
        break;
      endswitch;
    endif;
  endif;
  }
}
