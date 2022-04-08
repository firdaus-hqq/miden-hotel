<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResepsionisController extends Controller
{
    public function show_dashboard_resepsionis() {
        return view('resepsionis.dashboard_resepsionis',[
            "title" => "Dashboard"
        ]);
    }

    public function show_ongoing() {
        return view('resepsionis.ongoing',[
            "title" => "On Going"
        ]);
    }

    public function show_pending() {
        return view('resepsionis.pending',[
            "title" => "Pending"
        ]);
    }

    public function show_history() {
        return view('resepsionis.history',[
            "title" => "History"
        ]);
    }
}
