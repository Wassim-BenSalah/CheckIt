<?php
namespace App\Services;

use App\Models\Utilisateurs;
use App\Models\NotificationUser;

class NotificationService
{
    public function createNotificationUsers($notification)
    {
        // Récupérer tous les utilisateurs actifs
        $users = Utilisateurs::where('etat', 'active')->get();

        // Créer un enregistrement NotificationUser pour chaque utilisateur avec read = false
        foreach ($users as $user) {
            $notificationUser = new NotificationUser([
                'notification_id' => $notification->id,
                'utilisateur_matricule' => $user->matricule,
                'read' => false,
            ]);
            $notificationUser->save();
        }
    }
}
