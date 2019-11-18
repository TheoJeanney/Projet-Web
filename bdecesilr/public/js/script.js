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

//Show the first password
function ShowPassA() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
//Show the second password
function ShowPassB() {
  var x = document.getElementById("password-confirm");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

/* SEARCH BAR */
// JavaScript code 
function search_animal() { 
	let input = document.getElementById('searchbar').value 
	input=input.toLowerCase(); 
	let x = document.getElementsByClassName('animals'); 
	
	for (i = 0; i < x.length; i++) { 
		if (!x[i].innerHTML.toLowerCase().includes(input)) { 
			x[i].style.display="none"; 
		} 
		else { 
			x[i].style.display="list-item";				 
		} 
	} 
} 

