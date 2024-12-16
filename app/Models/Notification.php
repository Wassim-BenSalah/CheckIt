<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'icon',
        'action_link',
        'checklist_id',
        'utilisateur_matricule',
    ];

    protected $casts = [
        'created_at' => 'datetime', // Automatically casts 'created_at' to a DateTime instance
    ];

    
    public function checklist()
    {
        return $this->belongsTo(CheckList::class);
    }

}
