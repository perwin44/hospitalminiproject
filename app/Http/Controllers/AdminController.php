<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Notification;

class AdminController extends Controller
{
    public function add_doctor_view(){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                return view('admin.add_doctor');
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function upload_doctor(Request $request){
        $doctor=new Doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->speciality=$request->speciality;
        $doctor->phone=$request->phone;
        $doctor->room=$request->room;
        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully!');
    }

    public function show_appointment(){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
        $data=Appointment::all();
        return view('admin.show_appointment',compact('data'));
    }
    else{
        return redirect()->back();
    }
}
else{
    return redirect('login');
}
    }

    public function approved($id){
        $data=Appointment::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back()->with('message','Appointment Approved Successfully!');
    }

    public function canceled($id){
        $data=Appointment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back()->with('message','Appointment Canceled!');
    }

    public function show_doctors(){
        $data=Doctor::all();
        return view('admin.show_doctors',compact('data'));
    }

    public function delete_doctor($id){
        $data=Doctor::find($id);
        $data->delete();
        return redirect()->back()->with('message','Doctor Deleted Successfully!');
    }

    public function update_doctor($id){
        $data=Doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }

    public function edit_doctor(Request $request,$id){
        $doctor=Doctor::find($id);
        $doctor->name=$request->name;
        $doctor->speciality=$request->speciality;
        $doctor->phone=$request->phone;
        $doctor->room=$request->room;

        $image=$request->file;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
    }

        $doctor->save();
        return redirect()->back()->with('message','Doctor Updated Successfully!');
    }

    public function email_view($id){
        $data=Appointment::find($id);
        return view('admin.email_view',compact('data'));
    }

    public function send_email(Request $request,$id){
        $data=Appointment::find($id);
        $details=[
            'greeting'=>$request->greeting,
            'body'=>$request->body,
            'actiontext'=>$request->actiontext,
            'actionurl'=>$request->actionurl,
            'endpart'=>$request->endpart,
        ];
        Notification::send($data,new SendEmailNotification($details));

        return redirect()->back()->with('message','Email Send is Successfull');
    }
}
