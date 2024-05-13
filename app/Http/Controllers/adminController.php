<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use App\Models\Allride;
use App\Models\Booking;
use illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class adminController extends Controller
{
    public function allUsers(){
        $users = User::where('role','user')->get();

        return view('admin.users',compact('users'));
    }

    public function allRiders(){
        $riders = User::where('role','rider')->get();

        return view('admin.riders',compact('riders'));
    }

    public function pendingRides(){
        $riders = Allride::where('status',0)->get();

        return view('admin.riders',compact('riders'));
    }
}
