@extends('landing.landing')

@section('keyTitle', 'Confirm Email')

@section('maincontent')
<div class="container mt-4 mb-4 p-4">
    <div class="row">
        <div class="col-md-6 offset-md-3 p-4" style="background-color: rgba(130, 130, 197, 0.555)">
            <h3>Verify Your Email</h3>
            <p>we sent a confirmation code to your given email.please check your email and enter the code to log in</p>
            <form method="get" action="{{ route('confirm.code') }}">
                @csrf
                <div class="form-group">
                    <label for="confirmation_code">Confirmation Code</label>
                    <input type="text" class="form-control" id="confirmation_code" name="confirmation_code" required>
                </div><br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Get 30% Festival Goride Bonus From Booking 5 seat Once</h2>
            <p>Unlock a 30% Festival GoRide Bonus in bangla Nobo Borsho by booking five seats at once! Celebrate the joy of travel with
                friends and family while enjoying exclusive savings. Whether it's a festive getaway or a group
                adventure, GoRide rewards your group bookings with unparalleled discounts. Experience the thrill of
                exploring new destinations together without worrying about the cost. With GoRide, every journey becomes
                a memorable experience filled with laughter and shared moments. Don't miss out on this limited-time
                offer! Book your five seats now and indulge in the Festival GoRide Bonus. Start planning your next
                adventure today with GoRide.</p>
        </div>
        <div class="col-md-6">
       <img src="{{asset('images/tour.png')}}" alt="">

        </div>
    </div>
@endsection
