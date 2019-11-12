<!-------------------------navbar----------------------->
<nav class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-custom">

        <li class="collapse navbar-collapse" id="navbarsExampleDefault">

            <ul class="navbar-nav mr-auto">

                    <div id="main">
                        <button class="openbtn" onclick="openNav(); moveBodyNavbar()">&#9776;</button>
                    </div>

                <li class="nav-item active">
                    <a class="nav-link" href="index.php"> Accueil</a>
                </li>

            </ul>

            <ul class="navbar-nav mr-1">

                <li class="nav-item active">
                    <a class="nav-link" href="contact.php"> Contact</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#connexion" id="BtnCo"> Connexion</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#register" id="BtnIn">Inscription</a>
                </li>
            </ul>
        </li>
    </nav>
    <!-- Connexion -->
    <!-- The Modal -->
<div id="myModalCo" class="modal coco">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
        </div>
        <div class="modal-body"></div>
            <form action="action_page.php">
        <div class="container">
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Entrez l'email" name="email" required>
            
            <label for="psw"><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrez le mot de passe" name="psw" required>
            <hr>

            <button type="submit" class="registerbtn">Se connecter</button>
        </div>
    </div>
    <div class="modal-footer">
        <div class="container signin">
        <p>Vous n'avez pas de compte ? <a class="nav-link" href="#register" id="BtnIn3">S'inscrire</a></p>
        </div>
    </div>
        </nav>
        </form>
</div>
