<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Location;
use Illuminate\Http\Request;

class TripController extends Controller
{

    public function createTrip(){
        $locations = Location::all();
        return view('pages.createTrip',['locations'=>$locations]);
    }
    public function storeTrip(Request $request){
        $request->validate([
            'date' => 'required',
            'location_id' => 'required',
        ]);

        $trip = new Trip();
        $trip->date = $request->date;
        $trip->location_id = $request->location_id;
        $trip->save();

        return back()->with('success', 'Trip created successfully!');
    }
   public function ourTrips(){
     $trips = Trip::all();
     
    return view('pages.ourTrip',['trips'=>$trips]);
   }
}
