<div class="col-md-3">
    <div class="single category">
         <h3 class="side-title">Category</h3>
         @php
            $allProCate=App\Models\ProductCategory::where('pc_status',1)->orderBy('pc_name','ASC')->get();
         @endphp
         <ul class="list-unstyled">
           @foreach($allProCate as $pcate)
              @php
                  $pcateID=$pcate->pc_id;
                  $totalProduct=App\Models\Product::where('product_status',1)->where('pc_id',$pcateID)->count();
              @endphp
             <li><a href="" title="">{{$pcate->pc_name}} <span class="pull-right">{{$totalProduct}}</span></a></li>
          @endforeach
         </ul>
    </div>
    <div class="single category brand-name">
     <h3 class="side-title">Brand Name</h3>
         <ul>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox2" type="checkbox">
                     <label for="checkbox2">Nokia</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox3" type="checkbox">
                     <label for="checkbox3">Samsung</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox4" type="checkbox">
                     <label for="checkbox4">Apple</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox5" type="checkbox">
                     <label for="checkbox5">Blackberry</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox6" type="checkbox">
                     <label for="checkbox6">HTC</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox7" type="checkbox">
                     <label for="checkbox7">Symphony</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox8" type="checkbox">
                     <label for="checkbox8">Walton</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox9" type="checkbox">
                     <label for="checkbox9">Micromax</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox10" type="checkbox">
                     <label for="checkbox10">Maximus</label>
                 </div>
             </li>
         </ul>
    </div>
    <div class="single category price-range">
         <h3 class="side-title price-title">Filter By Price</h3>
         <div id="slider"></div>
    </div>
    <div class="single category brand-name">
     <h3 class="side-title">Filter By Color</h3>
         <ul>
             <li>
                 <div class="checkbox chek2 checkbox-success">
                     <input id="checkbox11" type="checkbox">
                     <label for="checkbox11">Orange</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox chek3 checkbox-success">
                     <input id="checkbox12" type="checkbox">
                     <label for="checkbox12">Red</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox chek4 checkbox-success">
                     <input id="checkbox13" type="checkbox">
                     <label for="checkbox13">Blue</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox chek5 checkbox-success">
                     <input id="checkbox14" type="checkbox">
                     <label for="checkbox14">Green</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox chek6 checkbox-success">
                     <input id="checkbox15" type="checkbox">
                     <label for="checkbox15">black</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox chek7 checkbox-success">
                     <input id="checkbox16" type="checkbox">
                     <label for="checkbox16">Pink</label>
                 </div>
             </li>
         </ul>
    </div>
    <div class="single category brand-name tahsan12">
     <h3 class="side-title">filter by size</h3>
         <ul>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox17" type="checkbox">
                     <label for="checkbox17">All Sizes</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox18" type="checkbox">
                     <label for="checkbox18">Extra large</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox19" type="checkbox">
                     <label for="checkbox19">Large</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox20" type="checkbox">
                     <label for="checkbox20">medium</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox21" type="checkbox">
                     <label for="checkbox21">small</label>
                 </div>
             </li>
             <li>
                 <div class="checkbox checkbox-primary">
                     <input id="checkbox22" type="checkbox">
                     <label for="checkbox22">XXL</label>
                 </div>
             </li>
         </ul>
    </div>
</div>
