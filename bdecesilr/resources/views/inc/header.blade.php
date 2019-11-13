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
                    @guest
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                        @if (Route::has('register'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item active">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->User_firstname }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
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
