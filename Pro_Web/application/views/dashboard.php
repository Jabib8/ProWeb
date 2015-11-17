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
<nav>
  <ul class="left hide-on-med-and-down">
    <li><a href="<?= base_url()?>dashboard">Home</a></li>
    <li><a  href="<?= base_url()?>mail">Create Mail</a></li>
  </ul>
  <ul class="right hide-on-med-and-down">
    <li><a href="<?= base_url()?>login">log out</a></li>
  </ul>
  <ul id="slide-out" class="side-nav">
    <li><a href="<?= base_url()?>dashboard">Home</a></li>
    <li><a  href="<?= base_url()?>mail">Create Mail</a></li>
    <li><a href="<?= base_url()?>login">log out</a></li>
  </ul>
  <a  href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
</nav>
<script type="text/javascript">
$('.button-collapse').sideNav('show');
$('.button-collapse').sideNav('hide');
  $('.button-collapse').sideNav({
      menuWidth: 300,
      edge: 'left',
      closeOnClick: true
    }
  );
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

</script>
<div id="left">
<div class="col s12" >
  <h3 id="sent" class="page-header">Sent</h3>
  <div class="input-field col s8 center">
<select class="browser-default" id="select" onchange="seeContent()" >
<option value="" disabled selected>Select a mail</option>
  <?php
    foreach ($mail as $fila) {
      ?>
<option value="<?php echo "<h6>from:$fila->issue</h6> \n
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
              ?>
              <!--<tr onclick="Materialize.toast('<?php echo $fila->content?> ', 4000)">-->
              <tr onclick="seeContentF('<?php echo $fila->issue?>' , '<?php echo $fila->content?>')">
                <td><?php echo $fila->recipent?></td>
                <td><a href="mail/delete/<?php echo $fila->id_mail?>">Delete!</a></td>
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
    </div>
    </div>
  </body>
  </html>
