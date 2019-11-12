
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Inscription</button>

<!-- The Modal -->
<div id="myModal" class="modal"></div>
  <!-- Modal content-->
  <hr class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Inscription</h2>
    </div>
    <div class="modal-body"></div>
        <form action="action_page.php">
        <div class="container"></div>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Entrez l'email" name="email" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Entrez le mot de passe" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Répétez le mot de passe" name="psw-repeat" required>
            </hr>
        <p></p>
    En créant un compte, vous acceptez nos <a href="">conditions d'utilisation et de confidentialité</a>.</p>
        <button type="submit" class="registerbtn">S'incrire</button>
        </hr>  
    </link>
    <div class="modal-footer">
    <div class="container signin">
    <p>Vous avez déjà un compte? <a href="#">Connexion</a></p>
    </div>
    </div>
    </form>
  </div>
</div>
</body>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



