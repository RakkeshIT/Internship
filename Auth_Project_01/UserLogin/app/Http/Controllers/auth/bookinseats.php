<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\bookins;
use Illuminate\Http\Request;

class bookinseats extends Controller
{
    public function booking(Request $request)
    {
        //echo "controller";
        /* $request->validate(
             [
                 'name' => 'required',
                 'email' => 'required',
                 'number' => 'required|numeric',
                 'wnumber' => 'required|numeric',
                 'address' => 'required',
                 'state' => 'required',
                 'seats' => 'required|numeric',
                 'tier' => 'required',
                 'selected' => 'required|numeric'
             ]
         );*/

        $inpute = new bookins();
        $inpute->name = $request->name;
        $inpute->email = $request->email;
        $inpute->number = $request->number;
        $inpute->wnumber = $request->wnumber;
        $inpute->address = $request->address;
        $inpute->state = $request->state;
        $inpute->seats = $request->seats;
        $inpute->tier = $request->tier;
        $inpute->selecteedSeats = $request->selected;
        $inpute->save();
        return redirect()->back()->with('success', 'Inserted Successfull');
    }

}
