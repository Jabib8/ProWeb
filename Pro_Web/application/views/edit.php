<!DOCTYPE html>
<html>
<head>
<title>Edit Mail</title>
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?= base_url()?>public/css/materialize.min.css">
<link rel="stylesheet" href="<?= base_url()?>public/css/materialize.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?=  base_url()?>public/css/dashboard.css"/>
</head>
<body >
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>public/js/materialize.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>public/js/materialize.js"></script>
<script type="text/javascript" src="<?= base_url()?>public/js/dashboard.js"></script>

<script type="text/javascript">
function seeContent() {
var x = document.getElementById("select").value;
document.getElementById("text").innerHTML = x;
}
function seeContentF(fr,content) {
var x = fr;
var y = content;
document.getElementById("text").innerHTML ='<h6>from: '+x+'</h6>'+'<h5>'+y+'</h5>';
}
$(document).ready(function() {
$('select').material_select();
});
function setValuebtn(id) {
document.getElementById("btnDelete").value = id;

}
function deleteMail() {
var id=document.getElementById("btnDelete").value;
//sentalert("<?php echo base_url()?>mail/delete/"+id+"");
location.href="<?php echo base_url()?>mail/delete/"+id+"";
}
</script>
<?php
foreach ($mail as $fila) {
?>
<div align="center" class="" id="divformEdit" >
  <form id="frlog" class="col s6"  action="<?php echo base_url()?>mail/update" method="post">
    <input name="id" value="<?php echo $fila->id_mail?>">
    <div class="row">
 <div class="row">
   <div class="input-field col s5">
   <i class="material-icons prefix">account_circle</i>
   <input id="issue" name="issue" type="text" value="<?php echo $fila->issue?>" class="validate" required>
   <label for="issue" >Issue</label>
 </div>
</div>
 <div class="row">
   <div class="input-field col s5">
   <i class="material-icons prefix">error_outline</i>
   <input id="recipent" name="recipent" type="text" value="<?php echo $fila->recipent?>" class="validate" required>
   <label id="label" for="recipent">Recipent</label>
 </div>
</div>
<div class="row">
  <div class="input-field col s8">
  <i class="material-icons prefix">mode_edit</i>
  <input type="text"  id="content" name="content" value="<?php echo $fila->content?>"  required></input>
  <label style="font-size:18pt;" for="textarea2">Content</label>
  </div>
</div>
<div class="row">
 <div class="input-field col s5">
   <button id="btnsend" class="btn waves-effect waves-light" type="summit"  name="action">Update
<i class="material-icons right">send</i>
</button>
</div>
</div>
</div>
  </form>
  </div>
<?php }
?>
</body>
</html>
