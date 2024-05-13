<?php

namespace App\Models;

 use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    public function bookingsAsPassenger()
    {
        return $this->hasMany(Booking::class, 'passenger_id');
    }

    // Define the inverse of the mydata relationship
    public function bookingsAsRider()
    {
        return $this->hasMany(Booking::class, 'rider_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'confirm_code',
    ];

   
    public function Allride()
    {
        return $this->belongsTo(Allride::class);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
