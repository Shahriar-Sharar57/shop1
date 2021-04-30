<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Banner;
use Carbon\Carbon;
use Session;
use Image;

class BannerController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $all=Banner::where('ban_status',1)->orderBy('ban_id','DESC')->get();
        return view('admin.banner.all',compact('all'));
    }

    public function add(){
        return view('admin.banner.add');
    }

    public function edit($slug){
        $data=Banner::where('ban_status',1)->where('ban_slug',$slug)->firstOrFail();
        return view('admin.banner.edit',compact('data'));
    }

    public function view($slug){
        $data=Banner::where('ban_status',1)->where('ban_slug',$slug)->firstOrFail();
        return view('admin.banner.view',compact('data'));
    }

    public function insert(Request $request){
        $this->validate($request,[
          'title'=>'required',
        ],[
          'title.required'=>'Please enter banner title!',
        ]);

        //$slug='B'.uniqid();
        $slugTitle = Str::slug($request['title'], '-');
        $slug=time().'-'.$slugTitle;
        $insert=Banner::insertGetId([
            'ban_title'=>$request['title'],
            'ban_subtitle'=>$request['subtitle'],
            'ban_button'=>$request['btn'],
            'ban_url'=>$request['url'],
            'ban_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('pic')){
            $image=$request->file('pic');
            $imageName='banner_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,200)->save(base_path('public/uploads/'.$imageName));

            Banner::where('ban_id',$insert)->update([
                'ban_image'=>$imageName,
            ]);
        }

        if($insert){
          Session::flash('success','value');
          return redirect('admin/banner/add');
        }else{
          Session::flash('error','value');
          return redirect('admin/banner/add');
        }
    }

    public function update(Request $request){
        $this->validate($request,[
          'title'=>'required',
        ],[
          'title.required'=>'Please enter banner title!',
        ]);

        //$slug='B'.uniqid();
        $id=$request['id'];
        $slugTitle = Str::slug($request['title'], '-');
        $slug=time().'-'.$slugTitle;

        $insert=Banner::where('ban_status',1)->where('ban_id',$id)->update([
            'ban_title'=>$request['title'],
            'ban_subtitle'=>$request['subtitle'],
            'ban_button'=>$request['btn'],
            'ban_url'=>$request['url'],
            'ban_slug'=>$slug,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('pic')){
            $image=$request->file('pic');
            $imageName='banner_'.$id.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,200)->save(base_path('public/uploads/'.$imageName));

            Banner::where('ban_id',$id)->update([
                'ban_image'=>$imageName,
            ]);
        }

        if($insert){
          Session::flash('success','value');
          return redirect('admin/banner/view/'.$slug);
        }else{
          return redirect('admin/banner/edit/'.$slug);
          Session::flash('error','value');
        }
    }

    public function softdelete($slug){
        $soft=Banner::where('ban_status',1)->where('ban_slug',$slug)->update([
            'ban_status'=>0,
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
