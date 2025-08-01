<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::latest()->get();
        return view('admin.experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experience.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client' => 'required|string|max:255',
            'project_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'scope_of_work' => 'required|string',
            'description' => 'required|string',
            'project_duration' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('experiences', 'public');
        }

        Experience::create($validated);

        return redirect()->route('admin.experience.index')->with('success', 'Experience created successfully.');
    }

    public function edit(Experience $experience)
    {
        return view('admin.experience.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $validated = $request->validate([
            'client' => 'required|string|max:255',
            'project_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'scope_of_work' => 'required|string',
            'description' => 'required|string',
            'project_duration' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($experience->image && Storage::disk('public')->exists($experience->image)) {
                Storage::disk('public')->delete($experience->image);
            }

            $validated['image'] = $request->file('image')->store('experiences', 'public');
        }

        $experience->update($validated);

        return redirect()->route('admin.experience.index')->with('success', 'Experience updated successfully.');
    }

    public function destroy(Experience $experience)
    {
        if ($experience->image && Storage::disk('public')->exists($experience->image)) {
            Storage::disk('public')->delete($experience->image);
        }

        $experience->delete();

        return redirect()->back()->with('success', 'Experience deleted successfully.');
    }
}
