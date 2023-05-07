<x-layout header="Chi siamo">
<x-navbar></x-navbar>
<x-header></x-header>
{{-- Inizio Main --}}
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="text-center display-1 titoloMain">Staff</h1>
            </div>
        </div>
        <div class="row justify-content-center citContainer my-2">
            <div class="col-12 col-md-9">
    
                <h6 class="fst-italic text-center text-dark text-muted ">Lo studio si avvale della collaborazione di personale altamente qualificato. Scopri il nostro staff di lavoro.</h6>
    
            </div>
        </div>

    </div>
    
    
</main>
{{-- Fine Main --}}
{{-- Inizio Card --}}
    <div class="container-fluid py-3 ">
        <div class="row justify-content-evenly gap-2">

            @foreach ($collaborators as $collaborator)
                    <div class="card col-11 col-md-5 col-xxl-2 pb-5 px-0 text-center shadow rounded">
    
                        
                        <div class="card-body px-0 pt-0">
                                <img class="img-fluid pt-0 card-img-top"  src="{{$collaborator->portrait}}" alt="immagine collaboratore">
                                <h5 class="card-title pt-3 h3">{{ $collaborator->name }} {{ $collaborator->surname }}</h5>
                                <div class="d-flex justify-content-center gap-3 w-100 px-4 pb-4">
                                    <a href="{{$collaborator->twitter}}">
                                        <i class="fa fa-twitter fa-sm navColor"></i>
                                    </a>
                            
                            
                                    <a href="{{$collaborator->facebook}}">
                                        <i class="fa fa-facebook fa-sm navColor"></i>
                                    </a>
                            
                                    <a href="{{$collaborator->instagram}}">
                                      <i class="fa fa-instagram fa-sm navColor"></i>
                                  </a>
                            
                                    <a href="{{$collaborator->googlePlus}}">
                                        <i class="fa fa-google-plus fa-sm navColor"></i>
                                    </a>
                                </div>
                                <p class="fst-italic text-muted">Età : {{ $collaborator->age }}</p>
                                <p class="card-text h4 fw-normal">{{ $collaborator->role }}</p>                               
                                <a class="bottoneCaselle btn rounded shadow fw-bold mt-3 linkProfiloStaff" href="{{route('staff.profile', [$collaborator->name,$collaborator->surname, $collaborator->id])}}"> Profilo </a>
                            </div>
                    </div>
            @endforeach
        </div>
    </div>
    {{-- Fine Card --}}
</x-layout>
