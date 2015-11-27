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
  <ul  class="left hide-on-med-and-down">
  <li><a id=" sent" onclick="tableSent()">Sent</a></li>
  <li><a onclick="tablePending()">Pending</a></li>
     <li><a  href="<?= base_url()?>mail">Create Mail</a></li>
 </ul>
 <!--<a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>-->

  <ul class="right hide-on-med-and-down">
    <li><a href="<?= base_url()?>login">log out</a></li>
  </ul>
  <ul id="slide-out" class="side-nav">
    <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Home<i class="mdi-navigation-arrow-drop-down"></i></a>
        <div class="collapsible-body">
          <ul>
            <li><a onclick="tableSent()">Sent</a></li>
            <li><a onclick="tableSent()">Pending</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
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
   function tableSent() {
       document.getElementById('frame').src = 'dashboard/tableSent';
   }
   function tablePending() {
       document.getElementById('frame').src = 'dashboard/tablePending';
   }
</script>
<iframe src="dashboard/tableSent" id="frame"></iframe>
  </body>
  </html>
