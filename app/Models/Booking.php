<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
// all relations of booking model
    public function passenger()
{
    return $this->belongsTo(User::class, 'passenger_id');
}
public function Allride(){
    return $this->belongsTo(Allride::class,'ride_id');
}

public function mydata(){
    return $this->belongsTo(User::class,'rider_id');
}
}
