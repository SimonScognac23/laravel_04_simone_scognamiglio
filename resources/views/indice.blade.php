<x-layout>

    <div class="container-fluid bg-dark text-white vh-100">
      
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-12 text-center">
             
                <h1 class="text-center py-5 display-3 fw-bold text-uppercase shadow-lg text-warning">
                    Tutte le scarpe Jordan dalla 1 alla 10
                </h1>
            </div>
        </div>

        <!-- Lista delle scarpe Jordan -->
        <div class="row justify-content-center">
            <!-- Lista delle card (immagini e dettagli) -->
            <div class="row justify-content-center align-items-start">
                @foreach ( $jordans as $jordan )
                    <div class="col-12 col-md-4 col-lg-3 mb-4">
                        
                        <x-card 
                            jordanName="{{ $jordan['name'] }}"  
                            jordanYear="{{ $jordan['year'] }}"                       
                            jordanPhoto="{{ $jordan['photo'] }}" 
                            jordanId="{{ $jordan['id'] }}">
                        </x-card>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
