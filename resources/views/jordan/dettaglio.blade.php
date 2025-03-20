<x-layout>
    <div class="container-fluid bg-dark text-white vh-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center align-items-center w-100">
            <div class="col-12 text-center">
                <h1 class="display-3 fw-bold text-uppercase py-5 shadow-lg">
                    {{$jordan['name']}}    
                </h1>
            </div>
        </div>

        <div class="row justify-content-center align-items-center w-100">
            <div class="col-12 col-md-6">
                <img src="{{ $jordan['photo'] }}" class="img-fluid rounded-circle shadow-lg border border-5 border-warning" alt="{{ $jordan['name'] }} Photo">
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex align-items-center justify-content-center vh-100">
        <div class="col-12 col-md-6 bg-dark text-white p-4 text-center rounded shadow-lg border border-3 border-warning">
            <h2 class="lead mb-4">{{ $jordan['description'] }}</h2>
            <a href="{{route('paginaIndice')}}" class="btn btn-outline-warning btn-lg mt-4 px-5 py-3 rounded-pill text-uppercase shadow">
                Go back
            </a>
        </div>
    </div>
</x-layout>
