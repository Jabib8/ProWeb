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
      <script src="<?= base_url()?>public/js/materialize.min.js"></script>
      <script src="<?= base_url()?>public/js/materialize.js"></script>
      <script type="text/javascript" src="<?= base_url()?>public/js/login.js"></script>
      <a href="<?= base_url()?>mail">Create?</a>

      <div class="container">
        <div class="col-md-12">
          <h1 class="page-header">Sent</h1>
            <div class="responsive-table">
              <table class="responsive-table">
                <thead>
                  <tr>

                    <th>Issue</th>
                    <th>Recipent</th>
                    <th>Content</th>
                    <th>State</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if($mail !== FALSE) {
                    foreach ($mail as $fila) {
                  ?>
                   <tr>
                    
                      <td><?php echo $fila->issue?></td>
                      <td><?php echo $fila->recipent?></td>
                      <td><?php echo $fila->content?></td>
                      <td><?php echo $fila->state?></td>
                      <td><a href="localhost/mail/delete/<?php echo $fila->id_mail?>">Eliminar!</a></td>
                    </tr>
                  <?php
                }
              }
              ?>
            </tbody>
          </table>
    </body>
</html>
