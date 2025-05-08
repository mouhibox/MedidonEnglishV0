<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    // Display a listing of Ads and Donations (same controller functionality)
    public function index()
    {
        $ads = Ad::orderBy('created_at', 'desc')->with('category')->get();
        return view('ads.index', compact('ads'));
    }

    // Show the form for creating a new Ad (Donation)
    public function create()
    {
        $categories = Category::all();
        return view('ads.create', compact('categories'));
    }

    // Store a newly created Ad (Donation)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|string',
            'location' => 'required|string',
            'availability' => 'required|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('ads', 'public');
        }

        Ad::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'location' => $request->location,
            'availability' => $request->availability,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('ads.index')->with('success', 'Ad (Donation) created successfully.');
    }

    // Show the form for editing an existing Ad (Donation)
    public function edit($id)
    {
        $ad = Ad::findOrFail($id);
        $categories = Category::all();
        return view('ads.edit', compact('ad', 'categories'));
    }

    // Update an existing Ad (Donation)
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|string',
            'location' => 'required|string',
            'availability' => 'required|string',
        ]);

        $ad = Ad::findOrFail($id);

        $imagePath = $ad->image;
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($ad->image) {
                unlink(storage_path('app/public/' . $ad->image));
            }
            $imagePath = $request->file('image')->store('ads', 'public');
        }

        $ad->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'location' => $request->location,
            'availability' => $request->availability,
        ]);

        return redirect()->route('ads.index')->with('success', 'Ad (Donation) updated successfully.');
    }

    // Remove an existing Ad (Donation)
    public function destroy($id)
    {
        $ad = Ad::findOrFail($id);

        // Delete image from storage if exists
        if ($ad->image) {
            unlink(storage_path('app/public/' . $ad->image));
        }

        $ad->delete();

        return redirect()->route('ads.index')->with('success', 'Ad (Donation) deleted successfully.');
    }
}
