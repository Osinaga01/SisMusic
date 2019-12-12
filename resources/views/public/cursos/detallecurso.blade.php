@extends('dasboard.layout.public')
@section('content')
<section id="accordion-with-margin">
    <div class="row">
        <div class="col-sm-12">
            
            <div class="card collapse-icon accordion-icon-rotate">
                <div class="row">
                  @foreach ($curso as $item)
                      
                  <div class="col-xl-6 col-md-6">
                      <div class="card-header">
                          {{-- <h4 class="card-title">Margin</h4> --}}
                          <div style="whit:20px !important;">
                              <img class="card-img-top img-fluid" src="{{asset($item->imagen)}}" alt="Card image cap">
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6 col-md-6">
                      <div class="card-header">
                          <h3 class="card-title">{{ $item->nombre }}</h3>

                          <p>{{ $item->descripcion }}</p>
                          <p></p>
                      </div>
                      <div>
                          <div class="col-lg-12 col-md-12">
                              <div class="form-group">
                                  <button type="button" class="btn mb-1 btn-primary btn-lg btn-block waves-effect waves-light"><i class="feather icon-home"></i>     Inscribirse</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  @endforeach
                </div>
                
                <div class="card-body">
                            {{-- <p>
                                To create a collapse with margin use
                                <code>.collapse-margin</code> class as a wrapper for your collapse
                                header
                            </p> --}}
                            <div class="divider">
                                <div class="divider-text">Contenido del curso</div>
                            </div>
                            <div class="accordion" id="accordionExample" data-toggle-hover="true">
                                @foreach ($datos as $item)
                              <div class="collapse-margin">
                                
                                    <div class="card-header" id="headingOne">
                                        <span class="lead collapse-title collapsed" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            {{ $item->titulo }}
                                        </span>
                                    </div>
                                    @foreach ($item->listas as $iteml)
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                        
                                      <div class="card-body">
                                          {{-- <li>{{ $iteml->id }}</li>  --}}
                                          <li>Nombre =>{{ $iteml->nombre }}</li> 
                                          <li>Descripcion =>{{ $iteml->descripcion }}</li> 
                                          <div class="card-body">
                                            <li>Contenido =>{{ $iteml->contenido }}</li> 
                                          </div>
                                      </div>
                                    </div>
                                    @endforeach
                                   
                                  </div>
                                  @endforeach
                            </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection