<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class PageController extends Controller
{
    // LOGICA ROUTE HOME
    public function index()
    {

        // TRENI DATA ODIERNA
        // $trains = Train::whereDate('departure_time', today())->get();

        $trains = Train::paginate(20);

        // TEST
        // dd($trains);

        return view('home', compact('trains'));
    }
}
