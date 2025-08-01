<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function history() {
        return view('about.history');
    }

    public function profile() {
        return view('about.profile');
    }

    public function organization() {
        return view('about.organization');
    }

    public function vision() {
        return view('about.vision');
    }

    public function policy() {
        return view('about.policy');
    }

    public function industrialModel() {
        return view('about.industrial-model');
    }
}
