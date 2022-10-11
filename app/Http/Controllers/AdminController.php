<?php

namespace App\Http\Controllers;

use App\Models\Appoitment;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function doctorview(){
        return view('admin.doctor');
    }

    function upload(Request $request){
        $doctor = new Doctor;
        $image = $request->file;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctor_image',$imageName);
        $doctor->image = $imageName;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $doctor->save();
        return redirect()->back()->with( 'message','Add Doctor Successful');
    }

    function showappointments(){
        // $data =User::join('appoitments', 'users.id', '=', 'appoitments.user_id')->select('users.name as username', 'appoitments.*')->get();
        $data = Appoitment::all(); 
        return view('admin.appointments',compact('data'));
    }

    function approved($id){
        $data = Appoitment::find($id);
        $data->status = "Approved";
        $data->save();
        return redirect()->back();
    }
    
    function cancel($id){
        $data = Appoitment::find($id);
        $data->status = "Cancel";
        $data->save();
        return redirect()->back();
    }
}
