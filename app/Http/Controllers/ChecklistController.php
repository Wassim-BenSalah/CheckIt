<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CheckList;
use App\Models\Salle;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Notification; 
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\NotificationUser;
use App\Models\Utilisateurs;
use App\Services\NotificationService;

class ChecklistController extends Controller
{
        // Injectez le service dans le constructeur
        protected $notificationService; 
        public function __construct(NotificationService $notificationService)
        {$this->notificationService = $notificationService;}
    
        
    public function index(Request $request)
    {   
        $salles = Salle::all();
    
        // Check if search date is provided
        if ($request->has('search_date')) {
            // Filter checklists by search date
            $searchDate = $request->input('search_date');
            $checkList = CheckList::whereDate('created_at', $searchDate)->get();
        } else {
            // Default behavior: get all checklists
            $checkList = CheckList::all();
        }
    
        // Get the IDs of rooms selected today
        $selectedSalleIDs = CheckList::whereDate('created_at', Carbon::today())->pluck('salleID')->toArray();
    
        // Filter out the selected rooms from the list of all rooms
        $availableRooms = $salles->reject(function ($room) use ($selectedSalleIDs) {
            return in_array($room->salleID, $selectedSalleIDs);
        });
        

    // Check if 24 hours have passed and there are unchecked rooms
    $twentyFourHoursAgo = Carbon::now()->subHours(24);
    $uncheckedRooms = $availableRooms->filter(function ($room) use ($twentyFourHoursAgo) {
        return $room->created_at <= $twentyFourHoursAgo;
    });
    $user = Auth::user();
    // If there are unchecked rooms, create and save notification
    if ($uncheckedRooms->isNotEmpty() && !Notification::whereDate('created_at', Carbon::today())->exists()) {
        $notification = new Notification([
            'title' => 'Checklist en retard',
            'content' => "La checklist journalier pour une ou plusieurs salles n'a pas été effectuée. Veuillez vérifier et valider les salles avant la fin de la journée.",
            'icon' => 'fas fa-clock text-warning', // Add desired icon
            'action_link' => route('dashboard'),
            'utilisateur_matricule' => $user->matricule,
        ]);

        // Save the notification to the database
        $notification->save();
    
        // Appel de la méthode du service pour créer des enregistrements NotificationUser pour les utilisateurs actifs
        $this->notificationService->createNotificationUsers($notification);

    }

        if (session('role') == 'admin') {
            return view('admin.checklists', ['checkList' => $checkList, 'availableRooms' => $availableRooms]);
        } else {
            return view('technicien.checklists', ['checkList' => $checkList, 'availableRooms' => $availableRooms]);
        }
    }
    



    public function storeSalle(Request $request)

