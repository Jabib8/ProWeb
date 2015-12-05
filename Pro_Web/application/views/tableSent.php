<!DOCTYPE html>
<html>
<head>
<title>Create Account</title>
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
<div id="left">
<div class="col s12" >
<!--  <h3 id="sent" class="page-header">Sent</h3>-->
<div class="input-field col s8 center">
<select class="browser-default" id="select" onchange="seeContent()" >
<option value="" disabled selected>Select a mail</option>
<?php
foreach ($mail as $fila) {
?>
<option onclick="setValuebtn(<?php echo $fila->id_mail?>)" value="<?php echo "<h6>from:$fila->issue</h6> \n
<h4>$fila->content</h5>"?>"><?php echo $fila->recipent?></option>
<?php
}
?>
</select>
</div>
<div class="container">
<table id="table_sent" class="responsive-table highlight bordered centered">
  <thead>
    <tr>
      <th>Recipent</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if($mail !== FALSE) {
      foreach ($mail as $fila) {
        $state= $fila->state;
        ?>
        <!--<tr onclick="Materialize.toast('<?php echo $fila->content?> ', 4000)">-->
        <tr id=" <?php $fila->id_mail;?>" onclick="seeContentF('<?php echo $fila->issue?>' , '<?php echo $fila->content?>')">
          <td><?php echo $fila->recipent?></td>
          <td><a href="<?php echo base_url()?>mail/delete/<?php echo $fila->id_mail?>">Delete!</a></td>
          <?php
          if($state=="pending"){?>
         <td><a href="<?php echo base_url()?>mail/edit/<?php echo $fila->id_mail?>">Edit!</a></td>
      <?php  }?>
        </tr>
        <?php
      }
      ?>
      <?php
    }else{
      ?>
      <tr>
        <td><?php echo "No     hay ";?></td>
        <td><?php echo "datos";?></td>
        <?php }?>
      </tbody>
    </table>
  </div>
  <div class="center" id="text"></div>
  <div class="center">
    <button value="1" type="button" onclicK="deleteMail()" class="btn waves center" id="btnDelete">Delete</button>
  </div>
</div>
</div>
<!---->


</body>
</html>
