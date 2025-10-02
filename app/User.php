<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'phone', 
        'email', 
        'password', 
        'device_token', 
        'provider' , 
        'provider_id' , 
        'email_verified_at',
        'email_verified_code',
        'job_title',
        'role',
        'work_place',
        'user_full_work_address',
        'privacy_status',
        'active_status',
        'user_active_status',
        'user_delete_status',
        'address' ,
        'reset_code',
        'manager_id',
        'subject_id' ,
        'subject_title' ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function manager() {
        return $this->belongsTo(User::class , 'manager_id' , 'id');
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function userRestaurant() {
        return $this->hasMany(Restaurant::class);
    }
    
    public function userBranch() {
        return $this->hasMany(Branch::class);
    }


    public function unConfirmedOrder() {
        return $this->orders()->where('confirmed_by_user', 0)->orderBy('created_at', 'desc')->first();
    }

    public function confirmedOrders() {
        return $this->orders()->where('confirmed_by_user', 1)->orderBy('created_at', 'desc');
    }

}
