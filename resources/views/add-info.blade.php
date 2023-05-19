<x-app-layout>
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero"> 
    
  </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">      
    <div class="container-fluid add-form-list">
      <div class="row">
          <div class="col-lg-12">
              <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                  <div>
                      <h4 class="mb-3"></h4>
                  </div>
                </div>
              <x-validation-errors/>        
          </div>  
          <div class="col-sm-12">
              <div class="card">                    
                  <div class="card-header d-flex justify-content-between">                        
                      <div class="header-title">
                          <h4 class="card-title">Completa tus datos</h4>                                           
                      </div>
                  </div>
                  <div class="card-body">                                              
              <form action="" method="POST" data-toggle="validator">
                  @csrf
                  @method('PATCH')                            
                  <div class="row">                              
                      <div class="col-md-6">                      
                          <div class="form-group">
                              <label>Nombre *</label>
                              <input id="nombre" name="nombre" type="text" class="form-control" value="DIANA ZEPEDA TATENGO" disabled placeholder="Ingresa nombre" data-errors="Please Enter Name." required>
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>                                                                                                    
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Código *</label>
                              <input id="precio" name="precio" type="text" class="form-control" value="216608505" disabled placeholder="Ingresa precio" data-errors="Please Enter Price." required>
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>                                
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Carrera * </label>
                              <input id="color" name="color" type="text" class="form-control" value="INCO" disabled placeholder="Ingresa color" >
                              
                          </div>
                      </div>
                      <div class="col-md-6">                                    
                          <div class="form-group">
                              <label>Semestre *</label>
                              <input id="total" name="total" type="text" class="form-control" value="" placeholder="Ingresa total" required>
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>   
                      <div class="col-md-6">
                        <div class="form-group">
                            <label>Trabajas *</label>
                            <select id="tipo" name="tipo" name="type" class="selectpicker form-control" data-style="py-0">                                       
                                <option value="1">NO</option>
                                <option value="0">SI - Tiempo Completo</option>  
                                <option value="0">SI - Medio Tiempo</option>                                                                                                       
                            </select>
                        </div>
                    </div>               
                  </div><br>                            
                  <a href="{{route('materia')}}" class="btn btn-primary mr-2">Guardar</a>
                  <a href=""  class="btn btn-danger">Cancelar</a>
              </form>
            </div>
          </div>
      </div>
  </div>
  </main><!-- End #main -->
</x-app-layout>
