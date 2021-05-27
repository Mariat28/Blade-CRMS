<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function reply()
    {
        return $this->hasOne('App\Models\Ticket', 'ticket_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'ticket_id');
    }

    public function status()
    {
        return $this->hasOne('App\Models\TicketStatus');
    }

    public function priority()
    {
        return $this->hasOne('App\Models\TicketPriority');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body',
        'user_id',
        'status_id',
        'subject',
        'source',
        'duration',
        'priority_id',
        'created_by',
    ];

    use HasFactory;
}
