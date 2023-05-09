<x-layout>

    <x-header />


    <div class="container-fluid mt-5 pt-5">
        <div class="row justify-content-evenly px-3">
            <div class="col-12 col-lg-4 py-3 px-2">
                <div class="iconSectionContainer me-3  text-center">
                    <i class="fa-solid fa-circle-user fa-5x iconCustom"></i>
                </div>
                <h2 class="caselle h5">CHI SIAMO</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quasi dolorem unde laudantium illum corporis, commodi beatae, itaque veniam at ea recusandae culpa adipisci expedita ducimus ad ipsam sunt sapiente!</p>
                    <button class="bottoneCaselle btn rounded shadow fw-bold">Scopri di più</button>
                </div>
                <div class="col-12 col-lg-4 py-3 px-2">
                    <div class="iconSectionContainer me-3  text-center">
                        <i class="fa-solid fa-circle-info fa-5x iconCustom"></i>
                    </div>
                    <h2 class="caselle h5">INFORMAZIONI</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quasi dolorem unde laudantium illum corporis, commodi beatae, itaque veniam at ea recusandae culpa adipisci expedita ducimus ad ipsam sunt sapiente!</p>
                        <button class="bottoneCaselle btn rounded shadow fw-bold">Scopri di più</button>
                    </div>
            <div class="col-12 col-lg-4 py-3 px-2">
                <div class="iconSectionContainer me-3  text-center">
                    <i class="fa-solid fa-at fa-5x iconCustom"></i>
                </div>
                <h2 class="caselle h5">CONTATTI</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quasi dolorem unde laudantium illum corporis, commodi beatae, itaque veniam at ea recusandae culpa adipisci expedita ducimus ad ipsam sunt sapiente!</p>
                    <button class="bottoneCaselle btn rounded shadow fw-bold">Scopri di più</button>
                </div>
            </div>
        </div>

        {{-- Inizio Chi Siamo - Informazioni - Contatti --}}



        <section class="w-100 bgPrimaryC py-5 my-5 ">
            <div class="container-fluid w-75">
                <div class="row justify-content-evenly gap-2 ">

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

        </section>
        {{-- Fine Chi Siamo - Informazioni - Contatti --}}
        <div class="container-fluid mt-5 pt-5">
            <div class="row justify-content-center px-3">
                <div class="col-12 col-lg-6 py-3 px-2">
                    <div class="iconSectionContainer me-3  text-center">
                        <i class="fa-solid fa-clipboard-list fa-5x iconCustom"></i>
                    </div>
                        <h2 class="caselle h5">Servizi e Trattamenti Offerti dal Nostro Studio</h2>
                        <p>Lo Studio offre ai pazienti un’ampia gamma di prestazioni professionali.</p>

                </div>
            </div>
        </div>
{{-- Inizio Accordion --}}
<section class="container py-3 my-3">
    <div class="row justify-content-center">
        {{-- Accordion 1 --}}
        <div class="col-12 col-md-5">
            <div class="accordion accordion-flush" id="servizi1">
                 @foreach ($leftServices as $service)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="{{ $service->name }}">
                            <button class="accordion-button collapsed accBtn1" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-{{ $service->name }}" aria-expanded="false" aria-controls="flush-collapse-{{ $service->name }}">
                            <h4 class="h4Accordion">{{ $service->name }}</h4>
                            </button>
                        </h2>
                        <div id="flush-collapse-{{ $service->name }}" class="accordion-collapse collapse" aria-labelledby="{{ $service->id }}" data-bs-parent="#servizi1">
                            <div class="accordion-body"><p>{{ $service->shortDescription }}</p></div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>

            {{-- Accordion 2 --}}
        <div class="col-12 col-md-5">
            <div class="accordion accordion-flush" id="servizi2">
                @foreach ($rightServices as $service)
                <div class="accordion-item" >
                    <h2 class="accordion-header" id="{{ $service->name }}">
                        <button class="accordion-button collapsed accBtn2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-{{ $service->name }}" aria-expanded="false" aria-controls="flush-collapse-{{ $service->name }}">
                        <h4 class="h4Accordion">{{ $service->name }}</h4>
                        </button>
                    </h2>
                    <div id="flush-collapse-{{ $service->name }}" class="accordion-collapse collapse" aria-labelledby="{{ $service->name }}" data-bs-parent="#servizi2">
                        <div class="accordion-body"><p>{{ $service->shortDescription }}</p></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Fine Accordion --}}


{{-- Script per aprire una tendina accordion per volta, NECESSARIO con jQuery in head --}}
<script>
     $(document).ready(function() {

    $('.accBtn2').on('click', function() {
      $('.accordion-collapse.show').collapse('hide');
      $('.accBtn1').attr('active', 'false');
      $('.accBtn1').blur();
    });
    $('.accBtn1').on('click', function() {
      $('.accordion-collapse.show').collapse('hide');
      $('.accBtn2').attr('active', 'false');
      $('.accBtn2').blur();
    });
  });
</script>
</x-layout>
