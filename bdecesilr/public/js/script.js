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

/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  $("body").css(bodyMove);
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

//Highlight block when error
function surligne(champ, erreur)
{
  if(erreur)
      champ.style.backgroundColor = "#fba";
  else
      champ.style.backgroundColor = "";
}


function verifFirstname(champ) {

  var regex;

  if (champ.value.length  <2 || champ.value.length >25)
  {
    surligne(champ,true);
    document.getElementById("firstnameError").style.display="";
    return false;
  }
  else
  {
    document.getElementById("firstnameError").style.display="none";
    surligne(champ,false);
    return true;
  }
}

//verify the lastname
function verifLastname(champ) {

  if (champ.value.length  <2 || champ.value.length >25)
  {
    document.getElementById("lastnameError").style.display="";
    surligne(champ,true);
    return false;
  }
  else
  {
    document.getElementById("lastnameError").style.display="none";
    surligne(champ,false);
    return true;
  }
}
//verify the syntax of the email
function verifEmail(champ) {

  var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
  if(!regex.test(champ.value))
  {
    document.getElementById("emailError").style.display="";
    surligne(champ, true);
    return false;
  }
  else
  {
    document.getElementById("emailError").style.display="none";
    surligne(champ, false);
    return true;
  }
}

//verify the phone and the quantity of number
function verifPhone(champ) {

var regex=/(0|\\+33|0033)[1-9][0-9]{8}/;

if(!regex.test(champ.value))
  {
    document.getElementById("phoneError").style.display="";
    surligne(champ, true);
    return false;
  }
  else
  {
    document.getElementById("phoneError").style.display="none";
    surligne(champ, false);
    return true;
  }
}

//verify the choice of campus.

function verifCampus(champ) {
  if (champ.value=="Choisissez votre campus")
  {
    document.getElementById("campusError").style.display="";
    return false;
  }
  else
  {
    document.getElementById("campusError").style.display="none";
    return true;
  }
}


//Compare both password and return true if they are the same.
function checkMdp() {
  var mdp = document.getElementById("psw").value;
  var mdp2 = document.getElementById("psw1").value;

  var target=document.getElementById("compareError");

  if (mdp!=mdp2) {
    surligne(document.getElementById("psw"),true);
    surligne(document.getElementById("psw1"),true);
    target.style.display = "";
    return false;
  } 
  else {
    surligne(document.getElementById("psw"),false);
    surligne(document.getElementById("psw1"),false);
    target.style.display = "none";
    return true;
  }
}

//Check all the informations when we finish to put them.
function validate(user) {

  var firstnameOK = verifFirstname(user.firstname);
  var lastnameOK = verifLastname(user.lastname);
  var emailOK = verifEmail(user.email);
  var phoneOK = verifPhone(user.phone);
  var campusOK=verifCampus(user.inputState);
  var compareOK=checkMdp();

  var mdp = document.getElementById("psw").value;

  if (firstnameOK && lastnameOK && emailOK && phoneOK && campusOK && compareOK)
  { 
    if (mdp.match( /[0-9]/g) && mdp.match( /[A-Z]/g) && mdp.length >= 2 && mdp.length <=25)
    { 
      return true;
    }
    else
    {
      document.getElementById("errorMdp").style.display="";
      return false;
    }
  }
  else
  {
    alert("Veuillez remplir tous les champs de la bonne manière !!")
    return false;
  }
}

function myFunction() {
  var x = document.getElementById("psw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function ShowPass() {
  var x = document.getElementById("psw1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

