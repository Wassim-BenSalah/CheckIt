<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckList extends Model
{
    protected $table = 'check_list';
    
    protected $fillable = [
        'test_temperature',
        'test_backbone',
        'test_onduleur',
        'test_proprete',
        'salle_condition',
        'salleID',
        'imageTestTemperature', 
        'imageTestBackbone',
        'imageTestOnduleur', 
        'imageTestProprete',
        'created_by',
        'created_at'
    ];
}
