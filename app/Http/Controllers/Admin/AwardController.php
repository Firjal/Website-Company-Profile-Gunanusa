<?php
namespace App\Http\Controllers\Admin;

use App\Models\Award;
use App\Models\AwardImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AwardController extends Controller
{
    public function index()
    {
        $awards = Award::with('images')->latest()->get();
        return view('admin.awards.index', compact('awards'));
    }

    public function create()
    {
        return view('admin.awards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $award = Award::create(['name' => $request->name]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('awards', 'public');
                AwardImage::create([
                    'award_id' => $award->id,
                    'image' => $path,
                ]);
            }
        }

        return redirect()->route('admin.awards.index')->with('success', 'Award created successfully.');
    }

    public function edit(Award $award)
    {
        $award->load('images');
        return view('admin.awards.edit', compact('award'));
    }

    public function update(Request $request, Award $award)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $award->update(['name' => $request->name]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('awards', 'public');
                AwardImage::create([
                    'award_id' => $award->id,
                    'image' => $path,
                ]);
            }
        }

        return redirect()->route('admin.awards.index')->with('success', 'Award updated successfully.');
    }

    public function destroy(Award $award)
    {
        foreach ($award->images as $img) {
            Storage::disk('public')->delete($img->image);
        }

        $award->delete();
        return back()->with('success', 'Award deleted.');
    }

    public function deleteImage($id)
    {
        $image = AwardImage::findOrFail($id);
        Storage::disk('public')->delete($image->image);
        $image->delete();
        return back()->with('success', 'Image deleted.');
    }
}
