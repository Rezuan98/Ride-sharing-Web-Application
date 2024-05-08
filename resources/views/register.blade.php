@extends('landing.landing')

@section('keyTitle', 'Register');


@section('maincontent')





<div class="container mt-3">
    <div class="row ">
        <div class="col-lg-6">

            <button class="registration2"><a href="{{route('passenger_register')}}">Register as a passenger</a></button>
            
            
           
        </div>


        <div class="col-lg-6">
            <button class="registration1"><a href="{{route('rider_register')}}">Register as Rider</a></button>

        </div>
         
    </div>
</div>


@endsection