@extends('landing.landing')

@section('keyTitle', 'search-Results');

@section('maincontent')

<h2 class="text-center bg-light p-4">Available Rides</h2>
<hr class="hr" />
<div class="container">
    <div class="row ">
        @if($rides->isEmpty())
            <div class="col-md-12">
                <p>No rides found.</p>
            </div>
        @else
            @foreach($rides as $key => $ride)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        {{-- <img src="{{ asset('images/rideimages/' . $ride->image) }}" class="card-img-top p-2" alt="Ride Image" style="max-height: 200px; object-fit: cover;"> --}}
                        <div class="card-body">
                            <h5 class="card-title">Rider Name: {{ $ride->rider_name }}</h5>
                            <p class="card-text"><strong>Rider's City:</strong> {{ $ride->city }}</p>
                            {{-- <p class="card-text"><strong>Phone:</strong> {{ $ride->phone }}</p> --}}
                            <p class="card-text"><strong>From:</strong> {{ $ride->from }}</p>
                            <p class="card-text"><strong>To:</strong> {{ $ride->destination }}</p>
                            <p class="card-text"><strong>Date:</strong> {{ $ride->date }}</p>
                            <p class="card-text"><strong>Available Seats:</strong> {{ isset($still_available[$key]) ? $still_available[$key] : 'N/A' }}</p>
                            {{-- <p class="card-text"><strong>Pick-Up Point:</strong> {{ $ride->pick_up_point }}</p> --}}
                            <a href="{{route('ride.details', $ride->id)}}" ><p class="btn btn-dark"><strong>More Details:</strong></p></a>
                            <!-- Add more details as needed -->
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>


<div class="container-fluid landscapebox">

    <div class="row">

        <div class="col-md-8">
            <h1 class="text-white text-center"><i class="fa-solid fa-hand-holding-hand"></i> Help us keep you safe from
                scams</h1>
            <p class="text-white" style="margin-left:100px;">To keep yourself safe from scams, it's essential to stay vigilant and aware of potential
                threats. Verify the
                legitimacy of offers, messages, or requests by using official sources or contacting the company directly
                through
                their verified channels. When making online purchases or providing sensitive information, ensure that the
                website is secure with HTTPS in the URL and a padlock icon in the address bar. Be cautious of phishing
                 </p>
                 <div class="insidebox2">
                    <h3 class="text-white"><i class="fa-solid fa-people-arrows"></i> What you can do to avoid a scam</h3>
                    <br>
                    <h6 class="text-white"><i class="fa-solid fa-ban"></i> Never visit links sent by drivers</h6>
                    <h6 class="text-white"><i class="fa-solid fa-brain"></i> Be aware of weird behaviour and requests</h6>
                    <h6 class="text-white"><i class="fa-solid fa-phone"></i> Call Our Hotline at any weired situation</h6>
                </div>

        </div>
       
        <div class="col-md-4">
            <img src="{{asset('images/pppp.png')}}" alt="" style="height: 350px;width:400px;">
 
             </div>

    </div>
   
</div>

<div class="container">
    <div class="row bg-light">
        <div class="col-md-6">
            <h2 style="margin-top: 20px; margin-left: 20px;">
                Discover new cities at small prices with GoRide Elegant Cars.</h2>
            <img src="{{ asset('/images/car2-.png') }}" style="height: 250px; width:550px;" alt="">
        </div>
        <div class="col-md-6">
            Embark on adventures without breaking the bank with GoRide Elegant Cars. Uncover hidden gems in new cities
            at budget-friendly rates. Our fleet of sophisticated vehicles ensures comfort and style as you explore
            diverse destinations. From bustling urban centers to serene countryside retreats, GoRide facilitates
            seamless travel experiences. With competitive pricing, discovering new locales has never been more
            accessible. Whether it's a spontaneous road trip or a meticulously planned itinerary, GoRide caters to every
            traveler's needs. Say goodbye to expensive travel options and hello to affordable exploration with GoRide
            Elegant Cars. Start your journey today and redefine the way you travel.
        </div>
    </div>
</div>
@endsection
