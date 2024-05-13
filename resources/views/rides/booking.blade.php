@extends('landing.landing')

@section('keyTitle', 'Profile')

@section('maincontent')
<div class="container-fluid">
    <div class="row">
        
<!-- Left Sidebar -->
<div class="col-md-3 p-0 ">
    <div class="card">
        <div class="card-header text-white  text-center" style="background: rgb(31, 31, 68);">
          <strong> User Profile</strong> 
        </div>
        @php
            $user = Auth::user();
        @endphp
        <div class="card-body text-center">
            <!-- User image -->
            <img src="{{ asset('images/userimages/'. $user->image)  }}" class="rounded-circle img-thumbnail mb-3" alt="User Image" width="100">
            <!-- User data here -->
            <div class="mb-3 text-white " style="background-color: rgb(31, 31, 68); margin:2px; padding:5px;">
                <strong>Name:</strong> {{ Auth::user()->name }}
            </div>
            <div class="mb-3 text-white " style="background-color: rgb(31, 31, 68); margin:2px; padding:5px;">
                <strong>Email:</strong> {{ Auth::user()->email }}
            </div>
            <!-- Add more user data fields as needed -->
            <!-- Logout button -->
            <form action="{{ route('logout') }}" method="get">
                @csrf
                <button type="submit" class="btn  mb-3 text-white " style="background-color:orange ; margin:2px; padding:5px;">Logout</button>
            </form>
            <!-- Additional features -->
            <div class="text-left">
                <h5>Settings</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Edit Profile</a></li>
                    <li><a href="#">Change Password</a></li>
                    <!-- Add more settings options as needed -->
                </ul>
            </div>
            <!-- Social media links -->
            <div class="mt-4">
                <h5>Connect with Us</h5>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <!-- Add more social media icons as needed -->
                </ul>
            </div>
        </div>
    </div>
</div>


        <!-- Main Body -->
        <div class="col-md-9 mt-4 " style="background-color: rgb(240, 245,250)">
            <div class="card">
                @if(Illuminate\Support\Facades\Auth::user()-> role === 'rider')
                <div class="card-header">
                   
                    <h3 class="text-center">Your Rides</h3>
                </div>
                <a href="{{route('store.ride')}}"> <button class="btn btn-dark mt-4">Post a Ride</button></a>
                <div class="card-body">
                    <!-- Ride booking details here -->
                    <!-- You can fetch and display ride booking details dynamically -->
                    <div class="table-responsive">
                       
                        <table class="table">
                            <thead>
                               
                                <tr>
                                    <th>SL</th>
                                    <th>Ride Date</th>
                                    <th>From</th>
                                    <th>Destination</th>
                                    
                                    <!-- Add more table headers as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Iterate over ride booking details and display them in rows -->
                               

                                @foreach($booking as $key => $item) 
                                <tr>   <td>{{ $key + 1 }}</td>
                                     <td>{{ $item->date }}</td>
                                    <td>{{ $item->from }}</td>
                                    <td>{{ $item->destination }}</td>
                                    <td>
                                        <a href="{{ route('travel.ride',[ 'ride_id' => $item->id,'user_id'=>$item->user_id])}}" class="btn btn-success">Passengers</a>
                                      </td>
                                      
                                      

                                    <td><a href="{{route('delete.ride', $item->id)}}" class="btn btn-warning">Delete Ride </a></td>
                                    <!-- Add more table cells for other details -->
                                </tr>
                                @endforeach 
                               
                            </tbody>
                        </table>
                        
                           
                        @elseif(Illuminate\Support\Facades\Auth::user()-> role === 'user')
                        <div class="card-header">
                            <div class="card-header">
                                <h3 class="text-center">Rides You Booked</h3>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Ride Date</th>
                                            <th>From</th>
                                            <th>Destination</th>
                                            <th>Rider Name</th>
                                            <th>Rider Mobile</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $key => $mydata) 
                                            <tr>   
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $mydata->allride->date }}</td>
                                                <td>{{ $mydata->allride->from }}</td>
                                                <td>{{ $mydata->allride->destination }}</td>
                                                <td>{{ $mydata->mydata->name }}</td>
                                                <td>{{ $mydata->mydata->phone }}</td>
                                            </tr>
                                        @endforeach 
                                    </tbody>
                                    @endif
                                </table>
                            </div>
                        </div>
                        
          

    </div>


</div>
                        
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid landscapebox" style="background-color:rgb(21, 21, 53);">

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
</div>
@endsection