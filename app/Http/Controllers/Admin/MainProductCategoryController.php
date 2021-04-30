<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainProductCategory;
use Image;
use Carbon\Carbon;

class MainProductCategoryController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
      $all = MainProductCategory::where('mpc_status',1)->orderBy('mpc_id','DESC')->get();
      return view('admin.product.main-category.all',compact('all'));
    }

    public function add(){
      return view('admin.product.main-category.add');
    }

    public function edit($slug){
      $all = MainProductCategory::where('mpc_status',1)->where('mpc_slug',$slug)->firstOrFail();
      return view('admin.product.main-category.edit',compact('all'));
    }

    public function insert(Request $request){
      $slug = 'product'.uniqid();
      $insert = MainProductCategory::insertGetId([
        'mpc_name'=>$request['product_name'],
        'mpc_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString(),
      ]);
      if($request->hasFile('pic')){
        $image = $request->file('pic');
        $imageName = 'product-'.time().'-'.$image->getClientOriginalExtension();

        Image::make($image)->resize(200,150)->save(base_path('public/'.$imageName));
        MainProductCategory::where('mpc_id',$insert)->update([
          'mpc_image'=>$imageName,
        ]);
      }

      if($insert){
        return redirect('admin/product/main/category/add');
      }else {
        return redirect('admin/product/main/category/add');
      }
    }

    public function update(Request $request){
      $id= $request['id'];
      $slug = 'product'.uniqid();
      $insert = MainProductCategory::where('mpc_status',1)->where('mpc_id',$id)->update([
        'mpc_name'=>$request['name'],
        'mpc_slug'=>$slug,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);


      if($insert){
        return redirect('admin/product/main/category/add');
      }else {
        return redirect('admin/product/main/category/add');
      }
    }

    public function softdelete($slug){
        $soft=MainProductCategory::where('mpc_status',1)->where('mpc_slug',$slug)->update([
            'mpc_status'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($soft){
          Session::flash('success_soft','value');
          return redirect('admin/banner');
        }else{
          return redirect('admin/banner');
          Session::flash('error','value');
        }
    }


}
