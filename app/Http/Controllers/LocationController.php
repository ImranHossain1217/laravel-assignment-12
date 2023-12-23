<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function createLocation(){
        return view('pages.createLocation');
    }
    public function storeLocation(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $location = new Location();
        $location->name = $request->name;
        $location->save();

        return back()->with('success', 'Location created successfully!');
    }
}
