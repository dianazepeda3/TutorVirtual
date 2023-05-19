<x-app-layout>
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">    
        
    <div class="icon-boxes position-relative fondo">
        <div class="container position-relative"><br><br>
          <h4>Te recomendamos meter 4 materias maximo en 5to semestre, aqui algunas recomendaciones</h4>
          <a href="{{ route('materia') }}" class="btn btn-secondary">Recomendación Alternativa</a>   
          <div class="row gy-4 mt-5">
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-easel"></i></div>
                <h5 class="title"><a href="" class="stretched-link">TEORÍA DE LA COMPUTACIÓN </a></h5>
                <h6><b>Clave:</b> I5915</h6>
            </div></div>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-easel"></i></div>
                <h5 class="title"><a href="" class="stretched-link">INGENIERIA DE SOFTWARE I</a></h5>
                <h6><b>Clave:</b> I5898</h6>
            </div></div>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-easel"></i></div>
                <h5 class="title"><a href="" class="stretched-link">SEMINARIO DE INGENIERIA DE SOFTWARE I </a></h5>
                <h6><b>Clave:</b> I5899</h6>
            </div></div>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-easel"></i></div>
                <h5 class="title"><a href="" class="stretched-link">OPTATIVA </a></h5>
                <h6><b>Clave:</b> ?</h6>
            </div></div>
            <!--@for ($i=1;$i<=10;$i++)
              <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                  <div class="icon"><i class="bi bi-easel"></i></div>
                  <h4 class="title"><a href="" class="stretched-link">Materia {{$i}}</a></h4>
              </div>
            </div>
            @endfor -->             
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">      
 
    
  </main><!-- End #main -->
</x-app-layout>
