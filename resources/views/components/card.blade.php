


<div class="card mx-auto h-100" style="width: 18rem;"> <!-- Card responsiva con altezza fissa -->
  
    <img src="{{ $jordanPhoto }}" class="card-img-top" alt="{{ $jordanName }}  Photo">
    
    <div class="card-body d-flex flex-column"> <!-- Flexbox per organizzare il contenuto all'interno della card -->
        <h5 class="card-title"> {{ $jordanName }}   </h5> 
        <h5 class="card-title">   {{ $jordanYear}} </h5>
        <p class="card-text"></p> 
        <!-- Link per visualizzare i dettagli del personaggio -->
        <a href="{{ route('paginaDettaglio' , ['id' => $jordanId]) }}" class="btn btn-outline-secondary mt-auto">Vai al dettaglio</a>
    </div>
</div>
