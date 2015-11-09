  <!DOCTYPE html>
  <html>
      <head>
          <title>SafeMail</title>
          <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="<?= base_url()?>public/css/materialize.min.css">
          <link rel="stylesheet" href="<?= base_url()?>public/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="<?=  base_url()?>public/css/login.css"/>
      </head>
      <body >
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="<?= base_url()?>public/js/materialize.min.js"></script>
        <script src="<?= base_url()?>public/js/materialize.js"></script>
        <script type="text/javascript" src="<?= base_url()?>public/js/login.js"></script>

          <div id="left" class="card-panel teal lighten-4" >
            <h3 id="log" > Login </h3>
             <?= form_open('login/login'); ?>
            <form id="frlog" class="col s12"  action="" method="get">
              <div class="row">
           <div class="row">
             <div class="input-field col s12">
             <i class="material-icons prefix">account_circle</i>
             <input id="email" name="email" type="email" class="validate" required>
             <label for="email" data-error="wrong" data-success="right">Email</label>
           </div>
         </div>
           <div class="row">
             <div class="input-field col s8">
             <i class="material-icons prefix">lock_open</i>
             <input id="pass" name="pass" type="password" class="validate" required>
             <label id="label" for="pass">Password</label>
           </div>
         </div>

         <div class="row">
           <div class="input-field col s12">
             <button id="btnlogin" class="btn waves-effect waves-light"  name="action">Go!
         <i class="material-icons right">send</i>
       </button>
         </div>
       </div>
          </div>
            </form>
            <?= form_close(); ?>
           <?= validation_errors(); ?>
          </div>

  <div id="right" >

          <div class="row">
            <div id="card" class="col s12 m7">
              <div class="card">
                <div class="card-image">
                <img src="<?= base_url()?>public/img/fondo.jpg"/>
                  <span class="card-title">What is this?</span>
                </div>
                <div class="card-content">
                  <p>This is an email manager.<br>
                     It's easy to use.<br>
                     Simple but complete.</p>
                </div>
                <div class="card-action">
                  <a href="<?= base_url()?>user">Create a new account?</a>
                </div>
              </div>
            </div>
          </div>

  </div>

      </body>
  </html>
