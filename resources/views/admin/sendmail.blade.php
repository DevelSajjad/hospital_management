@extends('admin.master')

@section('body')

<div class="row" align="center" >
    <form class="col-6 offset-3" action="{{url('sentmail',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row" style="padding: 15px">
            <label class="col-3 text-left" for="">Greeting</label>
            <input class="col-9" type="text" style="color: black" name="greeting" >
        </div>
        <div class="row" style="padding: 15px">
            <label class="col-3 text-left" for="">Body</label>
            <input class="col-9" type="text" style="color: black" name="body">
        </div>
        <div class="row" style="padding: 15px">
            <label class="col-3" for="">Action Text</label>
            <input class="col-9" type="text" style="color: black" name="actiontext">
        </div>
        <div class="row" style="padding: 15px">
            <label class="col-3" for="">Action Url</label>
            <input class="col-9" type="text" style="color: black" name="actionurl" >
        </div>
        <div class="row" style="padding: 15px">
            <label class="col-3" for="">End Part</label>
            <input class="col-9" type="text" style="color: black" name="endpart" >
        </div>
        
        <div style="padding: 15px">
            <input type="submit" class="btn btn-success"  name="submit" >
        </div>
    </form>
</div>

@endsection