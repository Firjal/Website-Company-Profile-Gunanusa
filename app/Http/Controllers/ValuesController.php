<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Certificate;
use Illuminate\Http\Request;

class ValuesController extends Controller
{
    public function safety() {
        return view('values.safety');
    }

    public function quality() {
        return view('values.quality');
    }

    public function certificate() {
        $certificates = Certificate::oldest()->get(); // atau ->paginate(12) jika ingin pagination
        return view('values.certificate', compact('certificates'));
    }

    public function awards() {
        $awards = Award::oldest()->get();
        return view('values.awards', compact('awards'));
    }
}
