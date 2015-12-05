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
public function getMailSent($id)
{
	$query = $this->db->query("SELECT id_mail,issue,recipent,content,state FROM mail WHERE
		 user_id=$id and state='sent'");;
     if( $query->num_rows > 0 )
       return $query->result();
     else
       return FALSE;
}
public function delete($id)
{
	$this->db->delete('mail', array('id_mail' => $id));
}

public function getMailPending($id)
{
	$query = $this->db->query("SELECT id_mail,issue,recipent,content,state FROM mail WHERE user_id=$id
		and state='pending'");;
     if( $query->num_rows > 0 )
       return $query->result();
     else
       return FALSE;
}
public function getInfo($id)
{
	$query = $this->db->query("SELECT id_mail,issue,recipent,content FROM mail WHERE id_mail=$id");
     if( $query->num_rows > 0 )
       return $query->result();
     else
       return FALSE;
}


public function update($issue,$recipent,$content,$id)
{
/*$data = array('issue' => $issue,
                 'recipent'=>$recipent,
							    'content'=>$content,);
$this->db->where('id_mail', $id);
$this->db->update('mail', $data);
*/
$query = $this->db->query("UPDATE mail set issue='$issue',recipent='$recipent'
	,content='$content' WHERE id_mail=".$id.";");
return true;
}

}
