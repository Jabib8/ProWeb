<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mail_model extends CI_Model {


	 function __construct() {
     parent::__construct();

   }

public function create($issue, $recipent,$content,$id_user)
{
  $data = array(
      'user_id' => $id_user,
      'issue' => $issue,
      'recipent' => $recipent,
      'content' => $content,
      'state' => 'pending',

      );
  $this->db->insert('mail',$data);

}
/*
public function correoVerificar($mail,$name,$id)
{

  $this->load->library("email");
  $configGmail = array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.gmail.com',
    'smtp_port' => 465,
    'smtp_user' => 'jabibleiton@gmail.com',
    'smtp_pass' => '24947783',
    'mailtype' => 'html',
    'charset' => 'utf-8',
    'newline' => "\r\n"
  );
  $this->email->initialize($configGmail);
  $this->email->from('SafeMail');
  $this->email->to($mail);
  $this->email->subject('Verificacion');
  $this->email->message('Hi '.$name.'<br> <h2>Vaya al link para verificar su cuenta.</h2><br>
  <a href="localhost/user/check/'.$id.'">Verificar!</a>'  );
  $this->email->send();
}

public function getMaxid()
{
  $this->db->select_max('id_user');
  $query = $this->db->get('users');
$row = $query->row_array();
  return $row['id_user'];

}
public function updateCheck($id)
{
  $data = array('checked' => true,);
$this->db->where('id_user', $id);
$this->db->update('users', $data);
}
*/
}
