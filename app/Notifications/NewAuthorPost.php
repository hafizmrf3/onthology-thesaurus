<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewAuthorPost extends Notification implements ShouldQueue
{
    use Queueable;

    public $thesaurus;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($thesaurus)
    {
        $this->thesaurus = $thesaurus;
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
                    ->greeting('Hello, Admin !!')
                    ->subject('New Thesaurus Words Approval Needed')
                    ->line('New Post by '.$this->thesaurus->author . ' need to approve.')
                    ->line('To approve the post click view button.')
                    ->line('Main Term : '. $this->thesaurus->mt)
                    ->action('View', url(route('admin.thesaurus.show', $this->thesaurus->id)))
                    ->line('Thank you for using our application!');
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
