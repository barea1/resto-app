<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResNotification extends Notification
{
    use Queueable;
    private $reservaData;

    /**
     * Create a new notification instance.
     */
    public function __construct($reservaData)
    {
        $this->reservaData = $reservaData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $cancelUrl = route('reservation.cancel', $this->reservaData->id);
        return (new MailMessage)
            ->subject('¡Nueva reserva realizada!')
            ->greeting('Hola, '.$this->reservaData->first_name)
            ->line('Has realizado una reserva en nuestro restaurante con los siguientes datos:')
            ->line('Teléfono de contacto: '.$this->reservaData->tel_number)
            ->line('Fecha y hora de la reserva: '.$this->reservaData->res_date)
            ->line('Número de Mesa: '.$this->reservaData->table_id)
            ->line('Número de personas: '.$this->reservaData->guest_number)
            ->line('En el caso de querer cancelarla, pulsa el siguiente enlace')
            ->action('Cancelar reserva', $cancelUrl)
            ->line('Si tienes alguna pregunta, no dudes en contactarnos.')
            ->salutation('Saludos, Restaurante La Biznaga');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
