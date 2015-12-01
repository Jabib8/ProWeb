<?php
$id="$argv[1]";
mysql_connect("localhost","jabib","12345");
@mysql_select_db("proyecto") or die("Error de conexion");
$sentencia="select id_mail, issue, recipent, content from mail
where state='pending' and user_id=".$id."";
$result=mysql_query($sentencia);
$num=mysql_num_rows($result);
if ($num<=0) {
  echo "No hay correos pendientes";
  die;
}
$i=0;
require_once('phpmailer/class.phpmailer.php');
include ('phpmailer/class.smtp.php');
#require('PHPMailerAutoload.php');
$correo = new PHPMailer();
$correo->IsSMTP();
$correo->SMTPAuth = true;
$correo->SMTPSecure = 'tls';
$correo->Host = "smtp.gmail.com";
$correo->Port = 25;
$correo->Username   = "jabibleiton@gmail.com";
$correo->Password   = "24947783";
$correo->SetFrom("jabibleiton@gmail.com", "SafeMail");
$correo->AddReplyTo("jabibleiton@gmail.com","SafeMail");
while ($i<$num) {
	$issue=mysql_result($result,$i,"issue");
	$recipent=mysql_result($result,$i,"recipent");
  $content=mysql_result($result,$i,"content");
	$id_mail=mysql_result($result,$i,"id_mail");
  //code send email
  $array=split('[ ]', $issue);
  if (count($array)>0) {#######
    for ($i=0; $i <count($array); $i++) {
      $correo->AddAddress("$array[$i]", "");
      $correo->Subject = "$recipent";
      $correo->Body="$content";
      $correo->AddAttachment("images/phpmailer.gif");
      if(!$correo->Send()) {
        echo "Hubo un error: " . $correo->ErrorInfo;
      } else {
        echo "Mensaje enviado con exito. ";
        updateMail($id_mail);
      }
    }
  }else{  ###
    $correo->AddAddress("$issue", "");
    $correo->Subject = "$recipent";
    $correo->Body="$content";
    $correo->AddAttachment("images/phpmailer.gif");
    if(!$correo->Send()) {
      echo "Hubo un error: " . $correo->ErrorInfo;
    } else {
      echo "Mensaje enviado con exito. ";
      updateMail($id_mail);
    }
  }##
	$i++;
}
function updateMail($id)
{
  $sentencia="update mail set state='sent'
  where id_mail=".$id."";
  $result=mysql_query($sentencia);
}
 ?>
