<?php

namespace App\Http\Controllers;

use App\Models\CheckListMensuel;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Salle;
use Carbon\Carbon;


class FormCheckListMensuelController extends Controller
{


    public function remplirFormMensuel(Request $request)
    {
        // Validate registration form data
        $request->validate([
            'test_Transmetteur_GSM' => 'required',
            'test_Sonde_Thermique' => 'required',
        ]);

        // Create new check list
        $checkListMensuel = new CheckListMensuel();
        $checkListMensuel->test_Transmetteur_GSM = $request->test_Transmetteur_GSM;
        $checkListMensuel->test_Sonde_Thermique = $request->test_Sonde_Thermique;
        $checkListMensuel->salleID = $request->salleID;

        $checkListMensuel->save();

        return redirect()->route('documents')->with('success', 'User registered successfully!');
    }


    }
