@extends('landing.landing')

@section('keyTitle', 'Profile')

@section('maincontent')
<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    User Profile
                </div>
                <div class="card-body">
                    <!-- User data here -->
                    <div class="mb-3">
                        <strong>Name:</strong> {{ Auth::user()->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Email:</strong> {{ Auth::user()->email }}
                    </div>
                    <!-- Add more user data fields as needed -->
                </div>
            </div>
        </div>
        <!-- Main Body -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Ride Booking Details
                </div>
                <div class="card-body">
                    <!-- Ride booking details here -->
                    <!-- You can fetch and display ride booking details dynamically -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ride Date</th>
                                    <th>Origin</th>
                                    <th>Destination</th>
                                    <!-- Add more table headers as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Iterate over ride booking details and display them in rows -->
                                @foreach($rideBookings as $rideBooking)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rideBooking->ride_date }}</td>
                                    <td>{{ $rideBooking->origin }}</td>
                                    <td>{{ $rideBooking->destination }}</td>
                                    <!-- Add more table cells for other details -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
