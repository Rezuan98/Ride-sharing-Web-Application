<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allride extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Add user_id to the fillable array
        'rider_name',
        'city',
        'image',
        'from',
        'to',
        'phone',
        'date',
        'seat',
        'fare',
        'licence',
    ];

    
    // AllRides model
public function user()
{
    return $this->belongsTo(User::class);
}



    public function bookings()
    {
        return $this->hasMany(Booking::class, 'ride_id');
    }


}
