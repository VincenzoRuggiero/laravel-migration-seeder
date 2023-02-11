<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        //Displaying all trains in the database
        // $trains = Train::all();

        //Filtering trains leaving on a certain day
        $trains = Train::where('departure_time', 'LIKE', '2023-02-10%')->get();
        
        return view('home', compact('trains'));
    }
}
