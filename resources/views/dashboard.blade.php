<x-app-layout>
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Bienvenida/o <br><span>{{ Auth::user()->name }}</span></h2>
          <p>Bienvenido al tutor virtual, estamos aquí para ayudarte en tu agenda de materias</p>
          <!--<div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>-->
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>
    <!--
    <div class="icon-boxes position-relative">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">
  
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-easel"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Materias Cursadas</a></h4>
              </div>
            </div><!--End Icon Box 
  
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-gem"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Materias Prioritarias</a></h4>
              </div>
            </div><!--End Icon Box 
  
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Recomenda</a></h4>
              </div>
            </div><!--End Icon Box 
  
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-command"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
              </div>
            </div><!--End Icon Box
  
          </div>
        </div>
      </div>-->

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= Stats Counter Section ======= -->
    <section id="about" class="stats-counter">
      <div class="container" data-aos="fade-up">

        
        <div class="row gy-4 align-items-center">          
          <div class="col-lg-6">
            <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">
            <div class="section-header">
                <h2>Mi Información</h2>
            </div>
            <div class="stats-item d-flex align-items-center">
              <p>
                <strong>Nombre Completo:</strong> {{ Auth::user()->name }}<br>
                <strong>Código:</strong> {{ Auth::user()->codigo }}<br>
                <strong>Carrera:</strong> {{ Auth::user()->carrera }}<br>
                <strong>Último ciclo:</strong> {{ Auth::user()->ciclo }}<br>
                <strong>Promedio:</strong> {{ Auth::user()->promedio }}<br>    
                <strong>Créditos Requeridos:</strong> {{ Auth::user()->creditos_requeridos }}<br>
                <strong>Créditos Adquiridos:</strong> {{ Auth::user()->creditos_adquiridos }}<br>
                <strong>Créditos Faltates:</strong> {{ Auth::user()->creditos_faltantes }}<br>            
              </p>              
            </div><!-- End Stats Item -->            
          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->
 
    
  </main><!-- End #main -->
</x-app-layout>
