
@extends('dasboard.layout.admin')
@section('content')


  <div class="row match-height">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Multiple Column</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form" enctype="multipart/form-data" action="{{ route('cursos.store') }}"  method="post">
                          @csrf
                          
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <h3><label for="first-name-icon">Nombre :</label></h3>
                                          <div class="position-relative has-icon-left">
                                              <input type="text" id="first-name-icon" class="form-control" name="nombre" placeholder="Nombre">
                                              <div class="form-control-position">
                                                  <i class="feather icon-user"></i>
                                              </div>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <h3><label for="first-name-icon">Descripcion :</label></h3>
                                          <fieldset class="form-group">
                                              <textarea class="form-control" id="basicTextarea" name="descripcion" rows="3" placeholder="Descripcion"></textarea>
                                          </fieldset>
                                        </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <h3><label for="first-name-icon">Fecha Inicio :</label></h3>
                                          <div class="position-relative has-icon-left">
                                              
                                                  <input type="date" id="first-name-icon" class="form-control" name="fecha_inicio" placeholder="Nombre">
                                                  <div class="form-control-position">
                                                      <i class="feather icon-calendar"></i>
                                                  </div>
                                              
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <h3><label for="first-name-icon">Fecha Fin :</label></h3>
                                          <div class="position-relative has-icon-left">
                                            
                                                  <input type="date" id="first-name-icon" class="form-control" name="fecha_fin" placeholder="Nombre">
                                                  <div class="form-control-position">
                                                      <i class="feather icon-calendar"></i>
                                                  </div>
                  
                                          </div>
                                        </div>
                                  </div>
                                  
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <h3><label for="first-name-icon">Nombre :</label></h3>
                                          <div class="position-relative has-icon-left">
                                              <select class="form-control" id="basicSelect" name="id_docente">
                                                @foreach ($docente as $item)
                                                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                                @endforeach
                                              </select>
                                              <div class="form-control-position">
                                                  <i class="feather icon-user"></i>
                                              </div>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <h3><label for="first-name-icon">Numero Cupos :</label></h3>
                                          <div class="position-relative has-icon-left">
                                              <input type="number" id="first-name-icon" class="form-control" name="nro_cupos">
                                              <div class="form-control-position">
                                                  <i class="feather icon-hash"></i>
                                              </div>
                                          </div>
                                        </div>
                                  </div>
                                 
                                  <div class="col-md-12 col-12">
                                      <div class="form-group">
                                          <h3><label for="first-name-icon">Imagen :</label></h3>
                                          <input type="file" id="first-name-icon" class="form-control" name="imagen">
                                          <div class="form-control-position">
                                              <i class="feather icon-hash"></i>
                                          </div>
                                        </div>
                                  </div>
                                 
                                  <hr>
                                  <div class="col-md-12 col-12">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Guardar</button>
                                      {{-- <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button> --}}
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>


@endsection