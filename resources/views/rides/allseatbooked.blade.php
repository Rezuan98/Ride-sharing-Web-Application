@extends('landing.landing')

@section('keyTitle', 'Profile')

@section('maincontent')

<div class="container mt-5">
    <div class="card text-center" style="background-color:  rgb(215, 215, 233); height:400px;">
        <div class="card-body">
            <h1 class="card-title"><i class="fa-solid fa-ban"></i> No Available Seat</h1>
            <p class="card-text">All seats Of this ride has been booked</p>
            <p class="card-text">You can check for other available rides or try again later.</p>
        </div>
    </div>
</div>


@endsection