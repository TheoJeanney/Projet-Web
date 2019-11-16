var modalCo = document.getElementById("myModalCo");

// Get the button that opens the modal
var btnCo = document.getElementById("BtnCo");
var btnCo2 = document.getElementById("BtnCo2");
// Get the <span> element that closes the modal
var spanCo = document.getElementsByClassName("close")[0];

var modalIn = document.getElementById("myModalIn");

// Get the button that opens the modal
var btnIn = document.getElementById("BtnIn");
var btnIn2 = document.getElementById("BtnIn3");

// Get the <span> element that closes the modal
var spanIn = document.getElementsByClassName("close1")[0];


//Connexion Code
// Get the modal

// When the user clicks the button, open the modal 
btnCo.onclick = function() {
  modalCo.style.display = "block";
  modalIn.style.display="none";
}

// When the user clicks on <span> (x), close the modal
spanCo.onclick = function() {
  modalCo.style.display = "none";
  }

window.onclick = function(event) {  
  if (event.target == modalIn) {
    modalIn.style.display = "none";
  }
  if (event.target == modalCo)
  {
    modalCo.style.display="none";
    }
  }

//Inscription Code
// Get the modal

// When the user clicks the button, open the modal 
btnIn.onclick = function() {
  modalCo.style.display="none";
  modalIn.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanIn.onclick = function() {
  modalIn.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {  
  if (event.target == modalIn) {
    modalIn.style.display = "none";
  }
  if (event.target == modalCo)
  {
    modalCo.style.display="none";
    }
  }

  // When the user clicks the button, open the modal 
btnCo2.onclick = function() {
  modalCo.style.display = "block";
  modalIn.style.display="none";
}

btnIn2.onclick = function() {
  modalIn.style.display = "block";
  modalCo.style.display="none";
}

/*var bodyMove = {
    marginLeft : "250px";
}*/

/* Set the width of the sidebar to 250px and the left margin of the page content to 250px 
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  $("body").css(bodyMove);
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
*/

function ShowPassA() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function ShowPassB() {
  var x = document.getElementById("password-confirm");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

