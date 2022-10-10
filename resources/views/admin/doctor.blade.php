@extends('admin.master')
@section('body')
<style>
    label{
        display: inline-block;
        width: 200px;
    }

</style>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('message')}}
            </div>
        @endif
    </div>
    <div class="row" align="center" >
        <form class="col-6 offset-3" action="{{url('add_doctor')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row" style="padding: 15px">
                <label class="col-3 text-left" for="">Doctor Name</label>
                <input class="col-9" type="text" style="color: black" name="name" placeholder="Doctor Name">
            </div>
            <div class="row" style="padding: 15px">
                <label class="col-3 text-left" for="">Phone</label>
                <input class="col-9" type="text" style="color: black" name="phone" placeholder="Number">
            </div>
            <div class="row" style="padding: 15px">
                <label class="col-3" for="">Speciality</label>
                    <select class="col-9" name="speciality" style="color: black" id="">
                        <option value="">...Select...</option>
                        <option value="Eye">Eye</option>
                        <option value="Heart">Heart</option>
                        <option value="Nose">Nose</option>
                        <option value="Ear">Ear</option>
                        <option value="Skin">Skin</option>
                    </select>
            </div>
            <div class="row" style="padding: 15px">
                <label class="col-3" for="">Room No</label>
                <input class="col-9" type="text" style="color: black" name="room" placeholder="Room Number">
            </div>
            <div class="row" style="padding: 15px">
                <label class="col-3" for="">Image</label>
                <input class="col-9" type="file" style="color: black" name="file" >
            </div>
            <div style="padding: 15px">
                <input type="submit" class="btn btn-success"  name="submit" >
            </div>
        </form>
    </div>
@endsection