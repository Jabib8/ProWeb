<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

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

   function login($usr, $pass) {
     $this->db->where('email', $usr);
		 $this->db->where('password', $pass);
     $this->db->where('checked', true);
     $query = $this->db->get('users');
     if ($query->num_rows() == 0) :
       return false;
     else :
       return $query->row();
     endif;
   }
	 function errorLogin($usr, $pass) {
		 $this->db->where('email', $usr);
		$this->db->where('password', $pass);
		 $this->db->where('checked', false);
		 $query = $this->db->get('users');
		 if ($query->num_rows() == 0) :
			 return false;
		 else :
			 return true;
		 endif;
	 }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
