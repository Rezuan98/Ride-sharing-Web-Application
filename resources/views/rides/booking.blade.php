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
            <form action="{{ route('logout') }}" method="POST">
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
                <div class="card-header">
                    <h3 class="text-center">Your Rides</h3>
                </div>
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
                    </div>
                </div>
            </div>
        </div>
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
@endsection
