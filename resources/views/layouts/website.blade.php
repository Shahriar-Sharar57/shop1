<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      @php
          $basic=App\Models\Basic::where('basic_status',1)->where('basic_id',1)->firstOrFail();
          $social=App\Models\SocialMedia::where('sm_status',1)->where('sm_id',1)->firstOrFail();
          $conInfo=App\Models\ContactInformation::where('ci_status',1)->where('ci_id',1)->firstOrFail();
      @endphp
      <title>{{$basic->basic_title}} :: {{$basic->basic_subtitle}}</title>
      <link rel="stylesheet" href="{{asset('contents/website')}}/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{asset('contents/website')}}/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{asset('contents/website')}}/css/slick.css">
      <link rel="stylesheet" href="{{asset('contents/website')}}/css/meanmenu.min.css">
      <link rel="stylesheet" href="{{asset('contents/website')}}/css/jQuery.fancybox.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('contents/website')}}/css/style.css">
      <link rel="stylesheet" href="{{asset('contents/website')}}/css/media.css">
  </head>
  <body>
    <!-- Header Part Start -->
     <header id="header">
         <div class="container">
             <div class="row">
                 <div class="header-content">
                     <div class="col-md-4">
                         <div class="header-left">
                              <div class="sel-box">
                                   <a href="tel:+12345678900">Toll Free: {{$conInfo->ci_phone1}}</a>
                              </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-md-offset-4">
                         <div class="header-right text-right">
                             <ul>
                                 <li>
                                     <a href="shopping-cart.html"><i class="fa fa-heart"></i> Wishlist</a>
                                 </li>
                                 <li>
                                     <a href="my-account.html"><i class="fa fa-user"></i> My Account</a>
                                 </li>
                                 <li>
                                     <a href="my-account.html">Login / Register</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </header>
  <!-- Header Part End -->

  <!-- mobile menu end -->
      <nav class="mobile-menu hidden">
        <a href="{{url('/')}}">
            <img src="{{asset('uploads/'.$basic->basic_logo)}}" alt="{{$basic->basic_title}}">
        </a>
         <ul>
              <li class="">
                  <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                  <ul>
                    <a class="" href="{{url('/')}}">Home 1</a>
                    <a class="" href="index2.html">Home 2</a>
                  </ul>
                </li>
                <li class="">
                  <a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Shop
                  </a>
                  <ul>
                    <a class="" href="product-grid-view.html">Product Grid View</a>
                    <a class="" href="product-grid-view-with-sidebar.html">Product Grid View With Sidebar</a>
                    <a class="" href="product-list-view-with-sidebar.html">Product List View With Sidebar</a>
                    <a class="" href="product-details.html">Product Details</a>
                  </ul>
                </li>
              <li><a href="{{url('contact')}}">Contact</a></li>
          </ul>
      </nav>
  <!-- mobile menu end -->

  <!-- Navbar Part Start -->
        <nav class="navbar navbar-default hidden-xs">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{url('/')}}">
                  <img src="{{asset('uploads/'.$basic->basic_logo)}}" alt="{{$basic->basic_title}}" class="img-responsive">
              </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Home
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{url('/')}}">Home 1</a>
                      <a class="dropdown-item" href="index2.html">Home 2</a>
                    </div>
                  </li>
                  <li><a class="dropdown-item" href="about.html">About</a></li>
                  @php
                      $allMPC=App\Models\MainProductCategory::where('mpc_status',1)->where('mpc_home',1)->orderBy('mpc_name','ASC')->get();
                  @endphp
                  @foreach($allMPC as $mpc)
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{$mpc->mpc_name}}
                    </a>
                    @php
                      $mpcID=$mpc->mpc_id;
                      $allPC=App\Models\ProductCategory::where('pc_status',1)->where('mpc_id',$mpcID)->get();
                      $allPCcount=App\Models\ProductCategory::where('pc_status',1)->where('mpc_id',$mpcID)->count();
                    @endphp
                    @if($allPCcount!=0)
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      @foreach($allPC as $pc)
                      <a class="dropdown-item" href="{{url('product/category/'.$pc->pc_slug)}}">{{$pc->pc_name}}</a>
                      @endforeach
                    </div>
                    @endif
                  </li>
                  @endforeach
                <li><a href="{{url('contact')}}">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="search-form">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="search" id="search" placeholder="search">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </form>
                </li>
                <li class="tahsan"><span><a href="#"><i class="fa fa-shopping-bag"></i> 2 Items</a>
                  </span>

                      <div class="items text-left">
                          <div class="items-total">
                              <p>You have <span>02 items</span> in your shopping bag</p>
                          </div>
                          <div class="item-choose-main">
                              <div class="item-choose">
                                  <ul>
                                      <li>
                                          <img src="{{asset('contents/website')}}/images/items1.png" alt="item1" class="img-responsive">
                                      </li>
                                      <li>
                                          <h3>T-shirt for Women</h3>
                                          <p>Price : $ 99.00</p>
                                          <p>Qty :  02</p>
                                      </li>
                                      <li>
                                          <i class="fa fa-trash-o"></i>
                                      </li>
                                  </ul>
                              </div>
                              <div class="item-choose">
                                  <ul>
                                      <li>
                                          <img src="{{asset('contents/website')}}/images/items2.png" alt="item1" class="img-responsive">
                                      </li>
                                      <li>
                                          <h3>T-shirt for Women</h3>
                                          <p>Price : $ 99.00</p>
                                          <p>Qty :  02</p>
                                      </li>
                                      <li>
                                          <i class="fa fa-trash-o"></i>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="total-price">
                              <h3>Total <span>$ 500.00</span></h3>
                          </div>
                          <div class="items-check text-center">
                              <a href="#">view cart</a>
                              <a class="check-out" href="#">Checkout</a>
                          </div>
                      </div>
                  </li>
               </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar Part End -->

    <!-- mobile logo start -->
    <nav class="navbar-default visible-xs">
      <div class="container">
          <div class="navbar-header">
              <a class="navbar-brand" href="{{url('/')}}">
                  <img src="{{asset('contents/website')}}/images/logo.png" alt="logo" class="img-responsive">
              </a>
              <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="search-form">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="search" placeholder="search">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </form>
                </li>
                <li class="tahsan"><span><a href="#"><i class="fa fa-shopping-bag"></i> 2 Items</a>
                  </span>

                      <div class="items text-left">
                          <div class="items-total">
                              <p>You have <span>02 items</span> in your shopping bag</p>
                          </div>
                          <div class="item-choose-main">
                              <div class="item-choose">
                                  <ul>
                                      <li>
                                          <img src="{{asset('contents/website')}}/images/items1.png" alt="item1" class="img-responsive">
                                      </li>
                                      <li>
                                          <h3>T-shirt for Women</h3>
                                          <p>Price : $ 99.00</p>
                                          <p>Qty :  02</p>
                                      </li>
                                      <li>
                                          <i class="fa fa-trash-o"></i>
                                      </li>
                                  </ul>
                              </div>
                              <div class="item-choose">
                                  <ul>
                                      <li>
                                          <img src="{{asset('contents/website')}}/images/items2.png" alt="item1" class="img-responsive">
                                      </li>
                                      <li>
                                          <h3>T-shirt for Women</h3>
                                          <p>Price : $ 99.00</p>
                                          <p>Qty :  02</p>
                                      </li>
                                      <li>
                                          <i class="fa fa-trash-o"></i>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="total-price">
                              <h3>Total <span>$ 500.00</span></h3>
                          </div>
                          <div class="items-check text-center">
                              <a href="#">view cart</a>
                              <a class="check-out" href="#">Checkout</a>
                          </div>
                      </div>
                  </li>
               </ul>
            </div>
        </div>
    </nav>
    @yield('content')
     <section id="footer">
         <div class="footer-bg">
             <div class="container">
                 <div class="row">
                     <div class="footer-main">
                         <div class="col-md-3 col-sm-6">
                             <div class="footer-logo">
                                 <a href="#"><img src="{{asset('uploads/'.$basic->basic_flogo)}}" alt="{{$basic->basic_title}}" class="img-responsive"></a>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                 <p>magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                             </div>
                         </div>
                         <div class="col-md-3 col-sm-6">
                             <div class="contact">
                              <h2>Contact us</h2>
                                 <p><i class="fa fa-map-marker"></i> <a href="#">{{$conInfo->ci_add1}}</a> </p>
                                 <p><i class="fa fa-phone"></i> <a href="tel:{{$conInfo->ci_phone1}}">{{$conInfo->ci_phone1}}</a>,<a href="tel:{{$conInfo->ci_phone2}}"> {{$conInfo->ci_phone2}}</a> </p>
                                 <p><i class="fa fa-envelope"></i> <a href="mailto:{{$conInfo->ci_email1}}">{{$conInfo->ci_email1}}</a>,<a href="mailto:{{$conInfo->ci_email2}}"> {{$conInfo->ci_email2}}</a> </p>
                                 <p><i class="fa fa-globe"></i> <a href="www.e-feri.com">www.e-feri.com</a>,<a href="www.infoferi.com">www.infoferi.com</a> </p>
                             </div>
                         </div>
                         <div class="col-md-2 col-sm-6">
                             <div class="account">
                                <h2>my account</h2>
                                 <a href="my-account.html">my account</a>
                                 <a href="shopping-cart.html">wishlist</a>
                                 <a href="shopping-cart.html">shopping cart</a>
                                 <a href="#">compare</a>
                                 <a href="checkout.html">checkout</a>
                             </div>
                         </div>
                         <div class="col-md-4 col-sm-6">
                             <div class="newsletter">
                                 <h2>Sign Up For Newsletter</h2>
                                     <form>
                                         <div class="input-group">
                                              <input id="1" class="form-control" type="text" name="search" placeholder="Your Mail" required/>
                                              <span class="input-group-btn">
                                              <button class="btn btn-success" type="submit">Submit</button>
                                              </span>
                                         </div>
                                     </form>
                                 <div class="footer-social">
                                     <h3>follow us on</h3>
                                     <a href="{{$social->sm_facebook}}"><i class="fa fa-facebook"></i></a>
                                     <a href="{{$social->sm_twitter}}"><i class="fa fa-twitter"></i></a>
                                     <a href="{{$social->sm_pinterest}}"><i class="fa fa-pinterest-p"></i></a>
                                     <a href="{{$social->sm_youtube}}"><i class="fa fa-youtube"></i></a>
                                     <a href="{{$social->sm_linkedin}}"><i class="fa fa-linkedin"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Footer Part End -->

     <!-- Footer Bottom Start -->
     <section id="footer-btm">
         <div class="container">
             <div class="row">
                 <div class="col-md-6 col-xs-12">
                    <div class="copywright">
                         <p>Copyright &copy; 2017. All right reserved by <a href="{{url('/')}}">E-BUY</a></p>
                     </div>
                 </div>
                 <div class="col-md-6 col-xs-12">
                     <div class="payment text-right">
                         <img src="{{asset('contents/website')}}/images/card1.png" alt="card" class="img-responsive">
                         <img src="{{asset('contents/website')}}/images/card2.png" alt="card" class="img-responsive">
                         <img src="{{asset('contents/website')}}/images/card3.png" alt="card" class="img-responsive">
                         <img src="{{asset('contents/website')}}/images/card4.png" alt="card" class="img-responsive">
                         <img src="{{asset('contents/website')}}/images/card5.png" alt="card" class="img-responsive">
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Footer Bottom End -->


      <script src="{{asset('contents/website')}}/js/jquery-1.12.4.min.js"></script>
      <script src="{{asset('contents/website')}}/js/bootstrap.min.js"></script>
      <script src="{{asset('contents/website')}}/js/slick.js"></script>
      <script src="{{asset('contents/website')}}/js/jquery.countdown.min.js"></script>
      <script src="{{asset('contents/website')}}/js/jquery.elevatezoom.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
      <script src="{{asset('contents/website')}}/js/jquery.fancybox.pack.js"></script>
      <script src="{{asset('contents/website')}}/js/handleCounter.js"></script>
      <script src="{{asset('contents/website')}}/js/xzoom.min.js"></script>
      <script src="{{asset('contents/website')}}/js/setup.js"></script>
      <script src="{{asset('contents/website')}}/js/jquery.meanmenu.min.js"></script>
      <script src="{{asset('contents/website')}}/js/main.js"></script>
      <script>
       $(function ($) {
              var options = {
                  minimum: 1,
                  maximize: 100,
                  onChange: valChanged,
                  onMinimum: function(e) {
                      console.log('reached minimum: '+e)
                  },
                  onMaximize: function(e) {
                      console.log('reached maximize'+e)
                  }
              }
              $('#handleCounter').handleCounter(options)
              $('#handleCounter2').handleCounter(options)
              $('#handleCounter3').handleCounter(options)
              $('#handleCounter4').handleCounter(options)
  			$('#handleCounter3').handleCounter({maximize: 100})
          })
          function valChanged(d) {
  //            console.log(d)
          }
      </script>
  </body>
</html>
