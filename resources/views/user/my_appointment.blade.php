<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('user.include.header')
  @if (session()->has('message'))
      <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
      </div>
  @endif
  
  <div aling="center" style="padding: 70px">
    <table class="table table-bordered">
        <thead class="thead-dark">
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Doctor</th>
        <th>Paitent Name</th>
        <th>Appointment</th>
        <th>Status</th>
        </thead>
        
       @foreach ($user as $appo )
       <tr>
        <td>{{$appo->name}}</td>
        <td>{{$appo->email}}</td>
        <td>{{$appo->date}}</td>
        <td>{{$appo->phone}}</td>
        <td>{{$appo->message}}</td>
        <td>{{$appo->doctor}}</td>
        <td>{{$appo->username}}</td>
        <td>{{$appo->status}}</td>
        <td><a class="btn btn-warning" href="{{url('cancel_appointment',$appo->id)}}">{{__('Cancel')}}</a></td>
        
    </tr>
       @endforeach
    </table>
  </div>
   
  
    @include('user.include.footer')
</body>
</html>