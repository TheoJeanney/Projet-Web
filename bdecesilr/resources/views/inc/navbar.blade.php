
<!--<ul class="list-group">

<li >Test1 </li>
<li class="list-group-item">Test2 </li>
<li class="list-group-item">Test3 </li>
/-->

<!-----------------VERTICAL NAVIGATION MENU-----------------/-->

<div id="mySidebar" class="sidebar">
<!--
  <dd href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;-
-->
  <div class="sidebar-header">
    <img class="col-" src="{{asset('images/Logo_BDE.png')}}" width=100% >
  </div>

  <a href="{{route('activity')}}">Activités</a>
  <a href="{{route('shopw')}}">Boutique</a>
  <a href="{{route('boite')}}"> Boite à idées</a>
  
  <!-- The Modal -->
  <div id="myModalIn" class="modal inin">

    <!-- Modal content -->
    <div class="modal-content">

      <div class="modal-header">
        <span class="close1">&times;</span>
      </div>

      <div class="modal-body">
      </div>
        
      <form novalidate action="/register" method="post" onsubmit="return validate(this)">
        {{ csrf_field() }}
        <div class="container">

          <hr>
            <!--From that contain firstname, lastname, campus, email, phone and passwords -->
            <label for="firstname"><b>Prénom</b></label>
            <label id="firstnameError" style="display:none;" class=text-danger>Le prénom doit contenir au moins deux lettres.</label>
            <input type="text" placeholder="Entrez votre prenom" name="firstname" onblur="verifFirstname(this)" required>

            <label for="lastname"><b>Nom</b></label>
            <label id="lastnameError" style="display:none;" class=text-danger>Le nom doit contenir au moins deux lettres.</label>
            <input type="text" placeholder="Entrez votre nom" name="lastname" onblur="verifLastname(this)" required>
            
            <label for="campus"><b>Centre</b></label>
            <label id="campusError" style="display:none;" class=text-danger>Veuillez choisir un campus.</label>
            <select id="inputState" class="form-control" name="campus">
              <option selected  onblur="verifCampus(this)">Choisissez votre campus</option>
            <!-- Check the database for all the campus -->
              <?php
              $post=DB::select('SELECT * FROM Campus'); 
              foreach($post as $post){
              echo '<option>'.$post->Campus_name.'</option>';
              }
              ?>

            </select>

            <label for="email"><b>Email</b></label>
            <label id="emailError" style="display:none;" class=text-danger>L'email n'est pas correct.</label>
            <input type="text" placeholder="Entrez l'email" name="email" onblur="verifEmail(this)" required>


            <label for="phone"><b>Téléphone</b></label>
            <label id="phoneError" style="display:none;" class=text-danger>Le numéro de téléphone n'est pas correct.</label>
            <input type="text" placeholder="Entrez votre numéro de téléphone" name="phone" onblur="verifPhone(this)" required>
            

            <label for="psw"><b>Mot de passe</b></label>
            <label id="errorMdp" style="display:none;" class=text-danger>Veuillez entrer au moins une majuscule et un chiffre.</label>
            <input type="password" placeholder="Entrez le mot de passe" name="psw" id="psw" onblur="checkMdp()" required>
            <input type="checkbox" onclick="myFunction()"> Montrer le mot de passe

            <div><label for="psw1"><b>Répétez le mot de passe</b></label></div>
            <label id="compareError" style="display:none;" class=text-danger>Les mots de passe ne sont pas identiques !</label>
            <input type="password" placeholder="Entrez le mot de passe" name="psw1" id="psw1" onblur="checkMdp()" required>
            <input type="checkbox" onclick="ShowPass()"> Montrer le mot de passe
            
          <hr class="style1">
            

        
          <div class="condition">
            <p>En créant un compte, vous acceptez nos</p>
          </div>
          <div>
          <p><a href="{{route('condition')}}" class="linkC">conditions générales d'utilisation et de confidentialité</a><input type="checkbox" onclick="#" required></p>
          </div>
        <button type="submit" class="registerbtn">S'inscrire</button>
        </div>
      </form>    
    </div>

    <div class="modal-footer">
      <div class="container signin">
        <p>Vous avez déjà un compte? <a class="nav-link" href="#connexion" id="BtnCo2">Connexion</a></p>
      </div>
    </div>
  </div>
</div>