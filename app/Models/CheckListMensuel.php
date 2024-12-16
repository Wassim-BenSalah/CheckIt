<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckListMensuel extends Model
{
    protected $table = 'check_list_mensuel';
    
    protected $fillable = [
        'test_Transmetteur_GSM',
        'test_Sonde_Thermique',
        'salle_condition_mensuelle',
        'imageTestGsm',
        'imageTestSondeThermique',
        'salleID',
        'created_by',
        'created_at'
    ];
}
