<x-app-layout>
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">    
    
    <div class="icon-boxes position-relative fondo">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">
            @for ($i=1;$i<=10;$i++)
              <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                  <div class="icon"><i class="bi bi-easel"></i></div>
                  <h4 class="title"><a href="" class="stretched-link">Materia {{$i}}</a></h4>
              </div>
            </div>
            @endfor              
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">      
 
    
  </main><!-- End #main -->
</x-app-layout>
