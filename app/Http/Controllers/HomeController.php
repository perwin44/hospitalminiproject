<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype == '0'){
            $doctor=Doctor::all();
                return view('user.home',compact('doctor'));
            }
            else{
                return view('admin.home');
            }
        }


    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{
        $doctor=Doctor::all();
        return view('user.home',compact('doctor'));
    }
    }

    public function appointment(Request $request){
        $data=new Appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->date=$request->date;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In Progress';

        if(Auth::id()){
        $data->user_id=Auth::user()->id;
    }
    $data->save();
    return redirect()->back()->with('message','Appointment Request Successfull . We will contact with you soon');
    }

    public function my_appointment(){
        if(Auth::id()){
            if(Auth::user()->usertype==0){
            $userid=Auth::user()->id;
            $appoint=Appointment::where('user_id',$userid)->get();
        return view('user.my_appointment',compact('appoint'));
    }
    else{
        return redirect()->back();
    }
}
    else{
        return redirect()->back();
    }
    }

    public function cancel_appoint($id){
        $data=Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

}
