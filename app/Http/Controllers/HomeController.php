<?php

namespace App\Http\Controllers;

use App\Models\Appoitment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype == 0){
                $doctor = Doctor::all();
                return view('user.home',['doctor'=>$doctor]);
            }else{
                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }

    function index() {
        if(Auth::id()){
            return redirect('home');
        } else{
            $doctor = Doctor::all();
            return view('user.home',['doctor'=>$doctor]);
        }
        
    }

    function appoitment(Request $request){
        $appoit = new Appoitment;
        $appoit->name = $request->name;
        $appoit->email = $request->email;
        $appoit->date = $request->date;
        $appoit->doctor = $request->doctor;
        $appoit->phone = $request->phone;
        $appoit->message = $request->message;
        $appoit->status = 'In Progress';
        if(Auth::id()){
            $appoit->user_id = Auth::user()->id;
        }
        $appoit->save();
        return redirect()->back()->with('message','Take Your Appointment. We will contact very soon');
    }

    function myappointment(){
        if(Auth::id()){
            $id = Auth::user()->id;
            $user = User::join('appoitments','users.id','=','appoitments.user_id')
            ->select('users.name as username', 'appoitments.*')
            ->where('user_id',$id)->get();
            return view('user.my_appointment',['user'=>$user]);
        }else{
            return redirect()->back();
        }
        
    }
    function cancel($id){
        $cancel = Appoitment::find($id);
        $cancel->delete();
        return redirect()->back();
    }
}
