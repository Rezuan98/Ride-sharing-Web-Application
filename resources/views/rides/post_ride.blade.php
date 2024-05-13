@extends('landing.landing')

@section('keyTitle', 'Ride Details');


@section('maincontent')
<div class="container">
    <div class="row justify-content-center mt-4 mb-4 ">
<div class="col-lg-6 border border-dark">
   
        
        <br>
        <h3>Post a Ride </h3>
        <form action="{{url('/post/ride/')}}" method="post" enctype="multipart/form-data">
            @csrf
            




            <input type="text" name="name" id="" class="form-control" placeholder="Enter Rider Name">
            <input type="text" name="city" id="" class="form-control" placeholder="Enter Your city">
            <label for="image">Car Image:</label>
            <input type="file" name="image" id="" class="form-control" >
           
          
            <br>
            <div class="searchable">
                <input type="text" name="from" placeholder="From" onkeyup="filterFunction(this,event)">
                
                <ul>
                    <li>Chittagong</li>
                    <li>Bulgaria</li>
                    <li>Rangpur</li>
                    <li>Sylhet</li>
                    <li>Dhaka</li>
                    <li>Rajshahi</li>
                    <li>Jessore</li>
                    <li>Dinajpur</li>
                    <li>Mymensingh</li>
                    <li>Comilla </li>
                    <li> Barisal </li>
                    <li>Faridpur</li>
                    <li>Noakhali</li>
                    <li>Bogra</li>
                    <li>Pabna</li>
                    <li>Khulna</li>
                    <li>Kushtia</li>
                    <li>Tangail</li>
                    <li>Patuakhali</li>
                    <li>Magura</li>
                    <li>Brahmanbaria</li>
                    <li>Sirajganj</li>
                    <li>Sherpur</li>
                    <li>Netrokona</li>
                    <li>Lakshmipur</li>
                    <li>Sunamganj</li>
                    <li>Thakurgaon</li>
                    <li>Jhenaidah</li>
                    <li>Cox's Bazar</li>
                    <li>Satkhira</li>
                    <li>Meherpur</li>
                    <li>Prirojpur</li>
                    <li>Bhola</li>
                    <li>Jamalpur</li>
                </ul>
            </div>

            <div class="searchable">
                <input type="text" name="to" placeholder="Destination" onkeyup="filterFunction(this,event)">
                <ul>
                    <li>Chittagong</li>
                    <li>Bulgaria</li>
                    <li>Rangpur</li>
                    <li>Sylhet</li>
                    <li>Dhaka</li>
                    <li>Rajshahi</li>
                    <li>Jessore</li>
                    <li>Dinajpur</li>
                    <li>Mymensingh</li>
                    <li>Comilla </li>
                    <li> Barisal </li>
                    <li>Faridpur</li>
                    <li>Noakhali</li>
                    <li>Bogra</li>
                    <li>Pabna</li>
                    <li>Khulna</li>
                    <li>Kushtia</li>
                    <li>Tangail</li>
                    <li>Patuakhali</li>
                    <li>Magura</li>
                    <li>Brahmanbaria</li>
                    <li>Sirajganj</li>
                    <li>Sherpur</li>
                    <li>Netrokona</li>
                    <li>Lakshmipur</li>
                    <li>Sunamganj</li>
                    <li>Thakurgaon</li>
                    <li>Jhenaidah</li>
                    <li>Cox's Bazar</li>
                    <li>Satkhira</li>
                    <li>Meherpur</li>
                    <li>Prirojpur</li>
                    <li>Bhola</li>
                    <li>Jamalpur</li>
                </ul>
            </div>
            <br>
            <input type="text" name="phone" id="" class="form-control" placeholder="Enter Phone Number">
            <input type="date" name="date" id="" class="form-control">
            
                <input type="text" id="birthday" placeholder="Pick-Up Point" name="pickup" class="form-control ml-2">
        
            <input type="text" name="seat" id="" class="form-control" placeholder="Available Seats">
            <input type="text" name="fare" id="" class="form-control" placeholder="Fare(In Taka)">
            <input type="text" name="licence" id="" class="form-control" placeholder="Driving Licence Number">
            <input type="text" name="car_model" id="" class="form-control" placeholder="Car Model">
            
           
    
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
        
    </div>
    <br><br><br><br>
</div>
<br><br><br><br>
</div>
<br><br><br><br>
</div>
</div>
</div>


@endsection