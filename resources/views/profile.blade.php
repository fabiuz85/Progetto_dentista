<x-layout header="Chi siamo">
<x-navbar></x-navbar>
<x-header></x-header>
{{-- Inizio Main --}}

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="text-center display-1 titoloMain">{{$collaborator->name}} {{$collaborator->surname}}</h1>
            </div>
        </div>
        <div class="row justify-content-center citContainer my-2">
            <div class="col-12 col-md-9">
    
                <h6 class="fst-italic text-center text-dark text-muted ">{{$collaborator->role}}</h6>
    
            </div>
        </div>

    </div>
    
    

{{-- Fine Main --}}
{{-- Inizio Card --}}
    <div class="container py-5 my-5 containerC rounded shadow ">
        <div class="row justify-content-center gap-5">
            <div class="col-12 col-lg-4 d-flex justify-content-center">
                <img class="img-fluid shadow rounded" src="{{$collaborator->portrait}}" alt="immagine collaboratore">
            </div>
            <div class="col-12 col-lg-5">
                @foreach ($lines as $line)
                <p class=" h5 fw-normal text-dark">{{$line}}</p>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Fine Card --}}
</x-layout>
