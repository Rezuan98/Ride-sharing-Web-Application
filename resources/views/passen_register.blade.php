@extends('landing.landing')

@section('keyTitle', 'Register');


@section('maincontent')
<div class="dri_register">
    <h3>Register as Passenger</h3>
    <form action="">
        <input type="text" name="" id="" class="form-control" placeholder="Enter Your Name">
        <input type="text" name="" id="" class="form-control" placeholder="Enter Your city">
        <input type="text" name="" id="" class="form-control" placeholder="Enter Your Image">
        <input type="text" name="" id="" class="form-control" placeholder="Enter  Car Model">
        <input type="text" name="" id="" class="form-control" placeholder="Enter NID Number">
        <input type="text" name="" id="" class="form-control" placeholder="Enter Phone Number">
        <input type="text" name="" id="" class="form-control" placeholder="Enter Your Email">
        <input type="text" name="" id="" class="form-control" placeholder="Create a Strong Password ">

    <br><br>
    <button class="btn btn-primary p-3">Submit</button>
        
    </form>
</div>


@endsection