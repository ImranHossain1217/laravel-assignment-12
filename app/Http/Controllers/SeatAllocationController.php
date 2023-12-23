<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\SeatAllocation;

class SeatAllocationController extends Controller
{
    public function bookTicket(){
        $trips = Trip::all();
        $locations = Location::all();
        return view('pages.bookTicket',['trips'=>$trips,'locations'=>$locations]);
    }

    public function storeTicket(Request $request){
        
      $seatAllocation = new SeatAllocation();
      $seatAllocation->seat_number = $request->seat_number;
      $seatAllocation->location = $request->location;
      $seatAllocation->save();
      
      if($request->input('seat_number') !== $seatAllocation->seat_number){
          return back()->with('error', 'Ticket not booked!');
      }

      return back()->with('success', 'Ticket booked successfully!');
    }
}
