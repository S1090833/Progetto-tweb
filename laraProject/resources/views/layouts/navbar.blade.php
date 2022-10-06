<!-- Definisce la navbar del sito -->
<header>
    <nav>
        <div class="logo">
            <a href="#" title="Home"><img src="{{ asset('/images/logo.png') }}" alt="logo" /></a>
        </div>
        <!-- Tali bottoni non vengono mostrati se siamo nella pagina di login o signup -->
        
        
        <div id="Login_Container">
            <a href="#">
                <button><i class="fa fa-sign-in fa-lg"></i> Accedi</button>
            </a>
            <a href="#">
                <button><i class="fa fa-user-plus fa-lg"></i> Registrati</button>
            </a>
        </div>
        
    </nav>  
        
</header>
