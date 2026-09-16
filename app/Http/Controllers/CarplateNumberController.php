<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarplateNumber;
use App\Models\Category;
use App\Models\Tag;

class CarplateNumberController extends Controller
{
    public function index(Request $request)
    {
        $carplateNumbers = CarplateNumber::with(['category', 'tags'])->get();

        return view('carplate_number.index')
            ->with('carplateNumbers', $carplateNumbers);
    }

    public function create()
    {
        $categories = Category::where('is_active', 1)
            ->orderBy('arrangement')
            ->get();

        $tags = Tag::where('is_active', 1)
            ->orderBy('arrangement')
            ->get();

        return view('carplate_number.create')
            ->with('categories', $categories)
            ->with('tags', $tags);
    }

    public function store(Request $request)
    {
        $request->validate([
            'plate' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'amount' => 'required|numeric',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'exists:tags,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);
    
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('carplate_numbers', 'public');
        }
    
        $carplateNumber = CarplateNumber::create([
            'plate' => $request->plate,
            'category_id' => $request->category_id,
            'amount' => $request->amount,
            'image' => $imagePath,
            'is_active' => $request->is_active ?? 1,
        ]);
    
        $carplateNumber->tags()->sync($request->tag_ids ?? []);
    
        return redirect()
            ->route('carplate_number.index')
            ->withSuccess('Data saved');
    }
    
    public function update(Request $request, CarplateNumber $carplate_number)
    {
        $request->validate([
            'plate' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'amount' => 'required|numeric',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'exists:tags,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);
    
        $imagePath = $carplate_number->image;
    
        if ($request->hasFile('image')) {
            // delete old image if it exists
            if ($imagePath && \Storage::disk('public')->exists($imagePath)) {
                \Storage::disk('public')->delete($imagePath);
            }
            $imagePath = $request->file('image')->store('carplate_numbers', 'public');
        }
    
        $carplate_number->update([
            'plate' => $request->plate,
            'category_id' => $request->category_id,
            'amount' => $request->amount,
            'image' => $imagePath,
            'is_active' => $request->is_active ?? 1,
        ]);
    
        $carplate_number->tags()->sync($request->tag_ids ?? []);
    
        return redirect()
            ->route('carplate_number.index')
            ->withSuccess('Data updated');
    }

    public function edit(CarplateNumber $carplate_number)
    {
        $categories = Category::where('is_active', 1)
            ->orderBy('arrangement')
            ->get();

        $tags = Tag::where('is_active', 1)
            ->orderBy('arrangement')
            ->get();

        // Load existing tags for the edit form
        $carplate_number->load(['category', 'tags']);

        return view('carplate_number.create')
            ->with('carplateNumber', $carplate_number)
            ->with('categories', $categories)
            ->with('tags', $tags);
    }

    public function destroy(CarplateNumber $carplate_number)
    {
        $carplate_number->delete();

        return redirect()
            ->route('carplate_number.index')
            ->withSuccess('Data deleted');
    }
}