<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
class welcomeEmailController extends Controller
{
    public function sendwelcomEmail($email)
    {
        $confirmationCode = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        
        // Find the user by email
        $user = User::where('email', $email)->first();

      
        
        // If user exists, update the confirmation code
        if ($user) {
            $user->update(['confirm_code' => $confirmationCode]);
            
            // Send the email
            $mailMessage = 'Welcome to GoRide! Your Confirmation code is: ' . $confirmationCode;
            $subject = 'GoRide Email Verify';
             Mail::to($email)->send(new RegisterMail($mailMessage, $subject));
            
            return redirect()->route('confirm.email');
        } else {
            // Handle case where user does not exist
            return redirect()->back()->with('error', 'User not found.');
        }
    }

    public function confirmEmail(){

        return view('confirm_email');
    }

    public function confirmCode(Request $request){

        $confirmationCode = $request->input('confirmation_code');

        // Find the user by confirmation code
        $user = User::where('confirm_code', $confirmationCode)->first();

        if ($user) {
            // Verification successful, clear the confirmation code
            $user->confirm_code = null;
            $user->save();


        return view('login');
    }
}
}