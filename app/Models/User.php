<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
//    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = [
        'full_name',
        'email', 
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $date = [
        'create_at',
        'delete_at',
];
    protected $hidden = [
        'password', 
        'remember_token',
    ];
    function costume() {
        return $this->hasMany(Costume::class);
    }

    function rate() {
        return $this->hasMany(Rate::class);
    }

    function comment() {
        return $this->hasMany(Comment::class);
    }

    function requested_produce() {
        return $this->hasMany(Requested_Produce::class);
    }
    
    function follow() {
        return $this->hasMany(Follow::class);
    }
}
