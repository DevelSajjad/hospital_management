@extends('admin.master');
@section('body')

<div class="row">
    <div class="col-6" aling="center" style="padding: 20px">
        <table style="width:" class="table table-bordered">
            <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Doctor</th>
            {{-- <th>Paitent Name</th> --}}
            <th>Status</th>
            <th>Approved</th>
            <th>Cancle</th>
            </thead>
            
           @foreach ($data as $appo )
           <tr>
            <td>{{$appo->name}}</td>
            <td>{{$appo->email}}</td>
            <td>{{$appo->date}}</td>
            <td>{{$appo->phone}}</td>
            <td>{{$appo->message}}</td>
            <td>{{$appo->doctor}}</td>
            {{-- <td>{{$appo->username}}</td> --}}
            <td>{{$appo->status}}</td>
            <td><a class="btn btn-success" href="{{url('approved',$appo->id)}}">Approved</a></td>
            <td><a class="btn btn-warning" href="{{url('cancel',$appo->id)}}">{{__('Cancel')}}</a></td>
            
        </tr>
           @endforeach
        </table>
      </div>
</div>

@endsection