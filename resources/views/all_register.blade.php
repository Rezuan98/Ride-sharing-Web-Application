@extends('landing.landing')

@section('keyTitle', 'Register');


@section('maincontent')

<div class="dri_register">
    <h3>User Register </h3>
    <form action="{{url('/insertuser')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="" class="form-control" placeholder="Enter Your Name">
        <input type="text" name="city" id="" class="form-control" placeholder="Enter Your city">
        <input type="file" name="image" id="" class="form-control" >
        <input type="text" name="nid" id="" class="form-control" placeholder="Enter NID Number">
        <input type="text" name="phone" id="" class="form-control" placeholder="Enter Phone Number">
        <input type="email" name="email" id="" class="form-control" placeholder="Enter Your Email">
        <input type="text" name="password" id="" class="form-control" placeholder="Create a Strong Password ">

    <br><br>
    <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
</div>


@endsection