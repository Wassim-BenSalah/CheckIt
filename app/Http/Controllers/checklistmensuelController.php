<?php

namespace App\Http\Controllers;
use App\Models\CheckListMensuel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Salle;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Notification; 
use Illuminate\Support\Facades\Auth;
use App\Services\NotificationService;


class checklistmensuelController extends Controller
{
    // Injectez le service dans le constructeur
    protected $notificationService; 
    public function __construct(NotificationService $notificationService)
    {$this->notificationService = $notificationService;}
        
    public function index()
    {    $salles = Salle::all();
    
        // Get the IDs of rooms selected this month
        $selectedSalleIDs = CheckListMensuel::whereYear('created_at', Carbon::now()->year)
                                            ->whereMonth('created_at', Carbon::now()->month)
                                            ->pluck('salleID')
                                            ->toArray();
    
        // Filter out the selected rooms from the list of all rooms
        $availableRooms = $salles->reject(function ($room) use ($selectedSalleIDs) {
            return in_array($room->salleID, $selectedSalleIDs);
        });
    
                // Get the IDs of rooms selected this month
        $selectedSalleIDs = CheckListMensuel::whereYear('created_at', Carbon::now()->year)
                                            ->whereMonth('created_at', Carbon::now()->month)
                                            ->pluck('salleID')
                                            ->toArray();
    
        // Filter out the selected rooms from the list of all rooms
        $availableRooms = $salles->reject(function ($room) use ($selectedSalleIDs) {
            return in_array($room->salleID, $selectedSalleIDs);
        });
        if (session('role')=='admin'){
        $checkListMensuel=CheckListMensuel::all();
        return view('admin.checklistmensuelle', ['checkListMensuel' => $checkListMensuel,'availableRooms' => $availableRooms]);
    }
    else
    {
        $checkListMensuel=CheckListMensuel::all();
        return view('technicien.checklistmensuelle', ['checkListMensuel' => $checkListMensuel,'availableRooms' => $availableRooms]);
    }
    }

    
    public function destroy($id)
    {
        // Find the check list by id
        $checkListMensuel=CheckListMensuel::where('id', $id)->first();
        Storage::delete([
            'public/' . $checkListMensuel->imageTestGsm,
            'public/' . $checkListMensuel->imageTestSondeThermique,

        ]);

        // Delete the check list
        $checkListMensuel->delete();

        // Redirect back with success message
        return redirect()->back();
    }

    

    public function remplirFormMensuel(Request $request)
    {
        // Validate registration form data
        $validator = Validator::make($request->all(), [
            'salleID' => 'required',
            'test_Transmetteur_GSM' => 'required',
            'test_Sonde_Thermique' => 'required',
            'imageTestGsm' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageTestSondeThermique' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'required' => 'Le champ :attribute est vide.',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        $imageTestGsm = $request->file('imageTestGsm')->store('public');
        $imageTestSondeThermique = $request->file('imageTestSondeThermique')->store('public');
    
        // Remove 'public/' from the beginning of the paths to store in the database
        $imageTestGsm = str_replace('public/', '', $imageTestGsm);
        $imageTestSondeThermique = str_replace('public/', '', $imageTestSondeThermique);
    
        $salle_condition_mensuelle = 0;
        // Check if each test is verified and update salle_condition accordingly
        if ($request->test_Transmetteur_GSM === "verified") {
            $salle_condition_mensuelle += 50;
        }
    
        if ($request->test_Sonde_Thermique === "verified") {
            $salle_condition_mensuelle += 50;
        }
    
        $matricule=session('matricule');
        $user = DB::table('Utilisateurs')->where('matricule', $matricule)->first();
        // Create new checklist
        $checkListMensuel = new CheckListMensuel();
        $checkListMensuel->created_by = $user->matricule;
        $checkListMensuel->test_Transmetteur_GSM = $request->test_Transmetteur_GSM;
        $checkListMensuel->test_Sonde_Thermique = $request->test_Sonde_Thermique;
        $checkListMensuel->salle_condition_mensuelle = $salle_condition_mensuelle;
        $checkListMensuel->salleID = $request->salleID;
        $checkListMensuel->imageTestGsm = $imageTestGsm;
        $checkListMensuel->imageTestSondeThermique = $imageTestSondeThermique;
    
        $checkListMensuel->save();
        $user = Auth::user();

        if ($checkListMensuel->salle_condition_mensuelle == 100) {
            $notification = new Notification([
                'title' => 'Vérification mensuelle complétée',
                'content' => "La vérification mensuelle de la salle serveur " . $checkListMensuel->salleID . " a été réalisée avec succès. Tous les systèmes fonctionnent normalement et aucune anomalie n'a été détectée.",
                'icon' => 'fas fa-check-circle text-success', // Add desired icon
                'action_link' => route('dashboard'),
                'utilisateur_matricule' => $user->matricule
            ]);
    
            $notification->save();
            // Appel de la méthode du service pour créer des enregistrements NotificationUser pour les utilisateurs actifs
            $this->notificationService->createNotificationUsers($notification);
        }
    
        return response()->json(['success' => true, 'message' => 'Liste de contrôle créée avec succès.']);
    }
    


    public function show($id)
    {
        // Find the checklist by id
        
        $checklistMensuel = CheckListMensuel::find($id);
        $matricule=$checklistMensuel->created_by;
        $user = DB::table('Utilisateurs')->where('matricule', $matricule)->first();

        // Check if checklist exists
        if (!$checklistMensuel) {
            return redirect()->back()->with('error', 'Checklist not found');
        }

        // Return the view with the checklist details
        return view('ShowCheckListMensuel', ['checklistMensuel' => $checklistMensuel, 'user' => $user]);
    }
    
}
