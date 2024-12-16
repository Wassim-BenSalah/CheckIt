<?php
namespace App\Http\Controllers;
use App\Models\CheckList;
use App\Models\CheckListMensuel;
use App\Models\Salle;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {        
        $checkList = CheckList::all();
        $checkListMensuelle = CheckListMensuel::all();
        $salles = Salle::all();
        
        // Initialize an array for the chart data
        $chartData = [];
        
        // Get the current month
        $currentMonth = Carbon::now()->format('Y-m');
        
        // Get all dates from checklists for the current month
        $dates = $checkList->pluck('created_at')
            ->map(function ($date) use ($currentMonth) {
                return Carbon::parse($date)->format('Y-m-d');
            })
            ->filter(function ($date) use ($currentMonth) {
                return strpos($date, $currentMonth) === 0;
            })
            ->unique()
            ->values()
            ->toArray();
        
        // Get all salle IDs with at least one entry in the checklists
        $salleIDs = $checkList->pluck('salleID')->unique();
    
        // Initialize chart data only for salle IDs with entries in the checklists
        foreach ($salleIDs as $salleID) {
            $chartData[$salleID] = array_fill_keys($dates, null);
        }
    
        // Populate chart data with existing checklist data for the current month
        foreach ($checkList as $checklist) {
            if($checklist->created_at->format('Y-m') == $currentMonth){
                $date = Carbon::parse($checklist->created_at)->format('Y-m-d');
                $chartData[$checklist->salleID][$date] = $checklist->salle_condition;
            }
        }

        // Pass the current month to the view
        $currentMonthData = $checkListMensuelle->filter(function ($item) use ($currentMonth) {
            return Carbon::parse($item->created_at)->format('Y-m') === $currentMonth;
        });
        
        if (session('role') == 'admin') {
            return view('admin.dashboard', compact('checkList', 'checkListMensuelle', 'salles', 'chartData', 'currentMonthData'));
        } else {
            return view('technicien.dashboard', compact('checkList', 'salles', 'checkListMensuelle', 'chartData', 'currentMonthData'));
        }
    }
}
?>