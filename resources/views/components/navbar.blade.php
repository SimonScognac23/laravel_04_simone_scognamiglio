<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark @if (Route::currentRouteName() == 'paginaHomepage') navbar-red @endif">
    <div class="container-fluid">
        <!-- Pulsante per il menu mobile (toggle) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menu di navigazione che appare quando la navbar è espansa -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <!-- Link alla Home page -->
                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'paginaHomepage') active navbar-red @endif" href="{{ route('paginaHomepage') }}">Home</a>
                    <!-- URI per la home page -->
                    <!-- IMPORTANTE!! a partire dalla classe route fammi scattare la funzione currentRouteName() che restituisce una stringa, quindi quello che restituisce il metodo deve essere uguale a 'home-page' ossia il nome della rotta, se questa condizione è rispettata allora metti la classe active -->
                </li>

                <!-- Link alla pagina "Indice" -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('paginaIndice') }}">Indice</a>
                    <!-- URI per "Chi siamo" -->
                </li>

<!-- Link alla pagina "Contattaci" -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('contact.us') }}">Contattaci</a>
</li>



            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->
