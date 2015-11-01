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

        <div class="row">
            <form class="col s6">
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">person_pin</i>
                  <input id="name" type="text" class="validate" required="hi">
                  <label for="name">Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name"  type="text" class="validate" required>
                  <label for="last_name" >Last Name</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
           <input id="email" type="email" class="validate" required>
           <label for="email" data-error="wrong" data-success="right">Email</label>
         </div>
         <div class="input-field col s12 center">
         <button class="btn waves" type="submit" action="post" name="action">Create
     <i class="material-icons right">send</i>
          </button>
        </div>
              </div>
            </form>
          </div>

      </body>
  </html>
