<?php

namespace App\Notifications;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TicketCreated extends Notification implements ShouldQueue
{
    use Queueable;
    protected $ticket;
    protected $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( Ticket $ticket)
    {
        // $this->user=$user;
        $this->ticket=$ticket;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }
//database representation of the notification
public function toDatabase($notifiable){
    return[
        // 'user_id'=>$this->user->id,
        // 'username'=>$this->user->name,
        'ticket_id' => $this->ticket->id,
    ];
}
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'id' => $this->id,
            'data' => [
                // 'user_id'=>$this->user->id,
                // 'username'=>$this->user->name,
                'ticket_id' => $this->ticket->id,
            ],
        ];
    }
}
