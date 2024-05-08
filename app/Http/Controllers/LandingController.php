<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

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
        $user->password = bcrypt($request->password); // Encrypt the password
        $user->save();

        // Redirect back or to a success page
        return redirect()->back();

        
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
}