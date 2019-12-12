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
                      <form class="form" enctype="multipart/form-data" action="{{ route('temarios.store') }}"  method="post">
                          @csrf
                          
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <h3><label for="first-name-icon">Titulo :</label></h3>
                                          <div class="position-relative has-icon-left">
                                              <input type="text" id="first-name-icon" class="form-control" name="titulo" placeholder="Titulo">
                                              <div class="form-control-position">
                                                  <i class="feather icon-user"></i>
                                              </div>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <h3><label for="first-name-icon">Justificacion :</label></h3>
                                          <div class="position-relative has-icon-left">
                                              <input type="text" id="first-name-icon" class="form-control" name="justificacion" placeholder="Justificacion">
                                              <div class="form-control-position">
                                                  <i class="feather icon-user"></i>
                                              </div>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <h3><label for="first-name-icon">Objetivo :</label></h3>
                                          <fieldset class="form-group">
                                              <textarea class="form-control" id="basicTextarea" name="objetivo" rows="3" placeholder="Objetivo"></textarea>
                                          </fieldset>
                                        </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <h3><label for="first-name-icon">Fecha Revision :</label></h3>
                                          <div class="position-relative has-icon-left">
                                              
                                                  <input type="date" id="first-name-icon" class="form-control" name="fecha_revision" placeholder="fecha_revision">
                                                  <div class="form-control-position">
                                                      <i class="feather icon-calendar"></i>
                                                  </div>
                                              
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <h3><label for="first-name-icon">curso :</label></h3>
                                          <div class="position-relative has-icon-left">
                                              <select class="form-control" id="basicSelect" name="curso_id">
                                                @foreach ($curso as $item)
                                                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                                @endforeach
                                              </select>
                                              <div class="form-control-position">
                                                  <i class="feather icon-user"></i>
                                              </div>
                                          </div>
                                        </div>
                                  </div>
                                  
                
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