<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand text-white ms-5" href="{{route('landing')}}"> <img class="logo" src="{{asset('images/logo/hei40.png')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-white" href="{{url('/')}}"><i class="fas fa-home"></i> Home</a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/rides')}}">Rides</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link text-white dropdown-toggle" href="#" id="plansDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Plans
                </a>
                <div class="dropdown-menu plans" aria-labelledby="plansDropdown">
                    <a class="dropdown-item text-white" href="{{url('/rides')}}">Private Car</a>
                    <a class="dropdown-item text-white" href="{{url('/rides')}}">Bus Service</a>
                    <a class="dropdown-item text-white" href="{{url('/rides')}}">Bike Share</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('about.us')}}">About Us</a>
            </li>
        </ul>
    </div>
    <div class="navbar-nav justify-content-end">
        @if(Auth::check())
            @php 
                $user = Auth::user();
            @endphp
         <li class="nav-item dropdown dropdown-profile">
            <a class="nav-link dropdown-toggle me-4" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img style="height: 50px; width: 50px; border:5px solid white;" class="rounded-circle" src="{{  asset('images/userimages/' . $user->image) }}" alt="profile">
            </a>
            <div class="dropdown-menu dropdown-menu-end p-0" style="background-color: rgb(21, 21, 53);" aria-labelledby="profileDropdown">
                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                    <div class="mb-3">
                        <img style="height: 50px; width: 50px;" class="rounded-circle" src="{{ asset('images/userimages/' .$user->image) }}" alt="profile">
                    </div>
                    <div class="text-center">
                        <p class="tx-16 fw-bolder text-white">{{$user->name}}</p>
                        <p class="tx-12  text-white">{{$user->email}}</p>
                    </div>
                </div>
                <ul class="list-unstyled p-1">

                  <@php
                     if(Illuminate\Support\Facades\Auth::user()-> role === 'user'){
                     @endphp
                        <li class="dropdown-item py-2">
                        <a href="{{route('bookings')}}" class="text-body ms-0">
                            <i class="me-2 icon-md" data-feather="edit"></i>
                            <span class="text-white">Your Booked Rides</span>
                        </a>
                    </li>
                    <li class="dropdown-item py-2">
                        <a href="{{route('bookings')}}" class="text-body ms-0">
                            <i class="me-2 icon-md" data-feather="edit"></i>
                            <span class="text-white">Edit Your Profile</span>
                        </a>
                    </li>
                    <li class="dropdown-item py-2">
                        <a href="{{route('logout')}}" class="text-body ms-0">
                            <i class="me-2 icon-md" data-feather="log-out"></i>
                            <span class="text-white">Log Out</span>
                        </a>
                    </li>
                       @php
                }
                       
                   elseif(Illuminate\Support\Facades\Auth::user()-> role === 'rider'){
                    @endphp

                    <li class="dropdown-item py-2">
                        <a href="{{route('bookings')}}" class="text-body ms-0">
                            <i class="me-2 icon-md" data-feather="edit"></i>
                            <span class="text-white">Your Posted Rides</span>
                        </a>
                    </li>
                    <li class="dropdown-item py-2">
                        <a href="{{route('bookings')}}" class="text-body ms-0">
                            <i class="me-2 icon-md" data-feather="edit"></i>
                            <span class="text-white">Your Booked Rides</span>
                        </a>
                    </li>
                    <li class="dropdown-item py-2">
                        <a href="{{route('bookings')}}" class="text-body ms-0">
                            <i class="me-2 icon-md" data-feather="edit"></i>
                            <span class="text-white">Edit Your Profile</span>
                        </a>
                    </li>
                    <li class="dropdown-item py-2">
                        <a href="{{route('logout')}}" class="text-body ms-0">
                            <i class="me-2 icon-md" data-feather="log-out"></i>
                            <span class="text-white">Log Out</span>
                        </a>
                    </li>
                    @php
                        
                      
                   }
                   
                   
                   
                  @endphp
                    
                   
                </ul>
            </div>
        </li>
        
        @else
            
            <div class="sign-box">
                <a class="nav-link text-white fw-bold text-decoration-none me-4" href="{{url('/login')}}"><i class="fa-solid fa-user-plus"></i></a>
            </div>
        @endif
    </div>
</nav>
