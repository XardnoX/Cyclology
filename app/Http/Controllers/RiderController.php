<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rider;
use App\Models\Raceyear;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class RiderController extends Controller
{
function riders() {

$data = Rider::All();
return view ('riders', ['data' => $data]);
    
}
function ridersdata($id) {

    $data = Rider::find($id);
        $stagesData = Rider::leftJoin('result', 'rider.id', '=', 'result.id_rider') 
        ->leftJoin('stage', 'result.id_stage', '=', 'stage.id')
        ->leftJoin('race_year', 'stage.id_race_year', '=', 'race_year.id') 
        ->leftJoin('race', 'race_year.id_race', '=', 'race.id') 
        ->select(
            'result.rank', 
            'stage.number as stage_number',
            'stage.date', 
            'stage.distance', 
            'race_year.real_name as race_name',     
            'result.id_stage as stage_id' 
        )
        ->where('rider.id', $id)->orderBy('result.rank','ASC')->paginate(5);


   
 

return view ('ridersdata', ['data' => $data, 'stagesData' => $stagesData]);

}
}