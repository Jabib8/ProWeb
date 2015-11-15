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
  header("Location: http://localhost/mail/getMailSent");
  }

}
