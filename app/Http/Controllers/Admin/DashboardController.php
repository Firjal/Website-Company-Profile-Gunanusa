<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Certificate;
use App\Models\Experience;

class DashboardController extends Controller
{
    public function index()
    {
        $projectCount = Experience::count(); // atau Project::count() jika pakai model terpisah
        $certificateCount = Certificate::count();
        $awardCount = Award::count();

        return view('admin.dashboard', compact('projectCount', 'certificateCount', 'awardCount'));
    }
}
