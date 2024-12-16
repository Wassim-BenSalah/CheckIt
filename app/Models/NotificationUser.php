<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class NotificationUser extends Model
{
    protected $table = 'notification_user';

    protected $fillable = [
        'utilisateur_matricule',
        'notification_id',
        'read'
    ];
}
