@extends('layouts.website')
@section('content')
   <section id="about">
       <div class="container">
           <div class="row">
               <div class="about-heading text-center">
                   <h2>Product Grid View With Sidebar</h2>
                   <p><a href="index.html">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Product Grid View With Sidebar</span></p>
               </div>
           </div>
       </div>
   </section>
   <!-- About Banner End -->

   <!-- Product-item start -->
   <section id="product-grid-sidebar">
       <div class="container">
           <div class="row">
               @component('website.includes.category-sidebar')
               @endcomponent
               <div class="col-md-9">
                  <div class="pro-grid-sidebar col-md-12">
                       <div class="col-md-2 col-sm-4">
                           <div class="grid-type">
                                <div class="btn-group">
                                   <a href="product-grid-view.html" id="grid" class="btn btn-default btn-sm"><span
                                    class="glyphicon glyphicon-th"></span></a>
                                    <a href="product-list-view-with-sidebar.html" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                                    </span></a>
                                </div>
                            </div>
                       </div>
                       <div class="col-md-4 col-sm-8">
                           <div class="sort text-right">
                               <label>Sort by</label>
                               <select>
                                   <option value="Name">Name</option>
                                   <option value="brand">brand</option>
                                   <option value="price">price</option>
                               </select>
                               <label>Showing</label>
                               <select>
                                   <option value="Name">12</option>
                                   <option value="brand">18</option>
                                   <option value="price">24</option>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-6 col-sm-12">
                           <div class="pages text-right">
                               <ul class="pagination">
                                  <li class=""><a href="#">Pages:</a></li>
                                  <li class="active"><a href="#">01 <span class="sr-only">(current)</span></a></li>
                                  <li><a href="#">02</a></li>
                                  <li><a href="#">03</a></li>
                                  <li><a href="#">04</a></li>
                                  <li class="of"><a href="#">of</a></li>
                                  <li><a href="#">50</a></li>
                                  <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                           </div>
                       </div>
                   </div>
                   <div class="latest-main">
                       <div class="product-grid-item">
                          @php
                            $cateID=$data->pc_id;
                            $allProdu=App\Models\Product::where('product_status',1)->where('pc_id',$cateID)->get();
                          @endphp
                          @foreach($allProdu as $product)
                           <div class="gallery_product col-md-4 col-sm-4">
                                <div class="featured-product">
                                    <a href="{{url('product/details/'.$product->product_slug)}}"><img src="{{asset('uploads/'.$product->product_image)}}" alt="featured-product-img" class="img-responsive"></a>
                                    <div class="overlay2 text-center">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-random"></i></a>
                                        <a href="#"><i class="fa fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="feat-details feat-details2">
                                    <p>{{$product->product_name}}</p><span>{{$product->product_price}}</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </div>
                            </div>
                            @endforeach
                       </div>
                   </div>
                   <div class="clearfix"></div>
                   <div class="pages-bottom">
                       <div class="pages pages2 text-center">
                           <ul class="pagination">
                              <li class=""><a href="#">Pages:</a></li>
                              <li class="active"><a href="#">01 <span class="sr-only">(current)</span></a></li>
                              <li><a href="#">02</a></li>
                              <li><a href="#">03</a></li>
                              <li><a href="#">04</a></li>
                              <li class="of"><a href="#">of</a></li>
                              <li><a href="#">50</a></li>
                              <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
@endsection
