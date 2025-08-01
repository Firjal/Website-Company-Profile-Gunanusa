<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustrialModelController extends Controller
{
    public function index()
    {
        return redirect()->route('industrial-model.engineering');
    }

    public function engineering()
    {
        return view('industrial-model.engineering');
    }

    public function procurement()
    {
        return view('industrial-model.procurement');
    }

    public function construction()
    {
        return view('industrial-model.construction');
    }

    public function installationHookup()
    {
        return view('industrial-model.installation-hookup');
    }

    public function commissioning()
    {
        return view('industrial-model.commissioning');
    }
}
