<?php
namespace App\Mail;

use App\Models\Utilisateur;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Utilisateurs;

class UserCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $password;
    public $matricule;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Utilisateur $user, $password,$matricule)
    {
        $this->user = $user;
        $this->password = $password; 
        $this->matricule = $matricule;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.user_created');
    }
}

