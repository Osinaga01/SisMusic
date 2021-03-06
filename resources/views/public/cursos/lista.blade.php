@extends('dasboard.layout.public')
@section('content')
<div class="content-detached content-right">
  <div class="content-body">
      <!-- Ecommerce Content Section Starts -->
      <section id="ecommerce-header">
          <div class="row">
              <div class="col-sm-12">
                  <div class="ecommerce-header-items">
                      <div class="result-toggler">
                          <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                              <span class="navbar-toggler-icon d-block d-lg-none"><i class="feather icon-menu"></i></span>
                          </button>
                          {{-- <div class="search-results">
                              16285 results found
                          </div> --}}
                      </div>
                      <div class="view-options">
                        <div class="view-btn-option">
                            
                        </div>
                          {{-- <select class="price-options form-control" id="ecommerce-price-options">
                              <option selected>Featured</option>
                              <option value="1">Lowest</option>
                              <option value="2">Highest</option>
                          </select> --}}
                          <div class="view-btn-option">
                                
                              <button class="btn btn-white view-btn grid-view-btn active">
                                  <i class="feather icon-grid"></i>
                              </button>
                              <button class="btn btn-white list-view-btn view-btn">
                                  <i class="feather icon-list"></i>
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Ecommerce Content Section Starts -->
      <!-- background Overlay when sidebar is shown  starts-->
      <div class="shop-content-overlay"></div>
      <!-- background Overlay when sidebar is shown  ends-->

      <!-- Ecommerce Search Bar Starts -->
      <section id="ecommerce-searchbar">
          <div class="row mt-1">
              <div class="col-sm-12">
                  <fieldset class="form-group position-relative">
                      <input type="text" class="form-control search-product" id="iconLeft5" placeholder="Search here">
                      <div class="form-control-position">
                          <i class="feather icon-search"></i>
                      </div>
                  </fieldset>
              </div>
          </div>
      </section>
      <!-- Ecommerce Search Bar Ends -->

      <!-- Ecommerce Products Starts -->
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
                                    $09.99
                                </h6>
                            </div>
                        </div>
                        <div class="wishlist">
                            <i class="fa fa-heart-o"></i> <span>Me Gusta</span>
                        </div>
                        <div class="wishlist">
                            {{-- <a href="app-ecommerce-checkout.html" class="view-in-cart d-none">View In Cart</a> --}}
                            <a href="{{ url('detalle',$item->id) }}"><i class="fa fa-th-list"></i> <span>Ver Detalle</span></a>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach
         
         
         
      </section>
      <!-- Ecommerce Products Ends -->

      <!-- Ecommerce Pagination Starts -->
      {{-- <section id="ecommerce-pagination">
          <div class="row">
              <div class="col-sm-12">
                  <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center mt-2">
                          <li class="page-item prev-item"><a class="page-link" href="#">
                                  <i class="feather icon-chevron-left"></i>
                              </a></li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a></li>
                          <li class="page-item"><a class="page-link" href="#">5</a></li>
                          <li class="page-item"><a class="page-link" href="#">6</a></li>
                          <li class="page-item"><a class="page-link" href="#">7</a></li>
                          <li class="page-item next-item"><a class="page-link" href="#">
                                  <i class="feather icon-chevron-right"></i>
                              </a></li>
                      </ul>
                  </nav>
              </div>
          </div>
      </section> --}}
      <!-- Ecommerce Pagination Ends -->

  </div>
