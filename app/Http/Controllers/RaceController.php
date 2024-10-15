<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class RaceController extends Controller
{
function race() {

$data = Race::paginate(15);
return view ('races', ['data' => $data]);
    
}
function delete($id) {
    try {
        $data = Race::find($id);
        $data->delete();   
        return back()->with('success', 'Smazání proběhlo úspěšně!');

    } catch (\Exception $e) {
        return back()->with('error', 'Smazání se nepovedlo: ' . $e->getMessage());
    }
}
public function edit($name, $id)
{
    $race = Race::findOrFail($id);
    return view('race-edit', ['race' => $race]);
}
public function update(Request $request,$id){
    try {
    $race = Race::findOrFail($id);
    $race->default_name = $request->input('default_name');
    $race->country = $request->input('country');
    $race->link = $request->input('link');
    $race->type = $request->input('type');
    $race->save();

    return redirect('/race'); 
    } catch (\Exception $e){


        $request->session()->flash('error', "Nastala chyba při editaci závodu! {$e->getMessage()}");
    
        return back(); 
    }
}
}