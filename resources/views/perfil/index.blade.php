@extends('dasboard.layout.public')
@section('content')

<div class="content-header row">
  <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
          <div class="col-12">
              <h2 class="content-header-title float-left mb-0">Profile</h2>
              <!-- <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home</a>
                      </li>
                      <li class="breadcrumb-item"><a href="#">Pages</a>
                      </li>
                      <li class="breadcrumb-item active">Profile
                      </li>
                  </ol>
              </div> -->
          </div>
      </div>
  </div>
  <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
      <!-- <div class="form-group breadcrum-right">
          <div class="dropdown">
              <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
          </div>
      </div> -->
  </div>
</div>
<div class="content-body">
  <div id="user-profile">
      <div class="row">
          <div class="col-12">
              <div class="profile-header mb-2">
                  <div class="relative">
                      <div class="cover-container">
                          <img class="img-fluid bg-cover rounded-0 w-100" src="{{ asset('app-assets/images/profile/user-uploads/cover.jpg') }}" alt="User Profile Image">
                      </div>
                      <div class="profile-img-container d-flex align-items-center justify-content-between">
                          <img src="{{ asset('app-assets/images/profile/user-uploads/user-13.jpg') }}" class="rounded-circle img-border box-shadow-1" alt="Card image">
                          <div class="float-right">
                              <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1">
                                  <i class="feather icon-edit-2"></i>
                              </button>
                              <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary">
                                  <i class="feather icon-settings"></i>
                              </button>
                          </div>
                      </div>
                  </div>
                  <div class="d-flex justify-content-end align-items-center profile-header-nav">
                      <nav class="navbar navbar-expand-sm w-100 pr-0">
                          <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"><i class="feather icon-align-justify"></i></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              {{-- <ul class="navbar-nav justify-content-around w-75 ml-sm-auto">
                                  <li class="nav-item px-sm-0">
                                      <a href="#" class="nav-link font-small-3">Timeline</a>
                                  </li>
                                  <li class="nav-item px-sm-0">
                                      <a href="#" class="nav-link font-small-3">About</a>
                                  </li>
                                  <li class="nav-item px-sm-0">
                                      <a href="#" class="nav-link font-small-3">Photos</a>
                                  </li>
                                  <li class="nav-item px-sm-0">
                                      <a href="#" class="nav-link font-small-3">Friends</a>
                                  </li>
                                  <li class="nav-item px-sm-0">
                                      <a href="#" class="nav-link font-small-3">Videos</a>
                                  </li>
                                  <li class="nav-item px-sm-0">
                                      <a href="#" class="nav-link font-small-3">Events</a>
                                  </li>
                              </ul> --}}
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
        <section id="profile-info">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Informacion Personal</h4>
                            <i class="feather icon-more-horizontal cursor-pointer"></i>
                        </div>
                        <div class="card-body">
                            {{-- <p>Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes. Topping cake wafer.</p> --}}
                            {{-- <div class="mt-1">
                                <h6 class="mb-0">Joined:</h6>
                                <p>November 15, 2015</p>
                            </div> --}}
                            <div class="mt-1">
                                <h6 class="mb-0">Lives:</h6>
                                <p>New York, USA</p>
                            </div>
                            <div class="mt-1">
                                <h6 class="mb-0">Nombre :</h6>
                                <p>{{ $estudiante->name }}</p>
                            </div>
                            <div class="mt-1">
                                    <h6 class="mb-0">Apellidos :</h6>
                                    <p>{{ $ap }}</p>
                            </div>
                            {{-- <div class="mt-1">
                                    <h6 class="mb-0">Nombre :</h6>
                                    <p>{{ $estudiante->sexo }}</p>
                                </div>
                            <div class="mt-1"> --}}

                            <div class="mt-1">
                                <h6 class="mb-0">Correo :</h6>
                                <p>{{ $estudiante->email }}</p>
                            </div>
                            {{-- <div class="mt-1">
                                <h6 class="mb-0">Website:</h6>
                                <p>www.pixinvent.com</p>
                            </div> --}}
                            <div class="mt-1">
                                <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-facebook"></i></button>
                                <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-twitter"></i></button>
                                <button type="button" class="btn btn-sm btn-icon btn-primary p-25"><i class="feather icon-instagram"></i></button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-9 col-12">
                        
                        <section id="ecommerce-products" class="grid-view">
                                @foreach ($curso as $item)
                                <div class="card ecommerce-card">
                                    <div class="card-content">
                                        <div class="item-img text-center">
                                            <img class="img-fluid" src="{{asset($item->imagen)}}" alt="img-placeholder">
                                        </div>
                                        <div class="card-body">
                                            <div class="item-wrapper">
                                                <div class="item-rating">
                                                    <div class="badge badge-primary badge-md">
                                                        <span>4</span> <i class="feather icon-star"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h6 class="item-price">
                                                        $39.99
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="item-name">
                                                <span>{{ $item->nombre }}</span>
                                                <p class="item-company">By <span class="company-name">Google</span></p>
                                            </div>
                                            <div>
                                                <p class="item-description">
                                                    {{ $item->descripcion }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="item-options text-center">
                                            <div class="item-wrapper">
                                                <div class="item-rating">
                                                    <div class="badge badge-primary badge-md">
                                                        <span>4</span> <i class="feather icon-star"></i>
                                                    </div>
                                                </div>
                                                <div class="item-cost">
                                                    <h6 class="item-price">
                                                        $39.99
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="wishlist">
                                                <i class="fa fa-heart-o"></i> <span>Me Gusta</span>
                                            </div>
                                            <div class="wishlist">
                                                {{-- <a href="app-ecommerce-checkout.html" class="view-in-cart d-none">View In Cart</a> --}}
                                                <a href="{{ url('detalle') }}"><i class="fa fa-th-list"></i> <span>Ver Detalle</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        </section>
                        
                </div>

            </div>
            

        </section>
       
  
  
 </div>
    
</div>


@endsection