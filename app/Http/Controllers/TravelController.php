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
        dd($request->all());
    }
    
}
