@extends('admin.master')

@section('body')

    <div class="container-fluid page-body-wrapper">
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Speciality</th>
                    <th>Room</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Update</th>
                </thead>
                @foreach ($data as $doctors )
                <tr>
                    <td>{{ $doctors->name }}</td>
                    <td>{{ $doctors->speciality }}</td>
                    <td>{{ $doctors->room }}</td>
                    <td>{{ $doctors->phone }}</td>
                    <td><img style=" height:100px; width: 150px; " src="doctor_image/{{$doctors->image}}" alt="" srcset=""></td>
                    <td><a onclick=" return confirm('Are You Sure!!')" href="{{ url('delete_doctor',$doctors->id) }}" class="btn btn-warning">Delete</a></td>
                    <td><a href="{{ url('update_view',$doctors->id) }}" class="btn btn-light">Update</a></td>
                </tr>
                @endforeach
                    
            </table>
    </div>

@endsection