@extends('landing.landing')

@section('keyTitle', 'Ride Details');


@section('maincontent')


<div class="container mt-4">
  <div class="row justify-content-center bg-light">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header text-center bg-warning"><h2>Ride Details</h2></div>

              <div class="card-body">
                  <table class="table">
                    <thead class="thead-dark">
                    <th scope="col">Rider Image</th>
                    <th scope="col">CAR Image</th>

                  </thead>
                      @foreach($details as  $item)
                         
                              <tr>
                                  <td>
                                      <img src="{{ asset('images/rider_images/' . $item->image) }}" class="card-img-top p-2" alt="Ride Image" style="max-height: 200px; object-fit: cover;">
                                      
                                    </td>
                                      <td>


                                     
                                      <img src="{{ asset('images/car_images/' .  $item->image2) }}" class="card-img-top p-2" alt="Another Image" style="max-height: 200px; object-fit: cover;">
                                 
                                    </td>
                                  
                              </tr>

                              <tr>
                                <td><h4>Rider Name:</h4></td>
                                <td> <h5 class="card-title">{{ $item->rider_name }}</h5></td>
                              </tr>
                              <tr>
                                <td><h4>Rider's Address:</h4></td>
                                <td> <h5 class="card-title">{{ $item->city }}</h5></td>
                              </tr>
                              <tr>
                                <td><h4>Car Model</h4></td>
                                <td> <h5 class="card-title">{{ $item->car_model }}</h5></td>
                              </tr>
                              <tr>
                                <td><h4>From:</h4></td>
                                <td> <h5 class="card-title">{{ $item->from }}</h5></td>
                              </tr>
                              <tr>
                                <td><h4>To</h4></td>
                                <td> <h5 class="card-title">{{ $item->destination }}</h5></td>
                              </tr>
                              <tr>
                                <td><h4>Date</h4></td>
                                <td> <h5 class="card-title">{{ $item->date }}</h5></td>
                              </tr>
                              <tr>
                                <td><h4>Available Seats:</h4></td>
                                <td> <h5 class="card-title">{{ $still_available }}</h5></td>
                              </tr>
                              <tr>
                                <td><h4>Pick-Up Point:</h4></td>
                                <td> <h5 class="card-title">{{ $item->pick_up_point }}</h5></td>
                              </tr>

                              
                         
                    
                  </table>
                  <div class="text-center">
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#confirmModal">
                        Confirm Booking
                    </button>
                </div>
                

                  <!-- Modal start -->
                  <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="confirmModalLabel">Confirm Booking</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <!-- Form for collecting user input -->
                                  <form id="confirmForm" action="{{ route('booking.store') }}" method="post">
                                      @csrf
                                      <div class="mb-3">
                                          <label for="seats">Number of Seats:</label>
                                          <input type="number" value="{{ $still_available }}" class="form-control" id="seats" name="seats" required>
                                      </div>
                                      <input type="hidden" name="ride_id" value="{{ $item->id }}">
                                      <input type="hidden" name="rider_id" value="{{ $item->user_id }}">

                                      <button type="submit" class="btn btn-dark">Confirm Ride</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>
          </div>
      </div>
  </div>
</div>



<div class="landscapebox">
    <div class="con-md-6">
        <h1 class="text-white text-center"><i class="fa-solid fa-hand-holding-hand"></i>   Help us keep you safe from scams</h1>
    <p class="text-white">To keep yourself safe from scams, it's essential to stay vigilant and aware of potential threats. Verify the
        legitimacy of offers, messages, or requests by using official sources or contacting the company directly through
        their verified channels. When making online purchases or providing sensitive information, ensure that the
        website is secure with HTTPS in the URL and a padlock icon in the address bar. Be cautious of phishing attempts,
        which often involve unsolicited emails, messages, or calls asking for personal or financial information. Keep
        your software updated to protect against security vulnerabilities, and use strong, unique passwords for your
        accounts. Educate yourself about common scams and tactics used by scammers, and avoid sharing sensitive
        information unless absolutely necessary and with trusted sources. </p>

    </div>
    <div class="insidebox2">
        <h3 class="text-white"><i class="fa-solid fa-people-arrows"></i>  What you can do to avoid a scam</h3>
        <br>
        <h6 class="text-white"><i class="fa-solid fa-ban"></i>  Never visit links sent by drivers</h6>
        <h6 class="text-white"><i class="fa-solid fa-brain"></i>  Be aware of weird behaviour and requests</h6>
        <h6 class="text-white"><i class="fa-solid fa-phone"></i>  Call Our Hotline at any weired situation</h6>
    </div>
</div>

@endsection
