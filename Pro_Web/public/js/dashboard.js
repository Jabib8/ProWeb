$('.button-collapse').sideNav('show');
// Hide sideNav
$('.button-collapse').sideNav('hide');

  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );
  function seeContent() {
    alert("hi");
      var x = document.getElementById("select").value;
      document.getElementById("text").innerHTML = ": " + x;
  };
