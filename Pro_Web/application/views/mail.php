<!DOCTYPE html>
<html>
    <head>
        <title>Mail</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?= base_url()?>public/css/materialize.min.css">
        <link rel="stylesheet" href="<?= base_url()?>public/css/materialize.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?=  base_url()?>public/css/dashboard.css"/>
    </head>
    <body >
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="<?= base_url()?>public/js/materialize.min.js"></script>
      <script src="<?= base_url()?>public/js/materialize.js"></script>
      <script type="text/javascript" src="<?= base_url()?>public/js/login.js"></script>

      <script type="text/javascript">
      ///////7jjjjjjjjjjjjjjjjjjjjjjjj
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
      <div class="center">
<fieldset class="flow-text" style=" margin-left: 5%;margin-right: 5%; border: none;">
      <form id="frlog" class="col s12"  action="mail/create" method="post">
        <div class="row">
     <div class="row">
       <div class="input-field col s8">
       <i class="material-icons prefix">account_circle</i>
       <input id="issue" name="issue" type="text" class="validate" required>
       <label for="issue" >Issue</label>
     </div>
    </div>
     <div class="row">
       <div class="input-field col s9">
       <i class="material-icons prefix">error_outline</i>
       <input id="recipent" name="recipent" type="text" class="validate" required>
       <label id="label" for="recipent">Recipent</label>
     </div>
    </div>
    <div class="row">
      <div class="input-field col s10">
      <i class="material-icons prefix">mode_edit</i>
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
</div>
    </body>
</html>
