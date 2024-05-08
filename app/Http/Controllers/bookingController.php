<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Allride;
use App\Models\Booking;
use illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Psy\Command\WhereamiCommand;

class bookingController extends Controller
{
    public function bookingStore(Request $request)
     { 
      
        // $request->validate([
        //     'seats' => 'required',

        // ]);

        // $booking = new Booking();
        // $booking->rider_id = 1;
        // $booking->ride_id = 1;
        // $booking->passenger_id = 1;
        // $booking->booked_seats = 3;
        // Assign values to the booking instance
        // $booking->rider_id = $request->param1;
        // $booking->ride_id = $request->param2;
        // $booking->passenger_id = $request->param3;
        // $booking->booked_seats = $request->seats; // Assuming seat_number is the name of the field in the database
    
       
        // Save the booking to the database
       $ride_id= $request->ride_id;

      $available_seat= Allride::where('id',$ride_id)->value('available_seat');

      $booked_seats = Booking::where('ride_id',$ride_id)->sum('booked_seats');

      if($available_seat > $booked_seats){

        $passengerID = auth::user()->id;

        $insert = Booking::insertGetId([

            'ride_id' => $request->ride_id,
            'rider_id' => $request->rider_id,
            'passenger_id' => $passengerID,
            'booked_seats' => $request->seats,

        ]);
        
    
        // Optionally, return a response
        return redirect()->route('landing');

      }
      else{

        return view('rides.allseatbooked');
      }

    //   $booked_seat= sum($booked_seats);
        
       
    }

    public function bookings(){

        $id = Auth::user()->id;

        $booking = Allride::where('user_id',$id)->get();


        return view('rides.booking',compact('booking'));
    }

    public function Deletebookings($ride_id){

      $id = Auth::user()->id;

      $booking = Allride::where('user_id',$id)
                         ->where('id',$ride_id)
                         ->delete();


      return redirect()->back();
  }


   

//     public function TravelDetails($user_id, $ride_id)
// {    

//     dd($user_id, $ride_id);
    
//     $bookings = Booking::where('rider_id', $user_id)
//                         ->where('ride_id',$ride_id)
//                         ->get();
//     $passengers = [];

//     foreach ($bookings as $booking) {
//         $passenger_id = $booking->passenger_id;
//         $passenger = User::where('id', $passenger_id)->first(); 

        
//         $passengers[] = $passenger;
//     }

//     return view('rides.booking_details', compact('bookings', 'passengers'));
// }
}