    {
        $validator = Validator::make($request->all(), [
        'salleID' => 'required|unique:salles|string|max:255'

        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        // Créer une nouvelle salle
        $salle = new Salle();
        $salle->salleID = $request->salleID;
    
        // Enregistrer la salle dans la base de données
        $salle->save();
        $user = Auth::user();
    
        // Create a notification
        $notification = new Notification([
            'title' => 'Nouvelle salle créée',
            'content' => 'La salle ' . $salle->salleID . ' a été créée avec succès.',
            'icon' => 'fas fa-exclamation-circle text-danger', // Add desired icon
            'action_link' => route('dashboard'),
            'utilisateur_matricule' => $user->matricule,
        ]);
        
        // Save the notification to the database
        $notification->save();
    
        // Appel de la méthode du service pour créer des enregistrements NotificationUser pour les utilisateurs actifs
        $this->notificationService->createNotificationUsers($notification);

    
        // Rediriger l'utilisateur après la création réussie de la salle
        return response()->json(['success' => true, 'message' => 'La salle a été créée avec succès.']);
    }
    
    


    public function storeCheckList(Request $request)
    {
        // Validate registration form data
        $validator = Validator::make($request->all(), [
            'salleID' => 'required',
            'test_temperature' => 'required',
            'test_backbone' => 'required',
            'test_onduleur' => 'required',
            'test_proprete' => 'required',
            'imageTestTemperature' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageTestBackbone' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageTestOnduleur' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageTestProprete' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],[
            'required' => 'Le champ :attribute est vide.',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        $imageTestTemperaturePath = $request->file('imageTestTemperature')->store('public');
        $imageTestBackbonePath = $request->file('imageTestBackbone')->store('public');
        $imageTestOnduleurPath = $request->file('imageTestOnduleur')->store('public');
        $imageTestPropretePath = $request->file('imageTestProprete')->store('public');
        
        // Remove 'public/' from the beginning of the paths to store in the database
        $imageTestTemperaturePath = str_replace('public/', '', $imageTestTemperaturePath);
        $imageTestBackbonePath = str_replace('public/', '', $imageTestBackbonePath);
        $imageTestOnduleurPath = str_replace('public/', '', $imageTestOnduleurPath);
        $imageTestPropretePath = str_replace('public/', '', $imageTestPropretePath);
    
        $salle_condition = 0;
    
        // Calculate salle_condition
        if ($request->test_temperature === "verified") {
            $salle_condition += 25;
        }
        if ($request->test_backbone === "verified") {
            $salle_condition += 25;
        }
        if ($request->test_onduleur === "verified") {
            $salle_condition += 25;
        }
        if ($request->test_proprete === "verified") {
            $salle_condition += 25;
        }
       
        $matricule=session('matricule');
        $user = DB::table('Utilisateurs')->where('matricule', $matricule)->first();
        // Create new checklist
        $checkList = new CheckList();
        $checkList->created_by = $user->matricule;
        $checkList->test_temperature = $request->test_temperature;
        $checkList->test_backbone = $request->test_backbone;
        $checkList->test_onduleur = $request->test_onduleur;
        $checkList->test_proprete = $request->test_proprete;
        $checkList->salle_condition = $salle_condition;
        $checkList->salleID = $request->salleID;
        $checkList->imageTestTemperature = $imageTestTemperaturePath;
        $checkList->imageTestBackbone = $imageTestBackbonePath;
        $checkList->imageTestOnduleur = $imageTestOnduleurPath;
        $checkList->imageTestProprete = $imageTestPropretePath;
    
        $checkList->save();
                $user = Auth::user();

        if ($checkList->test_temperature === 'not-verified') {
            $notification = new Notification([
                'title' => 'Anomalie Critique de Température',
                'content' => "Une anomalie critique a été détectée dans la salle serveur " . $checkList->salleID . ". L'unité de refroidissement présente une température anormale. Vérifiez immédiatement le statut du serveur et des équipements pour prévenir une surchauffe.",
                'icon' => 'fas fa-thermometer-full text-danger', // Add desired icon
                'action_link' => route('dashboard'),
                'checklist_id' => $checkList->id ,
                'utilisateur_matricule' => $user->matricule,
            ]);
        
            $notification->save();
            $this->notificationService->createNotificationUsers($notification);

        }
        
    
        if ($checkList->test_onduleur === 'not-verified') {
            $notification = new Notification([
                'title' => 'Niveau de batterie bas',
                'content' => "Le niveau de batterie de l'onduleur dans la salle serveur ".$checkList->salleID." est faible.Veuillez assurer la maintenance de la batterie pour éviter une coupure de courant.",
                'icon' => 'fas fa-battery-half text-warning', // Add desired icon
                'action_link' => route('dashboard'),
                'checklist_id' => $checkList->id,
                'utilisateur_matricule' => $checkList->id,
            ]);
    
            $notification->save();
            $this->notificationService->createNotificationUsers($notification);

        }

        if ($checkList->test_backbone === 'not-verified') {
            $notification = new Notification([
                'title' => 'Problème de connectivité',
                'content' => "Une perte de connectivité réseau a été détectée dans la salle serveur ".$checkList->salleID.",  Veuillez vérifier les connexions réseau.",
                'icon' => 'fas fa-network-wired text-danger', // Add desired icon
                'action_link' => route('dashboard'),
                'checklist_id' => $checkList->id,
                'utilisateur_matricule' => $user->matricule,

            ]);
    
            $notification->save();
            $this->notificationService->createNotificationUsers($notification);
        }
        return response()->json(['success' => true, 'message' => 'Liste de contrôle créée avec succès.']);
    }
    
    


    public function destroy($id)
    {
        // Find the check list by id
        $checkList=CheckList::where('id', $id)->first();
       
    // Delete related notifications
    $relatedNotifications = Notification::where('checklist_id', $checkList->id)->get();
    foreach ($relatedNotifications as $notification) {
        $notification->delete();
    }

    // Delete the images associated with the checklist
    Storage::delete([
        'public/' . $checkList->imageTestTemperature,
        'public/' . $checkList->imageTestBackbone,
        'public/' . $checkList->imageTestOnduleur,
        'public/' . $checkList->imageTestProprete,
    ]);

    // Delete the checklist
    $checkList->delete();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Checklist deleted successfully.');
    }


    public function show($id)
    {
        // Find the checklist by id

        $checklist = CheckList::find($id);
        $matricule=$checklist->created_by;
        $user = DB::table('Utilisateurs')->where('matricule', $matricule)->first();


        // Check if checklist exists
        if (!$checklist) {
            return redirect()->back()->with('error', 'Checklist not found');
        }
     

        // Return the view with the checklist details
        return view('showCheckList', ['checklist' => $checklist, 'user' => $user]);
    }
}



