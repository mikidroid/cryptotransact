<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DepositMail extends Notification
{
    use Queueable;
    public $data;
    /**
     * Create a new notification instance.
     *
     * @return void
     */


    public function __construct($data)
    {
        //Set global variable
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
                    ->subject('Deposit made')
                    ->line('You have made a deposit of $' .$this->data->amount )
                    ->line('Please be patient while your deposit is being approved.')
                    ->action('visit your dashboard anytime at the link below', url(env('WEBSITE_ADDRESS').'/user/'.$this->data->username.'/dashboard'))
                    ->line('Thank you!');
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
