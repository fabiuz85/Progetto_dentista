
<div class="fixed-top">

    <div class="d-flex justify-content-end gap-3 w-100 px-4 py-2 bg-transparent">
        <a href="https://twitter.com/dottlucagiachin">
            <i class="fa fa-twitter fa-xl navColor"></i>
        </a>


        <a href="https://www.facebook.com/studiodentisticogiachin">
            <i class="fa fa-facebook fa-xl navColor"></i>
        </a>

        <a href="https://www.instagram.com/studiodentistico_dott.giachin/">
          <i class="fa fa-instagram fa-xl navColor"></i>
      </a>

        <a href="http://google.com/+studiodentisticogiachingenova">
            <i class="fa fa-google-plus fa-xl navColor"></i>
        </a>
    </div>
    <nav class="navbar navbar-expand-lg bg-light py-2">
      <div class="container-fluid">

        <a class="navbar-brand" href="{{ route('homepage') }}"><img class="img-fluid imgNavbar" src="/media/logo_home.png" alt="logo studio"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          MENU
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-evenly align-items-center py-5 my-0">

            <li class="nav-item ">
              <a class="nav-link navColor" href="#"><i class="fa-solid fa-user-large"></i> CHI SIAMO</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link navColor" href="#"><i class="fa-regular fa-clipboard"></i> SERVIZI</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link @if(Route::currentRouteName()!= 'staff.index') navColor @endif @if(Route::is('staff.index')) active fw-bold navactiveC @endif" href="{{ route('staff.index') }}"><i class="fa-solid fa-user-group"></i> STAFF</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link navColor" href="#"><i class="fa-solid fa-rss"></i> NEWS</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link navColor" href="#"><i class="fa-solid fa-handshake-angle"></i> CONVENZIONI</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link navColor @if(Route::currentRouteName()!= 'contact_us') navColor @endif @if(Route::is('contact_us')) active fw-bold navactiveC @endif" href="{{ route('contact_us') }}"><i class="fa-solid fa-location-dot"></i> CONTATTI</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link rounded fw-bold shadow p-3 appointmentBtn h-100 w-100" href="#">  <p class="mb-0"><i class="fa-regular fa-calendar-days"></i> APPUNTAMENTI</p> </a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
</div>
