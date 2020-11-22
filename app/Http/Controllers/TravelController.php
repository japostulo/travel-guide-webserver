<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TravelRepository;

class TravelController extends Controller
{   
    private $travel;

    public function __construct(TravelRepository $travel)
    {
        $this->travel = $travel;
    }

    public function index()
    {   
        $travel = $this->travel->all();
        return response()->json($travel);
    }

    public function store(Request $request)
    {   
        return response()->json($this->travel->store($request->all()));
    }

    public function show(Request $request)
    {
        $travel = $this->travel->find($request->id);
        return response()->json($travel);
    }

    public function update(Request $request)
    {
        $travel = $this->travel->update($request->id);
        return response()->json($travel);
    }

    public function delete(Request $request)
    {
        $travel = $this->travel->delete($request->id);
        return response()->json($travel);
    }   

    public function calc(Request $request)
    {   
        $lat1 = $request->lat1;
        $lon1 = $request->lon1;
        $lat2 = $request->lat2;
        $lon2 = $request->lon2;
        $dist = $this->distance($lat1, $lon1, $lat2, $lon2);
        $value = number_format($dist * 2.20, 2);
        return response()->json(["distance" => $dist, "value" => $value]);
    }
    
    public function distance($lat1, $lon1, $lat2, $lon2) { 
        //Fórmula de Haversine
        $radius = 6378.137;
        $dlon = $lon1 - $lon2; 
        $distance = acos( sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($dlon))) * $radius; 
        return round($distance);
      }
}
