<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function currentProject() {
        return view('services.current-project');
    }

    public function experiences() {
        $experiences = Experience::all();

        $sortedExperiences = $experiences->sortByDesc(function ($item) {
            // Cari semua tahun (4 digit) dalam project_duration
            preg_match_all('/\d{4}/', $item->project_duration, $matches);

            if (!empty($matches[0])) {
                // Ambil tahun terakhir sebagai dasar pengurutan
                return (int) max($matches[0]);
            }

            // Jika tidak ada tahun 4 digit, fallback ke tahun 2 digit (20xx)
            preg_match_all('/\d{2}/', $item->project_duration, $matches2);
            if (!empty($matches2[0])) {
                // Tambahkan 2000 untuk estimasi tahun
                return (int) max($matches2[0]) + 2000;
            }

            return 0;
        });

        return view('services.experiences', ['experiences' => $sortedExperiences->values()]);
    }
}
