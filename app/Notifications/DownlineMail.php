<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DownlineMail extends Notification
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
        //
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
                ->subject('New downline')
                ->line('You have a new user registered with your ref link. transfer of '.$this->data->amount.' to '.$this->data->receiver.' has been succesful!' )
                ->line('You will get a referral bonus of $'.env('REFERRAL_AMOUNT').' when he/she invests')
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




    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */

}
