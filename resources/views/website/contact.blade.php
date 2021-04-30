@extends('layouts.website')
@section('content')
   <section id="about">
       <div class="container">
           <div class="row">
               <div class="about-heading text-center">
                   <h2>Contact</h2>
                   <p><a href="#">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>contact</span></p>
               </div>
           </div>
       </div>
   </section>
<!-- About Banner End -->

<!-- Contact part Start -->
<section id="account">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact">
                   <form method="post" action="{{url('contact/submit')}}">
                     @csrf
                    <h3>Send us a Message</h3>
                    <div class="col-md-6 pl0 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 email">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="col-md-6 pl0 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 location">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                        </div>
                    </div>
                    <div class="col-md-12 pl0">
                        <div class="form-group mb-0">
                            <textarea class="form-control" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                            <div class="sub">
                                <button type="submit" class="btn"><i class="fa fa-paper-plane"></i> </button>
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-us">
                    <h3>Contact with us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliua Ut enim.</p>
                    <p><i class="fa fa-map-marker"></i> <a href="#">1234, Parkstreet Avenue, NewYork</a></p>
                    <p><i class="fa fa-phone"></i><a href="tel:+12345678900">+123 456 78900</a> <a href="tel:+00987654321">, +009 876 54321</a></p>
                    <p><i class="fa fa-envelope"></i><a href="mailto:info@e-feri.com">info@e-feri.com</a>,<a href="mailto:e-feri@info.com">e-feri@info.com</a></p>
                    <p><i class="fa fa-globe"></i> <a href="https://www.e-feri.com" target="_blank">www.e-feri.com</a>,<a href="https://www.infoferi.com" target="_blank">www.infoferi.com</a> </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact part End -->

<!-- Brand Start -->
<section id="brand">
  <i class="fa fa-chevron-left prv-arrow4"></i>
  <i class="fa fa-chevron-right nxt-arrow4"></i>
   <div class="container">
       <div class="row">
           <div class="brand-slider">
               <div class="col-md-2">
                   <a href="#">
                       <div class="brand-item">
                           <img src="{{asset('contents/website')}}/images/brand2.png" alt="brand" class="img-responsive">
                       </div>
                   </a>
               </div>
               <div class="col-md-2">
                   <a href="#">
                       <div class="brand-item">
                           <img src="{{asset('contents/website')}}/images/brand1.png" alt="brand" class="img-responsive">
                       </div>
                   </a>
               </div>
               <div class="col-md-2">
                   <a href="#">
                       <div class="brand-item">
                           <img src="{{asset('contents/website')}}/images/brand3.png" alt="brand" class="img-responsive">
                       </div>
                   </a>
               </div>
               <div class="col-md-2">
                   <a href="#">
                       <div class="brand-item">
                           <img src="{{asset('contents/website')}}/images/brand4.png" alt="brand" class="img-responsive">
                       </div>
                   </a>
               </div>
               <div class="col-md-2">
                   <a href="#">
                       <div class="brand-item">
                           <img src="{{asset('contents/website')}}/images/brand5.png" alt="brand" class="img-responsive">
                       </div>
                   </a>
               </div>
               <div class="col-md-2">
                   <a href="#">
                       <div class="brand-item">
                           <img src="{{asset('contents/website')}}/images/brand3.png" alt="brand" class="img-responsive">
                       </div>
                   </a>
               </div>
           </div>
       </div>
   </div>
</section>
@endsection
