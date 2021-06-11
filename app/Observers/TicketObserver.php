<?php
namespace App\Observers;

use App\Notifications\TicketCreated;
use App\Models\Ticket;

class TicketObserver{
    public function created(Ticket $ticket){
        $user=$ticket->user;
        $user->notify(new TicketCreated($ticket));
        
    }
}
