<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Ticket;

class User extends Authenticatable
{
    public function companies()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function role()
    {
        return $this->hasOne('App\Models\Userrole', 'user_id');
    }

    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'user_id');
    }

    public function replies()
    {
        return $this->hasMany('App\Models\Reply', 'user_id');
    }

    public function group()
    {
        return $this->hasOne('App\Models\Group', 'user_id');
    }

    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'userrole_id',
        'email',
        'password',
        'company_id',
        'phonenumber',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
