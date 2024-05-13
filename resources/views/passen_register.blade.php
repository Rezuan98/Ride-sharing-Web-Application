@extends('landing.landing')

@section('keyTitle', 'Register');


@section('maincontent')
<div class="dri_register">
    <h3>Register as Rider</h3>
    <form action="{{url('/insertrider')}}" method="post" enctype="multipart/form-data">

        @csrf
        <input type="text" name="name" id="" class="form-control" placeholder="Enter Your Name">
        <input type="text" name="address" id="" class="form-control" placeholder="Enter Your Addreess">
        <label for="">Rider Image:</label>
        <input type="file" name="rider_image" id="" class="form-control" placeholder="Enter Rider Image">
        <label for="">Driving License Image:</label>
        <input type="file" name="car_image" id="" class="form-control" placeholder="Enter Driving Licence Image">
        <label for="">NID Front Image:</label>
        <input type="file" name="nid_front_image" id="" class="form-control" placeholder="Enter NID(Front) Image">
        <label for="">Rider Back Image:</label>
        <input type="file" name="nid_back_image" id="" class="form-control" placeholder="Enter NID(Back) Image">
        
        <input type="text" name="nid" id="" class="form-control" placeholder="Enter NID Number">
        <input type="text" name="driving_licence_number" id="" class="form-control" placeholder="Enter Driving Licence Number">
        <input type="text" name="car_model" id="" class="form-control" placeholder="Enter  Car Model">
        <input type="text" name="phone" id="" class="form-control" placeholder="Enter Phone Number">
        <input type="email" name="email" id="" class="form-control" placeholder="Enter Your Email">
        <input type="password" name="password" id="" class="form-control" placeholder="Create a Strong Password ">

    <br><br>
    <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
</div>


@endsection