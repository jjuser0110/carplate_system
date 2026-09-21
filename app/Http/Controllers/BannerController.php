<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('arrangement')->get();
        return view('banner.index', compact('banners'));
    }

    public function create()
    {
        return view('banner.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:500'],
            'media'       => ['required', 'file', 'mimes:jpg,jpeg,png,webp,mp4,webm', 'max:20480'],
            'arrangement' => ['required', 'integer', 'min:1'],
        ]);

        $file = $request->file('media');

        Banner::create([
            'title'       => $request->title,
            'description' => $request->description,
            'media_path'  => $file->store('banners', 'public'),
            'media_type'  => str_starts_with($file->getMimeType(), 'video/') ? 'video' : 'image',
            'arrangement' => $request->arrangement,
            'is_active'   => 1,
        ]);

        return redirect()->route('banner.index')->with('success', 'Banner created successfully.');
    }

    public function edit(Banner $banner)
    {
        return view('banner.form', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title'       => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:500'],
            'media'       => ['nullable', 'file', 'mimes:jpg,jpeg,png,webp,mp4,webm', 'max:20480'],
            'arrangement' => ['required', 'integer', 'min:1'],
            'is_active'   => ['required', 'boolean'],
        ]);

        if ($request->hasFile('media')) {
            Storage::disk('public')->delete($banner->media_path);

            $file = $request->file('media');
            $banner->media_path = $file->store('banners', 'public');
            $banner->media_type = str_starts_with($file->getMimeType(), 'video/') ? 'video' : 'image';
        }

        $banner->title       = $request->title;
        $banner->description = $request->description;
        $banner->arrangement = $request->arrangement;
        $banner->is_active   = $request->boolean('is_active');
        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy(Banner $banner)
    {
        Storage::disk('public')->delete($banner->media_path);
        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Banner deleted successfully.');
    }
}