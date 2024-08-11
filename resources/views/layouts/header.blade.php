{{-- <div class="header-container position-fixed  start-50 translate-middle-x z-3 shadow-sm " >
    <header class="relative container-fluid justify-content-between d-flex align-items-center p-2 bg-opacity-70 ">
       <div class="position-absolute d-flex align-items-center">
        <img class="logo" src="{{ asset('assets/logo-detiktravel.png') }}" alt="">
       </div>
       <div class="responsive-navbar">
        <div></div>
           <div class="navbar-custom">
               <a href="#home">Home</a>
               <a href="#tentang">Tentang Program</a>
               <a href="#berita">Berita</a>
            </div>
            <a href="" class="btn btn-main btn-pill">Registrasi</a>
        </div>
        </header>
</div> --}}
<div class="header-container position-fixed  start-50 translate-middle-x  shadow-sm ">
    <nav class="navbar">
        <div class="container-fluid">
            <div class=" d-flex align-items-center">
                <img class="logo" src="{{ asset('assets/logo-detiktravel.png') }}" alt="">
               </div>
               <div class="d-none d-lg-flex d-xl-flex w-50 justify-content-between ">
                   <div class="navbar-custom">
                       <a href="#home">Home</a>
                       <a href="#tentang">Tentang Program</a>
                       <a href="#berita">Berita</a>
                    </div>
                    <a href="{{route('register')}}" class="btn btn-main btn-pill">Registrasi</a>
                </div>

                 <button class="d-lg-none navbar-toggler hamburger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
   
        </div>
    </nav>
    
    <div class="d-lg-none collapse" id="navbarToggleExternalContent">
        <div class="p-4">
            <div class="navbar-custom d-flex flex-column text-center">
                <a href="#home">Home</a>
                <a href="#tentang">Tentang Program</a>
                <a href="#berita">Berita</a>
            </div>
            
        </div>
    </div>
</div>