<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Notification; 
use App\Models\NotificationUser; 
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function getNotifications()
    {
        $user = Auth::user(); // Récupérer l'utilisateur actuellement connecté

        if (!$user) {
            return response()->json(['message' => 'No user logged in.'], 401);
        }

        // Récupérer toutes les notifications
        $notifications = Notification::all();
        
        // Récupérer les informations de lecture pour l'utilisateur actuel
        $notificationsUser = NotificationUser::where('utilisateur_matricule', $user->matricule)->get();

        // Convertir $notificationsUser en tableau associatif
        $notificationsUserAssoc = $notificationsUser->keyBy('notification_id')->map(function ($item) {
            return $item->read;
        })->toArray();

        // Ajouter les informations de lecture à chaque notification
        $notificationsWithReadStatus = $notifications->map(function ($notification) use ($notificationsUserAssoc) {
            $notification->read = $notificationsUserAssoc[$notification->id] ?? false;
            return $notification;
        });

        // Retourner les notifications avec le statut de lecture sous forme de JSON
        return response()->json($notificationsWithReadStatus);
    }

    public function markAllAsRead()
    {
        $user = Auth::user(); // Récupérer l'utilisateur actuellement connecté

        if (!$user) {
            return response()->json(['message' => 'No user logged in.'], 401);
        }

        // Mettre à jour toutes les notifications non lues de l'utilisateur actuel en une seule requête
        NotificationUser::where('utilisateur_matricule', $user->matricule)
            ->where('read', false)
            ->update(['read' => true]);

        return response()->json(['message' => 'All notifications marked as read.']);
    }
}
