<?php

namespace App\Http\Controllers\Admin;;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ProductCategory;
use Carbon\Carbon;
use Image;
use Session;


class ProductCategoryController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
      $all=ProductCategory::where('pc_status',1)->orderBy('pc_id','DESC')->get();
      return view('admin.product.category.all',compact('all'));
    }

    public function add(){
      return view('admin.product.category.add');
    }

    public function view($slug){
      $data=ProductCategory::where('pc_slug',$slug)->firstOrFail();
      return view('admin.product.category.view',compact('data'));
    }

    public function edit($slug){
      $data=ProductCategory::where('pc_slug',$slug)->firstOrFail();
      return view('admin.product.category.edit',compact('data'));
    }



    public function insert(Request $request){
        $this->validate($request,[
          'pc_name'=>'required',
          'mpc_name'=>'required',
        ],[
          'pc_name.required'=>'please enter product category name!',
          'mpc_name.required'=>'please enter main product category!',
        ]);

        $slugTitle = Str::slug($request['pc_name'], '-');
        $slug=time().'-'.$slugTitle;

        $insert=ProductCategory::insertGetId([
            'pc_name'=>$request['pc_name'],
            'mpc_id'=>$request['mpc_name'],
            'pc_image'=>$request['pic'],
            'pc_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('pic')){
            $image=$request->file('pic');
            $imageName='category_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save(base_path('public/uploads/'.$imageName));

            ProductCategory::where('pc_id',$insert)->update([
                'pc_image'=>$imageName,
            ]);
        }

        if($insert){
          Session::flash('success','value');
          return redirect('admin/product/category/add');
        }else{
          Session::flash('error','value');
          return redirect('admin/product/category/add');
        }


    }

    public function update(Request $request){
        $this->validate($request,[
          'pc_name'=>'required',
        ],[
          'pc_name.required'=>'please enter product category name!'
        ]);

        $slugTitle = Str::slug($request['pc_name'], '-');
        $slug=time().'-'.$slugTitle;
        $id=$request['id'];

        $update=ProductCategory::where('pc_id',$id)->update([
            'pc_name'=>$request['pc_name'],
            'pc_image'=>$request['pic'],
            'pc_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('pic')){
            $image=$request->file('pic');
            $imageName='category_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save(base_path('public/uploads/'.$imageName));

            ProductCategory::where('pc_id',$update)->update([
                'pc_image'=>$imageName,
            ]);
        }

        if($update){
          Session::flash('success','value');
          return redirect('admin/product/category/view/'.$slug);
        }else{
          Session::flash('error','value');
          return redirect('admin/product/category/edit/'.$slug);
        }


    }

    public function softdelete($slug){
        $softdelete=ProductCategory::where('pc_slug',$slug)->update([
          'pc_status'=>0,
          'update_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($softdelete){
          Session::flash('soft_success','value');
          return redirect('admin/product/category');
        }else{
          Session::flash('soft_error','value');
          return redirect('admin/product/category');
        }
    }


}
