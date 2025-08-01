<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    public function index() {
        return redirect()->route('facilities.yard-location');
    }
    public function yardLocation() {
        return view('facilities.yard-location');
    }

    public function facilityDetail() {
        return view('facilities.facility-detail');
    }

    public function labor() {
        return view('facilities.labor');
    }

    public function capabilities() {
        return view('facilities.capabilities');
    }

    public function constructionsEngineering() {
        return view('facilities.construction-engineering');
    }

}
