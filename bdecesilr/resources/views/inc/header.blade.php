<!-------------------------navbar----------------------->
<nav class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-custom">

        <li class="collapse navbar-collapse" id="navbarsExampleDefault">

            <ul class="navbar-nav mr-auto">
<!--
                    <div id="main">
                        <button class="openbtn" onclick="openNav(); moveBodyNavbar()">&#9776;</button>
                    </div>
-->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('index')}}"> Accueil</a>
                </li>

            </ul>

            <ul class="navbar-nav mr-1">

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('contact')}}"> Contact</a>
                </li>

                    <!-- if not connected -->

                    @guest
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                            </li>
                        @endif

                        <!-- If connected -->

                        @else

                        <li class="nav-item active">
                            <li class="nav-item active">
                                <div class="dropdown">
                                    <a style="color: white;" class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" data-target="#navbarDropdown">
                                        {{ Auth::user()->User_firstname }}
                                    </a>
                                    
                                    <div id="navbarDropdown" class="dropdown-menu dropdown-menu-right" area-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <a class="dropdown-item" href="{{ route('account') }}">
                                            Mon Compte
                                        </a>
                                        
                                        <div class="dropdown-divider"></div>

                                        @if(auth()->user()->Id_status==4)
                                            <a class="dropdown-item" href="{{ route('admin') }}">
                                                Administration
                                            </a>
                                        @endif

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                                
                            </li>
                        </li>

                        @endif

                        @if(Auth::check())

                            @if(auth()->user()->Id_status==2)
                                <!--Mettre ici ce que vous voulez pour cet utilisateur (role 2) -->
                            @endif
                        @endif
            </ul>
        </li>
    </nav>
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
            <form action="/connexion" method="post">
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
        <p>Vous n'avez pas de compte ? <a class="nav-link" href="" id="BtnIn3">S'inscrire</a></p>
    </div>
    </div>
        </nav>
        </form>
</div>
