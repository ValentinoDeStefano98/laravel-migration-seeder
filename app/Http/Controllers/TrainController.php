<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    //Rotta localhost/trains
    public function index(){

        $trains = Train::all();

        return view('pages.trains.index', compact('trains'));
    }
}
