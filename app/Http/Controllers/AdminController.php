<?php

namespace App\Http\Controllers;

use App\Models\Appoitment;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

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

    function doctors(){
        $data = Doctor::all();
        return view('admin.admin_doctors',compact('data'));
    }

    function delete_doctor($id){
        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
    function update_view($id){
        $data = Doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }

    function update(Request $request, $id){

        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $oldImage ='doctor_image/'.$doctor->image;
        $image = $request->file;
        if($image){
            if(file_exists($oldImage)){
                unlink($oldImage);  
            }
         $imageName = time().'.'.$image->getClientOriginalExtension();
         $request->file->move('doctor_image',$imageName);
         $doctor->image = $imageName; 
        }
        $doctor->save();
        return redirect()->back()->with('message','Update Successful');
    }
}
