<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use DB;

class ConfirmationRent extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $novo_usuario = $notifiable;

        return (new MailMessage)
                    ->greeting('Olá, '.$novo_usuario->name)
                    ->line('Estamos confirmando o aluguel de seu produto')
                    ->line('Desfrute do produto o quanto quiser, mas lembre-se de devolvê-lo em 1 semana!');
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
            //
        ];
    }
}
