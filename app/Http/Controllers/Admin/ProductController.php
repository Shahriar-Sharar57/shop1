<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;
use Session;
use Auth;

class ProductController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
      $all=Product::where('product_status',1)->orderBy('product_id','DESC')->get();
      return view('admin.product.product.all',compact('all'));
    }

    public function add(){
      return view('admin.product.product.add');
    }

    public function edit($slug){

    }

    public function view($slug){

    }
    public function insert(Request $request){
      $this->validate($request,[
        'name'=>'required',
        'mProcate'=>'required',
        'pcate'=>'required',
        'price'=>'required',
        'sdescription'=>'required',
        'infeature'=>'integer',
        'quantity'=>'required',
        'tags'=>'required',
        'pic'=>'required',
      ],[]);

      $slugTitle=Str::slug($request['name'],'-');
      $slug=time().$slugTitle;
      $creator=Auth::user()->id;
      $pcode='WK'.uniqid();

      $insert=Product::insertGetId([
        'product_name'=>$request['name'],
        'mpc_id'=>$request['mProcate'],
        'pc_id'=>$request['pcate'],
        'product_in_feature'=>$request['infeature'],
        'product_main_price'=>$request['mprice'],
        'product_discount'=>$request['dprice'],
        'product_price'=>$request['price'],
        'product_quanity'=>$request['quantity'],
        'product_short_description'=>$request['sdescription'],
        'product_description'=>$request['description'],
        'product_feature'=>$request['feature'],
        'product_tags'=>$request['tags'],
        'product_image'=>$request['pic'],
        'product_image2'=>$request['pic2'],
        'product_image3'=>$request['pic3'],
        'product_code'=>$pcode,
        'product_slug'=>$slug,
        'product_creator'=>$creator,
        'created_at'=>Carbon::now()->toDateTimeString(),
      ]);
      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName='Product_image'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(300,200)->save(base_path('public/uploads/'.$imageName));

          Product::where('product_id',$insert)->update([
              'product_image'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($request->hasFile('pic2')){
          $image=$request->file('pic2');
          $imageName='Product_image'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(300,200)->save(base_path('public/uploads/'.$imageName));
          Product::where('product_id',$insert)->update([
              'product_image2'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($request->hasFile('pic3')){
          $image=$request->file('pic3');
          $imageName='Product_image3'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(300,200)->save(base_path('public/uploads/'.$imageName));
          Product::where('product_id',$insert)->update([
              'product_image3'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }
      if($insert){
        Session::flash('success','value');
        return redirect('admin/product/add');
      }else{
        Session::flash('error','value');
        return redirect('admin/product/add');
      }

    }
    public function update(Request $request){

    }
    public function softdelete(){

    }
}
