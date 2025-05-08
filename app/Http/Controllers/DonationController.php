<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::orderBy('created_at', 'desc')->with('category')->get();;
        return view('ads.index', compact('ads'));
    }

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

        return redirect()->route('ads.index')->with('success', 'Ad created successfully.');
    }

    public function create()
    {
        $categories = Category::all();
        return view('ads.create', compact('categories'));
    }
}
