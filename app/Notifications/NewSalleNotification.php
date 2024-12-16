<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;

class NewSalleNotification extends Notification
{
    use Queueable;

    private $salle;

    public function __construct($salle)
    {
        $this->salle = $salle;
    }

    public function via($notifiable)
    {
        return ['database', 'mail', 'broadcast'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'salle_id' => $this->salle->id,
            'salle_salleID' => $this->salle->salleID,
            'message' => 'Une nouvelle salle a été créée.'
        ];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Une nouvelle salle a été créée.')
                    ->action('Voir Salle', url('/salles/' . $this->salle->id))
                    ->line('Merci d\'utiliser notre application!');
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'salle_id' => $this->salle->id,
            'salle_salleID' => $this->salle->salleID,
            'message' => 'Une nouvelle salle a été créée.'
        ]);
    }
}
