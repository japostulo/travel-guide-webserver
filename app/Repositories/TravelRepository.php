<?php

namespace App\Repositories;

use App\Models\Travel;

class TravelRepository 
{
    public function all()
    {      
        return Travel::with('user', 'from', 'to')->where('user_id', request()->user)->get();
    }

    public function store($request)
    {
        return Travel::create($request);
    }
    
    public function find($id)
    {
        return Travel::with('user', 'from', 'to')->where('user_id', request()->user)->findOrFail($id);
    }

    public function update($id)
    {
        $travel = Travel::findOrFail($id);

        if($travel)
        {
            $travel->update(request()->all());
            return $travel;
        }
    }

    public function delete($id)
    {
        $travel = Travel::findOrFail($id);

        if($travel)
        {   
            $travel->delete($id);
            return $travel;
        }
    }
}