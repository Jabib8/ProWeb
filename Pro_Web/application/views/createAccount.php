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
        <?php # echo $session_id = $this->session->userdata('id'); ?>
        <nav>
          <ul class="left hide-on-med-and-down">
            <li><a href="<?= base_url()?>login">Home</a></li>
            <li><a  href="<?= base_url()?>user">Create Accuount</a></li>
          </ul>
          <ul id="slide-out" class="side-nav">
            <li><a href="<?= base_url()?>login">Home</a></li>
            <li><a  href="<?= base_url()?>user">Create Accuount</a></li>
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
        <div class="row">
            <form class="col s6" method="post" action="user/create">
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">person_pin</i>
                  <input name="name" type="text" class="validate" required="hi">
                  <label for="name">Name</label>
                </div>
                <div class="input-field col s6">
                  <input name="last_name"  type="text" class="validate" required>
                  <label for="last_name" >Last Name</label>
                </div>
                <div class="input-field col s9">
                    <i class="material-icons prefix">email</i>
           <input name="email" type="email" class="validate" required>
           <label for="email" data-error="wrong" data-success="right">Email</label>
         </div>
         <div class="row">
           <div class="input-field col s7">
           <i class="material-icons prefix">lock_open</i>
           <input id="pass" name="pass" type="password" class="validate" required>
           <label id="label" for="pass">Password</label>
         </div>
       </div>
         <div class="input-field col s12 center">
         <button class="btn waves" type="submit"  name="action">Create
     <i class="material-icons right">send</i>
          </button>
        </div>
              </div>
            </form>
          </div>
      </body>
  </html>
