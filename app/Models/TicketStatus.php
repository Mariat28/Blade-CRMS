<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketStatus extends Model
{
    public function ticktet()
    {
        return $this->belongsToMany('App\Models\Ticket',);
    }
    use HasFactory;
}
