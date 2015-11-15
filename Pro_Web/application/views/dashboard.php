<!DOCTYPE html>
<html>
<head>
<title>Create Account</title>
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?= base_url()?>public/css/materialize.min.css">
<link rel="stylesheet" href="<?= base_url()?>public/css/materialize.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--  <link rel="stylesheet" href="<?=  base_url()?>public/css/login.css"/>-->
</head>
<body >
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>public/js/materialize.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>public/js/materialize.js"></script>
<script type="text/javascript" src="<?= base_url()?>public/js/dashboard.js"></script>
<nav>
  <ul class="left hide-on-med-and-down">
    <li><a href="<?= base_url()?>mail/getMailSent">Home</a></li>
    <li><a  href="<?= base_url()?>mail">Create Mail</a></li>
  </ul>
  <ul class="right hide-on-med-and-down">
    <li><a href="<?= base_url()?>login">log out</a></li>
  </ul>
  <ul id="slide-out" class="side-nav">
    <li><a href="<?= base_url()?>mail/getMailSent">Home</a></li>
    <li><a  href="<?= base_url()?>mail">Create Mail</li>
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
</script>
<div class="col s6">
  <div class="container">
    <h3 class="page-header">Sent</h3>
      <table class="responsive-table highlight bordered centered">
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
              <tr onclick="Materialize.toast('<?php echo $fila->content?> ', 4000)">
                <td><?php echo $fila->recipent?></td>
                <td><a href="delete/<?php echo $fila->id_mail?>">Delete!</a></td>
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
    </div>
  </body>
  </html>
