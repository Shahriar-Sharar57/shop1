<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductCategory;
use Carbon\Carbon;
use Image;
use Session;
use Auth;

class WebsiteProductController extends Controller{
    public function __construct(){

    }

    public function index(){

    }

    public function category($slug){
        $data=ProductCategory::where('pc_status',1)->where('pc_slug',$slug)->firstOrFail();
        return view('website.product.category',compact('data'));
    }

    public function details($slug){
      $details=Product::where('product_status',1)->where('product_slug',$slug)->firstOrFail();
        return view('website.product.details',compact('details'));
    }
}
