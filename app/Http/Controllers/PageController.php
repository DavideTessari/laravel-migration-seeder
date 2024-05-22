<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $trains = Train::whereDate('orario_partenza', $today)->get();

        return view('home', compact('trains'));
    }
}
