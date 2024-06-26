<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'position',
        'email',
        'password',
        'business_id',
        'role_id',
        'active',
        'deleted_at',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'deleted_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function setPasswordAttribute($value)
    {
        if ($value != "") {
            $this->attributes['password'] = Hash::make($value);
        }
    }

    public function setActiveAttribute($value)
    {
        $this->attributes['active'] = ($value ? true : false);
    }
}
