<x-layout>

    <x-header />

    {{-- Inizio Chi Siamo - Informazioni - Contatti --}}
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
    {{-- Fine Chi Siamo - Informazioni - Contatti --}}

<section class="container-fluid bg-info py-5 my-5">
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

</section>












<x-main>
<div class="container-fluid">
    <div class="row justify-content-center py-5 mt-5 ">
        <div class="col-12 col-md-4">
            <div class="iconSectionContainer me-3  text-center">
                <i class="fa-solid fa-at fa-5x iconaTaccuino"></i>
            </div>
                 <h5 class="text-dark">Servizi e Trattamenti Offerti dal Nostro Studio</h5>
                 <p class="text-dark"> Lo Studio offre ai pazienti un’ampia gamma di prestazioni professionali.</p>
        </div>

    </div>
    <div class="row">

        {{-- Accordion 1 --}}
        <div class="col-12 col-md-6">
            <div class="accordion accordion-flush" id="servizi1">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="implantologia">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseImplantologia" aria-expanded="false" aria-controls="flush-collapseImplantologia">
                      Implantologia
                    </button>
                  </h2>
                  <div id="flush-collapseImplantologia" class="accordion-collapse collapse" aria-labelledby="implantologia" data-bs-parent="#servizi1">
                    <div class="accordion-body"><p>L’Impiantologia è quella branca dell’odontoiatria che si preoccupa sostanzialmente di sostituire i denti andati perduti per qualsivoglia patologia tramite l’inserimento nell’osso mandibolare o mascellare di viti (fixture) in titanio di varia forma e superficie. Queste saranno le “radici artificiali” capaci di supportare la nuova dentatura.</p></div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="conservativa">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseConservativa" aria-expanded="false" aria-controls="flush-collapseConservativa">
                      Conservativa
                    </button>
                  </h2>
                  <div id="flush-collapseConservativa" class="accordion-collapse collapse" aria-labelledby="conservativa" data-bs-parent="#servizi1">
                    <div class="accordion-body"><p>La Conservativa è la branca dell’odontoiatria che si occupa della cura dei denti cariati, delle procedure per la eliminazione della carie e di quelle relative alla chiusura delle cavità risultanti dall’eliminazione dello smalto e della dentina cariata, tramite l’utilizzo di appositi materiali.</p></div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="paradontologia">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseParodontologia" aria-expanded="false" aria-controls="flush-collapseParodontologia">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="flush-collapseParodontologia" class="accordion-collapse collapse" aria-labelledby="paradontologia" data-bs-parent="#servizi1">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="endodonzia">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEndodonzia" aria-expanded="false" aria-controls="flush-collapseEndodonzia">
                        Accordion Item #3
                      </button>
                    </h2>
                    <div id="flush-collapseEndodonzia" class="accordion-collapse collapse" aria-labelledby="endodonzia" data-bs-parent="#servizi1">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="pedodonzia">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePedodonzia" aria-expanded="false" aria-controls="flush-collapsePedodonzia">
                        Accordion Item #3
                      </button>
                    </h2>
                    <div id="flush-collapsePedodonzia" class="accordion-collapse collapse" aria-labelledby="pedodonzia" data-bs-parent="#servizi1">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                  </div>
            </div>
        </div>

        {{-- Accordion 2 --}}
        <div class="col-12 col-md-6">
            <div class="accordion accordion-flush" id="servizi1">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="protesiFissaMobile">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseProtesiFissaMobile" aria-expanded="false" aria-controls="flush-collapseProtesiFissaMobile">
                        Accordion Item #1
                        </button>
                    </h2>
                  <div id="flush-collapseProtesiFissaMobile" class="accordion-collapse collapse" aria-labelledby="protesiFissaMobile" data-bs-parent="#servizi1">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="ortodonziaFissaMobile">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOrtodonziaFissaMobile" aria-expanded="false" aria-controls="flush-collapseOrtodonziaFissaMobile">
                      Accordion Item #2
                    </button>
                  </h2>
                  <div id="flush-collapseOrtodonziaFissaMobile" class="accordion-collapse collapse" aria-labelledby="ortodonziaFissaMobile" data-bs-parent="#servizi1">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="igieneOrale">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseIgieneOrale" aria-expanded="false" aria-controls="flush-collapseIgieneOrale">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="flush-collapseIgieneOrale" class="accordion-collapse collapse" aria-labelledby="igieneOrale" data-bs-parent="#servizi1">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="sbiancamento">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSbiancamento" aria-expanded="false" aria-controls="flush-collapseSbiancamento">
                        Accordion Item #3
                      </button>
                    </h2>
                    <div id="flush-collapseSbiancamento" class="accordion-collapse collapse" aria-labelledby="sbiancamento" data-bs-parent="#servizi1">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="prevenzione">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePrevenzione" aria-expanded="false" aria-controls="flush-collapsePrevenzione">
                        Accordion Item #3
                      </button>
                    </h2>
                    <div id="flush-collapsePrevenzione" class="accordion-collapse collapse" aria-labelledby="prevenzione" data-bs-parent="#servizi1">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                  </div>
              </div>
        </div>
    </div>
</div>
</x-main>

</x-layout>
