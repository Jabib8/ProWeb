<!DOCTYPE html>
<html>
    <head>
        <title>Mail</title>
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
      // Hide sideNav
      $('.button-collapse').sideNav('hide');

        $('.button-collapse').sideNav({
            menuWidth: 300,
            edge: 'left',
            closeOnClick: true
          }
        );
      </script>
<fieldset class="flow-text" style=" margin-left: 5%;margin-right: 5%; border: none;">
      <form id="frlog" class="col s6"  action="mail/create" method="post">
        <div class="row">
     <div class="row">
       <div class="input-field col s5">
       <i class="material-icons prefix">account_circle</i>
       <input id="issue" name="issue" type="text" class="validate" required>
       <label for="issue" >Issue</label>
     </div>
    </div>
     <div class="row">
       <div class="input-field col s5">
       <i class="material-icons prefix">lock_open</i>
       <input id="recipent" name="recipent" type="text" class="validate" required>
       <label id="label" for="recipent">Recipent</label>
     </div>
    </div>
    <div class="row">
      <div class="input-field col s8">
      <i class="material-icons prefix">lock_open</i>
      <textarea style="font-size:18pt;" id="content" name="content" class="materialize-textarea" required></textarea>
      <label style="font-size:18pt;" for="textarea2">Content</label>
      </div>
   </div>
    <div class="row">
     <div class="input-field col s5">
       <button id="btnsend" class="btn waves-effect waves-light" type="summit"  name="action">Create
    <i class="material-icons right">send</i>
    </button>
    </div>
    </div>
    </div>
      </form>
</fieldset>
    </body>
</html>