</div>
<div class="sidebar-detached sidebar-left">
  <div class="sidebar">
      <!-- Ecommerce Sidebar Starts -->
      <div class="sidebar-shop" id="ecommerce-sidebar-toggler">

          <div class="row">
              <div class="col-sm-12">
                  <h6 class="filter-heading d-none d-lg-block">Filtros</h6>
              </div>
          </div>
          <span class="sidebar-close-icon d-block d-md-none">
              <i class="feather icon-x"></i>
          </span>
          <div class="card">
              <div class="card-body">
                  {{-- <div class="multi-range-price">
                      <div class="multi-range-title pb-75">
                          <h6 class="filter-title mb-0">Multi Range</h6>
                      </div>
                      <ul class="list-unstyled price-range" id="price-range">
                          <li>
                              <span class="vs-radio-con vs-radio-primary py-25">
                                  <input type="radio" name="price-range" checked value="false">
                                  <span class="vs-radio">
                                      <span class="vs-radio--border"></span>
                                      <span class="vs-radio--circle"></span>
                                  </span>
                                  <span class="ml-50">All</span>
                              </span>
                          </li>
                          <li>
                              <span class="vs-radio-con vs-radio-primary py-25">
                                  <input type="radio" name="price-range" value="false">
                                  <span class="vs-radio">
                                      <span class="vs-radio--border"></span>
                                      <span class="vs-radio--circle"></span>
                                  </span>
                                  <span class="ml-50"> &lt;=$10</span>
                              </span>
                          </li>
                          <li>
                              <span class="vs-radio-con vs-radio-primary py-25">
                                  <input type="radio" name="price-range" value="false">
                                  <span class="vs-radio">
                                      <span class="vs-radio--border"></span>
                                      <span class="vs-radio--circle"></span>
                                  </span>
                                  <span class="ml-50">$10 - $100</span>
                              </span>
                          </li>
                          <li>
                              <span class="vs-radio-con vs-radio-primary py-25">
                                  <input type="radio" name="price-range" value="false">
                                  <span class="vs-radio">
                                      <span class="vs-radio--border"></span>
                                      <span class="vs-radio--circle"></span>
                                  </span>
                                  <span class="ml-50">$100 - $500</span>
                              </span>
                          </li>
                          <li>
                              <span class="vs-radio-con vs-radio-primary py-25">
                                  <input type="radio" name="price-range" value="false">
                                  <span class="vs-radio">
                                      <span class="vs-radio--border"></span>
                                      <span class="vs-radio--circle"></span>
                                  </span>
                                  <span class="ml-50">&gt;= $500</span>
                              </span>
                          </li>

                      </ul>
                  </div> --}}
                  <!-- /Price Filter -->
                  {{-- <hr>
                  <!-- /Price Slider -->
                  <div class="price-slider">
                      <div class="price-slider-title mt-1">
                          <h6 class="filter-title mb-0">Slider</h6>
                      </div>
                      <div class="price-slider">
                          <div class="price_slider_amount mb-2">
                          </div>
                          <div class="form-group">
                              <div class="slider-sm my-1 range-slider" id="price-slider"></div>
                          </div>
                      </div>
                  </div>
                  <!-- /Price Range -->
                  <hr> --}}
                  <!-- Categories Starts -->
                  <div id="product-categories">
                      <div class="product-category-title">
                            <a href="{{ asset('apk/APP_APOYO_U.apk') }}">
                                <button type="button"  dowload="APP_APOYO_U.apk" class="btn mr-1 mb-1 btn-primary waves-effect  waves-light">
                                      <i class="fa fa-android"></i>  Descargate Nuestra Aplicacion movil
                                </button>
                            </a>
                          <h6 class="filter-title mb-1">Categorias</h6>
                      </div>
                      <ul class="list-unstyled categories-list">
                          <li>
                              <span class="vs-radio-con vs-radio-primary py-25">
                                  <input type="radio" name="category-filter" value="false" checked>
                                  <span class="vs-radio">
                                      <span class="vs-radio--border"></span>
                                      <span class="vs-radio--circle"></span>
                                  </span>
                                  <span class="ml-50">Teoricos</span>
                              </span>
                          </li>
                          <li>
                              <span class="vs-radio-con vs-radio-primary py-25">
                                  <input type="radio" name="category-filter" value="false">
                                  <span class="vs-radio">
                                      <span class="vs-radio--border"></span>
                                      <span class="vs-radio--circle"></span>
                                  </span>
                                  <span class="ml-50">Practicos</span>
                              </span>
                          </li>
                          <li>
                              <span class="vs-radio-con vs-radio-primary py-25">
                                  <input type="radio" name="category-filter" value="false">
                                  <span class="vs-radio">
                                      <span class="vs-radio--border"></span>
                                      <span class="vs-radio--circle"></span>
                                  </span>
                                  <span class="ml-50">Piano</span>
                              </span>
                          </li>
                          

                      </ul>
                  </div>
                  <!-- Categories Ends -->
                  <hr>
                  <!-- Brands -->
                  {{-- <div class="brands">
                      <div class="brand-title mt-1 pb-1">
                          <h6 class="filter-title mb-0">Brands</h6>
                      </div>
                      <div class="brand-list" id="brands">
                          <ul class="list-unstyled">
                              <li class="d-flex justify-content-between align-items-center py-25">
                                  <span class="vs-checkbox-con vs-checkbox-primary">
                                      <input type="checkbox" value="false">
                                      <span class="vs-checkbox">
                                          <span class="vs-checkbox--check">
                                              <i class="vs-icon feather icon-check"></i>
                                          </span>
                                      </span>
                                      <span class="">Insignia™</span>
                                  </span>
                                  <span>746</span>
                              </li>
                              <li class="d-flex justify-content-between align-items-center py-25">
                                  <span class="vs-checkbox-con vs-checkbox-primary">
                                      <input type="checkbox" value="false">
                                      <span class="vs-checkbox">
                                          <span class="vs-checkbox--check">
                                              <i class="vs-icon feather icon-check"></i>
                                          </span>
                                      </span>
                                      <span class="">
                                          Samsung
                                      </span>
                                  </span>
                                  <span>633</span>
                              </li>
                              <li class="d-flex justify-content-between align-items-center py-25">
                                  <span class="vs-checkbox-con vs-checkbox-primary">
                                      <input type="checkbox" value="false">
                                      <span class="vs-checkbox">
                                          <span class="vs-checkbox--check">
                                              <i class="vs-icon feather icon-check"></i>
                                          </span>
                                      </span>
                                      <span class="">
                                          Metra
                                      </span>
                                  </span>
                                  <span>591</span>
                              </li>
                              <li class="d-flex justify-content-between align-items-center py-25">
                                  <span class="vs-checkbox-con vs-checkbox-primary">
                                      <input type="checkbox" value="false">
                                      <span class="vs-checkbox">
                                          <span class="vs-checkbox--check">
                                              <i class="vs-icon feather icon-check"></i>
                                          </span>
                                      </span>
                                      <span class="">HP</span>
                                  </span>
                                  <span>530</span>
                              </li>
                              <li class="d-flex justify-content-between align-items-center py-25">
                                  <span class="vs-checkbox-con vs-checkbox-primary">
                                      <input type="checkbox" value="false">
                                      <span class="vs-checkbox">
                                          <span class="vs-checkbox--check">
                                              <i class="vs-icon feather icon-check"></i>
                                          </span>
                                      </span>
                                      <span class="">Apple</span>
                                  </span>
                                  <span>442</span>
                              </li>
                              <li class="d-flex justify-content-between align-items-center py-25">
                                  <span class="vs-checkbox-con vs-checkbox-primary">
                                      <input type="checkbox" value="false">
                                      <span class="vs-checkbox">
                                          <span class="vs-checkbox--check">
                                              <i class="vs-icon feather icon-check"></i>
                                          </span>
                                      </span>
                                      <span class="">GE</span>
                                  </span>
                                  <span>394</span>
                              </li>
                              <li class="d-flex justify-content-between align-items-center py-25">
                                  <span class="vs-checkbox-con vs-checkbox-primary">
                                      <input type="checkbox" value="false">
                                      <span class="vs-checkbox">
                                          <span class="vs-checkbox--check">
                                              <i class="vs-icon feather icon-check"></i>
                                          </span>
                                      </span>
                                      <span class="">Sony</span>
                                  </span>
                                  <span>350</span>
                              </li>
                              <li class="d-flex justify-content-between align-items-center py-25">
                                  <span class="vs-checkbox-con vs-checkbox-primary">
                                      <input type="checkbox" value="false">
                                      <span class="vs-checkbox">
                                          <span class="vs-checkbox--check">
                                              <i class="vs-icon feather icon-check"></i>
                                          </span>
                                      </span>
                                      <span class="">Incipio</span>
                                  </span>
                                  <span>320</span>
                              </li>
                              <li class="d-flex justify-content-between align-items-center py-25">
                                  <span class="vs-checkbox-con vs-checkbox-primary">
                                      <input type="checkbox" value="false">
                                      <span class="vs-checkbox">
                                          <span class="vs-checkbox--check">
                                              <i class="vs-icon feather icon-check"></i>
                                          </span>
                                      </span>
                                      <span class="">KitchenAid</span>
                                  </span>
                                  <span>318</span>
                              </li>
                              <li class="d-flex justify-content-between align-items-center py-25">
                                  <span class="vs-checkbox-con vs-checkbox-primary">
                                      <input type="checkbox" value="false">
                                      <span class="vs-checkbox">
                                          <span class="vs-checkbox--check">
                                              <i class="vs-icon feather icon-check"></i>
                                          </span>
                                      </span>
                                      <span class="">Whirlpool</span>
                                  </span>
                                  <span>298</span>
                              </li>
                          </ul>
                      </div>
                  </div> --}}
                  <!-- /Brand -->
                  <hr>
                  <!-- Rating section starts -->
                  <div id="ratings">
                      <div class="ratings-title mt-1 pb-75">
                          <h6 class="filter-title mb-0">Ratings</h6>
                      </div>
                      <div class="d-flex justify-content-between">
                          <ul class="unstyled-list list-inline ratings-list mb-0">
                              <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                              <li>& up</li>
                          </ul>
                          <div class="stars-received">(160)</div>
                      </div>
                      <div class="d-flex justify-content-between">
                          <ul class="unstyled-list list-inline ratings-list mb-0">
                              <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                              <li>& up</li>
                          </ul>
                          <div class="stars-received">(176)</div>
                      </div>
                      <div class="d-flex justify-content-between">
                          <ul class="unstyled-list list-inline ratings-list mb-0">
                              <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                              <li>& up</li>
                          </ul>
                          <div class="stars-received">(291)</div>
                      </div>
                      <div class="d-flex justify-content-between">
                          <ul class="unstyled-list list-inline ratings-list mb-0 ">
                              <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                              <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                              <li>& up</li>
                          </ul>
                          <div class="stars-received">(190)</div>
                      </div>
                  </div>
                  <!-- Rating section Ends -->
                  <hr>
                  <!-- Clear Filters Starts -->
                  <div id="clear-filters">
                      <button class="btn btn-block btn-primary">CLEAR ALL FILTERS</button>
                  </div>
                  <!-- Clear Filters Ends -->

              </div>
          </div>
      </div>
      <!-- Ecommerce Sidebar Ends -->

  </div>
</div>
@endsection