<!DOCTYPE html>
<html>
    <head>
        <title>SafeMail</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link media="all" type="text/css" rel="stylesheet" href="http://localhost:8000/css/login.css">
    </head>
    <body >
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
          <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script type="text/javascript" src="http://localhost:8000/js/login.js"></script>

        <div id="left" class="card-panel teal lighten-4" >
          <h3 id="log" > Login </h3>
          <form id="frlog" class="col s12"  action="" method="get">
            <div class="row">
         <div class="row">
           <div class="input-field col s12">
           <i class="material-icons prefix">account_circle</i>
           <input id="name" name="user" type="text" class="validate">
           <label for="name">User</label>
         </div>
       </div>
         <div class="row">
           <div class="input-field col s8">
           <i class="material-icons prefix">lock_open</i>
           <input id="pass" name="pass" type="password" class="validate">
           <label id="label" for="pass">Password</label>
         </div>
       </div>

       <div class="row">
         <div class="input-field col s12">
           <button id="btnlogin" class="btn waves-effect waves-light" type="submit" name="action">Log in
       <i class="material-icons right">send</i>
     </button>
       </div>
     </div>
        </div>
          </form>
        </div>

<div id="right" >

        <div class="row">
          <div id="card" class="col s12 m7">
            <div class="card">
              <div class="card-image">
                <img src="http://localhost:8000/images/fondo.jpg">
                <span class="card-title">What is this?</span>
              </div>
              <div class="card-content">
                <p>This is an email manager.<br>
                   It's easy to use.<br>
                   Simple but complete.</p>
              </div>
              <div class="card-action">
                <a href="#">Create a new account?</a>
              </div>
            </div>
          </div>
        </div>

</div>

<div class="parallax-container">
 <div class="parallax"><img src="http://localhost:8000/images/fondo.jpg"></div>
</div>

    </body>
</html>
