<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rider;
use App\Models\Race;
use App\Models\Stage;


class DashboardController extends Controller
{
function dashboardgraph() {


$stageCount = Stage::all()->count();

$riderCount = Rider::all()->count();

$raceCount = Race::all()->count();

return view ('dashboard', ['stageCount' => $stageCount, 'riderCount' => $riderCount, 'raceCount' => $raceCount]);
    
}
function dashboardtinymce(){
    return view('dashboard-tinymce');
    
    }
    function dashboardcreate(){
        $data = Race::All();
        return view('dashboard-create',['data' => $data]);
    }
    public function store(Request $request)
    {
        try {
            $race = new Race;
            $race->default_name = $request->input('default_name');
            $race->link = $request->input('link');
            $race->country = $request->input('country');
            $race->type = $request->input('type');
            $race->save();
    
            return back()->with('success', "$race->default_name byl přidán do tabulky Race!");
        } catch (\Exception $e) {

            $request->session()->flash('error', "Nastala chyba při přidávání závodu! {$e->getMessage()}");
    
            return back(); 
        }
    }
}