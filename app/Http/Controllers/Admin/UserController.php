<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Session;
use PDF;

class UserController extends Controller{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('superadmin');
    }

    public function index(){
        $allUser=User::orderBy('id','DESC')->get();
        return view('admin.user.all',compact('allUser'));
    }

    public function add(){
        return view('admin.user.add');
    }

    public function edit(){

    }

    public function view($id){
        $data=User::where('id',$id)->firstOrFail();
        return view('admin.user.view',compact('data'));
    }

    public function insert(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|max:50',
            'email'=>'required|email|unique:users',
            'role'=>'required',
            'password'=>'required|min:8|confirmed',
        ],[
            'name.required'=>'Please enter name!',
            'name.min'=>'Please enter minmum 3 char!',
            'email.required'=>'Please enter email address!',
            'role.required'=>'Please select user role!',
            'password.required'=>'Please enter password!',
        ]);
        $insert=User::insert([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'user_role'=>$request['role'],
            'password'=>Hash::make($request['password']),
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            return redirect('admin/user');
        }else{
            return redirect('admin/user/add');
        }
    }

    public function update(){

    }

    public function softdelete(){

    }

    public function delete(){

    }

    public function restore(){

    }

    public function pdf(){
      $all=User::orderBy('id','DESC')->get();
      $pdf = PDF::loadView('admin.user.pdf', compact('all'));
      return $pdf->download('user.pdf');
    }

    public function excel(){
        return Excel::download(new UserExport, 'user.xlsx');
    }
}
