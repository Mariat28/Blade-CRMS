<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function ticktet()
    {
        return $this->belongsTo('App\Models\Ticket', 'ticket_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reply',
        'user_id',
        'ticket_id',
    ];
    
    use HasFactory;
}
