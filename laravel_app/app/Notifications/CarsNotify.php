<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CarsNotify extends Notification
{
    use Queueable;
    private $carsAssigned;

    /**
     * Create a new notification instance.
     */
    public function __construct($carsAssigned)
    {
       $this->$carsAssigned = $carsAssigned;
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
        return (new MailMessage)
                    ->line($this->carsAssigned['body'])
                    ->action($this->carsAssigned['assigmentText'],
                    $this->carsAssigned['url'])
                    ->line($this->carsAssigned['assigned']);
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
