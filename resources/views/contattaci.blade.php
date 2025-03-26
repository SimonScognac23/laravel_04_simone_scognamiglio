


<x-layout>


<!-- Link alla pagina "Contattaci" -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('contact.us') }}">Contattaci</a>
</li>

<!-- Mostra l'elenco dei giocatori NBA -->
<ul>
    @foreach ($players as $player)
        <li>{{ $player['name'] }} {{ $player['surname'] }} - {{ $player['cell'] }}</li>
    @endforeach
</ul>



<div class="container-fluid bg-body-secondary vh-100 bg-background">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 text-center">
            <h1 class="py-5 title">
              Contattaci
            </h1>
            <div class="image-container">
                <img src="https://logo-marque.com/wp-content/uploads/2020/04/Air-Jordan-Embl%C3%A8me.jpg" alt="Descrizione immagine" class="img-fluid">
            </div>
        </div>
    </div>
</div>





<div class="col-12 col-md-6 text-center bg-secondary p-4 rounded shadow-lg">
  
  <form method="POST" action="{{ route('contact.submit') }}" class="p-3 bg-light rounded">
    @csrf
    <!-- L'attributo method in HTML specifica come i dati del modulo devono essere inviati al server quando
      l'utente invia il modulo. Può assumere due valori principali: GET e POST. -->

    <div class="mb-3">
      <label for="username" class="form-label fw-bold">Inserisci il tuo nome completo</label>
      <input type="text" class="form-control border-primary" id="username" name="username" required>
      <!-- L'attributo name in HTML è utilizzato per identificare un elemento, solitamente nei form, 
        in modo che i dati vengano inviati corvrettamente al server quando l'utente invia il modulo. L'attributo
        name consente al backend di riconoscere e manipolare i dati inviati dal frontend. -->
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label fw-bold">Inserisci la tua email</label>
      <input type="email" class="form-control border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>

    <div class="mb-3">
      <label for="message" class="form-label fw-bold">Scrivi il tuo messaggio</label>
      <textarea name="message" class="form-control border-primary" id="message" rows="4"></textarea>
    </div>

    <button type="submit" class="btn btn-primary w-100">Invia</button>
  </form>
  
</div>


</x-layout>

