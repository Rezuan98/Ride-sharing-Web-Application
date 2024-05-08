<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Allride;
use App\Models\Booking;
use illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;

class RideController extends Controller
{
    
    public function Rides(){

        return view('rides.ridePage');
    }
    

    

//    start store ride methode
    public function postRide(Request $request)
    {  
       
       
        // Handle image upload
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'from' => 'required',
            'to' => 'required',
            'date' => 'required',
            'seat' => 'required',
            'fare' => 'required',
            'licence' => 'required',
        ]);

        // Handle car image upload
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images/car_images'), $imageName);

         // Handle rider image upload
         $imageName2 = time().'.'.$request->riderimage->extension();  
         $request->riderimage->move(public_path('images/rider_images'), $imageName2);

        // Get authenticated user's ID
        $user = Auth::user()->id;

        // Insert data into the database using Query Builder
        Allride::insertGetId([
            'user_id' => $user,
            'rider_name' => $request->name,
            'city' => $request->city,
            'image' => $imageName,
            'image2' => $imageName2,
            'from' => $request->from,
            'destination' => $request->to,
            'date' => $request->date,
            'car_model' => $request->car_model,
            'pick_up_point' => $request->pickup,
            'available_seat' => $request->seat,
            'fare' => $request->fare,
            'licence_number' => $request->licence,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Redirect the user after successfully storing the data
        return redirect()->back()->with('success', 'Ride posted successfully!');
    }     
    
    //    end store ride methode


    // start search ride methode 

    public function searchRide(Request $request)
    {
        $rides = Allride::where('from', $request->from)
                ->where('destination', $request->to)
                ->whereDate('date', $request->date)
                ->with('user')
                ->get();


          foreach($rides as $ride)     {

          }  
    $booking = Booking::where('',);

        return view('rides.search_results', compact('rides'));
    }
    //  end search ride methode


     

    public function storeRide(){
        
    
    return view('rides.post_ride');
    }
// start  ride details methode
    public function rideDetails($id){

       $details = Allride::where('id',$id)
                 ->with('user')
                 ->get();
  

              $occupied = Booking::where('ride_id',$id)->sum('booked_seats');
              $total = Allride::where('id',$id)->value('available_seat');
              $still_available =  $total-$occupied;

             

              

        return view('rides.ride_details',compact('details','still_available'));
    }

    // end  ride details methode 



    public function TravelDetails($ride_id, $user_id){

        
        $bookings = Booking::where('ride_id', $ride_id)
                    ->where('rider_id',$user_id)
                    ->get();
     
                  
                    $passengers = [];

foreach ($bookings as $booking) {
$passenger_id = $booking->passenger_id;
$passenger = User::where('id', $passenger_id)->first(); 


$passengers[] = $passenger;
}


return view('rides.booking_details', compact('bookings', 'passengers'));
}

    }
    
    



