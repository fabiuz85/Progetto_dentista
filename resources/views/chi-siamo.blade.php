<x-layout header="Chi siamo">
<x-navbar></x-navbar>
<x-header></x-header>
{{-- Inizio Main --}}
<main>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <h1 class="text-center display-1 titoloMain">Staff</h1>
        </div>
    </div>
    <div class="container my-2 citContainer">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9">

                <h6 class="fst-italic text-center text-dark text-muted ">Lo studio si avvale della collaborazione di personale altamente qualificato. Scopri il nostro staff di lavoro.</h6>

            </div>
        </div>
    </div>
</main>
{{-- Fine Main --}}
{{-- Inizio Card --}}
    <div class="container my-5 ">
        <div class="row justify-content-center">

            @foreach ($collaborators as $collaborator)
                    <div class="col-12 col-md-3 py-5 text-center shadow ">
                            <div class="d-flex justify-content-center  ">
                                <img class="img"  src="https://picsum.photos/300" class="card-img-top chi-siamoImg " alt="...">
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title py-3">{{ $collaborator->name }} {{ $collaborator->surname }}</h5>
                                <p class="small fst-italic text-muted">Età : {{ $collaborator->age }}</p>
                                <p class="card-text">{{ $collaborator->description }}</p>
                                <button class="bottoneCaselle btn rounded shadow fw-bold ">
                                    <span class="linkProfiloStaff">Profilo</span> </button>
                            </div>
                    </div>
            @endforeach
        </div>
    </div>
    {{-- Fine Card --}}
</x-layout>
