<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
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
    ];
    
    protected function name(): Attribute
    {
        return new Attribute(
            // arrow function
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)

            /*get: function($value){
                return ucwords($value);
            },

            set: function($value){
                return strtolower($value);
            }*/


        );
    }
    /* accessors and mutators for older versions of Laravel
    public function getNameAttribute($value){
        return ucwords($value);
    }
    public function setNameAttribute($value){
        return strtolower($value);
    }*/
}
