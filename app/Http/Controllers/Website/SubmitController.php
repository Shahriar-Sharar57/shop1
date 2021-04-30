<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;
use App\Mail\ContactMail;
use App\Models\Contactus;
use Carbon\Carbon;
use Session;

class SubmitController extends Controller{
    public function __construct(){

    }

    public function index(){

    }

    public function contact(Request $request){
        $this->validate($request,[

        ],[

        ]);
        $slug='CON'.uniqid();
        $insert=Contactus::insert([
            'conus_name'=>$request->name,
            'conus_email'=>$request->email,
            'conus_phone'=>$request->phone,
            'conus_subject'=>$request->subject,
            'conus_message'=>$request->message,
            'conus_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString()
        ]);

        $email=$request->email;
        $name=$request->name;
        $subject=$request->subject;
        $message=$request->message;

        Mail::to($email)->send(new ContactMail($name,$subject,$message));

        if($insert){
          Session::flash('success','value');
          return redirect('contact');
        }else{
          Session::flash('error','value');
          return redirect('contact');
        }
    }


}
