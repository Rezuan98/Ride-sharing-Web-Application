<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class LandingController extends Controller
{
    public function landing(){

        return view('index');
    }

    public function OnLogin(){
        return view('login');
    }
    public function OnRegister(){

        return view('all_register');
    }
    public function riderRegister(){

        return view('passen_register');
    }
    

        public function insertUser(Request $request)
    {
        // Validate the form data
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'city' => 'required|string|max:255',
        //     'image' => 'required|image|max:2048', // Assuming you're uploading images
        //     'nid' => 'required|string|max:255',
        //     'phone' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users', // Assuming users table for storing users
        //     'password' => 'required|string|min:8', // Add your password validation rules
        // ]);

        // Handle file upload (if any)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images/userimages'), $imageName);
        } else {
            $imageName = null; // Set a default image name or handle missing image case
        }

        // Create a new User instance
        $user = new User();
        $user->name = $request->name;
        $user->city = $request->city;
        $user->image = $imageName; // Save the image name to the database
        $user->nid = $request->nid;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->remember_token = Str::random(40);
        $user->password = bcrypt($request->password); // Encrypt the password
        $user->save();

        $email = $request->email;

    

        

        
        return redirect()->route('welcome.email', ['email' => $email]);


        
    }


    public function aboutUs(){


        return view('aboutus');
    }
public function allRegister(){

    return view('register');
}
   
public function adminLogin(){


    return view('admin.login');

}

public function adminDashboard(){


    return view('admin.index');
}

public function riderDashboard(){


    return view('rider.rider_dashboard');
}

// register of rider 
public function insertRider(Request $request){

    if ($request->hasFile('rider_image')) {
        $rider_image = $request->file('rider_image');
        $imageName1 = time().'.'.$rider_image->extension();
        $rider_image->move(public_path('images/userimages'), $imageName1);
    } else {
        $imageName1 = null; // Set a default image name or handle missing image case
    }

    if ($request->hasFile('car_image')) {
        $car_image = $request->file('car_image');
        $imageName2 = time().'.'.$car_image->extension();
        $car_image->move(public_path('images/carimages'), $imageName2);
    } else {
        $imageName2 = null; // Set a default image name or handle missing image case
    }

    if ($request->hasFile('nid_front_image')) {
        $nid_front_image = $request->file('nid_front_image');
        $imageName3 = time().'.'.$nid_front_image->extension();
        $nid_front_image->move(public_path('images/nidfrontimages'), $imageName3);
    } else {
        $imageName3 = null; // Set a default image name or handle missing image case
    }

    if ($request->hasFile('nid_back_image')) {
        $nid_back_image = $request->file('nid_back_image');
        $imageName4 = time().'.'.$nid_back_image->extension();
        $nid_back_image->move(public_path('images/nidbackimages'), $imageName4);
    } else {
        $imageName4 = null; // Set a default image name or handle missing image case
    }

    $user = new User();
    $user->name = $request->name;
    $user->city = $request->address;
    $user->image = $imageName1;
    $user->image2 = $imageName2;
    $user->image3 = $imageName3;
    $user->image4 = $imageName4;
    $user->nid = $request->nid;
    $user->role = "rider";
    $user->driving_licence_number = $request->driving_licence_number;
    $user->phone = $request->phone;
    $user->car_model = $request->car_model;
    $user->email = $request->email;
    $user->password = bcrypt($request->password); // Encrypt the password
    $user->save();



    // Redirect back or to a success page

    $notification = array(
        'message' => ' Rider Registered successfully',
        'alert-type' => 'info'
      );
   
    $email = $request->email;

    

        

        
        return redirect()->route('welcome.email', ['email' => $email])->with($notification);


}
}